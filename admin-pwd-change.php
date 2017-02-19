<!Doctype html>
<html>
	<head>
		<title>Welcome to my website!</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
<?php 
	$con=mysqli_connect("localhost","root","","test");
	// Check connection
	if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
	$sql= mysqli_query($con,"SELECT * FROM admin");
	while($row = mysqli_fetch_array($sql))
	{
		$pass=$row['Pass'];
		
		$curpass=$_POST['curpwd'];
		$newpwd=$_POST['newpwd'];
	
		if($curpass==$pass)
		{
			$sql1= mysqli_query($con,"Update admin SET Pass='$newpwd' WHERE username='traleblazer'");
			mysqli_query($con,$sql1);
			?>
				<div class="alert alert-success">
					Password Successfully changed!
				</div>
			<?php
		}
		else{?>
			<div class="alert alert-danger">
				Wrong Password! <a href="admin.php">Try again</a>
			</div>
		<?php
		}
	}
?>
	</body>
</html>
