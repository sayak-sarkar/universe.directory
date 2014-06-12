<!DOCTYPE HTML>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="script.js"></script>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<div class="jumbotron align-center bg-primary" align="center">
		<h1>Welcome to Universe Directory</h1>
	</div>


	<div class="alert alert-success" id="success"></div>
	<div class="alert alert-danger" id="danger"></div>
	<div align="center " class="container-fluid col-md-6 col-md-offset-3">
		<!-- <form role="form" class="col-md-6 col-md-offset-3"> -->
  		<div class="form-group">
    		<label for="childlocation">Enter Location</label>
   			<input type="text" class="form-control" id="childlocation" placeholder="Enter Location">
  		</div>
  		
  		<div class="form-group">
    		<label for="parentlocation">Enter Parent Location</label>
    		<input type="text" class="form-control" id="parentlocation" placeholder="Enter Parent Location">
  		</div>
  		
  		<button type="" class="btn btn-default" id="submit">Submit</button>
		<!-- </form> -->
	</div>

	<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
  		<div class="container " align="center">
  			<h4>License : GNU GENERAL PUBLIC LICENSE by Sayak Sarkar and Harsh Kothari
  			</h4>
		</div>
	</nav>
</body>
</html>