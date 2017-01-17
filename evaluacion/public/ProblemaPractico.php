<?php
$file = file_get_contents("employees.json");
$datos = json_decode($file);
include "employee.php";
$employees = array();
$correo = "";
if(isset($_GET['correo'])){
	$correo = $_GET['correo'];
}
for($i=0;$i<count($datos);$i++){
	$e = new employee();
	if($correo!=""){
		if(strpos($datos[$i]->email, $correo)){
			$e = $datos[$i];
			$employees []= $e;
		}
	}else{
		$e = $datos[$i];
		$employees []= $e;
	}
}
?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<h2>Problema Practico</h2>
<h5><a href="index.php">Volver</a></h5>
<div class="panel">
	<div class="panel-heading">
		<h3>Busqueda</h3>
	</div>
	<div class="panel-body">
		<form name="busqueda" action="ProblemaPractico.php">
			<div class="row">
				<div class="col-md-2">Correo :</div>
				<div class="col-md-4"><input type="text" name="correo" class="input-sm form-control" value="<?php echo $correo; ?>"></div>
				<div class="col-md-2"><button type="submit">Convertir</button></div>
			</div>
		</form>
	</div>
</div>
<div class="panel">
	<div class="panel-heading">
		<h3>Employees</h3>
	</div>
	<div class="panel-body">
		<table class="table">
			<thead>
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Position</th>
					<th>Salary</th>
					<th>Details</th>
				</tr>
			</thead>
			<tbody>
			<?php for($i=0;$i<count($employees);$i++){ ?>
				<tr>
					<td><?php echo $employees[$i]->name; ?></td>
					<td><?php echo $employees[$i]->email; ?></td>
					<td><?php echo $employees[$i]->salary; ?></td>
					<td><?php echo $employees[$i]->position; ?></td>
					<td><a href="Detalles.php?id=<?php echo $employees[$i]->id; ?>">Detalles</a></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</div>
</body>
</html>