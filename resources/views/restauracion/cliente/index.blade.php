@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
	<h3>Clientes Eliminados<a href="cliente/create"> 
			<button class="btn btn-success">Nuevo</button></h3></a>
		@include('restauracion.cliente.search')
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
					<th>Nombre
					</th>
					<th>Apellido Paterno
					</th>
					<th>Apellido Materno
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
					<th>Telefono
					</th>
					<th>Opciones
					</th>
					</thead>
				@foreach ($clientes as $clie)
				<tr>
					<td>
						{{$clie->idCliente}}
					</td>
					<td>
						{{$clie->nombre}}
					</td>
					<td>
						{{$clie->apellido_paterno}}
					</td>
					<td>
						{{$clie->apellido_materno}}
					</td>
					<td>
						{{$clie->calle}}
					</td>
					<td>
						{{$clie->no}}
					</td>
					<td>
						{{$clie->colonia}}
					</td>
					<td>
						{{$clie->municipio}}
					</td>
					<td>
						{{$clie->estado}}
					</td>
					<td>
						{{$clie->cp}}
					</td>
					<td>
						{{$clie->correo}}
					</td>
					<td>
						{{$clie->telefono}}
					</td>
					<td>

						<a href="" data-target="#modal-delete-{{$clie->idCliente}}" data-toggle="modal"><button class="btn btn-danger "style='width:70px; height:30px'>Activar</button></a>

					</td>
				</tr>
				@include('restauracion.cliente.modal')
				@endforeach
				
			</table>
		</div>
		{{$clientes->render()}}
	</div>
</div>
</div>

@endsection