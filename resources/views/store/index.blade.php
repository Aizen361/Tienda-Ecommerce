@extends('store.template')

@section ('content')

@include ('store.partials.slider')
@include ('store.partials.section')
<div class="container text-center">
	<h2>Nuestros Productos</h2>
	<div id="productos">
		@foreach($productos as $producto)
		<div class="producto white-panel">
				<h3>{{$producto->nombre}}</h3>
			    <img src="{{asset('imagenes/productos/'.$producto->imagen)}}"height="250px" width="205px">
			        <div class="producto-info panel">
				    	<p>{{$producto->idProducto}}</p>
				    	<p>{{$producto->descripcion}}</p>
				    	<h3><span class="label label-success">Precio:${{number_format($producto->costo_unitario,2)}}</span></h3>
				    	<p>
			    		<a class="btn btn-warning" href=""><i class="fa fa-cart-plus"></i>Agregar</a>

			    		<a class="btn btn-primary" href="{{URL::action('TiendaController@show',$producto->idProducto)}}"><i class="fa fa-chevron-circle-right"></i>Leer Mas
			    	    </a>
			    	</p>
			   </div>
		    </div>
		@endforeach
	</div>
</div>
@include ('store.partials.contact')
@stop
