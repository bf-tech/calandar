<?php

class Hijri extends Calendar {

	public $totalMonths = 0;
	public $hijriYear = 0;
	public $hijriMonth = 0;
	public $hijriDay = 0;
	public $yearRank = 0;
	public $cycles = 0;

	function isLeapYear($year) {
		$leapYears = [2, 5, 7, 10, 13, 16, 18, 21, 24, 26, 29];

		return (in_array($year, $leapYears)) ? true : false ;
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

	function hijriDate() {
		$this->cycles = floor(($this->totalMonths / 12) / 30);
		$cycleMonths = $this->totalMonths - ($this->cycles * 30 * 12);
		$cycleDays = $cycleMonths * 29.53058868;
		$y = 1;
		$m = 1;
		$d = 0;

		for ($i=1; $i <= $cycleDays - 1; $i++) {

			$d++;

			if ($m % 2 == 0) {
				if (($m < 12) and ($d == 29)) {
					$m++;
					$d=0;
				} else if (($m == 12) and ($d == 30)) {
					$m++;
					$d=0;
				}
			}

			if (($m % 2 == 1)) {
				if ($d == 29) {
					if (($m == 11) and (!$this->isLeapYear($y))) {
						$m++;
						$d=0;
					}
				} else if ($d == 30) {
					$m++;
					$d=0;
				}
			}

			if ($m == 13) {
				$y++;
				$m = 1;
			}

		}

		$this->hijriYear = ($y + $this->cycles * 30);
		$this->hijriMonth = $m;
		$this->hijriDay = $d;

//	return $cycleMonths - $this->yearRank * 12 ;
//	return $cycleDays;

		return $d.' '.$m.' '.($y + $this->cycles * 30);

	}

}