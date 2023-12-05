<!-- main-content-wrap start -->
<div class="main-content-wrap section-ptb lagin-and-register-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 m-auto">
                        <div class="login-register-wrapper">
                            <!-- login-register-tab-list start -->
                            <div class="login-register-tab-list nav">
                                <a class="active" data-bs-toggle="tab" href="#lg1">
                                    <h4> Đăng nhập </h4>
                                </a>
                                <a data-bs-toggle="tab" href="#lg2">
                                    <h4> Đăng ký </h4>
                                </a>
                            </div>
                            
                            <!-- login-register-tab-list end -->
                            
                            <div class="tab-content">
                                <div id="lg1" class="tab-pane active">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form action="index.php?act=dangnhap" method="post">
                                                <div class="login-input-box">
                                                    <input type="text" name="user" placeholder="User Name">
                                                    <input type="password" name="password" placeholder="Password">
                                                </div>
                                                <div class="button-box">
                                                    <div class="login-toggle-btn">
                                                        <input type="checkbox">
                                                        <label>Remember me</label>
                                                        <a href="index.php?act=quenmk">Forgot Password?</a>
                                                    </div>
                                                    <div class="button-box">
                                                    <button class="login-btn btn" type="submit" value="Đăng nhập" name="dangnhap"><span>Login</span></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="lg2" class="tab-pane">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form action="index.php?act=dangky" method="post">
                                                <div class="login-input-box">
                                                    <input type="text" name="user" placeholder="User Name">
                                                    <input type="password" name="password" placeholder="Password">
                                                    <input type="email" name="email" placeholder="Email" type="email">
                                                </div>
                                                <div class="button-box">
                                                    <button type="submit" Value="Đăng ký" name="dangky" class="register-btn btn"><span>Đăng ký</span></button>
                                                </div>
                                            </form>
                                            <?php
                                                if(isset($notice) && ($notice != "")) { 
                                                    echo $notice;
                                                 }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main-content-wrap end -->
      