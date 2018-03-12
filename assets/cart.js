$(document).ready(function(e){
    
    toastr.options = {
      "closeButton": true,
      "positionClass": "toast-bottom-right",
      "progressBar": true,
      "preventDuplicates": false,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    }	
    $("body").delegate(".add_cart","click",function(){
        var cart_p_id=$(this).attr("data-p_id");
        $.ajax({
            url:BASE_URL+"/shop/add_cart",
            type:"post",
            data:{cart_p_id:cart_p_id},
            cache:true,
            success:function(data)
            {
                json=$.parseJSON(data)
                if(json==true)
                {
                    toastr.success("Product Has Been Successfully Added to Cart","SUCCESS")	
                }
                else if(json==false)
                {
                    toastr.error("Product Has Been Not Successfully Added","ERROR")
                               
                }
                else if($json="<div>The Product field must contain a unique value.</div>")
                {
                    toastr.info("Product Has Been Already into Cart","INFO")
                }
                
                showcart();
            },error:function(data)
            {
                 toastr.error(data,"ERROR")
            }
        })
    })
    
    function showcart()
        {
            $(".cart_info").html("")
            $.ajax({
                url:BASE_URL+'shop/showcart',
                method:"post",
                cache:true,
                contentType: "application/json",
                
                success:function(data){
                    json=JSON.parse(data)
                    length=json.length
                    $(".total_cart").text(length)
                    var total=[];
                    for(i=0;i<length;i++)
                    {
                        var p_name=json[i].p_name
                        var p_img=json[i].p_img
                        var cart_qty=json[i].cart_qty
                        var cart_p_id=json[i].cart_p_id
                        var p_price=json[i].p_price
                        var p_cat=json[i].p_cat
                        var p_id=json[i].p_id
                        cart_info='<li class="product-item"> <a class="product-item-photo" href="'+BASE_URL+'shop/product/'+p_cat+'/'+p_id+'" title="The Name Product"> <img class="product-image-photo p_img" src='+BASE_URL+'images/products/'+p_img+' alt="'+p_name+'"> </a> <div class="product-item-details"> <strong class="product-item-name"> <a href="'+BASE_URL+'shop/product/'+p_cat+'/'+p_id+'" >'+p_name+'</a> </strong> <div class="product-item-qty"> <span class="label">Quantity:</span><span class="number">'+cart_qty+'</span> </div> <div class="product-item-price"> <span class="price"> RS.'+p_price+'</span> </div> <div class="product-item-actions"> <a class="action remove delete" data-cart_p_id='+cart_p_id+' href="#" title="Remove item"> <span>Remove</span> </a> </div> </div> </li>';
                        //alert(cart_info)
                        $(".cart_info").append(cart_info)
                        total.push(p_price)
                    }
                    total_price=0
                    for(i=0;i<total.length;i++)
                    {
                       total_price= parseInt(total[i]) + parseInt(total_price)
                    }                   
                    $(".total_price").text(total_price)
                    
                },
                error:(function(data){
                    console.log(data)
                })
            })
        }
        showcart();
         /*setInterval(function(){
               showcart();
            },5000)*/
        function checkout()
        {
            $("#cart_list").html("")
            $.ajax({
                url:BASE_URL+'shop/showcart',
                method:"post",
                 
                success:function(data){
                    $("#cart_info").html("");
                    json=JSON.parse(data)
                    length=json.length
                    $(".total_cart").text(length)
                    var total=[];
                    for(i=0;i<length;i++)
                    {
                        var p_name=json[i].p_name
                        var p_img=json[i].p_img
                        var cart_qty=json[i].cart_qty
                        var p_price=json[i].p_price
                        var p_qty=json[i].p_qty
                        var p_cat=json[i].p_cat
                        var p_id=json[i].p_id
                        var cart_p_id=json[i].cart_p_id;
                        if(p_qty>0){
                            stock="In Stock"
                            clr="text-success"
                        }
                        else
                        {
                            stock="Out of Stock"
                            clr="text-danger"
                            
                        }
                        subtotal=parseInt(p_price) * parseInt(cart_qty)
                        cart_info='<tr><td class="tb-product"> <div class="item"> <a href="'+BASE_URL+'shop/product/'+p_cat+'/'+p_id+'" class="item-photo"><img src="'+BASE_URL+'/images/products/'+p_img+'" alt="'+p_name+'"></a> <div class="item-detail"> <strong class="item-name"><a href="'+BASE_URL+'shop/product/'+p_cat+'/'+p_id+'">'+p_name+'</a></strong> <div class="item-price"> <span class="price price_per_item'+cart_p_id+'" data-price_per_item="'+p_price+'" >RS.'+p_price+'</span> </div> </div> </div> </td> <td class="tb-available"> <span class="value '+clr+'">'+stock+'</span> </td> <td class="tb-qty"> <input type="number" title="Qty" data-cart_p_id="'+cart_p_id+'" id="cart_qty" class="input-qty cart_qty'+cart_p_id+'" min=0 max="'+parseInt(p_qty) +'" value='+cart_qty+' /> </td> <td class="tb-total"> <span class="amount samount t_amount'+cart_p_id+'">'+subtotal+'</span> </td> <td class="tb-remove"> <a class="btn btn-primary update" data-cart_p_id="'+cart_p_id+'"><span class="glyphicon glyphicon-ok-sign"></span></a> <a class="btn btn-danger remove" data-cart_p_id="'+cart_p_id+'"><span class="glyphicon glyphicon-trash"></span></a> </td> </tr>';
                        
                        $("#cart_list").append(cart_info)
                        total.push(parseInt(p_price) *parseInt(cart_qty))
                    }
                    total_price=0
                    for(i=0;i<total.length;i++)
                    {   
                       total_price= parseInt(total[i]) + parseInt(total_price)
                    }               
                    $(".total_price").text("Total : "+total_price)
                    
                },
                error:(function(data){
                    console.log(data)
                })
            })
        }
        checkout()
    $("body").delegate("#cart_qty","keyup",function(){
        cart_p_id= $(this).attr("data-cart_p_id");
        cart_qty= $(".cart_qty"+cart_p_id).val();
        price_per_item= $(".price_per_item"+cart_p_id).attr("data-price_per_item");
        total=parseInt(cart_qty) * parseInt(price_per_item);
        $(".t_amount"+cart_p_id).text(total)
        newtotal=[];
        $(".samount").each(function(){
            t=$(this).text();
            newtotal.push(t)
        })
        total_price=0
        for(i=0;i<newtotal.length;i++)
        {   
           total_price= parseInt(newtotal[i]) + parseInt(total_price)
        }
        $(".total_price").text("Total : "+total_price)
    })
    $("body").delegate("#cart_qty","change",function(){
        cart_p_id= $(this).attr("data-cart_p_id");
        cart_qty= $(".cart_qty"+cart_p_id).val();
        price_per_item= $(".price_per_item"+cart_p_id).attr("data-price_per_item");
        total=parseInt(cart_qty) * parseInt(price_per_item);
        $(".t_amount"+cart_p_id).text(total)
        newtotal=[];
        $(".samount").each(function(){
            t=$(this).text();
            console.log(t)
            newtotal.push(t)
        })
        total_price=0
        for(i=0;i<newtotal.length;i++)
        {   
           total_price= parseInt(newtotal[i]) + parseInt(total_price)
        }
        $(".total_price").text("Total : "+total_price)
    })
    $("body").delegate(".update","click",function(){
        cart_p_id= $(this).attr("data-cart_p_id");
        cart_qty= $(".cart_qty"+cart_p_id).val();
        $.ajax({
            url:BASE_URL+"shop/checkout_update",
            type:"post",
            cache:true,
            data:{cart_p_id:cart_p_id,cart_qty:cart_qty},
            success:function(data)
            {
                json=$.parseJSON(data)
                console.log(json)
                if(json=="done")
                {
                    toastr.success("Your Cart has Been updated","SUCCESS")
                }
                else if(json=="fail")
                {
                    toastr.error("Your Cart Cannot updated","ERROR")
                }
            }
        })
    })
    $("body").delegate(".remove","click",function(event){
        event.preventDefault();
        var el=$(this)
        cart_p_id= $(this).attr("data-cart_p_id");
        $.ajax({
            url:BASE_URL+"shop/checkout_remove",
            type:"post",
            cache:true,
            data:{cart_p_id:cart_p_id},
            success:function(data)
            {
                json=$.parseJSON(data)
                console.log(json)
                if(json=="done")
                {
                    checkout()
                    showcart()
                    toastr.success("Your Cart Has Been Updated","SUCCESS")
                }
                else if(json=="fail")
                {
                    toastr.error("Your Cart Cannot Updated","ERROR")
                }
            }
        })
    })   
})