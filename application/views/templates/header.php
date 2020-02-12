<!DOCTYPE html>
<html>

<head>
	<title>Shumazhi</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<style>
		body { background-image: 
			linear-gradient(217deg, rgba(0,50,200,8), rgba(0,100,100,0) 70.71%),
            linear-gradient(127deg, rgba(0,100,100,.8), rgba(200,100,0,0) 70.71%),
            linear-gradient(336deg, rgba(0,200,0,.8), rgba(0,150,200,0) 70.71%),
		url('http://localhost/Shumazhi-CI/assets/images/Fuji.jpg');
		   }
		.navbar-default {
			background-color: #29545b;
			border-color: #E7E7E7;
		}
	</style>
</head>

<body>
		<!-- NavigationBar -->
		<nav>
			<div class="nav-wrapper navbar-default">
				<a href="#!" class="brand-logo"></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="badges.html">About</a></li>
					<li><a href="<?php echo base_url(); ?>home">Home</a></li>
					<li><a href="<?php echo base_url(); ?>login">Login</a></li>
					<li><a href="<?php echo base_url(); ?>product">Products</a></li>
					<li><a href="<?php echo base_url(); ?>product_registration">product registration</a></li>
					<!-- Dropdown Trigger -->
					<li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Menu<i class="material-icons right">arrow_drop_down</i></a></li>
				</ul>
			</div>
		</nav>