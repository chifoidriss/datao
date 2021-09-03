@extends('layouts.admin.base')
@section('admin_content')

<div class="card m-4">
     <h3 class='text-center font-weight-bold'>Liste des Catégories</h3>
 <div class="row p-4 m-4">
     <div class="col-md-12">
         <div class="col-md-6">
             <a href="{{route('categorie.create')}}"><button class='btn btn-success mb-4'>Ajouter Categorie</button></a>
         </div>
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <th>Nom Catégorie</th>
                <th>description</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach($categories as $item)
                <tr>
                    <td>{{$item->nom}}</td>
                    <td>{{$item->description}}</td>
                    <td>
                        <form  action="{{route('categorie.destroy',$item->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                            <a href="{{route('categorie.edit',$item->id)}}"><button type="button"  class="btn btn-sm btn-outline-primary">Edit</button></a>

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