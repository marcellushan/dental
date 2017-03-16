 <div class="main container">
 <h1 class= "mytitle">
	<? echo ($type ? strtoupper($type) : "ALL") ?> APPLICATIONS
</h1>
	 <h3 class="wrapper">Welcome <?=$admin ?></h3>
<? if ($applicants): ?>
<table class="table table-striped table-responsive">
	<thead>
		<tr>
			<th>Last Name</th>
			<th>First Name</th>
			<th>GHC ID</th>
			<th>Submission Date</th>
			<th>Complete Date</th>
			<th>Fund Date</th>
			<th></th>
		</tr>
	</thead>
	 <?php foreach ($applicants as $applicant): ?>
	 	<tr>
	 		<td><?=$applicant->last_name?></td>
	 		<td><?=$applicant->first_name?></td>
	 		<td><?=$applicant->GHC_ID?></td>
			<td><?=$applicant->submit_date?></td>
			<td><?=$applicant->complete_date?></td>
			<td><?=$applicant->funds_date?></td>
	 		<td><a href="<? echo base_url('/admin/get') ?>/<?=$applicant->applicant_id?>">View</a></td>
	 	</tr>
	 <?php endforeach;?>
</table>
	 <? else: ?>
	 <h2 class="wrapper">There are no <?=strtoupper($type) ?> Applications</h2>
	 <? endif; ?>
	
 
 
 
 