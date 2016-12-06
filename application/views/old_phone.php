 <div class="main container">
	<?php echo form_open('home/driver'); ?>
		<fieldset>
			<div class="row">
				<div class="col-md-6">
				<h1 class="wrapper">Phone</h1>
						<h3><label>Preferred</label>&nbsp;<input type="text" name="main_phone" placeholder="required"></h3>
						<h3><label>Backup</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="backup_phone" placeholder="optional"></h3>
						<!-- <label>Backup Phone</label><input type="text" name="backup_phone" > -->
				</div>
				<div class="col-md-6">
				<h1 class="wrapper">Email</h1>
						<h3><label>Preferred</label>&nbsp;<input type="text"name="main_email" placeholder="required"></h3>
						<h3><label>Backup</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"name="backup_email" placeholder="optional"></h3>
						<!-- <label>Backup Phone</label><input type="text" name="backup_phone" > -->
				</div>

			</div>
			<div class="wrapper">
				<button type="submit" class="btn-lg btn-primary">Next</button>
			</div>
   		</fieldset>
	</form>

	   
	
	 <br>
</div><!-- container -->
              