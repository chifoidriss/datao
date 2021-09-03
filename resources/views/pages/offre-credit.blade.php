@extends('layouts.front.header')
@extends('layouts.front.navbar')
@section('content')
<section id="topbar" class="d-none d-lg-block" style='background-color:#f5921d'>
    <div class="container clearfix">
      
    </div>
</section>


<section class='container'>
  <div class="container">
            <h1 class="text-center font-weight-bold">RECHARGE CREDIT</h1>
            <div class="row">
                <div class="col-sm-3 mt-4">
                    <div class="card">
                    <a href="{{url('/whatsapp',2000)}}">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src='../assets/img/logo_camtel.jpg' class='img-fluid'>
                            </div>

                            <div class="col-md-6 mt-4 font-weight-bold">
                               <p class="" style='color:#52504d;'>Credit 2000F</p> 
                            </div>
                        </div>
                        
                    </div>
                    </a>
                    </div>
                </div>
                <div class="col-sm-3 mt-4">
                    <div class="card">
                    <a href="{{url('/whatsapp',5000)}}">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src='../assets/img/logo_camtel.jpg' class='img-fluid'>
                            </div>

                            <div class="col-md-6 mt-4 font-weight-bold">
                            <p class="" style='color:#52504d;'>Credit 5000F</p>
                            </div>
                        </div>
                        
                    </div>
                    </a>
                    </div>
                </div>

                <div class="col-sm-3 mt-4">
                    <div class="card">
                    <a href="{{url('/whatsapp',10000)}}">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src='../assets/img/logo_camtel.jpg' class='img-fluid'>
                            </div>

                            <div class="col-md-6 mt-4 font-weight-bold">
                            <p class="" style='color:#52504d;'>Credit 10.000F</p>
                            </div>
                        </div>
                        
                    </div>
                    </a>
                    </div>
                </div>

                <div class="col-sm-3 mt-4">
                    <div class="card">
                    <a href="{{url('/whatsapp',15000)}}">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src='../assets/img/logo_camtel.jpg' class='img-fluid'>
                            </div>

                            <div class="col-md-6 mt-4 font-weight-bold">
                            <p class="" style='color:#52504d;'>Credit 15.000F</p>
                            </div>
                        </div>
                        
                    </div>
                    </a>
                    </div>
                </div>

                
            </div>
            <h5 class="text-center font-weight-bold mt-4">RECHARGE PERSONNALISEE</h5>
            <div class="col-md-12 d-flex justify-content-center mt-4">
                    <div class="card">
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <p class='text-center' style='font-size:12px;'>Veillez entrer un montant multiple de 1000F</p>
                                <form method='post' action='senddata.php' enctype='multipart/form-data'>
                                    <label for="" class="text-center">Numéro du compte Camtel à Créditer</label>
                                    <input type="text"  class="form-control" name="camtel" placeholder='Numéro du compte Camtel à Créditer' required>
                                    <label for="" class="text-center">Montant:</label>
                                    <input type="number"  name='prix' class="form-control" placeholder='Montant de la recharge'>
                                    <div class="d-flex justify-content-center mt-4">
                                            <button type='submit'  class="btn btn-warning rounded-pill w-100">Valider</button>
                                    </div>
                                </form>
                                
                            </div>

                           
                        </div>
                        
                    </div>
                  
                    </div>
                </div>
  </div>
</section>
@include('layouts.front.footer')
@endsection
