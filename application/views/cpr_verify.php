 <div class="main container">
	<h1 class= "mytitle">Verify Image	</h1>


				
	 <form action="<? echo base_url() ?>admin/put/<?=$applicant->applicant_id ?>" method="post" >
		 <input type="hidden" name="cpr_verified" value="1">
		 <input type="hidden" name="cpr_verified_date" value="<?=date('Y-m-d') ?>">
		 <input type="hidden" name="cpr_verified_by" value="<?=$admin ?>">


		 <img class="img-responsive" src="<?=$applicant->cpr ?>">

		 <input type="submit" class="btn btn-lg btn-success" value="Verify">
		 <input type="button" class="btn btn-lg btn-danger" onclick="window.location.href='<? echo base_url() ?>admin/get/<?=$applicant->applicant_id ?>'" value="Return To Application">


	 </form>

</div><!-- container -->
              