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

class PaymentController extends Controller
{
    public function handlePayment(Request $request)
    {

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
            $total += $subtotal + $shippingFee; 
            $orderItems->save();
        }
        
        $order->total_sum = $total;
 
        $order->save();
        if($order->payment_type == 2){
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('success.payment', ['order_code' => $order_code]),
                "cancel_url" => route('cancel.payment'),
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $total
                    ]
                ]
            ]
        ]);
      


        if (isset($response['id']) && $response['id'] != null) {
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {

                    return redirect()->away($links['href']);
                }
            }
            return redirect()
                ->route('cancel.payment')
                ->with('error', 'Something went wrong1.');
        } else {
            return redirect()
                ->route('checkout')
                ->with('error', $response['message'] ?? 'Something went wrong.2');
        }
        }else{
             return redirect()
                ->route('thankyou')
                ->with('success', 'Transaction complete.');
        }
        
       
    }

    public function paymentCancel()
    {
        return redirect()
            ->route('checkout')
            ->with('error', $response['message'] ?? 'You have canceled the transaction.');
    }

    public function paymentSuccess(Request $request)
    {
        $orderCode = $request->order_code;
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);
        

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
              $transactionId = $response['id'];

             // Update the order with the transaction ID and payment status
            $order = Orders::where('order_code', $orderCode)->first();

            $order->payment_id = $transactionId;
            $order->payment_status = 'completed'; // You might want to adjust this based on your payment status logic
            $order->save();
            
            return redirect()
                ->route('thankyou')
                ->with('success', 'Transaction complete.');
        } else {
            return redirect()
                ->route('checkout')
                ->with('error', $response['message'] ?? 'Something went wrong succ.');
        }
    }
    
     public function uniqueNumber()
    {
        do {
            $order_code = random_int(1000000, 9999999);
        } while (Orders::where("order_code", "=", $order_code)->first());

        return $order_code;
    }
}