<header class="header-style1">


   <div class="topbar-info-area">
     <div class="container">
       <div class="row">
         <div class="col-md-6 col-sm-6 col-xs-6">
           <div class="logo"><a href="#"><img src="/paytren/img/logo-paytren.png" alt="Scissors"></a></div>
         </div>
         <div class="col-md-6 col-sm-6 col-xs-6 text-right">
           <div class="topbar-info"><i class="fa fa-ellipsis-v"></i></div>
         </div>
       </div>
     </div>
   </div>  <!-- topbar-info-area -->

   <div class="logo-area">
      <div class="container">
         <div class="row">
            <div class="col-md-4">
               <a class="logo" href="index.html"><img src="/paytren/img/logo-paytren.png" alt="Ad Center"></a>
            </div>
            <div class="col-md-8">
               <div class="row site-contact-info">
                  <div class="col-md-4 col-sm-4 col-xs-4">
                     <div class="contact-info-inner">
                        <div class="info-icon expanded"><i class="pe-7s-mail-open"></i></div>
                        <p>Mau coba email kami?</p>
                        <P class="primary-color"><a href="mailto:info@paytrendepok.com">INFO@paytrendepok.com</a></P>
                     </div>
                     <!-- .site-contact-info -->
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-4">
                     <div class="contact-info-inner">
                        <div class="info-icon"><i class="pe-7s-phone"></i></div>
                        <p>Hubungi Kami Tlp/SMS/WA</p>
                        <P class="primary-color"><a href="https://api.whatsapp.com/send?phone=6281905876212">Dewi: +62 819-0587-6212​⁠​</a></P>
                     </div>
                     <!-- .site-contact-info -->
                  </div>
                 
               </div>
               <!-- .row -->
            </div>
         </div>
         <!-- row -->
      </div>
   </div><!-- logo-area -->


   <div class="topbar-toggle">
      <div class="topbar-close">
         <i class="pe-7s-close-circle"></i>
      </div><!-- .topbar-close -->

      <a class="logo" href="index.html"><img src="/paytren/img/logo-paytren.png" alt="Ad Center"></a>

      <div class="site-contact-info">
         <div class="contact-info-inner">
            <div class="info-icon expanded"><i class="pe-7s-mail-open"></i></div>
            <p>Mau coba email kami?</p>
            <P class="primary-color"><a href="mailto:info@paytrendepok.com">INFO@paytrendepok.COM</a></P>
         </div>

         <div class="contact-info-inner">
            <div class="info-icon"><i class="pe-7s-phone"></i></div>
            <p>Hubungi Kami</p>
            <P class="primary-color"><a href="https://api.whatsapp.com/send?phone=6281905876212">Dewi:+62 819-0587-6212​⁠​</a></P>
         </div>

       
      </div><!-- site-contact-info -->
   </div>

   <div class="nav-area sticky-header">
      <div class="container">
         <div class="header-nav">
            <div class="main-menu cssmenu">
               <ul class="menu list-inline">

                  <li class="active"><a href="{{URL('/')}}">Beranda</a>
                  </li>
                  <li>
                     <a href="{{URL('/about')}}">Profil</a>
                     <ul>
                         @foreach($pages as $page)

                           <li><a href="{{URL('/page')}}/{{$page['slug']}}">{{$page['title']}}</a></li>
                          @endforeach
                     </ul>
                  </li>
                  <li>
                     <a href="casestudies-1.html">Panduan</a>
                     <ul>
                        <li><a href="{{URL('/panduan/calon-mitra')}}">Calon Mitra Baru</a></li>
                        <li><a href="{{URL('/panduan/video-bisnis-paytren')}}">Video Bisnis Paytren</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="{{URL('/blog')}}">Berita</a>
                  </li>
                  <li>
                     <a href="blog1.html">Daftar</a>
                     <ul>
                        <li><a href="{{URL('/login')}}">Masuk</a></li>
                        <li><a href="{{URL('/register')}}">Daftar</a></li>
                     </ul>
                  </li>
                  <li><a href="{{URL('/contact')}}">Kontak</a></li>
                  <li class="search-box pull-right">
                     <a href="#"><i class="fa fa-search"></i></a>
                     <ul>
                        <li>
                           <div class="search-form">
                              <div class="row">
                                 <div class="col-md-8 col-sm-8 col-xs-8"><input type="text" placeholder="Search here..?" name="s" class="form-control"></div>
                                 <div class="col-md-4 col-sm-4 col-xs-4"><input type="submit" class="btn btn-dark" value="Search" name="submit"></div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </li>
                  <!-- .search-box -->
               </ul>
               <!-- .menu -->
            </div>
            <!-- .main-menu -->
         </div>
         <!-- .header-nav -->
      </div>
      <!-- .container -->
   </div>
   <!-- .nav-area -->


   <div class="slider-wrapper fullwidth-slider">
      <div id="slider1" class="slider-pro">
         <div class="sp-slides">
            <div class="sp-slide slide1-bg">
               <div class="sp-layer" data-position="centerRight" data-vertical="0" data-horizontal="8%" data-show-delay="1500" data-show-transition="left" data-hide-transition="right" data-width="32%"><img src="/paytren/img/slider/slide1.png" alt=""></div>

               <div class="welcome-text sp-layer"  data-position="centerLeft"
                  data-horizontal="7%" data-vertical="0"
                  data-show-transition="left" data-show-delay="1000" data-width="55%">
                  <h2 class="light-colortext">PAYTREN DIGITAL STRATEGY</h2>
                  <p class="light-colortext">
                    Gratis !!. Bimbingan Bisnis dan Panduan Sosial Media Marketing.Komunitas terbesar bisnis paytren
