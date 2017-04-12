<div class="main container">
    <div class="row">
		<div class="col-sm-8  right-border">
            <h1 class="wrapper">New Applicants</h1>
            <h2 class="mytitle">Application for Admission RDH/BSDH PROGRAM</h2>

            <h2 class="wrapper">Application Due Date May 1, 2017</h2>

            <h3>The admission process is competitive and a minimum cumulative GPA of 2.5 out of 4.0 is required for consideration.</h3>
            <h3>Acceptance is based on cumulative GPA, completed application and supporting materials. Classes will begin in the Summer.</h3>
            <h3>
                <form action="<?=base_url("home/display/create_applicant")?>" method="post" id="welcome">
                    <input type="checkbox" name="identification"> I have current copy of one of the following forms of identification</h3>
                    <h4>
                        <ul>
                            <li>Valid State issued Driver's License</li>
                            <li>Valid State issued Identification Card</li>
                            <li>Valid Federal Passport</li>
                        </ul>
                    </h4>
                    <h3>
                        <input type="checkbox" name="cpr"> I have copy of my current CPR Certificate
                        <br>
                        <input type="checkbox" name="emergency"> I have the Name and phone number of my emergency contact
                    </h3>
                    <h3>
                        <input type="checkbox" name="hygienist"> At least one of the following is true:</h3>
                    <h4>
                        <ul>
                            <li>I am a currently licensed dental hygienist</li>
                            <li>I am currently enrolled in an AS Dental hygiene program</li>
                            <li>I am a recent graduate of a dental hygiene program</li>
                        </ul>

            <div class="mytitle"><div class="col-sm-4 col-sm-offset-4"><button type="submit"class="btn btn-lg btn-success">Continue to Application</button></div></div>
                </form>
        </div><!--col-sm-6 -->
        <div class="col-sm-4">
                <h1 class="wrapper">Returning Applicants</h1>
                <h3>Previous applicants login here to complete application or address issues</h3>
            <br>
            <h4>
                <form action='<?=base_url("home/checkLogin")?>' method="post" id="login">
                    <fieldset>
                        <div class="row">
                            <label class="col-md-5 col-sm-12">Email Address </label><input type="text"  class="col-md-5  col-sm-12" name="email">
                        </div><!--row -->
                        <div class="row">
                            <label class="col-md-5 col-sm-12">Password</label>
                            <input type="password"  class="col-md-5  col-sm-12" name="password" id="password" >
                        </div><!--row -->
                        <div class="row">
                            <div class="col-md-12 col-sm-12"><a href="<? echo base_url() ?>home/display/send_email">Forgot Password</a></div>

                        </div><!--row -->
                        <div class="row">
                            <div class="col-sm-4 col-sm-offset-4"><button type="submit"class="btn btn-sm btn-success">Submit</button></div>

                        </div>
                    </fieldset>
                </form>
            </h4>
        </div><!--col-sm-6 -->
     </div><!--row -->
    </div><!-- container -->


