  <div id="about" class="about-us-area ptb-80 bg-5">
        <div class="white-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-6 p-0">
                    <div class="about-text">
                        <span class="about-text-logo"><img src="{{asset('public/frontend/images/logo/footer-01.png')}}" alt="logo"></span>
                     @if($about->count())
                         @foreach($about as $content)
                        <h5>
                            {{$content->about}}
                        </h5>
                         @endforeach
                         @endif
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6 p-0">
                    <div class="about-bg">
                        <img src="{{asset('public/frontend/images/bg/wedding_640.jpg')}}" alt="wedding">
                    </div>
                    <div class="about-title">
                        <h5>about us</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

