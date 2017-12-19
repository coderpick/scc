     @extends('frontend.layouts.master')

 	 @section('content')
 	               <section id="page-content" class="page-wrapper">

            <!-- start gallary-area -->
                <div class="gallary-area ptb-100">
                    <div class="isotope-filtering-area">
                        <div class="container">
                            {{--<div class="row">--}}
                                {{--<div class="col-md-12">--}}
                                    {{--<div class="protfolio-menu text-center  mb-30">--}}
                                      {{--<button class="active" data-filter="*">show all</button>--}}
                                      {{--<button data-filter=".cat1">metal</button>--}}
                                      {{--<button data-filter=".cat2">transition</button>--}}
                                      {{--<button data-filter=".cat3">alkali & alkaline</button>--}}
                                      {{--<button data-filter=".cat4">not transition</button>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}


                            <div class="row">
                                <div class="grid">
                                    @if($galleries->count())
                                        @foreach($galleries as $gallery)
                                    <div class="col-md-4 grid-item cat1 cat5 p-0">
                                        <div class="protfolio-item">
                                            <a href="{{url('/storage/gallary/'.$gallery->image)}}" data-lightbox="image-1" data-title="My caption here..."><img src="{{url('/storage/gallary/'.$gallery->image)}}" alt="gallary"></a>
                                        </div>
                                    </div>
                                        @endforeach
                                    @else
                                    <p>No gallary image found!</p>
                                    @endif
                                </div>
                            
                            </div>
                        </div>      
                    </div> 
                </div> 
            <!-- End gallary-area -->
        </section> 
 	 @endsection