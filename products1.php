<?php require "libs/signup.php";
    require "libs/login.php";
	require_once"libs/DB.php";
	
    $tovary = R::Find('products', "type = 'other'");

	
?>
<?php
    $category = $_GET['category'];
	 $color= $_GET['color'];
	 $price= $_GET['price'];
    $catbar = R::findAll('categories');
    if ($category){
    $prods = R::find('products', "`prod_cat` LIKE ? and `type` = 'other'  ORDER BY `name` ASC", array($category));
    }else {
        $prods = R::Find('products', "type = 'other'");
    }
	if ($color){
    $prods = R::find('products', "`color` LIKE ? and`type` = 'other'  ORDER BY `name` ASC", array($color));
    }
	if ($price==1500){
    $prods = R::find('products', "`price` <= 1500 and`type` = 'other'  ORDER BY `name` ASC", array($price));
    }
	if ($price==5000){
    $prods = R::find('products', "`price` <= 5000 and`type` = 'other'  ORDER BY `name` ASC", array($price));
    }
		if ($price==10000){
    $prods = R::find('products', "`price` <= 10000 and`type` = 'other'  ORDER BY `name` ASC", array($price));
    }
			if ($price==100000){
    $prods = R::find('products', "`price` > 10000 and`type` = 'other'  ORDER BY `name` ASC", array($price));
    }
	$zol=R::getRow("SELECT count(`color`) as Кол FROM `products` WHERE `color`='Золотой' and `type` = 'other'");
		$black=R::getRow("SELECT count(`color`) as Кол FROM `products` WHERE `color`='Чёрный' and `type` = 'other'");
			$red=R::getRow("SELECT count(`color`) as Кол FROM `products` WHERE `color`='Красный' and `type` = 'other'");
				$grey=R::getRow("SELECT count(`color`) as Кол FROM `products` WHERE `color`='Серый' and `type` = 'other'");
					$blue=R::getRow("SELECT count(`color`) as Кол FROM `products` WHERE `color`='Синий' and `type` = 'other'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Магазин Электроники</title>
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
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery.min.js"></script> 
<!-- //js -->  
<!-- web fonts --> 
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //web fonts --> 
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<script src="ajax/ajax.js"></script>
<!-- //for bootstrap working -->
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
											<input placeholder="Имя" name="name" type="text" required="">						
													<input name="pass" placeholder="Пороль" type="password" required="">										
													<div class="sign-up">
														<input type="submit"  name="sign" value="Войти"/>
														<a href="libs/logout1.php" class="logout">Выход</a>
														     <script>$('.logout').click( function() { sessionStorage.clear(); } );</script>
													</div>
                                                    
												</form>
											</div>
										</div> 
									</div>	 
									<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="facts">
											<div class="register">
												<form method="post">			
													<input placeholder="Имя" name="Name" type="text" required="">
													<input placeholder="Email " name="Email" type="email" required="">	
													<input placeholder="Пороль" name="Password" type="password" required="">	
													<input placeholder="Повторите пороль" name="Password2" type="password" required="">
												
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
			<div class="w3l_login">
				<a href="products1.php" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
			</div>
			<div class="w3l_logo">
				<h1><b><a href="index.php">Магазин Электроники<span>Твой выбор. Именно здесь.</b></span></a></h1>
			</div>
			<div class="search">
				<input class="search_box" type="checkbox" id="search_box">
				<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
				<div class="search_form">
					<form action="search.php" method="GET">
						<input type="text" name="search" placeholder="Search...">
						<input type="submit" value="Send">
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
							<a href="products.php" class="dropdown-toggle" data-toggle="dropdown">Товары <b class="caret"></b></a>
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
					</ul>
				</div>
			</nav>
		</div>
	</div>
	
	<!-- //navigation -->
	<!-- banner -->
	<div class="banner banner1">
		<div class="container">
			<h2>Большая распродажа <span>Смартфонов</span> до <i>35% Скидка</i></h2> 
		</div>
	</div> 
	<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Главная</a> <i>/</i></li>
				<li>Товары</li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs --> 
	<!-- mobiles -->
	<div class="mobiles">
		<div class="container">
			<div class="w3ls_mobiles_grids">
				<div class="col-md-4 w3ls_mobiles_grid_left">
					<div class="w3ls_mobiles_grid_left_grid">
						<h3>Категории</h3>
						<div class="w3ls_mobiles_grid_left_grid_sub">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							  <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
								  <h4 class="panel-title asd">
									<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Товары
									</a>
								  </h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								  <div class="panel-body panel_text">
									<ul>
									<li><a href="products1.php?category=Смартфоны">Смартфоны</a></li>
					<li><a href="products1.php?category=Ноутбуки">Ноутбуки</a></li>
																
									</ul>
								  </div>
								</div>
							  </div>
							  <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
								  <h4 class="panel-title asd">
									<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Аксесуары
									</a>
								  </h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								   <div class="panel-body panel_text">
									<ul>
									<li><a href="products1.php?category=Прочее">Прочее</a></li>
									<li><a href="products1.php?category=Аудио">Аудио</a></li>
									</ul>
								  </div>
								</div>
							  </div>
							</div>
							<ul class="panel_bottom">
								<li><a href="products.php">Летняя распродажа</a></li>
								<li><a href="products.php">Распродажа сегодня</a></li>
								<li><a href="products.php">Новыейшие товары</a></li>
							</ul>
						</div>
					</div>
					<div class="w3ls_mobiles_grid_left_grid">
						<h3>Цвет</h3>
						<div class="w3ls_mobiles_grid_left_grid_sub">
							<div class="ecommerce_color">
								<ul>
									<li><a href="products1.php?color=Красный"><i></i> Красный(<?php echo $red['Кол'] ?>)</a></li>
									<li><a href="products1.php?color=Серый"><i></i> Серый(<?php echo $grey['Кол'] ?>)</a></li>
									<li><a href="products1.php?color=Чёрный"><i></i> Чёрный(<?php echo $black['Кол'] ?>)</a></li>
									<li><a href="products1.php?color=Золотой"><i></i> Золотой(<?php echo $zol['Кол'] ?>)</a></li>
									<li><a href="products1.php?color=Синий"><i></i> Синий(<?php echo $blue['Кол'] ?>)</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="w3ls_mobiles_grid_left_grid">
						<h3>Цена</h3>
						<div class="w3ls_mobiles_grid_left_grid_sub">
							<div class="ecommerce_color ecommerce_size">
								<ul>
									<li><a href="products1.php?price=1500">до 1500 руб</a></li>
									<li><a href="products1.php?price=5000">до 5000 руб</a></li>
									<li><a href="products1.php?price=10000">до 10000 руб</a></li>
									<li><a href="products1.php?price=100000">более 10000 руб </a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-8 w3ls_mobiles_grid_right">
					<div class="col-md-6 w3ls_mobiles_grid_right_left">
						<div class="w3ls_mobiles_grid_right_grid1">
							<img src="images/46.jpg" alt=" " class="img-responsive" />
							<div class="w3ls_mobiles_grid_right_grid1_pos1">
								<h3>Смартфоны<span>До</span> 15% Скидка</h3>
							</div>
						</div>
					</div>
					<div class="col-md-6 w3ls_mobiles_grid_right_left">
						<div class="w3ls_mobiles_grid_right_grid1">
							<img src="images/47.jpg" alt=" " class="img-responsive" />
							<div class="w3ls_mobiles_grid_right_grid1_pos">
								<h3>Топ 10 Новых<span>Смартфонов </span>и аксесуаров</h3>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>

					<div class="w3ls_mobiles_grid_right_grid2">
						<div class="w3ls_mobiles_grid_right_grid2_left">
							<h3>Найденые резульататы: 0-1</h3>
						</div>
								<div class="w3ls_mobiles_grid_right_grid2_right">
							<select id="country2" name="country2" class="select_item">
								
								  <option value="nameascl">Имени (А - Я)</option> 
				        <option value="namedescl">Имени (Я - А)</option>
								<option value="priceascl">По цене: по возрастанию</option>
								<option value="pricedescl">По цене: по убыванию</option>
							</select>
							 <input type="hidden" name="cat" id="hid" value="<?php echo $category ?>">
							  <input type="hidden" name="color" id="hid" value="<?php echo $color ?>">
							  	  <input type="hidden" name="price" id="hid" value="<?php echo $price ?>">
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="ttt">
					<div class="w3ls_mobiles_grid_right_grid3">
					
					<?php foreach ($prods as $prod){ ?>
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
							<div class="agile_ecommerce_tab_left mobiles_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="<?php echo $prod->image ?>" alt=" " class="img-responsive" />
									<img src="<?php echo $prod->image ?>" alt=" " class="img-responsive" />
									<img src="<?php echo $prod->image ?>" alt=" " class="img-responsive" />
									<img src="<?php echo $prod->image ?>" alt=" " class="img-responsive" />
									<img src="<?php echo $prod->image ?>" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal<?php echo $prod->id ?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
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
								<div class="mobiles_grid_pos">
									<h6>Новинки</h6>
								</div>
							</div>
						</div><?php } ?>
						<div class="clearfix"> </div>
					</div>
						</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>  
<?php foreach ($prods as $prod){ ?>	
	<div class="modal video-modal fade" id="myModal<?php echo $prod->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModal<?php echo $prod->id ?>">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="<?php echo $prod->image ?>" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4> Характеристики <?php echo $prod->name ?></h4>
							<p class="opesane"><b><em><?php echo $prod->about ?></em></b></p>
						       
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<?php if ($prod->about) { ?><b><p>Характеристики : </b></p><?php } ?> 
								<?php if ($prod->title) { ?> <h5>&#9733;<?php echo $prod->title ?></h5><?php } ?> 
								<?php if ($prod->title1) { ?><h5>&#9733;<?php echo $prod->title1 ?></h5><?php } ?> 
								<?php if ($prod->title2) { ?><h5>&#9733;<?php echo $prod->title2 ?></h5><?php } ?> 
								<?php if ($prod->title3) { ?><h5>&#9733;<?php echo $prod->title3 ?></h5><?php } ?> 
								<?php if ($prod->title4) { ?><h5>&#9733;<?php echo $prod->title4 ?></h5><?php } ?> 
							
							</div> 	
							
						</div>
						<div class="clearfix"> </div>
                </section>
					</div>
			</div>
		</div>
		</div><?php } ?>
	<div class="modal video-modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModal6">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/34.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>Детская электроника</h4>
							<p>Детская электроника для вашего ребёнка станет свизующим звеном человека и технологий.Содержит многообразный набор обучающих программ для развития ребёнка.</p>
							<div class="rating">
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<i class="item_price">от 2000 руб</i></p> 
							
							</div>
							
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModal5">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/36.jpg" alt=" " class="img-responsive">
						</div>
						
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModal4">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/p3.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>MP3 плеер</h4>
							<p>Лучшая замена вашим старым плеерам.Он удобен в использовании,лёгкий,мобильный и компактный.</p>
							<div class="rating">
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<i class="item_price">от 1500 руб</i></p>
								
							</div>
							
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	
	<div class="modal video-modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal2">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/p6.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>Ноутбуки</h4>
							<p>Ультралёгие, мощные и по выгодной цене.Сегодня вы можете купить их по низкой цене.</p>
							<div class="rating">
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>  
							<div class="modal_body_right_cart  simpleCart_shelfItem">
								<i class="item_price">от 30000 руб</i></p>
						</div>	
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>  
	<!-- Related Products -->
	<div class="w3l_related_products">
		<div class="container">
			<h3>Популярные продукты</h3>
			<ul id="flexiselDemo2">			
				<li>
					<div class="w3l_related_products_grid">
						<div class="agile_ecommerce_tab_left mobiles_grid">
							<div class="hs-wrapper hs-wrapper3">
								<img src="images/34.jpg" alt=" " class="img-responsive" />
								<img src="images/35.jpg" alt=" " class="img-responsive" />
								<img src="images/27.jpg" alt=" " class="img-responsive" />
								<img src="images/28.jpg" alt=" " class="img-responsive" />
								<img src="images/37.jpg" alt=" " class="img-responsive" /> 
								<div class="w3_hs_bottom">
									<div class="flex_ecommerce">
										<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>
							<h5><a href="single.php">Детская Электроники</a></h5>
							<div class="simpleCart_shelfItem"> 
								 <i class="item_price">2000 руб</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Kid's Toy"> 
									
								</form> 
							</div>
						</div>
					</div>
				</li>
				
				
				<li>
					<div class="w3l_related_products_grid">
						<div class="agile_ecommerce_tab_left mobiles_grid">
							<div class="hs-wrapper hs-wrapper3">
								<img src="images/p3.jpg" alt=" " class="img-responsive" />
								<img src="images/p5.jpg" alt=" " class="img-responsive" />
								<img src="images/p4.jpg" alt=" " class="img-responsive" />
								<img src="images/p2.jpg" alt=" " class="img-responsive" />
								<img src="images/p1.jpg" alt=" " class="img-responsive" /> 
								<div class="w3_hs_bottom">
									<div class="flex_ecommerce">
										<a href="#" data-toggle="modal" data-target="#myModal4"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>
							<h5><a href="single.php">MP3 плеер</a></h5>
								<div class="simpleCart_shelfItem">
									<p><span>1500 руб</span> <i class="item_price">900 руб</i></p>
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart" />
										<input type="hidden" name="add" value="1" /> 
										<input type="hidden" name="w3ls_item" value="MP3 плеер" /> 
										
									</form>
							</div> 
							<div class="mobiles_grid_pos">
								<h6>Новинка</h6>
							</div>
						</div> 
					</div>
				</li>
			</ul>
			
				
		</div>
	</div>
	<!-- //top-brands --> 
	<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
		<div class="col-md-6 w3agile_newsletter_left">
				<h3>Наши новости</h3>
				<p>Подпишись на ежедневную рассылку магазина.</p>
			</div>
			<div class="col-md-6 w3agile_newsletter_right">
				<form action="/libs/subscribe.php" method="post">
					<input type="email" name="sub_email" placeholder="example@email.ru" required>
					<div class="sign-up">
					<input type="submit"  name="subscribe"  value="Подписаться" />
					</div>
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //newsletter -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>Контакты</h3>
					<p>Наши данные чтобы вы всегда могли с нами связаться.</p>
					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Ул.Садовая 5 ,корпус 3 <span>Москва,Россия.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">magaz@inbox.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>8(695)33-66-223</li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Информация</h3>
					<ul class="info"> 
						<li><a href="about.php">О нас</a></li>
						<li><a href="mail.php">Связаться с нами</a></li>
						<li><a href="faq.php">Вопросы</a></li>
						<li><a href="products.php">Спец.Предложения</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Категории</h3>
					<ul class="info"> 
						<li><a href="products.php">Смартоны</a></li>
						<li><a href="products1.php">Ноутбуки</a></li>
						</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
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
				<p>&copy; 2017 Магазин Электроники. Все права защищены | Дизайнер <b>Artym Minakov</b></a></p>
			</div>
		</div>
	</div>
	<!-- //footer -->  
	<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo2").flexisel({
				visibleItems:4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:568,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:667,
						visibleItems:2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});
			
		});
	</script>
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	<!-- cart-js -->
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
	<!-- //cart-js --> 
</body>
</html>