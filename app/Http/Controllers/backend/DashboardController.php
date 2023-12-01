<?php

namespace App\Http\Controllers\backend;

use Carbon\Carbon;
use App\Models\CourseRegister;
use App\Models\Booking;
use App\Models\Orders;
use Illuminate\Http\Request;
use App\Models\AskAppointment;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Notification;


class DashboardController extends Controller
{
    public function index(Request $request){
        
        $year = Carbon::now()->format('Y');
        $janCourse = CourseRegister::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', '01')->get();
        $febCourse = CourseRegister::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', '02')->get();
        $marchCourse = CourseRegister::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', '03')->get();
        $aprCourse = CourseRegister::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', '04')->get();
        $mayCourse = CourseRegister::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', '05')->get();
        $juneCourse = CourseRegister::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', '06')->get();
        $julyCourse = CourseRegister::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', '07')->get();
        $augCourse = CourseRegister::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', '08')->get();
        $septCourse = CourseRegister::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', '09')->get();
        $octCourse = CourseRegister::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', '10')->get();
        $novCourse = CourseRegister::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', '11')->get();
        $decCourse = CourseRegister::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', '12')->get();
        
         $janBooking = Booking::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', '01')->get();
        $febBooking = Booking::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', '02')->get();
        $marchBooking = Booking::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', '03')->get();
        $aprBooking = Booking::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', '04')->get();
        $mayBooking = Booking::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', '05')->get();
        $juneBooking = Booking::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', '06')->get();
        $julyBooking = Booking::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', '07')->get();
        $augBooking = Booking::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', '08')->get();
        $septBooking = Booking::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', '09')->get();
        $octBooking = Booking::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', '10')->get();
        $novBooking = Booking::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', '11')->get();
        $decBooking = Booking::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', '12')->get();
        
        $orders = Orders::orderBy('id','desc')->get();
   
        return view('dashboard',compact('janCourse','febCourse','marchCourse','aprCourse','mayCourse','juneCourse','julyCourse','augCourse','septCourse','octCourse','novCourse','decCourse',
        'janBooking','febBooking','marchBooking','aprBooking','mayBooking','juneBooking','julyBooking','augBooking','septBooking','octBooking','novBooking','decBooking',
        'orders'));
    }
    
}
