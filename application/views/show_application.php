 <div class="main container">
	<h1 class= "mytitle">
	APPLICANT PERSONAL INFORMATION
	</h1>

	<h2  class= "mytitle">Name:  <?=$application->first_name?> <?=$application->middle_name?> <?=$application->last_name?></h2>
		<table class="responsive">
			<tr>
				<td>Date of Birth</td>
				<td><?=$application->birthdate?></td>
				<td>GHC ID</td>
				<td><?=$application->GHC_ID?></td>
			</tr>
			<tr>
				<td>Address</td>
				<td>
					<?=$application->street?>, <?=$application->city?> <?=$application->state?>, <?=$application->zip?>
				</td>
			</tr>
			<tr>
				<td>Phone Numbers</td>
				<td>
					<?=$application->home_phone?> <?=$application->cell_phone?>
				</td>
				<td>Email Addresses</td>
				 <td><?=$application->home_email?> <?=$application->work_email?></td>
			</tr>
			<tr>
				<td>School</td>
		<td><?=$school->name?>, <?=$school->year?>, <?=$school->state?></td>
		</tr>
		<tr>
			<td>License</td>
		</tr>
		
			
		<?php foreach ($licenses as $license)
		{
			echo "<tr>";
			echo "<td>$license->number</td>";
			echo "<td>$license->state</td>";
			echo "<td>$license->active</td>";
			echo "</tr>";
		}
?>

<tr>
				<td>Emergency</td>
		<td><?=$emergency->first_name?>, <?=$emergency->last_name?>, <?=$emergency->state?></td>
		</tr>
		<tr>
			<td>License</td>
		</tr>
		
		<?php foreach ($employers as $employer)
{
			echo "<tr>";
			echo "<td>$employer->company</td>";
			echo "<td>$employer->phone</td>";
			echo "<td>$employer->current</td>";
			echo "</tr>";
		}
		?>
		<tr>
			<td>Demographics</td>
			<td><?=$demo->fulltime?></td>
		</tr>


	</table>
	
	