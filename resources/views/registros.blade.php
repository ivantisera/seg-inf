<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Registros</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">




<style>
 @import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 90%;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
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

 table {
  border-spacing: 1;
  border-collapse: collapse;
  background: white;
  overflow: hidden;
  width: 100%;
  margin: 0 auto;
  position: relative;
}
table * {
  position: relative;
}
table td, table th {
  padding-left: 8px;
}
table thead tr {
  height: 60px;
}

table thead tr th{
  font-size: 0.85em;
}
table thead tr {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}


table tbody tr {
  height: 48px;
  border-bottom: 1px solid #E3F1D5;
  font-size: 0.75em;
}
table tbody tr:last-child {
  border: 0;
}
table td, table th {
  text-align: left;
}
table td.l, table th.l {
  text-align: right;
}
table td.c, table th.c {
  text-align: center;
}
table td.r, table th.r {
  text-align: center;
}
h1{
  margin-bottom: 50px;
}


</style>
    </head>
    <body>

<div class="login-page">
  <div class="form">
  <h1>Registros ingresados</h1>

  @if(Session::has('message'))
  <div class="alert alert-success">
    {!! Session::get('message') !!}
  </div>
  @endif

    <table>
    <thead>
    <tr>
  		<th>Nombre completo</th>
  		<th>F. Nac</th>
      <th>Domicilio</th>
      <th>DNI</th>
  		<th>Nacionalidad</th>
      <th>Mail</th>
      <th>Teléfono</th>
      <th>Contacto</th>
      <th>Comentarios</th>
      <th>Equipo</th>
  	</tr>
    </thead>

    <tbody>

  	@foreach($registros as $registro)
  	<tr>
  		<td>{{$registro->apellido}}, {{$registro->nombre}} </td>
      <td>{{$registro->fecha_nacimiento}}</td>
      <td>{{$registro->calle}} {{$registro->numero}} - {{$registro->ciudad}},{{$registro->provincia}}, {{$registro->pais}}></td>
      <td>{{$registro->dni}}</td>
      <td>{{$registro->nacionalidad}}</td>
      <td>{{$registro->email}}</td>
      <td>{{$registro->telefono}}</td>
      <td>{{$registro->info_evento}}</td>
      <td>{{$registro->comentarios}}</td>
      <td>
      @if($registro->equipo_rojo == 1)
      Rojo
      @else
      Verde
      @endif
      </td>
  	</tr>
  	@endforeach

    </tbody>
  </table>
  <a href="{{ route('auth.logout') }}">Cerrar Sesión</a>
</div>
</div>
</body>
</html>
