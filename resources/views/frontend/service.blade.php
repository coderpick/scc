     @extends('frontend.layouts.master')

  @section('title')
  Services-page
  @endsection 
 	 @section('content')
 	         <section id="page-content" class="page-wrapper">

            <!-- start services-area -->
            <div class="services-area ptb-175">
                <div class="container">
                    <div class="row">
                        <div class="section-title">
                            <h3> All Services</h3>
                            <span><img src="{{asset('public/frontend/images/icons/design-01.png')}}" alt=""></span>
                        </div>
                    </div>

                    <div class="row pt-40">
                        @if($service->count())
                            @foreach($service as $item)
                        <div class="col-md-4 col-lg-4 col-sm-4">
                            <div class="wow fadeInLeft single-item-service">
                                <div class="single-item-img">
                                    <img src="{{url('/storage/images/'.$item->image)}}" alt="service-member">
                                </div>
                                <div class="service-content">
                                    <div class="service-title">
                                        <a href="{{url('/service',$item->slug)}}">{{$item->title}}</a>
                                    </div>
                                    <p>{{str_limit($item->description, 50, ' (...)')}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <p>No record found!</p>
                        @endif
                    </div>
                </div>
            </div>
            <!-- End services-area -->

        </section>

 	 @endsection