<!-- Extensión de blade para métdo API crear-->
@extends('base')
@section('main')
<div class="row">
<div class="col-sm-8 offset-sm-2">
   <h1 class="display-3">Add a contact</h1>
 <div>
   @if ($errors->any())
     <div class="alert alert-danger">
       <ul>
           @foreach ($errors->all() as $error)
             <li>{{ $error }}</li>
           @endforeach
       </ul>
     </div><br />
   @endif
     <form method="post" action="{{ route('tutores.store') }}">
         @csrf
         <div class="form-group">   
             <label for="company">Empresa</label>
             <input type="text" class="form-control" name="company" value="{{ old('company') }}" placeholder="Arteco SL." />
         </div>
         <div class="form-group">   
             <label for="type_document">Tipo de documento</label>
             <input type="text" class="form-control" name="type_document" value="{{ old('type_document') }}" placeholder="DNI" />
         </div>
         <div class="form-group">   
             <label for="document">Documento</label>
             <input type="text" class="form-control" name="document" value="{{ old('document') }}" placeholder="45637293P" />
         </div>
         <div class="form-group">   
             <label for="first_name">Nombre</label>
             <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" placeholder="Alberto" />
         </div>
         <div class="form-group">   
             <label for="last_name1">Primer apellido</label>
             <input type="text" class="form-control" name="last_name1" value="{{ old('last_name1') }}" placeholder="Mañas" />
         </div>
         <div class="form-group">   
             <label for="last_name2">Segundo apellido</label>
             <input type="text" class="form-control" name="last_name2" value="{{ old('last_name2') }}" placeholder="Gonzalez" />
         </div>
         <div class="form-group">   
             <label for="country_document">Pais del documento</label>
             <input type="text" class="form-control" name="country_document" value="{{ old('country_document') }}" placeholder="España" />
         </div>
         <div class="form-group">   
             <label for="province">Provincia</label>
             <input type="text" class="form-control" name="province" value="{{ old('province') }}" placeholder="" />
         </div>
         <div class="form-group">   
             <label for="municipe">Municipio</label>
             <input type="text" class="form-control" name="municipe" value="{{ old('municipe') }}" placeholder="" />
         </div>
         <div class="form-group">   
             <label for="status">Estado</label>
             <input type="text" class="form-control" name="status" value="{{ old('status') }}" placeholder="Activo" />
         </div>
         <div class="form-group">   
             <label for="telephone">Telefono</label>
             <input type="number" class="form-control" name="telephone" value="{{ old('telephone') }}" placeholder="608234793" />
         </div>
         <div class="form-group">   
             <label for="email">email</label>
             <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="amanas@cifpfbmoll.eu" />
         </div>
         <button type="submit" class="btn btn-primary-outline">Add contact</button>
     </form>
 </div>
</div>
</div>
@endsection
