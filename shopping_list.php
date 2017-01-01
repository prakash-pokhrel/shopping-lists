<?php include 'header.php'; ?>
<?php include 'data.php'; ?>
<div class="panel panel-default">

	<div class="panel-heading text-center"><h5>Shopping Lists</h5></div>

	<div class="panel-body">

		<div class="table-responsive">

			<table class="table table-bordered table-striped">

				<thead>
					<tr>
						<th>S. No.</th>
						<th>Shopping List Name</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<form method="post" action="data.php">
							<td>Create New List</td>
							<td><input type="text" class="form-control" placeholder="New List Name" name="list_name"></td>
							<td><input type="submit" name="list_name_submit" class="btn btn-primary" value="Submit"></td>
						</form>
					</tr>

					<?php 
						//Getting $result variable from data.php page
						if(mysqli_num_rows($result)){ ?>

						<?php while($row = mysqli_fetch_array($result)){ ?>

							<tr>
								<td><?php echo $row['id']; ?></td>
								<td><a href="#"><?php echo $row['list_name']; ?></a></td>
								<td><a href="#"><button class="btn btn-danger">Delete</button></a></td>
							</tr>

						<?php } ?>

					<?php }else{ ?>

					<tr>
						<td colspan="3">No Item Found in the list</td>
					</tr>

				<?php } ?>
					
				</tbody>
				
			</table>

		</div>

	</div>
</div>