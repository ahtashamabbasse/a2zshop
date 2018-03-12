
<!DOCTYPE html> 
<html lang="en">
<head> 

    <meta charset="UTF-8">
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<title> a2z Shopping Store </title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Favicons -->

<link rel="shortcut icon" href="<?php echo base_url() ?>assets/adminpanel/icons/favicon.png">



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
    #loading {position: fixed;width: 100%;height: 100%;left: 0;top: 0;right: 0;bottom: 0;display: block;background: #fff;z-index: 10000;}
    #loading img {position: absolute;top: 50%;left: 50%;margin: -23px 0 0 -23px;}
</style>



        

        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/adminpanel/assets-minified\all-demo.css">
<!-- jGrowl notifications -->

<!--<link rel="stylesheet" type="text/css" href="assets-minified/widgets/jgrowl-notifications/jgrowl.css">-->
<script type="text/javascript" src="<?php echo base_url() ?>assets/adminpanel/assets-minified\widgets\jgrowl-notifications\jgrowl.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/adminpanel/assets-minified\widgets\jgrowl-notifications\jgrowl-demo.js"></script>
    



</head> 
    <body>
    <!--<div id="loadin"><img src="../assets/images/spinner/loader-dark.gif" alt="Loading..."></div>
     -->   

<div class="center-vertical">
    <div class="center-content">

        <form action="<?php echo base_url("login/dologin")?>" data-parsley-validate="" class="col-md-4 center-margin" method="post">
            <h3 class="text-center pad25B font-gray text-transform-upr font-size-23">a2z Shopping Store <span class="opacity-80"></span></h3>
            <div id="login-form" class="content-box modal-content">
                <div class="content-box-wrapper pad20A">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address:</label>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon addon-inside bg-white font-primary">
                                <i class="glyph-icon icon-envelope-o"></i>
                            </span>
                            <input type="email" class="form-control" name="admin_email" value="<?php echo set_value("admin_email")?>"  required placeholder="Enter an email"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password:</label>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon addon-inside bg-white font-primary">
                                <i class="glyph-icon icon-unlock-alt"></i>
                            </span>
                            <input type="password" name="admin_pass" class="form-control" required placeholder="Password"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="checkbox-primary col-md-6" style="height: 20px;">
                            <label>
                                <input type="checkbox" id="loginCheckbox1" class="custom-checkbox">
                                Remember me
                            </label>
                        </div>
                        <div class="text-right col-md-6">
                            <a href="#" class="switch-button" switch-target="#login-forgot" switch-parent="#login-form" title="Recover password">Forgot your password?</a>
                        </div>
                    </div>
                </div>
                <div class="button-pane">
                    <button type="submit" class="btn btn-block btn-primary">Login</button>
                </div>
            </div>

            <div id="login-forgot" class="content-box modal-content hide">
                <div class="content-box-wrapper pad20A">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address:</label>
                        <div class="input-group">
                            <span class="input-group-addon addon-inside bg-gray">
                                <i class="glyph-icon icon-envelope-o"></i>
                            </span>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                    </div>
                </div>
                <div class="button-pane text-center">
                    <button type="submit" class="btn btn-md btn-primary">Recover Password</button>
                    <a href="#" class="btn btn-md btn-link switch-button" switch-target="#login-form" switch-parent="#login-forgot" title="Cancel">Cancel</a>
                </div>
            </div>

        </form>

    </div>
</div>



    

    <script type="text/javascript" src="<?php echo base_url() ?>assets/adminpanel/assets-minified\all-demo.js"></script>

<script type="text/javascript" src="<?php echo base_url() ?>assets/adminpanel/assets-minified\widgets\parsley\parsley.js"></script>


        
    </body>
</html>
