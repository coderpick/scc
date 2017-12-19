
        <!-- Start of slider area -->
        <div class="slider-area">
            <div class="slider-inner sbg-1" data-overlay="6">
                <div class="container">
                     <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="carousel-activator slider-content owl-carousel">
                                @if($slider->count())
                                @foreach($slider as $value)
                                <div class="banner-single">
                                    <h1 class="wow fadeInRight">{{ $value->title }}</h1>
                                    <p class="wow fadeInLeft">{{ $value->description }}</p>
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
