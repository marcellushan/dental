 <div class="main container">
	<h1 class= "mytitle">BSDH PROGRAM QUESTIONS</h1>
<?php echo validation_errors(); ?>
	<form action='<?=base_url("home/updateApplicant/view_sections")?>' method="post">
		<div class="row">
				<h3 class="col-md-7">How do you plan to attend the program?</h3>
			<div class="col-md-5">
				<h3><input type="radio" name="student_type" value="1" <?=(@$applicant->student_type ? "checked" :"" )?>>Fulltime (3 semesters)</h3>
				<h3><input type="radio" name="student_type" value="0"  <?=(! @$applicant->student_type ? "checked" :"" )?>>Part-time (4 semesters)</h3>
			</div><!-- col-md-5 -->
		</div><!-- row -->
		<div class="row">
				<h3 class="col-md-5">How did you hear about our program?</h3>
				<div class="col-md-7">
					<textarea rows="5" class="form-control" cols="" name="hear"><?=$applicant->hear ?></textarea>
				</div>
		</div><!-- row -->
		
			<div class="wrapper">			
        <button type="submit" class="btn-lg btn-primary">Update Program</button>
        	    </div>
	</form>


</div><!-- container -->
              