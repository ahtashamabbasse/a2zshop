<?php
 if($error=$this->session->flashdata("msg")) {
    $heading= $this->session->flashdata("heading");
    $class= $this->session->flashdata("class");
 ?>
    <br />
    <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="alert alert-<?php echo $class?> alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong><?php echo $heading?></strong> <?php echo $error?>
        </div>
    </div>
</div>
<?php }  ?>
<br />
 <script>
    $(function(){
        $("#orderTable").DataTable();
         
    })
</script>

<div class="container">
<br />
<div class="row">
          <div class="col-lg-3 col-md-3 col-sm-4">
            <div class="list-group table-of-contents">
               
                <a class="list-group-item" href="<?php echo base_url("shop/profile")?>">Profile</a>
                <a class="list-group-item" href="<?php echo base_url("shop/pending_orders")?>">Pending Orders</a>
               <a class="list-group-item" href="<?php echo base_url("shop/completed_orders")?>">Completed Orders</a>
                <a class="list-group-item" href="#" data-toggle="modal" data-target="#e_profile">Edit Profile</a>
                <a class="list-group-item" href="#" data-toggle="modal" data-target="#changepass">Change Password</a>
                <a class="list-group-item" href="<?php echo base_url("shop/logout")?>">Logout</a>
              
            </div>
          </div>
          <div class="col-lg-9 col-md-9 col-sm-8">
            <table class="table table-responsive" id="orderTable">
    
        <thead>
                <tr>
                    <th>S.No.</th>
                    <th>Product</th>
                    <th>Customer</th>
                    <th>Qty</th>
                    <th>Invoice</th>
                    <th>Date</th>
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
                                <td><a href="<?php echo base_url("shop/invoice/").$o->invoice_no; ?>"><i class="glyphicon glyphicon-print"></i></a></td>
                                <td><?php echo $o->o_date; ?></td>
                                 
                            </tr>
                        <?php
                    }
                }
                
            
            ?>
            
                
            </tbody>
    </table>
          </div>
</div>



<br />

</div>
<?php include("include/setting.php")?>
