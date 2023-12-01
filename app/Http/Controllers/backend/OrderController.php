<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\City;
use App\Models\OrderItems;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
// use Omnipay\Omnipay;

class OrderController extends Controller
{
    
    private $gateway;

    // public function __construct() {
    //     $this->gateway = Omnipay::create('PayPal_Rest');
    //     $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
    //     $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
    //     $this->gateway->setTestMode(true);
    // }
    
    public function index(){
        return view('backend.orders.index');
    }
    
    public function show($id){
        $order = Orders::findOrFail($id);

        return view('backend.orders.show',compact('order'));
    }
    
    public function edit($id){
        $order = Orders::findOrFail($id);
        return view('backend.orders.edit',compact('order'));
    }
    
    public function store(Request $request){

        $validator = Validator::make($request->all(),[
            'name'      =>  'required|max:191',
            'surname'   =>  'required|max:191',
            'phone'     =>  'required|max:191',
            'address'   =>  'required|max:191',
            'city'      =>  'required|max:191'
            ]);
            
        if($validator->fails()){
            Session()->flash('message','Duhet te plotesoni te gjitha fushat e detyruara');
            Session()->flash('class','danger');
            return redirect()->back()->withInput();
        }
         $order_code = $this->uniqueNumber();
         
        
        $order = new Orders();

        $order->order_code = $order_code;
        $order->name = $request->name;
        $order->surname = $request->surname;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->city = $request->city;
        $order->country = $request->country;
        $order->zip_code = $request->zip_code;
        
        $order->payment_type = $request->payment_type;
        $city = City::where('name',$order->city)->first();

        $shippingFee = $city->shipping_fee;
        $order->shipping_fee = $shippingFee;
        $order->save(); // Save the order first to get the order ID
        
        $total = 0;

        foreach ($request->products as $product) {
            $orderItems = new OrderItems();
            $orderItems->order_id = $order->id; 
            $orderItems->product_id = $product['id'];
            $orderItems->quantity = $product['quantity'];
            $orderItems->size = $product['size'] ?? null;
            $orderItems->color = $product['color'] ?? null;
            $orderItems->price = $product['price'];
            $subtotal = $orderItems->price * $orderItems->quantity;
            $total += $subtotal; 
            $orderItems->save();
        }
        
        $order->total_sum = $total;
        $order->save();
// $provider = new PayPalClient;
// try {

//             $response = $this->gateway->purchase(array(
//                 'amount' => $request->$total,
//                 'currency' => env('PAYPAL_CURRENCY'),
//                 // 'returnUrl' => dd('success'),
//                 // 'cancelUrl' => dd('error')
//             ))->send();

//             if ($response->isRedirect()) {
//                 $response->redirect();
//             }
//             else{
//                 return $response->getMessage();
//             }

//         } catch (\Throwable $th) {
//             return $th->getMessage();
//         }


         $notification = array('message'=>'Porosia juaj u krye me sukses!','alert-type'=>'success');
         return redirect()->back()->with($notification);
        
    }
    
    public function confirm_order(Request $request,$id){
        $order  =   Orders::findOrFail($id);

        $order->status  =   $request->status;
        $order->save();
        if($request->status == 1){
            $notification = array('message'=>'Porosia u konfirmua','alert-type' => 'success');
            return redirect()->back()->with($notification);
        }else if($request->status == 2){
            $notification = array('message'=>'Porosia u anullua','alert-type' => 'danger');
            return redirect()->back()->with($notification);
        }else{
            return redirect()->back();
        }

    }
    
    public function destroy($id){
        $order = Orders::findOrFail($id);
        $order->delete();
        $notification = array('message'=>'Porosia u fshi me sukses!','alert-type'=>'success');
        return redirect()->back()->with($notification);
    }
    
    public function all_orders(Request $request)
    {
        if ($request->ajax()) {
            $data = Orders::latest();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $editUrl = route('order.edit', $row->id);
                    $showUrl = route('order.show', $row->id);
                    $deleteUrl = route('order.destroy', $row->id);
                    // $editBtn = '<a href="' . $editUrl . '" class="edit btn btn-success btn-sm" data-id="' . $row->id . '">Edit</a>';
                    $showBtn = '<a href="' . $showUrl . '" class="show btn btn-info btn-sm" data-id="' . $row->id . '">Show</a>';
                    $deleteBtn = '<form style="-webkit-box-shadow:none;box-shadow:none;" class="btn btn-sm" method="post" action="' . $deleteUrl . '">
                                    ' . method_field('DELETE') . '
                                    ' . csrf_field() . '
                                    <button type="submit" class="delete btn btn-danger btn-sm">Delete</button>
                                </form>';
                    return $showBtn . ' ' . $deleteBtn;
                })
                ->filter(function ($instance) use ($request) {
                    if ($request->get('approved') == '0' || $request->get('approved') == '1' || $request->get('approved') == '2' || $request->get('approved') == '3' || $request->get('approved') === null)  {
                            $instance->where('status', $request->get('approved'));
                        }
                        if (!empty($request->get('search'))) {
                             $instance->where(function($w) use($request){
                                $search = $request->get('search');
                                $w->orWhere('order_code', 'LIKE', "%$search%")
                                ->orWhere('name', 'LIKE', "%$search%")
                                ->orWhere('surname', 'LIKE', "%$search%")
                                ->orWhere('email', 'LIKE', "%$search%")
                                ->orWhere('phone', 'LIKE', "%$search%")
                                ->orWhere('city', 'LIKE', "%$search%");
                            });
                        }
        
                    })
                
                ->rawColumns(['action'])
                ->make(true);
        }
    }
    
    public function uniqueNumber()
    {
        do {
            $order_code = random_int(1000000, 9999999);
        } while (Orders::where("order_code", "=", $order_code)->first());

        return $order_code;
    }
    
    // public function success(Request $request)
    // {
    //     if ($request->input('paymentId') && $request->input('PayerID')) {
    //         $transaction = $this->gateway->completePurchase(array(
    //             'payer_id' => $request->input('PayerID'),
    //             'transactionReference' => $request->input('paymentId')
    //         ));

    //         $response = $transaction->send();

    //         if ($response->isSuccessful()) {

    //             $arr = $response->getData();

    //             $payment = new Payment();
    //             $payment->payment_id = $arr['id'];
    //             $payment->payer_id = $arr['payer']['payer_info']['payer_id'];
    //             $payment->payer_email = $arr['payer']['payer_info']['email'];
    //             $payment->amount = $arr['transactions'][0]['amount']['total'];
    //             $payment->currency = env('PAYPAL_CURRENCY');
    //             $payment->payment_status = $arr['state'];

    //             $payment->save();

    //             return "Payment is Successfull. Your Transaction Id is : " . $arr['id'];

    //         }
    //         else{
    //             return $response->getMessage();
    //         }
    //     }
    //     else{
    //         return 'Payment declined!!';
    //     }
    // }

    // public function error()
    // {
    //     return 'User declined the payment!';   
    // }

}
