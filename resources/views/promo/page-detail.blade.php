@extends('layouts.paytren')

@section('content')

      @section('slide')
          @include('layouts.partials.slide')
      @endsection
      
         <section class="padding-large-top-bottom"><!-- resource-single -->
         <div class="resource-single">
            <div class="container">
               <div class="welcome-text text-center wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".45s">
                  <h2>{{$page->title}}</h2>
                      {{$page->desc}}
               </div>
               <!-- welcome-text -->
               <div class="row resource-slider-section  text-left">
                  <!-- col-md-6 -->
                  <div class="col-md-12 col-sm-8">
                     <div class="slide-details wow fadeInRight" data-wow-duration="0.5s" data-wow-delay=".25s">
                        <h3>{{$page->title}}</h3>
                      
							{!! $page->content !!}
                       
                     </div>
                  </div>
                  <!-- col-md-6 -->
               </div>
               <!-- row -->
         
            </div>
            <!-- container close-->
         </div>
         <!-- section close-->
      </section>
      <!-- section close-->


@endsection
