$(document).ready(function(){
    $("#add_cat").click(function(){
        var cat_name=$("#cat_name").val();
        if(!cat_name)
        {
            $.jGrowl('<div><h3><div class="alert-icon"><i class="glyph-icon icon-times"></i> ERROR </div> </h3> <p>Please Enter Name of the Category</p> </div>',{theme: 'bg-red'}, { life: 10000}); 
            return false;  
        }
            $.ajax({
            
                url:'add_cat',
                cache:false,
                method:"post",
                data:{cat_name:cat_name},
                success:function(data)
                {
                    $("#cat_name").val("");
                    view_cat();
                    $.jGrowl('<div><h3><div class="alert-icon"><i class="glyph-icon icon-check"></i> Success </div> </h3> <p>Category Has Been Successfully Added</p> </div>',{theme: 'bg-green'}, { life: 10000});
                }
                
            })
            $("#add_cat").attr("data-dismiss","modal");
    })
    
    function view_cat()
    {
       var table =  $('#cat_table').DataTable({
        destroy: true,
        bAutoWidth: false,
        lengthMenu: [[10, 25, 50,100, -1], [10, 25, 50,100, "All"]],
            ajax:{
                url:'view_cat',
                cache:false,
                method:"POST",
                dataSrc: ""
            },
            columns:[
            {
              render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            
             {
                data: "cat_id"
             },
             {
                data:"cat_name"
             },
             {
                data: "cat_id",
                render:function(data){
                    var content='<div class="dropdown"> <a href="#" title="" class="btn btn-md btn-default" data-toggle="dropdown" aria-expanded="false"> <span class="button-content"> <i class="glyph-icon font-size-11 icon-cog"></i> <i class="glyph-icon font-size-11 icon-chevron-down"></i> </span> </a> <ul class="dropdown-menu float-right"> <li> <a  cat-id= '+data+ ' data-toggle=modal data-target=#editcat id=edit>Edit</a> </li> <li> <a class="font-red" cat-id='+data+' id=remove>Delete</a> </li> </ul> </div>';
                    return content;
                }
             }
            ]
          
        });
        $("#cat_table .sorting").append('<i class="glyph-icon"></i>');
        $("#cat_table .sorting_asc").append('<i class="glyph-icon"></i>');
        $("#cat_table .sorting_desc").append('<i class="glyph-icon"></i>');
        
    }
    view_cat()
    $("body").delegate("#edit","click",function(){
        var cat_id=$(this).attr('cat-id');
        $.ajax({
            url:"get_edit_cat/"+cat_id,
            cache:false,
            data:{cat_id:cat_id},
            method:"post",
            success:function(data)
            {
                $("#u_cat_name").attr("value",data);
                $("#u_cat_name").attr("cat-id",cat_id);
            }
        })
    })
    $("#up_cat").click(function(){
        var cat_id=$("#u_cat_name").attr('cat-id');
        var cat_name=$("#u_cat_name").val();
        $.ajax({
            url:"update_cat",
            cache:false,
            data:{cat_name:cat_name,cat_id:cat_id},
            method:"post",
            success:function(data)
            {
                json=$.parseJSON(data)
                console.log(json)
                if(json=="done")
                {
                    $("#up_cat").attr("data-dismiss","modal");
                    $.jGrowl('<div><h3><div class="alert-icon"><i class="glyph-icon icon-check"></i> Success </div> </h3> <p>Category Has Been Successfully Update</p> </div>',{theme: 'bg-green'}, { life: 10000});
                    view_cat();
                }
                else
                {
                    $.jGrowl('<div><h3><div class="alert-icon"><i class="glyph-icon icon-times"></i> ERROR </div> </h3> <p>Category Do not Update</p> </div>',{theme: 'bg-red'}, { life: 10000});
                }
            }
            
        })
    })
    $("body").delegate("#remove","click",function(){
        var cat_id=$(this).attr('cat-id');
        $.ajax({
            url:"remove_cat",
            cache:false,
            data:{cat_id:cat_id},
            method:"post",
            success:function()
            {
                $.jGrowl('<div><h3><div class="alert-icon"><i class="glyph-icon icon-check"></i> Success </div> </h3> <p>Category Has Been Successfully Removed</p> </div>',{theme: 'bg-green'}, { life: 10000});
               view_cat();
            }
            
        })
    })
    //Category Management End
    //Brand management start
    $("#add_brand").click(function(){
        
        var brand_name=$("#brand_name").val();
        if(!brand_name)
        {
            $.jGrowl('<div><h3><div class="alert-icon"><i class="glyph-icon icon-times"></i> ERROR </div> </h3> <p>Please Enter Name of the Brand</p> </div>',{theme: 'bg-red'}, { life: 10000}); 
            return false;  
        }
            $.ajax({
                url:'add_brand',
                cache:false,
                method:"post",
                data:{brand_name:brand_name},
                success:function(data)
                {
                    $("#brand_name").val("");
                    view_brand();
                    $.jGrowl('<div><h3><div class="alert-icon"><i class="glyph-icon icon-check"></i> Success </div> </h3> <p>Brand Has Been Successfully Added</p> </div>',{theme: 'bg-green'}, { life: 10000});
                }
                
            })
            $("#add_brand").attr("data-dismiss","modal");
    })
    function view_brand()
    {
       var table =  $('#brand_table').DataTable({
        destroy: true,
        bAutoWidth: false,
        lengthMenu: [[10, 25, 50,100, -1], [10, 25, 50,100, "All"]],
            ajax:{
                url:'view_brand',
                method:"POST",
                dataSrc: ""
            },
            columns:[
            {
              render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            
             {
                data: "brand_id"
             },
             {
                data:"brand_name"
             },
             {
                data: "brand_id",
                render:function(data){
                    var content='<div class="dropdown"> <a href="#" title="" class="btn btn-md btn-default" data-toggle="dropdown" aria-expanded="false"> <span class="button-content"> <i class="glyph-icon font-size-11 icon-cog"></i> <i class="glyph-icon font-size-11 icon-chevron-down"></i> </span> </a> <ul class="dropdown-menu float-right"> <li> <a  brand-id= '+data+ ' data-toggle=modal data-target=#editbrand id=edit_brand>Edit</a> </li> <li> <a class="font-red" brand-id='+data+' id=remove_brand>Delete</a> </li> </ul> </div>';
                    return content;
                }
             }
            ]
          
        });
        $("#brand_table .sorting").append('<i class="glyph-icon"></i>');
        $("#brand_table .sorting_asc").append('<i class="glyph-icon"></i>');
        $("#brand_table .sorting_desc").append('<i class="glyph-icon"></i>');        
        
    }
    view_brand()
    $("body").delegate("#remove_brand","click",function(){
        var brand_id=$(this).attr('brand-id');
        $.ajax({
            url:"remove_brand",
            data:{brand_id:brand_id},
            method:"post",
            success:function()
            {
                $.jGrowl('<div><h3><div class="alert-icon"><i class="glyph-icon icon-check"></i> Success </div> </h3> <p>Brand Has Been Successfully Removed</p> </div>',{theme: 'bg-green'}, { life: 10000});
               view_brand();
            }
            
        })
    })
     $("body").delegate("#edit_brand","click",function(){
        var brand_id=$(this).attr('brand-id');
        $.ajax({
            url:"get_edit_brand/"+brand_id,
            data:{brand_id:brand_id},
            method:"post",
            success:function(data)
            {
                $("#u_brand_name").attr("value",data);
                $("#u_brand_name").attr("brand-id",brand_id);
            }
            
        })
    })
    $("#up_brand").click(function(){
        var brand_id=$("#u_brand_name").attr('brand-id');
        var brand_name=$("#u_brand_name").val();
        $.ajax({
            url:"update_brand",
            data:{brand_name:brand_name,brand_id:brand_id},
            method:"post",
            success:function(data)
            {
                json=$.parseJSON(data)
                console.log(json)
                if(json=="done")
                {
                    $("#up_brand").attr("data-dismiss","modal");
                    $.jGrowl('<div><h3><div class="alert-icon"><i class="glyph-icon icon-check"></i> Success </div> </h3> <p>Brand Has Been Successfully Update</p> </div>',{theme: 'bg-green'}, { life: 10000});
                    view_brand();
                }
                else
                {
                    $.jGrowl('<div><h3><div class="alert-icon"><i class="glyph-icon icon-times"></i> ERROR </div> </h3> <p>Brand Do not Update</p> </div>',{theme: 'bg-red'}, { life: 10000});   
                }
            }
            
        })
    })
    //Brand management End
    //product management start
    $("body").delegate("#p_edit","click",function(){
        //CKEDITOR.replace( 'p_desc' )
        var p_id=$(this).attr("data-p_id");
        $.ajax({
            url:"edit_product",
            cache:false,
            method:"post",
            data:{p_id:p_id},
            success:function(data){
                json=$.parseJSON(data)
                console.log(json)
                $("#e_p_id").attr("value",json.p_id);
                $("#e_p_name").attr("value",json.p_name);
               $("#e_p_cat").val(json.p_cat);
               $("#e_p_brand").val(json.p_brand);
               
                /*$("#e_p_desc").val(json.p_desc);
                $("#cke_2_contents").val(json.p_desc);*/
                CKEDITOR.instances['e_p_desc'].setData(json.p_desc);
                
                $("#e_p_price").val(json.p_price);
                $("#e_p_qty").val(json.p_qty);
                console.log(json.p_qty)
                src=$(".src").text();
                $("#e_p_img").attr("src",src+json.p_img);
                $("#e_p_keyword").val(json.p_keyword);
            }
        })
    })
    //product management end
    //admin management start
    $("body").delegate("#admin_edit","click",function(){
        var admin_id=$(this).attr("data-a_id");
        $.ajax({
            url:"edit_admin",
            cache:false,
            method:"post",
            data:{admin_id:admin_id},
            success:function(data){
                json=$.parseJSON(data)
                console.log(json)
                $("#e_admin_id").val(json.admin_id);
                $("#e_admin_name").attr("value",json.admin_name);
                $("#e_admin_email").attr("value",json.admin_email);
                $("#e_admin_date").val(json.admin_date);
            }
        })
        
    })
    
    
})