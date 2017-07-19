@extends('layouts.member')

@section('content')
<div class="container">
    <div class="row">
        @include('member.sidebar')
<style>
.centered-text {
  text-align:center
}
.blink_me {
  animation: blinker 1s linear infinite;
}

@keyframes blinker {
  50% { opacity: 0; }
}
</style>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard Member Area</div>

                <div class="panel-body centered-text">

                  <img src="/paytren/img/member/upgrade-now.jpg" alt=""> <br/>
                  <h1 style="color:red">Upgrade Sekarang Juga di {{ config('app.name', 'Laravel') }},
                  , Karena Kami Sedang Membangun Kaki Besar di Seluruh Indonesia </h1>

                    <img src="/paytren/img/member/the-best-team.jpg" alt=""> <br/>
                    <img src="/paytren/img/member/down-arrow-animated.gif" alt="">
                    <img src="/paytren/img/member/down-arrow-animated.gif" alt="">
                    <img src="/paytren/img/member/down-arrow-animated.gif" alt="">
                    <img src="/paytren/img/member/down-arrow-animated.gif" alt="">
                    <img src="/paytren/img/member/down-arrow-animated.gif" alt="">
                    <img src="/paytren/img/member/down-arrow-animated.gif" alt="">

                    <br/>
                    <img src="/paytren/img/member/langkah1.png" alt="">
                    <ul class="list-group">
                      <li class="list-group-item">Pilih Jenis Lisensi yang Anda inginkan</li>
                        <img src="/paytren/img/member/basic.jpg" alt=""> <br/>
                        <img src="/paytren/img/member/titanium.jpg" alt="">
                    </ul>
                    <br/>

                    <img src="/paytren/img/member/langkah2.png" alt="">
                    <h4>Setelah Anda Memutuskan Paket Mana yang akan diambil
                      Selanjutnya Silahkan Hubungi Sponsor Anda
                      Kirim SMS Konfirmasi dengan format Sebagai berikut :
                    </h4>
                    <h3>Contoh Ketik :
                      Tiket E-PIN*Basic / Titanium*{{ Auth::user()->name }}*TN00488316*
                      Mohon di Proses
                    </h3>
                    <br/>
                    <h4>Kirim SMS Konfirmasi sesuai format diatas Ke NO HP SPONSOR Anda <h4>
                    <br/>
                    <img src="/paytren/img/member/down-arrow-animated.gif" alt="">
                    <img src="/paytren/img/member/down-arrow-animated.gif" alt="">
                    <img src="/paytren/img/member/down-arrow-animated.gif" alt="">
                    <img src="/paytren/img/member/down-arrow-animated.gif" alt="">
                    <img src="/paytren/img/member/down-arrow-animated.gif" alt="">
                    <img src="/paytren/img/member/down-arrow-animated.gif" alt="">
                    <br/>
                    <h2>  <a href="https://api.whatsapp.com/send?phone=6281905876212">Dewi: +62 819-0587-6212​⁠​</a> /
                      <a href="https://api.whatsapp.com/send?phone=6287883380506">Rio: +62 878-8338-0506</a></h2>

                    <h4>Kemudian Sponsor Akan Memesankan Deposit/Saldo E-pin Untuk Anda.
                      *Deposit/Saldo E-pin adalah besaran nominal yang digunakan untuk pembelian lisensi paket pebisnis Paytren.
                    </h4>
                    <h5 style="color:blue">TUNGGU Reply (balasan) sms/bbm/wa dari SPONSOR berisi info
                      jumlah nominal biaya yang harus SEGERA anda TRANSFER + Nominal
                      uniknya ke Rekening Kantor Pusat PT. Veritra Sentosa Internasional (VSI).
                    </h5>
                    <img src="/paytren/img/member/pic-tutorial-aktivasi-epin.jpg" alt=""><br/>
                    <p>* Gbr Diatas Hanya Contoh, Silahkan Tunggu SMS Info dari Sponsor Anda</p>
                    <h4 style="color:red">PENTING : Jangan Sampai Salah Menuliskan
                        Nomimal Transfer!! Agar aktivasi anda cepat diproses, TRANSFER-lah beserta Nominal Uniknya.</h4>
                      <img src="/paytren/img/member/langkah3.png" alt=""><br/>
                    <h1 style="color:red"><span class="blink_me">Langkah Terakhir</span> </h1>
                    <p>Setelah Sponsor Anda SUKSES melakukan Aktivasi,
                    Anda Akan Mendapatkan SMS dari PAYTREN PUSAT yang berisikan
                    ID Mitra, Password dan PIN, seperti contoh dibawah ini :</p>
                      <img src="/paytren/img/member/pic-tutorial-aktivasi-epin-19.jpg" alt=""> <br/>
                      <p style="color:green">
                        ID MITRA Wajib di INPUTKAN di Halaman
Update Profile Supaya ID Mitra Anda
Muncul di Web Replika Anda
                      </p>
                      <p>
                        Keterangan:
                        <ol>
                          <li>ID Mitra dan Password adalah ID Mitra dan Password yang digunakan untuk login di Web virtual office PayTren
                          <a href="https://office.paytren.co.id">https://office.paytren.co.id</a>
                          .<a href="http://mytreni.com">http://mytreni.com</a>
                           Web Report Transaksi  dan Login Aplikasi PayTren.</li>
                           <li>PIN Mitra adalah PIN yang digunakan untuk melakukan transaksi,
                           baik melalui sms biasa atau Aplikasi Paytren.</li>
                           <li>Mohon di Simpan Kerahasiaan ID Mitra, Password, dan PIN anda. Jangan Berikan kepada siapapun termasuk Petugas / CS PayTren.</li>
                        </ol>



      </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
