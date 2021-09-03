@extends('layouts.admin.base')
@section('admin_content')

<div class="card m-4">
     <h3 class='text-center font-weight-bold'>Ajouter Catégorie</h3>
 <div class="row p-4 m-4">
     <div class="col-md-12">
         <form method='post' action="{{route('categorie.store')}}" enctype='multipart/form-data'>
            @csrf

            <div class="row">
                <div class="form-group col-md-10">
                    <label for="">Nom Categorie</label>
                    <input type="text" name="nom" id="" class='form-control' required>
                </div>
           </div>

           <div class="row">
                <div class="form-group col-md-10" >
                    <label for="">description</label>
                    <input type="text" name="description" id="" class='form-control'>
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