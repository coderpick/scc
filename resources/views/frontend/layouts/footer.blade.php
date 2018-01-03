        <footer id="contact" class="footer-area">
            <div class="photogallary-area pt-50">
               <div class="container">
                   <div class="row">

                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="contact-info">
                            <div class="f-text">
                                <div class="gallary-content">
                                    <h3>contact us</h3>
                                    <div class="contact-us">
                                        @if($contactnumber->count())
                                            @foreach($contactnumber as $number)
                                       <a href="{{ $number->mobile }}"><i class="fa fa-phone"></i>+88 {{ $number->mobile }}({{ $number->department }})</a>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-4 col-lg-4">

                        <div class="gallary-logo">
                        <div class="shadow"></div>
                            <img src="{{asset('public/frontend/images/logo/footer-01.png')}}" alt="footer-01">
                        </div>
                        <div class="newsletter">
                            <h3>news letter</h3>
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <script>
                                        $.Notify({
                                            headerText:'{{$error}}',
                                            type:'Failure',
                                            position:'bottom-right'
                                        });
                                    </script>
                                @endforeach
                            @endif
                            <form action="{{route('newsletter.store')}}" method="post" id="myform" autocomplete="off">
                                {{--{{csrf_field()}}--}}
                                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                <div class="input-group">
                                    <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                                    <span class="input-group-btn">
                                        <button type="submit" id="saveEmail" class="btn btn-default">Submit</button>
                                    </span>
                                </div>
                            </form>

                        </div>
                    </div>

                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="contact-info">
                            <div class="f-text">
                                <div class="gallary-content">
                                    <h3>Follow us</h3>
                                </div>
                            </div>
                            <div class="text-center">
                                <ul class="social-icon">
                                    @if($social->count())
                                        @foreach($social as $link)

                                            <li><a href="{{ $link->url }}" target="_blank">
                                                    @if($link->title == 'facebook')
                                                    <i class="fa fa-facebook"></i>
                                                    @elseif($link->title == 'twitter')
                                                        <i class="fa fa-twitter"></i>
                                                    @elseif($link->title == 'linkedin')
                                                        <i class="fa fa-linkedin"></i>
                                                    @elseif($link->title == 'skype')
                                                        <i class="fa fa-skype"></i>
                                                    @else
                                                       <p>No link found!</p>
                                                    @endif
                                                </a></li>
                                        @endforeach
                                    @endif

                                </ul>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div> 

            <!-- end footer-bottom -->
            <div class="footer-bottom text-center">
                <div class="container">
                    <div class="wow zoomIn row">
                        <div class="col-md-12 col-lg-12 col-sm-12">
                            <div class="footer_info">
                                <p>Copyright &copy; {{ date('Y')}} Saiful community center</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end footer-bottom -->
	   </footer>
        <!-- End footer area -->
    </div>
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->
    <!-- jquery latest version -->

    <!-- Bootstrap framework js -->
    <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.notify.js')}}"></script>
    <script src="{{asset('public/frontend/js/smooth-scroll.min.js')}}"></script>
    <!-- All js plugins included in this file. -->
    <script src="{{asset('public/frontend/js/plugins.js')}}"></script>    
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="{{asset('public/frontend/js/main.js')}}"></script>
    <script>
        $(document).ready(function (){
                 /* for news letter */
            $('#myform').submit(function(event) {
                event.preventDefault();
                var x = $('#myform').serializeArray();
                // console.log(x);
                $.post(
                    $('#myform').attr('action'),
                    x,
                    function(data) {

                        $.Notify({
                            headerText:'Thanks for sign up',
                            type:'Success',
                            position:'bottom-right'
                        });
                    }).fail(function() {
                    $.Notify({
                        headerText:' information Save Failed',
                        type:'Failure',
                        position:'bottom-right'
                    });
                });
                document.getElementById("myform").reset();
        });

         /*
         * for contact form
         */

            $('#contactForm').submit(function(event) {
                event.preventDefault();
                var allcontact = $('#contactForm').serializeArray();
                // console.log(allcontact);

                $.post(
                    $('#contactForm').attr('action'),
                    allcontact,
                    function(data) {
                        $.Notify({
                            headerText:' Thanks for submitting your information',
                            type:'Success',
                            position:'bottom-right'
                        });
                    }).fail(function() {
                    $.Notify({
                        headerText:' information Save Failed',
                        type:'Failure',
                        position:'top-right'
                    });
                });
               // setTimeout(location.reload.bind(location), 3000)
                document.getElementById("contactForm").reset();
               });


     
           

        });

        //    for sticky nav
       (() => {
              'use strict';

              let refOffset = 0;
              const bannerHeight = 50;
              const bannerWrapper = document.querySelector('.header-area');
              const banner = document.querySelector('.primary-menu-area');

              const handler = () => {
                const newOffset = window.scrollY || window.pageYOffset;

                if (newOffset > bannerHeight) {
                  if (newOffset > refOffset) {
                    bannerWrapper.classList.remove('animateIn');
                    bannerWrapper.classList.add('animateOut');
                  } else {
                    bannerWrapper.classList.remove('animateOut');
                    bannerWrapper.classList.add('animateIn');
                  }
                  banner.style.background = 'rgba(56, 32, 48, 0.8)';
                  refOffset = newOffset;
                } else {
                  banner.style.backgroundColor = 'rgba(56, 32, 48, 1)';
                }
              };

              window.addEventListener('scroll', handler, false);
            })();
  
    </script>
</body>

</html>