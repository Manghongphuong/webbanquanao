<section id="slider">
        <!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <img src="images/home/girl1.jpg" class="girl img-responsive" alt="" />
                                    <img src="images/home/pricing.png" class="pricing" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <img src="images/home/girl2.jpg" class="girl img-responsive" alt="" />
                                    <img src="images/home/pricing.png" class="pricing" alt="" />
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-sm-6">
                                    <!-- <h1><span>E</span>-SHOPPER</h1>
                                    <h2>Free Ecommerce Template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button> -->
                                </div>
                                <div class="col-sm-6">
                                    <img src="images/home/girl3.jpg" class="girl img-responsive" alt="" />
                                    <img src="images/home/pricing.png" class="pricing" alt="" />
                                </div>
                            </div>
                        </div>
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--/slider-->

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
                <div class="col-sm-9 padding-right">
                    <div class="features_items">
                        <!--features_items-->
                        <h2 class="title text-center"><strong><?php echo $tendm ?></strong></h2>
                        <?php
                            foreach ($dssp as $sanphamdm) {
                                extract($sanphamdm);
                                $hinh=$img_path.$img;
                                $linksp='index.php?act=sanphamct&id='.$id;
                        ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="<?php echo $hinh?>" alt="">
                                        <h2><?php echo number_format("$price").""?> VND</h2>
                                        <p><a href="<?php echo $linksp?>"><?php echo $title?></a></p>
                                        <?php 
                                            echo '
                                            <form action="index.php?act=addcart" method="post">
                                                <input type="hidden"  name="id" value="'.$id.'">
                                                <input type="hidden" name="tensp" value="'.$title.'">
                                                <input type="hidden" name="img" value="'.$img.'">
                                                <input type="hidden" name="giasp" value="'.$price.'">                                        
                                                <a href="#" class="btn btn-default add-to-cart">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <input style="border-style: hidden;" type="submit" name="addcart"  value="Thêm vào giỏ hàng">
                                                </a>
                                            </form>
                                            ';
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php         
                             }
                        ?>
                    </div>

                    <div class="recommended_items">
                        <!--recommended_items-->
                        <!-- <h2 class="title text-center">sản phẩm xem nhiều</h2> -->
                        <?php
                            //  foreach ($dstop10 as $sp){
                            //     extract($sp);
                            //     $linksp='index.php?act=sanphamct&id='.$id;
                            //     $hinh=$img_path.$img;
                        ?>
                         <!-- <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">                           
                                <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img style="width:38%" src="<?php echo $hinh?>" alt="" />
                                                    <h2><?php echo $price?></h2>
                                                    <p><?php echo $title?></p>
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
                                                    <img src="images/home/recommend2.jpg" alt="" />
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
                        </div> -->
                        <?php 
                        // }
                        ?>
                    </div>
                    <!--/recommended_items-->

                </div>
            </div>
        </div>
    </section>