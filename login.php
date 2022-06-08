<?php
    include_once 'includes/php/index_header.php';
?>

<div class="page-content">
	<div>
		<br><br><br><br>
		<h1>Welcome back to AidBase</h1>
		<br><br>
		<h4>Let's get you logged in.</h4>
		<br><br>
		<div class="signup-form">
			<h2>Log In</h2>
			<form action="/includes/php/login.inc.php" method="POST">
				<input type="text" name="uid" placeholder="Username / Email">
				<input type="password" name="pwd" placeholder="Password">
				<button type="submit" name="submit">Log In</button>
			</form>
			<br>
			<?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Please fill in every field.</p>";
                } elseif ($_GET["error"] == "badlogin") {
                    echo "<p>login information is incorrect, please try again.</p>";
                }
            }
            ?>
		</div>
	</div>
</div>

<?php
    include_once 'includes/php/footer.php';
?>