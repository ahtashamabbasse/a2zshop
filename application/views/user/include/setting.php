<div class="modal fade" id="changepass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h4 class="modal-title">Change Password</h4>
                    </div>
                    <div class="modal-body">
                       <form action="<?php echo base_url("shop/changepass")?>" id="brand_form" class="form-horizontal" data-parsley-validate="" novalidate="" method="post">
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Old Password
                
            </label>
            <div class="col-sm-8">
                <input class="form-control" type="password"  name="opass" id="opass" required > 
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                New Password
                
            </label>
            <div class="col-sm-8">
                <input class="form-control" type="password"  name="npass" id="npass" required > 
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Confirm Password
                
            </label>
            <div class="col-sm-8">
                <input class="form-control" type="password"  name="cpass" id="cpass" required > 
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
        <div class="modal fade" id="e_profile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h4 class="modal-title">Edit Profile</h4>
                    </div>
                    <div class="modal-body">
                       <form action="<?php echo base_url("shop/edit_profile")?>" id="brand_form" class="form-horizontal" data-parsley-validate="" novalidate="" method="post">
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Name
                
            </label>
            <div class="col-sm-8">
                <input class="form-control" type="text" value="<?php echo $c->c_name?>"  name="c_name" required="required" /> 
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Email
                
            </label>
            <div class="col-sm-8">
                <input class="form-control" type="email" value="<?php echo $c->c_email?>"  name="c_email" required="required" /> 
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Gender
                
            </label>
            <div class="col-sm-8">
                <label class="radio-inline">
                
                                <input type="radio" name="c_gender"  <?php $g=$c->c_gender;  if($g=="Female"){ echo "checked";}?> value="Female" required="required"/>Female
                </label>
                <label class="radio-inline">
                    <input type="radio" name="c_gender" <?php if($g=="Male"){ echo "checked";}?> value="Male" required="required"/>Male
                </label> 
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Contact No.
                
            </label>
            <div class="col-sm-8">
                <input class="form-control" type="number" value="<?php echo $c->c_contact?>"  name="c_contact"  required="required" />
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                Address
                
            </label>
            <div class="col-sm-8">
                <input class="form-control" type="text" value="<?php echo $c->c_address?>"  name="c_address"  required="required" />
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">
                City
                
            </label>
            <div class="col-sm-8">
                <select class="form-control" name="c_city" >
                    <option>Select City</option>
                    <option <?php echo ($c->c_city=='Faisalabad')?'selected="selected"':''; ?> value="Faisalabad">Faisalabad</option>
                    <option <?php echo ($c->c_city=='Lahore')?'selected="selected"':''; ?> value="Lahore">Lahore</option>
                    <option <?php echo ($c->c_city=='Karachi')?'selected="selected"':''; ?> value="Karachi">Karachi</option>
                    <option <?php echo ($c->c_city=='Islamabad')?'selected="selected"':''; ?> value="Islamabad">Islamabad</option>
                    <option <?php echo ($c->c_city=='Jhang')?'selected="selected"':''; ?> value="Jhang">Jhang</option>
                    <option <?php echo ($c->c_city=='Quetta')?'selected="selected"':''; ?> value="Quetta">Quetta</option>
                    <option <?php echo ($c->c_city=='Rawalpindi')?'selected="selected"':''; ?> value="Rawalpindi">Rawalpindi</option>
                    <option <?php echo ($c->c_city=='Sadiqabad')?'selected="selected"':''; ?> value="Sadiqabad">Sadiqabad</option>
                    <option <?php echo ($c->c_city=='Rahim Yar Khan')?'selected="selected"':''; ?> value="Rahim Yar Khan">Rahim Yar Khan</option>
                    <option <?php echo ($c->c_city=='Sargodha')?'selected="selected"':''; ?> value="Sargodha">Sargodha</option>
                    <option <?php echo ($c->c_city=='Peshawar')?'selected="selected"':''; ?> value="Peshawar">Peshawar</option>
                    <option <?php echo ($c->c_city=='Multan')?'selected="selected"':''; ?> value="Multan">Multan</option>
                    <option <?php echo ($c->c_city=='Bahawalpur')?'selected="selected"':''; ?> value="Bahawalpur">Bahawalpur</option>
                </select>
            </div>
        </div>
        
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" value="<?php echo $c->c_id;?>" name="c_id" />
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" id="add_brand" class="btn btn-primary" >Save changes</button>
                    </div>
                </div>
                </form>
            </div>
        </div>