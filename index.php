<?php require "libs/signup.php";
    require "libs/login.php";
    $tovary = R::Find('products', "type = 'index'");
?>
<?


    $tovard = R::Find('products', "prod_cat = 'Аудио' and type = 'index' ");
$tovars = R::Find('products', "prod_cat = 'Смартфоны' and type = 'index'");
$tovare = R::Find('products', "prod_cat = 'Ноутбуки' and type = 'index'");

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
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery.min.js"></script>

<link rel="stylesheet" href="css/jquery.countdown.css" /> <!-- countdown --> 
<!-- //js -->  
<!-- web fonts --> 
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<script src="ajax/corzina.js"></script>
<script src="ajax/ajax.js"></script>
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
														<input placeholder="Имя" name="name" type="text" required="">					
													<input name="pass" placeholder="Пароль" type="password" required="">										
													<div class="sign-up">
														<input type="submit"  name="sign" value="Войти"/>
														<?php  if(isset($_SESSION['logged_user'])){ ?>
														<a href="libs/logout1.php" class="logout" id="logout">Выход</a>
														     <script>$('.logout').click( function() { sessionStorage.clear(); } );</script>
														<?php }?>
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
													<input placeholder="Пароль" name="password" type="password" required="">	
													<input placeholder="Повторите пароль" name="password2" type="password" required="">
												
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
				<h1><a href="index.php"><b>Магазин Электроники<span>Твой выбор. Именно здесь.</b></span></a></h1>
				       <div class="iii">
                   <?php  if(isset($_SESSION['logged_user'])){echo '<span id="logout" style="
 
    font-weight: 800;
    color: #0006ff;">Здравствуй, '.$_SESSION['logged_user'];}?></span>
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
						<?php if  ($_SESSION['admin']==1 ){ ?>
						<li><span class="log" id="admin"><a href="../material-pro/material/index.php"><br>Панель администратора</a></span><li>
						<?php }?>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->
	<!-- banner -->
	<div class="banner">
		<div class="container">
			<h3>Магазин Электроники, <span>Спец.Предложения</span></h3>
		</div>
	</div>
	<!-- //banner --> 
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="col-md-5 wthree_banner_bottom_left">
				<div class="video-img">
					<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
						<span class="glyphicon glyphicon-expand" aria-hidden="true"></span>
					</a>
				</div> 
					   
					
			</div>
			<div class="col-md-7 wthree_banner_bottom_right">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home">Смартфоны</a></li>
						<li role="presentation"><a href="#audio" role="tab" id="audio-tab" data-toggle="tab" aria-controls="audio">Аудио</a></li>
				 		<li role="presentation"><a href="#video" role="tab" id="video-tab" data-toggle="tab" aria-controls="video">Ноутбуки</a></li>
						
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
							<div class="agile_ecommerce_tabs">
							<?php foreach ($tovars as $prod){ ?>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
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
								</div><?php } ?>
							
						
								
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="audio" aria-labelledby="audio-tab">
							<div class="agile_ecommerce_tabs">
								<?php foreach ($tovard as $prod){ ?>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper ">
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
								</div><?php } ?>
							
								
							
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="video" aria-labelledby="video-tab">
							<div class="agile_ecommerce_tabs">
								<?php foreach ($tovare as $prod){ ?>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
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
								</div><?php } ?>
								
								
							
							</div>
						</div>
						
					</div>
				</div> 
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //banner-bottom --> 
	<!-- modal-video -->
	<?php foreach ($tovars as $prod){ ?>	
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
	<div class="modal video-modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal1">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/9.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>Мультемидийная аппаратура</h4>
							<p>Проффисиональная студийная техника по низким цена только у нас.</p>
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
								<p><span>6500руб</span> <i class="item_price">4000руб</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Headphones"> 
									<input type="hidden" name="amount" value="4000">   
									<button type="submit" class="w3ls-cart">В корзину</button>
								</form>
							</div>
							<h5>Цвета</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
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
							<img src="images/11.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>4 ядерный ультралёгкий ноутбук</h4>
							<p>4 ядерный ультралёгкий ноутбук по превлекательной цене.</p>
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
								<p><span>40000руб</span> <i class="item_price">30000руб</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Ноутбук"> 
									<input type="hidden" name="amount" value="30000">   
									<button type="submit" class="w3ls-cart">В корзину</button>
								</form>
							</div>
							<h5>Цвета</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModal3">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
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
							<img src="images/17.jpg" alt=" " class="img-responsive" />
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
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					
			</div>
		</div>
	</div>
	
	<!-- //modal-video -->
	<!-- banner-bottom1 -->
	<div class="banner-bottom1">
		<div class="agileinfo_banner_bottom1_grids">
			<div class="col-md-7 agileinfo_banner_bottom1_grid_left">
				<h3>Лучшая акусстическая система 5.1<span>20% <i>Скидка</i></span></h3>
				<a href="products.php">Заказать сейчас</a>
			</div>
			<div class="col-md-5 agileinfo_banner_bottom1_grid_right">
				<h4>Горячая распродажа</h4>
				<div class="timer_wrap">
					<div id="counter"> </div>
				</div>
				<script src="js/jquery.countdown.js"></script>
				<script src="js/script.js"></script>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //banner-bottom1 --> 
	<!-- special-deals -->
	<div class="special-deals">
		<div class="container">
			<h2>Спец.Предложения</h2>
			<div class="w3agile_special_deals_grids">
				<div class="col-md-7 w3agile_special_deals_grid_left">
					<div class="w3agile_special_deals_grid_left_grid">
						<img src="images/21.jpg" alt=" " class="img-responsive" />
						<div class="w3agile_special_deals_grid_left_grid_pos1">
							<h5>30%<span>Скидка</span></h5>
						</div>
						<div class="w3agile_special_deals_grid_left_grid_pos">
							<h4>Мы продаём <span>Только Лучшее</span></h4>
						</div>
					</div>
					<div class="wmuSlider example1">
						<div class="wmuSliderWrapper">
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="w3agile_special_deals_grid_left_grid1">
										<img src="images/t1.png" alt=" " class="img-responsive" />
										<p>Лучшие цены ,отличенное качество,многообразие товаров.Это лучший магазин-Рекомендую!!!</p>
										<h4>Наталья</h4>
									</div>
								</div>
							</article>
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="w3agile_special_deals_grid_left_grid1">
										<img src="images/t2.png" alt=" " class="img-responsive" />
										<p>Низкие цены на качественные товары,того вы нигде не найдёте.</p>
										<h4>Михаил</h4>
									</div>
								</div>
							</article>
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="w3agile_special_deals_grid_left_grid1">
										<img src="images/t3.png" alt=" " class="img-responsive" />
										<p>Шикарный выбор товаров по вашему вкусу и кошельку.</p>
										<h4>Роза</h4>
									</div>
								</div>
							</article>
						</div>
					</div>
						<script src="js/jquery.wmuSlider.js"></script> 
						<script>
							$('.example1').wmuSlider();         
						</script> 
				</div>
				<div class="col-md-5 w3agile_special_deals_grid_right">
					<img src="images/20.jpg" alt=" " class="img-responsive" />
					<div class="w3agile_special_deals_grid_right_pos">
						<h4>Специально <span>Для Женщин</span></h4>
						<h5>Распродажа<span>до</span>30%</h5>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
	<!-- //new-products -->
	<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
			<h3>Топ брендов</h3>
			<div class="sliderfig">
				<ul id="flexiselDemo1">			
					<li>
						<img src="images/tb1.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/tb2.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/tb3.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/tb4.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/tb5.jpg" alt=" " class="img-responsive" />
					</li>
				</ul>
			</div>
			<script type="text/javascript">
					$(window).load(function() {
						$("#flexiselDemo1").flexisel({
							visibleItems: 4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
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
				<p>&copy; 2017 Магизин Электроники. Все права защищены | Дизайнер <b>Artym Minakov</b></a></p>
			</div>
		</div>
	</div>
	<!-- //footer --> 
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