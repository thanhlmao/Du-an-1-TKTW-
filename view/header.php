<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/ruiz/ruiz/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Nov 2023 08:36:24 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dự án 1</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico"> -->

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/vendor/simple-line-icons.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins/animation.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/plugins/animation.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/fancy-box.css">
    <link rel="stylesheet" href="assets/css/plugins/jqueryui.min.css">

    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe) -->
    <!--
    <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>
    -->

    <!-- Main Style CSS (Please use minify version for better website load performance) -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--<link rel="stylesheet" href="assets/css/style.min.css">-->

</head>

<body>

    <div class="main-wrapper">
        
        <!--  Header Start -->
        <header class="header">

            <!-- Header Top Start -->
            <div class="header-top-area d-none d-lg-block text-color-white bg-gren border-bm-1">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="header-top-settings">
                                <ul class="nav align-items-center">
                                    <li class="language">English <i class="fa fa-angle-down"></i>
                                        <ul class="dropdown-list">
                                            <li><a href="#">English</a></li>
                                            <li><a href="#">French</a></li>
                                        </ul>
                                    </li>
                                    <li class="curreny-wrap">Currency <i class="fa fa-angle-down"></i>
                                        <ul class="dropdown-list curreny-list">
                                            <li><a href="#">$ USD</a></li>
                                            <li><a href="#"> € EURO</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="top-info-wrap text-end">
                            <div class="main-menu-area white_text">
                                <nav class="main-navigation text-center" style="margin-left: 400px;">
                                <ul>
                                    <?php
                                    if(isset($_SESSION['user'])){
                                            extract($_SESSION['user']);
                                        ?>
                                            <li><a href="#"><?php echo "Xin chào: " .$user ?><i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <!-- <li><a href="frequently-questions.html">FAQ</a></li> -->
                                                <li><a href="index.php?act=mytk">My Account</a></li>
                                                <li><a href="index.php?act=capnhattk">Cập nhập tài khoản</a></li>
                                                <?php
                                                if($vaitro == 1) { ?>
                                                <li><a href="admin/index.php">Đăng nhập Admin</a></li>
                                                <?php } ?>
                                                <li><a href="index.php?act=dangxuat">Đăng xuất</a></li>
                                            </ul>
                                        </li>
                                        
                                        
                                        <?php
                                        } else {
                                        ?>
                                            <li><a href="#"><?php echo "Tài khoản"?><i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="index.php?act=dangkydangnhap">login &amp; register</a></li>
                                            </ul>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                    
                                </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Header Top End -->

            <!-- haeader Mid Start -->
            <div class="haeader-mid-area bg-gren border-bm-1 d-none d-lg-block ">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-4 col-5">
                            <div class="logo-area">
                                <a href="index.php"><img src="assets/images/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="search-box-wrapper">
                                <div class="search-box-inner-wrap">
                                    <form class="search-box-inner" action="index.php?act=sanpham" method="post">
                       
                                        <!-- <input type="text" class="form-control" placeholder="Nhập từ khóa tìm kiếm" name="iptimkiem" />
                                        <input type="submit" name="btntimkiem" value="Tìm kiếm" class="btn btn-primary ms-2">
                                        </div> -->
                                
                                        <div class="search-field-wrap">
                                            <input type="text" class="search-field" placeholder="Search product..." name="iptimkiem">

                                            <div class="search-btn">
                                                <button><i class="icon-magnifier" name="btntimkiem"></i></button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="right-blok-box text-white d-flex">

                                <div class="user-wrap">
                                    <a href="wishlist.html"><span class="cart-total">2</span> <i class="icon-heart"></i></a>
                                </div>

                                <div class="shopping-cart-wrap">
                                    <a href="#"><i class="icon-basket-loaded"></i><span class="cart-total">2</span></a>
                                    <ul class="mini-cart">
                                        <!-- <li class="cart-item">
                                            <div class="cart-image">
                                                <a href="product-details.html"><img alt="" src="assets/images/anh/get.webp"></a>
                                            </div>
                                            <div class="cart-title">
                                                <a href="product-details.html">
                                                    <h4>Product Name 01</h4>
                                                </a>
                                                <div class="quanti-price-wrap">
                                                    <span class="quantity">1 ×</span>
                                                    <div class="price-box"><span class="new-price">2,000,000 VND</span></div>
                                                </div>
                                                <a class="remove_from_cart" href="#"><i class="icon_close"></i></a>
                                            </div>
                                        </li>
                                        <li class="cart-item">
                                            <div class="cart-image">
                                                <a href="product-details.html"><img alt="" src="assets/images/anh/get.png"></a>
                                            </div>
                                            <div class="cart-title">
                                                <a href="product-details.html">
                                                    <h4>Product Name 03</h4>
                                                </a>
                                                <div class="quanti-price-wrap">
                                                    <span class="quantity">1 ×</span>
                                                    <div class="price-box"><span class="new-price">1,000,000 VND</span></div>
                                                </div>
                                                <a class="remove_from_cart" href="#"><i class="icon-trash icons"></i></a>
                                            </div>
                                        </li>
                                        <li class="subtotal-box">
                                            <div class="subtotal-title">
                                                <h3>Sub-Total :</h3><span>$ 260.99</span>
                                            </div>
                                        </li> -->
                                        <li class="mini-cart-btns">
                                            <div class="cart-btns">
                                                <a href="index.php?act=viewcart">Xem giỏ hàng</a>
                                                <a href="index.php?act=bill">Thanh toán</a>
                                                <a href="index.php?act=mybill">Đơn hàng của tôi</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- haeader Mid End -->

            <!-- haeader bottom Start -->
            <div class="haeader-bottom-area bg-gren header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 d-none d-lg-block">
                            <div class="main-menu-area white_text">
                                <!--  Start Mainmenu Nav-->
                                <nav class="main-navigation text-center">
                                    <ul>
                                        <li class="active"><a href="index.php">Trang chủ <i class="fa fa-angle-down"></i></a>
                                            <!-- <ul class="sub-menu">
                                                <li><a href="index.html">Home Page 1</a></li>
                                                <li><a href="index-2.html">Home Page 2</a></li>
                                            </ul> -->
                                        </li>

                                        <li><a href="index.php?act=sanpham">Danh mục <i class="fa fa-angle-down"></i></a>
                                            <ul class="mega-menu">
                                                <li><a href="">Sản phẩm</a>
                                                    <ul>
                                                    <?php foreach ($showlistdm as $dm) {
                                                        extract($dm);
                                                        $linkdm = "index.php?act=sanpham&iddm=" . $id;
                                                        echo ' <li class="list-group-item list-group-item-action" style="border-left: none; border-right: none">
                                                        <a href="' . $linkdm . '" class="cate">' . $namedm . '</a>
                                                        </li>';
                                            }
                                            ?>
                                                    </ul>
                                                </li>
                                                
                                              
                                            </ul>

                                        </li>
                                        <li><a href="index.php?act=tintuc">Tin tức <i class="fa fa-angle-down"></i></a>

                                          
                                        </li>

                                        <!-- <li><a href="#">Tài khoản<i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="frequently-questions.html">FAQ</a></li>
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="index.php?act=dangkydangnhap">login &amp; register</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li><a href="about-us.html">About Us</a></li> -->
                                        <li><a href="index.php?act=lienhe">Liên hệ</a></li>
                                    </ul>
                                </nav>

                            </div>
                        </div>

                        <div class="col-5 col-md-6 d-block d-lg-none">
                            <!-- <div class="logo"><a href="index.html"><img src="assets/images/logo/logo.png" alt=""></a></div> -->
                        </div>
                        
                        
                        <div class="col-lg-3 col-md-6 col-7 d-block d-lg-none">
                            <div class="right-blok-box text-white d-flex">

                                <div class="user-wrap">
                                    <a href="wishlist.html"><span class="cart-total">2</span> <i class="icon-heart"></i></a>
                                </div>

                                <div class="shopping-cart-wrap">
                                    <a href="#"><i class="icon-basket-loaded"></i><span class="cart-total">2</span></a>
                                    <ul class="mini-cart">
                                        <li class="cart-item">
                                            <div class="cart-image">
                                                <a href="product-details.html"><img alt="" src="assets/images/product/product-02.png"></a>
                                            </div>
                                            <div class="cart-title">
                                                <a href="product-details.html">
                                                    <h4>Product Name 01</h4>
                                                </a>
                                                <div class="quanti-price-wrap">
                                                    <span class="quantity">1 ×</span>
                                                    <div class="price-box"><span class="new-price">$130.00</span></div>
                                                </div>
                                                <a class="remove_from_cart" href="#"><i class="fa fa-times"></i></a>
                                            </div>
                                        </li>
                                        <li class="cart-item">
                                            <div class="cart-image">
                                                <a href="product-details.html"><img alt="" src="assets/images/product/product-03.png"></a>
                                            </div>
                                            <div class="cart-title">
                                                <a href="product-details.html">
                                                    <h4>Product Name 03</h4>
                                                </a>
                                                <div class="quanti-price-wrap">
                                                    <span class="quantity">1 ×</span>
                                                    <div class="price-box"><span class="new-price">$130.00</span></div>
                                                </div>
                                                <a class="remove_from_cart" href="#"><i class="icon-trash icons"></i></a>
                                            </div>
                                        </li>
                                        <li class="subtotal-box">
                                            <div class="subtotal-title">
                                                <h3>Sub-Total :</h3><span>$ 260.99</span>
                                            </div>
                                        </li>
                                        <li class="mini-cart-btns">
                                            <div class="cart-btns">
                                                <a href="cart.html">View cart</a>
                                                <a href="checkout.html">Checkout</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="mobile-menu-btn d-block d-lg-none">
                                    <div class="off-canvas-btn">
                                        <a href="#"><img src="assets/images/icon/bg-menu.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div>
            <!-- haeader bottom End -->

                        <!-- off-canvas menu start -->
                        <aside class="off-canvas-wrapper">
                <div class="off-canvas-overlay"></div>
                <div class="off-canvas-inner-content">
                    <div class="btn-close-off-canvas">
                        <i class="fa fa-times"></i>
                    </div>

                    <div class="off-canvas-inner">

                        <div class="search-box-offcanvas">
                            <form>
                                <input type="text" placeholder="Search product...">
                                <button class="search-btn"><i class="icon-magnifier"></i></button>
                            </form>
                        </div>

                    

                        <div class="header-top-settings offcanvas-curreny-lang-support">
                            <h5>My Account</h5>
                            <ul class="nav align-items-center">
                                <li class="language">English <i class="fa fa-angle-down"></i>
                                    <ul class="dropdown-list">
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">French</a></li>
                                    </ul>
                                </li>
                                <li class="curreny-wrap">Currency <i class="fa fa-angle-down"></i>
                                    <ul class="dropdown-list curreny-list">
                                        <li><a href="#">$ USD</a></li>
                                        <li><a href="#"> € EURO</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <!-- offcanvas widget area start -->
                        <div class="offcanvas-widget-area">
                            <div class="top-info-wrap text-left text-black">
                                <h5>My Account</h5>
                                <ul class="offcanvas-account-container">
                                    <li><a href="my-account.html">My account</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                </ul>
                            </div>

                        </div>
                        <!-- offcanvas widget area end -->
                    </div>
                </div>
            </aside>
            <!-- off-canvas menu end -->
            
        </header>
