@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<h3>
			Nueva Cliente
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
		{!!Form::open(array('url'=>'ventas/cliente','method'=>'POST','autocomplete'=>'off'))!!}
		{{Form::token()}}
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="nombre">Nombre</label> <input type="text" name="nombre" class="form-control" placeholder="Nombre.."></label>
		</div>
	    </div<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="apellido_materno">Apellido Materno</label> <input type="text" name="apellido_materno" class="form-control" placeholder="Apellido M.."></label>
		</div>
	    </div>	    
	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="apellido_paterno">Apellido Paterno</label> <input type="text" name="apellido_paterno" class="form-control" placeholder="Apellido P.."></label>
		</div>
	    </div>
		 <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="calle">Calle</label> <input type="text" name="calle" class="form-control" placeholder="Calle.."></label>
		</div>
	    </div>
	     <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="no">Numero Interior</label> <input type="text" name="no" class="form-control" placeholder="No.Interior.."></label>
		</div>
	    </div>
	     <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="colonia">Colonia</label> <input type="text" name="colonia" class="form-control" placeholder="colonia.."></label>
		</div>
	    </div>
	     <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="municipio">Municipio</label> <input type="text" name="municipio" class="form-control" placeholder="municipio.."></label>
		</div>
	    </div> 
	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="estado">Estado</label> <input type="text" name="estado" class="form-control" placeholder="Estado.."></label>
		</div>
	    </div>
			 <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="cp">Codigo Postal</label> <input type="number" name="cp" class="form-control" placeholder="Codigo Postal.."></label>
		
		</div>
	    </div>
	     <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="correo">Correo</label> <input type="text" name="correo" class="form-control" placeholder="Correo.."></label>
		</div>
	    </div>
	   
	     <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="telefono">Telefono</label> <input type="text" name="telefono" class="form-control" placeholder="telefono.."></label>
		</div>
	    </div>

	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<button class="btn btn-primary" type="submit">Guardar</button>
			<button class="btn btn-danger" type="reset">Cancelar</button>
		</div>
	    </div>
		{!!Form::close()!!}
	</div>
</div>

@stop