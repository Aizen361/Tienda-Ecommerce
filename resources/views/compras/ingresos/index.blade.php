@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Ingresos<a href="ingresos/create"> 
			<button class="btn btn-success">Nuevo<i class="fa fa-pencil"></i></button></h3></a>
		@include('compras.ingresos.search')
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
						{{$ing->tipo_pago}}
					</td>
					
					<td>
						{{$ing->estado}}
					</td>
					<td>
						<a href="{{URL::action('IngresoController@edit',$ing->idIngreso)}}"><button class="btn btn-info " style='width:70px; height:30px'><i class="fa fa-edit"></i></button></a>
						<a href="" data-target="#modal-delete-{{$ing->idIngreso}}" data-toggle="modal"><button class="btn btn-danger" style='width:70px; height:30px'><i class="fa fa-trash"></i></button></a>

					</td>
					</tr>
					@include('compras.ingresos.modal')
				@endforeach
				
			</table>
		</div>

		{{$ingresos->render()}}
	</div>
</div>
</div>

@endsection
						
