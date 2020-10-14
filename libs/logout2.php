<html>
<head>
<script src="../js/jquery.min.js"></script>
</head>
<?php

?>
</html>
<?php
     
    session_start();
    session_destroy();
	 echo '<script>alert("Производиться выход из Панели администратора!")</script>';
    header('Location: ../index.php')
?>