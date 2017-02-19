<?php $path='sell';?>
<?php include 'header.php'; 
	$p='vehicle';
?>

						<form class="form-horizontal" role="form" enctype="multipart/form-data" action="submitquery.php?p=<?php echo $p;?>" method="post">

								<div class="form-group">
									<label for="inputPhotos" class="col-lg-2 control-label">Photos</label>
									<div class="col-lg-10">
										<input type="file" class="form-control" id="inputPhotos" name="file[]" required/>
										<input type="file" class="form-control" id="inputPhotos" name="file[]"/>
										<input type="file" class="form-control" id="inputPhotos" name="file[]"/>
									</div>
								</div>

								<div class="form-group">
									<div class="col-lg-offset-4 col-lg-4">
										<button type="submit" class="btn btn-info btn-lg btn-block">Submit</button>
									</div>
								</div>

						</form>

<?php include 'footer.php'; ?>