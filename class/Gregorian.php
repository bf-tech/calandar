<?php

class Gregorian extends Calendar {

	/*
		This function show that the DateTime::diff doesn't take in consideration de 10 days jump of October 1582 by returning the value of 11 instead of 1.
	*/
	public function thursdayFriday() {
		$firstDate = new DateTime('1582-10-4');
		$lastDate = new DateTime('1582-10-15');

		return $firstDate->diff($lastDate);
	}
}