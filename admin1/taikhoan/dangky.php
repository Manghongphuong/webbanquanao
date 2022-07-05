
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="color-line"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="back-link back-backend">
                    <a href="index.php" class="btn btn-primary">Quay về trang tổng quan</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
            <div class="col-md-6 col-md-6 col-sm-6 col-xs-12">
                <div class="text-center custom-login">
                    <h3>Đăng ký</h3>
                </div>
                <div class="hpanel">
                    <div class="panel-body">
                        
                        <form action="index.php?act=dangky" id="loginForm" method="post">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Tên tài khoản</label>
                                    <input class="form-control" name="username">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Họ và tên</label>
                                    <input class="form-control" name="fullname">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Mật khẩu</label>
                                    <input type="password" class="form-control" name="pass">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Email</label>
                                    <input class="form-control" name="email">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Số điện thoại</label>
                                    <input class="form-control" name="sdt">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Địa chỉ</label>
                                    <input class="form-control" name="address">
                                </div>
                                <!-- <div class="checkbox col-lg-12">
                                    <input type="checkbox" class="i-checks" checked> 
                                </div> -->
                            </div>
                            <div class="text-center">
                                <input  type="submit" class="btn btn-success loginbtn" name="save" value="Đăng ký">
                                
                                <button class="btn btn-default">Hủy bỏ</button>
                            </div>
                            <?php
                                 if(isset($thongbao)&&($thongbao!=''))
                                     echo $thongbao;
                            ?>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
        </div>
        <!-- <div class="row">
            <div class="col-md-12 text-center">
                <p>Copyright © 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
            </div>
        </div> -->
    </div>