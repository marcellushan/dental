<div class="main container">
    <h1 class= "mytitle">
        Name:  <?=$applicant->first_name?>   <?=$applicant->middle_name?> <?=$applicant->last_name?>
    </h1>
    <div>
        <h2  class= "mytitle">Application Status</h2>
        <div class="row">
            <h3 class="col-md-5 col-md-offset-2">Application Date</h3>
            <h3 class="item col-md-5"><?=$applicant->application_date?></h3>
        </div>

        <div class="section-border">
            <form method="post" action="../verify/<?=$applicant->applicant_id ?>">
                <h2  class= "mytitle">Personal Information</h2>
                <div class="row">
                    <h4 class="col-md-1">Birthdate</h4>
                    <h4 class="item col-md-2"><?=$applicant->birth_date?></h4>
                    <h4 class="col-md-1">GHC ID</h4>
                    <h4 class="item col-md-2"><?=($applicant->GHC_ID ? $applicant->GHC_ID : "None Provided") ?></h4>
                    <h4 class="col-md-1">Address</h4>
                    <h4 class="item col-md-4"><?=$applicant->street?>, <?=$applicant->city?> <?=$applicant->state?>, <?=$applicant->zip?></h4>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h3>&nbsp;Identification</h3>
                        <div class="row">
                            <h4 class="col-md-4">Submission Date</h4>
                            <h4 class="col-md-3"><?=$identification->submission_date?></h4>
                            <h4 class="col-md-3"><a href="<?=$identification->image?>" target="_blank">Image</a></h4>
                        </div><!-- row -->
                        <h3>&nbsp;CPR Certification</h3>
                        <div class="row">
                            <h4 class="col-md-4">Submission Date</h4>
                            <h4 class="col-md-3"><?=$cpr->submission_date?></h4>
                            <h4 class="col-md-3"><a href="<?=$cpr->image?>" target="_blank">Image</a></h4>
                        </div><!-- row -->
                    </div><!--col-md-6 -->
                    <div class="col-md-6">
                        <h3>Phone Numbers</h3>
                        <div class="row">
                            <h4 class="col-md-5">Preferred</h4>
                            <h4 class="item col-md-6"><?=$applicant->preferred_phone?></h4>
                            <h4 class="col-md-5">Backup</h4>
                            <h4 class="item col-md-6"><?=($applicant->backup_phone ? $applicant->backup_phone : "None Provided")?>
                        </div><!-- row -->
                        <h3>Email Addresses</h3>
                        <div class="row">
                            <h4 class="col-md-5">Preferred</h4>
                            <h4 class="item col-md-6"><?=$applicant->preferred_email?></h4>
                            <h4 class="col-md-5">Backup</h4>
                            <h4 class="item col-md-6"><?=($applicant->backup_email ? $applicant->backup_email : "None Provided")?>
                        </div><!-- row -->
                    </div><!--col-md-6 -->
                </div><!-- row -->
        </div><!-- section-border -->
        <h3 class="wrapper">School</h3>
        <div class="row">
            <h4 class="col-md-1">Name</h4>
            <h4 class="item col-md-2"><?=$school->name?></h4>
            <h4 class="col-md-1">State</h4>
            <h4 class="item col-md-2"><?=$school->state?></h4>
            <h4 class="col-md-2">Graduation Year</h4>
            <h4 class="item col-md-2"><?=$school->year?></h4>
        </div><!-- row -->
        <div class="section-border">
            <h3 class="wrapper">License(s)</h3>
            <div class="row">
                <?php foreach ($licenses as $license):?>
                    <h4 class="col-md-2">State of Licensure</h4>
                    <h4 class="item col-md-1"><?=$license->state?></h4>
                    <h4 class="col-md-2">License Number</h4>
                    <h4 class="item col-md-1"><?=$license->number?></h4>
                    <h4 class="col-md-1">Active</h4>
                    <h4 class="item col-md-2"><? echo ($license->active ? "Yes" : "No"); ?></h4>
                    <h4 class="col-md-1"><a href="<?=$license->image?>" target="_blank">Image</a></h4>

                <?php endforeach;?>
            </div><!-- row -->
        </div><!-- section-border -->
        <h3 class="wrapper">Other Information</h3>
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
            <h3 class="wrapper">Employer(s)</h3>
            <div class="row">
                <?php foreach ($employers as $employer):?>
                    <h4 class="col-md-2">Company</h4>
                    <h4 class="item col-md-3"><?=$employer->company?></h4>
                    <h4 class="col-md-2">Phone</h4>
                    <h4 class="item col-md-3"><?=$employer->phone?></h4>
                <?php endforeach;?>
            </div><!-- row -->
        </div><!-- section-border -->
        <h3 class="wrapper">Program Questions</h3>
        <div class="row">
            <h4 class="col-md-3">How do you plan to attend?</h4>
            <h4 class="item col-md-8"><? echo ($applicant->student_type ? "Full Time" : "Part Time"); ?></h4>
            <h4 class="col-md-3">How did you hear about us?</h4>
            <h4 class="item col-md-8"><?=$applicant->hear ?></h4>
        </div><!-- row -->
        <div class="section-border">
            <h3 class="wrapper">Demographics</h3>
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
            <div class="wrapper"> <input type="submit" class="btn btn-info btn-lg" value="Update"></div>
            <p></p>
        </div><!-- section-border -->
        </form>
    </div><!-- main container -->

