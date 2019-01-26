@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Categoria<a href="categoria/create"> 
			<button class="btn btn-success">Nuevo <i class="fa fa-pencil"></i></ins></button></h3></a>

		@include('almacen.categoria.search')
	</div>
</div>

<div class="container">
<div class="row">
	<div class="col-lg-6 col-md-12 col-sm-12  col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id
					</th>
					<th>Nombre
					</th>
					<th>Opciones
					</th>
				</thead>
				@foreach ($categorias as $cat)
				<tr>
					<td>						
						{{$cat->idCategoria}}
						
					</td>
					<td>
						{{$cat->nombre}}
					</td>
					
					<td>
					
						<a href="{{URL::action('CategoriaController@edit',$cat->idCategoria)}}"><button class="btn btn-info" style='width:70px; height:30px'><i class="fa fa-edit"></i></button></a>

						<a href="" data-target="#modal-delete-{{$cat->idCategoria}}" data-toggle="modal"><button class="btn btn-danger" style='width:70px; height:30px'><i class="fa fa-trash"></i></button></a> 
					</td>
				</tr>
				@include('almacen.categoria.modal')
				@endforeach
				
			</table>
					
		</div>
		<br>
		{{$categorias->render()}}
	</div>
</div>
</div>

@endsection