        <footer id="contact" class="footer-area">
            <div class="photogallary-area pt-50">
               <div class="container">
                   <div class="row">

                    <div class="col-md-4 col-lg-4 col-sm-6">
                        <div class="contact-info">
                            <div class="f-text">
                                <div class="gallary-content">
                                    <h3>contact us</h3>
                                    <div class="contact-us">
                                        <a href="phone:+8801815-555566"><i class="fa fa-phone"></i> +880 1815-555566(hotline)</a>
                                        <a href="phone:+8801815-555566"><i class="fa fa-phone"></i>+880 1815-555566(ambulance)</a>
                                        <a href="phone:+8801815-555566"><i class="fa fa-phone"></i>+880 1815-555566(car rent)</a>
                                        <a href="mailto:satils@yahoo.com"><i class="fa fa-envelope-o"></i>satils@yahoo.com</a>
                                    </div>
                                </div>
                            </div> 
                            <ul class="social-icon">
                               <li><a href="#"><i class="fa fa-skype"></i></a></li>
                               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                               <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-4 col-sm-6">

                        <div class="gallary-logo">
                        <div class="shadow"></div>
                            <img src="{{asset('frontend/images/logo/footer-01.png')}}" alt="footer-01">
                        </div>
                        <div class="newsletter">
                            <h3>news letter</h3>
                            <form action="" method="post">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter email">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-default">Submit</button>
                                    </span>
                                </div>
                            </form>

                        </div>
                    </div>

                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">

                        <script>
                            @if(Session::has('success'))
                            $.Notify({
                                headerText:'{{ Session::get("success") }}',
                                type:'Success',
                                position:'bottom-right'
                            });
                            @endif
                        </script>
                        <div class="gallary-content">
                            <h3>Let's Talk</h3>
                        </div>

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

                        <div class="feedback-form">

                            <form action="{{route('contact.store')}}" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Please enter name" >
                                </div>
                                <div class="form-group">
                                    <input type="text" name="mobile" class="form-control" placeholder="Please enter Mobile no." >
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" name="message" placeholder="Write your message" ></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div> 

            <!-- end footer-bottom -->
            <div class="footer-bottom text-center">
                <div class="container">
                    <div class="wow zoomIn row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col">
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
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.notify.js')}}"></script>
    <script src="{{asset('frontend/js/smooth-scroll.min.js')}}"></script>
    <!-- All js plugins included in this file. -->
    <script src="{{asset('frontend/js/plugins.js')}}"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="{{asset('frontend/js/main.js')}}"></script>
    <script>
        {{--$(document).ready(function () {--}}
            {{--$('#submit').click(function (e) {--}}
                {{--e.preventDefault();--}}
                {{--var name = $('#name').val();--}}
                {{--var email = $('#email').val();--}}
                {{--var token = $('#csrf_token').val();--}}
                {{--var message = $('#message').val();--}}

                {{--if(name =="" || email == "" || message ==""){--}}
                    {{--alert("Field must not be Empty!");--}}
                {{--}--}}

                {{--$.ajax({--}}
                    {{--type:'post',--}}
                    {{--data:'name=' +name +'&email=' +email +'&message='+message +'&token='+token,--}}
                    {{--url:'{{ route('contact.store') }}',--}}
                    {{--success:function (data) {--}}
                        {{--console.log(data);--}}
                    {{--}--}}
                {{--});--}}

            {{--})--}}
        {{--});--}}

    </script>
</body>

</html>