 <div class="main container">
	<h1 class= "mytitle">
		EMPLOYER INFORMATION
	</h1>
 <? if(@$employers):?>
 <h2>Existing Employer(s)</h2>
    <table class="table">
    	<tr>
    		<th>Company</th>
    		<th>Phone Number</th>
    		
    	</tr>
    	<? foreach ($employers as $employer):?>
    	<tr>
    		<td><?=$employer->company ?></td>
    		<td><?=$employer->phone ?></td>
    	</tr>
    	<?php endforeach;?>
    </table>
    <? else :?>	
    
    No Employers listed
    
    <? endif?>

	
	
</div><!-- container -->
              