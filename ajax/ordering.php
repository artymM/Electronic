<?php

    require "../libs/DB.php";
	
$sew=$_POST;
 if (isset($sew[$id])){
			     echo '<script>location.replace("../material-pro/material/table-basic3.php")</script>';
		 };

    $user = $_SESSION['logged_user'];
	$select= $_POST['country1'];
	$delevery= $_POST['country2'];
    $ord_name = $_POST['ord_name'];
    $ord_phone = $_POST['ord_phone'];
    $ord_addr = $_POST['ord_addr'];
    $prods = implode (',', $_POST['prods']);
    $counts = implode (', ', $_POST['counts']);
    $cost = $_POST['cost'];
	$status="В Обработке";
	
	switch ($select){
    
	
        case nal:
            $opl = "Наличные"; break;
            
        case pal:
            $opl = "Paypal"; break;
            
            case mas:
            $opl = "MasterCard"; break;
            
        case web:
            $opl = "Webmoney"; break;
		
           
			 
    };
		switch ($delevery){
    
	
        case sam:
            $dostavka = "Самовывоз"; break;
            
        case rus:
            $dostavka = "Rus5+"; break;
            
            case rusk:
            $dostavka = "Russian.Kyr"; break;
            
        case pol:
            $dostavka = "Pol+"; break;
		
           
			 
    };
	

    $ord = R::dispense('orders');
        $ord->user = $user;
        $ord->ord_name = $ord_name;
        $ord->ord_phone = $ord_phone;
        $ord->ord_addr = $ord_addr;
		$ord->oplata = $opl;
		$ord->dostavka = $dostavka;
        $ord->prods = $prods;
        $ord->counts = $counts;
        $ord->cost = $cost;
		$ord->stastus = $status;
	


  
			         
	
    R::store($ord);
	
	
          '<script>alert("Заказ оформлен! Ожидайте доставки")</script>';
 
		
		
?>
					
