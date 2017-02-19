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
								<strong>Vehicle discription</strong>
							</div>
                                                    <?php include 'basicad.php'; ?>
								<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="inputBrand" class="col-lg-4 control-label">Brand name</label>
										<div class="col-lg-8">
											<select class="form-control" name="make" id="inputBrand" required>
												<option value=""  disabled selected>Select make</option>
												<option value="Aston Martin">Aston Martin</option>
												<option value="Audi">Audi</option>
												<option value="Bentley">Bentley</option>
												<option value="BMW">BMW</option>
												<option value="Bugatti">Bugatti</option>
												<option value="Catherham">Catherham</option>
												<option value="Chevrolet">Chevrolet</option>
												<option value="Dodge">Dodge</option>
												<option value="Ferrari">Ferrari</option>
												<option value="Fiat">Fiat</option>
												<option value="Force Motors">Force Motors</option>
												<option value="Ford (Europe)">Ford (Europe)</option>
												<option value="Geo">Geo</option>
												<option value="GMC">GMC</option>
												<option value="Hindustan Motors">Hindustan Motors</option>
												<option value="Honda">Honda</option>
												<option value="Hyundai">Hyundai</option>
												<option value="ICML">ICML</option>
												<option value="Jaguar">Jaguar</option>
												<option value="Kia">Kia</option>
												<option value="Lamborghini">Lamborghini</option>
												<option value="Land Rover">Land Rover</option>
												<option value="Mahindra">Mahindra</option>
												<option value="MAINI">MAINI</option>
												<option value="Maserati">Maserati</option>
												<option value="Maybach">Maybach</option>
												<option value="Mercedes-Benz">Mercedes-Benz</option>
												<option value="Mini">Mini</option>
												<option value="Mitsubishi">Mitsubishi</option>
												<option value="Nissan">Nissan</option>
												<option value="Plymouth">Plymouth</option>
												<option value="Porsche">Porsche</option>
												<option value="Premier">Premier</option>
												<option value="Renault">Renault</option>
												<option value="Rolls-Royce">Rolls-Royce</option>
												<option value="Rover">Rover</option>
												<option value="SAN">SAN</option>
												<option value="Skoda">Skoda</option>
												<option value="Ssangyong">Ssangyong</option>
												<option value="Suzuki">Suzuki</option>
												<option value="Tata">Tata</option>
												<option value="Toyota">Toyota</option>
												<option value="TVR">TVR</option>
												<option value="Volkswagen">Volkswagen</option>
												<option value="Volvo">Volvo</option>
												<option value="other">Other</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="inputModel" class="col-lg-4 control-label">Model</label>
										<div class="col-lg-8">
											<input type="text" class="form-control" id="inputModel" name="model" placeholder="Select Model" required/>
										</div>
									</div>
									<div class="form-group">
										<label for="inputYear" class="col-lg-4 control-label">Year</label>
										<div class="col-lg-8">
											<input type="text" class="form-control" id="inputYear" name="year" placeholder="Select Year"/>
										</div>
									</div>
									<?php if($p=='vehicle'){?>
									<div class="form-group">
										<label for="inputBody" class="col-lg-4 control-label">Body type</label>
										<div class="col-lg-8">
											<select class="form-control" id="inputBody" name="type">
												<option value="">No Answer</option>
												<option value="Convertible">Convertible</option>
												<option value="Coupe">Coupe</option>
												<option value="Sedan">Sedan</option>
												<option value="SUV/MUV">SUV/MUV</option>
												<option value="Truck">Truck</option>
												<option value="Vans & Minivans">Vans &amp; Minivans</option>
												<option value="Hatchback">Hatchback</option>
												<option value="Station Wagon">Station Wagon</option>
											</select>
										</div>
									</div>
									<?php }?>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="inputKms" class="col-lg-4 control-label">Kms driven:</label>
										<div class="col-lg-8">
											<input type="text" class="form-control" id="inputKms" name="kms"/>
										</div>
									</div>
									<div class="form-group">
										<label for="inputCondition" class="col-lg-4 control-label">Condition</label>
										<div class="col-lg-8">
											<select class="form-control" id="inputCondition" name="cond">
												<option value="new">New</option>
												<option value="used">Used</option>
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