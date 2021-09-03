@extends('layouts.admin.base')
@section('admin_content')

<div class="card m-4">
     <h3 class='text-center font-weight-bold'>Liste des Produits</h3>
 <div class="row p-4 m-4">
     <div class="col-md-12">
         <div class="col-md-6">
             <a href="{{route('produit.create')}}"><button class='btn btn-success mb-4'>Ajouter Produit</button></a>
         </div>
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <th>Nom Produit</th>
                <th>Catégorie</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach($produit as $item)
                <tr>
                    <td>{{$item->nom}}</td>
                    <td>{{$item->namec}}</td>
                    <td>{{$item->prix}}</td>
                    <td>{{$item->quantite}}</td>
                    <td>
                        <form  action="{{route('produit.destroy',$item->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                            <a href="{{route('produit.edit',$item->id)}}"><button type="button"  class="btn btn-sm btn-outline-primary">Edit</button></a>

                            <button  class="btn btn-sm btn-outline-danger" type="submit" >Delete</button>

                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
         </table>
     </div>
 </div>
 </div>

@endsection