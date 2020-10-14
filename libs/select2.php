<?php

    require "DB.php";
	$sew=$_POST;
$d=$sew['select'];


	$select= $_POST['country1'];
	
	
	
	switch ($select){
    
	
        case obr:
            $status = "В Обработке"; break;
            
        case perd:
             $status= "Передан Курьеру"; break;
            
            case doc:
            $status = "Доставлен"; break;
            
        case otm:
             $status= "Отменён"; break;
		
           
			 
    };
		
	

    $ord = R::load('orders',$d);
        $ord->stastus =  $status;
 
        
	
    R::store($ord);
	
	
        
    echo '<script>location.replace("../material-pro/material/table-basic.php")</script>'; 
		
?>
					
