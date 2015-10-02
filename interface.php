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
		<link rel="stylesheet" href="bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css">

		<!-- Latest compiled and minified JavaScript -->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
	</head>
	<body>
		<div class="container"><div class="row"><div class="col-md-4 col-md-offset-4">
    <p> </p>
    <div class="panel panel-default">
    <div class="panel-body">
    <p class="invisible">...</p>
    <form class="form-inline text-center" method="get" action="<?php $_SERVER['PHP_SELF'] ?>">
			<input type="hidden" name="interface" value="true">
      <div class="input-group">
        <input id="picker" name="input" type="text" class="form-control" placeholder="dd-mm-yyyy">
        <span class="input-group-btn">
          <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Go!</button>
        </span>
      </div><!-- /input-group -->
		</form>
    <p class="invisible">...</p>
      <div>
      <p>Gregorian Date:</p>
      <p class="text-center"><?php echo $H->getDate();?></p>
    <p class="invisible">...</p>
      <p>Concords with:</p>
      <p class="text-center"><b><?php echo $H->hijriDay." ".$H->hijriMonthName;?></b> <small>[month <?php echo $H->hijriMonth;?>]</small> Year <b><?php echo $H->hijriYear;?></b> Hijri</p>
      </div>
    <p class="invisible">...</p>
    </div>
    <div class="panel-footer text-right"><small><a href="https://github.com/bf-tech/calendar">github.com/bf-tech/calendar</a> - <a href="http://www.bftech.info/">bftech.info</a></small></div>
    </div>
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
