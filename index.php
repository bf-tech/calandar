<?php

include_once('helper/autoload.php');

$H = new Hijri;

if (isset($_GET['input'])) {

	$H->setDate($_GET['input']);

}

$H->hijriDate();

// URL: calendar?interface=true
if (isset($_GET['interface']) and ($_GET['interface'] == "true")) {

include 'interface.php' ;

} else {

	echo $H->result();

}

?>
