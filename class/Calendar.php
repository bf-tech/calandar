<?php
/**
 * @author Fethi Bendimerad <fethi_bendimerad@hotmail.com>
 * @link http://www.bf_tech.info/
 */
class Calendar {

	protected $gregorianDays = 0;
	protected $gregorianDate = '';

	function __construct() {
		date_default_timezone_set('America/New_York');
		echo 'Calendar Class constructed at '.date("H:i:s").'<br/>';
	}

	public function result() {
    var_dump(get_object_vars($this));
  }

	public function setDate($d, $m, $y) {
		return $this->gregorianDate = date('Y-m-d', mktime(0, 0, 0, $m, $d, $y));
	}

	public function getDate() {
		return date('l d F Y L',strtotime($this->gregorianDate));
	//	return $this->gregorianDate->format('l d F Y L');
	}

	protected function gregorianDays() {

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

}
