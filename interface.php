<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hijri Calendar Conversion</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="bootstrap-datepicker/css/bootstrap-datepicker3.min.css">

		<!-- Latest compiled and minified JavaScript -->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
	</head>
	<body>
		<div class="container-fluid"><div class="row"><div class="col-md-4 col-md-offset-4">
    <p> </p>
    <div class="panel panel-default">
    <div class="panel-body">
    <form class="form-inline text-center" method="get" action="<?php $_SERVER['PHP_SELF'] ?>">
			<input type="hidden" name="interface" value="true">
      <div class="input-group">
        <input id="picker" name="input" type="text" class="form-control" placeholder="dd-mm-yyyy">
        <span class="input-group-btn">
          <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Go!</button>
        </span>
      </div><!-- /input-group -->
		</form>
    <p> </p>
    <p><u><?php echo $H->getDate();?></u> Concords with:</p>
    <p>Day <b><?php echo $H->hijriDay;?></b></p>
    <p><b><?php echo $H->hijriMonthName;?></b> <small>(month number - <?php echo $H->hijriMonth;?>)</small></p>
    <p>Year <b><?php echo $H->hijriYear;?></b> Hijri</p>

    </div>
      <div class="panel-footer text-right"><small>www.bftech.info</small></div>
    </div>
	 </div></div></div>

  <script type="text/javascript">
    $('#picker').datepicker({
      format: "dd-mm-yyyy",
      startDate: "16/07/622",
      startView: 2,
      todayBtn: "linked",
      autoclose: true
    });
  </script>

	</body>
</html>
