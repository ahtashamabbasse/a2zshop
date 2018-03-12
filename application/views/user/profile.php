
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
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="panel panel-primary">
                        <div class="panel panel-heading">Order Details</div>
                        <div class="panel-body">
                            <p>
                                <span class="pull-left">Total Pending Order : <?php echo $p_o['total'];?> </span>
                                <span class="pull-right">Total Completed Order : <?php echo $c_o['total'];?> </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <img class="pull-right" src="<?php echo base_url("images/customers/").$c->c_img ?>" class="img img-round" width="200px" height="200px" />
                </div>
            </div>
            
            <br />
            <table class="table table-responsive">
                <tr>
                    <th colspan="2" class="bg-primary"><center>Personal Information</center></th>
                </tr>
                <tr>
                    <th><center>Name</center></th>
                    <td> <center> <?php echo $c->c_name?></center></td>
                </tr>
                <tr>
                    <th><center>Email</center></th>
                    <td><center><?php echo $c->c_email?></center></td>
                </tr>
                <tr>
                    <th><center>Contact No.</center></th>
                    <td><center><?php echo $c->c_contact?></center></td>
                </tr>
                <tr>
                    <th><center>Address</center></th>
                    <td><center><?php echo $c->c_address?></center></td>
                </tr>
                <tr>
                    <th><center>City</center></th>
                    <td><center><?php echo $c->c_city?></center></td>
                </tr>
            </table>
            
            
            
          </div>
    </div>
</div>
<?php include("include/setting.php")?>