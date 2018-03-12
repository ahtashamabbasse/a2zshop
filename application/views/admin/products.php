<div id="page-content-wrapper" class="rm-transition">
                   

                    <div id="page-content">
                        <div class="page-box">
                            <h3 class="page-title">
                                Products Management
                                <small>
                                    View all Products.
                                    
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
        $("#Products_table").DataTable();
        $("#Products_table .sorting").append('<i class="glyph-icon"></i>');
        $("#Products_table .sorting_asc").append('<i class="glyph-icon"></i>');
        $("#Products_table .sorting_desc").append('<i class="glyph-icon"></i>');
         
    })
</script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/adminpanel/assets-minified\widgets\\ckeditor/ckeditor.js"></script>

    <div class="example-box-wrapper">
<div class="row">
    <div class="col-md-4">
        <a class="btn btn-primary" data-toggle="modal" data-target="#addProducts">Add New Products</a>
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


<div class="modal fade" id="addProducts" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h4 class="modal-title">Add New Products</h4>
                    </div>
                    <div class="modal-body">
                       <form action="<?php echo base_url("admin/add_product")?>" id="Products_form" class="form-horizontal" data-parsley-validate="" novalidate="" enctype="multipart/form-data"  method="post">
        
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Product Name:
            </label>
            <div class="col-sm-8">
                <input class="form-control" type="text"  name="P_name" id="P_name" required /><ul class="parsley-errors-list" id="parsley-id-3476"></ul>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                    Product Category:
                </label>
            <div class="col-sm-8">
            <select name="p_cat" id="p_cat" class="form-control chosen-select" required>
                <option>Select Product Category</option>
            <?php
                    if(count($categories))
                    {
                        foreach($categories as $cat)
                        {
                            echo "<option value=".$cat->cat_name." >". $cat->cat_name."</option>";
                        }
                    }
                    
                ?> 
                 </select>   
            <ul class="parsley-errors-list" id="parsley-id-3476"></ul>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Product Brand:
                
            </label>
            <div class="col-sm-8">
                <select name="p_brand" id="p_brand" class="form-control chosen-select" required>
                <option>Select Product Brand</option>
                <?php
                    if(count($brands))
                    {
                        foreach($brands as $brand)
                        {
                            echo "<option value=".$brand->brand_name." >". $brand->brand_name."</option>";
                        }
                    }
                    
                ?> 
            </select> 
            <ul class="parsley-errors-list" id="parsley-id-3476"></ul>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Product Description:
                
            </label>
            
            <div class="col-sm-8">
                <textarea name="p_desc" id="p_desc" class="form-control" required></textarea>
                
                <script>CKEDITOR.replace( 'p_desc' );</script>
                <ul class="parsley-errors-list" id="parsley-id-3476"></ul>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Product Price:
                
            </label>
            <div class="col-sm-8">
                <input class="form-control" type="number"  name="p_price" id="p_price" required/><ul class="parsley-errors-list" id="parsley-id-3476"></ul>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Product Quantity:
                
            </label>
            <div class="col-sm-8">
                <input class="form-control" type="number"  name="p_qty" id="p_qty" required/><ul class="parsley-errors-list" id="parsley-id-3476"></ul>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Product Image:
                
            </label>
            <div class="col-sm-8">
                <input class="form-control" type="file"  name="p_img" id="p_img" required/><ul class="parsley-errors-list" id="parsley-id-3476"></ul>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Product Keyword:
                
            </label>
            <div class="col-sm-8">
                <input class="form-control" type="text"  name="p_keyword" id="p_keyword" required /><ul class="parsley-errors-list" id="parsley-id-3476"></ul>
            </div>
        </div>
        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" id="add_Product" class="btn btn-primary" >Save changes</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="modal fade" id="editProducts" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h4 class="modal-title">Edit Products</h4>
                    </div>
                    <div class="modal-body">
                       <form action="<?php echo base_url("admin/update_product")?>" id="Products_form" class="form-horizontal" data-parsley-validate="" novalidate="" enctype="multipart/form-data"  method="post">
        
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Product Name:
            </label>
            <div class="col-sm-8">
                <input class="form-control" type="text"  name="P_name" id="e_p_name" required /><ul class="parsley-errors-list" id="parsley-id-3476"></ul>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                    Product Category:
                </label>
            <div class="col-sm-8">
            <select name="p_cat" id="e_p_cat" class="form-control" required>
                <option>Select Product Category</option>
            <?php
                    if(count($categories))
                    {
                        foreach($categories as $cat)
                        {
                            echo "<option value=".$cat->cat_name." >". $cat->cat_name."</option>";
                        }
                    }
                    
                ?> 
                 </select>   
            <ul class="parsley-errors-list" id="parsley-id-3476"></ul>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Product Brand:
                
            </label>
            <div class="col-sm-8">
                <select name="p_brand" id="e_p_brand" class="form-control chosen-selec" required>
                <option>Select Product Brand</option>
                <?php
                    if(count($brands))
                    {
                        foreach($brands as $brand)
                        {
                            echo "<option value=".$brand->brand_name." >". $brand->brand_name."</option>";
                        }
                    }
                    
                ?> 
            </select> 
            <ul class="parsley-errors-list" id="parsley-id-3476"></ul>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Product Description:
                
            </label>
            <div class="col-sm-8">
                <textarea name="p_desc" id="e_p_desc" class="form-control" required></textarea>
                <script>CKEDITOR.replace( 'e_p_desc' );</script>
                <ul class="parsley-errors-list" id="parsley-id-3476"></ul>
                
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Product Price:
                
            </label>
            <div class="col-sm-8">
                <input class="form-control" type="number"  name="p_price" id="e_p_price" required/><ul class="parsley-errors-list" id="parsley-id-3476"></ul>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Product Quantity:
                
            </label>
            <div class="col-sm-8">
                <input class="form-control" type="number"  name="p_qty" id="e_p_qty" required/><ul class="parsley-errors-list" id="parsley-id-3476"></ul>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Product Image:
                
            </label>
            <div class="col-sm-8">
                <input class="form-control" type="file"  name="p_img" /><ul class="parsley-errors-list" id="parsley-id-3476"></ul>
            </div>
        </div>
        <div class="form-group">
            <img id="e_p_img" class="col-md-offset-3 img-thumbnail" width="220px" height="120px"  src="" />
            <div class="sr-only src"><?php echo base_url("images/products/")?></div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Product Keyword:
                
            </label>
            <div class="col-sm-8">
                <input class="form-control" type="text"  name="p_keyword" id="e_p_keyword" required /><ul class="parsley-errors-list" id="parsley-id-3476"></ul>
            </div>
        </div>
        <input type="hidden" name="p_id" id="e_p_id"/>
        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" id="update_Product" class="btn btn-primary" >Update changes</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        
        <table cellpadding="0" cellspacing="0" border="0" class="table table-responsive" id="Products_table">
            <thead>
                <tr>
                    <th>S.No.</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Image</th>
                    
                    <th>Action</th>
                </tr>
                
            </thead>
            <tbody>
            <?php if(count($products))
                {
                    $i=0;
                    foreach($products as $product)
                    { 
                  
                        $i++;
                        ?>
                        <tr>
                            <td><?php echo $i;?></td>
                            <td><?php echo $product->p_name?></td>
                            <td><?php echo $product->p_cat?></td>
                            <td><?php echo $product->p_brand?></td>
                            <td><?php echo $product->p_qty?></td>
                           
                            <td><?php echo $product->p_price?></td>
                            <td><img src="<?php echo base_url("images/products/").$product->p_img?>" class="img-thumbnail" width="80px" height="50px" /></td>
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
                                    <a href="#" data-toggle="modal" data-target="#editProducts" id="p_edit" data-p_id="<?php echo $product->p_id?>" target="_blank" title="">
                                        <i class="glyph-icon icon-edit mrg5R"></i>
                                        Edit
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url("admin/remove_product/").$product->p_id?>" class="font-red" title="">
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

                