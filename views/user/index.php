
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Купи Книга</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/prettyPhoto.css" rel="stylesheet">
    <link href="/css/price-range.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
	<link href="/css/main.css" rel="stylesheet">
	<link href="/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="/js/html5shiv.js"></script>
    <script src="/js/respond.min.js"></script>
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
								<li><a href="#"><i class="fa fa-envelope"></i> info@kupikniga.com</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="www.facebook.com"><i class="fa fa-facebook"></i></a></li>
								<li><a href="www.twitter.com"><i class="fa fa-twitter"></i></a></li>
								<li><a href="www.instagram.com"><i class="fa fa-instagram"></i></a></li>
								
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
																						
								<?php
									if($_SESSION['user_id'] != null ){

										echo "<li><a href='/User/viewCart'><i class='fa fa-shopping-cart'></i> Кошничка</a></li>";
										echo"<li><a href='/login/logout'><i class='fa fa-unlock'></i> Одјави ме</a></li>	";

									}
									else {
										echo"<li><a href='/login/'><i class='fa fa-lock'></i> Најави ме</a></li>";
									}
							 ?>
									
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
							<form method="post">
							<input type="text" name="search" placeholder="Пребарај"/>
							<input type="submit" style="width: 30px;float: right;" value=">>">
						</form>

					
						</div>


					</div>
										
				</div>
<?php 

if(isset($_POST['search'])){
	require "search.php";

	if(count($results) > 0){
		foreach ($results as $r){

			echo "<div>" . "<a href = '/User/productdetail/".$r['product_id']."'>". $r['title'] . "</a>". "</div>";
		}
	}
	else {
		echo "Не е пронајден запис.";
	}
		

	
}

?>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	




<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>КУПИ</span>КНИГА</h1>
									<h2>Робинсон Крусо</h2>
									<p>Морнарот Робинсон Крусо завршува на пуст остров како единствен преживеан по катастрофалниот бродолом. Оставен на милост и немилост на суровата природа и на самотијата, тој го пронаоѓа патот до културата и цивилизацијата. Учи занаети, гради куќа, обработува земјиште и припитомува животни, но сè уште е сам...

 </p>
									<a href = "/User/addToCart/7 " class="btn btn-default get">Купи сега </a>
								</div>
								<div class="col-sm-6">
									<img src="/images/robinsonkruso.jpg" class="girl img-responsive" alt="" />
									<img src="/images/popust1.png" style="z-index: 10; width:300px; height:200px; top: 62%;
	right: 10%; transform: rotate(18deg);" class="pricing" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>КУПИ</span>КНИГА</h1>
									<h2>Хари Потер и Одајата на Тајните</h2>
									<p>Летниот распуст на Хари беше во најмала рака катастрофален. Го прослави најлошиот роденден досега, не доби ниедно писмо од Рон и Хермиона, а му беше соопштено смртно предупредување од куќниот виленик, Доби – и конечно, беше спасен на спектакуларен начин од Дарслиеви со помош на летачки автомобил! Во Хогвортс, пак, проблемите продолжуваат...  </p>
									<a href = "/User/addToCart/8 " class="btn btn-default get">Купи сега </a>
								</div>
								<div class="col-sm-6">
									<img src="/images/haripoter.jpg" class="girl img-responsive" alt="" />
									<img src="/images/popust2.png" style="z-index: 10; width:300px; height:200px; top: 62%;
	right: 10%; transform: rotate(18deg);" class="pricing" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>КУПИ</span>КНИГА</h1>
									<h2>Пинокио</h2>
									<p>Сиромашниот старец Џепето доаѓа на идеја да направи дрвена марионета, кукла која ќе личи на вистинско момче.
									Така настанува палавиот, непослушен Пинокио, кој, откако ќе избега од дома, доживува секакви незгоди, наивно паѓајќи во замки и едвај спасувајќи глава од секакви опасни ситуации.
									Сепак, на крајот Пинокио ќе покаже дека умее да биде и вреден, послушен, храбар, грижлив и приврзан.</p>
									<a href = "/User/addToCart/9 " class="btn btn-default get">Купи сега </a>
								</div>
								<div class="col-sm-6">
									<img src="/images/pinokio.jpg" class="girl img-responsive" alt="" />
									<img src="/images/popust3.png" style="z-index: 10; width:300px; height:200px; top: 62%; right: 10%; transform: rotate(18deg);"class="pricing" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->

	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Категории</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Белетристика
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Биографии / лидери </a></li>
											<li><a href="#">Бестселери за млади </a></li>
											<li><a href="#">Здравје и Живот </a></li>
											<li><a href="#">Современи класици </a></li>
											<li><a href="#">Бестселери </a></li>
											<li><a href="#">Современи класици </a></li>
											<li><a href="#">Монографии  </a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Бестселери
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">За млади</a></li>
											
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Литература за деца
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Лектири и читанки</a></li>
											<li><a href="#">Боенки, цртанки и креативни</a></li>
											<li><a href="#">Бестселери за деца</li>
											
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">За најмалите</a></h4><br>
								</div>
							</div>
							<!--brands_products-->
							<h2>Омилени автори</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>Гијом Мисо</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span>Џули Џејмс</a></li>
									<li><a href="#"> <span class="pull-right">(27)</span>Јелена Бачиќ – Алимпиќ</a></li>
									<li><a href="#"> <span class="pull-right">(32)</span>Ден Браун</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span>Колин Хувер</a></li>
									<li><a href="#"> <span class="pull-right">(9)</span>Паоло Коелјо</a></li>
									<li><a href="#"> <span class="pull-right">(4)</span>Џ.К.Роулинг</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Ранг за цена </h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="1500" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">0 денари</b> <b class="pull-right">1500 денари</b>
							</div>
						</div><!--/price-range-->
						
						</div>
					</div>
					
				
					<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
					
						<h2 class="title text-center">Препорачуваме</h2>

