@extends('layouts.admin.base')
@section('admin_content')

<div class="card m-4">
     <h3 class='text-center font-weight-bold'>Modifier Produit</h3>
 <div class="row p-4 m-4">
     <div class="col-md-12">
         <form method='post' action="{{route('produit.update',$produit->id)}}" enctype='multipart/form-data'>
            @csrf
            @method('PUT')
            <div class="row">
                <div class="form-group col-md-10">
                    <label for="">Nom Produit</label>
                    <input type="text" name="nom"  value="{{$produit->nom}} "id="" class='form-control' required>
                </div>
           </div>

           <div class="row">
                <div class="form-group col-md-10">
                    <label for="">Nom Catégorie</label>
                    <select name="category_id" id="" class='form-control'>
                        @foreach($category as $item)
                        <option value="{{$item->id}}">
                                {{$item->nom}}
                        </option>
                        @endforeach
                    </select>
                </div>
           </div>

           <div class="row">
                <div class="form-group col-md-10" >
                    <label for="">Prix</label>
                    <input type="number" name="prix" id="" class='form-control' value='{{$produit->prix}}'>
                </div>
           </div>

           <div class="row">
                <div class="form-group col-md-10" >
                    <label for="">Quantite</label>
                    <input type="number" name="quantite" value="{{$produit->quantite}}" id="" class='form-control'>
                </div>
           </div>

           <div class="row">
                <div class="form-group col-md-10" >
                    <label for="">Description</label>
                    <input type="text" name="description" value="{{$produit->description}}" id="" class='form-control'>
                </div>
           </div>

           <div class="row">
                <div class="form-group col-md-10" >
                    <label for="">Image</label>
                    <input type="file" name="image" id="" class='form-control'>
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