 <div class="main container">
	<h1 class= "mytitle">Verify Image	</h1>


				
	 <form action="../../cpr/update/<?=$cpr->cpr_id ?>" method="post" >
		 <input type="hidden" name="verified" value="1">
		 <input type="hidden" name="verified_date" value="<?=date('Y-m-d') ?>">


		 <img class="img-responsive" src="<?=$cpr->image ?>">

		 <input type="submit" class="btn btn-lg btn-success" value="Verify">  <input type="button" class="btn btn-lg btn-danger" onclick="window.location.href='../'"value="Return To List">


	 </form>

</div><!-- container -->
              