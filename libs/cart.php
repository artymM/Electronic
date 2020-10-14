<?
require "RB.php";

    R::setup( 'mysql:host=localhost;dbname=magaz',
        'root', '' );

   $data = $_POST;
   
    if( isset($data['cart']) ){
     $cart = R::dispense('zakaz');

            $cart ->item = $data['name'];
            $cart ->price = $data['price'];
            $cart ->kolvo = $data['kolva'];
        R::store($cart);
    }

?>