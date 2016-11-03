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
	 <?php foreach ($applications as $application): ?>
	 	<tr>
	 		<td><?=$application->last_name?></td>
	 		<td><?=$application->first_name?></td>
	 		<td><?=$application->GHC_ID?></td>
	 		<td><a href="index/<?=$application->application_id?>">View Application</a></td>
	 	</tr>
	 <?php endforeach;?>
</table>
	
 
 
 
 