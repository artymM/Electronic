<?php
    require "RB.php";

    R::setup( 'mysql:host=localhost;dbname=magaz',
        'root', '' );

         
	


	   
	if ($_POST){
    $ids = $_POST['prods'];
	 foreach ($ids as $id){	   
	 $prod = R::load('products', $id);
echo $prod->name; 
        
    if (isset($datacont['sub'])){
        $tovarf = R::dispense('zakzas');
		$tovarf = R::load('zakzas', $id); 
            $tovarf->phone = $datacont['phone'];
            $tovarf->name = $datacont['name'];
            $tovarf->email = $datacont['email'];
             $tovarf->adress = $datacont['adr'];
		
        R::store($tovarf);
		
	}}};
   
   
   ?>