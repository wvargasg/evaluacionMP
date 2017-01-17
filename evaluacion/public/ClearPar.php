<?php
class ClearPar {
	function build($string){
		$temp = "";
		$result = "";
		$val = false;
		$tam = strlen($string);
		for($i=0;$i<$tam;$i++){
			$car = substr($string, $i, 1);
			if(!$val && $car=="("){
				$temp = $car;
				$val = !$val;
			}
			if($val && $car==")"){
				$temp .= $car;
				$result .= $temp;
				$temp = "";
				$val = !$val;
			}
		}
		return $result;
	}
}
?>