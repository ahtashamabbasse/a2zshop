
(function($) {
    "use strict";

    $(document).ready(function() {

        var   status1 = $("#callback-page1");
        var   status2 = $("#callback-page2");
        var   status3 = $("#callback-page3");
        function callback1(event) {
                        
            var items     = event.item.count;    
            var item      = event.item.index +1;     
            

            updateResult1(".currentItem", item );
            updateResult1(".owlItems", items);
                
                
        }
        function callback2(event) {
                        
            var items     = event.item.count;    
            var item      = event.item.index +1;     
            

            updateResult2(".currentItem", item );
            updateResult2(".owlItems", items);
                
                
        }
        function callback3(event) {
                        
            var items     = event.item.count;    
            var item      = event.item.index +1;     
            

            updateResult3(".currentItem", item );
            updateResult3(".owlItems", items);
                
                
        }
        function updateResult1(pos,value){
            status1.find(pos).find(".result").text(value);
        }
        function updateResult2(pos,value){
            status2.find(pos).find(".result").text(value);
        }
        function updateResult3(pos,value){
            status3.find(pos).find(".result").text(value);
        }

        
        $(".cms-rtl .owl-carousel").each(function(index, el) {
            var config = $(this).data();
            config.navText = ['',''];
            config.smartSpeed="800";
            config.rtl="true";
            
            if($(this).hasClass('dotsData')){
                config.dotsData="true";  
            }
            if($(this).hasClass('callback-page1')){
                config.onChanged=callback1; 
            }
            if($(this).hasClass('callback-page2')){
                config.onChanged=callback2; 
            }
            if($(this).hasClass('callback-page3')){
                config.onChanged=callback3; 
            }
            $(this).owlCarousel(config);
           
        });
        
        $(".owl-carousel").each(function(index, el) {
            var config = $(this).data();
            config.navText = ['',''];
            config.smartSpeed="800";
            
            if($(this).hasClass('dotsData')){
                config.dotsData="true";  
            }
            if($(this).hasClass('callback-page1')){
                config.onChanged=callback1; 
            }
            if($(this).hasClass('callback-page2')){
                config.onChanged=callback2; 
            }
            if($(this).hasClass('callback-page3')){
                config.onChanged=callback3; 
            }
           
            $(this).owlCarousel(config);
            
        });

        

        /*  [Mobile Search ]
        - - - - - - - - - - - - - - - - - - - - */
        

        $(".block-search .block-title").on( 'click', function() {
            $( this ).parent().toggleClass('active');
            return false;
        });

        /*  [Mobile menu ]
        - - - - - - - - - - - - - - - - - - - - */
        $(".ui-menu .toggle-submenu").on( 'click', function() {
        
            $( this ).parent().toggleClass('open-submenu');
            return false;
        }) ;
        
        $("[data-action='toggle-nav']").on( 'click', function() {
            $( this ).toggleClass('active');
            $(".block-nav-menu").toggleClass("has-open");
            $("body").toggleClass("menu-open");
            return false;
            
        }) ;

        /*  [Mobile categori ]
        - - - - - - - - - - - - - - - - - - - - */
        $(".block-nav-categori .block-title").on( 'click', function() {
            $( this ).toggleClass('active');
            $( this ).parent().toggleClass('has-open');
            $("body").toggleClass("categori-open");
            return false;
        }) ;

        $(".ui-categori .toggle-submenu").on( 'click', function() {
            $( this ).parent().toggleClass('open-submenu');
            return false;
        }) ;

        /*  [Mobile click service ]
        - - - - - - - - - - - - - - - - - - - - */
        $(".service-opt-1 .block-title").on( 'click', function() {
            
            $( this ).parent().toggleClass('active');
            return false;
        }) ;

       
        /*  [animate click -floor ]
        - - - - - - - - - - - - - - - - - - - - */
        $(".block-title .action ").on('click', function(e) {

            // prevent default anchor click behavior
            e.preventDefault();

            // store hash
            var hash = this.hash;

            // animate
            $('html, body').animate({
                scrollTop: $(hash).offset().top
                }, 500, function(){

                // when done, add hash to url
                // (default click behaviour)
                window.location.hash = hash;
            });

        });

        /*  [COUNT DOWN ]
        - - - - - - - - - - - - - - - - - - - - */
        $('[data-countdown]').each(function() {
            var $this = $(this), finalDate = $(this).data('countdown');
            $this.countdown(finalDate, function(event) {
                var fomat ='<div class="box-count box-days"><div class="number">%D</div><div class="text">Days</div></div><div class="box-count box-hours"><div class="number">%H</div><div class="text">Hours</div></div><div class="box-count box-min"><div class="number">%M</div><div class="text">Mins</div></div><div class="box-count box-secs"><div class="number">%S</div><div class="text">Secs</div></div>';
                $this.html(event.strftime(fomat));
           });
        });
        
        /*  [Button Filter Products  ]
        - - - - - - - - - - - - - - - - - - - - */
        //open filter
        $(".btn-filter-products").on( 'click', function() {
            $( this ).toggleClass('active');
            $( "#layered-filter-block" ).toggleClass('active');
            $( "body" ).toggleClass('filter-active');
            return false;
        }) ;

        //Close filter
        $("#layered-filter-block .close-filter-products").on( 'click', function() {
            $( ".btn-filter-products" ).removeClass('active');
            $( "#layered-filter-block" ).removeClass('active');
            $( "body" ).removeClass('filter-active');
            return false;
        }) ;

        //toggle filter options
        $("#layered-filter-block .filter-options-title").on( 'click', function() {
            $( this ).toggleClass('active');
            $( this ).parent().toggleClass('active');
            return false;
        }) ;
        
        /* ------------------------------------------------
                Arctic modal
        ------------------------------------------------ */

        if($.arcticmodal){
            $.arcticmodal('setDefault',{
                type : 'ajax',
                ajax : {
                    cache : false
                },
                afterOpen : function(obj){

                    var mw = $('.modal_window');
                    
                    mw.find('.custom_select').customSelect();

                    mw.find('.product_preview .owl_carousel').owlCarousel({
                        margin : 10,
                        themeClass : 'thumbnails_carousel',
                        nav : true,
                        navText : [],
                        rtl: window.ISRTL ? true : false
                    });

                    Core.events.productPreview();

                    addthis.toolbox('.addthis_toolbox');
                    
                }
            });
        }
            
        /* ------------------------------------------------
                Fancybox
        ------------------------------------------------ */

        if($.fancybox){
            $.fancybox.defaults.direction = {
                next: 'left',
                prev: 'right'
            }
        }

        if($('.fancybox_item').length){
            $('.fancybox_item').fancybox({
                openEffect : 'elastic',
                closeEffect : 'elastic',
                helpers : {
                    overlay: {
                        css : {
                            'background' : 'rgba(0,0,0, .6)'
                        }
                    },
                    thumbs  : {
                        width   : 50,
                        height  : 50
                    }
                }
            });
        }

        if($('.fancybox_item_media').length){
            $('.fancybox_item_media').fancybox({
                openEffect  : 'none',
                closeEffect : 'none',
                helpers : {
                    media : {}
                }
            });
        }

        /* ------------------------------------------------
                Elevate Zoom
        ------------------------------------------------ */

        if($('#img_zoom').length){
            $('#img_zoom').elevateZoom({
                zoomType: "inner",
                gallery:'thumbnails',
                galleryActiveClass: 'active',
                cursor: "crosshair",
                responsive:true,
                easing:true,
                zoomWindowFadeIn: 500,
                zoomWindowFadeOut: 500,
                lensFadeIn: 500,
                lensFadeOut: 500
            });

            $(".open_qv").on("click", function(e) { 
                var ez = $(this).siblings('img').data('elevateZoom');
                $.fancybox(ez.getGalleryList());
                e.preventDefault();
            });

        }

        /*  [ input number ]
        - - - - - - - - - - - - - - - - - - - - */
        $(".btn-number").on( 'click', function(e) {
       
            e.preventDefault();
            
            var fieldName = $(this).attr('data-field');
            var type      = $(this).attr('data-type');
            var input = $("input[name='"+fieldName+"']");
            var currentVal = parseInt(input.val());
            if (!isNaN(currentVal)) {
                if(type == 'minus') {
                    
                    if(currentVal > input.attr('minlength')) {
                        input.val(currentVal - 1).change();
                    } 
                    if(parseInt(input.val()) == input.attr('minlength')) {
                        $(this).attr('disabled', true);
                    }

                } else if(type == 'plus') {

                    if(currentVal < input.attr('maxlength')) {
                        input.val(currentVal + 1).change();
                    }
                    if(parseInt(input.val()) == input.attr('maxlength')) {
                        $(this).attr('disabled', true);
                    }

                }
            } else {
                input.val(0);
            }
        });
    
        /*  [ tab detail ]
        - - - - - - - - - - - - - - - - - - - - */
        $(".product-info-detailed  .block-title").on( 'click', function() {
            
            $( this ).parent().toggleClass('has-active');
            return false;
        }) ;

        /*  [ Back to top ]
        - - - - - - - - - - - - - - - - - - - - */
        $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('.back-to-top').fadeIn();
            } else {
                $('.back-to-top').fadeOut();
            }
        });
        $('.back-to-top').on( 'click', function(e) {
            e.preventDefault();
            $("html, body").animate({
                scrollTop: 0
            }, 500);
        });

        /*  [ All Categorie ]
        - - - - - - - - - - - - - - - - - - - - */
        $(document).on('click','.open-cate',function(){
            $(this).closest('.block-nav-categori').find('li.cat-link-orther').each(function(){
                $(this).slideDown();
            });
            $(this).addClass('colse-cate').removeClass('open-cate').html('Close');
            return false;
        })
        /* Close Categorie */
        $(document).on('click','.colse-cate',function(){
            $(this).closest('.block-nav-categori').find('li.cat-link-orther').each(function(){
                $(this).slideUp();
            });
            $(this).addClass('open-cate').removeClass('colse-cate').html('All Categories');
            return false;
        })

        /*  [ All Categorie ]
        - - - - - - - - - - - - - - - - - - - - */
        $(document).on('click','.col-categori .btn-show-cat',function(){
            $(this).closest('.col-categori').find('li.cat-orther').each(function(){
                $(this).slideDown();
            });
            $(this).addClass('btn-close-cat').removeClass('btn-show-cat').html('Close <i class="fa fa-angle-double-right" aria-hidden="true"></i>');
            $(this).parent().addClass('open');
            return false;
        })
        /* Close Categorie */
        $(document).on('click','.col-categori .btn-close-cat',function(){
            $(this).closest('.col-categori').find('li.cat-orther').each(function(){
                $(this).slideUp();
            });
            $(this).parent().removeClass('open');
            $(this).addClass('btn-show-cat').removeClass('btn-close-cat').html('All Categories <i class="fa fa-angle-double-right" aria-hidden="true"></i>');
            return false;
        })

        /*  [ All Categorie Sticky]
        - - - - - - - - - - - - - - - - - - - - */
        

        $(document).on('click','.nav-toggle-cat',function(){
            $('.is-sticky .header-nav ').find('.block-nav-categori .block-content .ui-categori ').slideToggle();
            $('.is-sticky .header-nav ').find('.block-nav-categori .block-content .view-all-categori ').slideToggle();
           
            return false;
        })
        

        /*  [ Sticky Menu ]
         - - - - - - - - - - - - - - - - - - - - */
        $('.mid-header ').sticky({ topSpacing: 0 });

        /*  [ Banner top ]
         - - - - - - - - - - - - - - - - - - - - */
        $('.qc-top-site  .close').on( 'click', function() {
            
            $(this).parents(".qc-top-site").slideUp("slow");
            $(this).parents(".qc-top-site").addClass('close-bn');
            $(".qc-top-site ").css({"min-height":"0","opacity":"0"});
            return false;
        }) ;

        /*  [ Sticky Menu ]
         - - - - - - - - - - - - - - - - - - - - */
        

        if($('.categori-search-option').length){
            $(".categori-search-option").chosen({
            
            });
        }

    }); 
   
})(jQuery);