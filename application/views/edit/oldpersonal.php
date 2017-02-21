 <div class="main container">
 <h3 class="mytitle">Admission Information</h3>
 
	<h1 class= "mytitle">
	APPLICANT PERSONAL INFORMATION
	</h1>

	<form action='<?=base_url("applicant/put/returning")?>' id="personal" method="post">
		<fieldset>
			<h2>Name</h2>
				<div class="row">
					
					<label class="col-sm-2 col-xs-5" >First </label><input type="text" class="col-sm-2 col-xs-6" name="first_name" placeholder="required" value="<?=@$applicant->first_name?>">
					<label class="col-sm-2 col-xs-5" >Middle</label><input type="text" class="col-sm-2 col-xs-6"  name="middle_name" value="<?=@$applicant->middle_name?>">
					<label class="col-sm-1 col-xs-5" >Last</label><input type="text" class="col-sm-2 col-xs-6"  name="last_name" placeholder="required" value="<?=@$applicant->last_name?>">
				</div><!-- row -->
				<div class="row">
					<label class="col-sm-2 col-xs-5" >Date of Birth</label><input type="date" class="col-sm-2 col-xs-6"  name="birth_date" placeholder="required" value="<?=@$applicant->birth_date?>"" >
					 <?if(@$applicant->GHC_ID):?>
					<label class="col-sm-2 col-xs-5" >GHC ID</label><input type="text" class="col-sm-2 col-xs-6"  name="GHC_ID" placeholder="required" value="<?=@$applicant->GHC_ID?>" disabled>
					<?else:?>
					<label class="col-sm-2 col-xs-5" >GHC ID</label><input type="text" class="col-sm-2 col-xs-6"  name="GHC_ID" value="Not applicable" disabled>
					<?endif?>
					<label class="col-sm-1 col-xs-5" >Maiden </label><input type="text" class="col-sm-2 col-xs-6"  name="maiden_name" value="<?=@$applicant->maiden_name?>" placeholder="if applicable">
				</div><!-- row -->
			<div class="row">
				<h2 class="col-lg-6 col-xs-12">Address</h2>
				<h2 class="col-lg-6 visible-lg">Phone and Email</h2>
			</div><!-- row -->
			<div class="row">
				<div class="col-md-6 col-xs-12">
					<div class="row">
						<label class="col-lg-2 col-xs-4">Street</label><input type="text" class="col-lg-10 col-xs-7" name="street" placeholder="required" value="<?=@$applicant->street?>">
						<label class="col-lg-2 col-xs-4">City</label><input type="text" class="col-lg-4 col-xs-7" name="city" placeholder="required" value="<?=@$applicant->city?>">
						<label class="col-lg-1 col-xs-4">State</label><input type="text" class="col-lg-1 col-xs-6" name="state" value="<?=@$applicant->state?>" >
						<label class="col-lg-2 col-xs-12">Zip</label><input type="text" class="col-lg-2 col-xs-6" name="zip" value="<?=@$applicant->zip?>" >
					</div><!-- row -->
				</div><!-- col-md-6 col-xs-12 -->
				<div class="col-md-6 col-xs-12">
					<div class="row">
						<label class="col-xs-5">Preferred Phone</label><input type="text" class="col-xs-6" name="preferred_phone" placeholder="required" value="<?=@$applicant->preferred_phone?>">
						<label class="col-xs-5">Backup Phone</label><input type="text" class="col-xs-6" name="backup_phone" value="<?=@$applicant->backup_phone?>">
						<label class="col-xs-5">Preferred Email</label><input type="email" class="col-xs-6" name="preferred_email" placeholder="required" value="<?=@$applicant->preferred_email?>" disabled>
						<label class="col-xs-5">Backup Email</label><input type="email" class="col-xs-6" name="backup_email" value="<?=@$applicant->backup_email?>" >
					</div><!-- row -->
				</div><!-- col-md-6 col-xs-12 -->
			</div><!-- row -->
	
			<div class="wrapper">
				<button type="submit" class="btn-lg btn-primary">Update</button>
			</div>
   		</fieldset>
	</form>

	   
	
	 <br>
</div><!-- container -->
              