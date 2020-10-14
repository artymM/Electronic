<?php
    require "RB.php";

    R::setup( 'mysql:host=localhost;dbname=magaz',
        'root', '' );

   $data = $_POST;
    $contact = R::findAll('contacts');
	foreach($contact as $contacts){ 
   $id = ($contacts->id);
   if (isset($data[$id])){
    
	    echo '<script>location.replace("../material-pro/material/form-layout3.php")</script>'; 
     
	}}
 ?>