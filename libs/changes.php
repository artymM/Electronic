<?php
    require "RB.php";

    R::setup( 'mysql:host=localhost;dbname=magaz',
        'root', '' );

   $datacont = $_POST;
   $d=$datacont['select'];


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
		
	
    

    if( isset($datacont['change']) ){
    $contacts = R::FindOne('contacts');
        $contacts->phone = $datacont['phone'];
        $contacts->fax = $datacont['fax'];
        $contacts->site = $datacont['site'];
    R::store($contacts);
	   echo '<script>location.replace("../material-pro/material/index.php")</script>';
        
    };


    if (isset($datacont['add'])){
        $tovar = R::dispense('products');
            $tovar->image = $datacont['image'];
		      $tovar->image2 = $datacont['image2'];
            $tovar->name = $datacont['name'];
            $tovar->old_price = $datacont['old_price'];
            $tovar->price = $datacont['price'];
            $tovar->type = $datacont['type'];
			 $tovar->prod_cat =$categ;
			 	  $tovar->color = $datacont['color'];
			  $tovar->title = $datacont['xar1'];
			    $tovar->title1 = $datacont['xar2'];
				  $tovar->title2 = $datacont['xar3'];
				    $tovar->title3 = $datacont['xar4'];
					  $tovar->title4 = $datacont['xar5'];
					    $tovar->about = $datacont['about'];
						
        R::store($tovar);
           echo '<script>location.replace("../material-pro/material/index.php")</script>';
    };
 
$tovary = R::findAll('products');
foreach($tovary as $tovar){  

$id = ($tovar->id);
 if (isset($datacont[$id])){
     $deleted = R::load('products', $id);
     R::trash($deleted);
	  echo '<script>location.replace("../material-pro/material/table-layout.php")</script>';
 }};
 
 
 
 


?>