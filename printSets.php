<?php



	function printAllCombinations($start, $end, $target, $set_size) {
			if ($set_size == 2) {
				for ($i=$start;$i<$end;$i++) {
					echo $i . "-";
					echo $target-$i  . "\n";
				}		
		}
	}



printAllCombinations(1,50,70,2);