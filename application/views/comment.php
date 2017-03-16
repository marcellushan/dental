 <div class="main container">

	<form action='<?=base_url("comment/post/" . $id)?>' method="post">
		<input type="hidden" name="admin" value="<?=$admin ?>">
			<fieldset class="mytitle">
						<h2>&nbsp;Add Comments for Application</h2>
						<div class="row">
					<textarea rows="5" class="form-control" cols="" name="comment"></textarea>

						<div class="wrapper">
				<button type="submit" class="btn-lg btn-primary">Submit</button>
			</div>
			 </fieldset>
		</form>

<!--test -->