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
		body {
			background-image:
				/* linear-gradient(217deg, rgba(0,50,200,8), rgba(0,100,100,0) 70.71%),
            linear-gradient(127deg, rgba(0,100,100,.8), rgba(200,100,0,0) 70.71%),
            linear-gradient(336deg, rgba(0,200,0,.8), rgba(0,150,200,0) 70.71%), */
				url('http://localhost/Shumazhi-CI/assets/images/Fuji1.jpg');
		}

		.navbar-default {
			background-color: #29545b;
			border-color: #E7E7E7;
		}

		.card-image {
			width: 150px;
			height: 150px;
			margin-right: 10px;
			margin-top: 10px;
		}

		.card-description {
			padding: 10px;
			font-family: Arial, Helvetica, sans-serif;
			font-size: 14px;
		}

		.card-title{
			padding: 15px;
			font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
		}
		
		.logo{
			height:80px;
			width: 80px;
		}

	</style>
</head>

<body>
	<!-- NavigationBar -->
	<nav>
		<div class="nav-wrapper navbar-default">
			<div class="container">
			<ul class="right hide-on-small-only">
					<li><a href="<?php echo base_url(); ?>About">About</a></li>
					<li><a href="<?php echo base_url(); ?>home">Home</a></li>
					<li><a href="<?php echo base_url(); ?>login">Login</a></li>
					<li><a href="<?php echo base_url(); ?>product">Products</a></li>
					<li><a href="<?php echo base_url(); ?>product_registration">product registration</a></li>
					<!-- Dropdown Trigger -->
					<!-- <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Menu<i class="material-icons right">arrow_drop_down</i></a></li> -->
				</ul>
				<a href="#!" class="brand-logo left">
					<img class="responsive-img logo hide-on-small-only" src="http://localhost/Shumazhi-CI/assets/images/logo6.png" >
				</a>
				<a href="#" class="sidenav-trigger hide-on-med-and-up" data-target="mobile-links" >
					<i class="material-icons ">menu</i>
				</a>

				<ul class="sidenav" id="mobile-links">
					<li><a href="#">Home</a></li>
					<li><a href="#">Login</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Products</a></li>
					<li><a href="#">Products Registration</a></li>
				</ul>
				
			</div>
		</div>
	</nav>