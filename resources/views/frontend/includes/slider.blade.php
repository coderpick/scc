
        <!-- Start of slider area -->
        <div class="slider-area">
               <div class="slide-overlay"></div>
                <div class="container-fluid">
                     <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
                                <!-- Carousel indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>
                                <!-- Wrapper for carousel items -->
                                <div class="carousel-inner">
                                    @if($slider->count())
                                        @foreach($slider as $item)
                                            <div class="item" style="background: url({{asset('/storage/slider/'.$item->image)}});background-repeat: no-repeat;background-position: center;background-size: cover;">
                                                <div class="slider_cover" style="background:rgba(95, 60, 84, 0.8509803921568627);">
                                                <div class="hero-text text-center">
                                                    <h1>{{ $item->title }}</h1>
                                                    <p>{!!html_entity_decode($item->description)!!}</p>
                                                </div>
                                             </div>    
                                            </div>
                                        @endforeach
                                        @endif
                                 </div>
                        </div>
                     </div>
                </div>
        </div>

        </div>
        <!-- End of slider area -->
        
        <!-- side-menu -->
        <div class="slider-social">
            <span class="slider-social-trigger"><i class="fa fa-angle-right"></i></span>
            <ul>
                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
        </div>
        <!-- side-menu -->
