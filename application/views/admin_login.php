<div class="main container">
	<div class="row">
		<div class="col-md-12">
		<h1 class="wrapper">Admin Login</h1>

			<h2 class="wrapper">Please login using your username and password</h2>
			<form action="<? echo base_url() ?>admin/checkLogin" method="post" id="admin">
				<fieldset>
					<div class="row">
						<label class="col-md-2 col-md-offset-2">Username</label><input type="text" class="col-md-6" name="username">
						<label class="col-md-2 col-md-offset-2">Password</label> <input type="password" class="col-md-6" name="password">
					</div>
					<div class="row">
						<div class="col-md-4 col-md-offset-4"><button type="submit"class="btn btn-lg btn-success">Submit</button></div>

					</div>
				</fieldset>
			</form>
		</div>
