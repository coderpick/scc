@extends('frontend.layouts.master')
 @section('title')
  Contact-page
  @endsection 
@section('content')
    <section id="page-content" class="page-wrapper">
      <div class="contact-area" style="background: url('public/frontend/images/bg/wd-map.jpg')">
          <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="address">
                            <p> <i class="fa fa-map-marker"></i> Alir Zahan Main Rd, Cox's Bazar</p>
                            <p><i class="fa fa-globe"></i> saifulcommunitycenter.com</p>
                            <p> <i class="fa fa-phone"></i> 01815-555566</p>
                        </div>

                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="contact-form">
                            <script>
                                @if(Session::has('success'))
                                $.Notify({
                                    headerText:'{{ Session::get("success") }}',
                                    type:'Success',
                                    position:'bottom-right'
                                });
                                @endif
                            </script>
                            <div class="contact-heading text-center">
                                <h3>Let's Talk</h3>
                                <hr>
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

                                <form action="{{route('contact.store')}}" method="post" id="contactForm" autocomplete="off">
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
          <div class="address-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d328.25606249654214!2d91.9963466156546!3d21.437363973237783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30adc7dd19d97f57%3A0xcb4ae52f27f98837!2z4Ka44Ka-4KaH4Kar4KeB4KayIOCmleCmruCmv-CmieCmqOCmv-Cmn-CmvyDgprjgp4fgpqjgp43gpp_gpr7gprA!5e0!3m2!1sbn!2sbd!4v1514356849076" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>

    </section>
    @endsection

