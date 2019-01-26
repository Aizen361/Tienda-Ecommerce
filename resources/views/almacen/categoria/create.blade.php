@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<h3>
			Nueva Categoria
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
		{!!Form::open(array('url'=>'almacen/categoria','method'=>'POST','autocomplete'=>'off'))!!}
		{{Form::token()}}
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="nombre">Nombre</label> <input type="text" name="nombre" class="form-control"  title="Solo se acepta letras" placeholder="Nombre.."></label>
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