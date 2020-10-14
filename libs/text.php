<?php

require "RB.php";

    R::setup( 'mysql:host=localhost;dbname=magaz',
        'root', '' );

  if ($_POST){
    $id = $_POST['prod'];
	
	
        $prodd = R::load('products', $id);
		$tovar = R::dispense('zakzas');
            $tovar->image = $prodd->image;
            $tovar->name = $prodd->name;
		$tovar->price = $prodd->price;
		R::store($tovar);
	
  };
	
	











?>