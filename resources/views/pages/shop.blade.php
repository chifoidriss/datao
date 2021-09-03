@extends('layouts.front.header')
@extends('layouts.front.navbar')
@section('content')
<section id="topbar" class="d-none d-lg-block sticky-wrapper" id="header-sticky-wrapper" style='background-color:#f5921d'>
    <div class="container clearfix">
      
    </div>
</section>
<section id="contact" class="contact">
      <div class="container">

            <div class="section-title">
            <h2 style='color:#f5921d'>Boutique</h2>
            </div>

            <div class="row">
            <div class="col-sm-3 mt-4">
                    <div class="card">
                    <div class="card-body">
                        <div class="row">
                            @foreach($shops as $item)
                            <div class="col-md-12">
                                <img src="{{asset('storage/'.$item->image)}}" class='img-fluid'>
                                       <p class="mb-2"> {{$item->nom}}</p> Prix: {{$item->prix}} FCFA 
                                <div class="row mt-4 d-flex justify-content-center">
                                    <a href="https://api.whatsapp.com/send/?phone=+237653936197&text=Salut Datao Solutions j'ai besoin de {{$item->nom}} de prix {{$item->prix}} FCFA "> <button  class="btn btn-success align-items-center">ACHETER</button></a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                    </div>
                    </div>
                </div>
                
         </div>  
</section>
  
@include('layouts.front.footer')
@endsection