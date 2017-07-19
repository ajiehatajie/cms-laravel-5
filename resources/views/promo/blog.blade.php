@extends('layouts.paytren')

@section('content')
   @section('slide')
          @include('layouts.partials.slide')
    @endsection
    
           <div class="container">
            <div class="row">
               <div class="col-md-8 content-wrap blog-style-2 wow fadeIn" data-wow-duration="0.5s" data-wow-delay=".25s">
                  <div class="row">
                     @unless(count($posts)==0)
                            @foreach ($posts as $post)

                     <div class="col-md-6">
                        <!-- col-md-6 ontent-wrap -->
                        <article>
                           <div class="blog-post">
                              <div class="post-heading">
                                 <span>{{$post->title}}</span>
                                 <h3>{{$post->title}}</h3>
                              </div>
                              <!-- post-heading -->
                              <div class="entry-header">
                                 <ul class="list-inline  post-meta">
                                    <li><a href="#"><i class="fa fa-heart-o"></i> 21</a>&mid;</li>
                                    <li><a href="#"><i class="octicon octicon-comment"></i> 12</a>&mid;</li>
                                    <li class="datemeta"><a href="#"><i class="fa fa-calendar-minus-o"></i> Jan 13, 2016 </a>&mid;</li>
                                    <li><a href="#">By Jamon James</a></li>
                                 </ul>
                              </div>
                              <!-- entry-header -->
                              
                              <!-- post-image-holder -->
                              <div class="entry-summary">
                                 <p 

                                  <span> {!! ucfirst(str_replace('""', '', str_limit($post->desc,200))) !!} </span>
                                 </p>
                                   {!!link_to('blog/'.$post->slug,
                                   ucfirst('Read More'),
                                   $attributes = ['class'=>'btn btn-primary'],
                                    $secure = null) !!}
                              
                              </div>
                              <!-- entry-summary -->
                           </div>
                           <!-- blog-post -->
                        </article>
                        <!-- article Close -->
                     </div>
                      @endforeach
                      @endunless

                           
                  </div>
                  <!-- blog-post-wrap -->
                 
                  <!-- blog-post-wrap -->
                  <div class="saparator"></div>
                  <div class="blog-pagination">
                    {!! $posts->links() !!}
                  </div>
                  <!-- .blog-pagination -->
               </div>
               <!-- col-md-8 Close-->
                <!-- widget here -->
            </div>
            <!-- row Close -->
         </div>
         <!-- container Close -->

@endsection
