<?php

    require "DB.php";

    $subscribe = $_POST;
    $subs = R::findAll('subscribes');

    if( isset($subscribe['subscribe']) ){
        if ( R::count('subscribes', "sub_email = ?", array($subscribe['sub_email'])) > 0)
        {
            echo '<script>alert ("Вы уже подписаны!")</script>';
        } else
        {
            $sub = R::dispense('subscribes');
                $sub->sub_email = $subscribe['sub_email'];
            R::store($sub);
        
            echo '<script>alert ("Вы подписались на новостную рассылку!")</script>';
        }
        
        echo '<script>history.back()</script>';
    }
?>