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
				<img src="images/product-8.jpg" width="100%"id="ProductImg">
			<div class="small-img-row">
			<div class="small-img-col">
					<img src="images/gallery8-1.jpg" width="100%" class="small-img">
					</div>
					<div class="small-img-col">
					<img src="images/gallery8-2.jpg" width="100%" class="small-img">
					</div>
					<div class="small-img-col">
					<img src="images/gallery8-3.jpg" width="100%" class="small-img">
					</div>
					<div class="small-img-col">
					<img src="images/gallery8-4.jpg" width="100%" class="small-img">
					</div>

			</div>

			</div>
			<div class="col-2">
				<p>Home / Shoes</p>
				<h1><?php
				$item= simplexml_load_file('data/Salvacion_IT2F_OnlineStore.xml'); 
				echo $item-> product[7]->name;
				?></h1>
				<h4><?php
				$item= simplexml_load_file('data/Salvacion_IT2F_OnlineStore.xml'); 
				echo $item-> product[7]->price;
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
				<p>Ben & Jerry's has done things its own way since humbly serving its first scoop in 1978. The company is world renowned for producing high-quality ice cream—but the Vermont-based brand has always remained committed to its core values of doing good and having fun. In recognition of that shared ethos, Nike SB is churning out a chunky rendition of the Dunk Low featuring hues and textures that mimic Ben & Jerry's signature packaging. Blue skies, bovines and green pastures all appear in familiar form, while colourful tie-dye patterns and bold text graphics cover the shoe's insole and heel. Dip into this delicious edition before it gets gobbled up.</p>
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
				<img src="images/dunk1.jpg">
				<h4><?php
				$item= simplexml_load_file('data/Salvacion_IT2F_OnlineStore.xml'); 
				echo $item-> product[28]->name;
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
				echo $item-> product[28]->price;
				?></p>
			</div>
			<div class="col-4">
				<img src="images/dunk2.jpg">
				<h4><?php
				$item= simplexml_load_file('data/Salvacion_IT2F_OnlineStore.xml'); 
				echo $item-> product[29]->name;
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
				echo $item-> product[29]->price;
				?></p>
			</div>
			<div class="col-4">
				<img src="images/dunk3.jpg">
				<h4> <?php
				$item= simplexml_load_file('data/Salvacion_IT2F_OnlineStore.xml'); 
				echo $item-> product[30]->name;
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
				echo $item-> product[30]->price;
				?></p>
			</div>
			<div class="col-4">
				<img src="images/dunk4.jpg">
				<h4><?php
				$item= simplexml_load_file('data/Salvacion_IT2F_OnlineStore.xml'); 
				echo $item-> product[31]->name;
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
				echo $item-> product[31]->price;
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