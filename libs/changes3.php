<?php
    require "RB.php";

    R::setup( 'mysql:host=localhost;dbname=magaz',
        'root', '' );

   $datacont = $_POST['u'];
    

   


 
 
 $users = R::findAll('users');

 if (isset($datacont)){
     $deleted = R::load('users', $datacont);
     R::trash($deleted);
 }
    echo '<script>location.replace("../material-pro/material/table-basic.php")</script>';
?>