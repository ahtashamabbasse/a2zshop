<script type="text/javascript">        
function printDiv() {
     var printContents = document.getElementById("divToPrint").innerHTML;
     var originalContents = document.body.innerHTML;
     document.title = "Order Invoice";
     document.body.innerHTML = printContents;
     window.print();
     document.body.innerHTML = originalContents;
     document.title = "a2zShopping Store";
}
 </script>
<div id="page-content-wrapper" class="rm-transition">

                    

                    <div id="page-content">
                        <div class="page-box">
                            <h3 class="page-title">
                                Invoice
                                <small>
                                    View Invoice Details of Order 
                                    
                                </small>
                            </h3>
 

    <div class="example-box-wrapper">
<br />            </div>
<?php 
$x=0;

?>

            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <button onclick="printDiv()" class="btn btn-primary btn-block">Print <span class="glyphicon glyphicon-print"></span></button>
                </div>
            </div>
            <br />
                <div class="row">
                    <div class="col-xs-1"></div>
                    <div class="col-xs-10">
                    
                        <div class="panel panel-body">
                            <div class="row">
                                <div class="col-xs-3">
                                    <img src="<?php echo base_url("assets/userpanel/images\media\index2\a2zshopping.png")?>" />
                                </div>
                                <div class="col-xs-2 pull-right"><b>Invoice #</b><?php echo $orders[0]->invoice_no; ?></div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="panel panel-body" style="border:1px solid #dedede !important;">
                                         <h4>Billed To:</h4>
                                         <div class="row">
                                            <div class="col-xs-12"><strong>Customer Name</strong>: <?php echo $orders[0]->c_name; ?></div>
                                             
                                         </div>
                                         <div class="row">
                                            <div class="col-xs-12"><strong>Email :</strong> <?php echo $orders[0]->c_email; ?> </div>
                                         </div>
                                         <div class="row">
                                            <div class="col-xs-12"><strong>Address :</strong> <?php echo $orders[0]->c_address; ?> </div>
                                         </div>
                                         
                                         <div class="row">
                                            <div class="col-xs-12"><strong>Contact No.</strong><?php echo $orders[0]->c_contact; ?></div>
                                         </div>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="panel panel-body" style="border:1px solid #dedede !important;">
                                         <h4>Shipped To:</h4>
                                         <div class="row">
                                            <div class="col-xs-12"><strong>Customer Name</strong>: <?php echo $orders[0]->c_name; ?></div>
                                              
                                         </div>
                                         <div class="row">
                                            <div class="col-xs-12"><strong>Email :</strong> <?php echo $orders[0]->c_email; ?> </div>
                                         </div>
                                         <div class="row">
                                            <div class="col-xs-12"><strong>Address :</strong> <?php echo $orders[0]->c_address; ?> </div>
                                         </div>
                                         
                                         <div class="row">
                                            <div class="col-xs-12"><strong>Contact No.</strong><?php echo $orders[0]->c_contact; ?></div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="panel panel-body" style="border: #dedede solid 1px;">
                                        <h4>Payment Details</h4>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <strong>Payment Status : </strong>
                                                Due
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <strong>Payment Method : </strong>
                                                Cash on Delivery
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="panel panel-body" style="border: #dedede solid 1px;">
                                        <h4>Order Date and Time</h4>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <strong>Date and Time </strong>
                                                <?php echo $orders[0]->o_date; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-primary">
                                <div class="panel panel-heading">
                                <h4><strong>Products Details</strong></h4>
                                </div>
                                <div class="panel panel-body">
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Quantity</th>
                                                <th>Unit Price</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $x=0;
                                        foreach($orders as $order)
                                        {
                                            $x++;
                                            //$qtys=explode(",",$order->qty);
                                        ?>
                                            <tr>
                                                <td><?php echo $x;?></td>
                                                <td><?php echo $order->p_name ;?></td>
                                                <td><?php echo $order->qty ?></td>
                                                <td><?php echo $order->p_price ;?></td>
                                                <td><?php echo $order->p_price * $order->qty ;?></td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                    <hr style="border: none; border-bottom: 2px solid #dedede;" />
                                    <div class="row">
                                        <div class="col-xs-3 pull-right">
                                            
                                            
                                            <br />
                                            <span class="pull-right"><strong>Grand total : </strong> Rs. 
                                    <?php
                                        $total=0;
                                        $x=0;
                                        foreach($orders as $order)
                                        {
                                            $x++;
                                            $total+=$order->p_price * $order->qty;
                                            
                                        }
                                        echo $total;
                                            
                                    ?>
                                    </span>
                                            <br />
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <br />
                            <br />
                            <div class="row">
                                <img src="<?php echo base_url("assets\userpanel\images/sign.png")?>" style="position: relative; left: 540px; top: -50px; " />
                                <div class="col-md-3 pull-right" style="margin-right: 15px; border: none; border-bottom:2px solid #dedede;"></div>
                                <div class="col-md-2 pull-right" style="margin-right: -10px; margin-top: -15px;">Approved By:</div>
                            </div>
                        </div><!--  MAIN panel just body end -->
                        <button onclick="printDiv()" class="btn btn-primary pull-right">Print <span class="glyphicon glyphicon-print"></span></button>
                        
                        <br />
                        <br />
                        <br />
                        
                        
                    </div>
                    
                </div>

            <!--</div>container-->
 
    </div>
                        </div>

                    </div><!-- #page-content -->
                </div><!-- #page-content-wrapper -->
                


 <!-- MAIN -->
		<main class="site-main">

            

            <div class="page-title-base container">
                <h1 class="title-base"></h1>

            
		

        
 <!--Invoice Page Layout Start-->
<div id="divToPrint" style="display:none; ">
<style type="text/css">
@page  
{ 
    size: auto;
    margin: 5mm 5mm 5mm 5mm;
    
}


body  
{ 
    margin: 0px;  
}


</style>
<div class="panel panel-body">
                            <div class="row">
                                <div class="col-xs-3">
                                    <img src="<?php echo base_url("assets/userpanel/images\media\index2\a2zshopping.png")?>" />
                                </div>
                                <div class="col-xs-2 pull-right"><b>Invoice #</b><?php echo $orders[0]->invoice_no; ?></div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="panel panel-body" style="border:1px solid #dedede !important;">
                                         <h4>Billed To:</h4>
                                         <div class="row">
                                            <div class="col-xs-12"><strong>Customer Name</strong>: <?php echo $orders[0]->c_name; ?></div>
                                             
                                         </div>
                                         <div class="row">
                                            <div class="col-xs-12"><strong>Email :</strong> <?php echo $orders[0]->c_email; ?> </div>
                                         </div>
                                         <div class="row">
                                            <div class="col-xs-12"><strong>Address :</strong> <?php echo $orders[0]->c_address; ?> </div>
                                         </div>
                                         
                                         <div class="row">
                                            <div class="col-xs-12"><strong>Contact No.</strong><?php echo $orders[0]->c_contact; ?></div>
                                         </div>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="panel panel-body" style="border:1px solid #dedede !important;">
                                         <h4>Shipped To:</h4>
                                         <div class="row">
                                            <div class="col-xs-12"><strong>Customer Name</strong>: <?php echo $orders[0]->c_name; ?></div>
                                              
                                         </div>
                                         <div class="row">
                                            <div class="col-xs-12"><strong>Email :</strong> <?php echo $orders[0]->c_email; ?> </div>
                                         </div>
                                         <div class="row">
                                            <div class="col-xs-12"><strong>Address :</strong> <?php echo $orders[0]->c_address; ?> </div>
                                         </div>
                                         
                                         <div class="row">
                                            <div class="col-xs-12"><strong>Contact No.</strong><?php echo $orders[0]->c_contact; ?></div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="panel panel-body" style="border: #dedede solid 1px;">
                                        <h4>Payment Details</h4>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <strong>Payment Status : </strong>
                                                Due
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <strong>Payment Method : </strong>
                                                Cash on Delivery
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="panel panel-body" style="border: #dedede solid 1px;">
                                        <h4>Order Date and Time</h4>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <strong>Date and Time </strong>
                                                <?php echo $orders[0]->o_date; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-primary">
                                <div class="panel panel-heading">
                                <h4><strong>Products Details</strong></h4>
                                </div>
                                <div class="panel panel-body">
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Quantity</th>
                                                <th>Unit Price</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $x=0;
                                        foreach($orders as $order)
                                        {
                                            $x++;
                                            //$qtys=explode(",",$order->qty);
                                        ?>
                                            <tr>
                                                <td><?php echo $x;?></td>
                                                <td><?php echo $order->p_name ;?></td>
                                                <td><?php echo $order->qty ?></td>
                                                <td><?php echo $order->p_price ;?></td>
                                                <td><?php echo $order->p_price * $order->qty ;?></td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                    <hr style="border: none; border-bottom: 2px solid #dedede;" />
                                    <div class="row">
                                        <div class="col-xs-3 pull-right">
                                            
                                            
                                            <br />
                                            <span class="pull-right"><strong>Grand total : </strong> Rs. 
                                    <?php
                                        $total=0;
                                        $x=0;
                                        foreach($orders as $order)
                                        {
                                            $x++;
                                            $total+=$order->p_price * $order->qty;
                                            
                                        }
                                        echo $total;
                                            
                                    ?>
                                    </span>
                                            <br />
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <br />
                            <br />
                            <div class="row">
                                <img src="<?php echo base_url("assets\userpanel\images/sign.png")?>" style="position: relative; left: 540px; top: -50px; " />
                                <div class="col-md-3 pull-right" style="margin-right: 15px; border: none; border-bottom:2px solid #dedede; width: 240px;"></div>
                                <div class="col-md-2 pull-right" style="margin-right: -10px; margin-top: -15px;">Approved By:</div>
                            </div>
                        </div><!--  MAIN panel just body end -->
                        </div>
<!--Invoice Page Layout end-->