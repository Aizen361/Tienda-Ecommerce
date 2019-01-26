<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Reg Excel</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('excel/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('excel/css/style.css') }}">
	
	<link rel="stylesheet" href="{{ asset('excel/css/editablegrid/editablegrid.css') }}" type="text/css" media="screen">
	<link rel="stylesheet" type="text/css" href="{{ asset('excel/css/micss.css') }}">
</head>
<body>
	<header>
		<div class="container">
			<h3>Registro Excel</h3>
		</div>
	</header>

	<section class="main row">
		
		<div class="container">
		<div>
		{{ Form::open (['url' => 'export', 'method' => 'POST', 'class' => 'form-horizontal']) }}

		{!! csrf_field() !!}
		<br><a href="{{ route('home') }}" class="btn btn-lg btn-primary btn-danger">Cancelar</a>
		{{ Form::submit('Procesar', ['class' => 'btn btn-lg btn-primary pull-right', 'id' => 'request'])}}
		<!-- <a href="#" class="btn btn-primary pull-right">Procesar</a> --><br><br>
		</div>

			<!-- <table class="table table-hover">
			<script>
		        console.log(value);
        	</script>
				<div id="tablecontent"></div>
				@
			</table> -->

		<div class="table-responsive">
			<table class="table table-striped">
	            <thead>
	                <tr>
	                	<th>#</th>
	                    <th>Nombre</th>
	                    <th>Descripcion</th>
	                    <th>Imagen</th>
	                    <th>Stock</th>
	                    <th>Costo Unitario</th>
	                    <th>Unidad de Medida</th>
	                </tr>
	            </thead>
	            <tbody>
	            	@foreach($data as $key => $value)

					<tr>
						<td>{!! $i = $value['id'] + 1 !!}</td>
						<td>
							<input type="text" size="10"  name="nombre[]" value="{!! $value['nombre'] !!}" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="{{ (isset($errors[$value['id']]['nombre'])) ? $errors[$value['id']]['nombre'] : '' }}" class="{{ (isset($errors[$value['id']]['nombre'])) ? 'form-control has-error' : '' }}">
						</td>
						<td>
							<input type="text" size="10"  name="descripcion[]" value="{!! $value['descripcion'] !!}" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="{{ (isset($errors[$value['id']]['descripcion'])) ? $errors[$value['id']]['descripcion'] : '' }}" class="{{ (isset($errors[$value['id']]['descripcion'])) ? 'form-control has-error' : '' }}">
						</td>
						<td>
							<input type="text" size="10"  name="imagen[]" value="{!! $value['imagen'] !!}" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="{{ (isset($errors[$value['id']]['imagen'])) ? $errors[$value['id']]['imagen'] : '' }}" class="{{ (isset($errors[$value['id']]['imagen'])) ? 'form-control has-error' : '' }}">
						</td>

						<td>
							<input type="text" size="10"  name="stock[]" value="{!! $value['stock'] !!}" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="{{ (isset($errors[$value['id']]['stock'])) ? $errors[$value['id']]['stock'] : '' }}" class="{{ (isset($errors[$value['id']]['stock'])) ? 'form-control has-error' : '' }}">
						</td>

						<td>
							<input type="text" size="10" name="costo_unitario[]" value="{!! $value['costo_unitario'] !!}" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="{{ (isset($errors[$value['id']]['costo_unitario'])) ? $errors[$value['id']]['costo_unitario'] : '' }}" class="{{ (isset($errors[$value['id']]['costo_unitario'])) ? 'form-control has-error' : '' }}">
						</td>

						<td>
							<input type="text" size="10" name="unidad_de_medida[]" value="{!! $value['unidad_de_medida'] !!}" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="{{ (isset($errors[$value['id']]['unidad_de_medida'])) ? $errors[$value['id']]['unidad_de_medida'] : '' }}" class="{{ (isset($errors[$value['id']]['unidad_de_medida'])) ? 'form-control has-error' : '' }}">
						</td>

					@endforeach

	                {{ Form::close() }}
		        </tbody>
	        </table>
	        </div>
		</div>	
	</section>



	<footer class="footer">
		<div class="container">
			<h3 class="text-muted">Prueba</h3>
		</div>
		</footer>
		<!-- <script src="{{ asset('js/editablegrid/editablegrid.js') }}"></script> -->
	<!-- [DO NOT DEPLOY] --> <!-- <script src="{{ asset('js/editablegrid/editablegrid_renderers.js') }}" ></script> -->
	<!-- [DO NOT DEPLOY] --> <!-- <script src="{{ asset('js/editablegrid/editablegrid_editors.js') }}" ></script> -->
	<!-- [DO NOT DEPLOY] --> <!-- <script src="{{ asset('js/editablegrid/editablegrid_validators.js') }}" ></script> -->
	<!-- [DO NOT DEPLOY] --> <!-- <script src="{{ asset('js/editablegrid/editablegrid_utils.js') }}" ></script> -->
	<!-- [DO NOT DEPLOY] --> <!-- <script src="{{ asset('js/editablegrid/editablegrid_charts.js') }}" ></script> -->
	<!-- <script type="text/javascript" src="{{ asset('js/tableEdit.js') }}"></script> -->	<!-- tabla editable-->
	<script type="text/javascript" src="{{ asset('excel/js/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ asset('excel/js/bootstrap.min.js') }}"></script>
		<!-- mi ajax -->
	<script type="text/javascript" src="{{ asset('excel/js/mijs.js') }} "></script>

</body>
</html>