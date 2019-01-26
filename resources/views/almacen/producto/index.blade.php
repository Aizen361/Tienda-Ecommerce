@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Productos<a href="producto/create"> 
			<button class="btn btn-success">Nuevo<i class="fa fa-pencil"></i></button></h3></a>
		@include('almacen.producto.search')
	</div>
</div>

<div class="container">
<div class="row">
	<div class="col-lg-7 col-md-12 col-sm-12  col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover text-center">
				<thead>
					<th>Id
					</th>
					<th>Nombre
					</th>
					<th>Descripcion
					</th>
					<th>Categoria
					</th>
					<th>Imagen
					</th>
					<th>Stock
					</th>
					<th>Costo Unitario
					</th>
					<th>Unidad de medida
					</th>
					<th colspan="2">Opciones
					</th>
				</thead>
				@foreach ($productos as $prod)
				<tr>
					<td>
						{{$prod->idProducto}}
					</td>
					<td>
						{{$prod->nombre}}
					</td>
					<td>
						{{$prod->descripcion}}
					</td>
					<td>
						{{$prod->categoria}}
					</td>
					<td>
						<img src="{{asset('imagenes/productos/'.$prod->imagen)}}" alt="{{$prod->nombre}}" height="60px" width="60px" class="img-thumbnail">
					</td>
					<td>
						{{$prod->stock}}
					</td>
					<td>
						{{$prod->costo_unitario}}
					</td>
					<td>
						{{$prod->Unidad_de_medida}}
					</td>
					<td>
						<a href="{{URL::action('ProductoController@edit',$prod->idProducto)}}"><button class="btn btn-info"style='width:70px; height:30px'><i class="fa fa-edit"></i></button></a>
					</td>
					<td>

						<a href="" data-target="#modal-delete-{{$prod->idProducto}}" data-toggle="modal"><button class="btn btn-danger"style='width:74px; height:30px'><i class="fa fa-trash"></i></button></a>

					</td>
				</tr>
				@include('almacen.producto.modal')
				@endforeach
				
			</table>
		</div>
		{{$productos->render()}}
	</div>
</div>
</div>

@endsection