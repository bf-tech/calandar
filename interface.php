<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Calendar Conversion</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    
	</head>
	<body>
		<div class="container-fluid"><div class="row"><div class="col-md-4 col-md-offset-4">
		<form class="form-inline" method="get" action="<?php $_SERVER['PHP_SELF'] ?>">
			<div class="form-group">
			<input class="form-control" id ="d" type="number" name="d" min="1" max="31" placeholder="31">

			<input class="form-control" id ="m" type="number" name="m" min="1" max="12" placeholder="12">

			<input class="form-control" id ="y" type="number" name="y" min="622" max="2500" placeholder="2015">

			<select class="form-control" name="date">
				<option value="gregorian">Gregorian to Hijri</option>
		<!--			<option value="hijir">Hijri to Gregorian</option>
		-->
			</select>
			<input type="hidden" name="interface" value="true">
			<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></button>
			</div>
		</form>

		<?php if (isset($_GET['date'])) {
			echo "chosen day ".$H->hijriDate();
		} else {
			echo "today ".$H->hijriDate();
		}?>

	</div></div></div>
	</body>
</html>
