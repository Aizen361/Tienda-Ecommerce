@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Productos Eliminados<button class="btn btn-success"  style="margin: 10px"onclick="history.back()" name="volver atrás" value="volver atrás" >Regresar</button></h3>
		@include('restauracion.producto.search')
	</div>
</div>

<div class="container">
<div class="row">
	<div class="col-lg-7 col-md-12 col-sm-12  col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
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
					<th>Opciones
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
						<img src="{{asset('imagenes/productos/'.$prod->imagen)}}" alt="{{$prod->nombre}}" height="90px" width="80px" class="img-thumbnail">
					</td>
					<td>
						{{$prod->stock}}
					</td>
					<td>
						{{$prod->costo_unitario}}
					</td>
					<td>
						{{$prod->unidad_de_medida}}
					</td>
					<td>
					<td>

						 <a href="" data-target="#modal-delete-{{$prod->idProducto}}" data-toggle="modal"><button class="btn btn-primary" style='width:70px; height:30px'>Activar</button></a> 

					</td>
				</tr>
								@include('restauracion.producto.modal')

				@endforeach
				
			</table>
		</div>
		{{$productos->render()}}
	</div>
</div>
</div>

@endsection