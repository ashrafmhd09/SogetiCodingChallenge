<?php

function rec($initSet, $sum, $index, $inputArray, $target, $set_size) {
	$output = array();
	if ($sum == $target) {
		if (count($initSet) == $set_size) {
			echo "[\"";
			for ($i=0;$i<count($initSet);$i++) {
				echo $initSet[$i];
				if ($i != count($initSet)-1) {
					echo ",";
				}
			}
			echo "\"]";
		}	
	}
	if ($sum > $target || $index == count($inputArray) || count($initSet) >= $set_size) {
		return;
	}
	$total = $target/$inputArray[$index];
	for($i=0;$i<$total;$i++) {
		for ($k=0;$k<$i;$k++) {
			array_push($initSet, $inputArray[$index]);
		}
		rec($initSet, $sum + $i*$inputArray[$index], $index+1, $inputArray, $target, $set_size);
		for($x=0;$x<$i;$x++) {
			array_pop($initSet);
		}
	}
}

function partitionList($start, $endLimit, $target, $set_size) {
	$numSet = array();
	for ($i=$start;$i<$endLimit;$i++) {
		array_push($numSet, $i);
	}
	$initSet = array();
	rec($initSet, 0, 0, $numSet, $target, $set_size);
}


partitionList(1,70,50,2);
partitionList(1,50,70,3);