<!DOCTYPE html>
<html>
<head>
	<title>Out of Stock - Sneaker Society</title>
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
<!-------------about page----------->
	
	<div class="section">
		<div class="container">
			<div class="content-section">
				<div class="title">
					<h1>Out of Stock</h1>
				</div>
				<div class="content">
					<h3>“We sincerely apologize for this inconvenience. We've experienced an unusually high <br>number of orders and have run out of inventory.”</p>
				</div>
			</div>
		</div>
	</div>



	<!--------------footer--------->
	<?php include('./components/footer.php') ?>
<!---------js for toggle menu---------->
	<?php include('./javascript/menu.js') ?>

<!---------js for toggle form---------->


</body>
</html>