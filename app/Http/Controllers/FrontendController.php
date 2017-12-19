<?php
namespace App\Http\Controllers;
use App\About;
use App\Services;
use App\Gallary;
use App\Slider;
use App\Testimonial;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
     public function index()
    {
        $service = Services::limit(6)->get();
        $slider  = Slider::get();
        $review  = Testimonial::get();
        $about   = About::get();
        return view('frontend.home',compact('service','slider','review','about'));
    }

   public function service()
    {
         $service = Services::get();
    	 return view('frontend.service',compact('service'));
    }

    public function gallary()
    {
        $galleries = Gallary::get();
    	 return view('frontend.gallary',compact('galleries'));
    }

    public function serviceDetails($id)
    {
        $service = Services::find($id);
        $serviceList = Services::get();
      //dd($service);
       return view('frontend.servicedetails',compact('service','serviceList'));
    }




}
