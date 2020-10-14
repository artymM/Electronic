<?php
 require "login.php";


 

   $data = $_POST;
    

   
   
   if(isset($_SESSION['logged_user'])){
     echo '<script>location.replace("../zak.php")</script>';

   }else{
	 
	 echo '<script>alert("Пожалуйста, войдите в свой профиль или зарегистрируйтесь!")</script>';
	    echo '<script>location.replace("../carzine.php")</script>';
 } ;
	 
	 
 


    
?>