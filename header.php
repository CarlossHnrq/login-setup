<?php 
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="this is an example of a meta description. This will often show up in search results.">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<header class="menu-bg">
			<nav class="menu">
				<div class="menu-nav">	
					<a href="index.php" class="logo"><h1>Login-Setup</h1></a>
					<ul class="lista">
						<li><a href="index.php">Home</a></li>
						<li><a href="#">Portfolio</a></li>
						<li><a href="#">About me</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
				<div class="login-form">
					<?php 
						if (isset($_SESSION['userid'])) {
							echo '<form action="includes/logout.inc.php" method="post">
							<button type="submit" name="logout-submit">Logout</button>
							</form>';
					}
						else{
							echo '<form action="includes/login.inc.php" method="post">
									<input type="text" name="mailuid" placeholder="Username/E-mail...">
									<input type="password" name="pwd" placeholder="Password...">
									<button type="submit" name="login-submit">Login</button>
								</form>
								<a href="signup.php">Signup</a>';
					}
					?>
					
					
				</div>
			</nav>
		</header>
