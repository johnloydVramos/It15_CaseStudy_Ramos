<?php
//including the database connection file
include("connect.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$query = "DELETE FROM users_tbl WHERE id=$id";
$result = $con->query($query);


//redirecting to the display page (index.php in our case)
header("Location:view.php");
?>