<?php
    require "RB.php";

    R::setup( 'mysql:host=localhost;dbname=magaz',
        'root', '' );

   $datacont = $_POST;
   
 $users = R::findAll('users');
	foreach($users as $user){  
$id = ($user->id);
 $del = R::load('users', $id);
	
 if (isset($datacont[$id])){
    $del->name=$datacont['name'];
	$del->email=$datacont['email'];

	$del->pass= password_hash($datacont['pass'], PASSWORD_DEFAULT);
	R::store($del);
	}
	
		
	
	
	}
	;
	 echo '<script>location.replace("../material-pro/material/table-basic.php")</script>';
	
	
	
  


    
?>