<?php include 'header.php';?>
<?php
	$class=$_GET['p'];
	$con=mysqli_connect("localhost","root","","test");
	// Check connection
	if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
	date_default_timezone_set("UTC");
	$fdate = date("YmdHis", time());
	//Images upload code
	$allowedExts = array("gif", "jpeg", "jpg", "png");
	/***Validations***/
	$j = count($_FILES['file']['tmp_name']);
	$phone = $_POST['phone'];
	
	if ($j<=5&&preg_match('/^\d{10}$/', $phone))
	{
		$pic=$j;
		$error=0;
		for($i=0;$i<$j;$i++){
			$temp = explode(".", $_FILES['file']['name'][$i]);
			$extension = end($temp);
			if ((($_FILES['file']['type'][$i] == "image/gif")
				|| ($_FILES['file']['type'][$i] == "image/jpeg")
				|| ($_FILES["file"]["type"][$i] == "image/jpg")
				|| ($_FILES["file"]["type"][$i] == "image/pjpeg")
				|| ($_FILES["file"]["type"][$i] == "image/x-png")
				|| ($_FILES["file"]["type"][$i] == "image/png"))
				&& ($_FILES["file"]["size"][$i] < 5242880)
				&& in_array($extension, $allowedExts))
			{
				if ($_FILES["file"]["error"][$i] > 0)
				{
					echo "Return Code: " . $_FILES["file"]["error"][$i] . "<br>";
				}
				else
				{
					$fname=$fdate;
					if (file_exists("upload/" . $_FILES["file"]["name"][$i]))
					{	
						$num=0;
						while(file_exists("upload/" . $_FILES["file"]["name"][$i]))
						{	
							$_FILES["file"]["name"][$i]=$fname;
							$fname=$fdate;
							$fname.=$num;
							$num++;
							$_FILES["file"]["name"][$i].='.';
							$_FILES["file"]["name"][$i].=$extension;
						}
					}
					move_uploaded_file($_FILES["file"]["tmp_name"][$i],
					"upload/" . $_FILES["file"]["name"][$i]);
					$pic.=",".$_FILES["file"]["name"][$i];
				}
			}
			else
			{
				echo "Invalid file , Try again!!";
				$error=1;
			}
		}
		
	//Image upload code end
	if($error==0)
	{
		$text = $_POST['desc'];
		$title = $_POST['title'];
		$price = $_POST['price'];
		$cname = $_POST['cname'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$loc = $_POST['loc'];
		if($class=='computer')
		{
			$class= $_POST['type'];
		}
		$sql="INSERT INTO ads (ad_title,photos,description,price,cusname,phone,email,location,class) VALUES ('$title','$pic','$text',$price,'$cname',$phone,'$email','$loc','$class')";
		if (!mysqli_query($con,$sql))
		{
			die('Error: ' . mysqli_error($con));
		}
		$result= mysqli_query($con,"SELECT * FROM ads WHERE ad_title = '$title' and phone = '$phone'");
		$sql2="";
		while($row = mysqli_fetch_array($result))
			{
				$id = $row['id'];
				$class=$row['class'];
				switch($class)
				{
				case 'bike':
					$make = $_POST['make'];
					$model = $_POST['model'];
					$year = $_POST['year'];
					$kms = $_POST['kms'];
					$cond = $_POST['cond'];
					$sql2="INSERT INTO bike VALUES ('$make','$model',$year,$kms,'$cond',$id)";
					break;
				case 'vehicle':
					$type = $_POST['type'];
					$make = $_POST['make'];
					$model = $_POST['model'];
					$year = $_POST['year'];
					$kms = $_POST['kms'];
					$cond = $_POST['cond'];
					$sql2="INSERT INTO Vehicle VALUES ('$make','$model',$year,'$type',$kms,'$cond',$id)";
					break;
				case 'car_accessory':
					break;
				case 'bed':
					break;
				case 'chair':
					break;
				case 'table':
					break;
				case 'computer':
					$make = $_POST['make'];
					$ram = $_POST['ram'];
					$unit = $_POST['unit'];
					$hdd = $_POST['hdd'];
					$units = $_POST['units'];
					$cpu = $_POST['cpu'];
					$cond = $_POST['cond'];
					$monitor = $_POST['monitor'];
					$keyboard = $_POST['keyboard'];
					$mouse = $_POST['mouse'];
					if($unit=='gb'){$ram*=1024;}
					if($units=='tb'){$hdd*=1024;}
					$sql2="INSERT INTO computer VALUES ($id,'$make',$ram,$hdd,'$cpu','$cond','$monitor','$keyboard','$mouse')";
					break;
				case 'laptop':
					$make = $_POST['make'];
					$model = $_POST['model'];
					$ram = $_POST['ram'];
					$unit = $_POST['unit'];
					$hdd = $_POST['hdd'];
					$units = $_POST['units'];
					$cpu = $_POST['cpu'];
					$cond = $_POST['cond'];
					if($unit=='gb'){$ram*=1024;}
					if($units=='tb'){$hdd*=1024;}
					$sql2="INSERT INTO laptop VALUES ($id,'$make','$model',$ram,$hdd,'$cpu','$cond')";
					break;
				case 'mobile':
					$make = $_POST['make'];
					$model = $_POST['model'];
					$cond = $_POST['cond'];
					if(isset($_POST['charger'])){$charger = 1;}
					else $charger = 0;
					if(isset($_POST['headphone']))$head = 1;
					else $head = 0;
					if(isset($_POST['datacable']))$cable = 1;
					else $cable = 0;
					$sql2="INSERT INTO mobile VALUES ($id,'$make','$model','$cond',$charger,$head,$cable)";
					break;
				case 'player':
					break;
				case 'tv':
					$make = $_POST['make'];
					$model = $_POST['model'];
					$cond = $_POST['cond'];
					$size = $_POST['size'];
					$type = $_POST['type'];
					$reso = $_POST['reso'];
					$sql2="INSERT INTO tv VALUES ($id,'$make','$model','$cond','$reso',$size,'$type')";
					break;
				case 'job':
					$exp = $_POST['exp'];
					$type = $_POST['type'];
					$qual = $_POST['qual'];
					$minsal = $_POST['salmin'];
					$maxsal = $_POST['salmax'];
					$sql2="INSERT INTO job VALUES ($id,'$type','$qual',$exp,'$minsal','$maxsal')";
					break;
				}
				if($sql2!="")
				{
					if (!mysqli_query($con,$sql2))
					{
						die('Error: ' . mysqli_error($con));
					}
					else
					{
					 echo 'You ad has been posted! Thank you for using our service.';
					}
				}
			}
	}
	}
	else
	{
		echo '<section class="row">Check Phone no. or More than 5 images selected, Image limit 5! <a href="select_category.php">Try again</a>.</section>';
	}
	mysqli_close($con);
?>

<?php include 'footer.php';?>