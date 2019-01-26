@extends ('layouts.admin')
@section ('contenido')
{!!Form::model($usuario,['method'=>'PATCH','route'=>['Perfil.update',$usuario->id]])!!}
        <div class="container">
        	<div class="col-lg-5 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="name">Nombre</label>
		    <input type="text" name="name" class="form-control"  title="Solo se acepta letras" value="{{auth()->user()->name}}"></label>
		</div>
	    </div>
	    <div class="col-lg-5 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="no">No</label>
		    <input type="text" name="no" class="form-control"  title="Solo se acepta letras" value="{{auth()->user()->no}}"></label>
		</div>
	    </div>
    <div class="col-lg-5 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="calle">Calle</label>
		    <input type="text" name="calle" class="form-control"  title="Solo se acepta letras" value="{{auth()->user()->calle}}"></label>
		</div>
	    </div>
	    <div class="col-lg-5 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="colonia">Colonia</label>
		    <input type="text" name="colonia" class="form-control"  title="Solo se acepta letras" value="{{auth()->user()->colonia}}"></label>
		</div>
	    </div>
	    <div class="col-lg-5 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="municipio">Municipio</label>
		    <input type="text" name="municipio" class="form-control"  title="Solo se acepta letras" value="{{auth()->user()->municipio}}"></label>
		</div>
	    </div>
	     <div class="col-lg-5 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="estado">Estado</label>
		    <input type="text" name="estado" class="form-control"  title="Solo se acepta letras" value="{{auth()->user()->estado}}"></label>
		</div>
	    </div>
          <div class="col-lg-5 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="email">Correo</label>
		    <input type="text" name="email" class="form-control"  title="Solo se acepta letras" value="{{auth()->user()->email}}"></label>
		</div>
	    </div>
	    <div class="col-lg-5 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="imagen">Logo de tu Negocio</label><input type="file" name="imagen" class="form-control" value="{{auth()->user()->imagen}}">
		</div>
	    </div>
	    <br>
	    <br>
	    <br>
	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
	    <div class="form-group">
			<button class="btn btn-primary float-right" type="submit"style='width:74px; height:30px'><i class="fa fa-save">Guardar</i></button>
			<button class="btn btn-danger float-right" type="reset"style='width:78px; height:30px'><i class="glyphicon glyphicon-ban-circle">Cancelar</i></button>
		</div>
	    </div>
	</div>
	{!!Form::close()!!}



@stop