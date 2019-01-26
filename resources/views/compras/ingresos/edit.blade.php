@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<h3>
			Editar Ingreso:{{$ingreso->productos}}
		</h3>
		@if (count($errors)>0)
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>
					{{$error}}
				</li>
                @endforeach
			</ul>
		</div>
		@endif
		 {!!Form::model($ingreso,['method'=>'PATCH','route'=>['compras.ingresos.update',$ingreso->idIngreso]])!!}
		{{Form::token()}}
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="precio_compra">Precio Compra</label> <input type="text" name="precio_compra" class="form-control" value="{{$ingreso->precio_compra}}"></label>
		</div>
	    </div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label>Seleccione cliente</label>
			<select name='idCliente' class='form-control'>
				@foreach ($clientes as $cli)
				@if ($cli->idCliente==$ingreso->idCliente)
                <option value="{{$cli->idCliente}}" selected>{{$cli->nombre}}</option>
                @else
                 <option value="{{$cli->idCliente}}">{{$cli->nombre}}</option>
                 @endif
				@endforeach
				
			</select>
	
		</div>
	    </div>
	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label>Seleccione Producto</label>
			<select name='idProducto' class='form-control'>
				@foreach ($productos as $prod)
                <option value="{{$prod->idProducto}}">{{$prod->nombre}}</option>
				@endforeach
				
			</select>
	
		</div>
	    </div>
	   <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="fecha_compra">Fecha Compra</label> <input type="date" name="fecha_compra" class="form-control" value="{{$ingreso->fecha_compra}}"></label>
		</div>
	    </div>
	   
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="form-group">
                    <label for="tipo_pago">Forma de pago</label>
                    <select class="form-control" name= "tipo_pago" value="{{$ingreso->tipo_pago}}">
                    	<option>Paypal</option>
                    	<option>Tarjeta</option>
                    	<option>Deposito</option>
                    </select>




		</div>
	    </div>
	    
	  
	        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="form-group">
                    <label for="estado">Estado </label>
                    <select class="form-control" name= "estado" value="{{$ingreso->estado}}" value="{{$ingreso->estado}}">
                    	<option>Pagado</option>
                    	<option>Pendiente</option>
                    	<option>Cancelado</option>
                    </select>

	    
	    </div>
	    </div>
	
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
		<div class="form-group">
			<button class="btn btn-primary" type="submit"><i class="fa fa-save">Guardar</i></button>
			<button class="btn btn-danger" type="reset"><i class="glyphicon glyphicon-ban-circle">Cancelar</i></button>
		</div>
		{!!Form::close()!!}
	</div>
</div>

@stop