<?php
    require "RB.php";

    R::setup( 'mysql:host=localhost;dbname=magaz',
        'root', '' );

   $fix = $_POST;
    
   $users = R::findAll('users');
foreach($users as $user){  

$id = ($user->id);
 if (isset($fix[$id])){
     $rull = R::load('products', $id);
	    
   
 }}


   $users = R::findAll('users');
foreach($users as $user){  

$id = ($user->id);
   if (isset($fix[$id])){
    
	    echo '<script>location.replace("../material-pro/material/form-layout2.php")</script>'; 
     
	}};
 
 
 
 
 
   
   
   

   
   

 



?>