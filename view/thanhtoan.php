<form action="index.php?act=bill" method="post">
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Thanh toán</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="register-req">
				<p>Vui lòng sử dụng Đăng ký và Kiểm tra để dễ dàng truy cập vào lịch sử đơn đặt hàng của bạn hoặc sử dụng Checkout </p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-3">
						<div class="shopper-info">
							<p>Thông tin người mua hàng</p>
							<?php
								if(isset($_SESSION['user'])){
								    $fullname=$_SESSION['user']['fullname'];
									$user=$_SESSION['user']['username'];
                                    $sdt=$_SESSION['user']['phone_number'];
                                    $address=$_SESSION['user']['address'];
								}
								else{
									$fullname="";
									$user="";
									$sdt="";
									$address="";
								}
                            ?>
							<style>
								.shopper-info > .thongtin{
								background: #F0F0E9;
								border: 0 none;
								margin-bottom: 10px;
								padding: 10px;
								width: 100%;
								font-weight: 300;
								}
							</style> 
							<form>
								<input class="thongtin" type="text" placeholder="Tên hiển thị" name="fullname" value="<?=$fullname?>">
								<input class="thongtin" type="text" placeholder="Tên tài khoản" name="username" value="<?=$user?>">
								<input class="thongtin"type="text" placeholder="Số điện thoại" name="phone_number" value="<?=$sdt?>">
								<input class="thongtin" type="text" placeholder="Địa chỉ" name="address" value="<?=$address?>">
							</form>
							<a class="btn btn-primary" href="index.php">Mua thêm</a>
							<input class="btn btn-primary" type="submit" name="dathang" value="Đặt hàng">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="order-message">
							<p>Phương thức thanh toán</p>
							<label><input type="checkbox" name="pttt" value="1"> Chuyển khoản trực tuyến</label><br>
							<label><input type="checkbox" name="pttt" value="2"> Kiểm tra thanh toán</label><br>
							<label><input type="checkbox" name="pttt" value="3"> Paypal</label>							
						</div>	
					</div>
					<div class="col-sm-4">
						<div class="order-message">
							<p>Để vận chuyển</p>
							<textarea  name="ghichu" placeholder="Ghi chú về đơn hàng của bạn" rows="10"></textarea>
						</div>	
					</div>					
				</div>
			</div>
			<div class="review-payment">
				<h2>Xem lại và thanh toán</h2>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Hình ảnh</td>
							<td style="text-align: center;" class="description">Tên sản phẩm</td>
							<td class="price">Gía</td>
							<td class="quantity">Số lượng</td>
							<td class="total">Thành tiền</td>
						</tr>
					</thead>
					<?php
						$tong=0;
						$tamtinh=0;
						$i=0;
						foreach ($_SESSION['cart'] as $mycart) {
							$hinh=$img_path.$mycart[2];
							$thanhtien=$mycart[4]*$mycart[3];
							$phi=15000;
							$tamtinh+=$thanhtien;
							$tong=$tamtinh+$phi;
					?>
					<tbody>
						<tr>
							<td class="cart_product">
								<a href=""><img style="width:110px; heght:110px;" src="<?php echo $hinh ?>" alt=""></a>
							</td>
							<td style="text-align: center;" class="cart_description">
								<h4><a href=""><?php echo $mycart[1] ?></a></h4>
							</td>
							<td class="cart_price">
								<p><?php echo number_format("$mycart[3]").""?> VND</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="<?=$mycart[4]?>" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php echo number_format("$thanhtien").""?> VND</p>
							</td>
						</tr>
					</tbody>
					<?php
						}
					?>
				</table>				
			</div>
		</div>
	</section> <!--/#cart_items-->
	<section id="do_action">
		<div class="container">
			<div class="row">
				<div class="col-sm-6"></div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Tạm tính <span><?php echo number_format("$tamtinh").""?> VND</span></li>
							<li>Gía vận chuyển <span><?php echo number_format("$phi").""?> VND</span></li> 
							<li>Tổng tiền <span><?php echo number_format("$tong").""?> VND</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
</form>