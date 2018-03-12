<div id="page-content-wrapper" class="rm-transition">

                    

                    <div id="page-content">
                        <div class="page-box">
                            <h3 class="page-title">
                                Settings
                                <small>
                                     Here Your can manage your Account
                                    
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
    

    <div class="example-box-wrapper">
<div class="row">
    <div class="col-md-4">
        <a class="btn btn-primary" data-toggle="modal" data-target="#changepass">Change Password</a>
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
<div class="modal fade" id="changepass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h4 class="modal-title">Change Password</h4>
                    </div>
                    <div class="modal-body">
                       <form action="<?php echo base_url("admin/changepass")?>" id="brand_form" class="form-horizontal" data-parsley-validate="" novalidate="" method="post">
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Old Password
                
            </label>
            <div class="col-sm-8">
                <input class="form-control" type="password"  name="opass" id="opass" required ><ul class="parsley-errors-list" id="parsley-id-3476"></ul>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                New Password
                
            </label>
            <div class="col-sm-8">
                <input class="form-control" type="password"  name="npass" id="npass" required ><ul class="parsley-errors-list" id="parsley-id-3476"></ul>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Confirm Password
                
            </label>
            <div class="col-sm-8">
                <input class="form-control" type="password"  name="cpass" id="cpass" required ><ul class="parsley-errors-list" id="parsley-id-3476"></ul>
            </div>
        </div>
        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" id="add_brand" class="btn btn-primary" >Save changes</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="modal fade" id="editbrand" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h4 class="modal-title">Eidt Brand</h4>
                    </div>
                    <div class="modal-body">
                       <form action="" id="brand_form" class="form-horizontal" data-parsley-validate="" novalidate="" method="post">
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Name:
                
            </label>
            <div class="col-sm-8">
                <input class="form-control" type="text"  name="brand_name" id="u_brand_name" value="" required ><ul class="parsley-errors-list" id="parsley-id-3476"></ul>
            </div>
        </div>
        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" id="up_brand" data-dismiss="modal" class="btn btn-primary">Update</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        

		
        
    </div>

                        </div>

                    </div><!-- #page-content -->
                </div><!-- #page-content-wrapper -->