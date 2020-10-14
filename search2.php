<?
require_once"libs/DB.php";

    $needname = $_GET['search'];
    $needprod = R::getAll("SELECT * FROM `products` WHERE `name` like '%$needname%'");
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Магизин Электроники</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Electronic Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->

<script src="ajax/ajax.js"></script>
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/jquery.countdown.css" /> <!-- countdown --> 
<!-- //js -->  
<!-- web fonts --> 
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //web fonts -->  
<!-- start-smooth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //end-smooth-scrolling --> 
</head> 
<body>
	<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	<!-- //for bootstrap working -->
	<!-- header modal -->
	<div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
		aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;</button>
					<h4 class="modal-title" id="myModalLabel">Вход</h4>
				</div>
				<div class="modal-body modal-body-sub">
					<div class="row">
						<div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
							<div class="sap_tabs">	
								<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
									<ul>
										<li class="resp-tab-item" aria-controls="tab_item-0"><span>Войти</span></li>
										<li class="resp-tab-item" aria-controls="tab_item-1"><span>Зарегистрироваться</span></li>
									</ul>		
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="facts">
											<div class="register">
												<form method="post">			
													<input name="email" placeholder="Email " type="text" required="">						
													<input name="pass" placeholder="Пороль" type="password" required="">										
													<div class="sign-up">
														<input type="submit"  name="sign" value="Войти"/>
														<a href="libs/logout1.php" id="logout">Выход</a>
														
													</div>
													
													
                                                    
												</form>
											</div>
										</div> 
									</div>	 
									<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="facts">
											<div class="register">
											
												<form method="post">			
													<input placeholder="Имя" name="name" type="text" required="">
													<input placeholder="Email " name="email" type="email" required="">	
													<input placeholder="Пороль" name="password" type="password" required="">	
													<input placeholder="Повторите пороль" name="password2" type="password" required="">
												
													<div class="sign-up">
														<input type="submit" name="reg" value="Создать Аккаунт"/>
															
													</div>
													
												</form>
											</div>
										</div>
									</div> 			        					            	      
								</div>	
							</div>
							<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
							<script type="text/javascript">
								$(document).ready(function () {
									$('#horizontalTab').easyResponsiveTabs({
										type: 'default', //Types: default, vertical, accordion           
										width: 'auto', //auto or any width like 600px
										fit: true   // 100% fit in a container
									});
								});
							</script>
							<div id="OR" class="hidden-xs">Или</div>
						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<div class="row text-center sign-with">
								<div class="col-md-12">
									<h3 class="other-nw">Войти с помощью</h3>
								</div>
								<div class="col-md-12">
								
									<ul class="social">
										<li class="social_facebook"><a href="#" class="entypo-facebook"></a></li>
										<li class="social_dribbble"><a href="#" class="entypo-dribbble"></a></li>
										<li class="social_twitter"><a href="#" class="entypo-twitter"></a></li>
										<li class="social_behance"><a href="#" class="entypo-behance"></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	
	<!-- header modal -->
	<!-- header -->
	<div class="header" id="home1">
		<div class="container">
		<div class="admin">
													
													</div>
			<div class="w3l_login">
				<a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
			</div>
			<div class="w3l_logo">
				<h1><a href="index.php">Магизин Электроники<span>Твой выбор. Именно здесь.</span></a></h1>
				       <div class="iii">
                   <?php  if(isset($_SESSION['logged_user'])){echo '<span id="logout">Здравствуй, </span>'.$_SESSION['logged_user'];}?>
			</div>
			</div>
			<div class="search">
				<input class="search_box" type="checkbox" id="search_box">
				<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
				<div class="search_form">
					<form action="search.php" method="GET">
					<input type="text" name="search" placeholder="Search...">
						<input type="submit" value="Send"  >
					</form>
				</div>
			</div>
			<div class="cart cart box_1"> 
				<form action="#" method="post" class="last"> 
					<input type="hidden" name="cmd" value="_cart" />
					<input type="hidden" name="display" value="1" />
					
					
					<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
				</form>   
			</div> 
		
		</div>
	</div>
	<!-- //header -->
	<!-- navigation -->
	<div class="navigation">
	
		<div class="container">
		
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav">
						<li><a href="index.php" class="act">Главная</a></li>	
						<!-- Mega Menu -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Товары <b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Смартфоны</h6>
											<li><a href="products.php">Смартфоны</a></li>
											<li><a href="products.php">Mp3 плееры <span>Новинки</span></a></li> 
											<li><a href="products.php">Популярные модели</a></li>
											<li><a href="products.php">Все <span>Новинки</span></a></li>
										</ul>
									</div>
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Аксесуары</h6>
											<li><a href="products1.php">Ноутбуки</a></li>
											<li><a href="products1.php">Планшеты</a></li>
											<li><a href="products1.php">Корманные гаджеты <span>Новинки</span></a></li>
											<li><a href="products1.php"><i>Летняя распродажа</i></a></li>
										</ul>
									</div>
									<div class="col-sm-2">
										<ul class="multi-column-dropdown">
											<h6>Home</h6>
											<li><a href="products2.php">Tv</a></li>
											<li><a href="products2.php">Camera</a></li>
											<li><a href="products2.php">AC</a></li>
											<li><a href="products2.php">Grinders</a></li>
										</ul>
									</div>
									<div class="col-sm-4">
										<div class="w3ls_products_pos">
											<h4>30%<i>Скидка/-</i></h4>
											<img src="images/1.jpg" alt=" " class="img-responsive" />
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
						</li>
						<li><a href="about.php">О нас</a></li> 
						
						<li><a href="mail.php">Обратная связь</a></li>
						<li><span class="log" id="admin"><a href="admin.php"><br>Панель администратора</a></span><li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
