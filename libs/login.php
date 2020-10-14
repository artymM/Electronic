<?php
    require_once"DB.php";

    $data = $_POST;
    if ( isset($data['sign']) )
    {     
        $user = R::FindOne('users', 'name = ?', array($data['name']));
        if ( $user )
        {
            if( password_verify($data['pass'], $user->pass) )
            {
                session_start();
                $_SESSION['logged_user'] = $user['name'];
                $_SESSION['admin'] = $user['admin'];
                   $_SESSION['pass'] = $user['pass'];
                echo '<script>alert ("Вы авторизованы!")</script>';
                //('Location: index.php');
            } else
            {
                echo '<script>alert ("Неверный пароль!")</script>';
            }
        } else
        {
			
            echo '<script>alert ("Пользователь не найден!")</script>';
        }
		     echo "<script>sessionStorage.setItem('auth', 'true')</script>";
    }
?>