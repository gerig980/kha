<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Course;
use App\Models\Event;
use App\Models\Product;
use App\Models\City;



class HomeController extends Controller
{
    public function home(){
        return view('frontend.home') ; 
    }

    public function allProducts(){
        $products = Product::all();
        return view('frontend.allproducts',compact('products')) ; 
      }

    public function blogs(){
        $blogs = Blog::orderBy('id','desc')->get();
        return view('frontend.blogs',compact('blogs')) ; 
    }

    public function cart(){

        return view('frontend.cart') ; 
    }

    public function checkout(){
        $cityAlb = City::where('country_id',1)->get();
        $cityKs  = City::where('country_id',2)->get();
        $cityMk  = City::where('country_id',3)->get();
        return view('frontend.checkout',compact('cityAlb','cityKs','cityMk')) ; 
    }
    
    
    public function courses(){
        $courses = Course::where('status',1)->orderBy('id','desc')->get();

        return view('frontend.courses',compact('courses')) ; 
    }

    public function events(){
        $events = Event::orderBy('id','desc')->get();
        $event = Event::where('isBanner',1)->first();

        return view('frontend.events',compact('event','events'));
    }
    public function single_event($id)
    {
        $event = Event::findOrFail($id);
        $events = Event::take(2)->orderBy('id','desc')->get();

        return view('frontend.single-event',compact('event','events'));
    }

    public function shop($id){
        $product = Product::findOrFail($id);
        return view('frontend.shop',compact('product'));
    }
    public function aboutus(){
         return view('frontend.aboutus');
    }

    public function single_blog($id)
    {
        $blog = Blog::findOrFail($id);
        $blogs = Blog::take(4)->orderBy('id','desc')->get();
        return view('frontend.single-blog',compact('blog','blogs'));
    }

    public function help_us_grow()
    {
        return view('frontend.help-us-grow');
    }
    
    public function BlogsSearch(Request $request)
    {
        $blogs = Blog::query();

        if (!empty($request->q)) {
        $blogs->where(function($query) use ($request) {
                $query->where('title', 'LIKE', '%' . $request->q . '%')
                ->orWhere('title_en','LIKE','%' . $request->q . '%');
        });
        }
    
        $blogs = $blogs->orderBy('id','desc')->get();
        
        return view('frontend.blogs',compact('blogs')) ; 
    }

    public function termsService(){
        return view('frontend.terms-service');
    }
    
    public function privacyPolicy(){
        return view('frontend.privacy-policy');
    }
    
    public function thankyou(){
        return view('frontend.thankyou');
    }
    
   public function cities(Request $request){
    $cities = City::all();

    foreach ($cities as $city) {
        $city->shipping_fee = $city->shipping_fee; 
    }

    return response()->json(['cities' => $cities]);
}

}
