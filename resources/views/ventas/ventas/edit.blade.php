@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<h3>
			Editar Venta:
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
		{!!Form::model($venta,['method'=>'PATCH','route'=>['ventas.ventas.update',$venta->idVenta]])!!}
		{{Form::token()}}
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="fecha_pago">Fecha Pago</label> 
			<input type="text" name="fecha_pago" class="form-control"  title="Solo se acepta letras" value="{{$venta->fecha_pago}}"></label>
		</div>
	    </div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label>Seleccione su Cliente</label>
			<select name='idCliente' class='form-control'>
				@foreach ($clientes as $cli)
                <option value="{{$cli->idCliente}}">{{$cli->nombre}}</option>
				@endforeach
				
			</select>
	
		</div>
	    </div>
	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label>Seleccione su Negocio</label>
			<select name='id' class='form-control'>
				@foreach ($proveedores as $prov)
                <option value="{{$prov->id}}">{{$prov->name}}</option>
				@endforeach
				
			</select>
	
		</div>
	    </div>
	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="fecha_inicio">Fecha Inicio</label> 
			<input type="text" name="fecha_inicio" class="form-control"  title="Solo se acepta letras" placeholder="Nombre.." value="{{$venta->fecha_inicio}}"></label>
		</div>
	    </div>
	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="fecha_fin">Fecha Fin</label> 
			<input type="text" name="fecha_fin" class="form-control"  title="Solo se acepta letras" placeholder="Nombre.." value="{{$venta->fecha_fin}}"></label>
		</div>
	    </div>
	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="Estado">Estado de la Venta</label> 
			<input type="text" name="Estado" class="form-control"  title="Solo se acepta letras" placeholder="Estado de la venta.." value="{{$venta->Estado}}"></label>
		</div>
	    </div>
	    <br>
	    <br>
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