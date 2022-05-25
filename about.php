<!DOCTYPE html>
<html>
<head>
	<title>About - Sneaker Society</title>
	<?php include('./components/header.php') ?>
</head>
<body style="background-color:#3C6979;">
	<div class="container4">
		<div class="navbar">
		<div class="logo">
			<img src="images/logo.png" width="125px">
		</div>
		<?php include('./components/nav.php') ?>
		<a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
		<img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
		</div>	
	</div>
<!-------------about page----------->
	
	<div class="section">
		<div class="container2">
			<div class="content-section">
				<div class="title">
					<h1>About Us</h1>
				</div>
				<div class="content">
					<h3>Welcome to Sneaker Society, your number one source for some different brand of sneakers. We're dedicated to giving you the very best of sneakers, with a focus on dependability, customer service and uniqueness. Founded in 2022 by our team, Sneaker Society has come a long way from its beginnings in Marinduque. 
					We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.
					<br>
					<br>
					Sincerely,
					<br>
					Sneaker Society Team
					</h3></p>
					<div class="button">
						<a href="products.php">View Products</a>
					</div>
				</div>
				<div class="social">
					<a href="social.php"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
					<a href="social.php"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
	</div>



	<!--------------footer--------->
	<?php include('./components/footer.php') ?>
<!---------js for toggle menu---------->
	<?php include('./javascript/menu.js') ?>

</body>
</html>