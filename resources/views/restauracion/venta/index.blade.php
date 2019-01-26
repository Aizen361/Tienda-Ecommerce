@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
	<h3>Categorias Eliminadas<button class="btn btn-success"  style="margin: 10px"onclick="history.back()" name="volver atrás" value="volver atrás" >Regresar</button></h3>
		@include('restauracion.venta.search')
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
						{{$ven->proveedor}}
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

						<a href="" data-target="#modal-delete-{{$ven->idVenta}}" data-toggle="modal"><button class="btn btn-danger"style='width:70px; height:30px'>Activar</button></a>

					</td>
				</tr>
				@include('restauracion.venta.modal')
				@endforeach
				
			</table>
		</div>
		{{$ventas->render()}}
	</div>
</div>
</div>

@endsection