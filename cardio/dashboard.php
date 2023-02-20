<?php
	$username = $_POST["username"];
	$password = $_POST["password"];
	$urlREGISTER = "http://localhost/cardio/register.html";
	if($username== "USERNAMETEST" && $password == "passwordTEST123"){
		echo "Welcome you are now logged in.";
		
	}

	else{
		header("Location: $urlREGISTER");

	}

?>
<!DOCTYPE HTML>
<!--
	Spatial by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>DASHBOARD</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><strong><a href="index.html">CARD.io</a></strong></h1>
				<nav id="nav">
					<ul>
						<li><a href="dashboard.php">DASHBOARD</a></li>
						<li><a href="login.html">LOGOUT</a></li>
						<li><a href="elements.html">ABOUT</a></li>
					</ul>
				</nav>
			</header>

			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

	</body><br>
</html>