
<!-- MAIN -->
		<main class="site-main">
            <br />
            <?php if(count($products))
                    {
                        foreach($products as $product)
                        {
            ?>
            <div class="container">
                <div class="row">
                    
                    <div class="col-sm-7 col-md-6 col-lg-5">

                        <div class="product-media media-horizontal">

                            <div class="image_preview_container images-large">

                                <img class="img-thumbnail img-responsive" width="100%"  src="<?php echo base_url("images/products/").$product->p_img?>" alt="" />
                                                            </div>
                            <div class="product_preview images-small">
                            </div><!--/ .product_preview-->
                        </div><!-- image product -->
                    </div>
                    <div class="col-sm-5 col-md-6 col-lg-7"> 
                        <div class="product-info-main">
                            <h2 class="page-title">
                                <?php echo $product->p_name?>
                            </h2>  
                            <div class="price-box" style="text-align: left;">
                                    <span class="price" style="font-size: 20px;">RS.<?php echo $product->p_price?></span>  
                                </div>
                                <div class="product-info-stock-sku" style="text-align: left; float: right;">
                                    <div class="stock available">
                                        <span class="bold">Avaiability: </span>
                                        <?php if($product->p_qty >0)
                                        {
                                            echo '<i class="fa fa-check-square-o"></i> In Stock';
                                        }
                                        else
                                        {
                                            echo '<i class="fa fa-times-circle-o" ></i> Out of Stock';
                                        }?>    
                                        
                                    
                                    </div>
                                </div>
                            
                            

                            <div class="product-overview">
                                <h3 class="overview-label">Description</h3>
                                <div class="overview-content">
                                    <p><?php echo $product->p_desc?>
<img class="pull-right" src="<?php echo base_url("assets/userpanel/qrcode/qr.php")."?text=".base_url("shop/product/").$product->p_cat."/".$product->p_id ?>" />
 </p>
                                </div>
                            </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label for="forSize">Quantity </label>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group form-qty">
                                            <div class="control">
                                                <input type="number" class="form-control"  name="qty1" min="1" max="<?php echo (int)$product->p_qty?>"/>
                                            </div>
                                        </div>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <button type="button"  title="Add to Cart" class="btn btn-default add_cart" data-p_id=<?php echo $product->p_id?>>
                                                    <span class="fa fa-shopping-cart"> Add to Cart</span>
                                            </button>
                                        </div>
                                        
                                    </div>
                        </div><!-- detail- product -->

                    </div><!-- Main detail -->

                </div>
            </div>
    
    <?php
    }
    }
?>
            

            <!-- block-related product -->
            <div class="block-related container">
                <div class="block-title">
                    <strong class="title">RELATED products</strong>
                </div>
                <div class="block-content ">
                    <ol class="product-items owl-carousel " data-nav="true" data-dots="false" data-margin="30" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":3},"992":{"items":3}}'>
                        <?php if(count($releted_prodcuts)){
                            foreach($releted_prodcuts as $rp)
                            {
                        ?>
                        <li class=" product-item product-item-opt-0">
                            <div class="product-item-info">
                                <div class="product-item-photo">
                                    <a href="<?php echo base_url("shop/product/").$rp->p_cat."/".$rp->p_id?>" class="product-item-img"><img src="<?php echo base_url("images/products/").$rp->p_img?>" alt="product name"></a>
                                </div>
                                <div class="product-item-detail">
                                    <strong class="product-item-name"><a href="<?php echo base_url("shop/product/").$rp->p_cat."/".$rp->p_id?>"><?php echo $rp->p_name?> </a></strong>
                                    <div class="product-item-price">
                                        <span class="price">RS.<?php echo $rp->p_price?></span>
                                    </div>
                                    <div class="product-item-actions">
                                        <button class="btn btn-cart add_cart" data-p_id=<?php echo $rp->p_id?> type="button"><span>Add to Cart</span></button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        
                        
                        
                    <?php      
                            }
                        }?>
                    </ol>
                </div>
            </div><!-- block-related product -->
            
            <?php include("include/services.php")?>
		</main><!-- end MAIN -->