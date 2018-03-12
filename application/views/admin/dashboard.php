<div id="page-content-wrapper" class="rm-transition">

      <div id="page-content">
        <div class="page-content">
            <div class="page-box">
                <h3 class="page-title">Dashboard<small> View All the Details of Store</small></h3>
                <div class="row">
          <div class="row">
            <div class="col-sm-4">
              <div class="tile-box tile-box-alt bg-blue">
                <div class="tile-header"> Total Admin </div>
                <div class="tile-content-wrapper"> <i class="glyph-icon icon-user"></i>
                  <div class="tile-content"> <?php echo $t_admins?> </div>
                </div>
                <a href="<?php echo base_url("admin/admin_management")?>" title="" class="tile-footer"> view details <i class="glyph-icon icon-arrow-right"></i> </a> </div>
            </div>
            
            <div class="col-sm-4">
              <div class="tile-box tile-box-alt bg-blue">
                <div class="tile-header"> Total Customers </div>
                <div class="tile-content-wrapper"> <i class="glyph-icon icon-users"></i>
                  <div class="tile-content">  <?php echo $t_customers?></div>
                </div>
                <a href="<?php echo base_url("admin/customer_management")?>" title="" class="tile-footer"> view details <i class="glyph-icon icon-arrow-right"></i> </a> </div>
            </div>
            <div class="col-sm-4"> </div>
          </div
			>
          <div class="row">
          <div class="col-sm-4">
              <div class="tile-box tile-box-alt bg-green" title="">
                <div class="tile-header"> Total Products </div>
                <div class="tile-content-wrapper"> <i class="glyph-icon icon-check"></i>
                  <div class="tile-content"> <?php echo $t_products?> </div>
                </div>
                <a href="<?php echo base_url("admin/products")?>" title="" class="tile-footer"> view details <i class="glyph-icon icon-arrow-right"></i> </a> </div>
            </div>
            <div class="col-sm-4">
              <div class="tile-box tile-box-alt bg-danger">
                <div class="tile-header"> Total Category </div>
                <div class="tile-content-wrapper"> <i class="glyph-icon icon-linecons-shop"></i>
                  <div class="tile-content">  <?php echo $t_categories?> </div>
                </div>
                <a href="<?php echo base_url("admin/category")?>" title="" class="tile-footer"> view details <i class="glyph-icon icon-arrow-right"></i> </a> </div>
            </div>
            <div class="col-sm-4">
              <div class="tile-box tile-box-alt bg-warning">
                <div class="tile-header"> Total Brands </div>
                <div class="tile-content-wrapper"> <i class="glyph-icon icon-shopping-cart"></i>
                  <div class="tile-content">  <?php echo $t_brands?> </div>
                </div>
                <a href="<?php echo base_url("admin/brand")?>" title="" class="tile-footer"> view details <i class="glyph-icon icon-arrow-right"></i> </a> </div>
            </div>
          </div>
          <div class="row">
          <div class="col-sm-4">
              <div class="tile-box tile-box-alt bg-green" title="">
                <div class="tile-header"> Received Payments </div>
                <div class="tile-content-wrapper"> <i class="glyph-icon icon-check"></i>
                  <div class="tile-content"> <?php echo $total_r_payments?> </div>
                </div>
                <a href="<?php echo base_url("admin/received_payments")?>" title="" class="tile-footer"> view details <i class="glyph-icon icon-arrow-right"></i> </a> </div>
            </div>
            <div class="col-sm-4">
              <div class="tile-box tile-box-alt bg-blue-alt">
                <div class="tile-header"> Completed orders </div>
                <div class="tile-content-wrapper"> <i class="glyph-icon icon-linecons-shop"></i>
                  <div class="tile-content">  <?php echo $total_c_order['total'];?> </div>
                </div>
                <a href="<?php echo base_url("admin/completed_orders")?>" title="" class="tile-footer"> view details <i class="glyph-icon icon-arrow-right"></i> </a> </div>
            </div>
            <div class="col-sm-4">
              <div class="tile-box tile-box-alt bg-danger">
                <div class="tile-header"> Pendings Orders</div>
                <div class="tile-content-wrapper"> <i class="glyph-icon icon-shopping-cart"></i>
                  <div class="tile-content">  <?php echo $total_pending_order['total'];?> </div>
                </div>
                <a href="<?php echo base_url("admin/pending_orders")?>" title="" class="tile-footer"> view details <i class="glyph-icon icon-arrow-right"></i> </a> </div>
            </div>
          </div>
        </div>
            </div>
        </div>
        
        <!-- Morris charts --> 
        
        <script type="text/javascript" src="<?php echo base_url() ?>assets/adminpanel/assets-minified\js-core\raphael.js"></script> 
        <!--<link rel="stylesheet" type="text/css" href="assets-minified/widgets/charts/morris/morris.css">--> 
        <script type="text/javascript" src="<?php echo base_url() ?>assets/adminpanel/assets-minified\widgets\charts\morris\morris.js"></script> 
      </div>
      <!-- #page-content --> 
      
    </div>