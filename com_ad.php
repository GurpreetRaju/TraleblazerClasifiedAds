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
								<strong>Computer discription</strong>
							</div>
							<?php include 'basicad.php'; ?>
								<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="inputType" class="col-lg-4 control-label">Type</label>
										<div class="col-lg-8">
											<select class="form-control" name="type" id="inputType" onChange="myFunction()" required>
												<option value=""  disabled selected>Select type</option>
												<option value="computer">Desktop</option>
												<option value="laptop">Laptop</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="inputBrand" class="col-lg-4 control-label">Brand name</label>
										<div class="col-lg-8">
											<select class="form-control" name="make" id="inputBrand" required>
												<option value=""  disabled selected>Select make</option>
												<option value="HP">HP</option>
												<option value="Dell">Dell</option>
												<option value="Vaio">Vaio</option>
												<option value="Acer">Acer</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="inputRam" class="col-lg-4 control-label">RAM</label>
										<div class="col-lg-5">
											<input type="text" class="form-control" id="inputRam" name="ram" placeholder="Select RAM" required/>
										</div>
										<div class="col-lg-3">
											<select class="form-control" name="unit" id="inputRam" required>
												<option value="gb" selected>GB</option>
												<option value="mb">MB</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="inputSpace" class="col-lg-4 control-label">Hard Disk</label>
										<div class="col-lg-5">
											<input type="text" class="form-control" id="inputSpace" name="hdd" placeholder="Select Hard disk" required/>
										</div>
										<div class="col-lg-3">
											<select class="form-control" name="units" id="inputRam" required>
												<option value="gb" selected>GB</option>
												<option value="tb">TB</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="inputCPU" class="col-lg-4 control-label">CPU</label>
										<div class="col-lg-8">
											<input type="text" class="form-control" id="inputCPU" name="cpu" placeholder="Select CPU" required/>
										</div>
									</div>
								</div>
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
									<div class="form-group" id="modeldiv">
										<label for="inputModel" class="col-lg-4 control-label">Model</label>
										<div class="col-lg-8">
											<input type="text" class="form-control" name="model" id="inputModel"/>
										</div>
									</div>
									<div class="form-group" id="monitordiv">
										<label for="inputMonitor" class="col-lg-4 control-label">Monitor</label>
										<div class="col-lg-8">
											<select class="form-control" id="inputMonitor" name="monitor">
												<option value="yes">Yes</option>
												<option value="no">No</option>
											</select>
										</div>
									</div>
									<div class="form-group" id="keyboarddiv">
										<label for="inputKeyb" class="col-lg-4 control-label">Keyboard</label>
										<div class="col-lg-8">
											<select class="form-control" id="inputKeyb" name="keyboard">
												<option value="Yes">Yes</option>
												<option value="no">No</option>
											</select>
										</div>
									</div>
									<div class="form-group" id="mousediv">
										<label for="inputMouse" class="col-lg-4 control-label">Mouse</label>
										<div class="col-lg-8">
											<select class="form-control" id="inputMouse" name="mouse">
												<option value="yes">Yes</option>
												<option value="no">No</option>
											</select>
										</div>
									</div>
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
										<button type="submit" class="btn btn-info btn-lg btn-block">Submit</button>
									</div>
								</div>
							</div>
						</div>
						</form>
						</div>
					</div>
				</article>
			</section>
			<script>
			function myFunction()
			{
				var x=document.getElementById("inputType");
				if(x.value=='computer'){
					document.getElementById("modeldiv").style.display='none';
					document.getElementById("monitordiv").style.display='block';
					document.getElementById("keyboarddiv").style.display='block';
					document.getElementById("mousediv").style.display='block';
				}
				if(x.value=='laptop'){
					document.getElementById("modeldiv").style.display='block';
					document.getElementById("monitordiv").style.display='none';
					document.getElementById("keyboarddiv").style.display='none';
					document.getElementById("mousediv").style.display='none';
				}
			}
			</script>
<?php include 'footer.php'; ?>