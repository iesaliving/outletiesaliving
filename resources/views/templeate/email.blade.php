<html>
<head></head>
<body>


@if(isset($fecha))
Una nueva reservación de Showroom
@endif


@if(isset($demo))
COOKING DEMO
@endif


@if(isset($nombre))	
<p>NOMBRE:{{$nombre}}</p>
@endif

@if(isset($email))	
<p>EMAIL:{{$email}}</p>
@endif

@if(isset($tel))	
<p>TELÉFONO:{{$tel}}</p>
@endif

@if(isset($showroom))	
<p>SHOWROOM:{{$showroom}}</p>
@endif

@if(isset($fecha))	
<p>FECHA:{{$fecha}}</p>
@endif

@if(isset($comentarios))	
<p>COMENTARIOS:{{$comentarios}}</p>
@endif

@if(isset($email_envio))	
<p>email_envio:{{$email_envio}}</p>
@endif

</body>
</html>