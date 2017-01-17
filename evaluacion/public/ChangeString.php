<?php
class ChangeString {
	function build($string){
		$return = "";
		$tam = strlen($string);
		for($i=0;$i<$tam;$i++){
			$car = $string[$i];
			if(ctype_alpha($car)){
				$asci = ord($car);
				$car = chr($asci+1);
				if(!ctype_alpha($car)){
					$car = chr($asci-25);
				}
				$return .= $car;
			}else{
				$return .= $car;
			}
		}
		return $return;
	}
}
?>