<div id="page-content-wrapper" class="rm-transition">

                    

                    <div id="page-content">
                        <div class="page-box">
                            <h3 class="page-title">
                                Category Management
                                <small>
                                    View all Categories.
                                    
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
        <a class="btn btn-primary" data-toggle="modal" data-target="#addcat">Add New Category</a>
    </div>
    
</div>
<br />

<div class="modal fade" id="addcat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h4 class="modal-title">Add New Category</h4>
                    </div>
                    <div class="modal-body">
                       <form action="<?php echo base_url("admin/add_cat")?>" id="cat_form" class="form-horizontal" data-parsley-validate="" novalidate="" method="post">
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Name:
                
            </label>
            <div class="col-sm-8">
                <input class="form-control" type="text"  name="cat_name" id="cat_name" required ><ul class="parsley-errors-list" id="parsley-id-3476"></ul>
            </div>
        </div>
        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submited" id="add_cat" class="btn btn-primary" >Save changes</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="modal fade" id="editcat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h4 class="modal-title">Eidt Category</h4>
                    </div>
                    <div class="modal-body">
                       <form action="<?php echo base_url("admin/update_cat")?>" id="cat_form" class="form-horizontal" data-parsley-validate="" novalidate="" method="post">
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Name:
                
            </label>
            <div class="col-sm-8">
                <input class="form-control" type="text"  name="cat_name" id="u_cat_name" value="" required ><ul class="parsley-errors-list" id="parsley-id-3476"></ul>
            </div>
        </div>
        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" id="up_cat" data-dismiss="modal" class="btn btn-primary">Update</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <table cellpadding="0" cellspacing="0" border="0" class="table table-responsive" id="cat_table">
            <thead>
                <tr>
                    <th>Serial No</th>
                    <th>Cat Id.</th>
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>
                
            </thead>
            <tbody>
            
                
            </tbody>
        </table>
        

		
        
    </div>

                        </div>

                    </div><!-- #page-content -->
                </div><!-- #page-content-wrapper -->
                <script type="text/javascript" src="<?php echo base_url() ?>assets/ajaxModel.js"></script>