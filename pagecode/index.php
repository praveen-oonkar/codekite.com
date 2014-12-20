<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DashBoard</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script	src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/paper.css">

</head>
<body>
	<!--Nav Bar code-->
	<nav class="navbar navbar-inverse" role="navigation">
  		<div class="container-fluid">
  			<div class="navbar-header">
  				<a class="navbar-brand" href="index.php">CodeKite</a>
  			</div>

  			<ul class="nav navbar-nav navbar-right">
	  			<li class="dropdown">
			         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">UserName <span class="caret"></span></a>
			          <ul class="dropdown-menu" role="menu">
			            <li><a href="#">Report Bugs!</a></li>
			            <li class="divider"></li>
			            <li><a href="#">Logout</a></li>
			          </ul>
	        	</li>
  			</ul>
  		</div>
  	</nav>
  	<div class="row">
  		<div class="col-lg-2">
  			<div class="btn-group-vertical" role="group" aria-label="menu">
  				<a href="../index.php" class="btn btn-primary" style="margin:10px;">Home</a>
  				<button class="btn btn-success" style="margin:10px;">Invite</button>
  				<button class="btn btn-info" style="margin:10px;">Manage Access</button>
  				<button class="btn btn-danger" style="margin:10px;">Delete Code Page</button>

			</div>
  		</div>
  		<div class="col-lg-7">
  			<div class="well">
  				<p class="text-primary">Put the editor here</p>
  			</div>
  		</div>
  		<div class="col-lg-3">
  			<div class="well">
  				<p class="text-info">Put the chat box here</p>
  			</div>
  		</div>
  	</div>

            
        	
</body>
</html>