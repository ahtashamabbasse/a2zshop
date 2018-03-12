<div class="container">
    <br />
    <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Chose Payment Method</h3>
  </div>
  <div class="panel-body">
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2"></div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <a href="<?php echo base_url("shop/placeOrder")?>"><img src="<?php echo base_url("assets\userpanel\images/cash.jpg")?>" /></a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
            <input type="hidden" name="cmd" value="_cart"/>
            <input type="hidden" name="business" value="business_321@gmail.com"/>
            <input type="hidden" name="upload" value="1"/>
              <?php
              $x=0;
              foreach($products as $product){
              $x++;
              $doller_price=round($product->p_price/104);
              ?>
            <input type="hidden" name="item_number_<?php echo $x?>" value="<?php echo $product->p_id?>"/>
            <input type="hidden" name="item_name_<?php echo $x?>" value="<?php echo $product->p_name?>"/>
            <input type="hidden" name="quantity_<?php echo $x?>"  value="<?php echo $product->cart_qty?>"/>
            <input type="hidden" name="amount_<?php echo $x?>" value="<?php echo $doller_price ?>"/>
            <?php }?>
            <input type="image" name="submit"
              src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/blue-rect-paypal-44px.png"
              alt="PayPal - The safer, easier way to pay online" style="float:right;margin:20px;">
              <input type="hidden" name="return" value="http://a2zshopping.my-board.org/shop/payment_success"/>
              <input type="hidden" name="cancel_return" value="http://a2zshopping.my-board.org/shop/cancel"/>
              <input type="hidden" name="currency_code" value="USD"/>
              <input type="hidden" name="custom" value="<?php echo $_SESSION['c_id']?>"/>
            </form>
            
            
            
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2">
        
        </div>
    </div>
  </div>
</div>
</div>