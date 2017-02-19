<?php 	include 'header.php'; ?>
<section class="row">
	<div class="col-sm-offset-4 col-sm-4 well" style="margin-top:10px">
		<form role="form" method="post" action="email.php">
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required/>
			</div>
			<div class="form-group">
				<label for="email">Email address</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required/>
			</div>
			<div class="form-group">
				<label for="message">Message</label>
				<textarea class="form-control" id="message" name="comments" rows="3"></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
			<button type="reset" class="btn btn-default">Clear</button>
		</form>
	</div>
</section>
<?php 	include 'footer.php'; ?>