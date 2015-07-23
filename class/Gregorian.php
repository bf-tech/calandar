<?php

class Gregorian {

	// Something to say

	public $day = 0;
	public $month = 0;
	public $year = 0;

	function __construct() {
		date_default_timezone_set('America/New_York');
		echo 'Gregorian Class constructed at '.date("H:i:s").'<br/>';
	}

	public function inDays() {

	}

	public function fromFirst() {

		$firstMoharram = new DateTime('622-7-16');
		$thursdayOctobre = new DateTime('1582-10-4');
		$fridayOctobre = new DateTime('1582-10-15');
		// $unixStart = new DateTime('1970-1-1');
		$current = date('Y-m-d');
		$currentDate = new DateTime($current);

		return $firstMoharram->diff($thursdayOctobre)->days + $fridayOctobre->diff($currentDate)->days;
	}

	public function test() {
		$firstDate = new DateTime('1582-10-4');
		$lastDate = new DateTime('1582-10-15');

		return $firstDate->diff($lastDate);
	}
}