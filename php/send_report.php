<?php include 'connect.php';

if(isset($_POST['name'])&&isset($_POST['status'])&&isset($_POST['code'])&&isset($_POST['description'])&&isset($_POST['notes'])&&isset($_POST['select'])){
	$name = $_POST['name'];
	$status = $_POST['status'];
	$code = $_POST['code'];
	$description = $_POST['description'];
	$notes = $_POST['notes'];
	$selection = $_POST['select'];
	$timestamp = date("Y-m-d");
	
	$sql = "INSERT INTO inventory(name,status,code,description,notes,timestamp) VALUES('$name','$status','$code','$description','$notes','$timestamp')";
	$query = mysql_query($sql)or die(mysql_error());
}

?>