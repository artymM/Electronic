<?php
    require "../../libs/DB.php";
    $tovary = R::findAll('products');
    $users=R::findAll('users', "ORDER BY `id` DESC LIMIT 4");
$supports=R::findAll('support', "ORDER BY `id` DESC LIMIT 4");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
     <title>Администаторская панель Магазина Электроник</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <link href="../assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/plugins/switchery/dist/switchery.min.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
               <div class="navbar-header">
                    <a class="navbar-brandв" href="index.php">
                        <!-- Logo icon -
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="../assets/images/lo5go-text.png" style="
    height: 78px;
    width: 324px;
" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->    
                        </span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <!-- ============================================================== -->
                      
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        
                                
                            
                       
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                         <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox scale-up">
                                <ul>
                                    <li>
                                        <div class="drop-title">Уведомления</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                         
                                            <!-- Message -->
                                           
                                            <?php foreach($users as $user) { ?>
                                            <a href="table-basic.php">
                                                <div class="btn btn-info btn-circle"><i class="ti-plus"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Добавлен новый пользователь №<?php echo $user->id ?></h5> <span class="mail-desc"><h6><b><?php echo $user->name?> </b></h6></div>
                                            </a>
											<?php } ?>
                                           
                                        </div>
                                    </li>
                                   
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-email"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu mailbox dropdown-menu-right scale-up" aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">У вас новых 4 сообщения</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                              <?php foreach($supports as $support) { ?>
											 <?php $time=($support->time); 
											 $y=($support->sup_message);
											 $rest = substr($y, 0, 39);
											 ?>
                                            <a href="table-data-table.php">
                                                <div class="user-img"> <img src="../assets/images/users/1.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Новое сообщение от пользователя <em><?php echo $support->sup_name?></em></h5> <h5>Дата: <?php echo date('d.m.Y',$time);?><br> Время : <?php echo date('H:i:s',$time); ?></h5><span class="mail-desc"><h5>Сообщение :</h5><h6><b><?php echo  $rest ?>...</b></h6></span>  </div>
                                            </a>
                                         <?php } ?>
                                            <!-- Message -->
                                          
                                            <!-- Message -->
                                           
                                        </div>
                                    </li>
                                   
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                       
                        <!-- ============================================================== -->
                        <!-- Language -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="flag-icon flag-icon-ru"></i></a>
                       
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile" style="background: url(../assets/images/background/user-info.jpg) no-repeat;">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="../assets/images/users/profile.png" alt="user" /> </div>
                    <!-- User profile text-->
                    <div class="profile-text"> <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><?php echo $_SESSION['logged_user']; ?></a>
                      
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">Панель Управления</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Панель Админа</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="index.php">Главная страница</a></li>
                       

                            </ul>
                        </li>
                 
                       
                  
                      
                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">Формы,Таблицы </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Формы</span></a>
                            <ul aria-expanded="false" class="collapse">
                               
                                <li><a href="form-layout.php">Товары</a></li>
							
                               
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Таблицы</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="table-basic.php">Пользователи</a></li>
                                <li><a href="table-layout.php">Товары</a></li>
								    <li><a href="table-basic2.php">Подписки</a></li>
									<li><a href="table-layout3.php">Контакты</a></li>
										<li><a href="table-data-table.php">Техподдержка</a></li>
                                
                            </ul>
                        </li>
                        
                        
                        
                         
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">

                <!-- item--><a href="../../libs/logout2.php" class="link" data-toggle="tooltip" title="Выход"><i class="mdi mdi-power"></i></a> </div>
            <!-- End Bottom points-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
             
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Формы</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Домой</a></li>
                            <li class="breadcrumb-item active">Форма Добавление Товара</li>
                        </ol>
                    </div>
               
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Форма добавление товара</h4>
                            </div>
                            <div class="card-body">
                                <form action="../../libs/changes.php" method="POST" class="form-horizontal">
                                    <div class="form-body">
                                        <h3 class="box-title">Добавить товар</h3>
                                        <hr class="m-t-0 m-b-40">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
												
                                                    <label class="control-label text-right col-md-3"> Изображение</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" name="image" placeholder="Картинка">
                                                        <small class="form-control-feedback"> Путь относительно  корневого каталога </small> 
														</div>
														
														 <label class="control-label text-right col-md-3" style="
    margin-top: 22px;
"> Изображение для корзины</label>
                                                    <div class="col-md-9" style="
    /* margin-bottom: 13px; */
    margin-top: 22px;
">
                                                        <input type="text" class="form-control" name="image2" placeholder="Картинка">
                                                        <small class="form-control-feedback">Формат png </small> 
														</div>
                                                </div>
												
                                            </div>
											
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group  row">
                                                    <label class="control-label text-right col-md-3">Название</label>
                                                    <div class="col-md-9">
                                                        <input type="text"  name="name" class="form-control " placeholder="Название">
                                                        <small class="form-control-feedback"> Не более 30 символов</small> </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                  <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Старая цена</label>
                                                    <div class="col-md-9">
                                                        <input  type="number"  class="form-control" name="old_price" placeholder="Цена">
                                                        <small class="form-control-feedback"> Не более 20 символов </small> </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                               <div class="form-group row" style="
    margin-top: -73px;
