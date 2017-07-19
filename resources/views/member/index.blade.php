@extends('layouts.member')

@section('content')
<div class="container">
    <div class="row">
        @include('member.sidebar')
<style>
.centered-text {
  text-align:center
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
                    <div class="row">
                        <div class="span12 centered-text">
                          <h2>
                               <img src="/paytren/img/member/check_red.png" alt=""> Data Kontak Sponsor Anda
                                <img src="/paytren/img/member/check_red.png" alt="">
                          </h2>
                        </div>
                    </div>

                    <table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>ID Paytren</th>
            <th>Nama</th>
            <th>Email</th>
            <th>No Handphone</th>
            <th>Kota</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>123</td>
            <td>Rio</td>
            <td>admin@paytrendepo.com</td>
            <td>WA :
              <a href="https://api.whatsapp.com/send?phone=6281905876212">Dewi: +62 819-0587-6212​⁠​</a> /
              <a href="https://api.whatsapp.com/send?phone=6287883380506">Rio: +62 878-8338-0506</a>
            </td>
            <td>
              Depok - Jawa Barat , Indonesia
            </td>
        </tr>


    </tbody>
</table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
