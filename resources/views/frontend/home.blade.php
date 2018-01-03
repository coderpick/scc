 @extends('frontend.layouts.master')

  @section('title')
  Home-page
  @endsection	

 @section('content')
  @include('frontend.includes.slider')
  @include('frontend.includes.about')
  @include('frontend.includes.service')
  @include('frontend.includes.testimonial')
 @endsection