<?php if ($needprod){ ?>
<div class="tovaru"
		<h1>Товары по запросу</h1>
		</div>
		  
		 
 
	
<div class="col-sm-2 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">   
 <?php 
    $needprod = R::convertToBeans('products', $needprod);
foreach ($needprod as $prod){ ?>
							<div class="agile_ecommerce_tab_left mobiles_grid1">
								<div class="hs-wrapper hs-wrapper2">
										<img src="<?php echo $prod->image ?>" alt=" " class="img-responsive" />
									<img src="<?php echo $prod->image ?>" alt=" " class="img-responsive" />
									<img src="<?php echo $prod->image ?>" alt=" " class="img-responsive" />
									<img src="<?php echo $prod->image ?>" alt=" " class="img-responsive" />
									<img src="<?php echo $prod->image ?>" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal9"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
									<h5><a href="cart.php"><?php echo $prod->name ?></a></h5> 
								<div class="simpleCart_shelfItem">
									<p><span><?php echo $prod->old_price ?> руб</span> <i class="item_price"><?php echo $prod->price ?> руб</i></p>
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart" />
										<input type="hidden" name="add" value="1" /> 
										<input type="hidden" name="w3ls_item" value="<?php echo $prod->name ?>" /> 
										<input type="hidden" name="amount" value="<?php echo $prod->price ?>"/>   
										<button id="<?php echo $prod->id ?>" type="submit" class="w3ls-cart">В корзину</button>
									</form>
									</div>
								<div class="mobiles_grid_posy">
									<h6>Новинки</h6>
								</div>
							</div><?php } ?>
						</div>

					<script src="js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) { 
        		}
        	}
        });
    </script>  
					
		
			<div class="col-lg-12 phone_search">		
<div class="newsletter">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				<h3>Наша почта</h3>
				<p>Если возникли проблемы с выбором напишите нам.</p>
			</div>
			<div class="col-md-6 w3agile_newsletter_right">
				<form action="#" method="post">
					<input type="email" name="Email" placeholder="Email" required="">
					<input type="submit" value="" />
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	</div>
	<!-- //newsletter -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
		
			<div class="w3_footer_grids">
			<div class="dom">
				<div class="col-md-3 w3_footer_grid4">
					<h3>Контакты</h3>
					<p>Наши данные чтобы вы всегда могли с нами связаться.</p>
					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Ул.Садовая 5 ,корпус 3 <span>Москва,Россия.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">magaz@inbox.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>8(695)33-66-223</li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid4">
					<h3>Информация</h3>
					<ul class="info"> 
						<li><a href="about.php">О нас</a></li>
						<li><a href="mail.php">Связаться с нами</a></li>
						<li><a href="faq.php">Вопросы</a></li>
						<li><a href="products.php">Спец.Предложения</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid4">
					<h3>Категории</h3>
					<ul class="info"> 
						<li><a href="products.php">Смартоны</a></li>
						<li><a href="products1.php">Ноутбуки</a></li>
						</ul>
				</div>
				<div class="col-md-3 w3_footer_grid4">
					<h3>Интересно</h3>
					<ul class="info"> 
						<li><a href="index.php">Главная</a></li>
						<li><a href="products.php">Распродажи</a></li>
					</ul>
					<h4>Свяжитесь с нами</h4>
					<div class="agileits_social_button">
						<ul>
							<li><a href="#" class="facebook"> </a></li>
							<li><a href="#" class="twitter"> </a></li>
							<li><a href="#" class="google"> </a></li>
							<li><a href="#" class="pinterest"> </a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-copy">
			<div class="footer-copy1">
				<div class="footer-copy-pos">
					<a href="#home1" class="scroll"><img src="images/arrow.png" alt=" " class="img-responsive" /></a>
				</div>
			</div>
			<div class="container">
				<p>&copy; 2017 Магизин Электроники. Все права защищены | Дизайнер <b>Artym Minakov</b></a></p>
			</div>
		</div>
	</div>


		</body>
</html>	
                
            
	
	
<?php } else { ?><h3 style="text-align:center">Ничего не найдено!</h3><?php } ?>

