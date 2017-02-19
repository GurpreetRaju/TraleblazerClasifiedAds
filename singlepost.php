<?php include 'header.php'; 
	// Create connection
	$con=mysqli_connect("localhost","root","","test");
	// Check connection
	if (mysqli_connect_errno($con))
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$id = $_GET['q'];
	$result = mysqli_query($con,"SELECT * FROM ads WHERE id = '$id'");
	while($row = mysqli_fetch_array($result))
	{
		$text = $row['description'];
		$title = $row['ad_title'];
		$pic = $row['photos'];
		$price = $row['price'];
		$cname = $row['cusname'];
		$phone = $row['phone'];
		$email = $row['email'];
		$loc = $row['location'];
		$id = $row['id'];
		$class = $row['class'];
		
		$picarry=explode(',',$pic,6);
	
?>
			<section class="row">
				<aside class="col-md-3">
					<div class="row">
						<div class="panel panel-default table">
							<div class="panel-heading">
								<strong>Seller</strong>
							</div>
							<div class="panel-body table-responsive">
								<table class="table table-striped">
									<tr>
										<td>Name</td>
										<td><?php echo $cname;?></td>
									</tr>
									<tr>
										<td>Address</td>
										<td><?php echo $loc;?></td>
									</tr>
									<tr>
										<td>Phone</td>
										<td><?php echo $phone;?></td>
									</tr>
									<tr>
										<td>Email</td>
										<td><?php echo $email;?></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<?php
					if($class=='bike'||$class=='computer'||$class=='job'||$class=='laptop'||$class=='mobile'||$class=='tv'||$class=='vehicle'){
					$sql= mysqli_query($con,"SELECT * FROM $class where id='$id'");
					while($row1=mysqli_fetch_array($sql))
					{
					?>
					<div class="row">
						<div class="panel panel-default table">
							<div class="panel-heading">
								<strong><?php echo $class;?> discription</strong>
							</div>
							<div class="panel-body table-responsive">
								<table class="table table-striped">
								<?php 
								switch ($class) {
									case 'vehicle':
									?>
									<tr>
										<td>Condition</td>
										<td><?php echo $row1['condition'];?></td>
									</tr>
									<tr>
										<td>Make</td>
										<td><?php echo $row1['brandname'];?></td>
									</tr>
									<tr>
										<td>Model</td>
										<td><?php echo $row1['model'];?></td>
									</tr>
									<tr>
										<td>Type</td>
										<td><?php echo $row1['bodytype'];?></td>
									</tr>
									<tr>
										<td>Year</td>
										<td><?php echo $row1['year'];?></td>
									</tr>
									<tr>
										<td>Kms driven</td>
										<td><?php echo $row1['kms'];?></td>
									</tr>
		
									<?php
									break;
									case 'bike':?>
									<tr>
										<td>Condition</td>
										<td><?php echo $row1['condition'];?></td>
									</tr>
									<tr>
										<td>Make</td>
										<td><?php echo $row1['brandname'];?></td>
									</tr>
									<tr>
										<td>Model</td>
										<td><?php echo $row1['model'];?></td>
									</tr>
									<tr>
										<td>Year</td>
										<td><?php echo $row1['year'];?></td>
									</tr>
									<tr>
										<td>Kms driven</td>
										<td><?php echo $row1['kms'];?></td>
									</tr>
								<?php	break;
									case 'computer':?>
									<tr>
										<td>Condition</td>
										<td><?php echo $row1['condition'];?></td>
									</tr>
									<tr>
										<td>Make</td>
										<td><?php echo $row1['brandname'];?></td>
									</tr>
									<tr>
										<td>Processor</td>
										<td><?php echo $row1['cpu'];?></td>
									</tr>
									<tr>
										<td>Ram</td>
										<td><?php echo $row1['ram'];?> MB</td>
									</tr>
									<tr>
										<td>HDD</td>
										<td><?php echo $row1['hdd'];?> GB</td>
									</tr>
									<tr>
										<td>Monitor</td>
										<td><?php echo $row1['monitor'];?></td>
									</tr>
									<tr>
										<td>Keyboard</td>
										<td><?php echo $row1['keyboard'];?></td>
									</tr>
									<tr>
										<td>Mouse</td>
										<td><?php echo $row1['mouse'];?></td>
									</tr>
								<?php	break;
									case 'laptop':?>
									<tr>
										<td>Condition</td>
										<td><?php echo $row1['condition'];?></td>
									</tr>
									<tr>
										<td>Make</td>
										<td><?php echo $row1['brandname'];?></td>
									</tr>
									<tr>
										<td>Model</td>
										<td><?php echo $row1['model'];?></td>
									</tr>
									<tr>
										<td>Processor</td>
										<td><?php echo $row1['cpu'];?></td>
									</tr>
									<tr>
										<td>Ram</td>
										<td><?php echo $row1['ram'];?> MB</td>
									</tr>
									<tr>
										<td>HDD</td>
										<td><?php echo $row1['hdd'];?> GB</td>
									</tr>
								<?php	break;
									case 'mobile':?>
									<tr>
										<td>Condition</td>
										<td><?php echo $row1['condition'];?></td>
									</tr>
									<tr>
										<td>Make</td>
										<td><?php echo $row1['brandname'];?></td>
									</tr>
									<tr>
										<td>Model</td>
										<td><?php echo $row1['model'];?></td>
									</tr>
									<tr>
										<td>Charger</td>
										<td><?php if($row1['charger']==1){echo 'yes';}else{echo 'no';}?></td>
									</tr>
									<tr>
										<td>Head phone</td>
										<td><?php if($row1['headphone']==1){echo 'yes';}else{echo 'no';}?></td>
									</tr>
									<tr>
										<td>Data cable</td>
										<td><?php if($row1['datacable']==1){echo 'yes';}else{echo 'no';}?></td>
									</tr>
								<?php	break;
									case 'tv':?>
									<tr>
										<td>Condition</td>
										<td><?php echo $row1['cond'];?></td>
									</tr>
									<tr>
										<td>Make</td>
										<td><?php echo $row1['make'];?></td>
									</tr>
									<tr>
										<td>Model</td>
										<td><?php echo $row1['model'];?></td>
									</tr>
									<tr>
										<td>Type</td>
										<td><?php echo $row1['type'];?></td>
									</tr>
									<tr>
										<td>Size</td>
										<td><?php echo $row1['size'];?> inch</td>
									</tr>
									<tr>
										<td>Resolution</td>
										<td><?php echo $row1['reso'];?></td>
									</tr>
								<?php	break;
									case 'job':?>
									<tr>
										<td>Job type</td>
										<td><?php echo $row1['type'];?></td>
									</tr>
									<tr>
										<td>Qualification</td>
										<td><?php echo $row1['qual'];?></td>
									</tr>
									<tr>
										<td>Experience</td>
										<td><?php echo $row1['exp'];?></td>
									</tr>
									<tr>
										<td>Salary</td>
										<td>&#8377; <?php echo $row1['min'];?>-<?php echo $row1['max'];?></td>
									</tr>
									
								<?php	break;
									}
								?>
								
								</table>
							</div>
						</div>
					</div>
					<?php }
					}
					?>
				</aside>
				<article class="col-md-9">
					<div class="row" style="margin-top:5px">
						<div class="col-md-12">
							<div class="thumbnail">
								<div id="rg-gallery" class="rg-gallery">
									<div class="rg-thumbs">
										<!-- Elastislide Carousel Thumbnail Viewer -->
										<div class="es-carousel-wrapper">
											<div class="es-nav">
												<span class="es-nav-prev">Previous</span>
												<span class="es-nav-next">Next</span>
											</div>
											<div class="es-carousel">
												<ul>
													<?php for($i=1;$i<=$picarry[0];$i++)
													{
													?>
													<li><a href="#"><img src="upload/<?php echo $picarry[$i];?>" data-large="upload/<?php echo $picarry[$i];?>" alt="interior" data-description="Swift" /></a></li>
													<?php }?>
												</ul>
											</div>
										</div>
										<!-- End Elastislide Carousel Thumbnail Viewer -->
									</div><!-- rg-thumbs -->
								</div><!-- rg-gallery -->
								<div class="caption">
									<h3><?php echo $title;?></h3>
									<p><?php echo $text;?></p>
									<p class="price btn btn-default"><?php echo $price;?></p>
								</div>
							</div>
						</div>
					</div>
				</article>
			</section>
<?php }
	include 'footer.php'; 
	mysqli_close($con);
?>