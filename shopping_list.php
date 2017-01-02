<?php include 'header.php'; ?>
<?php include 'shopping_list_data.php'; ?>
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
						<form method="post" action="shopping_list_data.php">
							<td>Create New List</td>
							<td><input type="text" class="form-control" placeholder="New List Name" name="list_name"></td>
							<td><input type="submit" name="list_name_submit" class="btn btn-primary" value="Submit"></td>
						</form>
					</tr>

					<?php 
						//Getting $result variable from data.php page
						if(mysqli_num_rows($result)){ ?>

						<?php 
							$i = 0;
							while($row = mysqli_fetch_array($result)){ ?>

							<tr>
								<td><?php echo ++$i; ?></td>
								<td><a href="item.php?list_id=<?php echo $row['id']; ?>"><?php echo $row['list_name']; ?></a></td>
								<td><a onclick="return confirm('Are you sure you want to delete this list and item inside it?');" href="shopping_list_data.php?delete_id=<?php echo $row['id']; ?>"><button class="btn btn-danger">Delete</button></a></td>
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