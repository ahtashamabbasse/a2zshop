

        <!-- MAIN -->
        <main class="site-main">

            <!-- block slide top -->
            <div class="container">
                <div class="block-slide-main slide-opt-2">
                    <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0" data-items='1' data-autoplaytimeout="700" data-autoplay="true" data-loop="true">
                        <div class="item item1" style="background-image: url(<?php echo base_url("assets/userpanel/")?>images/banner/index2/slide1.jpg);">
                            <div class="container">
                                <div class="description">
                                    <span class="title">Smart Phone  </span>
                                    <span class="subtitle">Flat 40% Off</span>
                                    <span class="des"> Products leading fashion or participate <br> For a chance to own right</span>
                                    <a href="" class="btn">shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="item item2" style="background-image: url(<?php echo base_url("assets/userpanel/")?>images/banner/index2/slide2.jpg);">
                            <div class="container">
                                <div class="description">
                                    <span class="title">Fashion Women  </span>
                                    <span class="subtitle">Flat 40% Off</span>
                                    <span class="des"> Products leading fashion or participate <br>  For a chance to own right</span>
                                    <a href="" class="btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="item item3" style="background-image: url(<?php echo base_url("assets/userpanel/")?>images/banner/index2/slide3.jpg);">
                            <div class="container">
                                <div class="description">
                                    <span class="title">solution  <br> for your kitchen  </span>
                                    <span class="subtitle">Flat 40% Off </span>
                                    <span class="des">  Products leading fashion or participate <br>  For a chance to own right</span>
                                    <a href="" class="btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- block slide top -->
            </div>
