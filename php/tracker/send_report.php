<?php

mysql_connect('localhost','root','');
mysql_select_db('landing');

if(isset($_POST['name'])&&isset($_POST['type'])&&isset($_POST['description'])){
	$name = $_POST['name'];
	//$status = $_POST['status'];
	$type = $_POST['type'];
	$description = $_POST['description'];
	$timestamp = date("Y-m-d");
	
	$sql = "INSERT INTO bugs(name,type,description,timestamp) VALUES('$name','$type','$description','$timestamp')";
	$query = mysql_query($sql)or die(mysql_error());
}

?>