@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Ingresos Eliminados<button class="btn btn-success"  style="margin: 10px"onclick="history.back()" name="volver atrás" value="volver atrás" >Regresar</button></h3>
		@include('restauracion.ingreso.search')
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
					<th>Cliente
					</th>
					<th>Producto
					</th>
					<th>Precio Compra
					</th>
					<th>Fecha Compra
					</th>
					<th>Tipo Pago
					</th>
					<th>Estado
					</th>
					<th>Opciones
					</th>
				</thead>
				@foreach ($ingresos as $ing)
				<tr>
					<td>
						{{$ing->idIngreso}}
					</td>

					<td>
						{{$ing->cliente}}
					</td>
					<td>
						{{$ing->productos}}
					</td>
					<td>
						{{$ing->precio_compra}}
					</td>
					<td>
						{{$ing->fecha_compra}}
					</td>
					<td>
						{{$ing->tipo_pago}}
					</td>
					
					<td>
						{{$ing->estado}}
					</td>
					<td>

						<a href="" data-target="#modal-delete-{{$ing->idIngreso}}" data-toggle="modal"><button class="btn btn-danger">Activar</button></a>

					</td>
				</tr>
					@include('restauracion.ingreso.modal')
				@endforeach
				
			</table>
		</div>

		{{$ingresos->render()}}
	</div>
</div>
</div>

@endsection
						
