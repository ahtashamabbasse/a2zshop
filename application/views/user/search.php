
	


		<!-- MAIN -->
		<main class="site-main">

            

            <div class="page-title-base container">
                <h1 class="title-base sr-only">About Us</h1>
            </div>

            <div class="">
              
            <div class="block-floor-products block-floor-products-opt2 block-floor-1" id="floor1-1">
                <div class="container">
                    <div class="block-title heading-opt-1 center">
                        <span class="title"><img src="<?php echo base_url("assets/userpanel/")?>images\media\index1\laptop.png" alt="floor">Search Products</span>
                        
                        
                    </div>

                    <div class="block-content">
                        
                        <div class="col-banner">
                            <a href="" class="img"><img src="<?php echo base_url("assets/userpanel/")?>images\media\index2\search.jpg" alt="baner-floor"></a>
                            
                        </div>

                        <div class="col-products">

                            <div class="box-tab active in   fade " id="all1" role="tabpanel">
                                
                                
                                <?php 
                                if(count($products))
                                {
                                    foreach($products as $product)
                                    {
                                        ?>
                                <div class="col-sm-3 product-item product-item-opt-1">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a class="product-item-img" href="<?php echo base_url("shop/product/").$product->p_cat."/".$product->p_id?>"><img alt="product name" src="<?php echo base_url("images/products/").$product->p_img?>" width="100%" height="200px"></a>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="<?php echo base_url("shop/product/").$product->p_cat."/".$product->p_id?>"><?php echo $product->p_name?> </a></strong>
                                            <div class="product-item-price">
                                                <span class="price">RS.<?php echo $product->p_price?></span>
                                            </div>
                                            <div class="product-item-actions">
                                                <button type="button" data-p_id="<?php echo $product->p_id?>" class="btn btn-cart add_cart"><span>Add to Cart</span></button>
                                                
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
              
            </div>
            <?php include("include/services.php")?>
		</main><!-- end MAIN -->