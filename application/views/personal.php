 <div class="main container">
 	<h1 class= "mytitle">
	APPLICANT PERSONAL INFORMATION
	</h1>
	 <? (@$edit ? $destination="edit" : $destination = "identification") ?>
	<form action='<?=base_url("applicant/put/" . $destination)?>' id="personal" method="post">
		<fieldset>
			<h2>Name</h2>
				<div class="row">
					
                    <div class="col-md-2"><label id="first_name">First </label></div>
                    <div class="col-md-2" ><input type="text" name="first_name" placeholder="required"  class="form-control" value="<?=@$applicant->first_name ?>"></div>
					<div class="col-md-1"><label id="first_name">Middle </label></div>
					<div class="col-md-2" ><input type="text" name="middle_name" class="form-control" value="<?=@$applicant->middle_name ?>"></div>
                    <div class="col-md-2"><label id="last_name">Last </label></div>
                    <div class="col-md-2" ><input type="text" name="last_name" placeholder="required" class="form-control" value="<?=@$applicant->last_name ?>"></div>


				</div><!-- row -->
				<div class="row">
                    <div class="col-md-2"><label>Date of Birth</label></div>
                        <div class="col-md-2"><input type="date" name="birth_date" placeholder="YYYY-MM-DD" class="form-control" value="<?=@$applicant->birth_date ?>"></div>
					<div class="col-md-1"><label>Maiden </label></div>
					<div class="col-md-2"><input type="text"  name="maiden_name" value="<?=@$applicant->maiden_name ?>" class="form-control" placeholder="if applicable"></div>
				</div><!-- row -->
			<div class="row">
				<h2 class="col-md-6">Address</h2>
			</div><!-- row -->
			<div class="row">
                <div class="col-md-2"><label>Street</label></div>
                <div><input type="text" class="col-md-6" name="street" placeholder="required" class="form-control"
                            value="<?=@$applicant->street?>"></div>
            </div><!--row-->
            <div class="row">
                <div class="col-md-2"><label>City</label></div>
                <div><input type="text" class="col-md-6" name="city" placeholder="required" class="form-control"
                            value="<?=@$applicant->city?>"></div>
            </div><!--row-->
            <div class="row">
						<label class="col-md-2">State</label>
							<? if(@$edit) :?>
								<div><input type="text"  class="col-md-2" name="state" class="form-control" value="<?=@$applicant->state?>" ></div>
							<? else: ?>
								<select class="col-md-2" name="state" class="form-control" >
									<option value="GA">GA</option>
										<?php
											foreach ($states as $state):?>
										  <option value="<?=$state->abbreviation?>"><?=$state->abbreviation?></option>
											<? endforeach;?>
								</select>
							<? endif; ?>
                        <div><label class="col-md-2">Zip</label></div>
						<div><input type="text"  class="col-md-2" name="zip" class="form-control" value="<?=@$applicant->zip?>" placeholder="required" ></div>
				</div><!-- row -->

			<div class="row">
				<h2 class="col-md-6">Phone and Email</h2>

			</div><!-- row -->

			<div class="row">
				<div class="col-md-3"><label>Preferred Phone</label></div>
				<div class="col-md-3"><input type="phone" name="preferred_phone" placeholder="required"
                                             class="form-control" value="<?=@$applicant->preferred_phone?>"></div>
				<div class="col-md-3"><label>Backup Phone</label></div>
				<div class="col-md-3"><input type="text" name="backup_phone" class="form-control" value="<?=@$applicant->backup_phone?>" placeholder="optional"></div>
				</div><!-- row -->
			<div class="row">
				<div class="col-md-3"><label>Preferred Email</label></div>
				<div class="col-md-3"><input type="phone" name="preferred_email" placeholder="required"
                                             class="form-control" value="<?=@$applicant->preferred_email?>" disabled></div>
				<div class="col-md-3"><label>Backup Email</label></div>
				<div class="col-md-3"><input type="text" name="backup_email" class="form-control" value="<?=@$applicant->backup_email?>" placeholder="optional"></div>
			</div><!-- row -->



	
			<div class="wrapper">
				<button type="submit" class="btn-md btn-primary">Next</button>
			</div>
   		</fieldset>
	</form>

	   
	
	 <br>
</div><!-- container -->
              