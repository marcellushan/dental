<div class="main container">
    <h3 class="mytitle">Admission Information</h3>

    <h1 class= "mytitle">
        APPLICANT PERSONAL INFORMATION
    </h1>
    <form action='<?=base_url("applicant/put/identification")?>' id="personal" method="post">
        <fieldset>
            <h2>Name</h2>
            <div class="row">

                <div class="col-sm-2 col-xs-5"><label id="first_name">First </label></div>
                <div class="col-sm-2 col-xs-6" ><input type="text" name="first_name" placeholder="required" value="<?=@$applicant->first_name?>"></div>
                <label class="col-sm-2 col-xs-5" >Middle</label><input type="text" class="col-sm-2 col-xs-6"  name="middle_name" value="<?=@$applicant->middle_name?>">
                <div class="col-sm-2 col-xs-5"><label id="last_name">Last </label></div>
                <div class="col-sm-2 col-xs-6" ><input type="text" name="last_name" placeholder="required"  value="<?=@$applicant->last_name?>"></div>


            </div><!-- row -->
            <div class="row">
                <div class="col-sm-2 col-xs-5"><label>Date of Birth</label></div>
                <div class="col-sm-2 col-xs-6"><input type="date" name="birth_date" placeholder="MM/DD/YYY" value="<?=@$applicant->birth_date ?>" ></div>
                <label class="col-sm-2 col-xs-5" >Maiden </label><input type="text" class="col-sm-2 col-xs-6"  name="maiden_name" value="<?=@$applicant->maiden_name?>" placeholder="if applicable">
            </div><!-- row -->
            <div class="row">
                <h2 class="col-lg-6 col-xs-12">Address</h2>
                <h2 class="col-lg-6 visible-lg">Phone and Email</h2>
            </div><!-- row -->
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="row">
                        <div class="col-lg-2 col-xs-4"><label>Street</label></div><div><input type="text" class="col-lg-10 col-xs-7" name="street" placeholder="required" value="<?=@$applicant->street?>"></div>
                        <div class="col-lg-2 col-xs-4"><label>City</label></div><div><input type="text" class="col-lg-4 col-xs-7" name="city" placeholder="required" value="<?=@$applicant->city?>"></div>
                        <label class="col-lg-1 col-xs-4">State</label>	<select class="col-lg-1 col-xs-7" name="state">
                            <option value="GA">GA</option>
                            <?php
                            foreach ($states as $state):?>
                                <option value="<?=$state->abbreviation?>"><?=$state->abbreviation?></option>
                            <? endforeach;?>
                        </select>
                        <div><label class="col-lg-2 col-xs-12">Zip</label></div><div><input type="text"  class="col-lg-2 col-xs-6" name="zip" value="<?=@$applicant->zip?>" ></div>
                    </div><!-- row -->
                </div><!-- col-md-6 col-xs-12 -->
                <div class="col-md-6 col-xs-12">
                    <div class="row">
                        <label class="col-xs-5">Preferred Phone</label><input type="phone" class="col-xs-6" name="preferred_phone" placeholder="required" value="<?=@$applicant->preferred_phone?>">
                        <label class="col-xs-5">Backup Phone</label><input type="text" class="col-xs-6" name="backup_phone" value="<?=@$applicant->backup_phone?>">
                        <label class="col-xs-5">Preferred Email</label><input type="text" class="col-xs-6" name="preferred_email" placeholder="required" value="<?=@$applicant->preferred_email?>">
                        <label class="col-xs-5">Backup Email</label><input type="text" class="col-xs-6" name="backup_email" value="<?=@$applicant->backup_email?>" >
                    </div><!-- row -->
                </div><!-- col-md-6 col-xs-12 -->
            </div><!-- row -->

            <div class="wrapper">
                <button type="submit" class="btn-lg btn-primary">Next</button>
            </div>
        </fieldset>
    </form>



    <br>
</div><!-- container -->
              