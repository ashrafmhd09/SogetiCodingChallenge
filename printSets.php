<?php

class PrintSets {

	public $start, $end, $target, $set_size;

	public function printResultSet($start, $end, $target, $set_size) {
		$this->start = $start;$this->end = $end;$this->target = $target;$this->set_size = $set_size;
	}

	public function printAllCombinations() {
		$callTimes = array();
		if ($this->end > $this->target) {
			if ($this->set_size == 2) {
				for ($i=$this->start;$i<$this->end;$i++) {
					echo $i . "-";
					echo $this->target-$i  . "\n";
				}
			} 			
		}
	}
}


$print = new PrintSets();
$print->printResultSet(1,10,10,2);
$print->printAllCombinations();