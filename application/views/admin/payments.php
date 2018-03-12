<div id="page-content-wrapper" class="rm-transition">

                    

                    <div id="page-content">
                        <div class="page-box">
                            <h3 class="page-title">
                                Received Payments
                                <small>
                                    View all list of Received Payments.
                                    
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

<div class="row">
    <div class="col-md-4">
        <a class="btn btn-primary" data-toggle="modal" data-target="#addpayment">Add Payment</a>
    </div>
    
</div>
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
                    <th>Amount</th>
                    <th>Trancation ID</th>
                    <th>Payment Date</th>
                </tr>
                
            </thead>
            <tbody>
            <?php 
                if(count($payments))
                {
                    $i=0;
                    foreach($payments as $p)
                    {
                        $i++;
                        ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo  $p->p_name; ?></td>
                                <td><?php echo $p->c_name; ?></td>
                                <td><?php echo $p->amount; ?></td>
                                <td><?php echo $p->txr_id; ?></td>
                                <td><?php echo $p->payment_date; ?></td>
                                
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
                <div class="modal fade" id="addpayment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h4 class="modal-title">Eidt Brand</h4>
                    </div>
                    <div class="modal-body">
                       <form action="<?php echo base_url("admin/addpayment")?>"  class="form-horizontal" method="post">
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Product Name:
            </label>
            <div class="col-sm-8">
                
                <select name="p_id" class="chosen-select">
                    <option>Select Product</option>
                    <?php foreach($products as $product){?>
                    <option value="<?php echo $product->p_id?>"><?php echo $product->p_name?></option>
                    <?php }?>
                </select>
                </ul>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Customer:
            </label>
            <div class="col-sm-8">
                <select name="c_id" class="chosen-select">
                    <option>Select Product</option>
                    <?php foreach($customers as $c){?>
                    <option value="<?php echo $c->c_id?>"><?php echo $c->c_name?></option>
                    <?php }?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Amount:
            </label>
            <div class="col-sm-8">
                <input class="form-control" type="text"  name="amount" id="" value="" required ><ul class="parsley-errors-list" id="parsley-id-3476"></ul>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Order No:
            </label>
            <div class="col-sm-8">
                <select name="order_no" class="chosen-select">
                    <option>Select Product</option>
                    <?php foreach($orders as $o){?>
                    <option value="<?php echo $o->o_id?>"><?php echo $o->o_id?></option>
                    <?php }?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Trancation ID:
            </label>
            <div class="col-sm-8">
                <input class="form-control" type="text"  name="txr_id" id="" value="" required ><ul class="parsley-errors-list" id="parsley-id-3476"></ul>
            </div>
        </div>
        
        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" data-dismiss="" class="btn btn-primary">Add Payment</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
                