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
				<img src="images/buy-9.jpg" width="100%"id="ProductImg">
			<div class="small-img-row">
			<div class="small-img-col">
					<img src="images/gallery9-1.jpg" width="100%" class="small-img">
					</div>
					<div class="small-img-col">
					<img src="images/gallery9-2.jpg" width="100%" class="small-img">
					</div>
					<div class="small-img-col">
					<img src="images/gallery9-3.jpg" width="100%" class="small-img">
					</div>
					<div class="small-img-col">
					<img src="images/gallery9-4.jpg" width="100%" class="small-img">
					</div>



			</div>




			</div>
			<div class="col-2">
				<p>Home / Shoes</p>
				<h1><?php
				$item= simplexml_load_file('data/Salvacion_IT2F_OnlineStore.xml'); 
				echo $item-> product[8]->name;
				?></h1>
				<h4><?php
				$item= simplexml_load_file('data/Salvacion_IT2F_OnlineStore.xml'); 
				echo $item-> product[8]->price;
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
				<p>The Nike Air Force 1 remains a popular retro shoe to this day. The Air Force 1 features an upper that is most frequently dressed in leather, a large Swoosh across the lateral and medial sides, perforated toe boxes, metal lace dubraes, and an Air-encapsulated midsole with signature “AIR” text near the rear.</p>
			</div>
		</div>


	</div>

<!-------------title----------->
	<div class="small-container">
		<div class="row row-2">
			<h2>Related Products</h2>
			<p>View More</p>
		</div>

	</div>


<!------------products---------->


	<div class="row"> 
	
			<div class="col-4">
				<img src="images/product-8.jpg">
				<h4><?php
				$item= simplexml_load_file('data/Salvacion_IT2F_OnlineStore.xml'); 
				echo $item-> product[7]->name;
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
				echo $item-> product[7]->price;
				?></p>
			</div>
			<div class="col-4">
				<img src="images/product-10.jpg">
				<h4><?php
				$item= simplexml_load_file('data/Salvacion_IT2F_OnlineStore.xml'); 
				echo $item-> product[9]->name;
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
				echo $item-> product[9]->price;
				?></p>
			</div>
			<div class="col-4">
				<img src="images/product-11.jpg">
				<h4><?php
				$item= simplexml_load_file('data/Salvacion_IT2F_OnlineStore.xml'); 
				echo $item-> product[10]->name;
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
				echo $item-> product[10]->price;
				?></p>
			</div>
			<div class="col-4">
				<img src="images/product-12.jpg">
				<h4><?php
				$item= simplexml_load_file('data/Salvacion_IT2F_OnlineStore.xml'); 
				echo $item-> product[11]->name;
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
				echo $item-> product[11]->price;
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