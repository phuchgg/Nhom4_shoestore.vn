<?php
    session_start();// để sử dụng $_SESSION[''];
    ob_start(); //cache lại để sử dụng hàm hearder('location:....');
    require('library/db.php');
    require('library/connect_db.php');
    include('library/changechar.php');
?>
<?php
    $demsp=0;
    if(isset($_SESSION['cart'])&&$_SESSION['cart']!=null)
    {
        foreach ($_SESSION['cart'] as $k) {
            # code...
            $demsp+=1;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shoestore.vn</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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

    <!-- css page chitietSP -->
    <link rel="stylesheet" type="text/css" href="public/css/styleImageZoom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="public/css/search.css">
   <script src="public/js/jquery-3.3.1.min.js" type="text/javascript" charset="utf-8"></script>
   <script type="text/javascript" src="public/js/search.js"></script>
   <script type="text/javascript" src="public/js/imagezoom.js"></script>
   <link rel="stylesheet" type="text/css" href="public/css/thanhtoan.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <?php 
        include_once("library/fblive_chat.php");
    ?>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.0&appId=1912967308968186&autoLogAppEvents=1';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="#"><i class="fa fa-user"></i> Tài Khoản</a></li>
                            <!-- <li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li> -->
                            
                            <li><?php 
                                    if (isset($_SESSION['user_name'])) echo '<a href="?mod=thongtinKH"><i class="fa fa-user"></i> '.$_SESSION['user_name'].'</a>'; else {
                                        echo '<a href="?mod=register"><i class="fa fa-user"></i>Đăng kí</a>';
                                    }              
                                ?>
                            </li>
                            <li class="last">
                            <?php
                                if(isset($_SESSION['user_id']))
                                    echo '<a href="?mod=logout"><i class="fa fa-user"></i>Đăng xuất</a>';
                                else
                                    echo '<a href="?mod=login"><i class="fa fa-user"></i>Đăng nhập</a>';
                            ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="index.html"><img width="200px" src="Public/img/logoshop1.png" alt=""></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="index.php?mod=cart">Giỏ Hàng<span class="cart-amunt"></span> <i class="fa fa-shopping-cart"></i> <span class="product-count"><?php echo $demsp ?></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
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
                        <li><a href="?mod=home">Trang Chủ</a></li>
                        <li><a href="?mod=shop">Sản Phẩm</a></li>
                        <li><a href="?mod=cart">Giỏ Hàng</a></li>
                        
                        <!-- <li><a href="#">Category</a></li> -->
                        <!-- <li><a href="#">Others</a></li> -->
                        <li><a href="?mod=lienhe">Liên Hệ</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
    
    
    <div class="main_content">
        <?php
                $mod=@$_GET['mod'];
                $mod=preg_replace('/[^A-z_]/','',$mod);
                if($mod=="") $mod='home';
                if(is_file("frontEnd/module/{$mod}.php"))
                  include("frontEnd/module/{$mod}.php");
                else
                    echo "Trang này không tồn tại!";
        ?>
    </div>

    
    
    <div class="footer-top-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2><span>SHOESTORE</span></h2>
                        <p>Mua hàng trực tuyến (mua hàng online) mang lại sự tiện lợi, lựa chọn đa dạng hơn và các dịch vụ tốt hơn cho người tiêu dùng, tại SHOESTORE bạn có thể mua đồ giá rẻ với rất nhiều các chương trình khuyến mãi hàng tháng. Bây giờ bạn có thể trải nghiệm mua hàng online thỏa thích mà SHOESTORE mang lại chỉ với 1 click chuột. 
                        </p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                
                   <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Khách Hàng </h2>
                        <ul>
                            <li><a href="#">Tài Khoản</a></li>
                            <li><a href="#">Lịch Sử Mua Hàng</a></li>
                            <li><a href="#">Danh Sách Mong Muốn</a></li>
                            <li><a href="#">Liên Hệ</a></li>
                            <li><a href="#">Trang Đầu</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Danh Mục</h2>
                        <ul>
                            <li><a href="#">Nike</a></li>
                            <li><a href="#">Adidas</a></li>
                            <li><a href="#">Puma</a></li>
                            <li><a href="#">Bitis</a></li>                           
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Tin Thông Báo</h2>
                        <p>Đăng ký nhận tin của chúng tôi và nhận các ưu đãi độc quyền mà bạn sẽ không tìm thấy ở bất kỳ nơi nào khác. Hãy đăng kí ngay!</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Nhập email của bạn">
                                <input type="submit" value="Đăng kí">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2018 ShoeStore.vn . All Rights Reserved.
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
   
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="Public/js/owl.carousel.min.js"></script>
    <script src="Public/js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="Public/js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="Public/js/main.js"></script>
<script
  src="https://code.jquery.com/jquery-1.12.4.js"
  integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="1.css">
  <script src="1.js"></script>
  <script
  src="https://code.jquery.com/jquery-1.12.4.js"
  integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
  crossorigin="anonymous"></script>
  </body>
</html>