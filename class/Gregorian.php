<?php

class Gregorian {

	public $gregorianDate = '';
	public $gregorianDays = 0;

	function __construct() {
		date_default_timezone_set('America/New_York');
		echo 'Gregorian Class constructed at '.date("H:i:s").'<br/>';

		/*
			Initiate the gregorianDate to the current date in case none is provided.
		*/
		$this->gregorianDate = date('Y-m-d');
	}

	public function setGivenDate($d, $m, $y) {
		return $this->gregorianDate = date('Y-m-d', mktime(0, 0, 0, $m, $d, $y));
	}

	public function gregorianDate() {

		return date('l d F Y L',strtotime($this->gregorianDate));
	}

	public function gregorianDays() {

		$firstMoharram = new DateTime('622-7-16');
		$givenDate = new DateTime($this->gregorianDate);
		$thursdayOctobre = new DateTime('1582-10-4');

		if ($givenDate <= $thursdayOctobre) {

			return $this->gregorianDays = $firstMoharram->diff($givenDate)->days;

		} else {

			$fridayOctobre = new DateTime('1582-10-15');
		
			return $this->gregorianDays = $firstMoharram->diff($thursdayOctobre)->days + $fridayOctobre->diff($givenDate)->days; //same as having total minus 10 days
		}
	}

	/*
		This function show that the DateTime::diff doesn't take in consideration de 10 days jump of October 1582 by returning the value of 11 instead of 1.
	*/
	public function thursdayFriday() {
		$firstDate = new DateTime('1582-10-4');
		$lastDate = new DateTime('1582-10-15');

		return $firstDate->diff($lastDate);
	}
}