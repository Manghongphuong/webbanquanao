
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Đăng nhập vào tài khoản của bạn</h2>
						<form action="index.php?act=dangnhap" method="post">
							<input type="text" name="username" placeholder="Tên đăng nhập" />
							<input type="password" name="pass" placeholder="Mật khẩu" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Ghi nhớ tài khoản
							</span>
							<input type="submit"  class="btn btn-default" name="dangnhap" value="Đăng nhập">
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">Hoặc</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Đăng ký tài khoản</h2>
						<form action="index.php?act=dangky" method="post">
							<input type="text" name="username"  placeholder="Tên tài khoản"/>
							<input type="text" name="fullname"  placeholder="Họ và tên"/>
							<input type="password" name="pass" placeholder="Mật khẩu"/>
							<input type="email" name="email" placeholder="Email"/>
							<input type="text" name="sdt"  placeholder="Số điện thoại"/>
							<input type="text" name="address"  placeholder="Địa chỉ"/>
						    <!-- <button type="submit" class="btn btn-default" name="dangky">Đăng ký</button>  -->
						    <input type="submit"  class="btn btn-default" name="dangky" value="Đăng ký">
							<?php
								if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
							?>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
		
