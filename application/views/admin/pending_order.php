<div id="page-content-wrapper" class="rm-transition">

                    

                    <div id="page-content">
                        <div class="page-box">
                            <h3 class="page-title">
                                Pending Orders
                                <small>
                                    View all list of Pending Orders.
                                    
                                </small>
                            </h3>

                            
<!-- jGrowl notifications 

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/assets-minified/widgets/jgrowl-notifications/jquery.jgrowl.css">-->
<script type="text/javascript" src="<?php echo base_url() ?>assets/adminpanel/assets-minified\widgets\jgrowl-notifications\jgrowl.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/adminpanel/assets-minified\widgets\jgrowl-notifications\jgrowl-demo.js"></script>

<!-- Data tables -->

<!--<link rel="stylesheet" type="text/css" href="assets-minified/widgets/datatable/datatable.css">-->
<script type="text/javascript" src="<?php echo base_url() ?>assets/adminpanel/assets-minified\widgets\datatable\datatable.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/adminpanel/assets-minified\widgets\datatable\datatable-bootstrap.js"></script>
 <script>
    $(function(){
        $("#Admin_table").DataTable();
        $("#Admin_table .sorting").append('<i class="glyph-icon"></i>');
        $("#Admin_table .sorting_asc").append('<i class="glyph-icon"></i>');
        $("#Admin_table .sorting_desc").append('<i class="glyph-icon"></i>');
         
    })
</script>  

    <div class="example-box-wrapper">
<br />
<?php if($error=$this->session->flashdata("msg")) { ?>
    <div class="growl-example-<?php echo $this->session->flashdata('class');?> sr-only" id="info"  >
                <h3>
                    <div class="alert-icon">
                        <i class="glyph-icon icon-check"></i> <?php echo $this->session->flashdata('heading');?>
                    </div>
                </h3>
                    <p><?php echo $this->session->flashdata('msg');?></p> 
        </div>
<?php }  ?>
        
        <table cellpadding="0" cellspacing="0" border="0" class="table table-responsive" id="Admin_table">
            <thead>
                <tr>
                    <th>S.No.</th>
                    <th>Product</th>
                    <th>Customer</th>
                    <th>Qty</th>
                    <th>Invoice</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
                
            </thead>
            <tbody>
            <?php 
                if(count($orders))
                {
                    $i=0;
                    foreach($orders as $o)
                    {
                        $i++;
                        ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo  $o->p_name; ?></td>
                                <td><?php echo $o->c_name; ?></td>
                                <td><?php echo $o->qty; ?></td>
                                <td><a href="<?php echo base_url("admin/invoice/"). $o->invoice_no; ?>"><i class="glyph-icon icon-print "></i></a></td>
                                <td><?php echo $o->o_date; ?></td>
                                 <td>
                      <center>
                        <div class="dropdown">
                            <a href="#" title="" class="btn btn-md btn-default" data-toggle="dropdown">
                                    <span class="button-content">
                                        <i class="glyph-icon font-size-11 icon-cog"></i>
                                        <i class="glyph-icon font-size-11 icon-chevron-down"></i>
                                    </span>
                            </a>
                            
                            <ul class="dropdown-menu float-right">
                                
                                <li>
                                    <a  href="<?php echo base_url("admin/complete_order/").$o->o_id?>" class="font-green  <?php if($o->p_qty<=0){ echo "disabled";}?>" title="">
                                        <i class="glyph-icon icon-check mrg5R"></i>
                                        Completed
                                    </a>
                                </li>
                            </ul>
                        </div>
                        </center>
                                                
                      </td>
                            </tr>
                        <?php
                    }
                }
                
            
            ?>
            
                
            </tbody>
        </table>
        

		
        
    </div>

                        </div>

                    </div><!-- #page-content -->
                </div><!-- #page-content-wrapper -->
                