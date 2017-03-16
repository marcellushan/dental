<div class="main container">
    <div class="row">
		<div class="col-sm-6  right-border">
            <h1 class="wrapper">New Applicants</h1>

            <h2>It is required that you create an account prior to submitting an application.</h2>

            <h2>Please create an an account using a valid email address and a unique password.</h2>

            <h4>
                <form action='<?=base_url("home/save")?>' id="create" method="post">
                    <fieldset>
                    <div class="row">
                            <label class="col-sm-3 col-sm-12">Email Address </label><input type="text" class="col-sm-4  col-sm-12" name="email">
                    </div><!--row -->
                    <div class="row">
                            <label class="col-sm-3">Create Password</label>
                        <input type="password" class="col-sm-4 " name="password" id="password" >
                    </div><!--row -->
                    <div class="row">
                            <label class="col-sm-3">Confirm Password</label><input type="password" class="col-sm-4" name="passconf" id="passconf"   >
                    </div><!--row -->
                    <div class="row">
                        <div class="col-sm-12 col-sm-offset-5"><button type="submit" class="btn btn-sm btn-success">Submit</button></div>
                    </div><!--row -->
                    </fieldset>
                </form>
            </h4>
        </div><!--col-sm-6 -->
        <div class="col-sm-6">
                <h1 class="wrapper">Returning Applicants</h1>
                <h2 class="wrapper">Please login using your email address and password</h2>
            <h4>
                <form action="../checkLogin" method="post" id="login">
                    <fieldset>
                        <div class="row">
                            <label class="col-sm-3">Email Address </label><input type="text" class="col-sm-4" name="email">
                        </div><!--row -->
                        <div class="row">
                            <label class="col-sm-3">Password</label>
                            <input type="password" class="col-sm-4 " name="password" id="password" >
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


