@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
	<h3>Listado de Ventas<a href="ventas/create"> 
			<button class="btn btn-success"><i class="fa fa-pencil">Nuevo</i></button></h3></a>
		@include('ventas.ventas.search')
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
					<th>Cliente
					</th>
					<th>Proveedor
					</th>
					<th>Fecha Pago
					</th>
					<th>Fecha Inicio
					</th>
					<th>Fecha Fin
					</th>
					<th>Estado de la venta
					</th>
					<th>Opciones
					</th>
					</thead>
				@foreach ($ventas as $ven)
				<tr>
					<td>
						{{$ven->idVenta}}
					</td>
					<td>
						{{$ven->cliente}}
					</td>
					<td>
						{{$ven->users}}
					</td>
					<td>
						{{$ven->fecha_pago}}
					</td>
					<td>
						{{$ven->fecha_inicio}}
					</td>
					<td>
						{{$ven->fecha_fin}}
					</td>
					<td>
						{{$ven->Estado}}
					</td>
					<td>
						<a href="{{URL::action('VentaController@edit',$ven->idVenta)}}"><button class="btn btn-info" style='width:70px; height:30px'><i class="fa fa-edit">Editar</i></button></a>

						<a href="" data-target="#modal-delete-{{$ven->idVenta}}" data-toggle="modal"><button class="btn btn-danger "style='width:74px; height:30px'><i class="fa fa-trash">Eliminar</i></button></a>

					</td>
				</tr>
                @include('ventas.ventas.modal')
				@endforeach
				
			</table>
		</div>
		{{$ventas->render()}}
	</div>
</div>
</div>

@endsection