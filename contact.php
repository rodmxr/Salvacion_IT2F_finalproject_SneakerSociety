<!DOCTYPE html>
<html>
<head>
	<title>Contact - Sneaker Society</title>
	<?php include('./components/header.php') ?>
</head>
<body style="background-color:#3C6979;">

	<div class="container">
		<div class="navbar">
		<div class="logo">
			<img src="images/logo.png" width="125px">
		</div>
		<?php include('./components/nav.php') ?>
		<a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
		<img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
		</div>	
	</div>
<!-------------Contact page----------->

	<section class="contact">
		<div class="content">
			<h2>Contact Us</h2>
			<p>Sneaker Society</p>
		</div>
		<div class="container1">
			<div class="contactInfo">
				<div class="box">
					<div class="icon"><i class="fa fa-map-marker" aria hidden="true"></i></div>
					<div class="text">
						<h3>Address</h3>
						<p>Gasan Marinduque Philippines</p>
					</div>
				<div class="box">
					<div class="icon"><i class="fa fa-phone" aria hidden="true"></i></div>
					<div class="text">
						<h3>Phone</h3>
						<p>09123456789</p>
					</div>	
				<div class="box">
					<div class="icon"><i class="fa fa-envelope-o" aria hidden="true"></i></div>
					<div class="text">
						<h3>Email</h3>
						<p>sneakersociety@gmail.com</p>
					</div>


				</div>
			</div>
			<div class="contactForm">
				<form>
					<h2>Send Message</h2>
					<div class="inputBox">
						<input type="text" name="" required="required">
						<span>Full Name</span>
					</div>
					<div class="inputBox">
						<input type="text" name="" required="required">
						<span>Email</span>
					</div>
					<div class="inputBox">
						<textarea required="required"></textarea>
						<span>Type your message..</span>
					</div>
					<div class="inputBox">
						<a href="index.php"><input type="submit" name="" value="Send">	</a>

				</form>
			</div>
		</div>

	</section>






	<!--------------footer--------->
	<?php include('./components/footer.php') ?>
<!---------js for toggle menu---------->
	<?php include('./javascript/menu.js') ?>

</body>
</html>