<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Pet Planet | Login</title>
	<link rel="stylesheet" type="text/css" href="myAccount.css">
	<link rel="stylesheet" href="http://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<script type="text/javascript" src="myAccount.js"></script>
</head>
<body>
	<div class="container" id="container">
		<div class="form-container sign-in-container">
			 <form action="login.php" method="post">
				<h1>Sign in</h1>
				 <?php if (isset($_GET['error'])) { ?>
					<p class="error"><?php echo $_GET['error']; ?></p>
				<?php } ?>
				<div class="social-container">
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<span>or use your account</span>
				<input type="email" name="email" placeholder="Email" />
				<input type="password" name="password" placeholder="Password" />
				<a href="#">Forgot your password?</a>
				<button>Sign In</button>
			</form>
		</div>
		<div class="overlay-container">
				<div class="overlay">
					<div class="overlay-panel overlay-right">
						<h1>WELCOME!</h1>
						<p>Enter your personal details and start journey with us</p>
						<button class="ghost" id="signUp">Sign Up</button>
					</div>
				</div>
			</div>
		</div>

		<footer>
			<p>
				Pet Planet <i class="fa fa-heart"></i> One-Stop-Shop!
			</p>
		</footer>
	</body>
</html>