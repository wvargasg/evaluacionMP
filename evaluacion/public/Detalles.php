<?php
$file = file_get_contents("employees.json");
$datos = json_decode($file);
include "employee.php";
$e = new employee();
if(isset($_GET['id'])){
	for($i=0;$i<count($datos);$i++){
		if($datos[$i]->id == $_GET["id"]){
			$e = $datos[$i];
		}
	}
	$skills = array();
	for($i=0;$i<count($e->skills);$i++){
		$skill = $e->skills[$i];
		$skills []= $skill->skill;
	}
}
?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="panel">
	<div class="panel-heading">
		<h3>Problema Practico</h3>
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-1">
				<label class="input-sm">Name :</label>
			</div>
			<div class="col-md-3">
				<span class="input-sm"><?php echo $e->name; ?></span>
			</div>
			<div class="col-md-1">
				<label class="input-sm">Email :</label>
			</div>
			<div class="col-md-3">
				<span class="input-sm"><?php echo $e->email; ?></span>
			</div>
			<div class="col-md-1">
				<label class="input-sm">Phone :</label>
			</div>
			<div class="col-md-3">
				<span class="input-sm"><?php echo $e->phone; ?></span>
			</div>
		</div>
		<div class="row">
			<div class="col-md-1">
				<label class="input-sm">Address :</label>
			</div>
			<div class="col-md-3">
				<span class="input-sm"><?php echo $e->address; ?></span>
			</div>
			<div class="col-md-1">
				<label class="input-sm">Position :</label>
			</div>
			<div class="col-md-3">
				<span class="input-sm"><?php echo $e->position; ?></span>
			</div>
			<div class="col-md-1">
				<label class="input-sm">Salary :</label>
			</div>
			<div class="col-md-3">
				<span class="input-sm"><?php echo $e->salary; ?></span>
			</div>
		</div>
		<div class="row">
			<div class="col-md-1">
				<label class="input-sm">Skills :</label>
			</div>
			<div class="col-md-7">
				<span class="input-sm"><?php echo implode(", ", $skills); ?></span>
			</div>
			<div class="col-md-4">
				<a href="ProblemaPractico.php">Volver</a>
			</div>
		</div>
	</div>
</div>
</body>
</html>