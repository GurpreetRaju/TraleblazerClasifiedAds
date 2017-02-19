<?php $path='home';?>
<?php 	include 'header.php'; 
		include 'queries.php';
		
		if(isset($_GET['r']))
		{$class=$_GET['r'];}
		else{$class=null;}
?>
			<section class="row">
				<aside class="col-md-3">
					<div class="row">
					<div class="panel-group" id="accordion">
						<div class="panel panel-default">
							<div class="panel-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1">Vehicles</a>
							</div>
							<div id="collapse1" class="panel-collapse collapse in panel-body">
								<ul class="menu" >
									<li class="first leaf"><a href="?r=vehicle" class="lnk">Four wheeler</a></li>
									<li class="leaf"><a href="?r=bike" class="lnk">Two wheeler</a></li>
									<li class="last leaf"><a href="?r=car_accessory" class="lnk">Accessories</a></li>
								</ul>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse2">Furniture</a>
							</div>
							<div id="collapse2" class="panel-collapse collapse panel-body">
								<ul class="menu"  >
									<li class="first leaf"><a href="?r=bed" class="lnk">Beds</a></li>
									<li class="leaf"><a href="?r=chair" class="lnk">Chairs</a></li>
									<li class="last leaf"><a href="?r=table" class="lnk">Tables</a></li>
								</ul>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse3">Electronics</a>
							</div>
							<div id="collapse3" class="panel-collapse collapse panel-body">
								<ul class="menu" >
									<li class="first leaf"><a href="?r=computer" class="lnk">Computers &amp; Laptops</a></li>
									<li class="leaf"><a href="?r=mobile" class="lnk">Mobile Phones</a></li>
									<li class="leaf"><a href="?r=player" class="lnk">Audio Video Players</a></li>
									<li class="leaf"><a href="?r=tv" class="lnk">TeleVision</a></li>
									<li class="last leaf"><a href="?r=device" class="lnk">Others</a></li>
								</ul>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<a href="?r=job">Jobs</a>
							</div>
						</div>
					</div>
					</div>
					<div class="row">
						<div class="panel panel-default">
							<div class="panel-heading">
								<a class="accordion-toggle" data-toggle="collapse" href="#collapse8">Price</a>
							</div>
							<div id="collapse8" class="panel-collapse collapse in panel-body">
								<form class="form-inline" role="form" action="<?php if($class!=null){ echo '?r='.$class;}?>" method="post">
									<input type="text" placeholder="min" class="form-control" name="min" required/><br/><br/>
									<input type="text" placeholder="max" class="form-control" name="max" required/><br/><br/>
									<button type="submit" class="btn btn-default">Go</button>
								</form>
							</div>
						</div>
					</div>
				</aside>
				<article class="col-md-9">
					<div id="advert" style="margin-top:5px">
						<?php 
						if(isset($_POST['min'])&&isset($_POST['max'])&&$_POST['min']!=null&&$_POST['max']!=null)
						{	
							$min=$_POST['min'];
							$max=$_POST['max'];
							test($class,$min,$max);
						}
						else 
						{
							test($class,Null,Null);
						}
						?>
					</div>
					<div class="row"><?php  if($nr>12) {echo $paginationDisplay;} ?></div>
				</article>
			</section>
			
<?php include 'footer.php'; ?>