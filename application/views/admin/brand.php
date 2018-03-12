<div id="page-content-wrapper" class="rm-transition">

                    

                    <div id="page-content">
                        <div class="page-box">
                            <h3 class="page-title">
                                Brand Management
                                <small>
                                    View all Brand.
                                    
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
        <a class="btn btn-primary" data-toggle="modal" data-target="#addbrand">Add New Brand</a>
    </div>
    
</div>
<br />

<div class="modal fade" id="addbrand" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h4 class="modal-title">Add New Brand</h4>
                    </div>
                    <div class="modal-body">
                       <form action="" id="brand_form" class="form-horizontal" data-parsley-validate="" novalidate="" method="post">
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Name:
                
            </label>
            <div class="col-sm-8">
                <input class="form-control" type="text"  name="brand_name" id="brand_name" required ><ul class="parsley-errors-list" id="parsley-id-3476"></ul>
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
        <table cellpadding="0" cellspacing="0" border="0" class="table table-responsive" id="brand_table">
            <thead>
                <tr>
                    <th>Serial No</th>
                    <th>brand Id.</th>
                    <th>Brand Name</th>
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