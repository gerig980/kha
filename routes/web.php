<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\RoleController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\CoursesController;
use App\Http\Controllers\backend\DashboardController;
Use App\Http\Controllers\backend\BlogController;
use App\Http\Controllers\backend\EventController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\BookingController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\TeacherController;
use App\Http\Controllers\backend\SubscribeController;
use App\Http\Controllers\backend\PaymentController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::group(['prefix' => 'app'],function(){
        Route::get('permissions/{id}',[RoleController::class,'edit'])->name('permissions');
        // Route::put('permissions/{id}',[RoleController::class,'edit'])->name('permissions');
        Route::resource('roles', RoleController::class);
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');   
        //admins
        Route::get('admins', [UserController::class, 'indexAdmins'])->name('app.admins.index');
        Route::post('admins', [UserController::class, 'storeAdmin'])->name('app.admins.store');
        Route::delete('admins/{id}', [UserController::class, 'deleteAdmin'])->name('app.admins.delete');
        Route::put('admins/{id}', [UserController::class, 'updateAdmin'])->name('app.admins.update');
        //Contacts
        Route::get('contacts',[ContactController::class, 'index'])->name('contacts');
        Route::delete('contacts/delete/{id}',[ContactController::class,'destroy'])->name('contact.destroy');
        Route::get('all_contacts',[ContactController::class,'all_Contacts'])->name('all_Contacts');
        //Courses
        Route::get('courses',[CoursesController::class,'index'])->name('courses');
        Route::get('courses/{id}/edit',[CoursesController::class,'edit'])->name('courses.edit');
        Route::post('courses/store',[CoursesController::class,'store'])->name('courses.store');
        Route::put('courses/{id}/update',[CoursesController::class,'update'])->name('courses.update');
        Route::delete('courses/{id}/delete',[CoursesController::class,'destroy'])->name('courses.destroy');
        Route::get('all_courses',[CoursesController::class,'all_courses_search'])->name('all_courses');
        Route::get('courses/create',[CoursesController::class,'create'])->name('courses.create');
        Route::post('courses/image-upload',[CoursesController::class,'storeImage'])->name('image.upload.courses');
        Route::get('registered_course',[CoursesController::class,'registered_courses'])->name('registerd_courses');
        Route::get('all_courseRegister',[CoursesController::class,'all_register_course'])->name('all_register_course');
        Route::delete('course_register/{id}/delete',[CoursesController::class,'course_register_destroy'])->name('courseRegister.destroy');
        Route::put('course/updateStatus/{id}',[CoursesController::class,'updateStatus'])->name('course.updateStatus');
        //Blogs
        Route::get('blogs',[BlogController::class,'index'])->name('blogs');
        Route::get('create/blog',[BlogController::class,'create'])->name('blog.create');
        Route::get('allBlogs',[BlogController::class, 'all_Blogs'])->name('all_Blogs');
        Route::post('blog_store',[BlogController::class,'store'])->name('blog.store');
        Route::get('blog/edit/{id}',[BlogController::class,'edit'])->name('blog.edit');
        Route::put('blog/edit/{id}/update',[BlogController::class,'update'])->name('blog.update');
        Route::delete('blog_delete/{id}',[BlogController::class,'destroy'])->name('blog.destroy');
        Route::post('image-upload', [BlogController::class, 'storeImage'])->name('image.upload.blog');
        //Products
        Route::get('products',[ProductController::class,'index'])->name('products');
        Route::get('create/product',[ProductController::class,'create'])->name('product.create');
        Route::get('all_products_search',[ProductController::class,'all_products_search'])->name('all_products_search');
        Route::post('product/product_store',[ProductController::class,'store'])->name('product.store');
        Route::get('product/{id}',[ProductController::class,'edit'])->name('product.edit');
        Route::put('product/edit/{id}/update',[ProductController::class,'update'])->name('product.update');
        Route::delete('product_delete/{id}',[ProductController::class,'destroy'])->name('product.destroy');
        Route::post('image-upload/products', [ProductController::class, 'storeImage'])->name('image.upload.products');
        Route::get('delete-images-products/{id}/images/{imageName}',[ProductController::class, 'deleteImage'])->name('delete-images-products');
        //Events
        Route::get('events',[EventController::class,'index'])->name('events');
        Route::get('create/events',[EventController::class,'create'])->name('event.create');
        Route::get('all_events',[EventController::class,'all_events'])->name('all_events');
        Route::post('event/event_store',[EventController::class,'store'])->name('event.store');
        Route::get('event/{id}',[EventController::class,'edit'])->name('event.edit');
        Route::put('event/edit/{id}/update',[EventController::class,'update'])->name('event.update');
        Route::delete('event_delete/{id}',[EventController::class,'destroy'])->name('event.destroy');
        Route::post('image-upload/events',[EventController::class],'storeImage')->name('image.upload.events');
        //Booking
        Route::get('bookings',[BookingController::class,'index'])->name('bookings');
        Route::delete('bookings_delete/{id}',[BookingController::class,'destroy'])->name('booking.destroy');
        Route::get('all_bookings',[BookingController::class,'all_bookings'])->name('all_bookings');
        //Orders
        Route::get('orders',[OrderController::class,'index'])->name('orders');
        Route::put('orders/confirm_order/{id}',[OrderController::class,'confirm_order'])->name('confirm_order');
        Route::delete('orders/order_delete/{id}',[OrderController::class,'destroy'])->name('order.destroy');
        Route::get('order/edit/{id}',[orderController::class,'edit'])->name('order.edit');
        Route::get('order/show/{id}',[OrderController::class,'show'])->name('order.show');
        Route::get('all_orders',[OrderController::class,'all_orders'])->name('all_orders');
        //Teachers
        Route::get('teachers',[TeacherController::class,'index'])->name('teachers');
        Route::post('teacher/teacher_store',[TeacherController::class,'store'])->name('teacher.store');
        Route::get('teachers/edit/{id}',[TeacherController::class,'edit'])->name('teacher.edit');
        Route::put('teacher/teacher_update',[TeacherController::class,'update'])->name('teacher.update');
        Route::delete('teachers/delete/{id}',[TeacherController::class,'destroy'])->name('teacher.destroy');
        Route::get('all_teachers',[TeacherController::class,'all_teachers'])->name('all_teachers');
        Route::get('teacher/get-teacher/{id}',[TeacherController::class,'getTeacher'])->name('getTeacher');
        //Subscribes
        Route::get('subscribes',[SubscribeController::class,'index'])->name('subscribes');
        Route::get('all_subscribes',[SubscribeController::class,'all_subscribes'])->name('all_subscribes');
        Route::delete('subscribe/delete/{id}',[SubscribeController::class,'destroy'])->name('subscribe.destroy');
        //Cities
        Route::get('cities/shipping',[HomeController::class,'cities'])->name('cities');
        
    });
});

   Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
        Route::post('subscribe-store',[SubscribeController::class,'store'])->name('subscribe.store');
        Route::get('home',[HomeController::class,'home'])->name('home');
        Route::get('products',[HomeController::class,'allProducts'])->name('allProducts');
        Route::get('blogs',[HomeController::class,'blogs'])->name('blogs.front');
        Route::get('blogs/search',[HomeController::class,'BlogsSearch'])->name('blogs.search');
        Route::get('cart',[HomeController::class,'cart'])->name('cart');
        Route::get('checkout',[HomeController::class,'checkout'])->name('checkout');
        Route::get('courses',[HomeController::class,'courses'])->name('courses.front');
        Route::get('events',[HomeController::class,'events'])->name('events.front');
        Route::get('product/{id}',[HomeController::class,'shop'])->name('shop');
        Route::get('aboutus',[HomeController::class,'aboutus'])->name('aboutus');
        Route::get('blog/{id}',[HomeController::class,'single_blog'])->name('single_blog');
        Route::get('event/{id}',[HomeController::class,'single_event'])->name('single_event');
        Route::get('help-us-grow',[HomeController::class,'help_us_grow'])->name('help_us_grow');
        Route::post('booking-store',[BookingController::class,'store'])->name('booking.store');
        Route::post('order-store',[OrderController::class,'store'])->name('order.store');
        Route::post('course-register',[CoursesController::class,'courseRegister'])->name('course.register');
        Route::get('terms-service',[HomeController::class,'termsService'])->name('termsService');
        Route::get('privacy-policy',[HomeController::class,'privacyPolicy'])->name('privacyPolicy');
        Route::get('thankyou',[HomeController::class,'thankyou'])->name('thankyou');
        
    });
    Route::controller(PaymentController::class)
    ->prefix('paypal')
    ->group(function () {
        Route::view('payment', 'paypal.index')->name('create.payment');
        Route::post('handle-payment', 'handlePayment')->name('make.payment');
        Route::get('cancel-payment', 'paymentCancel')->name('cancel.payment');
        Route::get('payment-success', 'paymentSuccess')->name('success.payment');
    });