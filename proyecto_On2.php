<!DOCTYPE html>
<html>
	<head>
		<meta charset= "UTF-8">	
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	</head>
	
	<body><center>
		<div class="container">
		
			<h2>Evaluación de riesgos</h2>
		
				<br><label for="enf">Alergia a Medicamentos:</label>
				<div class="input-group">
					<div class="radio">
						<label class="radio-inline"><input type="radio" name="aler">Sí</label>
					</div>
					<div class="radio">
						<label class="radio-inline"><input type="radio" name="aler">No</label>
					</div>
				</div>
							
				<label for="enf">Enfermedad:</label>
				<div class="input-group">
						<select class="form-control"id="enf" name="enfermedad" >
						<option value="" selected="selected">- seleccione -</option>
							<option>Diabetes</option>
							<option>Hipertensión</option>
							<option>Asma</option>
						</select>
				</div>
						
				<label for="enf">Embarazo/lactancia:</label>	
					<div class="input-group">				
						<select class="form-control" id="emb" name="embarazo">
							<option value="" selected="selected">- seleccione -</option>
							<option>Embarazo</option>
							<option>Lactancia</option>
						</select>
				</div>
				
				<br><br><button class="btn btn-primary">Siguiente</button>
				
		</div></center>													
	</body>
</html>