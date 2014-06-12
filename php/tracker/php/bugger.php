
<!-- debug -->
<!--
<html>
	<head>
		<link rel='stylesheet' type='text/css' href='../css/index.css' />
	</head>
</html>
-->

<?php include 'connect.php';

// variables
$sql = 'SELECT * FROM inventory';
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
					<span class='bug_name'>".$row['name']."</span>
					<span class='bug_status'>".$row['status']."</span>
					<span class='bug_selection'>
						<span class='bug_selection_links'>
							<a class='bug_selection_link_code'>code</a> |
							<a class='bug_selection_link_description'>description</a> |
							<a class='bug_selection_link_notes'>notes</a>
						</span>
						<span class='bug_code'>".$row['code']."</span>
						<span class='bug_description'>".$row['description']."</span>
						<span class='bug_notes'>".$row['notes']."</span>
					</span>
					<span class='bug_timestamp'>".$row['timestamp']."</span>
				</div>
			";
			$t++;
			$i++;
		}else{$i++;}
	}
}

?>