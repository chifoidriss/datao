@extends('layouts.front.header')
@extends('layouts.front.navbar')
@section('content')
<section id="topbar" class="d-none d-lg-block" style='background-color:#f5921d'>
    <div class="container clearfix">
      
    </div>
</section>


<section class='container'>
  <div class="container">
                <div class="col-sm-10 mt-4">
                    <div class="card">
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <form method='post' action="{{url('whatsapp')}}" enctype='multipart/form-data'>
                                    @csrf
                                    <label for="" class="text-center">Numéro du compte Camtel à Créditer</label>
                                    <input type="text"  class="form-control" name="camtel" placeholder='Numéro du compte Camtel à Créditer' required>
                                    <label for="" class="text-center">Montant:</label>
                                    <input type="number"  name='prix' class="form-control" value='{{$mt}}' placeholder='Montant de la recharge'>
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
