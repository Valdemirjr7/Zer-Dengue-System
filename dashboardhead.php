<?php
session_start();
include 'systems/mainsystem/mainsystem.php';
include 'systems/security/verificationlogin.php';
$requestlistereport = $MainSystem->requestlistreport($_SESSION['userid']);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard - <?php echo $_SESSION['username']; ?></title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
	<header>
		<nav style="padding-top: 20px; padding-bottom: 20px; padding-left: 50px;" class="navbar navbar-expand-lg navbar-light bg-light">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="navname" class="nav-link" href="dashboard.php">Dashboard: <?php echo $_SESSION['username']; ?></a>
		      	</li>
			    <li class="nav-item active">
			        <a class="navname" class="nav-link" href="systems/proccess/getout-proccess.php">Sair</a>
			    </li>
		    </ul>
		</nav>
	</header>
</head>