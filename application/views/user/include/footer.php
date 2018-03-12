<!-- FOOTER -->
        <footer class="site-footer footer-opt-2">

            <div class="container">
                <div class="footer-column">
                
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-sm-6">
                            <strong class="logo-footer">
                                <a href=""><img src="<?php echo base_url("assets/userpanel/")?>images\media\index2\a2zshopping.png" alt="logo"></a>
                            </strong>

                            <table class="address">
                                <tr>
                                    <td><b>Address:  </b></td>
                                    <td>Kotwali Rd, Faisalabad 38000, Pakistan</td>
                                </tr>
                                <tr>
                                    <td><b>Phone: </b></td>
                                    <td>+0092-308-8685298</td>
                                </tr>
                                <tr>
                                    <td><b>Email:</b></td>
                                    <td>Support@a2zShoppingStore.com</td>
                                </tr>
                            </table>

                            <div class="payment">
                                <img src="<?php echo base_url("assets/userpanel/")?>images\media\index2\payment3.jpg" alt="PayPal" title="PayPal">
								<img src="<?php echo base_url("assets/userpanel/")?>images\media\index2\cod.png" alt="Cash On Delivery" title="Cash On Delivery">
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-2 col-sm-6">
                            <div class="links">
                            <h3 class="title">Categories</h3>
                            <ul>
                                <?php  if(count($categories))
                                    {
                                        foreach($categories as $category)
                                        {
                                            ?>
                                    <li>
                                        <a href="">
                                            <?php echo $category->cat_name?>
                                        </a>
                                    </li>
                                            <?php
                                        }
                                    }?>
                            </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-lg-2 col-sm-6">
                            <div class="links">
                            <h3 class="title">Useful Links</h3>
                            <ul>
                                <li><a href="<?php echo base_url("shop/home")?>">Home</a></li>
                                <li><a href="<?php echo base_url("shop/checkout")?>">Checkout</a></li>
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
                                <li><a href="<?php echo base_url("shop/contact")?>">Contact Us</a></li>
                                <li><a href="<?php echo base_url("shop/about")?>">About Us</a></li>
                            </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-4 col-sm-6">
                            <div class="block-newletter">
                                <div class="block-title">Contact Us On Socail Media</div>
                                <div class="block-social">
                                
                                <div class="block-content">
                                    <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
									<a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href=""><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                    
                                </div>
                            </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    
                    Copyright &copy; 2016 <a href="<?php echo base_url()?>">a2zShoppingStore</a>. All Rights Reserved.
                   
                </div>

            </div>
        </footer><!-- end FOOTER -->        
        
        <!--back-to-top  -->
        <a href="#" class="back-to-top">
            <i aria-hidden="true" class="fa fa-angle-up"></i>
        </a>
        
    </div>

    <!-- jQuery -->    
    <script type="text/javascript" src="<?php echo base_url("assets/userpanel/")?>js\jquery.min.js"></script>
    
    <!-- Boostrap --> 
    <script type="text/javascript" src="<?php echo base_url("assets/userpanel/")?>js\bootstrap.js"></script>

    <!-- sticky -->
    <script type="text/javascript" src="<?php echo base_url("assets/userpanel/")?>js\jquery.sticky.js"></script>

    <!-- OWL CAROUSEL Slider -->    
    <script type="text/javascript" src="<?php echo base_url("assets/userpanel/")?>js\owl.carousel.js"></script>
 <!-- elevatezoom --> 
    <script type="text/javascript" src="<?php echo base_url("assets/userpanel/")?>js\jquery.elevateZoom.min.js"></script>
    <!-- Countdown -->    
    
    <script type="text/javascript" src="<?php echo base_url("assets/userpanel/")?>js\jquery.countdown.min.js"></script>

    <!-- Chosen jquery-->    
    
    <script type="text/javascript" src="<?php echo base_url("assets/userpanel/")?>js\chosen.jquery.js"></script>
    <!--Toastr Plugin For Notification-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/userpanel/js/toastr/toastr.css")?>"/>
    <script type="text/javascript" src="<?php echo base_url("assets/userpanel/js/toastr/toastr.min.js")?>"></script>   
<!-- jGrowl notifications 

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/assets-minified/widgets/jgrowl-notifications/jquery.jgrowl.css">-->
<script type="text/javascript" src="<?php echo base_url() ?>assets/adminpanel/assets-minified\widgets\jgrowl-notifications\jgrowl.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/adminpanel/assets-minified\widgets\jgrowl-notifications\jgrowl-demo.js"></script>
<!-- Data tables -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets\userpanel\js\datatable/dataTables.bootstrap.min.css"/>

<script type="text/javascript" src="<?php echo base_url() ?>assets\userpanel\js\datatable/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets\userpanel\js\datatable/dataTables.bootstrap.js"></script>

    <!-- Main -->  
    <script type="text/javascript" src="<?php echo base_url("assets/userpanel/")?>js\main.js"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/cart.js")?>"></script>


</body>
</html>