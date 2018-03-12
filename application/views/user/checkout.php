
</script>
	

		<!-- MAIN -->
		<main class="site-main">

            <!-- breadcrumb -->
            <div class="container breadcrumb-page">
                <ol class="breadcrumb">
                    <li><a href="#">Home </a></li>
                    <li class="active">Authentication</li>
                </ol>
            </div> <!-- breadcrumb -->


            <div class="container">

                <!-- form cart -->
                <form class="form-cart">

                    <!-- table cart -->
                    <div class="table-cart-wrapper table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="tb-product">Products/Price</th>
                                    <th class="tb-available">Available</th>
                                    <th class="tb-qty">Qty</th>
                                    <th class="tb-total">Total</th>
                                    <th class="tb-remove">Action</th>
                                </tr>
                            </thead>
                            <tbody id="cart_list">
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td class="tb-subtotal" colspan="5"><span class="label total_price" >Total:</span>   </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div><!-- table cart -->

                    <!-- action cart -->
                    <div class="cart-actions">
                        
                        <a href="<?php echo base_url("shop/payment")?>" title="Proceed to CHECK OUT" class="action checkout">
                            <span>Proceed to CHECK OUT  </span>
                        </a>
                    </div><!-- action cart -->

                </form><!-- form cart -->

            </div>

            
        <?php include("include/services.php"); ?>
		</main><!-- end MAIN -->	  
