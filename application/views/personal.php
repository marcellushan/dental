 <div class="main container">
 <h3 class="mytitle">Admission Information</h3>
 
 	<h1 class= "mytitle">
	APPLICANT PERSONAL INFORMATION <?=@$edit ?>
	</h1>
	 <? (@$edit ? $destination="edit" : $destination = "identification") ?>
	<form action='<?=base_url("applicant/put/" . $destination)?>' id="personal" method="post">
		<fieldset>
			<h2>Name</h2>
				<div class="row">
					
                    <div class="col-md-2"><label id="first_name">First </label></div>
                    <div class="col-md-2" ><input type="text" name="first_name" placeholder="required"  value="<?=@$applicant->first_name ?>" required></div>
					<div class="col-md-1"><label id="first_name">Middle </label></div>
					<div class="col-md-2" ><input type="text" name="middle_name" value="<?=@$applicant->middle_name ?>"></div>
                    <div class="col-md-2"><label id="last_name">Last </label></div>
                    <div class="col-md-2" ><input type="text" name="last_name" placeholder="required" value="<?=@$applicant->last_name ?>" required></div>


				</div><!-- row -->
				<div class="row">
                    <div class="col-md-2"><label>Date of Birth</label></div>
                        <div class="col-md-2"><input type="date" name="birth_date" placeholder="MM/DD/YYY" value="<?=@$applicant->birth_date ?>" required ></div>
					<div class="col-md-1"><label>Maiden </label></div>
					<div class="col-md-2"><input type="text"  name="maiden_name" value="<?=@$applicant->maiden_name ?>" placeholder="if applicable"></div>
				</div><!-- row -->
			<div class="row">
				<h2 class="col-md-6">Address</h2>

			</div><!-- row -->
			<div class="row">
                        <div class="col-md-2"><label>Street</label></div>
						<div><input type="text" class="col-md-10" name="street" placeholder="required" value="<?=@$applicant->street?>"></div>
                        <div class="col-md-2"><label>City</label></div>
						<div><input type="text" class="col-md-10" name="city" placeholder="required" value="<?=@$applicant->city?>"></div>
						<label class="col-md-2">State</label>
							<? if(@$edit) :?>
								<div><input type="text"  class="col-md-2" name="state" value="<?=@$applicant->state?>" ></div>
							<? else: ?>
								<select class="col-md-2" name="state">
									<option value="GA">GA</option>
										<?php
											foreach ($states as $state):?>
										  <option value="<?=$state->abbreviation?>"><?=$state->abbreviation?></option>
											<? endforeach;?>
								</select>
							<? endif; ?>
                        <div><label class="col-md-2">Zip</label></div>
						<div><input type="text"  class="col-md-2" name="zip" value="<?=@$applicant->zip?>" ></div>
				</div><!-- row -->

			<div class="row">
				<h2 class="col-md-6">Phone and Email</h2>

			</div><!-- row -->

			<div class="row">
				<div class="col-md-3"><label>Preferred Phone</label></div>
				<div class="col-md-3"><input type="phone" name="preferred_phone" placeholder="required" value="<?=@$applicant->preferred_phone?>"></div>
				<div class="col-md-3"><label>Backup Phone</label></div>
				<div class="col-md-3"><input type="text" name="backup_phone" value="<?=@$applicant->backup_phone?>"></div>
				</div><!-- row -->
			<div class="row">
				<div class="col-md-3"><label>Preferred Email</label></div>
				<div class="col-md-3"><input type="phone" name="preferred_email" placeholder="required" value="<?=@$applicant->preferred_email?>"></div>
				<div class="col-md-3"><label>Backup Email</label></div>
				<div class="col-md-3"><input type="text" name="backup_email" value="<?=@$applicant->backup_email?>"></div>
			</div><!-- row -->



	
			<div class="wrapper">
				<button type="submit" class="btn-md btn-primary">Next</button>
			</div>
   		</fieldset>
	</form>

	   
	
	 <br>
</div><!-- container -->
              