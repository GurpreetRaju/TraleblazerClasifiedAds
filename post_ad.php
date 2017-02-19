<?php $path='sell';?>
<?php include 'header.php'; 
	$p=$_GET['p'];
?>
			<section class="row">
				<article class="col-md-9">
					<div class="row" style="margin-top:5px">
						<div class="col-md-12">
						<form class="form-horizontal" role="form" enctype="multipart/form-data" action="submitquery.php?p=<?php echo $p;?>" method="post">
						<div class="panel panel-default">
							<div class="panel-heading">
								<strong>Item discription</strong>
							</div>
							<?php include 'basicad.php'; ?>
								<div class="row">
								<div class="col-md-6">	
									<div class="form-group">
										<label for="inputCondition" class="col-lg-4 control-label">Condition</label>
										<div class="col-lg-8">
											<select class="form-control" id="inputCondition" name="cond">
												<option value="new">New</option>
												<option value="used">Used</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="inputPrice" class="col-lg-4 control-label">Price &#8377;</label>
										<div class="col-lg-8">
											<input type="text" class="form-control" id="inputPrice" name="price" required/>
										</div>
									</div>
								</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<strong>Seller discription</strong>
							</div>
							<div class="panel-body">
								<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="inputName" class="col-lg-4 control-label">Name</label>
										<div class="col-lg-8">
											<input type="text" class="form-control" id="inputName" name="cname" required/>
										</div>
									</div>
									<div class="form-group">
										<label for="inputPhone" class="col-lg-4 control-label">Phone</label>
										<div class="col-lg-8">
											<input type="text" class="form-control" id="inputPhone" name="phone" required/>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="inputEmail" class="col-lg-4 control-label">E-mail</label>
										<div class="col-lg-8">
											<input type="email" class="form-control" id="inputEmail" name="email" required/>
										</div>
									</div>
									<div class="form-group">
										<label for="inputLoc" class="col-lg-4 control-label">Location</label>
										<div class="col-lg-8">
											<input type="text" class="form-control" id="inputLoc" name="loc" required/>
										</div>
									</div>
								</div>
								</div>
								<div class="form-group">
									<div class="col-lg-offset-4 col-lg-4">
										<button type="submit" class="btn btn-info btn-lg btn-block" onclick="return Validate()">Submit</button>
									</div>
								</div>
							</div>
						</div>
						</form>
						</div>
					</div>
				</article>
			</section>
<?php include 'footer.php'; ?>