@extends ('layouts.admin')
@section ('contenido')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Categorias Eliminadas<button class="btn btn-success"  style="margin: 10px"onclick="history.back()" name="volver atrás" value="volver atrás" >Regresar</button></h3>
		@include('restauracion.categoria.search')
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
					<th>Opciones
					</th>
				</thead>
				@foreach ($categorias as $cate)
				<tr>
					<td>
						{{$cate->idCategoria}}
					</td>
					<td>
						{{$cate->nombre}}
					</td>
					
					<td>
					
                        <a href="" data-target="#modal-delete-{{$cate->idCategoria}}" data-toggle="modal"><button class="btn btn-primary" style='width:70px; height:30px'>Activar</button></a> 
					</td>
				
				</tr>
				@include('restauracion.categoria.modal')
				@endforeach
			
				
			</table>

		</div>
		{{$categorias->render()}}
	</div>
</div>
</div>

@endsection