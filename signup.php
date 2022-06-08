<?php
    include_once 'includes/php/index_header.php';
?>

<div class="page-content">
	<div>
		<br><br><br><br>
		<h1>Welcome to AidBase</h1>
		<br><br>
		<h4>Want to register your organization?</h4>
		<br><br>
		<div class="signup-form">
			<h2>Sign Up</h2>
			<p>Register an account to get started.</p>
			<form action="/includes/php/signup.inc.php" method="POST">
				<input type="text" name="name" placeholder="Full name" required>
				<input type="email" name="email" placeholder="Email" required>
				<input type="text" name="uid" placeholder="Username" required>
				<input type="password" name="pwd" placeholder="Password" required>
				<input type="password" name="pwdrepeat" placeholder="Repeat password" required>
				<button type="submit" name="submit">Sign Up</button>
			</form>
			<br>
			<?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Please fill in every field.</p>";
                } elseif ($_GET["error"] == "invaliduid") {
                    echo "<p>improper username, please try again.</p>";
                } elseif ($_GET["error"] == "exists") {
                    echo "<p>Username already exists, please try again.</p>";
                } elseif ($_GET["error"] == "passwordmismatch") {
                    echo "<p>Passwords do not match, please try again.</p>";
                } elseif ($_GET["error"] == "stmtfailed") {
                    echo "<p>Something went wrong, please try again or contact support.</p>";
                }
            }
            ?>
		</div>
	</div>
</div>

<?php
    include_once 'includes/php/footer.php';
?>