">
                                                    <label class="control-label text-right col-md-3">Цена со Скидкой</label>
                                                    <div class="col-md-9">
                                                        <input  type="number"  class="form-control" name="price" placeholder="Цена">
                                                        <small class="form-control-feedback">Не более 20 символов </small> </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                        
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row" style="/* margin-top: 29px; */margin-right: -75px;margin-bottom: 42px;">
                                                    <label class="control-label text-right col-md-3">Расположение </label>
                                                    <div class="col-md-9">
                                                        <div class="radio-list">
                                                            <label class="custom-control custom-radio">
                                                                <input type="radio" name="type" value="smart" required  class="custom-control-input">
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description">Товары-1</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input input type="radio" name="type" value="other" required class="custom-control-input">
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description">Товары-2</span>
                                                            </label>
																   <label class="custom-control custom-radio">
                                                                <input input type="radio" name="type" value="index"  required class="custom-control-input">
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description">Главная</span>
												
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
											   <div class="col-md-6">
                                               <div class="form-group row" style="
    margin-top: -81px;
">
                                                    <label class="control-label text-right col-md-3">Категория</label>
                                                    <div class="col-md-9">
                                                         
									    <select id="select" name="select" class="select2" style="width: 100%">
                                    <h5 class="m-t-30">Single select2</h5>
                                     <option value="smart" >Смартфоны</option> 
				        <option value="note" >Ноутбуки</option>
								<option value="aud">Аудио</option>
								<option value="pro" >Прочее</option>
                                   
									 </select></div>
                                                </div>
                                            </div>
											   <div class="col-md-6">
                                               <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Цвет</label>
                                                    <div class="col-md-9">
                                                        <input  type="text"  class="form-control" name="color" placeholder="Цвет">
                                                        <small class="form-control-feedback"> Не более 30 символов </small> </div>
                                                </div>
                                            </div>
											         </div>
											   <div class="row">
											    
													  
											   <div class="col-md-6">
                                               <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Характеристика-1</label>
                                                    <div class="col-md-9">
                                                        <input  type="text"  class="form-control" name="xar1" placeholder="Характеристика товара">
                                                        <small class="form-control-feedback"> Не более 30 символов</small> </div>
                                                </div>
                                            </div>
												  
											   <div class="col-md-6">
                                               <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Характеристика-2</label>
                                                    <div class="col-md-9">
                                                        <input  type="text"  class="form-control" name="xar2" placeholder="Опционально">
                                                        <small class="form-control-feedback"> Не более 30 символов </small> </div>
                                                </div>
                                            </div>
											   <div class="col-md-6">
                                               <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Характеристика-3</label>
                                                    <div class="col-md-9">
                                                        <input  type="text"  class="form-control" name="xar3" placeholder="Опционально">
                                                        <small class="form-control-feedback"> Не более 30 символов </small> </div>
                                                </div>
                                            </div>
											   <div class="col-md-6">
                                               <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Характеристика-4</label>
                                                    <div class="col-md-9">
                                                        <input  type="text"  class="form-control" name="xar4" placeholder="Опционально">
                                                        <small class="form-control-feedback"> Не более 30 символов </small> </div>
                                                </div>
                                            </div>
											   <div class="col-md-6">
                                               <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Характеристика-5</label>
                                                    <div class="col-md-9">
                                                        <input  type="text"  class="form-control" name="xar5" placeholder="Опционально">
                                                        <small class="form-control-feedback"> Не более 30 символов </small> </div>
                                                </div>
                                            </div>
											 <div class="col-md-8">
											<div class="form-group" style=" margin-left: 52px;">

                                     <label class="control-label text-right ">Описание Товара</label>
                                        <textarea class="form-control"  name="about" rows="5"></textarea>
										  <small class="form-control-feedback"> Не более 500 символов </small> </div>
                                    </div>
									 </div>
									
                                            <!--/span-->
                                        </div>
                                        
                                        <!--/row-->
                               
                                     
                                        <!--/row-->
                                        
                                        <!--/row-->
                                    </div>
                                    <hr>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9" style="
    margin-left: 82px;
    margin-top: -49px;
   
">
                                                        <button type="submit" name="add" class="btn btn-success">Добавить</button>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <!-- Row -->
                
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2018 Electronic.ru by Artyom Minakov </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
<script src="../assets/plugins/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="../assets/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
	<script type="text/javascript" src="../assets/plugins/multiselect/js/jquery.multi-select.js"></script>
	<script>
    jQuery(document).ready(function() {
        // Switchery
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        $('.js-switch').each(function() {
            new Switchery($(this)[0], $(this).data());
        });
        // For select 2
        $(".select2").select2();
        $('.selectpicker').selectpicker();
		 $(".ajax").select2({
            ajax: {
                url: "https://api.github.com/search/repositories",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term, // search term
                        page: params.page
                    };
                },
                processResults: function(data, params) {
                    // parse the results into the format expected by Select2
                    // since we are using custom formatting functions we do not need to
                    // alter the remote JSON data, except to indicate that infinite
                    // scrolling can be used
                    params.page = params.page || 1;
                    return {
                        results: data.items,
                        pagination: {
                            more: (params.page * 30) < data.total_count
                        }
                    };
                },
                cache: true
            },
            escapeMarkup: function(markup) {
                return markup;
            }, // let our custom formatter work
            minimumInputLength: 1,
            templateResult: formatRepo, // omitted for brevity, see the source of this page
            templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
        });
    });
			</script>
</body>

</html>
