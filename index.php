<!DOCTYPE html>
<html>
<head>
	<title>Sneaker Society</title>
	<?php include('./components/header.php') ?>
</head>
<body style="background-color:#3C6979;">

 	<div class="header">
	<div class="container">
		<div class="navbar">
		<div class="logo">
			<a href="index.php"><img src="images/logo.png" width="125px"></a>
		</div>
		<?php include('./components/nav.php') ?>
		<a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
		<img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
	</div>
	<div class="row">
		<div class="col-2">
			<h1>Always wear on its sickest way</h1>
			<p>We have the best sneakers <br></p>
			<a href="#" class="btn">Explore Now &#8594;<a/>
		</div>
		<div class="col-2">
			<img src="images/2.png">
		</div>
	</div>
	</div>
</div>

<!----featured catergories ------>
	<div class="categories">
		<div class="small-container">
			<div class="row">
		<div class="col-3"> 
			<img src="images/category-1.jpg" alt="">
			<h5>Air Jordan 1 x Travis Scott</h5>
		</div>
		<div class="col-3">
		<img src="images/category-2.jpg" alt="">
		<h6>Air Jordan 1 x Dior</h6>
		</div>
		<div class="col-3">
		<img src="images/category-3.jpg" alt=""> 
		<h7>Air Jordan 1 x Travis Scott x Fragment</h7> 
		</div>

	</div>
		</div>
	

</div>

<!----featured products ------>
	<div class="small container"> 
		<h2 class="title">Featured Products</h2>
		<div class="row">
			<div class="col-4">
				<img src="images/product-1.jpg">
				<h4><?php
				$item= simplexml_load_file('data/Salvacion_IT2F_OnlineStore.xml'); 
				echo $item-> product[0]->name;
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
				echo $item-> product[0]->price;
				?></p>
			</div>
			<div class="col-4">
				<img src="images/product-2.jpg">
				<h4><?php
				$item= simplexml_load_file('data/Salvacion_IT2F_OnlineStore.xml'); 
				echo $item-> product[1]->name;
				?></h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
				</div>
				<p><?php
				$item= simplexml_load_file('data/Salvacion_IT2F_OnlineStore.xml'); 
				echo $item-> product[1]->price;
				?></p>
			</div>
			<div class="col-4">
				<img src="images/product-3.jpg">
				<h4><?php
				$item= simplexml_load_file('data/Salvacion_IT2F_OnlineStore.xml'); 
				echo $item-> product[2]->name;
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
				echo $item-> product[2]->price;
				?></p>
			</div>
			<div class="col-4">
				<img src="images/product-4.jpg">
				<h4><?php
				$item= simplexml_load_file('data/Salvacion_IT2F_OnlineStore.xml'); 
				echo $item-> product[3]->name;
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
				echo $item-> product[3]->price;
				?></p>
			</div>
		</div>
		<h2 class="title">Latest Products</h2>
		<div class="row">
			<div class="col-4">
				<img src="images/product-5.jpg">
				<h4><?php
				$item= simplexml_load_file('data/Salvacion_IT2F_OnlineStore.xml'); 
				echo $item-> product[4]->name;
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
				echo $item-> product[4]->price;
				?></p>
			</div>
			<div class="col-4">
				<img src="images/product-6.jpg">
				<h4><?php
				$item= simplexml_load_file('data/Salvacion_IT2F_OnlineStore.xml'); 
				echo $item-> product[5]->name;
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
				echo $item-> product[5]->price;
				?></p>
			</div>
			<div class="col-4">
				<img src="images/product-7.jpg">
				<h4><?php
				$item= simplexml_load_file('data/Salvacion_IT2F_OnlineStore.xml'); 
				echo $item-> product[6]->name;
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
				echo $item-> product[6]->price;
				?></p>
			</div>
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
		</div>

	</div>
	<!---------offer -------------------->
	<div class="offer">
		<div class="small-container">
			<div class="row">
				<div class="col-2">
					<img src="images/exclusive.png" class="offer-img">
				</div>
				<div class="col-2">
					<p>Exclusively Available on Sneaker Society</p>
					<h1>Jordan 1 Low x Travis Scott "Reverse Mocha"</h1>
					<small>Each low-top Air Jordan 1 will feature a similar design as the first two releases. An oversized backward facing Swoosh featured on the lateral, while a regular Swoosh graces the medial. Signature Travis Scott details will include the “Cactus Jack” logo appearing on the tongue, medial side panel and sockliner. The back heel tabs will be branded with Air Jordan Wings on the right and Scott’s crudely drawn face on the left shoe.
					</small>
					<a href="products.php" class="btn">Buy Now &#8594;</a>
				</div>
				
			</div>
	  	</div>
	</div>
	<!----------------------->
	<div class="testimonial">
		<div class="small-container">
			<div class="row">
				<div class="col-3">
					<i class="fa fa-quote-left"></i>
					<p>IT Student</p>
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div>
				<a href="about.php"><img src="images/user-1.jpg"></a>
				<h3>Rodmar Salvacion</h3>
				</div>
				<div class="col-3">
					<i class="fa fa-quote-left"></i>
					<p>IT Student</p>
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div>
				<a href="about.php"><img src="images/user-2.jpeg"></a>
				<h3>Lyka Marie Chavez</h3>
				</div>
				<div class="col-3">
					<i class="fa fa-quote-left"></i>
					<p>IT Student</p>
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div>
				<a href="about.php"><img src="images/user-3.jpg"></a>
				<h3>Jovel Agapay</h3>
				</div>				
			</div>
		</div>
	</div>

<!-------------brands ------------------>
	<div class="brands">
		<div class="small-container">
			<div class="row">
				<div class="col-5">
					<img src="images/jordan.png">
				</div>
				<div class="col-5">
					<img src="images/nike.png">
				</div>
				<div class="col-5">
					<img src="images/adidas.png">
				</div>
				<div class="col-5">
					<img src="images/curry.png">
				</div>
				<div class="col-5">
					<img src="images/kobe.png">
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