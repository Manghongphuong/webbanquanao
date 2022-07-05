
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Danh mục</h2>
                        <div class="panel-group category-products" id="accordian">
                            <?php
                                foreach ($dsdm as $dm) {
                                        extract($dm);
                                        $linkdm='index.php?act=danhmuc&iddm='.$id;
                                        echo '
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><a href="'.$linkdm.'">'.$name.'</a></h4>
                                            </div>
                                        </div>
                                         ';
                                    }                               
                            ?>
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
				<div class="col-sm-9">
					<div class="blog-post-area">
						<h2 class="title text-center">Tin tức của SHOPFASHION</h2>
						<?php
							foreach ($tintuc as $baiviet) {
								extract($baiviet);
								$hinh=$img_path.$img;
								$id_tv=nguoidang($baiviet['id_tv']);
								$linkbv="index.php?act=docthem&id=".$id;
						?>
						<div class="single-blog-post">
							<h3><?php echo $name?></h3>
							<div class="post-meta">
								<ul>
									<li><i class="fa fa-user"></i><?php echo $id_tv?></li>
									<li><i class="fa fa-calendar"></i><?php echo $day?></li>
								</ul>
								<span>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
								</span>
							</div>
							<a href="">
								<img src="<?php echo $hinh?>" alt="">
							</a>
							<p><?php echo $mota?></p>
							<a  class="btn btn-primary" href="<?php echo $linkbv?>">Đọc thêm</a>
						</div>
						<?php } ?>						
						<div class="pagination-area">
							<ul class="pagination">
								<li><a href="" class="active">1</a></li>
								<li><a href="">2</a></li>
								<li><a href="">3</a></li>
								<li><a href=""><i class="fa fa-angle-double-right"></i></a></li>
							</ul>
						</div>
					</div>
	
				</div>
			</div>
		</div>
	</section>