website promosi terbaik untuk semua mitra bisnis paytren, segera daftarkan id. mitra paytren anda sekarang juga. </p>
                  <div class="buttons-wrap">
                     <a class="btn btn-secondary" href="#">Registrasi&nbsp;&nbsp;<i class="fa fa-long-arrow-right"></i></a>
                    
                  </div>
               </div>
               <!-- welcome-text -->
            </div>
            <!-- .sp-slide -->
            <div class="sp-slide slide1-bg">
               <div class="sp-layer" data-position="centerLeft" data-vertical="0" data-horizontal="8%" data-show-delay="500" data-show-transition="left" data-width="32%"><img src="/paytren/img/slider/slide2.png" alt=""></div>
               <div class="welcome-text sp-layer"  data-position="topRight"
                  data-horizontal="7%" data-vertical="25%"
                  data-show-transition="left" data-show-delay="1000"  data-width="55%">
                  <h2 class="light-colortext">PAYTREN SOCIAL MEDIA STRATEGY</h2>
                  <p class="light-colortext">Memaksimalkan Media Sosial Sebagai Wadah untuk Bisnis yang Menguntungkan.Semua Hanya dalam
                  Genggaman Tangan Anda.Paytren peluang bisnis dan era baru bertransaksi yang menguntungkan. Menjadi lebih praktis, cepat dan hemat. Mensejahterakan ekonomi rakyat.
                  Saatnya menggunakan aplikasi paytren di HP anda. Ayo segeralah bergabung dan dapatkan keuntungannya sekarang juga !</p>
                  <div class="buttons-wrap">
                     <a class="btn btn-secondary" href="#">Registrasi&nbsp;&nbsp;<i class="fa fa-long-arrow-right"></i></a>
                     
                  </div>
               </div>
               <!-- welcome-text -->
            </div>
            <!-- .sp-slide -->
            <div class="sp-slide slide1-bg">
               <div class="sp-layer fade" data-position="centerRight" data-vertical="0" data-horizontal="8%" data-show-delay="500" data-show-transition="left" data-hide-transition="rigth" data-width="32%"><img src="/paytren/img/smartphones-paytren.png" alt=""></div>
               <div class="welcome-text sp-layer"  data-position="topLeft"
                  data-horizontal="7%" data-vertical="25%"
                  data-show-transition="left" data-show-delay="1000"  data-width="55%">
                  <h2 class="light-colortext">PAYTREN Digital MultiPayment Application</h2>
                  <p class="light-colortext">Paytren merubah pengeluaran jadi sumber penghasilan.
                    Bisnis baru yang berkembang pesat, saatnya mengambil keputusan, pilihan ada di tangan anda.
                    Jadilah keluarga besar paytren, raih sukses bersama kami, saatnya memutuskan, berhenti jadi penonton,
                    daftar sekarang !</p>
                  <div class="buttons-wrap">
                     <a class="btn btn-secondary" href="#">Registrasi&nbsp;&nbsp;<i class="fa fa-long-arrow-right"></i></a>
                   
                  </div>
               </div>
               <!-- welcome-text -->
            </div>
            <!-- .sp-slide -->
         </div>
         <!-- .sp-slides -->
      </div>
      <!-- #slider1 -->
   </div>
   <!-- .slider-wrapper -->
</header>
<!-- End-Header -->
