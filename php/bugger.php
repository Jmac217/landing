
<!-- debug -->

<html>
	<head>
		<style>
			.bug{background-color:gray;}
			.bug_id{background-color:#666;}
			.bug_name{color:white;}
			.bug_status{position:absolute;right:30px;color:#DAA;}
			.bug_description{color:white;}
			.bug_date{color:black;}
		</style>
	</head>
</html>

<?php include 'connect.php';

// variables
$sql = 'SELECT * FROM bugs';
$query = mysql_query($sql)or die(mysql_error());
$rows = mysql_num_rows($query);
$startingRow = 1;

// instantiate loop variables from $startingRow
$i = $startingRow;
$t = $startingRow;

// functions
function setTop($i, $height){
	$height = $height+1;// plus 1 for border
	return $top = ($i * $height) - $height.'px'; // minus height to start from 0px
}

// nothing to display
if ($rows == 0){
	echo "
		<span id='default'>There are no bugs, that can't be right...</span>
	";
}else{
	// start loop
	while ($t<=$rows){
		$loop = mysql_query($sql." WHERE id='".$i."'");
		$row = mysql_fetch_assoc($loop);
		if (isset($row['id']) && $row['id']==$i){
			// set up HTML
			echo "
				<div class='bug' id='".$row['id']."' style='top:".setTop($t, '100')."'>
					<span class='bug_id'>".$row['id']."</span>
					<span class='bug_name'><a href='mailto:".$row['name']."'>".$row['name']."</a></span>
					<span class='bug_status'>".$row['status']."</span><br/>
					<span class='bug_description'>".$row['description']."</span><br/>
					<span class='bug_timestamp'>".$row['timestamp']."</span>
				</div><br/>
			";
			$t++;
			$i++;
		}else{$i++;}
	}
}

?>