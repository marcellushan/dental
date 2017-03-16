 <div class="main container">
	<h1 class= "mytitle">
	EMERGENCY CONTACT INFORMATION
	</h1>

     <? (@$edit ? $destination="edit" : $destination = "employed") ?>
	<form action='<?=base_url("applicant/put/" . $destination)?>' id="emergency" method="post">
		<fieldset>
			<h2>Name</h2>
				<div class="row">
					<div class="col-sm-2 col-xs-5"> <label>First</label></div><div class="col-sm-2 col-xs-6"><input type="text" name="e_first_name" value="<?=@$applicant->e_first_name ?>" placeholder="required"></div>
					<div class="col-sm-2 col-xs-5"> <label>Last</label></div><div class="col-sm-2 col-xs-6"><input type="text" name="e_last_name" value="<?=@$applicant->e_last_name ?>" placeholder="required"></div>
					<label class="col-sm-2 col-xs-5" >Relationship</label>
					<? if(@$edit) :?>
						<div><input type="text"  class="col-md-2" name="relationship" value="<?=@$applicant->relationship?>" ></div>
					<? else: ?>
						<select class="col-lg-1 col-xs-7" name="relationship" required>
							<option value="">Select</option>
							<option value="Parent">Parent</option>
							<option value="Spouse">Spouse</option>
							<option value="Sibling">Sibling</option>
							<option value="Other Relative">Other Relative</option>
							<option value="Friend">Friend</option>
						</select>
					<? endif; ?>
				</div><!-- row -->
            <div class="row">
                <h2 class="col-md-6">Address</h2>
            </div><!-- row -->
            <div class="row">
                <div class="col-md-2"><label>Street</label></div>
                <div><input type="text" class="col-md-6" name="e_street" placeholder="required" class="form-control"
                            value="<?=@$applicant->e_street?>"></div>
            </div><!--row-->
            <div class="row">
                <div class="col-md-2"><label>City</label></div>
                <div><input type="text" class="col-md-6" name="e_city" placeholder="required" class="form-control"
                            value="<?=@$applicant->e_city?>"></div>
            </div><!--row-->
            <div class="row">
                <label class="col-md-2">State</label>
                <? if(@$edit) :?>
                    <div><input type="text"  class="col-md-2" name="e_state" class="form-control" value="<?=@$applicant->e_state?>" ></div>
                <? else: ?>
                    <select class="col-md-2" name="e_state" class="form-control" >
                        <option value="GA">GA</option>
                        <?php
                        foreach ($states as $state):?>
                            <option value="<?=$state->abbreviation?>"><?=$state->abbreviation?></option>
                        <? endforeach;?>
                    </select>
                <? endif; ?>
                <div><label class="col-md-2">Zip</label></div>
                <div><input type="text"  class="col-md-2" name="e_zip" class="form-control" value="<?=@$applicant->e_zip?>" placeholder="required" ></div>
            </div><!-- row -->
            <div class="row">
                <h2 class="col-md-6">Phone and Email</h2>

            </div><!-- row -->

            <div class="row">
                <div class="col-md-3"><label>Preferred Phone</label></div>
                <div class="col-md-3"><input type="phone" name="e_preferred_phone" placeholder="required" class="form-control" value="<?=@$applicant->e_preferred_phone?>"></div>
                <div class="col-md-3"><label>Backup Phone</label></div>
                <div class="col-md-3"><input type="text" name="e_backup_phone" class="form-control" value="<?=@$applicant->e_backup_phone?>"  placeholder="optional"></div>
            </div><!-- row -->
            <div class="row">
                <div class="col-md-3"><label>Email</label></div>
                <div class="col-md-3"><input type="phone" name="e_email" placeholder="optional"
                                             class="form-control" value="<?=@$applicant->e_email?>"></div>
            </div><!-- row -->
	
			<div class="wrapper">
				<button type="submit" class="btn-lg btn-primary">Next</button>
			</div>
   		</fieldset>
	</form>

	   
	
	 <br>
</div><!-- container -->
              