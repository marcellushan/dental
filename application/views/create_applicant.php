<div class="main container">
	<div class="row">
		<div class="col-lg-12">
		<h1 class="wrapper">Sign Up</h1>

			<h2>It is required that you create an account prior to submitting an application.</h2>

			<h2>Please create an an account using a valid email address and a unique password.</h2>

            <h3>
                <form action='<?=base_url("home/save")?>' id="create" method="post">
                    <fieldset>
                    <div class="row">
                            <label class="col-lg-3 col-lg-offset-2">Email </label><input type="text" class="col-lg-4" name="email">
                    </div>
                    <div class="row">
                            <label class="col-lg-3 col-lg-offset-2">Create Password</label> <input type="password" class="col-lg-4" name="password" id="password"  minlength="8" >
                    </div>
                    <div class="row">
                            <label class="col-lg-3 col-lg-offset-2">Confirm Password</label><input type="password" class="col-lg-4" name="passconf" id="passconf"   >
                    </div>
                        <div class="col-lg-12 col-lg-offset-5"><button type="submit" class="btn btn-lg btn-success">Submit</button></div>
                    </div>


                    </fieldset>
                </form>
            </h3>

			<h2>If an account has been previously created, please proceed to the user login page</h2>

			<div class="wrapper" ><a class="btn btn-lg btn-danger" href='<?=base_url("home/display/login")?>'>Login with Email Address</a></div>
		</div>


