 <div class="main container">
	<h1 class= "mytitle">
	ADDRESS
	</h1>

<?php echo validation_errors(); ?>
	<?php echo form_open('home/phone'); ?>
		<fieldset>
			<div class="row">
				<div class="col-md-10 col-xs-12">
					<div class="row"><h3>
						<label class="col-lg-2 col-xs-4">Street</label><input type="text" class="col-lg-10 col-xs-7" name="street" placeholder="required" >
						<label class="col-lg-2 col-xs-4">City</label><input type="text" class="col-lg-4 col-xs-7" name="city" placeholder="required">
						<label class="col-lg-1 col-xs-4">State</label>	<select class="col-lg-1 col-xs-7" name="state">
																			<option value="GA">GA</option>
																				<?php
																					foreach ($states as $state):?>
																				  <option value="<?=$state->abbreviation?>"><?=$state->abbreviation?></option>
																					<? endforeach;?>
																				</select>
						<label class="col-lg-2 col-xs-12">Zip</label><input type="text" class="col-lg-2 col-xs-6" name="zip" ></h3>
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
              