<?php   
					foreach($data['items'] as $item) echo"
						<div class='col-sm-4'> 
							<div class='product-image-wrapper'>
								<div class='single-products'>
	<div class='productinfo text-center' >
<a href = '/User/productdetail/$item->product_id'> <img src='/images/" . (isset($item->filename)?$item->filename:'default.png') . "' alt='$item->title' style='width:100%' /> </a>
<h2>$item->price</h2>
<p name='title'>$item->title</p>
<a href='/User/addToCart/$item->product_id' class='btn btn-default add-to-cart'>
<i class='fa fa-shopping-cart'></i>Додади во кошничка</a></div>
<div class='product-overlay'><div class='overlay-content'>
<h2>$item->title</h2>
<p>$item->description</p>
<a href='/User/addToCart/$item->product_id' class='btn btn-default add-to-cart'>
<i class='fa fa-shopping-cart'></i>Додади во кошничка</a></div>
</div></div>

	<div class='choose'>
<ul class='nav nav-pills nav-justified'>
<li><a href='#'><i class='fa fa-plus-square'></i>Додади во омилени</a></li>
</ul>
</div>
</div>
</div> 
"; ?>	
 </div>
</section>

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


<div class="recommended_items">
						
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?= ASSETS . THEME ?>images/home/trojcatastudenti.jpg" alt="" />
													<h2>199 ден.</h2>
													<p>Тројцата студенти</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Додади во кошничка</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?= ASSETS . THEME ?>images/home/niz.png" alt="" />
													<h2>450 ден.</h2>
													<p>Низ иглени уши</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Додади во кошничка</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?= ASSETS . THEME ?>images/home/ostavi.png" alt="" />
													<h2>390 ден.</h2>
													<p>Остави го светот зад себе</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Додади во кошничка</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?= ASSETS . THEME ?>images/home/bez.jpg" alt="" />
													<h2>420 ден.</h2>
													<p>Без правила</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Додади во кошничка</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?= ASSETS . THEME ?>images/home/4000sedmici.jpg" alt="" />
													<h2>390 ден.</h2>
													<p>Четири илјади седмици</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Додади во кошничка</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?= ASSETS . THEME ?>images/home/gatanki.jpg" alt="" />
													<h2>200 ден.</h2>
													<p>Гатанки за сѐ и сешто и за уште нешто</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Додади во кошничка</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
				</div> 
			</form>
			</div>
		</div>
	</section>
	

















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