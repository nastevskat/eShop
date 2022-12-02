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
                    echo"<li><a href='/login/logout'><i class='fa fa-unlock'></i> Одјави ме</a></li>  ";

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
              <input type="text" placeholder="Пребарај"/>
            </div>
          </div>
        </div>
      </div>
    </div><!--/header-bottom-->
  </header><!--/header-->
  
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
            
           
            
            
   
            
          </div>
        </div>
        
        <div class="col-sm-9 padding-right">
          <div class="product-details"><!--product-details-->
            <div class="col-sm-5">
              <div class="view-product">
                    <?php
foreach($data->pictures as $picture) {
  echo "<img src='/images/$picture->filename'  />";
  }
 ?>
                          </div>
                              

            </div>
            <div class="col-sm-7">
              <div class="product-information"><!--/product-information-->
                
                <h2><?=$data->title ?></h2>
                <p><?=$data->description ?></p>
                <img src="images/product-details/rating.png" alt="" />
                <span>
                  <span><?=$data->price ?> денари </span>
                  <label>Количина</label>
                  <input type="text" value="3" />
                  <a  class="btn btn-fefault cart" href = "/User/addToCart/9 " >
                    <i class="fa fa-shopping-cart"></i>
                    Додади во кошничка
                  </a>
                </span>
                <p><b>Достапност:</b> На залиха</p>
                <p><b>Издавачка куќа</b> Libris</p>
              </div><!--/product-information-->
            </div>
          </div><!--/product-details-->
          
          
              
            
          
          
        </div>
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