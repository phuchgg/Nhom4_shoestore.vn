<?php
    session_start();// để sử dụng $_SESSION[''];
    ob_start(); //cache lại để sử dụng hàm hearder('location:....');
    require('library/db.php');
    include('library/changechar.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="http://localhost/nhom4_shoestore.vn/" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shoestore.vn</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="public/css/owl.carousel.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/responsive.css">
    <link rel="stylesheet" href="public/css/style.back.css">
    <script src="public/js/jquery-3.3.1.min.js" type="text/javascript" charset="utf-8"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><?php 
                                    if (isset($_SESSION['admin_name'])) echo $_SESSION['admin_name'];               
                                ?>
                            </li>
                            <li class="last">
                            <?php
                                if(isset($_SESSION['admin_id']))
                                    echo '<a href="?mod=logout"><i class="fa fa-user"></i>Đăng xuất</a>';
                                else
                                    echo '<a href="staff/login/"><i class="fa fa-user"></i>Đăng nhập</a>';
                            ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="staff/pro/">Sản Phẩm</a></li>
                        <li><a href="staff/cat/">Loại Sản Phẩm</a></li>
                        <li><a href="staff/cus/">Khách Hàng</a></li>
                        <li><a href="staff/bill/">Đơn Hàng</a></li>
                        <li><a href="staff/thongke/">Thống kê</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
    
    
    <div class="main_content">
        <?php
            if(!isset($_SESSION['admin_id']))
                include("backEnd/module/login.php");
            else{
                $mod=@$_GET['mod'];
                $mod=preg_replace('/[^A-z_]/','',$mod);
                if($mod=="") $mod='pro';
                if(is_file("backEnd/module/{$mod}.php"))
                  include("backEnd/module/{$mod}.php");
                else
                    include("public/errorPage/404.html");
            }
        ?>
    </div>
    <div class="copyright" align="center">
        <img src="public/img/logoshop2.png" alt="">
        <p>
            Trang Chủ | Sản Phẩm | Liên Hệ<br>
            <span>&copy; 2018 ShoeStore.vn . All Rights Reserved.</span>
        </p>
    </div>
   
   
    <!-- Latest jQuery form server -->
    <script src="public/js/jquery-3.3.1.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="public/js/owl.carousel.min.js"></script>
    <script src="public/js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="public/js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="public/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </body>
</html>