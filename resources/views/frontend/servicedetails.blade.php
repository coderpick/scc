     @extends('frontend.layouts.master')
  @section('title')
  Services details-page
  @endsection 
 	 @section('content')
 	         <section id="page-content" class="page-wrapper">

            <!-- start services-area -->
            <div class="services-area ptb-175">
                <div class="container">
                    <div class="service-detail-section">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="service-details">
                              <h3>{{$service->title}}</h3>
                                <hr class="line-bar">
                                <img class="img-responsive" width="120px" src="{{ url('/storage/images/'. $service->image)}}" alt="">
                                <p>{!! $service->description !!}</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="servcie-list">
                                <h3>Services</h3>
                                <hr class="line-bar">
                                <ul class="service-nav">
                                    @if($serviceList!=null)
                                      @foreach($serviceList as $value)
                                          <li><a href="{{url('/service',$value->slug)}}">{{$value->title}}</a></li>
                                      @endforeach
                                    @else
                                        <p>No recoard found!</p>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- End services-area -->

        </section>

 	 @endsection