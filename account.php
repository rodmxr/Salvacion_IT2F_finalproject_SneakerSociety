<!DOCTYPE html>
<html>
<head>
	<title>Account - Sneaker Society</title>
	<?php include('./components/header.php') ?>
</head>
<body style="background-color:#3C6979;">
	<div class="container">
		<div class="navbar">
		<div class="logo">
			<a href="index.php"><img src="images/logo.png" width="125px"></a>
		</div>
		<?php include('./components/nav.php') ?>
		<a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
		<img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
		</div>	
	</div>
<!-------------account page----------->
	<div class="account-page">
		<div class="container">
			<div class="row">
				<div class="col-2">
					<img src="images/2.png" width="100%">
				</div>

				<div class="col-2">
					<div class="form-container">
						<div class="form-btn">
							<span onclick="login()">Login</span>
							<span onclick="register()">Register</span>
							<hr id="Indicator">
						</div>

						<form id="LoginForm">
							<input type="text" placeholder="Username">
							<input type="password" placeholder="Password">
							<button type="submit" class="btn">Login</button>
							<a href="">Forgot Password</a>
						</form>

						<form id="RegForm">
							<input type="text" placeholder="Username">
							<input type="email" placeholder="Email">
							<input type="password" placeholder="Password">
							<button type="submit" class="btn">Register</button>
						</form>

					</div>


				</div>

			</div>
		</div>


	</div>





	<!--------------footer--------->
	<?php include('./components/footer.php') ?>
<!---------js for toggle menu---------->
	<?php include('./javascript/menu.js') ?>

<!---------js for toggle form---------->
	<?php include('./javascript/form.js') ?>



</body>
</html>