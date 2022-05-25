<!DOCTYPE html>
<html>
<head>
	<title>Cart - Sneaker Society</title>
	<?php include('./components/header.php') ?>
</head>
<body style="background-color:#3C6979;">

	<div class="container">
		<div class="navbar">
		<div class="logo">
			<a href="index.php"></a><img src="images/logo.png" width="125px"></a>
		</div>
		<?php include('./components/nav.php') ?>
		<a href="cart.php"></a><img src="images/cart.png" width="30px" height="30px"></a>
		<img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
		</div>	
	</div>
 
 	<!--------------cart items--------->
 	<div class="small-container cart-page">
 		<table>
 			<tr>
 				<th>Product</th>
 				<th>Quantity</th>
 				<th>Subtotal</th>
 			</tr>
 			<tr>
 				<td>
 					<div class="=cart-info">
 						<img src="images/buy-9.jpg">
 						<div>
 							<p>Nike Air Force 1</p>
 							<small>Price: ₱6499.99 </small>
 							<a href="">Remove</a>
 						</div>
 					</div>

 				</td>
 				<td><input type="number" value="1"></td>
 				<td>₱6499.99</td>
 			</tr>
 			<tr>
 				<td>
 					<div class="=cart-info">
 						<img src="images/buy-2.jpg">
 						<div>
 							<p>Air Jordan 1 "University Blue</p>
 							<small>Price: ₱7999.99< </small>
 							<a href="">Remove</a>
 						</div>
 					</div>

 				</td>
 				<td><input type="number" value="1"></td>
 				<td>₱7999.99</td>
 			</tr>
 			<tr>
 				<td>
 					<div class="=cart-info">
 						<img src="images/buy-3.jpg">
 						<div>
 							<p>Travis Scott x Nike SB Dunk Low</p>
 							<small>Price: ₱10599.99 </small>
 							<a href="">Remove</a>
 						</div>
 					</div>

 				</td>
 				<td><input type="number" value="1"></td>
 				<td>₱10599.99</td>
 			</tr>
 		</table>

 		<div class="=total-price">
 			<table>
 				<tr>
 					<td>Subtotal</td>
 					<td>₱25099.97</td>
 				</tr>
 				<tr>
 					<td>Tax</td>
 					<td>₱1254.99</td>
 				</tr>			
 				<tr>
 					<td>Total</td>
 					<td>₱26354.96</td>
 				</tr>			
 			</table>

 			<a href="aknowledge.php" class="btn">Checkout</a>


 		</div>

 	</div>


	<!--------------footer--------->
	<?php include('./components/footer.php') ?>
<!---------js for toggle menu---------->
	<?php include('./javascript/menu.js') ?>

</body>
</html>