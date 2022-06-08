<?php
    session_start();
    include_once '../includes/php/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en-us">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>AidBase</title>
		<link rel="stylesheet" type="text/css" href="../css/reset.css">
		<link rel="stylesheet" type="text/css" href="../css/search.css">
	</head>

	<body>
		<video autoplay muted loop id="myVideo">
			<source src="../includes/videos/index.mp4" type="video/mp4">
		</video>

		<div class="nav-bar">
			<div class="identity">
				<a href="../index.php">
					<h3 style="color: #4776AB; font-weight: bold;">
						<img src="/includes/images/AidBase.png" alt="AidBase.png" width="30"></img>
						&nbsp; AidBase
					</h3>
				</a>
			</div>
			<div class="buttons">
				<div>
					<a href="../index.php">
						<h4>Home</h4>
					</a>
				</div>
				<!-- <div>
					<a href="../index.php">
						<h4>About Us</h4>
					</a>
				</div> -->
				<?php
                if (isset($_SESSION["useruid"])) {
                    echo "
					<div>
						<a href='../index.php'>
							<h4>Profile</h4>
						</a>
					</div>
					<div>
						<a href='/logout.inc.php'>
							<h4>Log Out</h4>
						</a>
					</div>";
                } else {
                    echo "
					<div>
						<a href='../signup.php'>
							<h4>Sign Up</h4>
						</a>
					</div>
					<div>
						<a href='../login.php'>
							<h4>Log In</h4>
						</a>
					</div>";
                }
                ?>
				<div class="search-nav">
					<a href="/php/database.php">
						<button class="search-nav">
							<h4>Search</h4>
						</button>
					</a>
				</div>
			</div>
		</div>