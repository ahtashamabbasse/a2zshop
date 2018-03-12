<div id="page-content-wrapper" class="rm-transition">

                    

                    <div id="page-content">
                        <div class="page-box">
                            <h3 class="page-title">
                                Admin Management
                                <small>
                                    View all list of Registered Admin.
                                    
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
        <a class="btn btn-primary" data-toggle="modal" data-target="#addAdmin">Add New Admin</a>
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
<div class="modal fade" id="addAdmin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h4 class="modal-title">Add New Admin</h4>
                    </div>
                    <div class="modal-body">
                       <form action="<?php echo base_url("admin/add_admin")?>" id="Admin_form" class="form-horizontal" data-parsley-validate="" novalidate="" method="post">
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Name:
                
            </label>
            <div class="col-sm-8">
                <input class="form-control" type="text"  name="Admin_name" id="Admin_name" required ><ul class="parsley-errors-list" id="parsley-id-3476"></ul>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Email:
                
            </label>
            <div class="col-sm-8">
                <input class="form-control" type="email"  name="Admin_email" id="Admin_email" required/><ul class="parsley-errors-list" id="parsley-id-3476"></ul>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Date of Registration:
                
            </label>
            <div class="col-sm-8">
                <input class="form-control" type="date"  name="Admin_date" id="Admin_date" required ><ul class="parsley-errors-list" id="parsley-id-3476"></ul>
            </div>
        </div>
        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" id="add_Admin" class="btn btn-primary" >Save</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="modal fade" id="editadmin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h4 class="modal-title">Eidt Admin</h4>
                    </div>
                    <div class="modal-body">
                       <form action="<?php echo base_url("admin/update_admin")?>" class="form-horizontal" data-parsley-validate="" novalidate="" method="post">
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Name:
                
            </label>
            <div class="col-sm-8">
                <input class="form-control" type="text"  name="Admin_name" id="e_admin_name" required ><ul class="parsley-errors-list" id="parsley-id-3476"></ul>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Email:
                
            </label>
            <div class="col-sm-8">
                <input class="form-control" type="email"  name="Admin_email" id="e_admin_email" required/><ul class="parsley-errors-list" id="parsley-id-3476"></ul>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Date of Registration:
                
            </label>
            <div class="col-sm-8">
                <input class="form-control" type="date"  name="Admin_date" id="e_admin_date" required ><ul class="parsley-errors-list" id="parsley-id-3476"></ul>
            </div>
        </div>   
        <input type="hidden" name="admin_id" id="e_admin_id" />     
        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" id="up_Admin" data-dismiss="moda" class="btn btn-primary">Update</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <table cellpadding="0" cellspacing="0" border="0" class="table table-responsive" id="Admin_table">
            <thead>
                <tr>
                    <th>S.No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>DOR</th>
                    <th>Action</th>
                </tr>
                
            </thead>
            <tbody>
            <?php 
                if(count($admins))
                {
                    $i=0;
                    foreach($admins as $admin)
                    {
                        $i++;
                        ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo  $admin->admin_name; ?></td>
                                <td><?php echo $admin->admin_email; ?></td>
                                <td><?php echo $admin->admin_date; ?></td>
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
                                    <a href="#" data-toggle="modal" data-target="#editadmin" id="admin_edit" data-a_id="<?php echo $admin->admin_id?>" target="_blank" title="">
                                        <i class="glyph-icon icon-edit mrg5R"></i>
                                        Edit
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url("admin/remove_admin/").$admin->admin_id?>" class="font-red" title="">
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
                <script type="text/javascript" src="<?php echo base_url() ?>assets/ajaxModel.js"></script>