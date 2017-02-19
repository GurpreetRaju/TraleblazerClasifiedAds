<?php $path='sell';?>
<?php include 'header.php'; ?>
<section class="row">
	<div class="col-lg-offset-3 col-lg-6">
		<h3>Select a category for your free ad!</h3>
		<div class="panel-group" id="accordion">
			<div class="panel panel-default">
				<div class="panel-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1">Vehicles</a>
				</div>
				<div id="collapse1" class="panel-collapse collapse in panel-body">
					<ul class="menu" >
						<li class="first leaf"><a href="vehiclepost.php?p=vehicle" class="lnk">Four wheeler</a></li>
						<li class="leaf"><a href="vehiclepost.php?p=bike" class="lnk">Two wheeler</a></li>
						<li class="last leaf"><a href="post_ad.php?p=car_accessory" class="lnk">Accessories</a></li>
					</ul>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse2">Furniture</a>
				</div>
				<div id="collapse2" class="panel-collapse collapse panel-body">
					<ul class="menu"  >
						<li class="first leaf"><a href="post_ad.php?p=bed" class="lnk">Beds</a></li>
						<li class="leaf"><a href="post_ad.php?p=chair" class="lnk">Chairs</a></li>
						<li class="last leaf"><a href="post_ad.php?p=table" class="lnk">Tables</a></li>
					</ul>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse3">Electronics</a>
				</div>
				<div id="collapse3" class="panel-collapse collapse panel-body">
					<ul class="menu" >
						<li class="first leaf"><a href="com_ad.php?p=computer" class="lnk">Computers &amp; Laptops</a></li>
						<li class="leaf"><a href="mob_ad.php?p=mobile" class="lnk">Mobile Phones</a></li>
						<li class="leaf"><a href="post_ad.php?p=player" class="lnk">Audio Video Players</a></li>
						<li class="leaf"><a href="tv_ad.php" class="lnk">TeleVision</a></li>
						<li class="last leaf"><a href="post_ad.php?p=device" class="lnk">Others</a></li>
					</ul>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<a href="job_post.php">Jobs</a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include 'footer.php'; ?>
