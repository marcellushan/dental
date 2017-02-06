<div class="main container">
    <h1 class= "mytitle">
        Name:  <?=$applicant->first_name?>   <?=$applicant->applicant_id ?><?=$applicant->middle_name?> <?=$applicant->last_name?>
    </h1>
    <div>
        <div class="row">
            <div class="col-md-2 col-md-offset-4">
                <input type="button" class="btn btn-info btn-lg" onclick="window.location.href='../returningapplicant/get/returning_personal'"value="Update">
            </div>
            <div class="col-md-3">
                <input type="button" class="btn btn-info btn-lg" onclick="window.location.href='../returningapplicant/get/returning_personal'"value="Submit">
            </div>
        </div>
        
              <div class="section-border">
                <h2  class= "mytitle">Personal Information</h2>
            <div class="wrapper"></div>
                <div class="row">
                    <h4 class="col-md-1">Birthdate</h4>
                    <h4 class="item col-md-2"><?=$applicant->birth_date?></h4>
                    <h4 class="col-md-1">GHC ID</h4>
                    <h4 class="item col-md-2"><?=($applicant->GHC_ID ? $applicant->GHC_ID : "None Provided") ?></h4>
                    <h4 class="col-md-1">Address</h4>
                    <h4 class="item col-md-4"><?=$applicant->street?>, <?=$applicant->city?> <?=$applicant->state?>, <?=$applicant->zip?></h4>
                </div>
            <div class="row">
                <h4 class="col-md-1">Preferred Phone</h4>
                <h4 class="item col-md-2"><?=$applicant->preferred_phone?></h4>
                <h4 class="col-md-1">Backup Phone</h4>
                <h4 class="item col-md-2"><?=($applicant->backup_phone ? $applicant->backup_phone : "None Provided")?></h4>
                <h4 class="col-md-1">Preferred Email</h4>
                <h4 class="item col-md-2"><?=$applicant->preferred_email?></h4>
                <h4 class="col-md-1">Backup Email</h4>
                <h4 class="item col-md-1"><?=($applicant->backup_email ? $applicant->backup_phone : "None Provided")?></h4>
            </div>


        </div><!-- section-border -->
                <div class="row">
                    <div class="col-md-12">
                        <h3>&nbsp;Identification&nbsp;</h3>
                        <div class="row">
                            <h4 class="col-md-3">Submission Date</h4>
                            <h4 class="col-md-2"><?=$identification->submission_date?></h4>
                            <h4 class="col-md-2"><a href="<?=$identification->image?>" target="_blank">Image</a></h4>

                        </div><!-- row -->
                        <h3>&nbsp;CPR Certification</h3>
                        <div class="row">
                            <h4 class="col-md-3">Submission Date</h4>
                            <h4 class="col-md-2"><?=$cpr->submission_date?></h4>
                            <h4 class="col-md-2"><a href="<?=$cpr->image?>" target="_blank">Image</a></h4>
                        </div><!-- row -->
                    </div><!--col-md-6 -->

                </div><!-- row -->
        <h3 class="wrapper">School</h3>
        <div class="row">
            <h4 class="col-md-1">Name</h4>
            <h4 class="item col-md-2"><?=$school->name?></h4>
            <h4 class="col-md-1">State</h4>
            <h4 class="item col-md-1"><?=$school->state?></h4>
            <h4 class="col-md-2">Graduation Year</h4>
            <h4 class="item col-md-2"><?=$school->year?></h4>
        </div><!-- row -->
        <div class="section-border">
            <h3 class="wrapper"><?=(@license?"License(s)":"No Licenses Provided");?>&nbsp;</h3>
            <div class="row">
                <?php foreach ($licenses as $license):?>
                    <h4 class="col-md-2">State of Licensure</h4>
                    <h4 class="item col-md-1"><?=$license->state?></h4>
                    <h4 class="col-md-2">License Number</h4>
                    <h4 class="item col-md-1"><?=$license->number?></h4>
                    <h4 class="col-md-1">Active</h4>
                    <h4 class="item col-md-1"><? echo ($license->active ? "Yes" : "No"); ?></h4>
                    <h4 class="col-md-2"><a href="<?=$license->image?>" target="_blank">Image</a></h4>


                <?php endforeach;?>
            </div><!-- row -->
        </div><!-- section-border -->
        <h3 class="wrapper">Other Information&nbsp;</h3>
        <div class="row">
            <h4 class="col-md-3">Disciplinary Action?</h4>
            <h4 class="item col-md-8"><? echo ($applicant->discipline ? "Yes" : "No"); ?></h4>
            <? if($applicant->discipline):?>
                <h4 class="col-md-3">Explanation</h4>
                <h4 class="item col-md-8"><?=$applicant->discipline ?></h4>
            <? endif;?>
        </div><!-- row -->
        <h3 class="wrapper">Emergency Contact</h3>
        <div class="row">
            <h4 class="col-md-1">Name</h4>
            <h4 class="item col-md-2"><?=$applicant->e_last_name?>, <?=$applicant->e_first_name?></h4>
            <h4 class="col-md-1">Relationship</h4>
            <h4 class="item col-md-2"><?=$applicant->relationship?></h4>
            <h4 class="col-md-1">Address</h4>
            <h4 class="item col-md-4"><?=$applicant->e_street?>, <?=$applicant->e_city?> <?=$applicant->e_state?>, <?=$applicant->e_zip?></h4>
        </div><!-- row  -->
        <h3 class="wrapper">Phone Numbers</h3>
        <div class="row">
            <h4 class="col-md-2">Preferred</h4>
            <h4 class="item col-md-3"><?=$applicant->e_preferred_phone?></h4>
            <h4 class="col-md-2">Backup</h4>
            <h4 class="item col-md-3"><?=($applicant->e_backup_phone ? $applicant->e_backup_phone : "None Provided")?></h4>
        </div><!-- row -->
        <div class="section-border">
            <h3 class="wrapper"><?=(@$employers?"Employer(s)":"No Employers Provided");?></h3>
            <div class="row">
                <?php foreach ($employers as $employer):?>
                    <h4 class="col-md-2">Company</h4>
                    <h4 class="item col-md-3"><?=$employer->company?></h4>
                    <h4 class="col-md-2">Phone</h4>
                    <h4 class="item col-md-3"><?=$employer->phone?>&nbsp;<</h4>
                <?php endforeach;?>
            </div><!-- row -->
        </div><!-- section-border -->
        <h3 class="wrapper">Program Questions&nbsp;</h3>
        <div class="row">
            <h4 class="col-md-3">How do you plan to attend?</h4>
            <h4 class="item col-md-8"><? echo ($applicant->student_type ? "Full Time" : "Part Time"); ?></h4>
            <h4 class="col-md-3">How did you hear about us?</h4>
            <h4 class="item col-md-8"><?=$applicant->hear ?></h4>
        </div><!-- row -->
        <div class="section-border">
            <h3 class="wrapper">Demographics&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
            <div class="row">
                <h4 class="col-md-1">Race:</h4>
                <h4 class="item col-md-4"><?=$race->race_text?></h4>
                <h4 class="col-md-1">Gender:</h4>
                <h4 class="item col-md-1"><? echo ($applicant->gender ? "Male" : "Female"); ?></h4>
                <h4 class="col-md-1">Latino:</h4>
                <h4 class="item col-md-1"><? echo ($applicant->latino ? "Yes" : "No"); ?></h4>
                <h4 class="col-md-1">Foreign?</h4>
                <h4 class="item col-md-1"><? echo ($applicant->foreign ? "Yes" : "No"); ?></h4>
            </div><!-- row -->
            <p></p>
        </div><!-- section-border -->
        </form>
    </div><!-- main container -->

