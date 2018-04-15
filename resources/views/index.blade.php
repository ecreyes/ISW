<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<title>Index</title>
</head>
<body>
	<div class="container">
		<h1>Valoración de opciones sobre acciones</h1>
		<div class="row">
		  <div class="col-4">
		  	<div class="card bg-light mb-3">
				  <div class="card-body">
					<form method="POST" action="callR" enctype="multipart/form-data">
						{!!csrf_field()!!}
						<label for="csv">
							Archivo CSV
							<input type="file" name="csv">
						</label>
						<label for="parametro">
							Parametro:
							<input type="text" name="parametro">
						</label>
						<input type="submit" value="Calcular">
					</form>
				  </div>
			</div>
		  </div>
		  <div class="col-8">Gráfico</div>
		</div>
	</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>