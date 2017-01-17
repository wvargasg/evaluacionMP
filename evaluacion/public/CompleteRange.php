<?php
class CompleteRange {
	function build($array){
		$return = array();
		$tam = count($array);
		if($tam>0){
			$min = $array[0];
			$max = $array[$tam-1];
			if($max>=$min){
				for($i=$min;$i<=$max;$i++){
					$return []= $i;
				}
				return $return;
			}else{
				return $return;
			}
		}else{
			return $return;
		}
	}
}
?>