     <div id="testimonial" class="testimonuial-area">
                <div class="slider-inner sbg-2" >
                    <div class="testimonuial">
                        <h5>testimonuial</h5>
                    </div>
                    <div class="test-overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <div class="testimonial-activator slider-content owl-carousel pt-100">

                                    @if($review->count())
                                        @foreach($review as $value)
                                            <div class="single-testimonial">
                                                <div class="clint-pic">
                                                    <img src="{{ url('/storage/images/'.$value->image)}}" alt="service-image">
                                                </div>
                                                <p class="text-center">{!! html_entity_decode($value->title) !!}</p>
                                            </div>

                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>