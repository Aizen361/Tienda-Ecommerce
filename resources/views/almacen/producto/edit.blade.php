@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<h3>
			Nuevo Producto:{{$producto->nombre}}
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
		{!!Form::model($producto,['method'=>'PATCH','route'=>['almacen.producto.update',$producto->idProducto],'files'=>'true'])!!}
		{{Form::token()}}
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="nombre">Nombre</label> <input type="text" name="nombre" value="{{$producto->nombre}}"class="form-control" placeholder="Nombre.."></label>
		</div>
	    </div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
	
			<label>Seleccione categoria</label>
			<select name='idCategoria' class='form-control'>
				@foreach ($categorias as $cat)
				@if ($cat->idCategoria==$producto->idCategoria)
				<option value="{{$cat->idCategoria}}" selected>{{$cat->nombre}}</option>
				@else
				<option value="{{$cat->idCategoria}}">{{$cat->nombre}}</option>
                @endif
				@endforeach
			</select>
	
	    </div>
	    </div>
	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="descripcion">Descripcion</label> <input type="text" name="descripcion" class="form-control"value="{{$producto->descripcion}}"></label>
		</div>
	    </div>
	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="stock">Stock</label> <input type="text" name="stock" class="form-control"value="{{$producto->stock}}"></label>
		</div>
	    </div>
	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="costo_unitario">Costo Unitario</label> <input type="text" name="costo_unitario"class="form-control" value="{{$producto->costo_unitario}}"></label>
		</div>
	    </div>
	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="Unidad_de_Medida">Unidad de Medida</label> <input type="text" name="Unidad_de_medida" class="form-control"value="{{$producto->Unidad_de_medida}}"></label>
		</div>
	    </div>
	    </div>
	    </div>
	   
	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="imagen">Imagen</label><input type="file" name="imagen" class="form-control" >
			@if (($producto->imagen)!="")
			<img src="{{asset('imagenes/productos/'.$producto->imagen)}}" width="120px" height="150px">
			@endif
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
			<button class="btn btn-primary float-right" type="submit"style='width:74px; height:30px'><i class="fa fa-save">Guardar</i></button>
			<button class="btn btn-danger float-right" type="reset"style='width:78px; height:30px'><i class="glyphicon glyphicon-ban-circle">Cancelar</i></button>
		</div>
		{!!Form::close()!!}
	</div>
</div>

@stop