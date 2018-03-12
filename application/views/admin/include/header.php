<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<title>a2z Shopping Store</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Favicons -->
<link rel="shortcut icon" href="<?php echo base_url() ?>assets/adminpanel/icons/favicon.png" />
<!-- JS Core -->

<script type="text/javascript" src="<?php echo base_url() ?>assets/adminpanel/assets-minified\js-core.js"></script>
<script type="text/javascript">
    $(window).load(function(){
	
        setTimeout(function() {
            $('#loading').fadeOut( 400, "linear" );
        }, 300);
    });
</script>
<style>
#loading {
	position: fixed;
	width: 100%;
	height: 100%;
	left: 0;
	top: 0;
	right: 0;
	bottom: 0;
	display: block;
	background: #fff;
	z-index: 10000;
}
#loading img {
	position: absolute;
	top: 50%;
	left: 50%;
	margin: -23px 0 0 -23px;
}
</style>
<link rel="stylesheet" type="text/css"  href=<?php echo base_url("assets/adminpanel/assets-minified/all-demo.css") ?> />
</head>
<body>
<!--<div id="loading"><img src="assets-minified/images/spinner/loader-dark.gif" alt="Loading..."></div>
<div id="loading">
	
	<div style="margin:30% auto;" class="loading-spinner">
                <i class="bg-blue"></i>
                <i class="bg-blue"></i>
                <i class="bg-blue"></i>
                <i class="bg-blue"></i>
                <i class="bg-blue"></i>
                <i class="bg-blue"></i>
            </div>
	
	</div>-->

<div id="sb-site">
  <div id="page-wrapper">
    <div id="page-header" class="clearfix">
      <div id="header-logo" class="rm-transition"> <a href="#" class="tooltip-button hidden-desktop" title="Navigation Menu" id="responsive-open-menu"> <i class="glyph-icon icon-align-justify"></i> </a> <span>A2Z SHOPPING STORE <i class="opacity-80"></i> </span> <a id="collapse-sidebar" href="#" title=""> <i class="glyph-icon icon-chevron-left"></i> </a> </div>
      <!-- #header-logo -->
      
      <div id="header-left"> </div>
      <div id="header-right">
        <div class="user-profile dropdown"> <a href="#" title="" class="user-ico clearfix" data-toggle="dropdown"> <img width="36" class="img-rounded" src="<?php echo base_url() ?>images/admin/admin.png"" alt=""> <span>Ahtasham Abbas</span> <i class="glyph-icon icon-chevron-down"></i> </a>
          <div class="dropdown-menu pad0B float-right">
            <div class="box-sm">
              <div class="login-box clearfix">
                <div class="user-img"> <img src="<?php echo base_url() ?>images/admin/admin.png" alt=""> </div>
                <div class="user-info"> <span> Ahtasham Abbas <i>Admin</i> </span> <a href="<?php echo base_url("admin/settings")?>" title="">Settings</a> </div>
              </div>
              <div class="pad5A button-pane button-pane-alt text-center"> <a href="#" class="btn display-block font-normal btn-danger"> <i class="glyph-icon icon-power-off"></i> Logout </a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- #page-header -->