<!DOCTYPE html>
<html>
	<head>
		<title>Shumazhi</title>
		 <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>
<body>

	<ul id="dropdown1" class="dropdown-content">
			<li><a href="#!">one</a></li>
			<li><a href="#!">two</a></li>
			<li class="divider"></li>
			<li><a href="#!">three</a></li>
	</ul>
	<!-- NavigationBar -->
	<nav>
			<div class="nav-wrapper #81c784 green lighten-2">
				<a href="#!" class="brand-logo"></a>
					<ul class="right hide-on-med-and-down">
						<li><a href="<?php echo base_url(); ?>/product">Products</a></li>
						<li><a href="badges.html">About</a></li>
						<!-- Dropdown Trigger -->
						<li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Menu<i class="material-icons right">arrow_drop_down</i></a></li>
					</ul>
			</div>
		</nav>


