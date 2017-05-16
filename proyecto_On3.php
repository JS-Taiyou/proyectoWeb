<!DOCTYPE html>
<html>
	<head>
		<meta charset= "UTF-8">	
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	</head>
	
	<body><center>
		<div class="container">
		
		<h2>Aprobación de medicamentos</h2>			
										
			<div class="form-group">
				<label class=""> Personas que dependen económicamente de usted:</label><br>
					<input type="radio" name="personas" value="1"> 1 a 2<br>
					<input type="radio" name="personas" value="2"> 2 a 4<br>
					<input type="radio" name="personas" value="3"> Más de 4<br>
					<input type="radio" name="personas" value="4"> Ninguna<br>
			</div>
			
			<!-- opcion 1	 -->		
			<label for="medicamento">Medicamento solicitado</label>
				<div class="input-group">
					<select class="form-control" id="medic" name="medicamento">
						<option value="" selected="selected" disabled> a. Diabetes </option>
						<option value="1">Glucopha</option>
						<option value="2">Insulina</option>
					 </select>
				</div>  	

			<!-- opcion 2	 -->
				<div class="input-group">
					<select class="form-control" id="medic" name="medicamento">
					<option value="" selected="selected" disabled> b. Hipertensión </option>
						<option value="1">Clorotiacida</option>
						<option value="2">Hidroclorotiacida</option>
					  </select>
				</div>
			
			<!-- opcion 3 -->
				<div class="input-group">
					<select class="form-control" id="medic" name="medicamento">
					<option value="" selected="selected" disabled> c. Asma </option>
						<option value="1">Albutero</option>
						<option value="2">Sambutamol</option>
					</select>
				</div>



			<br><div class="input-group">
				<label class="">Monto de ingresos:</label><br>
					<input type="radio" name="ingresos" value="1"> 1 a $5,000<br>
					<input type="radio" name="ingresos" value="2"> $5,000 a $10,000<br>
					<input type="radio" name="ingresos" value="3"> $10,0000 a $20,000<br>
					<input type="radio" name="ingresos" value="4"> Más de $20,000<br>		
			</div>

			<br><br><button class="btn btn-primary">Guardar</button>
			
		</form></center>													
	</body>
</html>