@extends('layouts.admin.base')
@section('admin_content')

<div class="card m-4">
     <h3 class='text-center font-weight-bold'>Liste des Forfaits</h3>
 <div class="row p-4 m-4">
     <div class="col-md-12">
         <div class="col-md-6">
             <a href="{{route('forfait.create')}}"><button class='btn btn-success mb-4'>Ajouter Forfait</button></a>
         </div>
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <th>Nom </th>
                <th>Subname</th>
                <th>Type</th>
                <th>Prix</th>
                <th>Volume</th>
                <th>Validité</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach($forfaits as $item)
                <tr>
                    <td>{{$item->nom}}</td>
                    <td>{{$item->subname}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->prix}}</td>
                    <td>{{$item->volume}}</td>
                    <td>{{$item->validite}}</td>
                    <td>
                        <form  action="{{route('forfait.destroy',$item->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                            <a href="{{route('forfait.edit',$item->id)}}"><button type="button"  class="btn btn-sm btn-outline-primary">Edit</button></a>

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