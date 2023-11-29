 <!--  Header Start -->
        
        <!-- Hero Section Start -->
        <div class="hero-slider hero-slider-one">

            <!-- Single Slide Start -->
            <div class="single-slide" style="background-image: url(assets/images/slider/anh1.jpg)">
                <!-- Hero Content One Start -->
                <div class="hero-content-one container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="slider-content-text text-left">
                                <h5>Exclusive Offer -20% Off This Week</h5>
                                <h1>H-Vault Classico</h1>
                                <!-- <p>H-Vault Watches Are A Lot Like Classic American Muscle Cars - Expect For The American Part That Is. </p>
                                <p>Starting At <strong>$1.499.00</strong></p> -->
                                <div class="slide-btn-group">
                                    <a href="shop.html" class="btn btn-bordered btn-style-1">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero Content One End -->
            </div>
            <!-- Single Slide End -->
            
            <!-- Single Slide Start -->
            <div class="single-slide" style="background-image: url(assets/images/slider/anh2.jpg)">
                <!-- Hero Content One Start -->
                <div class="hero-content-one container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="slider-content-text text-left">
                                <h5>Exclusive Offer -20% Off This Week</h5>
                                <h1>H-Vault Classico</h1>
                                <!-- <p>H-Vault Watches Are A Lot Like Classic American Muscle Cars - Expect For The American Part That Is. </p>
                                <p>Starting At <strong>$1.499.00</strong></p> -->
                                <div class="slide-btn-group">
                                    <a href="shop.html" class="btn btn-bordered btn-style-1">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero Content One End -->
            </div>
            <!-- Single Slide End -->
            <div class="single-slide" style="background-image: url(assets/images/slider/anh3.jpg)">
                <!-- Hero Content One Start -->
                <div class="hero-content-one container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="slider-content-text text-left">
                                <h5>Exclusive Offer -20% Off This Week</h5>
                                <h1>H-Vault Classico</h1>
                                <!-- <p>H-Vault Watches Are A Lot Like Classic American Muscle Cars - Expect For The American Part That Is. </p>
                                <p>Starting At <strong>$1.499.00</strong></p> -->
                                <div class="slide-btn-group">
                                    <a href="shop.html" class="btn btn-bordered btn-style-1">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero Content One End -->
            </div>
        </div>
        <!-- Hero Section End -->
        
        <!-- Banner Area Start -->
        <div class="banner-area section-pt">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-banner mb-30">
                            <a href="#"><img src="assets/images/banner/anh2.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6  col-md-6">
                        <div class="single-banner mb-30">
                            <a href="#"><img src="assets/images/banner/anh1.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area End -->
       
        <!-- Product Area Start -->
        <div class="product-area section-pb section-pt-30">
            <div class="container">
               
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h4>Top 10 sản phẩm ưa thích</h4>
                        </div>
                    </div>
                </div>
               
                <div class="row product-active-lg-4">
                    <?php
                        foreach($top10sp as $tsp){
                            extract($tsp);
                            $linksp = "index.php?act=sanphamct&idsp=" . $id;
                                $anhmoi = $img_path . $anhsp;
                            echo '<div class="col-lg-12">
                        
                            <!-- single-product-area start -->
                            <div class="single-product-area mt-30">
                                <div class="product-thumb">
                                    <a href="'.$linksp.'">
                                        <img class="primary-image" src="'.$anhmoi.'" alt="">
                                    </a>
                                    <div class="label-product label_new">New</div>
                                    <div class="action-links">
                                    <form action="index.php?act=addtocart" method="post" class="action-links" >
                                                <input type="hidden" name="id" value="' . $id . '">
                                                <input type="hidden" name="namesp" value="' . $namesp . '">
                                                <input type="hidden" name="anhsp" value="' . $anhsp . '">
                                                <input type="hidden" name="giasp" value="' . $giasp . '">
                                                <button type="submit" class="addtocart" name="addtocart" value="Thêm vào giỏ hàng"><i class="icon-basket-loaded"></i></button>
                                                
                                                
                                            </form> 
                                    </div>
                                    <ul class="watch-color">
                                        <li class="twilight"><span></span></li>
                                        <li class="pigeon"><span></span></li>
                                        <li  class="portage"><span></span></li>
                                    </ul>
                                </div>
                                <div class="product-caption">
                                    <h4 class="product-name"><a href="'.$linksp.'">'.$namesp.'</a></h4>
                                    <div class="price-box">
                                        <span class="new-price">'.number_format($giasp).' VND</span>
                                     
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-area end -->
                        </div>';
                        }
                    ?>
                    
                </div>
            </div>
        </div>
        <!-- Product Area End -->
        
        <!-- Banner Area Start -->
        <!-- <div class="banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-banner mb-30">
                            <a href="#"><img src="assets/images/anh/97-03.webp" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6  col-md-6">
                        <div class="single-banner mb-30">
                            <a href="#"><img src="assets/images/anh/a9abf7e5-e2b0-49db-893f-444453378e6f.webp" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Banner Area End -->
        
        
        <!-- Product Area Start -->
        <div class="product-area section-pb section-pt-30">
            <div class="container">
               
                <div class="row">
                    <div class="col-12 text-center">
                        <ul class="nav product-tab-menu" role="tablist">
                            <li class="product-tab-item nav-item active">
                                <a class="product-tab__link active" id="nav-featured-tab" data-bs-toggle="tab" href="#nav-featured" role="tab" aria-selected="true">Tất cả sản phẩm</a>
                            </li>
                            <li class="product-tab__item nav-item">
                                <a class="product-tab__link" id="nav-new-tab" data-bs-toggle="tab" href="#nav-new" role="tab" aria-selected="false">Sản phẩm mới</a>
                            </li>
                            <li class="product-tab__item nav-item">
                                <!-- <a class="product-tab__link" id="nav-bestseller-tab" data-bs-toggle="tab" href="#nav-bestseller" role="tab" aria-selected="false">Bestseller</a> -->
                            </li>
                            <li class="product-tab__item nav-item">
                                <a class="product-tab__link" id="nav-onsale-tab" data-bs-toggle="tab" href="#nav-onsale" role="tab" aria-selected="false">Giảm giá</a>
                            </li>
                        </ul>
                    </div>
                </div>
                
        
                <div class="tab-content product-tab__content" id="product-tabContent">
                    <div class="tab-pane fade show active" id="nav-featured" role="tabpanel">
                        <div class="product-carousel-group">
                           
                            <div class="row product-active-row-4">
                            <?php
                            foreach($spnew as $sp){
                                extract($sp);
                                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                                $anhmoi = $img_path . $anhsp;
                                        echo '<div class="col-lg-12">
                                        <div class="single-product-area mt-30">
                                        <div class="product-thumb">
                                            <a href="'.$linksp.'">
                                                <img class="primary-image" src="'.$anhmoi.'" alt="" width="200px" height="200px" style="margin-bottom: 20px">
                                            </a>
                                            <div class="label-product label_new">New</div>
                                            <div class="action-links">
                                            <form action="index.php?act=addtocart" method="post" class="action-links" >
                                                <input type="hidden" name="id" value="' . $id . '">
                                                <input type="hidden" name="namesp" value="' . $namesp . '">
                                                <input type="hidden" name="anhsp" value="' . $anhsp . '">
                                                <input type="hidden" name="giasp" value="' . $giasp . '">
                                                <button type="submit" class="addtocart" name="addtocart" value="Thêm vào giỏ hàng"><i class="icon-basket-loaded"></i></button>
                                               
                                                
                                            </form>    
                                            </div>
                                            <ul class="watch-color">
                                                <li class="twilight"><span></span></li>
                                                <li  class="portage"><span></span></li>
                                                <li class="pigeon"><span></span></li>
                                            </ul>
                                        </div>
                                        <div class="product-caption">
                                            <h4 class="product-name"><a href="'.$linksp.'">'.$namesp.'</a></h4>
                                            <div class="price-box">
                                                <span class="new-price">'.number_format($giasp). ' VND</span>
                                             
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                                }
                                    ?>
                                    <!-- single-product-area end -->
                                
                            </div>
                            <!-- <button type="submit" class="addtocart" name="addtocart" value="Thêm vào giỏ hàng"><i class="icon-heart"></i></button>
                                                <button type="submit" class="addtocart" name="addtocart" value="Thêm vào giỏ hàng"><i class="icon-magnifier icons"></i></button> -->
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Product Area End -->
        
        <!-- letast blog area Start -->
        <div class="letast-blog-area section-pb">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-4">
                        <div class="singel-latest-blog">
                            <div class="aritcles-content">
                                <div class="author-name">
                                    post by: <a href="#"> Author Name</a> - 30 Oct 2019
                                </div>
                                <h4><a href="blog-details.html" class="articles-name">Ruiz Watch is one of the web's most visited watch sites and the world's</a></h4>
                            </div>
                            <div class="articles-image">
                                <a href="blog-details.html">
                                    <img src="assets/images/anh/120929126-127134378843822-5843956979544227937-n.webp" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="singel-latest-blog">
                            <div class="aritcles-content">
                                <div class="author-name">
                                    post by: <a href="#"> Author Name</a> - 20 Oct 2019
                                </div>
                                <h4><a href="blog-details.html" class="articles-name">Ruiz Watch reviews and most popular watch & timepiece blog for serious </a></h4>
                            </div>
                            <div class="articles-image">
                                <a href="blog-details.html">
                                    <img src="assets/images/anh/64977650-2458195287581456-3558073081884301828-n.webp" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="singel-latest-blog">
                            <div class="aritcles-content">
                                <div class="author-name">
                                    post by: <a href="#"> Author Name</a> - 13 Oct 2019
                                </div>
                                <a href="blog-details.html" class="articles-name">Connected to the World: Introducing the G-Shock MTG-B1000-1A</a>
                            </div>
                            <div class="articles-image">
                                <a href="blog-details.html">
                                    <img src="assets/images/anh/116498688-1003413316757137-2057002942968229057-n.webp" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

       
        <div class="newletter-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="newletter-wrap">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-md-12">
                                    <!-- <div class="newsletter-title mb-30">
                                        <h3>Join Our <br><span>Newsletter Now</span></h3>
                                    </div> -->
                                </div>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>