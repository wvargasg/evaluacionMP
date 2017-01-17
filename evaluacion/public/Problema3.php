<?php
include "ClearPar.php";
$cs = new ClearPar();
$ini = "";
$fin = "";
if(isset($_GET['inicio'])){
	$ini = $_GET['inicio'];
	$fin = $cs->build($ini);
}
?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<form name="cs" action="Problema3.php">
<div class="panel">
	<div class="panel-heading">
		<h3>Problema 03</h3>
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-2">
				<b>Texto Inicial :</b>
			</div>
			<div class="col-md-2">
				<input type="text" name="inicio" class="input-sm form-control" value="<?php echo $ini; ?>">
			</div>
			<div class="col-md-2">
				<button type="submit">Convertir</button>
			</div>
			<div class="col-md-2">
				<b>Texto Resultante :</b>
			</div>
			<div class="col-md-2">
				<label id="final" class="input-sm"><?php echo $fin; ?></label>
			</div>
			<div class="col-md-2">
				<a href="index.php">Volver</a>
			</div>
		</div>
	</div>
</div>
</form>
</body>
</html>