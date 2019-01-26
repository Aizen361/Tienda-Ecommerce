@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<h3>
			Editar Categoria:{{$categoria->nombre}}
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
        {!!Form::model($categoria,['method'=>'PATCH','route'=>['almacen.categoria.update',$categoria->idCategoria]])!!}
		{{Form::token()}}
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="nombre">Nombre</label>
		    <input type="text" name="nombre" class="form-control"  title="Solo se acepta letras" value="{{$categoria->nombre}}"></label>
		</div>
	    </div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<label>Seleccione su Negocio</label>
			<select name='id' class='form-control'>
				@foreach ($proveedores as $prov)
				@if ($prov->id==$categoria->id)
                <option value="{{$prov->id}}" selected>{{$prov->name}}</option>
                @else
                 <option value="{{$prov->id}}">{{$prov->name}}</option>
                 @endif
				@endforeach
				
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
         <div class="col-lg-6 col-sm-8 col-md-8 col-xs-12">
		<div class="form-group">
			<button class="btn btn-primary"type="submit"><i class="fa fa-save">Guardar</i></button>
			<button class="btn btn-danger"type="reset"><i class="glyphicon glyphicon-ban-circle">Cancelar</i></button>
		</div>
	    </div>
		{!!Form::close()!!}
	</div>
</div>

@stop