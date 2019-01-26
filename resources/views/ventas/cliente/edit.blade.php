@extends ('layouts.admin')
@section ('contenido')

<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<h3>
			Editar Cliente:{{$cliente->nombre}}
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
		{!!Form::model($cliente,['method'=>'PATCH','route'=>['ventas.cliente.update',$cliente->idCliente]])!!}
		{{Form::token()}}
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="nombre">Nombre</label> 
			<input type="text" name="nombre" class="form-control" value="{{$cliente->nombre}}""></label>
		</div>
        </div>

	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="apellido_materno">Apellido Materno</label> 
			<input type="text" name="apellido_materno" class="form-control"value="{{$cliente->apellido_materno}}""></label>
		</div>
	    </div>

	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="apellido_paterno">Apellido Paterno</label> 
			<input type="text" name="apellido_paterno" class="form-control" value="{{$cliente->apellido_paterno}}""></label>
		</div>
	    </div>

		 <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="calle">Calle</label>
			 <input type="text" name="calle" class="form-control" value="{{$cliente->calle}}"></label>
		</div>
	    </div>

	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="no">Numero Interior</label> 
			<input type="text" name="no" class="form-control" value="{{$cliente->no}}"></label>
		</div>
	    </div>

	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="colonia">Colonia</label> 
			<input type="text" name="colonia" class="form-control" value="{{$cliente->colonia}}"></label>
		</div>
	    </div>

	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="municipio">Municipio</label> 
			<input type="text" name="municipio" class="form-control"value="{{$cliente->municipio}}"></label>
		</div>
	    </div>

	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="estado">Estado</label> 
			<input type="text" name="estado" class="form-control" value="{{$cliente->estado}}"></label>
		</div>
	    </div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="cp">Codigo Postal</label> 
			<input type="number" name="cp" class="form-control" value="{{$cliente->cp}}"></label>
		</div>
	    </div>

	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="correo">Correo</label> 
			<input type="text" name="correo" class="form-control" value="{{$cliente->correo}}"></label>
		</div>
	    </div>
	   
	     
	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="telefono">Telefono</label> 
			<input type="text" name="telefono" class="form-control" value="{{$cliente->telefono}}"></label>
		</div>
	    </div>
	    <br>
	    <br>
	    <br>
	    <br>
	    <div class="col-lg-7 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
            <button type="submit" class="btn btn-primary">Guardar
		      <i class="fa fa-save"></i>
		    </button>
		    <button type="submit" class="btn btn-danger">Editar
		      <i class="fa fa-edit"></i>
		    </button>
		</div>
	    </div>

		{!!Form::close()!!}

	</div>
</div>

@stop