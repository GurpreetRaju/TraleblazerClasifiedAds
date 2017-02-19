<?php
	$con=mysqli_connect("localhost","root","","test");
	// Check connection
	if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
	$id=$_POST['id'];
	$sql= mysqli_query($con,"SELECT * FROM ads");
	while($row = mysqli_fetch_array($sql)){
		$class=$row['class'];
		mysqli_query($con,"DELETE FROM ads WHERE id=$id");
		if($class=='bike'||$class=='computer'||$class=='job'||$class=='laptop'||$class=='mobile'||$class=='tv'||$class=='vehicle')
		{
			mysqli_query($con,"DELETE FROM $class WHERE id=$id");
		}
	}
?>
<script type="text/javascript">location.href = 'admin.php';</script>