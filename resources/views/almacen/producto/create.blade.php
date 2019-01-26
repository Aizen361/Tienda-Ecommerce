@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<h3>
			Nuevo Producto
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
		{!!Form::open(array('url'=>'almacen/producto','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
		{{Form::token()}}
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="nombre">Nombre</label> <input type="text" name="nombre" required value ="{{old('nombre')}}"class="form-control" placeholder="Nombre.."></label>
		</div>
	    </div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label>Seleccione categoria</label>
			<select name='idCategoria' class='form-control'>
				@foreach ($categorias as $cat)
                <option value="{{$cat->idCategoria}}">{{$cat->nombre}}</option>
				@endforeach	
			</select>
	
		</div>
	    </div>
	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="descripcion">Descripcion</label> <input type="text" name="descripcion" required value ="{{old('descripcion')}}" class="form-control" placeholder="Descripcion.."></label>
		</div>
	    </div>
	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="stock">Stock</label> <input type="text" name="stock" required value="{{old('stock')}}"class="form-control" placeholder="stock.."></label>
		</div>
	    </div>
	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="costo_unitario">Costo Unitario</label> <input type="text" name="costo_unitario"required value="{{old('costo_unitario')}}" class="form-control" placeholder="costo.."></label>
		</div>
	    </div>
	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="unidad_de_medida">Unidad de Medida</label> <input type="textarea" name="Unidad_de_medida" required value="{{old('Unidad_de_medida')}}" class="form-control" placeholder="Unidad medida.."></label>
		</div>
	    </div>
	    </div>
	    </div>
	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="imagen">Imagen</label><input type="file" name="imagen" class="form-control">
		</div>
	    </div>
	    <br>
	    <br>
	    <br>
	   &nbsp

	    <div class="form-group">
			<button style="margin: 18px"class="btn btn-primary" type="submit"><i class="fa fa-save">Guardar</i></button>
			<button class="btn btn-danger" type="reset"><i class="glyphicon glyphicon-ban-circle">Cancelar</i></button>
		</div>
		{!!Form::close()!!}
	</div>
</div>

@stop