@extends('layouts.paytren')

@section('content')

      @section('slide')
          @include('layouts.partials.slide')
      @endsection
        <div class="container">
                <div class="row">
               <div class="col-md-8 content-wrap blog-style-3 wow fadeIn" data-wow-duration="0.5s" data-wow-delay=".25s">
                  <!-- content-wrap -->
                  <article>
                     <div class="blog-post">
                        <div class="post-heading">
                           <span>Content Marketing</span>

                           <h3>{!! $post->title !!}</h3>
                        </div>
                        <!-- post-heading -->
                        <div class="entry-header">
                           <ul class="list-inline  post-meta">
                              <li><a href="#"><i class="fa fa-heart-o"></i> {{ count($posthit) }}</a>&mid;</li>
                              <li><a href="#"><i class="octicon octicon-comment"></i> 12</a>&mid;</li>
                              <li class="datemeta"><a href="#"><i class="fa fa-calendar-minus-o"></i> {{ $post->published_at->format('M jS Y g:ia') }} </a>&mid;</li>
                              <li><a href="#">{{ucfirst($post->PostByWriter->name)}}</a></li>
                           </ul>
                        </div>
                       
                        <!-- post-image-holder -->
                        <div class="entry-summary">
                          {!! $post->content !!}
                        </div>
                        <!-- entry-summary -->
                         @unless(count($post->CreateInputTag)==0)

                         Tag :
                         @foreach ($post->CreateInputTag as $key)

                         {!! link_to('tags/'.$key->slug
                                    ,ucfirst($key->name),['class'=>'list__link'],null)  !!}
                         {{$loop->remaining ? ',':''}}
                        @endforeach

                         @endunless
                         
                     </div>
                     <!-- blog-post -->
                     
                  </article>
                  <!-- article Close -->

                  <div class="saparator"></div>
                 
               
               </div>
                  @include('layouts.partials.widget')

            </div>
            <!-- row Close -->
            </div>

@endsection
