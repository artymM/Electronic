<?
require_once"libs/DB.php";

   $Serch = $_POST;

  $p = R::getAll( 'SELECT * FROM products' );

 if( isset($Serch['search']) ){
	 $pages = R::find('products',' name = ? ', 
                array($p));
 


 var_dump($pages);
 foreach ($pages as $page){
	 echo 'Name:  '.$page->name . '<br>';
 }
 }
?>