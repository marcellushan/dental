 <div class="main container">

	<form action='<?=base_url("applicant/put/returning")?>' method="post">
			<fieldset class="mytitle">
						<h2>&nbsp;Please explain disciplinary action and include any documentation</h2>
						<div class="row">
					<textarea rows="5" class="form-control" cols="" name="discipline"><?=$applicant->discipline ?></textarea>

						<div class="wrapper">
				<button type="submit" class="btn-lg btn-primary">Update</button>
			</div>
			 </fieldset>
		</form>

