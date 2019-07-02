<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Styles -->
        <style>
         @import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 450px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 450px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width:100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
/* .form .register-form {
  display: none;
} */
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: #76b852; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, #76b852, #8DC26F);
  background: -moz-linear-gradient(right, #76b852, #8DC26F);
  background: -o-linear-gradient(right, #76b852, #8DC26F);
  background: linear-gradient(to left, #76b852, #8DC26F);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">



<div class="login-page">
  <div class="form">
  <h1>Registro</h1>
  <p>Complete el formulario con los datos del participante.</p>
<form class="register-form" action="{{ route('crear') }}" method="post" enctype="multipart/form-data">

	@csrf
	<div class="form-group">
		<label for="nombre">Nombre</label>
		<input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') }}">
		@if($errors->has('nombre'))
		<div class="alert alert-danger">{{ $errors->first('nombre') }}</div>
		@endif
	</div>
    <div class="form-group">
		<label for="apellido">Apellido</label>
		<input type="text" name="apellido" id="apellido" class="form-control" value="{{ old('apellido') }}">
		@if($errors->has('apellido'))
		<div class="alert alert-danger">{{ $errors->first('apellido') }}</div>
		@endif
	</div>

<div class="form-group">
		<label for="fecha_nacimiento">Fecha de Nacimiento</label>
		<input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" value="{{ old('fecha_nacimiento') }}">
		@if($errors->has('fecha_nacimiento'))
		<div class="alert alert-danger">{{ $errors->first('fecha_nacimiento') }}</div>
		@endif
	</div>
    <div class="form-group">
		<label for="calle">Calle</label>
		<input type="text" name="calle" id="calle" value="{{ old('calle') }}">
		@if($errors->has('calle'))
		<div class="alert alert-danger">{{ $errors->first('calle') }}</div>
		@endif
    </div>
    <div class="form-group">
        <label for="numero">Altura</label>
		<input type="text" name="numero" id="numero"  value="{{ old('numero') }}">
		@if($errors->has('numero'))
		<div class="alert alert-danger">{{ $errors->first('numero') }}</div>
		@endif
	</div>
    <div class="form-group">
		<label for="ciudad">Ciudad</label>
		<input type="text" name="ciudad" id="ciudad" class="form-control" value="{{ old('ciudad') }}">
		@if($errors->has('ciudad'))
		<div class="alert alert-danger">{{ $errors->first('ciudad') }}</div>
		@endif
	</div>
    <div class="form-group">
		<label for="provincia">Provincia</label>
		<input type="text" name="provincia" id="provincia" class="form-control" value="{{ old('provincia') }}">
		@if($errors->has('provincia'))
		<div class="alert alert-danger">{{ $errors->first('provincia') }}</div>
		@endif
	</div>
    <div class="form-group">
		<label for="pais">País</label>
		<input type="text" name="pais" id="pais" class="form-control" value="{{ old('pais') }}">
		@if($errors->has('pais'))
		<div class="alert alert-danger">{{ $errors->first('pais') }}</div>
		@endif
	</div>

    <div class="form-group">
		<label for="dni">DNI / Pasaporte</label>
		<input type="text" name="dni" id="dni" class="form-control" value="{{ old('dni') }}">
		@if($errors->has('dni'))
		<div class="alert alert-danger">{{ $errors->first('dni') }}</div>
		@endif
	</div>
    <div class="form-group">
		<label for="nacionalidad">Nacionalidad</label>
		<input type="text" name="nacionalidad" id="nacionalidad" class="form-control" value="{{ old('nacionalidad') }}">
		@if($errors->has('nacionalidad'))
		<div class="alert alert-danger">{{ $errors->first('nacionalidad') }}</div>
		@endif
	</div>


     <div class="form-group">
		<label for="email">Correo electrónico</label>
		<input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}">
		@if($errors->has('email'))
		<div class="alert alert-danger">{{ $errors->first('email') }}</div>
		@endif
	</div>
    <div class="form-group">
		<label for="telefono">Teléfono</label>
		<input type="text" name="telefono" id="telefono" class="form-control" value="{{ old('telefono') }}">
		@if($errors->has('telefono'))
		<div class="alert alert-danger">{{ $errors->first('telefono') }}</div>
		@endif
	</div>

	<div class="form-group">
		<label for="info_evento">¿Cómo conociste el evento?</label>
		<textarea name="info_evento" id="info_evento" class="form-control">{{ old('info_evento') }}</textarea>
		@if($errors->has('info_evento'))
		<div class="alert alert-danger">{{ $errors->first('info_evento') }}</div>
		@endif
	</div>

<div class="form-group">
		<label for="comentarios">Comentarios</label>
		<textarea name="comentarios" id="comentarios" class="form-control">{{ old('comentarios') }}</textarea>
		@if($errors->has('comentarios'))
		<div class="alert alert-danger">{{ $errors->first('comentarios') }}</div>
		@endif
	</div>


	<div class="form-group">
    <label><input type="radio" value="1" name="equipo_rojo" id="rojo" selected>  Equipo rojo</label>
    <label><input type="radio" value="0" name="equipo_rojo" id="verde">  Equipo verde</label>
        
	</div>
    @if($errors->has('equipo_rojo'))
		<div class="alert alert-danger">{{ $errors->first('equipo_rojo') }}</div>
		@endif
	<button class="btn btn-block btn-primary">Registrarse</button>

</form>
</div>
</div>

            </div>
        </div>
    </body>
</html>
