 <div id="service" class="services-area ptb-100">
                <div class="container">
                    <div class="row">
                        <div class="section-title">
                            <h3>Services</h3>
                            <span><img src="{{asset('public/frontend/images/icons/design-01.png')}}" alt=""></span>
                        </div>
                    </div>
                    <div class="row pt-40">
                        @if($service->count())
                            @foreach($service as $item)
                        <div class="col-md-4 col-lg-4 col-sm-4">
                            <div class="wow fadeInLeft single-item-service">
                                <div class="single-item-img">
                                    <img src="{{ url('/storage/images/'.$item->image)}}" alt="service-image">
                                </div>
                                <div class="service-content">
                                    <div class="service-title">
                                        <a href="{{url('/service',$item->slug)}}">{{$item->title}}</a>
                                    </div>
                                    <p>{{str_limit($item->description,150,' ...')}}   </p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        @else
                        <p>No recoard found!</p>
                        @endif
                    </div>

                        <div class="read-more">
                            <a href="{{url('/service')}}">Read more...</a>
                        </div>
                </div>
            </div>