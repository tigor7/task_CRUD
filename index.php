<?php include("db.php");?>
<?php include("includes/header.php"); ?>


<div class="container p-4">
	<div class="row">
		<div class="col-md-4">
			<div class="card card-body">
				<form action="">
					<div class="form-group">
						<input type="text" name="title" class="form-control" placeholder="Task Title">
						<div class="form-group">
							<textarea class="form-control" name="descriptio" rows="2">
							</textarea>
						</div>
						<input class="btn btn-success btn-block" type="submit" value="Save Task">

					</div>
				</form>
			</div>
		</div>
	</div>
</div>
 <?php include("includes/footer.php"); ?>