<!-- block -floor -products / floor :Lapop-->
            <div class="block-floor-products block-floor-products-opt2 block-floor-1" id="floor1-1">
                <div class="container">
                    <div class="block-title heading-opt-1 center">
                        <span class="title"><img src="<?php echo base_url("assets/userpanel/")?>images\media\index1\laptop.png" alt="floor">Laptop</span>
                        
                        <div class="actions">
                            <a href="" class="action action-up"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
                            <a href="#floor1-2" class="action action-down"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        </div>
                    </div>

                    <div class="block-content">
                        
                        <div class="col-banner">
                            <a href="" class="img"><img src="<?php echo base_url("assets/userpanel/")?>images\media\index2\laptop.jpg" alt="baner-floor"></a>
                            
                        </div>

                        <div class="col-products">

                            <div class="box-tab active in   fade " id="all1" role="tabpanel">
                                
                                
                                <?php 
                                if(count($laptops))
                                {
                                    foreach($laptops as $laptop)
                                    {
                                        ?>
                                <div class="col-sm-3 product-item product-item-opt-1">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a class="product-item-img" href="<?php echo base_url("shop/product/").$laptop->p_cat."/".$laptop->p_id?>"><img alt="product name" src="<?php echo base_url("images/products/").$laptop->p_img?>" width="100%" height="200px"></a>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="<?php echo base_url("shop/product/").$laptop->p_cat."/".$laptop->p_id?>"><?php echo $laptop->p_name?> </a></strong>
                                            <div class="product-item-price">
                                                <span class="price">RS.<?php echo $laptop->p_price?></span>
                                            </div>
                                            <div class="product-item-actions">
                                                <button type="button" data-p_id="<?php echo $laptop->p_id?>" class="btn btn-cart add_cart"><span>Add to Cart</span></button>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        
                                        <?php
                                    }
                                }
                                    
                                    ?>
                            </div>
                        </div>

                    </div>

                </div>
            </div><!-- block -floor -products / floor :laptop-->
            <!-- block -floor -products / floor :fashion-->
            

            <!-- Banner -->
            <!-- Banner -->

            <!-- block -floor -products / floor :womenfashion-->
            <div class="block-floor-products block-floor-products-opt2 block-floor-2" id="floor1-2">
                <div class="container">
                    <div class="block-title heading-opt-1">
                        <span class="title"><img src="<?php echo base_url("assets/userpanel/")?>images\media\index1\floor2.png" alt="floor">Women Fashion</span>
                        
                        <div class="actions">
                            <a href="#floor1-1" class="action action-up"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
                            <a href="#floor1-3" class="action action-down"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        </div>
                    </div>

                    <div class="block-content">

                        <div class="col-banner">
                            <a href="" class="img"><img src="<?php echo base_url("assets/userpanel/")?>images\media\index2\baner-floor2.jpg" alt="baner-floor"></a>
                            
                        </div>

    <div class="col-products">

                            <div class="box-tab active in   fade " id="all1" role="tabpanel">
                                
                                
                                <?php 
                                if(count($women))
                                {
                                    foreach($women as $woman)
                                    {
                                        ?>
                                <div class="col-sm-3 product-item product-item-opt-1">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a class="product-item-img" href="<?php echo base_url("shop/product/").$woman->p_cat."/".$woman->p_id?>"><img alt="product name" src="<?php echo base_url("images/products/").$woman->p_img?>" width="100%" height="200px"></a>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="<?php echo base_url("shop/product/").$woman->p_cat."/".$woman->p_id?>"><?php echo $woman->p_name?> </a></strong>
                                            <div class="product-item-price">
                                                <span class="price">RS.<?php echo $woman->p_price?></span>
                                            </div>
                                            <div class="product-item-actions">
                                                <button type="button" data-p_id="<?php echo $woman->p_id?>" class="btn btn-cart add_cart"><span>Add to Cart</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        
                                        <?php
                                    }
                                }
                                    
                                    ?>
                            </div>
                        </div>

                    </div>

                </div>
            </div><!-- block -floor -products / floor :women-fashion-->
            <!-- block -floor -products / floor :Men-fashion-->
            <div class="block-floor-products block-floor-products-opt2 block-floor-2" id="floor1-3">
                <div class="container">
                    <div class="block-title heading-opt-1">
                        <span class="title"><img src="<?php echo base_url("assets/userpanel/")?>images\media\index1\floor2.png" alt="floor">Men Fashion</span>
                        
                        <div class="actions">
                            <a href="#floor1-2" class="action action-up"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
                            <a href="#floor1-4" class="action action-down"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        </div>
                    </div>

                    <div class="block-content">

                        <div class="col-banner">
                            <a href="" class="img"><img src="<?php echo base_url("assets/userpanel/")?>images\media\index2\boy.jpg" alt="baner-floor"></a>
                            
                        </div>

    <div class="col-products">

                            <div class="box-tab active in   fade " id="all1" role="tabpanel">
                                
                                
                                <?php 
                                if(count($men))
                                {
                                    foreach($men as $man)
                                    {
                                        ?>
                                <div class="col-sm-3 product-item product-item-opt-1">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a class="product-item-img" href="<?php echo base_url("shop/product/").$man->p_cat."/".$man->p_id?>"><img alt="product name" src="<?php echo base_url("images/products/").$man->p_img?>" width="100%" height="200px"></a>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="<?php echo base_url("shop/product/").$man->p_cat."/".$man->p_id?>"><?php echo $man->p_name?> </a></strong>
                                            <div class="product-item-price">
                                                <span class="price">RS.<?php echo $man->p_price?></span>
                                            </div>
                                            <div class="product-item-actions">
                                                <button type="button" data-p_id="<?php echo $man->p_id?>" class="btn btn-cart add_cart"><span>Add to Cart</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        
                                        <?php
                                    }
                                }
                                    
                                    ?>
                            </div>
                        </div>

                    </div>

                </div>
            </div><!-- block -floor -products / floor :fashion-->

            <!-- Banner -->
            <!-- Banner -->

            <!-- block -floor -products / floor :Mobiles-->
            <div class="block-floor-products block-floor-products-opt2 block-floor-3 " id="floor1-4">
                <div class="container">
                    <div class="block-title heading-opt-1">
                        <span class="title"><img src="<?php echo base_url("assets/userpanel/")?>images\media\index1\mobiles.png" alt="floor">Mobiles</span>
                        
                        <div class="actions">
                            <a href="#floor1-3" class="action action-up"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
                            <a href="" class="action action-down"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        </div>
                    </div>

                    <div class="block-content">

                        <div class="col-banner">
                            <a href="" class="img"><img src="<?php echo base_url("assets/userpanel/")?>images\media\index2\mobile.jpg" alt="baner-floor"></a>
                            
                        </div>

                        <div class="col-products">

                            <div class="box-tab active in   fade " id="all1" role="tabpanel">
                                
                                
                                <?php 
                                if(count($mobiles))
                                {
                                    foreach($mobiles as $mobile)
                                    {
                                        ?>
                                <div class="col-sm-3 product-item product-item-opt-1">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a class="product-item-img" href="<?php echo base_url("shop/product/").$mobile->p_cat."/".$mobile->p_id?>"><img alt="product name" src="<?php echo base_url("images/products/").$mobile->p_img?>" width="100%" height="200px"></a>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="<?php echo base_url("shop/product/").$mobile->p_cat."/".$mobile->p_id?>"<?php echo base_url("shop/product/").$laptop->p_cat."/".$laptop->p_id?>"><?php echo $mobile->p_name?> </a></strong>
                                            <div class="product-item-price">
                                                <span class="price">RS.<?php echo $mobile->p_price?></span>
                                            </div>
                                            <div class="product-item-actions">
                                                <button type="button" data-p_id="<?php echo $mobile->p_id?>" class="btn btn-cart add_cart"><span>Add to Cart</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        
                                        <?php
                                    }
                                }
                                    
                                    ?>
                            </div>
                        </div>

                    </div>

                </div>
            </div><!-- block -floor -products / floor :Furniture-->

                 

            <?php include("include/services.php")?>

        </main><!-- end MAIN -->

