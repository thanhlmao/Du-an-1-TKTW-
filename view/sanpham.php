<!-- main-content-wrap start -->
<div class="main-content-wrap shop-page section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-lg-1 order-2">
                        <!-- shop-sidebar-wrap start -->
                        <div class="shop-sidebar-wrap">
                            <div class="shop-box-area">

                                <!--sidebar-categores-box start  -->
                                <div class="sidebar-categores-box shop-sidebar mb-30">
                                    <h4 class="title">Danh mục : <strong><?= $namedm ?></strong></h4>
                                    <!-- category-sub-menu start -->
                                    <div class="category-sub-menu">
                                      
                                    </div>
                                    <!-- category-sub-menu end -->
                                </div>
                                <!--sidebar-categores-box end  -->

                                <!-- shop-sidebar start -->
                                <div class="shop-sidebar mb-30">
                                    <h4 class="title">Lọc theo giá </h4>
                                    <!-- filter-price-content start -->
                                    <div class="filter-price-content">
                                        <form action="#" method="post">
                                            <div id="price-slider" class="price-slider"></div>
                                            <div class="filter-price-wapper">

                                                <a class="add-to-cart-button" href="#">
                                                    <span>Lọc</span>
                                                </a>
                                                <div class="filter-price-cont">

                                                    <span>Giá:</span>
                                                    <div class="input-type">
                                                        <input type="text" id="min-price" readonly="" />
                                                    </div>
                                                    <span>—</span>
                                                    <div class="input-type">
                                                        <input type="text" id="max-price" readonly="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- filter-price-content end -->
                                </div>
                                <!-- shop-sidebar end -->

                                <!-- shop-sidebar start -->
                                <div class="shop-sidebar mb-30">
                                    <h4 class="title">Lọc theo dung tích</h4>

                                    <ul class="category-widget-list">
                                        <li><a href="#">50 ml</a></li>
                                        <li><a href="#">100 ml</a></li>
                                    </ul>

                                </div>
                              

                            </div>
                        </div>
                        <!-- shop-sidebar-wrap end -->
                    </div>
                    <div class="col-lg-9 order-lg-2 order-1">

                        <!-- shop-product-wrapper start -->
                        <div class="shop-product-wrapper">
                            <div class="row align-itmes-center">
                                <div class="col">
                                    <!-- shop-top-bar start -->
                                    <div class="shop-top-bar">
                                        <!-- product-view-mode start -->

                                        <div class="product-mode">
                                            <!--shop-item-filter-list-->
                                            <ul class="nav shop-item-filter-list" role="tablist">
                                                <li class="active"><a class="active grid-view" data-bs-toggle="tab" href="#grid"><i class="fa fa-th"></i></a></li>
                                                <li><a class="list-view" data-bs-toggle="tab" href="#list"><i class="fa fa-th-list"></i></a></li>
                                            </ul>
                                            <!-- shop-item-filter-list end -->
                                        </div>
                                        <!-- product-view-mode end -->
                                        <!-- product-short start -->
                                        <div class="product-short">
                                            <p>Sort By :</p>
                                            <select class="nice-select" name="sortby">
                                                <option value="trending">Relevance</option>
                                                <option value="sales">Name(A - Z)</option>
                                                <option value="sales">Name(Z - A)</option>
                                                <option value="rating">Price(Low > High)</option>
                                                <option value="date">Rating(Lowest)</option>
                                            </select>
                                        </div>
                                        <!-- product-short end -->
                                    </div>
                                    <!-- shop-top-bar end -->
                                </div>
                            </div>

                            <!-- shop-products-wrap start -->
                            <div class="shop-products-wrap">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="grid">
                                        <div class="shop-product-wrap">
                                            <div class="row">
                                                <?php
                                                foreach ($listsp as $sp) {
                                                    extract($sp);
                                                    $linksp = "index.php?act=sanphamct&idsp=". $id;
                                                    $anhmoi = $img_path . $anhsp;
                                                    echo '<div class="col-lg-4 col-md-6">
                                                    <!-- single-product-area start -->
                                                    <div class="single-product-area mt-30">
                                                        <div class="product-thumb">
                                                            <a href="'.$linksp.'">
                                                                <img class="primary-image" src="'.$anhmoi.'" alt="" >
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
                                    <div class="tab-pane" id="list">
                                        <div class="shop-product-list-wrap">
                                            <?php
                                            foreach ($listsp as $sp) {
                                                extract($sp);
                                                $linksp = "index.php?act=sanphamct&idsp=". $id;
                                                $anhmoi = $img_path . $anhsp;
                                                echo '<div class="row product-layout-list mt-30">
                                                <div class="col-lg-3 col-md-3">
                                                    <!-- single-product-wrap start -->
                                                    <div class="single-product">
                                                        <div class="product-image">
                                                            <a href="'.$linksp.'"><img src="'.$anhmoi.'" alt="Produce Images"></a>
                                                        </div>
                                                    </div>
                                                    <!-- single-product-wrap end -->
                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="product-content-list text-left">
                                                       
                                                        <h4><a href="'.$linksp.'" class="product-name">'.$namesp.'</a></h4>
                                                        <div class="price-box">
                                                            <span class="new-price">Giá :' . number_format($giasp) . ' VNĐ</span>
                                                           
                                                        </div>

                                                        <div class="product-rating">
                                                            <ul class="d-flex">
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li class="bad-reting"><a href="#"><i class="icon-star"></i></a></li>
                                                            </ul>
                                                        </div>

                                                        <p>'.$motasp.'</p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-3">
                                                    <div class="block2">
                                                        <ul class="stock-cont">
                                                            <li class="product-sku">Sku: <span>P006</span></li>
                                                            <li class="product-stock-status">Availability: <span class="in-stock">In Stock</span></li>
                                                        </ul>
                                                        <div class="product-button">
                                                           
                                                            <ul class="actions">
                                                                <li class="add-to-wishlist">
                                                                    <a href="wishlist.html" class="add_to_wishlist"><i class="icon-heart"></i> Add to Wishlist</a>
                                                                </li>
                                                            </ul>
                                                            <div class="add-to-cart">
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';}
                                            ?>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- shop-products-wrap end -->

                            <!-- paginatoin-area start -->
                            <div class="paginatoin-area">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <ul class="pagination-box">
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li>
                                                <a class="Next" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- paginatoin-area end -->
                        </div>
                        <!-- shop-product-wrapper end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- main-content-wrap end -->