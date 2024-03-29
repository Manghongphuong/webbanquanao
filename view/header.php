<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Trang chủ | Shopfashion</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <link href="../css/bill.css" rel="stylesheet">
    <!-- <link href="../css/donhang.css" rel="stylesheet"> -->
    <style>
        body{
            color: black;
        }
    </style>
</head>
<!--/head-->
<body>
    <header id="header">
        <!--header-->
        <div class="header_top">
            <!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +84 002 200 654</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> shopfashion@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header_top-->
        <div class="header-middle">
            <!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="index.php"><img src="images/logo3.png" alt="" /></a> 
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="mainmenu pull-right">
                            <ul class="nav navbar-nav collapse navbar-collapse" style="margin-top: 10px;">
                            <?php
                            // Echo '<pre>';
                            // Print_r($_SESSION['user']);
                            // Echo '</pre>'; 
                            if (isset($_SESSION['user'])){?>
                                <li class="dropdown"><a href="#"><i class="fa fa-user"></i> <?php echo $_SESSION['user']['username']?><i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <?php if($_SESSION['user']['role_id']==1){ ?>
                                            <li><a href="admin1/index.php">Quản trị viên</a></li>
                                        <?php } ?>
                                        <li><a href="index.php?act=donhang">Đơn hàng của tôi</a></li>
                                        <li><a href="index.php?act=dangxuat">Đăng xuất </a></li>
                                    </ul>
                                </li>
                            <?php } else {?>
                                <li class="dropdown"><a href="#"><i class="fa fa-user"></i> Tài khoản<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="index.php?act=dangky"><i class="fa fa-lock"></i> Đăng ký</a></li>
                                        <li><a href="index.php?act=dangnhap"><i class="fa fa-lock"></i> Đăng nhập</a></li>
                                    </ul>
                                </li>
                            <?php } ?>
                                <li><a href="checkout.php"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                                <li><a href="index.php?act=addcart"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-middle-->

        <div class="header-bottom">
            <!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="index.php" class="active">Trang chủ</a></li>
                                <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="index.php?act=shop">Các sản phẩm</a></li>
                                        <li><a href="index.php?act=muangay">Thanh toán</a></li>
                                        <li><a href="index.php?act=addcart">Giỏ hàng</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="index.php?act=tintuc">Tin tức</a></li>
                                <li><a href="index.php?act=lienhe">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <style>
                        .search_bar form input {
                            height: 48px;
                            /* line-height: 50px; */
                            padding: 0px 70px 0 20px !important;
                            width: 100%;
                            background: transparent;
                            color: #a4a4a4;
                            border-radius: 2px red;
                        }
                        .search_bar form button {
                            background: inherit;
                            position: absolute;
                            right: 0;
                            height: 100%;
                            top: 0;
                            border: 0;
                            font-size: 22px;
                            width: 50px;
                            cursor: pointer;
                            -webkit-transition: 0.3s;
                            transition: 0.3s;
                            padding-right: 10%;
                        }
                        .search_bar form button:hover {
                            color: #ff6a28;
                        }
                    </style>
                    <div class="col-lg-3">
                        <div class="search_bar">
                            <form action="index.php?act=danhmuc" method="post">
                                <input placeholder="Tìm mọi thứ ở đây..." type="text" name="timkiem">
                                <button type="submit" name="tim"><i class="fa fa-search"></i></button> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-bottom-->
    </header>
    <!--/header-->