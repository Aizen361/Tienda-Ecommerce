@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
	<!--<h3>Listado de Clientes<a href="p/create"> 
			<button class="btn btn-success">Nuevo</button></h3></a>-->
		@include('almacen.proveedor.search')
	</div>
</div>

<div class="container">
<div class="row">
	<div class="col-lg-10 col-md-12 col-sm-12  col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id
					</th>
					<th>Nombre Empresa
					</th>
					<th>Calle
					</th>
					<th>Numero
					</th>
					<th>Colonia
					</th>
					<th>Municipio
					</th>
					<th>Estado
					</th>
					<th>Codigo Postal
					</th>
					<th>Correo
					</th>
					<th>Opciones
					</th>
					</thead>
				@foreach ($proveedores as $prov)
				<tr>
					<td>
						{{$prov->id}}
					</td>
					<td>
						{{$prov->name}}
					</td>
					<td>
						{{$prov->calle}}
					</td>
					<td>
						{{$prov->no}}
					</td>
					<td>
						{{$prov->colonia}}
					</td>
					<td>
						{{$prov->municipio}}
					</td>
					<td>
						{{$prov->estado}}
					</td>
					<td>
						{{$prov->cp}}
					</td>
					<td>
						{{$prov->email}}
					</td>
					<td>
						<a href="{{URL::action('ProveedorController@edit',$prov->id)}}"><button class="btn btn-info" style='width:70px; height:30px'><i class="fa fa-edit"></i></button></a>
					</td>
					<td>

						<a href="" data-target="#modal-delete-{{$prov->id}}" data-toggle="modal"><button class="btn btn-danger"style='width:70px; height:30px'><i class="fa fa-trash"></i></button></a>

					</td>
				</tr>
				@include('almacen.proveedor.modal')
				@endforeach
				
			</table>
		</div>
		<br>
		{{$proveedores->render()}}
	</div>
</div>
</div>

@endsection