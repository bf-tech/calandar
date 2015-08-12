<?php

include_once('helper/autoload.php');

$H = new Hijri;

if (isset($_GET['date']) and ($_GET['date'] == "gregorian")) {

	$H->setDate($_GET['d'], $_GET['m'], $_GET['y']);

}

// URL: calendar?interface=true
if (isset($_GET['interface']) and ($_GET['interface'] == "true")) {

include 'interface.php' ;

} else {

	echo $H->result();

}

?>
