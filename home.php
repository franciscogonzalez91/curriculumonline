<?php  ?>
<!DOCTYPE html>
<html>
	<head>		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/globalStyles.css">
		<link rel="stylesheet" type="text/css" href="css/homeStyle.css">
		<script type="text/javascript" src="js/angular.min.js"></script>
		<script type="text/javascript" src="js/jquery-3.0.0.min.js"></script>
		<script type="text/javascript" src="js/app.js"></script>
		<title>Curriculum Online</title>
	</head>
	<body ng-app="curriculumApp">
		<div class="container">
			<div class="info-izquierda" ng-controller="infoCurriculumController">
				<div class="info-imagen"><img src="" title="imagen"></div>
				<div class="info-usuario">
					<label>{{nombreUsuario}}</label><br/>
					<label style="text-align: center;">{{fechaNacimiento}}</label><br/>
					<label>{{direccion}}</label><br/>
					<label>{{telefono}}</label><br/>
					<label>{{correoElectronico}}</label><br/>
				</div>				
			</div>
			<div class="info-derecha">Info 2a</div>
		</div>
		<script type="text/javascript" src="js/usuarioInfoController.js"></script>
	</body>
</html>