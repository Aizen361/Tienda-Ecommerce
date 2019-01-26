@extends ('layouts.admin')
@section ('contenido')

<div class="container text-center">
	<div class="page-header">
	 <h1><i class=""></i>Mi perfil</h1><hr>	
	</div>
<br>
<br>

<div class="row">
   <div class="col-md-6">
      <div class="producto-block">
	    <img src="{{asset('imagenes/perfil/'.auth()->user()->imagen)}}" style='width:350px; height:300px'>
      </div>
    </div>


<div class="col-md-5">
	<div class="producto-block">
		<h3>{{auth()->user()->name}}</h3><hr>
		 <div class="producto-info panel">
			 <p>Correo: {{auth()->user()->email}}</p>
			  <p>Municipio: {{auth()->user()->municipio}}</p>
			  <p>Calle: {{auth()->user()->calle}}</p>
			  <p>Numero Exterior: {{auth()->user()->no}}</p>
	          <p>
	        	<a href="{{url('Perfil/edit')}}">Editar Informacion
	         </p>
		 </div>
	   </div>
	</div>
</div><hr>
</div>

@stop