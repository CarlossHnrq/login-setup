<?php 
	require "header.php";
?>

	<main>
		<div class="signup-bg">
			<section class="signup-form">
				<h1>Signup</h1>
				<?php 
					if (isset($_GET['error'])) {
						if ($_GET['error'] == "emptyfields") {
							echo "<p class='signup-form'>Fill in all  fields!</p>";
						}
						elseif ($_GET['error'] == "invalidmailuid") {
							echo "<p class='signup-form'>Invalid email and unsername!</p>";
						}
						elseif ($_GET['error'] == "invalidmail") {
							echo "<p class='signup-form'>This email is invalid!</p>";
						}
						elseif ($_GET['error'] == "invaliduid") {
							echo "<p class='signup-form'>This unsername is invalid!</p>";
						}
						elseif ($_GET['error'] == "passwordcheck") {
							echo "<p class='signup-form'>Your passwords do not match!</p>";
						}
						elseif ($_GET['error'] == "usertaken") {
							echo "<p class='signup-form'>This username is already taken!</p>";
						}
					}
					elseif ($_GET['signup'] == "success") {
						echo "<p class='signup-form'>Signup successful!</p>";
					}
				?>
				<form action="includes/signup.inc.php" method="post">
					<input type="text" name="uid" placeholder="Username">
					<input type="text" name="mail" placeholder="Email">
					<input type="password" name="pwd" placeholder="Password">
					<input type="password" name="pwd-repeat" placeholder="Repeat password">
					<button type="submit" name="signup-submit">Signup</button>
				</form>
			</section>
		</div>
	</main>

<?php 
	require "footer.php";
?>