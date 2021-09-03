@extends('layouts.admin.base')
@section('admin_content')

<div class="card m-4">
     <h3 class='text-center font-weight-bold'>Modifier Forfait</h3>
 <div class="row p-4 m-4">
     <div class="col-md-12">
         <form method='post' action="{{route('forfait.update',$forfait->id)}}" enctype='multipart/form-data'>
            @csrf
            @method('PUT')
            <div class="row">
                <div class="form-group col-md-10">
                    <label for="">Nom </label>
                    <input type="text" name="nom" value="{{$forfait->nom}}" id="" class='form-control' placeholder="Ex:Forfaits Journaliers" required>
                </div>
           </div>

           <div class="row">
                <div class="form-group col-md-10">
                    <label for="">Subname </label>
                    <input type="text" name="subname" value="{{$forfait->subname}}" id="" class='form-control' placeholder="Ex:Fako Day" required>
                </div>
           </div>

           <div class="row">
                <div class="form-group col-md-10">
                    <label for="">Type Forfait</label>
                    <select name="type" id="" class='form-control'>
                        
                        <option value="1"> 
                            Forfait journalier    
                        </option>
                        <option value="2">   
                            Forfait hebdomadiares  
                        </option>
                        <option value="3"> 
                            Forfait mensuel    
                        </option>
                        <option value="4"> 
                            Forfait blue     
                        </option>
                        
                    </select>
                </div>
           </div>

           <div class="row">
                <div class="form-group col-md-10" >
                    <label for="">Prix</label>
                    <input type="number" name="prix" value="{{$forfait->prix}}" id="" class='form-control'>
                </div>
           </div>

           <div class="row">
                <div class="form-group col-md-10" >
                    <label for="">volume</label>
                    <input type="text" name="volume" id="" value="{{$forfait->prix}}" class='form-control' placeholder='EX: 2Go'>
                </div>
           </div>

           <div class="row">
                <div class="form-group col-md-10" >
                    <label for="">Validité</label>
                    <input type="text" name="validite" id="" value="{{$forfait->validite}}" class='form-control' placeholder='EX: 9Go 300Mo/j'>
                </div>
           </div>

    
           
           <div class="d-flex justify-content-center">
                <button type="reset" class="button btn btn-danger  ml-4" >annuler</button>
                <button type="submit" class="button btn btn-warning  ml-4" name='submit'>Enregistrer</button>
                
           </div>
         </form>
     </div>
 </div>
 </div>


@endsection