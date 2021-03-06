<?php
	header('Content-Type: text/html; charset=utf-8');
	//header("Cache-control: public");
	header("Cache-control: max-age=86400");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Metro Blog</title>
	<link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<script src="js/jquery.min.js"></script>
</head>
<body>
	<header class="header">
		<div class="logo">
			<img src="images/icon.png" alt="main logo Metro Blog">
		</div>
		<ul id="menu" class="menu">
			<i id="menu__close" class="fa fa-times" aria-hidden="true"></i>
			<li class="menu__item">Home</li>
			<li class="menu__item">About</li>
			<li class="menu__item">Articles</li>
			<li class="menu__item">Pages</li>
		</ul>
		<div id="menu__btn" class="menu__btn">
			<span class="menu__btn_line"></span>
			<span class="menu__btn_line"></span>
			<span class="menu__btn_line"></span>
		</div>
	</header>

	<div class="banner">
		<div class="banner__left-panel">
			<h1 class="banner__left-panel_title">Apple iPad</h1>
			<h2 class="banner__left-panel_small-title">Reviews</h2>
			<div class="banner__left-panel_button">
				<i class="fa fa-video-camera" aria-hidden="true"></i> Video review
			</div> 
		</div>
		<div class="banner__image">
			<img src="images/banner-ipad.png" alt="" class="responsive">
		</div>
	</div>


	<div class="container">
		<div class="content">

			<div class="featured-post">
				<div class="featured-post__column-left">
					<img src="images/featured-post-image.jpg" class="featured-post__column-left_image responsive" alt="featured post image">
				</div>

				<div class="featured-post__column_right">
					<h3 class="featured-post__column_right_title">
						Lorem Ipsum is simply cssauthor.com
					</h3>
					<p class="featured-post__column_right_text">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries
					</p>
					<div class="featured-post__column_right_chevron">
						<div class="featured-post__column_right_chevron-left">
							<i class="fa fa-chevron-left"></i>
						</div>
						<div class="featured-post__column_right_chevron-right">
							<i class="fa fa-chevron-right" aria-hidden="true"></i>
						</div>
					</div>
				</div>

			</div>


			<div class="posts">

				<div class="post__item">
					<h4 class="post__item_title">
						Apple i phone variations 
					</h4>
					<span class="post__item_date">30/12/12   By : Mariya</span>
					<p class="post__item_text">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type 
					</p>
				</div>
			
				<div class="post__item">
					<h4 class="post__item_title">
						The standard chunk Lorem Ipsum
					</h4>
					<span class="post__item_date">30/12/12   By : Mariya</span>
					<p class="post__item_text">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type 
					</p>
				</div>
			
				<div class="post__item">
					<h4 class="post__item_title">
						This book is one of treatise
					</h4>
					<span class="post__item_date">30/12/12   By : Mariya</span>
					<p class="post__item_text">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type 
					</p>
				</div>
			
			
				<div class="post__item">
					<h4 class="post__item_title">
						Apple i phone variations 
					</h4>
					<span class="post__item_date">30/12/12   By : Mariya</span>
					<p class="post__item_text">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type 
					</p>
				</div>
			
				<div class="post__item">
					<h4 class="post__item_title">
						The standard chunk Lorem Ipsum
					</h4>
					<span class="post__item_date">30/12/12   By : Mariya</span>
					<p class="post__item_text">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type 
					</p>
				</div>
			
				<div class="post__item">
					<h4 class="post__item_title">
						This book is one of treatise
					</h4>
					<span class="post__item_date">30/12/12   By : Mariya</span>
					<p class="post__item_text">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type 
					</p>
				</div>

				<div class="post__item">
					<h4 class="post__item_title">
						Apple i phone variations 
					</h4>
					<span class="post__item_date">30/12/12   By : Mariya</span>
					<p class="post__item_text">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type 
					</p>
				</div>
				
				<div class="post__item">
					<h4 class="post__item_title">
						The standard chunk Lorem Ipsum
					</h4>
					<span class="post__item_date">30/12/12   By : Mariya</span>
					<p class="post__item_text">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type 
					</p>
				</div>
				
				<div class="post__item">
					<h4 class="post__item_title">
						This book is one of treatise
					</h4>
					<span class="post__item_date">30/12/12   By : Mariya</span>
					<p class="post__item_text">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type 
					</p>
				</div>

			</div> <!-- end posts -->
			
			</div>
			<div class="sidebar">

				<div class="sidebar__item ad1">
					<h2 class="ad1__title">
						The ultimate apple <span class="ad1__title-bigGreen">i pad Guide</span>
					</h2>
					<div class="ad1__image">
						<img class="responsive" src="images/aside-small-ipad.jpg" alt="aside-small-ipad">
					</div>
				</div>

				<div class="sidebar__item ad2">
					<div class="ad2__shear-layer">
						<div class="ad2__circle">
							<span class="ad2__circle_int">12</span>
							<span class="ad2__circle_week">WEEK</span>
						</div>
					</div>
					<h2 class="ad2__title">LOREM IPSUM</h2>
					<h3 class="ad2__description">Lorem Ipsum is simply dummy</h3>
					<div class="ad2__btn">JOIN US NOW!</div>
				</div>

				<div class="sidebar__item subscribe">
					<h2 class="subscribe__title">JOIN OUR MAILING</h2>
					<p class="subscribe__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
					<form action="#" class="subscribe__form">
						<input class="" type="name" placeholder="Name">
						<input type="email" placeholder="email address">
						<div class="subscribe__btn">SING MY UP!</div>
					</form>
				</div>

			</div> <!-- End sidebar -->

		</div>
	</div>
	<footer class="footer">
	<div class="footer__text">
		Developed by TShevchenko
	</div>
		<div class="footer__social">
			<a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-youtube-square" aria-hidden="true"></i></a>
		</div>
	</footer>
	

	<script src="js/function.js"></script>
</body>
</html>