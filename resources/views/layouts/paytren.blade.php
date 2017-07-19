@include('layouts.partials.header')
   <body>
     @yield('slide')
     @yield('content')
     @yield('promo1')
     @yield('promo2')
     @yield('promo3')
      <!-- Section start -->
      <section class="dark-bg padding-medium-top-bottom">
         <!-- request-a-callback-style-1  -->
         <div class="container">
            <div class="row request-a-callback">
               <div class="col-md-5">
                  <div class="welcome-text">
                     <h2>Anda meminta kami untuk dihubungi</h2>
                     <p>Apakah anda tertarik dan ingin bergabung bersama kami ? namun ada beberapa pertanyaan yang anda ajukan
                       .Silahkan Anda isi Form Di samping lalu kami akan menghubungi anda secepatnya</p>
                  </div>
               </div>
               <!-- col-md-5 close -->
               <div class="col-md-7">
                   {{Form::open(['url' => '/', 'method' => 'post'])}}
                     <div class="row">
                        <div class="col-md-6">
                           <label>Nama Anda*</label>
                          
                            {!! Form::text('name',null,array('class'=>'form-control','required')) !!}
                        </div>
                       
                     </div>
                     <!-- .row -->
                     <div class="row">
                        <div class="col-md-6">
                           <label>Email Anda*</label>
                           {!! Form::email('email',null,array('class'=>'form-control','required')) !!}
                        </div>
                        <div class="col-md-6">
                           <label>Nomor yang bisa dihubungi*</label>
                         
                            {!! Form::text('dihubungi',null,array('class'=>'form-control','required')) !!}
                        </div>
                     </div>
                     <!-- .row -->
                     <div class="submit-button">
                        <i class="fa fa-long-arrow-right"></i>
                        <input type="submit" value="Submit" class="btn btn-primary">
                     </div>
                     <!-- submit-button -->
                   {!! Form::close() !!}
                  <!-- form -->
               </div>
               <!-- col-md-7 close -->
            </div>
            <!-- row close -->
         </div>
         <!-- .container --><!-- Request a Call Back -->
      </section>
      <!-- section End-->

      <!-- Section start -->
      <section class="padding-large-top">
         <div class="container">
            <div class="welcome-text text-center wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".25s">
               <h2>Apa Kata Mereka tentang PAYTREN ?</h2>
               <p>Merubah transaksi bulanan menjadi sumber penghasilan</p>
            </div>
            <!-- .welcome-text-->
            <div class="testimonial-carousel">
               <div class="testimonial-item wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".2s">
                  <div class="row display-table">
                     <div class="col-md-8 verticla-align-middle text-right">
                        <div class="client-say">
                           <p>" Padahal begitu sibuk nya saya urus ke 3 anak yg masih kecil dan bayi yg baru 1th, setiap 2 minggu sekali bolak" ke RS buat control pasca operasi peristiwa kecelakaan, yg membuat mata hidung, muka bagian kiri saya masuk ke dalam 3 inc, mengurus Bisnis laundry yg di tinggal of sama karyawan, tapi itu tidak menjadi penghalang buat sya menuju sukses.”</p>
                           <div class="client-name">
                              <p><span>Asihkah Meliyawati</span><br>Jakarta - VP5280794</p>
                           </div>
                        </div>
                        <!-- client-say close -->
                     </div>
                     <!-- col-md-8 close -->
                     <div class="col-md-4 verticla-align-middle">
                        <div class="client-say-image">
                           <img src="/paytren/img/clients0img.png" alt="image">
                        </div>
                     </div>
                  </div>
                  <!-- .row-->
               </div>
               <div class="testimonial-item wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".2s">
                  <div class="row display-table">
                     <div class="col-md-8 verticla-align-middle text-right">
                        <div class="client-say">
                           <p>“sebuah pencapaian yg penuh liku tapi beliaulah yg sll menyemangati saya. <br><br>Terimakasih Kang smoga jd amal yg terus mengalir untuk keluarga dan keturunan..Untuk sahabat yg juga tergabung di forum ini teruslah berjuang..teruslah semangat smoga gerakan kecil kita bs menjadi kekuatan besar mewujudkan cita2 mulia membeli ulang Indonesia. Baca panduan, ulangi dan tanyakan jika ada kendala..Insyaallah sukses di PayTren itu mudah...”</p>
                           <div class="client-name">
                              <p><span>Rinawati</span><br>Yogyakarta - (VP8087833)s</p>
                           </div>
                        </div>
                        <!-- client-say close -->
                     </div>
                     <!-- col-md-8 close -->
                     <div class="col-md-4 verticla-align-middle">
                        <div class="client-say-image">
                           <img src="/paytren/img/clients0img.png" alt="image">
                        </div>
                     </div>
                  </div>
                  <!-- .row-->
               </div>
            </div>
            <!-- .testimonial-slider-->
         </div>
         <!-- container close --><!-- our Client Says style-1 -->
      </section>
      <!-- section End-->

     

      <!-- Section start -->
      <section class="padding-small-top-bottom padding-small-left-right"><!-- working-formula-area -->
         <div class="row display-table">
            <div class="col-md-6 col-sm-6 verticla-align-middle wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".25s">
               <div class="working-formula-image-holder">
                  <img src="/paytren/img/working-formula-image.png" alt="image">
               </div>
            </div>
            <!-- col-md-6 close-->
            <div class="col-md-6 col-sm-6 text-left verticla-align-middle wow fadeInRight" data-wow-duration="0.5s" data-wow-delay=".25s">
               <div class="working-formula-description"><!-- working-formula-description -->
                  <h2>Saatnya mengambil keputusan,  <span>Pilihan ada di tangan Anda!</span></h2>
                  <p>Semakin Anda MENUNDA maka Anda jangan menyesal karena
                    dipastikan Anda akan tertinggal oleh yang lainnya Ayo kita menjemput
                    sukses bersama PayTren Mau berbisnis sambil bersedekah, Alhamdulillah...
                    caranya tidak susah hanya menggunakan PONSEL kita bisa berbisnis dan bersedekah....

                  </p>
                  <div class="buttons-wrap">
                     <a href="#" class="btn btn-primary">Registrasi &nbsp;&nbsp;<i class="fa fa-long-arrow-right"></i></a>
                    
                  </div>
               </div><!-- working-formula-description close -->
            </div>
            <!-- col-md-6 close-->
         </div>
         <!-- row close -->
      </section>
      <!-- section End-->

     

      <!-- Section start -->
      <section class="light-bg-alt padding-large-top-bottom"><!-- pricing style-1 -->
         <div class="container">
            <div class="welcome-text text-center wow fadeInUp" data-wow-duration="0.5s">
               <h2>Paket <span>Lisensi bagi mitra</span> </h2>
               <p>Perusahaan menawarkan beberapa pilihan paket lisesi bagi mitra bisnis sesuai kebutuhan
               </p>
            </div><!-- welcome-text -->
            <div class="row text-center" >
               <div class="col-md-6 col-sm-6 single-price-left">
                  <div class="single-pricing wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".25s">
                     <div class="price-head-price dark-bg">
                        <h1>350 <sup>rb</sup> </h1>
                        <h4>Basic</h4>
                     </div>
                     <div class="price_menu">
                        <ul>
                           <li>1 License</li>
                           <li>Potensi Komisi Maksimum Rp.300.000/hari</li>
                           <li>Max Transaksi/bln 20 jt</li>
                           <li>Deposit Transaksi 15 rb</li>
                           <li>Produk Promo Perdana 1 BTL hasbro</li>

                           <li><a href="#" class="btn btn-dark view-more">Registrasi</a></li>
                        </ul>
                     </div><!-- price_menu -->
                  </div><!-- single-pricing -->
               </div><!-- col-md-4  -->
               <div class="col-md-6 col-sm-6 single-price-middle">
                  <div class="single-pricing wow fadeIn" data-wow-duration="0.5s" data-wow-delay=".25s">
                     <div class="price-head-price primary-bg">
                        <h1>10,1 Jt<sup></sup></h1>
                        <h4>Titanium</h4>
                     </div>
                     <div class="price_menu">
                        <ul>
                           <li>31 License</li>
                           <li>Potensi Komisi Maksimum Rp.9,3 Jt/hari</li>
                           <li>Max Transaksi/bln 50 jt</li>
                           <li>Deposit Transaksi 500 rb</li>
                           <li>Produk Promo Perdana 17 BTL hasbro</li>
                           <li>Booking Seat Umroh senilai 3,5 jt</li>
                           <li>Max deposit 155 jt</li>
                           <li><a href="#" class="btn btn-secondary view-more">Registrasi</a></li>
                        </ul>
                     </div><!-- price-menu -->
                  </div> <!-- single-pricing -->
               </div>
               <!-- col-md-4  -->

            </div><!-- row -->
         </div><!-- container-area close-->
      </section>
      <!-- section End-->

      <!-- Section start -->
      <section class="padding-small-left-right"><!--    Add Area -->
         <div class="advertise-area">
            <div class="row display-table">
               <div class="col-md-6 col-sm-6 text-right verticla-align-middle">
                  <div class="advertise-image-holder wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".25s">
                     <img src="/paytren/img/hp1.png" alt="">
                  </div>
               </div>
               <div class="col-md-6 col-sm-6 text-left verticla-align-middle">
                  <div class="add-description wow fadeInRight" data-wow-duration="0.5s" data-wow-delay=".25s">
                     <div class="welcome-text">
                        <h2>Dapatkan <span>Aplikasi PAYTREN</span></h2>
                        <p>DENGAN APLIKASI PAYTREN, SMARTPHONE ANDA BISA DIGUNAKAN UNTUK HAL-HAL BERIKUT  </p>
                     </div><!-- welcome-text -->
                     <ul class="add">
                        <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Beli Tiket Pesawat, Tiket Kereta, Voucer Game, Token PLN, Pulsa, Kartu HALO, MATRIX, XPLOR, THREE (Postpaid) </a></li>
                        <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Bayar BPJS, PDAM, TELKOM, SPEEDY, PLN Pasca, INDOVISION, BIG TV, INNOVATE TV, OKEVISION, TELKOMVISION, TRANSVISION, TOP TV, TV NEXMEDIA, YES TV </a></li>
                        <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Bayar BPJS, PDAM, TELKOM, IDOVISION, SPEEDY, PLN Pasca</a></li>
                        <li><a href="#"><i class="fa fa-arrow-circle-right"></i>FIF, BAF, MAF, WOM, MCF</a></li>
                        <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Transfer DEPOSIT, Bayar Sesama Mitra</a></li>
                        <li><a href="#"><i class="fa fa-arrow-circle-right"></i>dan fitur-fitur lainnya yang akan bertambah dan berkembang</a></li>
                     </ul>
                     <!-- ul -->
                     <ul class="app-store list-inline"><!-- app-store button -->
                        <li>
                           <a class="btn apple-store" href="https://itunes.apple.com/id/app/paytren-official-apps/id1123786849">
                           <i class="fa fa-apple pull-left"></i> Available on <span>App Store</span></a>
                        </li>
                        <li>
                           <a class="btn google-play" href="https://play.google.com/store/apps/details?id=com.treni.paytren">
                           <img src="/paytren/img/icon/google-play.png" class="pull-left" alt=""> Available on <span>Google Play</span></a>
                        </li>
                     </ul>
                     <!-- ul -->
                  </div><!-- add-description close-->
               </div><!-- col-md-6 close-->
            </div><!-- row close-->
         </div>
      </section>
      <!-- section End-->

    

       <section class="padding-small-left-right"><!--    Add Area -->
         <div class="advertise-area">
            <div class="row display-table">
               <div class="col-md-12 text-right verticla-align-middle">
                   <div class="welcome-text text-center wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".25s">
                       <img src="/paytren/img/jangantunda.png" alt="">
                        <img src="/paytren/img/daftar-paytren.gif" alt="">
                  </div>

               </div>
            </div><!-- row close-->
         </div>
      </section>
      <!-- section End-->


    @include('layouts.partials.footer')
