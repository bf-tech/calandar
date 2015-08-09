
	<form method="get" action="<?php $_SERVER['PHP_SELF'] ?>">
		<input id ="d" type="number" name="day" min="1" max="31">
		<input id ="m" type="number" name="month" min="1" max="12">
		<input id ="y" type="number" name="year" min="622" max="2500">
		<input type="submit">
	</form>

<?php

include_once('helper/autoload.php');

$Hijri = new Hijri;

if (isset($_GET['year'])) {

	echo $Hijri->gregorianDays().' days from 1 Moharram year I Hijri til today<br/><br/>';

	echo $Hijri->setGivenDate($_GET['day'], $_GET['month'], $_GET['year']).' Given Date<br/>';

}

	echo $Hijri->gregorianDate().'<br/>';

	echo 'Gregorian Days: '.$Hijri->gregorianDays().'<br/>';

	echo 'total months: '.$Hijri->totalMonths().'<br/>';

	echo 'year Rank: '.$Hijri->yearRank().'<br/>';

	echo 'hijri date: '.$Hijri->hijriDate().'<br/>';

	echo 'hijri Day: '.$Hijri->hijriDay.'<br/>';
	echo 'hijri Month: '.$Hijri->hijriMonth.'<br/>';
	echo 'hijri Year: '.$Hijri->hijriYear.'<br/>';

?>
