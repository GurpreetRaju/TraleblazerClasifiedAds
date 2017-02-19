<?php 	include 'header.php'; 
	$con=mysqli_connect("localhost","root","","test");
	// Check connection
	if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
	$name=$_POST['user'];
	$pass=$_POST['pwd'];
	$sql= mysqli_query($con,"SELECT * FROM admin");
	while($row = mysqli_fetch_array($sql))
	{	
	$uname=$row['Username'];
	$pwd=$row['Pass'];
		if($name==$uname&&$pass==$pwd)
		{
			?>
			<section class="row">
				<div class="col-sm-offset-4 col-sm-4 option">
					<a class="btn btn-primary btn-block" href="admin-ads.php">View adds</a>
					<a class="btn btn-primary btn-block" href="admin-usr.php">View Users</a>
					<a class="btn btn-primary btn-block" href="admin-pwd-change.php">Change Password</a>
				</div>
			</section>
			<?php
		}
		else
		{
			?>
			<section class="row">
				<div class="col-sm-offset-2 col-sm-8 alert alert-warning">
					Wrong Username or Password! <a href="admin.php">Try again</a>
				</div>
			</section>
			<?php
		}
	}

?>

<?php include 'footer.php'; ?>