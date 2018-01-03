<?php
namespace App\Http\Controllers;
use App\About;
use App\Services;
use App\Gallery;
use App\Slider;
use App\Testimonial;
use App\Contactnumber;
use App\Sociallink;
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
        $contactnumber = Contactnumber::get();
        $social  = Sociallink::get();
        return view('frontend.home',compact('service','slider','review','about','contactnumber','social'));
    }

    public function about()
    {
        $about   = About::get();
        $contactnumber = Contactnumber::get();
        $social  = Sociallink::get();
        return view('frontend.about',compact('about','contactnumber','social'));
    }

   public function service()
    {
         $service = Services::get();
        $contactnumber = Contactnumber::get();
        $social  = Sociallink::get();
    	 return view('frontend.service',compact('service','contactnumber','social'));
    }

    public function gallery()
    {
        $galleries = Gallery::get();
        $contactnumber = Contactnumber::get();
        $social  = Sociallink::get();
    	 return view('frontend.gallery',compact('galleries','contactnumber','social'));
    }

    public function serviceDetails($slug)
    {
        $service = Services::where('slug','=',$slug)->first();
        $serviceList = Services::get();
        $contactnumber = Contactnumber::get();
        $social  = Sociallink::get();

       return view('frontend.servicedetails',compact('service','serviceList','contactnumber','social'));
    }




}
