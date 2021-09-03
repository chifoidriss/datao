@extends('layouts.front.header')
@extends('layouts.front.navbar')
@section('content')
<section id="topbar" class="d-none d-lg-block" style='background-color:#f5921d'>
    <div class="container clearfix">
      
    </div>
</section>


<section class='container'>
  <div class="container">
  <h1 class="text-center font-weight-bold">RECHARGE FORFAIT Blue</h1>

  <h5 class="text-center font-weight-bold mt-4" style='color:#f5921d'>BLUE S </h5>
            <table class="table table-responsive-sm mt-4 mb-4">
                <thead>
                    <tr>
                    <th scope="col">Forfait</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Validité et Volume</th>
                    <th scope="col">Action</th>
                    </tr>
               </thead>
               <tbody>
                    @foreach($forfait as $item)
                    <tr>
                        <td>{{$item->subname}}</td>
                        <td>{{$item->prix}} FCFA</td>
                        <td>{{$item->validite}} Heures || {{$item->volume}} Go</td>
                        <td><a href="https://api.whatsapp.com/send/?phone=+237653936197&text=Salut Datao Solutions je veux souscrire au {{$item->subname}}  de validité  {{$item->validite}}  Heures et qui coûte  {{$item->prix}}  FCFA "><button class="btn btn-warning">Souscrire</button></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

                <h5 class="text-center font-weight-bold mt-4" style='color:#f5921d'>AUTRES FORFAITS DU PACK BLUE </h5>
            <table class="table table-responsive-sm mt-4 mb-4">
                <thead>
                    <tr>
                    <th scope="col">Forfait</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Validité et Volume</th>
                    <th scope="col">Action</th>
                    </tr>
               </thead>
               <tbody>
                    @foreach($forfait1 as $item)
                    <tr>
                        <td>{{$item->subname}}</td>
                        <td>{{$item->prix}} FCFA</td>
                        <td>{{$item->validite}} Heures || {{$item->volume}} Go</td>
                        <td><a href="https://api.whatsapp.com/send/?phone=+237653936197&text=Salut Datao Solutions je veux souscrire au {{$item->subname}}  de validité  {{$item->validite}}  Heures et qui coûte  {{$item->prix}}  FCFA "><button class="btn btn-warning">Souscrire</button></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

           
  </div>
</section>
@include('layouts.front.footer')
@endsection
