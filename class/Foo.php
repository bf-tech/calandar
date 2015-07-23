<?php

class Foo {

	// Something to say

	public $nums = 0;
	public $sum = 0;

	function __construct() {
		date_default_timezone_set('America/New_York');
		echo 'Foo Class constructed at '.date("H:i:s").'<br/>';
	}

	public function setNums(...$numbers) {
		return $this->nums = $numbers;
	}

	public function sumNums() {
		return $this->sum = array_sum($this->nums);
	}
}