
<?php

    require_once "libs/DB.php";

    $data = $_POST;

    if( isset($data['reg']) )
    {
        if( $data['password2'] != $data['password'] )
        {
            echo '<script>alert ("Повторный пароль введен неверно!")</script>';
        }else
        {
            $user = R::dispense('users');
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->pass = password_hash($data['password'], PASSWORD_DEFAULT);
        R::store($user);
            echo '<script>alert ("Вы успешно зарегистрированы!")</script>';
            
        }
        
    }
?>