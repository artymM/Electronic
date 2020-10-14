<?php 
    require "libs/DB.php"; 
if ($_GET){
    $det = $_GET['det']; 
    $detail = R::Load('products', $det); }
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
<script src="ajax/corzina.js"></script>
<script src="ajax/ajax.js"></script>
</head> 
<body>
<div class="single">

<div class="container">
<?php if ($detail){ ?>
<div class="col-md-12">
<div class="agile_ecommerce_tab_left mobiles_grid">
		<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
			  <div class="hs-wrapper hs-wrapper2">
			    <li data-thumb="images/<?php echo $detail->image ?>">
				<img src="images/<?php echo $detail->image ?>" alt=" " class="img-responsive" />
			       
		
			    </li>
                  
			  </ul>
		</div>
	</div>	
	</div>	
<div class="col-md-8 single-top-in">
					<div class="simpleCart_shelfItem">
							<h1><?php echo $detail->name ?></h1>
						
							
								<label   class="item_price"><?php echo $detail->price ?> </label>
							
								<a href="#" class="cart item_add">В корзину</a>
						</div>
					</div>
					</div>
					</div>
					</div>
<?php } else { ?> <h3 style="text-align:center">Товар не найден!</h3><?php } ?>
</body>
</html>