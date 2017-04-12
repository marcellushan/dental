
<div class="main container">
    <div class="row">
		<div class="col-sm-12">
            <h1 class="wrapper">Reset Dental Hygiene Application Password</h1>
            <br>
            <h4>
                <form action='<?=base_url("applicant/resetPassword")?>/<?=$id ?>' id="create" method="post">
                    <fieldset>
                    <div class="row">
                        <label class="col-md-5 col-sm-12">Reset Password</label>
                        <input type="password" class="col-md-5  col-sm-12" name="password" id="password" >
                    </div><!--row -->
                    <div class="row">
                        <label class="col-md-5 col-sm-12">Confirm Password</label><input type="password" class="col-md-5  col-sm-12" name="passconf" id="passconf"   >
                    </div><!--row -->
                    <div class="row">
                        <div class="col-sm-12 col-sm-offset-5"><button type="submit" class="btn btn-sm btn-success">Submit</button></div>
                    </div><!--row -->
                    </fieldset>
                </form>
            </h4>
        </div><!--col-sm-12 -->
     </div><!--row -->
    </div><!-- container -->


