<!DOCTYPE html>
<html>
<head>
	<title>Product Details - Sneaker Society</title>
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


<!------------------single product details--------->

	<div class="small-container single-product">
		<div class="row">
			<div class="col-2">
				<img src="images/product-5.jpg" width="100%"id="ProductImg">
			<div class="small-img-row">
			<div class="small-img-col">
					<img src="images/gallery5-1.jpg" width="100%" class="small-img">
					</div>
					<div class="small-img-col">
					<img src="images/gallery5-2.jpg" width="100%" class="small-img">
					</div>
					<div class="small-img-col">
					<img src="images/gallery5-3.jpg" width="100%" class="small-img">
					</div>
					<div class="small-img-col">
					<img src="images/gallery5-4.jpg" width="100%" class="small-img">
					</div>

			</div>

			</div>
			<div class="col-2">
				<p>Home / Shoes</p>
				<h1><?php
				$item= simplexml_load_file('data/Salvacion_IT2F_OnlineStore.xml'); 
				echo $item-> product[4]->name;
				?></h1>
				<h4><?php
				$item= simplexml_load_file('data/Salvacion_IT2F_OnlineStore.xml'); 
				echo $item-> product[4]->price;
				?></h4>
				<select>
					<option>Select Size</option>
					<option>Size 7</option>
					<option>Size 7.5</option>
					<option>Size 8</option>
					<option>Size 8.5</option>
					<option>Size 9</option>
					<option>Size 9.5</option>
					<option>Size 10</option>
				</select>
				<input type="number" value="1">
				<a href="" class="btn">Add To Cart</a>

				<h3>Product Details <i class="fa fa-indent"></i></h3>
				<br>
				<p>Being one of the most iconic children’s shows of all-time, Sesame Street has had a lasting influence on not only our generation but the ones that followed. And thanks to Curry Brand, the lovable cast is being appropriately celebrated, as their likenesses are applied to a drove of Curry Flow 9 colorways.</p>
			</div>
		</div>


	</div>

<!-------------title----------->
	<div class="small-container">
		<div class="row row-2">
			<h2>Related Products</h2>
			<a href="products2.php"><p>View More</p></a>
		</div>

	</div>


<!------------products---------->


	<div class="row"> 
	
			<div class="col-4">
				<img src="images/currytalkingtrash.jpg">
				<h4><?php
				$item= simplexml_load_file('data/Salvacion_IT2F_OnlineStore.xml'); 
				echo $item-> product[20]->name;
				?></h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p><?php
				$item= simplexml_load_file('data/Salvacion_IT2F_OnlineStore.xml'); 
				echo $item-> product[20]->price;
				?></p>
			</div>
			<div class="col-4">
				<img src="images/currycloseitout.jpg">
				<h4><?php
				$item= simplexml_load_file('data/Salvacion_IT2F_OnlineStore.xml'); 
				echo $item-> product[21]->name;
				?></h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p><?php
				$item= simplexml_load_file('data/Salvacion_IT2F_OnlineStore.xml'); 
				echo $item-> product[21]->price;
				?></p>
			</div>
			<div class="col-4">
				<img src="images/currydribbleme.jpg">
				<h4><?php
				$item= simplexml_load_file('data/Salvacion_IT2F_OnlineStore.xml'); 
				echo $item-> product[22]->name;
				?></h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p><?php
				$item= simplexml_load_file('data/Salvacion_IT2F_OnlineStore.xml'); 
				echo $item-> product[22]->price;
				?></p>
			</div>
			<div class="col-4">
				<img src="images/currywrapitup.jpg">
				<h4><?php
				$item= simplexml_load_file('data/Salvacion_IT2F_OnlineStore.xml'); 
				echo $item-> product[23]->name;
				?><h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p><?php
				$item= simplexml_load_file('data/Salvacion_IT2F_OnlineStore.xml'); 
				echo $item-> product[23]->price;
				?></p>
			</div>
		</div>

	</div>
	<!--------------footer--------->
	<?php include('./components/footer.php') ?>
<!---------js for toggle menu---------->
	<?php include('./javascript/menu.js') ?>

	<!----------js for product gallery ------------->

		<?php include('./javascript/productdetails.js') ?>


</body>
</html>