
	<form method="get" action="<?php $_SERVER['PHP_SELF'] ?>">
		<input id ="d" type="number" name="d" min="1" max="31" placeholder="31">
		<input id ="m" type="number" name="m" min="1" max="12" placeholder="12">
		<input id ="y" type="number" name="y" min="622" max="2500" placeholder="2015">
		<select name="date">
			<option value="gregorian">Gregorian to Hijri</option>
			<option value="hijir">Hijri to Gregorian</option>
		</select>
		<input type="submit">
	</form>

<?php

include_once('helper/autoload.php');

$Hijri = new Hijri;

if (isset($_GET['date']) and ($_GET['date'] == "gregorian")) {

//	echo ($_GET['date'] == "g") ? "g<br/>" : "0<br/>" ;

	echo $Hijri->gregorianDays().' days from 1 Moharram year I Hijri til today<br/><br/>';

	echo $Hijri->setGivenDate($_GET['d'], $_GET['m'], $_GET['y']).' Given Date<br/>';

}

	echo $Hijri->gregorianDate().'<br/>';

	echo 'Gregorian Days: '.$Hijri->gregorianDays().'<br/>';

	$Hijri->totalMonths();

	$Hijri->yearRank();

	echo 'Hijri date: '.$Hijri->hijriDate().'<br/>';

//	echo 'hijri Day: '.$Hijri->hijriDay.'<br/>';
//	echo 'hijri Month: '.$Hijri->hijriMonth.'<br/>';
//	echo 'hijri Year: '.$Hijri->hijriYear.'<br/>';

?>
