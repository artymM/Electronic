<?php

    require "RB.php";

    R::setup( 'mysql:host=localhost;dbname=magaz',
        'root', '' );


    $admin = $_POST['admin'];
    $uid = $_POST['uid'];

    
    $user = R::load('users', $uid);
    $user->admin = $admin;
    R::store($user);
?>