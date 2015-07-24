<?php

if (isset($_GET['year'])) {

	include_once('helper/autoload.php');

	$Greg = new Gregorian;

	echo $Greg->gregorianDays().' days from 1 Moharram year I Hijir til today<br/><br/>';


	echo $Greg->setGivenDate($_GET['day'], $_GET['month'], $_GET['year']).' Given Date<br/>';

	echo $Greg->gregorianDate().'<br/>';

	echo $Greg->gregorianDays().' days from 1 Moharram I Hijir til the Given Date<br/>';

} else { ?>
	
	<form method="get" action="<?php $_SERVER['PHP_SELF'] ?>">
		<input id ="d" type="number" name="day" min="1" max="31">
		<input id ="m" type="number" name="month" min="1" max="12">
		<input id ="y" type="number" name="year" min="622" max="2500">
		<input type="submit">
	</form>

<?php } ?>
