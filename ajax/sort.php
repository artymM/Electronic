<?php
    require "../libs/DB.php";
    $sort = $_POST['option'];

    $category = $_POST['cat'];

    if ($category){
        
    switch ($sort){
            
        case nameasc:
            $prods = R::find('products', "`prod_cat` LIKE ? and `type` = 'smart' ORDER BY `name` ASC", array($category)); break;
            
        case namedesc:
            $prods = R::find('products', "`prod_cat` LIKE ? and `type` = 'smart' ORDER BY `name` DESC", array($category)); break;
            
            case priceasc:
            $prods = R::find('products', "`prod_cat` LIKE ? and `type` = 'smart' ORDER BY `price` ASC", array($category)); break;
            
        case pricedesc:
            $prods = R::find('products', "`prod_cat` LIKE ? and `type` = 'smart' ORDER BY `price` DESC", array($category)); break;
		
            
    }
    }else {
        switch ($sort){
        case nameasc:
            $prods = R::find('products', " where `type` = 'smart' ORDER BY `name`  ASC  "); break;
            
        case namedesc:
            $prods = R::find('products', " where `type` = 'smart' ORDER BY `name` DESC "); break;
            
            case priceasc:
            $prods = R::find('products', "where `type` = 'smart' ORDER BY `price` ASC "); break;
            
        case pricedesc:
            $prods = R::find('products', " where `type` = 'smart' ORDER BY `price` DESC "); break;

	
    }};

	if ($color){
        
    switch ($sort){
            
        case nameasc:
            $prods = R::find('products', "`color` LIKE ? and `type` = 'smart' ORDER BY `name` ASC", array($color)); break;
            
        case namedesc:
            $prods = R::find('products', "`color` LIKE ? and `type` = 'smart' ORDER BY `name` DESC", array($color)); break;
            
            case priceasc:
            $prods = R::find('products', "`color` LIKE ? and `type` = 'smart' ORDER BY `price` ASC", array($color)); break;
            
        case pricedesc:
            $prods = R::find('products', "`color` LIKE ? and `type` = 'smart' ORDER BY `price` DESC", array($color)); break;
		
            
    }
    };
	
	
	if ($price){
        
    switch ($sort){
            
        case nameasc:
            $prods = R::find('products', "`price` LIKE ? and `type` = 'smart' ORDER BY `name` ASC", array($price)); break;
            
        case namedesc:
            $prods = R::find('products', "`price` LIKE ? and `type` = 'smart' ORDER BY `name` DESC", array($price)); break;
            
            case priceasc:
            $prods = R::find('products', "`price` LIKE ? and `type` = 'smart' ORDER BY `price` ASC", array($price)); break;
            
        case pricedesc:
            $prods = R::find('products', "`price` LIKE ? and `type` = 'smart' ORDER BY `price` DESC", array($price)); break;
		
            
    }
    };



	?>
    

	    <?php foreach ($prods as $prod){ ?>
		
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
							<div class="agile_ecommerce_tab_left mobiles_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="<?php echo  $prod->image ?>" alt=" " class="img-responsive" />
									<img src="<?php echo  $prod->image ?>" alt=" " class="img-responsive" />
									<img src="<?php echo  $prod->image ?>" alt=" " class="img-responsive" />
									<img src="<?php echo  $prod->image ?>" alt=" " class="img-responsive" />
									<img src="<?php echo  $prod->image ?>" alt=" " class="img-responsive" />
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
										<button type="submit" id="<?php echo $prod->id ?>"  class="w3ls-cart">В корзину</button>
									</form>
									</div>
								<div class="mobiles_grid_pos">
									<h6>Новинки</h6>
								</div>
							</div>
						</div><?php } ?>
						
	

	
	
	
	
	
	
	
	
  