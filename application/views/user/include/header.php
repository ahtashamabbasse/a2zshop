<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>A2z Shopping Store</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/userpanel/")?>css/style.css">
    <script type="text/javascript" src="<?php echo base_url("assets/userpanel/")?>js\jquery.min.js"></script>
    <script type="text/javascript">
    var BASE_URL = "<?php echo base_url();?>";
</script>
<link rel="shortcut icon" href="<?php echo base_url() ?>assets/adminpanel/icons/favicon.png" />
</head>
<body class="cms-index-index index-opt-2">
    <div class="wrapper">
        <!-- HEADER -->
        <header class="site-header header-opt-2">
            <!-- header-top -->
            <div class="header-top">
                <div class="container">
                    <!-- links -->
                    <ul class="links nav-right">
                        
                        <?php if($this->session->userdata("c_email"))
                        {
                            ?>
                                <li><a href="<?php echo base_url("shop/profile")?>">Profile</a></li>
                            <?php
                        }
                        else
                        {
                            ?>
                                <li><a href="<?php echo base_url("shop/login")?>">Login/Register</a></li>
                            <?php
                        }
                        ?>
						<li><a href="<?php echo base_url("shop/checkout")?>">Checkout</a></li>
                        <?php if($this->session->userdata("c_email"))
                        {
                            ?>
                                <li><a href="<?php echo base_url("shop/Logout")?>">logout</a></li>
                        <?php }?>
                    </ul><!-- links -->
                </div>
            </div><!-- header-top -->
            <!-- header-content -->
            <div class="header-content">
                <div class="container">

                    <div class="row">

                        <div class="col-md-3 nav-left">
                            <!-- logo -->
                            <strong class="logo">
                                <a href="<?php echo base_url()?>"><img src="<?php echo base_url("assets/userpanel/")?>images\media\index2\a2zshopping.png" alt="logo"></a>
                            </strong><!-- logo -->
                        </div>

                        <div class="col-md-6 nav-mind">

                            <!-- block search -->
                            <div class="block-search">
                                <div class="block-title">
                                    <span>Search</span>
                                </div>
                                <div class="block-content">
                                    
                                    <div class="form-search">
                                        <form method="get" action="<?php echo base_url("shop/search")?>">
                                            <div class="box-group">
                                                <input type="search" name="search" class="form-control" placeholder="Search here...">
                                                <button class="btn btn-search" type="submit"><span>search</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- block search -->

                        </div>

                        <div class="col-md-3 nav-right">

                            <!-- block mini cart -->
                            <?php  //$c=count($carts)?>
                            <div class="block-minicart dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    <span class="cart-icon"></span>
                                    <span class="cart-text">cart</span>
                                    <span class="counter qty"></span>
                                    
                                        <span class="counter-number"> <span class="total_cart"></span></span>
                                        <span class="counter-label"> <span class="total_cart"><span>Item(s)</span></span>
                                        
                                    </span>
                                </a>
                                <div class="dropdown-menu">
                                        
                                    <div class="minicart-content-wrapper">
                                        <div class="subtitle">
                                            
                                            You have <span class="total_cart"></span> item(s) in your cart
                                        </div>
                                        <div class="minicart-items-wrapper">
                                            <ol class="minicart-items cart_info">
                                                
                                            </ol>
                                        </div>
                                        <div class="subtotal">
                                            <span class="label">Total</span>
                                            <span class="price total_price"></span>
                                        </div>
                                        <div class="actions">
                                            <a class="btn btn-checkout" href="<?php echo base_url("shop/checkout")?>" title="Check Out">
                                                <span>Check out</span>
                                            </a>
                                        </div>
                                    </div>
                                
                                </div>
                            </div><!-- block mini cart -->

                        </div>

                    </div> 

                </div>
            </div><!-- header-content -->

            <!-- header-nav -->
            <div class=" header-nav mid-header">
                <div class="container">
                    <div class="box-header-nav">

                        <span data-action="toggle-nav-cat" class="nav-toggle-menu nav-toggle-cat"><span>Categories</span><i aria-hidden="true" class="fa fa-bars"></i></span>
                        
                        <div class="block-nav-categori">
                            <div class="block-title">
                                <span>Categories</span>
                            </div>
                            <div class="block-content">
                                <ul class="ui-categori">
                                    
                                    <?php  if(count($categories))
                                    {
                                        $x=0;
                                        foreach($categories as $category)
                                        {
                                            $x++;
                                    ?>
                                    <li class="<?php if($x>4){echo "cat-link-orther";}?>">
                                        <a href=""><span class="icon"><img src="<?php echo base_url("assets\userpanel\images\icon\index1/nav-cat1.png")?>" alt="nav-cat"/></span><?php echo $category->cat_name?></a>
                                    </li>
                                    <?php
                                        }
                                    }
                                    ?>
                                    
                                    
                                    
                                    
                                </ul>

                                <div class="view-all-categori">
                                    <a class="open-cate btn-view-all">All Categories</a>
                                </div>
                            </div>
                            
                        </div>

                        <!-- menu -->
                        <div class="block-nav-menu">
                            <ul class="ui-menu">
                                <li class=""><a href="<?php echo base_url("shop/home")?>">Home</a></li>
								<?php if($this->session->userdata("c_email"))
                                {
                                    ?>
                                        <li><a href="<?php echo base_url("shop/profile")?>">Profile</a></li>
                                    <?php
                                }
                                else
                                {
                                    ?>
                                        <li><a href="<?php echo base_url("shop/login")?>">Login/Register</a></li>
                                    <?php
                                }
                                
                                
                                ?>
								<li class=""><a href="<?php echo base_url("shop/checkout")?>">Checkout</a></li>
								<li class=""><a href="<?php echo base_url("shop/contact")?>">Contact Us</a></li>
								<li class=""><a href="<?php echo base_url("shop/about")?>">About Us</a></li>
                            </ul>
                        </div><!-- menu -->

                        <span data-action="toggle-nav" class="nav-toggle-menu"><span>Menu</span><i aria-hidden="true" class="fa fa-bars"></i></span>

                        <div class="block-minicart dropdown ">
                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                <span class="cart-icon"></span>
                                
                            </a>
                            <div class="dropdown-menu">
                                <div class="minicart-content-wrapper">
                                        <div class="subtitle">
                                            
                                            You have <span class="total_cart"></span> item(s) in your cart
                                        </div>
                                        <div class="minicart-items-wrapper">
                                            <ol class="minicart-items cart_info">
                                                
                                            </ol>
                                        </div>
                                        <div class="subtotal">
                                            <span class="label">Total</span>
                                            <span class="price total_price"></span>
                                        </div>
                                        <div class="actions">
                                            <a class="btn btn-checkout" href="<?php echo base_url("shop/checkout")?>" title="Check Out">
                                                <span>Check out</span>
                                            </a>
                                        </div>
                                    </div>
                            </div>
                        </div>

                        <div class="block-search">
                            <div class="block-title">
                                <span>Search</span>
                            </div>
                            <div class="block-content">
                                <div class="form-search">
                                    <form>
                                        <div class="box-group">
                                            <input type="text" class="form-control" placeholder="Search here...">
                                            <button class="btn btn-search" type="button"><span>search</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div><!-- header-nav -->

        </header><!-- end HEADER --> 
        