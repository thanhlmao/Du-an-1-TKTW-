<!-- main-content-wrap start -->
<div class="main-content-wrap shop-page section-ptb">
            <div class="container">
                <div class="row product-details-inner">
                    <div class="col-lg-5 col-md-6">
                        <?php          
                        extract($onesp);
                        $anhsp = $img_path . $anhsp;
                            echo '
                            <div class="product-large-slider">
                                <div class="pro-large-img img-zoom">
                                    <img src="'.$anhsp.'" alt="product-details" />
                                    <a href="'.$anhsp.'" data-fancybox="images"><i class="fa fa-search"></i></a>
                                </div>
                                
                            </div>
                            
                        </div>
    
                        <div class="col-lg-7 col-md-6">
                            <div class="product-details-view-content">
                                <div class="product-info">
                                    <h3>'.$namesp.'</h3>
                                    
                                    <div class="price-box">
                                        <span class="new-price">Giá :' . number_format($giasp) . ' VNĐ </span>
                                        
                                    </div>
                                    
    
                                    <div class="single-add-to-cart">
                                        <form action="index.php?act=addtocart" method="post" class="cart-quantity d-flex">
                                       
                                            <div class="quantity">
                                                <div class="cart-plus-minus">
                                                    <input type="number" class="input-text" name="quantity" value="1" title="Qty">
                                                </div>
                                            </div>
                                            <input type="hidden" name="id" value="' . $id . '">
                                                    <input type="hidden" name="namesp" value="' . $namesp . '">
                                                    <input type="hidden" name="anhsp" value="' . $anhsp . '">
                                                    <input type="hidden" name="giasp" value="' . $giasp . '">
                            
                                                    <button class="addtocart" name="addtocart" value="Thêm vào giỏ hàng" type="submit">Add To Cart</button>
                                        
                                            </form>
                                        
                                      </div>
                                        <ul class="single-add-actions">
                                        <li class="add-to-wishlist">
                                            <a href="wishlist.html" class="add_to_wishlist"><i class="icon-heart"></i> Add to Wishlist</a>
                                        </li>
                                        <li class="add-to-compare">
                                            <div class="compare-button"><a href="compare.html"><i class="icon-refresh"></i> Compare</a></div>
                                        </li>
                                        </ul>
                                     
                                        <ul class="stock-cont">
                                        <li class="product-sku">Sku: <span>P006</span></li>
                                        <li class="product-stock-status">Categories: <a href="#">Butter & Eggs,</a> <a href="#">Cultured Butter</a></li>
                                        <li class="product-stock-status">Tag: <a href="#">Man</a></li>
                                        </ul>
                                        <div class="share-product-socail-area">
                                        <p>Share this product</p>
                                        <ul class="single-product-share">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        </ul>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>;
                        

                <div class="product-description-area section-pt">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product-details-tab">
                                <ul role="tablist" class="nav">
                                    <li class="active" role="presentation">
                                        <a data-bs-toggle="tab" role="tab" href="#description" class="active">Mô tả sản phẩm</a>
                                    </li>
                                    <li role="presentation">
                                        <a data-bs-toggle="tab" role="tab" href="#reviews">Reviews</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="product_details_tab_content tab-content">
                                <!-- Start Single Content -->
                                <div class="product_tab_content tab-pane active" id="description" role="tabpanel">
                                    <div class="product_description_wrap  mt-30">
                                        <div class="product_desc mb-30">
                                        <p>'.$motasp.'</p>
                                        </div>

                                    </div>
                                </div>';
                                ?>
                                <!-- End Single Content -->
                                <!-- Start Single Content -->
                                <div class="product_tab_content tab-pane" id="reviews" role="tabpanel">
                                    <div class="review_address_inner mt-30">
                                        <!-- Start Single Review -->
                                        
                                            
                                            <div class="review_details">
                                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                                                <script>
                                                $(document).ready(function() {

                                                $("#binhluan").load("view/binhluan/formbinhluan.php", {
                                                    idsp: <?= $id ?>
                                                });
                                                });
                                            </script>
                                            <div class="card" id="binhluan">
         
                                            </div>
                                        
                                        <!-- End Single Review -->
                                    </div>
                                    <!-- Start RAting Area -->
                                    <div class="rating_wrap mt-50">
                                        <h5 class="rating-title-1">Add a review </h5>
                                        <p>Your email address will not be published. Required fields are marked *</p>
                                        <h6 class="rating-title-2">Your Rating</h6>
                                        <div class="rating_list">
                                            <div class="review_info mb-10">
                                                <ul class="product-rating d-flex mb-10">
                                                    <li><span class="icon-star"></span></li>
                                                    <li><span class="icon-star"></span></li>
                                                    <li><span class="icon-star"></span></li>
                                                    <li><span class="icon-star"></span></li>
                                                    <li><span class="icon-star"></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End RAting Area -->
                                    
                                <!-- End Single Content -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="related-product-area section-pt">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title">
                                <h3>Sản phẩm liên quan</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row product-active-lg-4">
                        <?php
                        foreach ($spsame as $same) {
                            extract($same);
                            $anhmoi = $img_path . $anhsp;
                            $linksp = "index.php?act=sanphamct&idsp=" . $id;
                            echo '<div class="col-lg-12">
                            <!-- single-product-area start -->
                            <div class="single-product-area mt-30">
                                <div class="product-thumb">
                                    <a href="'.$linksp.'">
                                        <img class="primary-image" src="'.$anhmoi.'" alt="">
                                    </a>
                                    <div class="label-product label_new">New</div>
                                    <div class="action-links">
                                    
                                    <div class="action-links">
                                    <form action="index.php?act=addtocart" method="post" class="action-links" >
                                                <input type="hidden" name="id" value="' . $id . '">
                                                <input type="hidden" name="namesp" value="' . $namesp . '">
                                                <input type="hidden" name="anhsp" value="' . $anhsp . '">
                                                <input type="hidden" name="giasp" value="' . $giasp . '">
                                                <button type="submit" class="addtocart" name="addtocart" value="Thêm vào giỏ hàng"><i class="icon-basket-loaded"></i></button>
                                                
                                                
                                            </form> 
                                    </div>
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
                                        <span class="new-price">Giá :' . number_format($giasp) . ' VNĐ</span>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-area end -->
                        </div>';}
                        ?>
                        
                    </div>
                </div>

                

            </div>
        </div>
        <!-- main-content-wrap end -->