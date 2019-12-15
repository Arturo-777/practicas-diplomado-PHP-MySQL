<!DOCTYPE html>
<html>
<head>
	<title>hola mundo! @yield('title')</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	
</head>
<body>
<!--
<form class="form-group" method="POST" action="controller6">	
@csrf

<div class="form-inline">
	
<label>nombre:</label>
<input type="text" name="nombretxt" class="form-control">

<label>apellido:</label>
<input type="text" name="apellidotxt" class="form-control">

<label>grupo:</label>
<input type="text" name="grupotxt" class="form-control">

<label>cedula:</label>
<input type="text" name="cedulatxt" class="form-control">


</div>
-->

	
@yield('content')

<!--
<div class="btn-group">
	<button type="submit" class="btn-primary">personas</button>
	</div>

</form>
-->


</body>
</html>