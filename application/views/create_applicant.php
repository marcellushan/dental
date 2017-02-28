<div class="main container">
    <div class="row">
		<div class="col-md-6  right-border">
            <h1 class="wrapper">New Applicants</h1>

            <h2>It is required that you create an account prior to submitting an application.</h2>

            <h2>Please create an an account using a valid email address and a unique password.</h2>

            <h3>
                <form action='<?=base_url("home/save")?>' id="create" method="post">
                    <fieldset>
                    <div class="row">
                            <label class="col-lg-3 col-lg-offset-2">Email </label><input type="text" class="col-lg-4" name="email">
                    </div><!--row -->
                    <div class="row">
                            <label class="col-lg-3 col-lg-offset-2">Create Password</label>
                        <input type="password" class="col-lg-4 " name="password" id="password" >
                    </div><!--row -->
                    <div class="row">
                            <label class="col-lg-3 col-lg-offset-2">Confirm Password</label><input type="password" class="col-lg-4" name="passconf" id="passconf"   >
                    </div><!--row -->
                    <div class="row">
                        <div class="col-lg-12 col-lg-offset-5"><button type="submit" class="btn btn-lg btn-success">Submit</button></div>
                    </div><!--row -->
                    </fieldset>
                </form>
            </h3>
        </div><!--col-lg-6 -->
        <div class="col-md-6">
                <h1 class="wrapper">Returning Applicants</h1>
                <h2 class="wrapper">Please login using your email address and password</h2>
            <h3>
                <form action="../checkLogin" method="post" id="login">
                    <fieldset>
                        <div class="row">
                            <label class="col-lg-3 col-lg-offset-2">Email </label><input type="text" class="col-lg-4" name="email">
                        </div><!--row -->
                        <div class="row">
                            <label class="col-lg-3 col-lg-offset-2">Password</label>
                            <input type="password" class="col-lg-4 " name="password" id="password" >
                        </div><!--row -->
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4"><button type="submit"class="btn btn-lg btn-success">Submit</button></div>

                        </div>
                    </fieldset>
                </form>
            </h3>
        </div><!--col-lg-6 -->
     </div><!--row -->


