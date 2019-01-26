@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<h3>
			Editar Proveedor:{{$proveedor->name}}
		</h3>
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
		 {!!Form::model($proveedor,['method'=>'PATCH','route'=>['almacen.proveedor.update',$proveedor->id]])!!}
		{{Form::token()}}
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="name">Nombre</label> 
			<input type="text" name="name" class="form-control"  title="Solo se acepta letras" value="{{$proveedor->name}}"></label>
		</div>
	    </div>
	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="calle">Calle</label> 
			<input type="text" name="calle" class="form-control"  title="Solo se acepta letras"value="{{$proveedor->calle}}"></label>
		</div>
	    </div>
	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="no">Numero</label> 
			<input type="text" name="no" class="form-control"  title="Solo se acepta letras" value="{{$proveedor->no}}"></label>
		</div>
	    </div>
	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="colonia">Colonia</label> 
			<input type="text" name="colonia" class="form-control"  title="Solo se acepta letras" value="{{$proveedor->colonia}}"></label>
		</div>
	    </div>
	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="municipio">Municipio</label> 
			<input type="text" name="municipio" class="form-control"  title="Solo se acepta letras" value="{{$proveedor->municipio}}"></label>
		</div>
	    </div>
	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="estado">Estado</label> 
			<input type="text" name="estado" class="form-control"  title="Solo se acepta letras" value="{{$proveedor->estado}}"></label>
		</div>
	    </div>
	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="cp">Codigo Postal</label> 
			<input type="text" name="cp" class="form-control"  title="Solo se acepta letras" value="{{$proveedor->cp}}"></label>
		</div>
	    </div>
	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="email">Correo</label> 
			<input type="text" name="email" class="form-control"  title="Solo se acepta letras" value="{{$proveedor->email}}" ></label>
		</div>
	    </div>
	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="telefono">Telefono</label> 
			<input type="text" name="telefono" class="form-control"  title="Solo se acepta letras" value="{{$proveedor->telefono}}" ></label>
		</div>
	    </div>
	    <br>
	    <br>
	    <br>
	    <br>
	    <br>
	    <br>

         <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
		<div class="form-group">
			<button class="btn btn-primary" type="submit"><i class="fa fa-save">Guardar</i></button>
			<button class="btn btn-danger" type="reset"><i class="glyphicon glyphicon-ban-circle">Cancelar</i></button>
		</div>
	    </div>
		{!!Form::close()!!}
	</div>
</div>

@stop