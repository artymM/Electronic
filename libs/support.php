<?php

    require "DB.php";

    $support = $_POST;
    $ip = $_SERVER['REMOTE_ADDR'];
    $sups = R::findOne('support', "`ip` = ? ORDER BY `id` DESC", array($ip));
    $diff = time() - $sups['time'];

    if( isset($support['sup_button']) ){
        if ( R::count('support', "`ip` = '$ip' and '$diff' < 3600") > 0 )
        {
            echo '<script>alert ("Обращаться в техподдержку можно не чаще одного раза в час!")</script>';
        } else
        {
            $sup = R::dispense('support');
                $sup->sup_name = $support['sup_name'];
                $sup->sup_email = $support['sup_email'];
				 $sup->sup_phone = $support['sup_phone'];
                $sup->sup_message = $support['sup_message'];
                $sup->ip = $ip;
                $sup->date = date(d.m.y);
                $sup->time = time();
            R::store($sup);
        
            echo '<script>alert ("Заявка принята! Ожидайте ответ")</script>';
        }
        
        echo '<script>location.replace("../mail.php")</script>';
    }
?>