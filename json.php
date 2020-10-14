
<?php
require "libs/RB.php";

    R::setup( 'mysql:host=localhost;dbname=magaz',
        'root', '' );


   



$user = "<script>document.write(localStorage.getItem('w3lssbmincart'));</script>";
$arr1 = str_split($user);


    if( isset($arr1) ){
     $arr1 = R::dispense('cart');
            $arr1 ->value = $arr1 ;
          
        R::store($arr1 );
    }
$convertedText = mb_convert_encoding($user, 'utf-8', mb_detect_encoding($user));

foreach ($arr1 as $a){
	
	echo $a ;
}


	?>
