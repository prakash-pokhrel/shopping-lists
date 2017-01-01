<?php include 'mysqli_connect.php'; 


//Getting all shopping list from database
$sql = "SELECT * FROM tbl_list";
$result = mysqli_query($dbc, $sql);


