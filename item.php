<?php include 'header.php'; ?>
<?php include 'item_data.php'; ?>
<div class="panel panel-default">

	<div class="panel-heading text-center"><h5>Lists Item</h5></div>

	<div class="panel-body">

		<div class="table-responsive">

			<table class="table table-bordered table-striped">

				<thead>
					<tr>
						<th>S. No.</th>
						<th>Item Name</th>
						<th>Checked</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<form method="post" action="item_data.php?list_id=<?php echo $_GET['list_id']; ?>">
							<td>Create New Item</td>
							<td><input type="text" class="form-control" placeholder="New Item Name" name="item_name"></td>
							<td></td>
							<td><input type="submit" name="list_name_submit" class="btn btn-primary" value="Submit"></td>
						</form>
					</tr>

					<?php 
						//Getting $result variable from data.php page
						if(mysqli_num_rows($result)){
						$i = 0; ?>

						<?php while($row = mysqli_fetch_array($result)){  ?>
							<?php 
								//initialise checked variable to uncheck
								$checked = 'checked';
								if($row['checked'] == 0){

									$checked = 'unchecked';

								}
							?>

							<tr>
								<td><?php echo ++$i; ?></td>
								<td><?php echo $row['item_name']; ?></td>
								<td><input class="active" type="checkbox" value="<?php echo $row['id']; ?>" <?php echo $checked; ?>></td>
								<td><a onclick="return confirm('Are you sure you want to delete this item?');" href="item_data.php?delete_id=<?php echo $row['id']; ?>&list_id=<?php echo $_GET['list_id']; ?>"><button class="btn btn-danger">Delete</button></a></td>
							</tr>

						<?php } ?>

					<?php }else{ ?>

					<tr>
						<td colspan="4">No Item Found in the list</td>
					</tr>

				<?php } ?>
					
				</tbody>
				
			</table>

		</div>

	</div>
</div>

<script type="text/javascript">
    $("input.active").click(function() {
        // store the values from the form checkbox box, then send via ajax below
        var check_active = $(this).is(':checked') ? 1 : 0;
        var check_id = $(this).attr('value');
        $.ajax({
            type: "POST",
            url: 'demo_test_post.php',
            data:'id='+check_id +'&active='+check_active,
            success: function(){
            }
        });
        return true;
    });
</script>

