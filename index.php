<?php include("db.php");?>
<?php include("includes/header.php"); ?>


<div class="container p-4">
	<div class="row">
		<div class="col-md-4">
			<?php 
			session_start();
			if (isset($_SESSION["saved_task"]) || isset($_SESSION["deleted_task"]) || isset($_SESSION["edited_task"]) == true): ?>
			<div class="alert alert-<?php echo $_SESSION['color']; ?> alert-dismissible fade show" role="alert">
				<p><?php echo $_SESSION["message"]; ?></p><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<?php endif;
			session_destroy();
			 ?>
			<div class="card card-body">
				<form action="save_task.php" method="post">
					<div class="form-group">
						<input type="text" name="title" class="form-control" placeholder="Task Title">
						<div class="form-group">
							<textarea class="form-control" name="description" rows="2" placeholder="taks description"></textarea>
						</div>
						<input class="btn btn-success btn-block" type="submit" value="Save Task" name="save_task">

					</div>
				</form>
			</div>
		</div>
		<div class="col-md-8">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Title</th>
						<th>Description</th>
						<th>Created At</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$query = "SELECT ID, title, description, created  FROM task";

						$stmt = $conn->prepare($query);

						$stmt->execute();

						$stmt->setFetchMode(PDO::FETCH_ASSOC);
						while ($row = $stmt->fetch()):
					?>
					 <tr>
					 	<td><?php echo $row["title"]; ?> </td>
					 	<td><?php echo $row["description"]; ?> </td>
					 	<td><?php echo $row["created"]; ?> </td>
					 	<td>
					 		<a href="edit_task.php?ID=<?php echo $row['ID']; ?>" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
					 		<a href="delete_task.php?ID=<?php echo $row['ID']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
					 	</td>
					 </tr>
					<?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
 <?php include("includes/footer.php"); ?>