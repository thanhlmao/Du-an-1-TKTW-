<div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                            <li class="breadcrumb-item active">Tài khoản của tôi</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->


        <!-- main-content-wrap start -->
        <div class="main-content-wrap section-ptb my-account-page">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="account-dashboard">
                            <div class="dashboard-upper-info">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-lg-3 col-md-12">
                                        <div class="d-single-info">
                                            <p class="user-name"> <span><?php echo "Xin chào: " .$user ?></span></p>
                                            <p>(<?php echo "không phải: " . $user ?>)</p>
                                            <a href="index.php?act=dangxuat"> Đăng xuất </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="d-single-info">
                                            <p>Cần sự trợ giúp? Dịch vụ khách hàng tại.</p>
                                            <p>admin@devitems.com.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-12">
                                        <div class="d-single-info">
                                            <p>Gửi email cho họ tại </p>
                                            <p>support@yoursite.com</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-12">
                                        <div class="d-single-info text-lg-center">
                                            <a href="cart.html" class="view-cart"><i class="fa fa-cart-plus"></i>Xem giỏ hàng</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-2">
                                    <!-- Nav tabs -->
                                    <ul role="tablist" class="nav flex-column dashboard-list">
                                        <li><a href="#dashboard" data-bs-toggle="tab" class="nav-link active"  >Bảng Điều Khiển</a></li>
                                        <li> <a href="#orders" data-bs-toggle="tab" class="nav-link">Đơn Đặt Hàng</a></li>
                                        <!-- <li><a href="#downloads" data-bs-toggle="tab" class="nav-link">Tải Xuống</a></li> -->
                                        <li><a href="#address" data-bs-toggle="tab" class="nav-link">Địa Chỉ</a></li>
                                        <li><a href="#account-details" data-bs-toggle="tab" class="nav-link">Chi Tiết Tài Khoản</a></li>
                                        <li><a href="index.php?act=dangxuat" class="nav-link">Đăng Xuất</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-12 col-lg-10">
                                    <!-- Tab panes -->
                                    <div class="tab-content dashboard-content">
                                        <div class="tab-pane active" id="dashboard">
                                            <h3>Bảng Điều Khiển </h3>
                                            <p>Từ bảng điều khiển tài khoản của bạn. bạn có thể dễ dàng kiểm tra và xem <a href="#orders">những đơn đặt hàng gần đây </a> , quản lý của bạn <a href="#address">địa chỉ giao hàng và thanh toán </a> và <a href="#account-details">chỉnh sửa mật khẩu và chi tiết tài khoản của bạn.</a></p>
                                        </div>
                                        <div class="tab-pane fade" id="orders">
                                            <h3>Đơn Đặt Hàng</h3>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Đặt hàng</th>
                                                            <th>Ngày</th>
                                                            <th>Trạng thái	</th>
                                                            <th>Tổng cộng	</th>
                                                            <th>hành động</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Ngày 10 tháng 5 năm 2023</td>
                                                            <td>Xử lý</td>
                                                            <td>25,000 VNĐ cho 1 món hàng </td>
                                                            <td><a href="cart.html" class="view">xem</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Ngày 10 tháng 5 năm 2023</td>
                                                            <td>Xử lý</td>
                                                            <td>25,000 VNĐ cho 1 món hàng </td>
                                                            <td><a href="cart.html" class="view">xem</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- <div class="tab-pane fade" id="downloads">
                                            <h3>Downloads</h3>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Sản phẩm</th>
                                                            <th>Tải xuống</th>
                                                            <th>Hết hạn</th>
                                                            <th>Download</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Haven - Free Real Estate PSD Template</td>
                                                            <td>Ngày 11 tháng 9 năm 2023</td>
                                                            <td>never</td>
                                                            <td><a href="#" class="view">Click Here To Download Your File</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nevara - ecommerce html template</td>
                                                            <td>Ngày 11 tháng 9 năm 2023</td>
                                                            <td>never</td>
                                                            <td><a href="#" class="view">Click Here To Download Your File</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div> -->
                                        <div class="tab-pane" id="address">
                                            <p>Các địa chỉ sau sẽ được sử dụng trên trang thanh toán theo mặc định.</p>
                                            <h4 class="billing-address">Địa chỉ thanh toán</h4>
                                            <a href="#" class="view">Chỉnh xửa </a>
                                            <p class="biller-name">Cầu Giấy</p>
                                            <p>Hai Bà Trưng</p>
                                        </div>
                                        <div class="tab-pane fade" id="account-details">
                                            <h3>Chi Tiết Tài Khoản </h3>
                                            <div class="login">
                                                <div class="login-form-container">
                                                    <div class="account-login-form">
                                                        <form action="#">
                                                            <p>Bạn co sẵn sàng để tạo một tài khoản ? <a href="#">Hãy đăng nhập thay thế!</a></p>
                                                            <label>Giới tính</label>
                                                            <div class="input-radio">
                                                                <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Nam.</span>
                                                                <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Nữ.</span>
                                                            </div>
                                                            <div class="account-input-box">
                                                                <label>Họ</label>
                                                                <input type="text" name="first-name">
                                                                <label>Tên</label>
                                                                <input type="text" name="last-name">
                                                                <label>Email</label>
                                                                <input type="text" name="email-name">
                                                                <label>Mật Khẩu</label>
                                                                <input type="password" name="user-password">
                                                                <label>Ngày Sinh</label>
                                                                <input type="text" placeholder="MM/DD/YYYY" value="" name="birthday">
                                                            </div>
                                                            <!-- <div class="example">
                                                                (E.g.: 05/31/2023)
                                                            </div>
                                                            <div class="custom-checkbox">
                                                                <input type="checkbox" value="1" name="optin">
                                                                <label>Receive offers from our partners</label>
                                                            </div>
                                                            <div class="custom-checkbox">
                                                                <input type="checkbox" value="1" name="newsletter">
                                                                <label>Sign up for our newsletter<br><em>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</em></label>
                                                            </div> -->
                                                            <div class="button-box">
                                                                <button class="btn default-btn" type="submit">Lưu</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           