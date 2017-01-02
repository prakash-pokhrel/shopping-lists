<?php 
include 'mysqli_connect.php';

if($_POST){

	//Inserting into database
	if($_POST['list_name_submit']){

		$list_name = mysqli_real_escape_string($dbc, $_POST['list_name']);

		$sql_insert = "INSERT INTO tbl_list (list_name) VALUES ('$list_name')";

		$response = mysqli_query($dbc,$sql_insert) or die('Error: ' . mysqli_error($dbc));
		
		if($response){

			echo "1 shopping list added";

		} 

	}
	mysqli_close($dbc);
	header('location:shopping_list.php');

}elseif($_GET){

	//DELETING FROM DATABASE
	$delete_id = $_GET['delete_id'];
	$sql_delete_item = "DELETE FROM tbl_item where list_id = $delete_id";
	$response_delete = mysqli_query($dbc,$sql_delete_item) or die('Error: ' . mysqli_error($dbc));
	$sql_delete = "DELETE FROM tbl_list where id = $delete_id";
	$response_delete = mysqli_query($dbc,$sql_delete) or die('Error: ' . mysqli_error($dbc));
	if($response_delete){

		echo "1 Shopping list deleted";

	}
	mysqli_close($dbc);
	header('location:shopping_list.php');

}else{

	
	//Getting all shopping list from database
	$sql = "SELECT * FROM tbl_list";
	$result = mysqli_query($dbc, $sql);

}



