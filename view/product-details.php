
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
				<div class="left-sidebar">
                        <h2>Danh mục</h2>
                        <div class="panel-group category-products" id="accordian">
                            <!--category-productsr-->
							<div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Quần áo thể thao</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Quần áo nam</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Quần áo nữ</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Trẻ em</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Gia đình</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Túi</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Giày </a></h4>
                                </div>
                            </div>
                        </div>
                        <!--/category-products-->

                        <div class="brands_products">
                            <!--brands_products-->
                            <h2>Thương hiệu</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    <li>
                                        <a href="#"> <span class="pull-right">(50)</span>Acne</a>
                                    </li>
                                    <li>
                                        <a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a>
                                    </li>
                                    <li>
                                        <a href="#"> <span class="pull-right">(27)</span>Albiro</a>
                                    </li>
                                    <li>
                                        <a href="#"> <span class="pull-right">(32)</span>Ronhill</a>
                                    </li>
                                    <li>
                                        <a href="#"> <span class="pull-right">(5)</span>Oddmolly</a>
                                    </li>
                                    <li>
                                        <a href="#"> <span class="pull-right">(9)</span>Boudestijn</a>
                                    </li>
                                    <li>
                                        <a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--/brands_products-->
                        <!--/price-range-->

                        <div class="shipping text-center">
                            <!--shipping-->
                            <img src="images/home/shipping.jpg" alt="" />
                        </div>
                        <!--/shipping-->

                    </div>
				</div>

<style>

</style>
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
							<?php
								extract($onesp);
								$img=$img_path.$img;
								echo '<img src="'.$img.'" alt="" />';
							?>
							</div>
						</div>
						<div class="col-sm-7">
                            <div class="product-information">
								<?php
									extract($onesp);
								?>
                                <!--/product-information-->
                                <img src="images/product-details/new.jpg" class="newarrival" alt="" />
                                <h2><?php echo $title ?></h2>
                                <img src="images/product-details/rating.png" alt="" /></br>
                                <span>
									<span style=""><?php echo number_format("$price").""?></span>
									<label>Số lượng:</label>
									<input type="text" name="num" value="1" />
                                </span></br>
								<?php 
									echo '
									<form action="index.php?act=addcart" method="post">
										<input type="hidden"  name="id" value="'.$id.'">
										<input type="hidden" name="tensp" value="'.$title.'">
										<input type="hidden" name="img" value="'.$img.'">
										<input type="hidden" name="giasp" value="'.$price.'">
										<input class="btn btn-fefault cart" type="submit" name="addcart" value="Thêm vào giỏ hàng">                                            
									</form>
									
									';
								?>
                                <p><b>Tình trạng:</b> Còn hàng</p>
                                <p><b>Thương hiệu:</b> ShopFashion</p>
                                <a href=""><img src="images/product-details/share.png" class="share img-responsive" alt="" /></a>
							</div>
                            <!--<input class="btn btn-fefault cart" type="submit" name="muangay" value="Mua ngay">	
								/product-information-->
                        </div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#details" data-toggle="tab">Thông tin chi tiết</a></li>
								<li class="active"><a href="#reviews" data-toggle="tab">Bình luận</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade" id="details" style="color: black;padding-left: 4%;">
							<?php
								extract($onesp);
								echo ''.$mota.'';
							?>					
							</div>
							<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                            <script>
                                $(document).ready(function(){
                        
                                    $("#reviews").load("view/binhluan.php", {idpro: <?=$id?>});

                                });
                            </script>
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
					<!--recommended_items-->
					<!-- <div class="recommended_items">
						<h2 class="title text-center">sản phẩm xem nhiều</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend1.jpg" alt="" />
													<h2>200.000VND</h2>
													<p>Tên sản phẩm</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend2.jpg" alt="" />
													<h2>200.000VND</h2>
                                        			<p>Tên sản phẩm</p>
                                        			<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend3.jpg" alt="" />
													<h2>200.000VND</h2>
                                        			<p>Tên sản phẩm</p>
                                        			<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend1.jpg" alt="" />
													<h2>200.000VND</h2>
                                        			<p>Tên sản phẩm</p>
                                        			<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend2.jpg" alt="" />
													<h2>200.000VND</h2>
                                        			<p>Tên sản phẩm</p>
                                        			<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend3.jpg" alt="" />
													<h2>200.000VND</h2>
                                        			<p>Tên sản phẩm</p>
                                        			<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div> -->
					<!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>