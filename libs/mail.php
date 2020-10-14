<?php

    require "DB.php";

    $mail = $_POST;
    $subs = R::findAll('subscribes');

    if( isset($subscribe['subscribe']) ){
        if ( R::count('subscribes', "sub_email = ?", array($subscribe['sub_email'])) > 0)
        {
            echo '<script>alert ("Вы уже подписаны!")</script>';
        } else
        {
            $sub = R::dispense('mail');
                $sub->name = $mail['name'];
				   $sub->email = $mail['email'];
				     $sub->phone = $mail['phone'];
					    $sub->text= $mail['text'];
					 
            R::store($sub);
        
            echo '<script>alert ("Вы подписались на новостную рассылку!")</script>';
        }
        
        echo '<script>history.back()</script>';
    }
?>