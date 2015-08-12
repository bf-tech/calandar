<?php

/**
 * @author Fethi Bendimerad <fethi_bendimerad@hotmail.com>
 * @link http://www.bf_tech.info/
 */

class Hijri {

	public $hijriYear = 0;
	public $hijriMonth = 0;
	public $hijriDay = 0;
	public $hijriMonthName = '';
	public $cycleDays = 0;
	public $cycles = 0;
	public $gregorianDays = 0;
	public $gregorianDate = '';

	function __construct() {
		date_default_timezone_set('America/New_York');
		/*
		Initiate the gregorianDate to the current date in case none is provided.
		*/
		$this->gregorianDate = date('Y-m-d');
		$this->cycleDays();
	}

	public function result() {
    var_dump(get_object_vars($this));
  }

	public function setDate($date) {
		$this->gregorianDate = date('Y-m-d', strtotime($date));
		$this->cycleDays();
		return $this->gregorianDate;
	}

	public function getDate() {
		return date('l d F Y',strtotime($this->gregorianDate));
	}

	private function gregorianDays() {
		$firstMoharram = new DateTime('622-7-16');
		$givenDate = new DateTime($this->gregorianDate);
		$fridayOctobre = new DateTime('1582-10-15');

		if ($givenDate > $fridayOctobre) {
			return $this->gregorianDays = $firstMoharram->diff($givenDate)->days;

		} else {
			$thursdayOctobre = new DateTime('1582-10-4');
			return $this->gregorianDays = $firstMoharram->diff($givenDate)->days - $thursdayOctobre->diff($fridayOctobre)->days;
		}
	}


	public function isLeapYear($year) {
		$leapYears = [2, 5, 7, 10, 13, 16, 18, 21, 24, 26, 29];
		return (in_array($year, $leapYears)) ? true : false ;
	}

	public function hijriMonthName() {
		$name = [1 => "Mouharrem", 2 => "Safar", 3 => "Rabie Al-Awwal", 4 =>  "Rabie Al-Âkher", 5 => "Joumada I", 6 => "Joumada II", 7 =>  "Rajab", 8 => "Chabân", 9 => "Ramadân", 10 => "Chawwâl", 11 => "Dhoul-Qida", 12 => "Dhoul-Hijja"];
		return $this->hijriMonthName = $name[$this->hijriMonth];
	}

	private function cycleDays() {
		$this->gregorianDays();
		$totalMonths = $this->gregorianDays/29.53058868;
		$yearRank = ($totalMonths / 12) % 30;
		$this->cycles = floor(($totalMonths / 12) / 30);
		$cycleMonths = $totalMonths - ($this->cycles * 30 * 12);
		return $this->cycleDays = $cycleMonths * 29.53058868;
	}

	public function hijriDate() {
		$y = 1;
		$m = 1;
		$d = 0;

		for ($i=1; $i <= $this->cycleDays - 1; $i++) {

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

		}// End For loop

		$this->hijriYear = ($y + $this->cycles * 30);
		$this->hijriMonth = $m;
		$this->hijriDay = $d;

		return $d.' '.$this->hijriMonthName().' '.($y + $this->cycles * 30);
	}
}
