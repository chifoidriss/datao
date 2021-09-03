@extends('layouts.front.header')
@extends('layouts.front.navbar')
@section('content')
<section id="topbar" class="d-none d-lg-block" style='background-color:#f5921d'>
    <div class="container clearfix">
      
    </div>
</section>


<section class='container'>
  <div class="container">
            <h1 class="text-center font-weight-bold">ACHAT SIM</h1>
            <div class="row">
                <div class="col-sm-6 mt-4">
                    <div class="card">
                    <div class="card-header" style='background-color:#f5921d'>
                        <p class='text-center font-weight-bold' style='color:white'>SIM INTERNET</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src='../assets/img/logo_camtel.jpg' class='img-fluid'>
                            </div>

                            <div class="col-md-6 mt-4 font-weight-bold">
                                 SIM spécialement pour internet. Prix:500 FCFA
                                <div class="row mt-4 d-flex justify-content-center">
                                <a href="https://api.whatsapp.com/send/?phone=+237653936197&text=Salut Datao Solutions j'ai besoin d'une SIM BLUE"> <button  class="btn btn-success align-items-center">ACHETER</button></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 mt-4">
                    <div class="card">
                    <div class="card-header" style='background-color:#f5921d'>
                        <p class='text-center font-weight-bold' style='color:white'>SIM BLUE</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src='../assets/img/logo_camtel.jpg' class='img-fluid'>
                            </div>

                            <div class="col-md-6 mt-4 font-weight-bold">
                                SIM valable pour internet et appel de communication. Prix: 500FCFA
                                <div class="row mt-4 d-flex justify-content-center">
                                <a href="https://api.whatsapp.com/send/?phone=+237653936197&text=Salut Datao Solutions j'ai besoin d'une SIM BLUE"> <button  class="btn btn-success align-items-center">ACHETER</button></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    </div>
                </div>
  </div>
</section>
@include('layouts.front.footer')
@endsection
