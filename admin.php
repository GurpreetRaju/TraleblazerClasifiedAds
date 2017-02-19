<?php 	include 'header.php'; ?>
<section class="row">
	<form class="form-horizontal col-sm-offset-2 col-sm-8 well form-admin" role="form" action="admin-home.php" method="post">
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-3 control-label">Email</label>
			<div class="col-sm-8">
				<input type="text" name="user" class="form-control" id="inputEmail3" placeholder="Email"required/>
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-3 control-label">Password</label>
			<div class="col-sm-8">
				<input type="password" class="form-control" name="pwd" id="inputPassword3" placeholder="Password" required/>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-3 col-sm-9">
				<button type="submit" class="btn btn-default">Sign in</button>
			</div>
		</div>
	</form>
</section>
<?php include 'footer.php'; ?>