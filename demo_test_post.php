<?php 
//Updating toggle checkbox
include 'mysqli_connect.php';
$id =  $_POST['id'];
$active_value = $_POST['active'];
$sql_update = "UPDATE tbl_item SET checked = $active_value WHERE id = $id";
$result = mysqli_query($dbc, $sql_update);
echo "Hello";
if($result){ ?>

	<script type="text/javascript">
		console.log("Done");
	</script>

<?php } ?>