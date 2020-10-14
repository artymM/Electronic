<?php
    require "libs/DB.php";
    $tovary = R::findAll('products');
    if ($_SESSION['admin'] == 1)
    {
        // Отрисовка страницы 
    }else
    {
        echo '<script>alert ("Вы не являетесь администратором!")</script>';
        echo '<script>location.replace("index.php")</script>';
    }
    echo '<script>alert ("Добро пожаловать в панель администратора!")</script>';

?>

<?php
    $contdata = R::FindOne('contacts');
?>

<html>
    <head>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
    </head>
    
    <body>
	<title>Панель Администратора</title>
	<div class="admin-panel">

	
	<div class="newsletterr">
		
  <div class="row">
			
    
    <div class="col-md-3 w3_footer_grid">
                <h3 class="qwe"> Панель Администратора</h3>
			
			
		
				
        <form action="libs/changes.php" method="POST">
            Телефон <br> <input type="text" name="phone" value="8(695)33-66-223"><hr>
            Факс <br> <input type="text" name="fax" value="8(695)33-66-223"><hr>
            Сайт <br> <input type="text" name="site" value="magazElectro.com"><hr>
			<div class="sign-up">
													
		<button type="submit" class="btn btn-primary btn-lg" data-toggle="button" aria-pressed="false" autocomplete="off" name="change">
Изменить
</button>
            </div>
        </form>
		<div class="glav">
		<a href="index.php"><h3 class="qwe">Главная</h3></a>
        </div>
        
        <div class="col-md-6">
            
        </div>
        
        
        
		  </div>
               <form action="libs/changes.php" method="POST">
			   <div class="table-admin1">
			   <table class="table5" style="
    width: 69%;
    max-width: 100%;
    margin-bottom: 21px;">
               <table>
               <?php foreach ($tovary as $tovar){ ?>
               <tr>
                   <td><span><?php echo $tovar->name ?></span></td><td><input type="submit" name="<?php echo $tovar->id ?>" value="Удалить"></td>
                <?php } ?>
                </table>
				</div>
				</div>
            </form>
               
               <div class="col-md-3_w3_footer_grid" style="float: right;margin-top: -458px; margin-right: 757px;">
                <h3 class="qw">Добавить товар</h3>
			
				
        <form action="libs/changes.php" method="POST">
            Изображение <br> <input type="text" name="image"><hr>
            Название <br> <input type="text" name="name" required><hr>
            Старая цена <br> <input type="number" name="old_price"><hr>
            Цена <br> <input type="number" name="price" required><hr>
            Категория <br> Smart<input type="radio" name="type" value="smart" required> Other<input type="radio" name="type" value="other" required><hr>
            <input type="submit" name="add" value="Добавить" class="btn btn-primary btn-lg" data-toggle="button" aria-pressed="false" autocomplete="off">
			<div class="sign-up">
            </div>
        </form>
		<div class="glav">
		<a href="index.php"><h3 class="qwe">Главная</h3></a>
        </div>
		  </div>
		        </div>
				
				 
				  </div>
				</div>
    </body>
    
</html>