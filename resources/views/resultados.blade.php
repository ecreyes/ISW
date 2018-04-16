<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<title>Resultados</title>
</head>
<body>
		<div class="container">
		<h1>Resultados obtenidos</h1>
		<div class="row">
		  <div class="col-4">
		  	<div class="card text-white bg-secondary mb-3">
				  <div class="card-body">
				  <p>Tiempo en años(T): {!!$anios!!} </p>
				  <p>Tasa libre de riesgo(r): {!!$tasa!!}</p>
				  <p>Precio ingresado: {!!$precio!!}</p>
				  <p>Opción: Europea</p>
				  <p>Tipo: Compra</p>
				  <p>Resultado F(x,t)= {!!$output!!}</p>
				  </div>
			</div>
		  </div>
		  <div class="col-8">
		  	<div class="container">
		  		<img src='output/test.png' height="500" width="500">
		  	</div>
		  </div>
		</div>
	</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>