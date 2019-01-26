<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inicia Sesión</title><!--Cabezera del Login-->
	<link rel="stylesheet" type="text/css" href="{{asset('form/css/style.css')}}">
	
</head>
<body>
 <div class="login-box">
 	<img src="{{asset('form/img/logo.png')}}" class="avatar" alt="Avatar Image">
 	<h1>Login Here</h1>
 	<form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
         <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
 		<label for="user">Nombre de usuario</label>
 		<input type="text" name="user" placeholder="Ingresa Tu Usuario" value="{{ old('name') }}">
 		 @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
         </div>

 		<label for="password">Contraseña</label>
 		<input type="password" name="password" placeholder="Ingresa tu Contraseña">
 		<input type="submit" value="Ingresar">
 		<a href="#">Olvidaste Tu contraseña</a>
 		<a href="#">No tienes Cuenta? Registrate Aqui!</a>

 	</form>
 </div>
</body>
</html>
