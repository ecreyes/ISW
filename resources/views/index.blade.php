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
		  <div class="col-10">
		  	<div class="card text-white bg-secondary mb-3">
				  <div class="card-body">
					<form method="POST" action="callR" enctype="multipart/form-data">
						{!!csrf_field()!!}
						<label for="csv">
							Archivo CSV
							<input type="file" name="csv">
						</label>
						<br>
						<label for="anios">
							Tiempo en años(T):
							<input type="text" name="anios" class="form-control">
						</label>
						<label for="tasa">
							Tasa de interes libre de riesgo(r):
							<input type="text" name="tasa" class="form-control">
						</label>
						<label for="precio">
							Precio(K):
							<input type="text" name="precio" class="form-control">
						</label>

					  <div class="form-group">
					    <label for="AE">Opción</label>
					    <select class="form-control" id="AE">
					      <option value="1">Europea</option>
					      <option value="2">Americana</option>
					    </select>
					  </div>

					  <div class="form-group">
					    <label for="CV">Tipo</label>
					    <select class="form-control" id="CV">
					      <option value="1">Compra</option>
					      <option value="2">Venta</option>
					    </select>
					  </div>
						<input type="submit" value="Calcular" class="btn btn-primary float-right">
					</form>
				  </div>
			</div>
		  </div>
		</div>
	</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>