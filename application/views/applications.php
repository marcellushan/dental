 <div class="main container">
 <h1 class= "mytitle">
	ALL APPLICATIONS
</h1>

<table class="table table-striped table-responsive">
	<thead>
		<tr>
			<th>Last Name</th>
			<th>First Name</th>
			<th>GHC ID</th>
			<th></th>
		</tr>
	</thead>
	 <?php foreach ($applicants as $applicant): ?>
	 	<tr>
	 		<td><?=$applicant->last_name?></td>
	 		<td><?=$applicant->first_name?></td>
	 		<td><?=$applicant->GHC_ID?></td>
	 		<td><a href="<? echo base_url('/admin/get') ?>/<?=$applicant->applicant_id?>">View Application</a></td>
	 	</tr>
	 <?php endforeach;?>
</table>
	
 
 
 
 