@extends('frontend.layouts.master')
  @section('title')
  Gallery-page
  @endsection   


 	 @section('content')
 	    <div id="fakeloader"></div>
        <section id="page-content" class="page-wrapper">

            <!-- start gallary-area -->
                <div class="gallary-area ptb-175">
                    <div class="isotope-filtering-area">
                        <div class="container">
                            <div class="row">
                                <div class="grid">

                                    @if($galleries->count())
                                        @foreach($galleries as $gallery)

                                    <div class="col-md-4 grid-item cat1 cat5 p-0">
                                        <div class="protfolio-item">
                                            <a href="{{url('/storage/gallery/'.$gallery->image)}}" data-lightbox="image-1" data-title="My caption here..."><img src="{{url('/storage/gallery/'.$gallery->image)}}" alt="gallary"></a>
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