<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= $data['page_title']?> | Купи Книга</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/prettyPhoto.css" rel="stylesheet">
    <link href="/css/price-range.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
	<link href="/css/main.css" rel="stylesheet">
	<link href="/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif] -->  
    
     
    <link rel="shortcut icon" href="/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i>   02 309 9191</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index"><img src="/images/ologo.png" style="height: 150px; width: 150px;" alt=""  /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									MКД
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">UK</a></li>
									<li><a href="#">USA</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									денари
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">£</a></li>
									<li><a href="#">$</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								
								<li><a href="#"><i class="fa fa-heart"></i> Омилени</a></li>
								<li><a href="checkout"><i class="fa fa-crosshairs"></i> Checkout</a></li>														

										<li><a href='/User/viewCart'><i class='fa fa-shopping-cart'></i> Кошничка</a></li>

										<li><a href='/login/'><i class='fa fa-lock'></i> Најави ме</a></li>
									
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index" class="active">Почетна</a></li>
								<li class="dropdown"><a href="#">Продавница<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop">Products</a></li>
										<li><a href="product-details">Product Details</a></li> 
										<li><a href="checkout">Checkout</a></li> 
										<li><a href="cart">Cart</a></li> 
										<li><a href="login">Login</a></li> 
                                    </ul>
                                </li> 
								<li><a href="contact-us">Контакт</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Пребарај"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	


<section id="form" style="margin-top: 5px;"><!--form-->
		<div class="container">
			<div class="row" style="text-align: center;">

				<span style="font-size:18px; color:red;"></span>
				
				<div class="col-sm-4 col-sm-offset-1" style="float: none; display: inline-block;">
					<div class="signup-form">
						<h2>Регистрирајте се</h2>
						<?php
							if(!is_array($data)){
								echo "<div class='alert alert-danger' role='alert'>$data</div>";
							}
						?>
						<form method="post" action=''>
							<input type="email" name="email"  placeholder="Email адреса" />
							<input type="password" name="password" placeholder="Пасворд" />
							<input type="password" name="password_confirm" placeholder="Повторно внесете пасворд" />
						
							<button type="submit" name="action" class="btn btn-default" value="Signup">Регистрирај ме</button>
						</form>
						Веќе имате профил? <a href="/login/index">Најави се</a>
						<br> 
					</div>
				</div>
				
				
			</div>
		</div>
	</section><!--/form-->









	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>Купи</span>КНИГА</h2>
							<p>Дом без книга е како куќа без прозорци.</p>
						</div>
					</div>
					<div class="col-sm-7">
					
						
						
						
						
						
						
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="/images/map.png" alt="" />
							<p>Руѓер Бошковиќ, Скопје 1000</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>За Нас</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Контакт</a></li>
							</ul>
						</div>
					</div>
					
					
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>Претплатете се!</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Вашата email адреса" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Бидете први да дознаете за новите бестселери <br />и други интересни артикли...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="/js/jquery.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/jquery.scrollUp.min.js"></script>
	<script src="/js/price-range.js"></script>
    <script src="/js/jquery.prettyPhoto.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>

