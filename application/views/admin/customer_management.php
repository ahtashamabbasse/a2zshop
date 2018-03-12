<div id="page-content-wrapper" class="rm-transition">

                    

                    <div id="page-content">
                        <div class="page-box">
                            <h3 class="page-title">
                                Customer Management
                                <small>
                                    View all list of Registred Customer.
                                    
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
        $("#Customer_table").DataTable();
        $("#Customer_table .sorting").append('<i class="glyph-icon"></i>');
        $("#Customer_table .sorting_asc").append('<i class="glyph-icon"></i>');
        $("#Customer_table .sorting_desc").append('<i class="glyph-icon"></i>');
    })
</script>    

    <div class="example-box-wrapper">
<div class="row">
    <div class="col-md-4">
        <a class="btn btn-primary" data-toggle="modal" data-target="#addCustomer">Add New Customer</a>
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
<div class="modal fade" id="addCustomer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h4 class="modal-title">Add New Customer</h4>
                    </div>
                    <div class="modal-body">
                       <form action="<?php echo base_url("admin/add_customer")?>" id="Customer_form" class="form-horizontal" data-parsley-validate="" novalidate="" method="post">
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Name:
                
            </label>
            <div class="col-sm-8">
                <input class="form-control" type="text"  name="c_name" id="c_name" required ><ul class="parsley-errors-list" id="parsley-id-3476"></ul>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Email:
                
            </label>
            <div class="col-sm-8">
                <input class="form-control" type="email"  name="c_email" id="c_email" required ><ul class="parsley-errors-list" id="parsley-id-3476"></ul>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Address:
                
            </label>
            <div class="col-sm-8">
                <input class="form-control" type="text"  name="c_address" id="c_address" required ><ul class="parsley-errors-list" id="parsley-id-3476"></ul>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                City:
                
            </label>
            <div class="col-sm-8">
                
                <select class="form-control chosen-select" name="c_city" >
                    <option value="Faisalabad">Faisalabad</option>
                    <option value="Lahore">Lahore</option>
                    <option value="Karachi">Karachi</option>
                    <option value="Islamabad">Islamabad</option>
                    <option value="Jhang">Jhang</option>
                    <option value="Quetta">Quetta</option>
                    <option value="Rawalpindi">Rawalpindi</option>
                    <option value="Sadiqabad">Sadiqabad</option>
                    <option value="Rahim Yar Khan">Rahim Yar Khan</option>
                    <option value="Sargodha">Sargodha</option>
                    <option value="Peshawar">Peshawar</option>
                    <option value="Multan">Multan</option>
                    <option value="Bahawalpur">Bahawalpur</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Date of Registration:
                
            </label>
            <div class="col-sm-8">
                <input class="form-control" type="date"  name="c_date" id="c_date" required ><ul class="parsley-errors-list" id="parsley-id-3476"></ul>
            </div>
        </div>
        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" id="add_Customer" class="btn btn-primary" >Save changes</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        
        <table cellpadding="0" cellspacing="0" border="0" class="table table-responsive" id="Customer_table">
            <thead>
                <tr>
                    <th>S.No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>ROD</th>
                    <th>Action</th>
                </tr>
                
            </thead>
            <tbody>
            <?php 
                if(count($customers))
                {
                    $i=0;
                    foreach($customers as $customer)
                    {
                        $i++;
                        ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo  $customer->c_name; ?></td>
                                <td><?php echo $customer->c_email; ?></td>
                                <td><?php echo $customer->c_address.",".$customer->c_city ?></td>
                                
                                <td><?php echo $customer->c_date; ?></td>
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
                                    <a href="<?php echo base_url("admin/remove_customer/").$customer->c_id?>" class="font-red" title="">
                                        <i class="glyph-icon icon-remove mrg5R"></i>
                                        Delete
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
                