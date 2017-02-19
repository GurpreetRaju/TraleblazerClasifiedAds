<!Doctype html>
<html>
	<head>
		<title>Welcome to my website!</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/elastislide.css" />
		<noscript>
			<style>
				.es-carousel ul{
					display:block;
				}
				
			</style>
		</noscript>
		<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
			<div class="rg-image-wrapper">
				{{if itemsCount > 1}}
					<div class="rg-image-nav">
						<a href="#" class="rg-image-nav-prev pull-left"><span class="glyphicon glyphicon-circle-arrow-left"></span></a>
						<a href="#" class="rg-image-nav-next pull-right"><span class="glyphicon glyphicon-circle-arrow-right"></span></a>
					</div>
				{{/if}}
				<div class="rg-image"></div>
				<div class="rg-loading"></div>
				<div class="rg-caption-wrapper">
					<div class="rg-caption" style="display:none;">
						<p></p>
					</div>
				</div>
			</div>
		</script>
		
	</head>
	<body id="<?php echo $path;?>">
		<div class="container">
			<header>
				<div class="topbar row">
					<div class="col-sm-4">
						<ul class="nav navbar-nav sitemap">
						<li><a href="index.php">Home </a></li>
						<li><a href="about.php"> About </a></li>
						<li><a href="contact.php"> Contact </a></li>
						<li><a href="policy.php"> Privacy policy </a></li>
						</ul>
					</div>
					<div class="col-sm-4">
						<form class="navbar-form" role="search">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
								<div class="input-group-btn">
									<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
								</div>
							</div>
						</form>
					</div>
					<div class="col-sm-4">
						<span style="color:#fff;padding:15px 0;display:block;text-align:right"> <span></span></span>
					</div>
				</div>
				<nav class="navbar navbar-default row" role="navigation">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#" style="color:#00ccff;font-size:25px">Traleblazer <br><span style="font-size:12px"><span class="glyphicon glyphicon-calendar"></span> classifieds</span></a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li id="home"><a href="index.php"><span class="glyphicon glyphicon-search"></span>Looking</a></li>
							<li id="sell"><a href="select_category.php"><span class="glyphicon glyphicon-tag"></span>Selling</a></li>
						</ul>
					</div>
				</nav>
			</header>