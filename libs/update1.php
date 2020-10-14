<?php
    require "RB.php";

    R::setup( 'mysql:host=localhost;dbname=magaz',
        'root', '' );

   $datacont = $_POST;
   $select= $datacont['select'];
	
	
	
	switch ($select){
    
	
        case smart:
            $categ = "Смартфоны"; break;
            
        case note:
             $categ= "Ноутбуки"; break;
            
            case aud:
            $categ = "Аудио"; break;
            
        case pro:
             $categ= "Прочее"; break;
		
           
			 
    };
     $tovary = R::findAll('products');
   
   
	
	
	foreach($tovary as $tovars){  

$id = ($tovars->id);
$del = R::load('products', $id);
 if (isset($datacont[$id])){
    $del->image=$datacont['image'];
	    $del->image2=$datacont['image2'];
	$del->name=$datacont['name'];
	$del->prod_cat=$categ;
		$del->color=$datacont['color'];
			$del->old_price=$datacont['old_price'];
				$del->price=$datacont['price'];
	              $del->type = $datacont['type'];
			  $del->title = $datacont['xar1'];
			   $del->title1 = $datacont['xar2'];
				  $del->title2 = $datacont['xar3'];
				   $del->title3 = $datacont['xar4'];
					  $del->title4 = $datacont['xar5'];
					    $del->about = $datacont['about'];
	R::store($del);
   
   
   
   
   
   
   
   
   

	}
	
		
	
	
	};
	 echo '<script>location.replace("../material-pro/material/table-layout.php")</script>';
	
	
	
  


    
?>