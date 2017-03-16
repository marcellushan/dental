 <div class="main container">
	<h1 class= "mytitle">
		EMPLOYER INFORMATION
	</h1>
 <? if(@$employers):?>
 <h2>Existing Employer(s)</h2>
    <table class="table">
    	<tr>
    		<th>Submission Date</th>
    		<th>Company</th>
    		<th>Phone</th>
    		<th></th>
    		
    	</tr>
    	<? foreach ($employers as $employer):?>
    	<tr>
    		<td><?=$employer->submission_date ?></td>
    		<td><?=$employer->company ?></td>
    		<td><?=$employer->phone ?></td>
				<td><a href="<? echo base_url() ?>employer/get/<?=$employer->employer_id ?>" >Update</a>
				</td>

    	</tr>
    	<?php endforeach;?>
    </table>
    <? endif?>

     <div class="wrapper"><input type="button" class="btn btn-lg btn-info" onclick="window.location.href='<? echo base_url() ?>home/display/add_employer'"value="Add a New Employer"></div>
	
</div><!-- container -->
              