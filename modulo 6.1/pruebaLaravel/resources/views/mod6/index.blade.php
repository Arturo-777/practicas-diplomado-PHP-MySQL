@extends('layout.app')

@section('title','grupos')


@section('content')


<form class="form-group" method="POST" action="controller6@store">  
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


<div class="container">
  
  <!--<div><button type="submit" class="btn-btn-primary">grupos</button></div>
  
  <div><button type="submit" class="btn-btn-primary">personas</button></div>-->

  <div class="row align-items-start">
    <div class="col">
      grupo 1
      <div>a</div>
      <div>b</div>
  
    </div>
    <div class="col">
      grupo 2
    <div>a</div>
      <div>b</div>  


    </div>
    <div class="col">
      grupo 3
    <div>a</div>
      <div>b</div>  

    </div>

  </div>

<div class="btn-group">
  <button type="submit" class="btn-primary">personas</button>
  </div>

</form>


</body>
</html> 





@endsection







<!--<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<div class="container">
	
	<div><button type="submit" class="btn-btn-primary">grupos</button></div>
	
	<div><button type="submit" class="btn-btn-primary">personas</button></div>

  <div class="row align-items-start">
    <div class="col">
      grupo 1
      <!--<div>a</div>
      <div>b</div>
     <div class="row">
		a
		b

    </div>  
    </div>
    <div class="col">
      grupo 2
	  <div>a</div>
      <div>b</div>	


    </div>
    <div class="col">
      grupo 3
	  <div>a</div>
      <div>b</div>	

    </div>

  </div>




</body>
</html> 
--> 