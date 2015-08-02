<?php

class Hijri extends Calendar {

	public $totalMonths = 0;
	public $hijriYear = 0;
	public $hijriMonth = 0;
	public $yearRank = 0;
	public $cycles = 0;

	function isLeapYear() {
		$leapYear = [2, 5, 7, 10, 13, 16, 18, 21, 24, 26, 29];
		
		return (in_array($this->yearRank, $leapYear)) ? true : false ;
	}

	function totalMonths() {
		return $this->totalMonths = ($this->gregorianDays/29.53058868);
	}

	function yearRank() {
		return $this->yearRank = ($this->totalMonths / 12) % 30;
	}

	function hijriYear() {
		$this->cycles = floor(($this->totalMonths / 12) / 30);
		return $this->hijriYear = $this->yearRank + ($this->cycles * 30) + 1;
	}

	function hijriMonth() {
		$cycleMonths = $this->totalMonths - ($this->cycles * 30 * 12);
		$cycleDays = $cycleMonths * 29.53058868;

		for ($i=1; $i <= $cycleDays or $cycleDays <= 354; $i++) { 
			# code...
		}

	//	return $cycleMonths - $this->yearRank * 12 ;
		return $cycleDays;
	}



}