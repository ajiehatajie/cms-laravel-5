@extends('layouts.paytren')

@section('content')

      @section('slide')
          @include('layouts.partials.slide')
      @endsection
      <section class="contact-us-area"><!-- .contact-us-area -->
         <!-- contact-us-area -->
         <div class="container">
            <div class="row contact-us-list text-center">
               <div class="col-md-3 col-sm-6">
                  <div class="contact-us-single-item wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".25s">
                     <div class="contact-us-icon img-circle">
                        <i class="pe-7s-home"></i>
                     </div>
                     <strong>Our Location</strong>
                     <p>1456,Tidel Villa,12th Floor,</p>
                     <p>West California 142,USA</p>
                  </div>
                  <!-- contact-us-single-item -->
               </div>
               <!-- col-md-3 close -->
               <div class="col-md-3 col-sm-6">
                  <div class="contact-us-single-item wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".45s">
                     <div class="contact-us-icon img-circle">
                       <i class="pe-7s-call"></i>
                     </div>
                     <strong>Call Us On</strong>
                     <p>(023) 85274 96347 0129</p>
                     <p>(01) 800 23 456 789</p>
                  </div>
                  <!-- contact-us-single-item -->
               </div>
               <!-- col-md-3 close -->
               <div class="col-md-3 col-sm-6">
                  <div class="contact-us-single-item wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".9s">
                     <div class="contact-us-icon img-circle">
                        <i class="pe-7s-mail"></i>
                     </div>
                     <strong>Send Message</strong>
                     <p>admin@adcenter.com</p>
                     <p>info@domain.com</p>
                  </div>
                  <!-- contact-us-single-item -->
               </div>
               <!-- col-md-3 close -->
               <div class="col-md-3 col-sm-6">
                  <div class="contact-us-single-item wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="1.2s">
                     <div class="contact-us-icon img-circle">
                        <i class="pe-7s-headphones"></i>
                     </div>
                     <strong>24 / 7 Help Desk</strong>
                     <p>(023) 78945 61237 894</p>
                     <p>(01) 800 23 456 789</p>
                  </div>
                  <!-- contact-us-single-item -->
               </div>
               <!-- col-md-3 close -->
            </div>
            <!-- row close -->
            <div class="row contact-us-form wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".25s">
               <h2 class="">Leave Your Message</h2>
               <form class="contact-form ">
                  <div class="col-md-6 col-sm-6">
                     <div class="blog-single-comment-form ">
                        <input type="text" placeholder="Your Name *" class="form-control ">
                        <input type="text" placeholder="Phone" class="form-control ">
                        <input type="text" placeholder="Your E-Mail*" class="form-control ">
                        <input type="text" placeholder="Subject" class="form-control ">
                     </div>
                  </div>
                  <!-- col-md-6 -->
                  <div class="col-md-6 col-sm-6">
                     <div class="blog-single-comment-form ">
                        <textarea name="comment" placeholder="Message" class="form-control"></textarea>
                        <input type="submit" value="Send Message" class="  btn btn-primary">
                     </div>
                  </div>
               </form><!-- form close-->
            </div>
            <!-- row close -->
         </div>
         <!-- container close -->
      </section>
      <!-- section close -->

@endsection
