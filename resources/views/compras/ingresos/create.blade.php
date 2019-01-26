@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<h3>
			Nuevo Ingreso
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
		{!!Form::open(array('url'=>'compras/ingresos','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
		{{Form::token()}}
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="precio_compra">Precio Compra</label> <input type="text" name="precio_compra" required value ="{{old('precio_compra')}}"class="form-control" placeholder="precio.."></label>
		</div>
	    </div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label>Seleccione cliente</label>
			<select name='idCliente' class='form-control'>
				@foreach ($clientes as $cli)
                <option value="{{$cli->idCliente}}">{{$cli->nombre}}</option>
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
			<label for="fecha_compra">Fecha Compra</label> <input type="date" name="fecha_compra" required value="{{old('fecha_compra')}}" class="form-control" placeholder="Fecha la compra.."></label>
		</div>
	    </div>
	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="tipo_pago">Forma de Pago</label> <input type="text" name="tipo_pago" required value="{{old('tipo_pago')}}"class="form-control" placeholder="Forma de Pago.."></label>
		</div>
	    </div>
	    
	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="estado">Estado</label> <input type="text" name="estado"required value="{{old('estado')}}" class="form-control" placeholder="estado.."></label>
		</div>
	    </div>
	      <div class="col-lg-6 col-sm-8 col-md-8 col-xs-12">
		<div class="form-group">
			<button class="btn btn-primary" type="submit"><i class="fa fa-save">Guardar</i></button>
			<button class="btn btn-danger" type="reset"><i class="glyphicon glyphicon-ban-circle">Cancelar</i></button>
		</div>
	</div>
		{!!Form::close()!!}
	</div>
</div>

@stop