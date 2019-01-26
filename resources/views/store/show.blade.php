@extends('store.template')

@section ('content')
<div class="container text-center">
	<br>
	<br>
	<div class="page-header">
	 <h2><i class="fa fa-shopping-cart"></i>Detalle del Producto</h2>	
	</div>
<br>
<br>

<div class="row">
   <div class="col-md-6">
      <div class="producto-block">
	    <img src="{{asset('imagenes/productos/'.$productos->imagen)}}">
      </div>
    </div>


<div class="col-md-6">
	<div class="producto-block">
		<h3>{{$productos->nombre}}</h3><hr>
		 <div class="producto-info panel">
			 <p>{{$productos->descripcion}}</p>
			  <p>Precio:${{number_format($productos->costo_unitario,2)}}</p>
	          <p>
	        	<a href="#">Agregar al carrito
	         </p>
		 </div>
	   </div>
	</div>
</div><hr>
</div>

@stop
