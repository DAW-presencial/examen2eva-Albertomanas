<!--Plantida de editar -->
@extends('base')
@section('main')
<div class="row">
   <div class="col-sm-8 offset-sm-2">
       <h1 class="display-3">Update a tutores</h1>
 
       @if ($errors->any())
       <div class="alert alert-danger">
           <ul>
               @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
               @endforeach
           </ul>
       </div>
       <br />
       @endif
       <form method="post" action="{{ route('tutores.update', $tutores->id) }}">  
           @method('PATCH')
           @csrf
           <div class="form-group">   
             <label for="company">Empresa</label>
             <input type="text" class="form-control" name="company" value={{ $tutores->company }}/>
         </div>
         <div class="form-group">   
             <label for="type_document">Tipo de documento</label>
             <input type="text" class="form-control" name="type_document" value= {{ $tutores->type_document }}/>
         </div>
         <div class="form-group">   
             <label for="document">Documento</label>
             <input type="text" class="form-control" name="document" value={{ $tutores->document }}/>
         </div>
         <div class="form-group">   
             <label for="first_name">Nombre</label>
             <input type="text" class="form-control" name="first_name" value= {{ $tutores->first_name }}/>
         </div>
         <div class="form-group">   
             <label for="last_name1">Primer apellido</label>
             <input type="text" class="form-control" name="last_name1" value={{ $tutores->last_name1 }}/>
         </div>
         <div class="form-group">   
             <label for="last_name2">Segundo apellido</label>
             <input type="text" class="form-control" name="last_name2" value={{ $tutores->last_name2 }}/>
         </div>
         <div class="form-group">   
             <label for="country_document">Pais del documento</label>
             <input type="text" class="form-control" name="country_document" value={{ $tutores->country_document }}/>
         </div>
         <div class="form-group">   
             <label for="province">Provincia</label>
             <input type="text" class="form-control" name="province" value={{ $tutores->province }}/>
         </div>
         <div class="form-group">   
             <label for="municipe">Municipio</label>
             <input type="text" class="form-control" name="municipe" value={{ $tutores->municipe }}>
         </div>
         <div class="form-group">   
             <label for="status">Estado</label>
             <input type="text" class="form-control" name="status" value={{ $tutores->status }}/>
         </div>
         <div class="form-group">   
             <label for="telephone">Telefono</label>
             <input type="number" class="form-control" name="telephone" value={{ $tutores->telephone }}/>
         </div>
         <div class="form-group">   
             <label for="email">email</label>
             <input type="email" class="form-control" name="email" value={{ $tutores->email }}/>
         </div>
         <button type="submit" class="btn btn-primary-outline">Update</button>
       </form>
   </div>
</div>
@endsection
