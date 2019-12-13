<!DOCTYPE html>
<html>
<head>
	<title>hola mundo! @yield('title')</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	
</head>
<body>

<form class="form-group" method="POST" action="/controller6@POSTpersonas">	
	
@yield('content')
@csrf

<div><button type="submit" class="btn-btn-primary">personas</button></div>

</form>



</body>
</html>