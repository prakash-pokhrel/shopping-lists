<?php 
include 'mysqli_connect.php';

if($_POST){

	//Inserting into database
	if($_POST['list_name_submit']){

		$item_name = mysqli_real_escape_string($dbc, $_POST['item_name']);
		$list_id = $_GET['list_id'];
		echo "List id is:".$list_id;

		$sql_insert = "INSERT INTO tbl_item (item_name, list_id) VALUES ('$item_name', $list_id)";

		$response = mysqli_query($dbc,$sql_insert) or die('Error: ' . mysqli_error($dbc));
		
		if($response){

			echo "1 shopping list added";

		} 

	}
	mysqli_close($dbc);
	header('location:item.php?list_id='.$list_id);

}elseif(isset($_GET['delete_id'])){

	//DELETING FROM DATABASE
	$delete_id = $_GET['delete_id'];
	$list_id = $_GET['list_id'];
	$sql_delete = "DELETE FROM tbl_item where id = $delete_id";
	$response_delete = mysqli_query($dbc,$sql_delete) or die('Error: ' . mysqli_error($dbc));
	if($response_delete){

		echo "1 item in list deleted";

	}
	mysqli_close($dbc);
	header('location:item.php?list_id='.$list_id);

}else{

	
	//Getting all shopping list from database
	$sql = "SELECT * FROM tbl_item where list_id = ".$_GET['list_id'];
	$result = mysqli_query($dbc, $sql);

}



