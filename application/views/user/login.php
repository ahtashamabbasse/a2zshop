
<?php
echo @$msg;

 if($error=$this->session->flashdata("msg")) {
    $heading= $this->session->flashdata("heading");
    $class= $this->session->flashdata("class");
    ?>
    <br />
    <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="alert alert-<?php echo $class?> alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong><?php echo $heading?></strong> <?php echo $error?>
        </div>
    </div>
</div>
<?php }  ?>
<br />

        

		<!-- MAIN -->
		<main class="site-main">

            

            <div class="page-title-base container">
                <h1 class="title-base"></h1>
            </div>

            <div class="container">

                
                <div class="block-form-login">

                    <!-- block Create an Account -->
                    <div class="block-form-create">
                        <div class="block-title">
                            Create an Account
                        </div>
                        <form action="<?php echo base_url("shop/register")?>" method="post">
                        <div class="block-content">
                            <p>Please Enter Your Active Email Address to Create an Account!</p>
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" name="c_name" placeholder="Name"/>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" required="required" name="c_email"  placeholder="Email Address"/>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" required="required" name="c_pass" placeholder="Password "/>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" required="required" name="c_cpass" placeholder="Confirm Password"/>
                            </div>
                            
                            
                                <label class="radio-inline">
                                <input type="radio" name="c_gender" value="Female" required="required"/>Female
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="c_gender" value="Male" required="required"/>Male
                            </label>
                            
                            <br />
                            <br />
                            <div class="form-group">
                                <input type="number" class="form-control" required="required" name="c_contact" placeholder="Contact No."/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" name="c_address" placeholder="Enter an Address"/>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="c_city">
                                    <option>Select City</option>
                                    <option value="Faisalabad">Faisalabad</option>
                                    <option value="Lahore">Lahore</option>
                                    <option value="Karachi">Karachi</option>
                                    <option value="Islamabad">Islamabad</option>
                                    <option value="Jhang">Jhang</option>
                                    <option value="Quetta">Quetta</option>
                                    <option value="Rawalpindi">Rawalpindi</option>
                                    <option value="Sadiqabad">Sadiqabad</option>
                                    <option value="Rahim Yar Khan">Rahim Yar Khan</option>
                                    <option value="Sargodha">Sargodha</option>
                                    <option value="Peshawar">Peshawar</option>
                                    <option value="Multan">Multan</option>
                                    <option value="Bahawalpur">Bahawalpur</option>
                                </select>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                        </form>
                    </div><!-- block Create an Account -->

                    <!-- block Registered-->
                    <div class="block-form-registered">
                       
                        <div class="block-title">
                            Already Registered?
                        </div>
                        <div class="block-content">
                            <p>If you have an account please enter the username & password her</p>
                            <form action="<?php echo base_url("login/do_c_Login")?>" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="c_email" required="required" placeholder="Your Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="c_pass" required="required" placeholder="Password">
                                </div>
                                <!--<div class="checkbox checkbox-primary">
                                    <label>
                                        <input type="checkbox" class=""><span>Remember me!</span>
                                    </label>
                                </div>--!>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </form>
                        </div>
                        
                    </div><!-- block Registered-->

                </div>

                <!-- Forgot your password -->
                <div class="block-forgot-pass">
                    
                </div><!-- Forgot your password -->

            </div>

            
           
		<?php include("include/services.php")?>

        </main><!-- end MAIN -->

