<!--plantilla de indice -->
@extends('base')
@section('main')
<div class="row">
<div class="col-sm-12">
   <h1 class="display-3">Tutores</h1>   
 <table class="table table-striped">
   <thead>
       <tr>
         <td>ID</td>
         <td>Empresa</td>
         <td>Tipo documento</td>
         <td>Documento identidad</td>
         <td>Nombre</td>
         <td>Primer apellido</td>
         <td>Segundo apellido</td>
         <td>País documento de identidad</td>
         <td>Provincia</td>
         <td>Municipio</td>
         <td>Estado</td>
         <td>Teléfono</td>
         <td>email</td>
         <td colspan = 2>Actions</td>
       </tr>
   </thead>
   <tbody>
       @foreach($tutores as $tutor)
       <tr>
           <td>{{$tutor->id}}</td>
           <td>{{$tutor->company}}</td>
           <td>{{$tutor->type_document}}</td>
           <td>{{$tutor->document}}</td>
           <td>{{$tutor->first_name}}</td>
           <td>{{$tutor->last_name1}}</td>
           <td>{{$tutor->last_name2}}</td>
           <td>{{$tutor->country_document}}</td>
           <td>{{$tutor->province}}</td>
           <td>{{$tutor->municipe}}</td>
           <td>{{$tutor->status}}</td>
           <td>{{$tutor->telephone}}</td>
           <td>{{$tutor->email}}</td>
           <td>
               <a href="{{ route('tutores.edit',$tutor->id)}}" class="btn btn-primary">Edit</a>
           </td>
           <td>
               <form action="{{ route('tutores.destroy', $tutor->id)}}" method="post">
                 @csrf
                 @method('DELETE')
                 <button class="btn btn-danger" type="submit">Delete</button>
               </form>
           </td>
       </tr>
       @endforeach
   </tbody>
 </table>
<div>
  <a style="margin: 19px;" href="{{ route('tutores.create')}}" class="btn btn-primary">Añadir tutores</a>
</div>
  <!-- mensaje de éxito cuando funcionan los métodos de API CRUD -->
  <div class="col-sm-12">
 @if(session()->get('success'))
 <div class="alert alert-success">
     {{ session()->get('success') }}
 </div>
 @endif
</div>
@endsection
