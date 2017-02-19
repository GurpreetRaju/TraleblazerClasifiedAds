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
				<div class="wrapper2">
					<div class="tabs">
						<div id="default2"> <a href="#default2" class="col-md-2">Home</a>
							<div>
								<p class="rg-image">Welcome Admin!</p>
							</div>
						</div>
						
						<div id="tab1"> <a href="#tab1" class="col-md-2">View ads</a>
							<div>
								<table class="table">
									<tr>
										<th>Ad title</th>
										<th>Category</th>
										<th>Options</th>
									</tr>
								<?php 
									$sql1=mysqli_query($con,"SELECT * FROM ads");
									while($row1 = mysqli_fetch_array($sql1))
									{
										?>
											<tr>
												<td><a href="singlepost.php?q=<?php echo $row1['id'];?>"><?php echo $row1['ad_title'];?></a></td>
												<td><?php echo $row1['class'];?></td>
												<td>
													<form action="delete.php" method="post">
													<input type="hidden" value="<?php echo $row1['id'];?>" name="id"/>
													<button type="submit" class="btn btn-danger">delete</button>
													</form>
												</td>
											</tr>
										<?php
									}
								?>
								</table>
							</div>
						</div>
					
						<div id="tab2"> <a href="#tab2" class="col-md-2">View Users</a>
							<div>
								<table class="table">
									<tr>
										<th>Name</th>
										<th>Phone</th>
										<th>E-mail</th>
										<th>Location</th>
									</tr>
								<?php 
									$sql2=mysqli_query($con,"SELECT * FROM ads");
									while($row2 = mysqli_fetch_array($sql2))
									{
										?>
											<tr>
												<td><?php echo $row2['cusname'];?></td>
												<td><?php echo $row2['phone'];;?></td>
												<td><?php echo $row2['email'];;?></td>
												<td><?php echo $row2['location'];;?></td>
											</tr>
										<?php
									}
								?>
								</table>
							</div>
						</div>

						<div id="tab3"> <a href="#tab3" class="col-md-2">Change Password</a>
							<div>
								<form class="form-horizontal col-sm-offset-2 col-sm-8 well" role="form" action="admin-pwd-change.php" method="post">
									<div class="form-group">
										<label for="inputPassword1" class="col-sm-3 control-label">Current Password</label>
										<div class="col-sm-8">
											<input type="password" class="form-control" name="curpwd" id="inputPassword1" placeholder="Current Password" required/>
										</div>
									</div>
									<div class="form-group">
										<label for="inputPassword2" class="col-sm-3 control-label">New Password</label>
										<div class="col-sm-8">
											<input type="password" class="form-control" name="newpwd" id="inputPassword2" placeholder="New Password" required/>
										</div>
									</div>
									<div class="form-group">
										<label for="inputPassword3" class="col-sm-3 control-label">Confirm Password</label>
										<div class="col-sm-8">
											<input type="password" class="form-control" name="conpwd" id="inputPassword3" placeholder="Confirm Password" required/>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-offset-3 col-sm-9">
											<button type="submit" class="btn btn-default">Change</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="clr"></div>
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
</div>
</body>
</html>