
<!-- debug -->
<!--
<html>
	<head>
		<link rel='stylesheet' type='text/css' href='../../../css/index.css' />
	</head>
</html>
-->

<?php include 'connect.php';

// variables
$sql = 'SELECT * FROM queued';
$query = mysql_query($sql)or die(mysql_error());
$rows = mysql_num_rows($query);
$startingRow = 1;

// instantiate loop variables from $startingRow
$i = $startingRow;
$t = $startingRow;

// functions
/*
function setTop($i, $height){
	$height = $height+1;// plus 1 for border
	return $top = ($i * $height) - $height.'px'; // minus height to start from 0px
}
*/

// nothing to display
if ($rows == 0){
	echo "
		<span id='default'>You have no queued projects...</span>
	";
}else{
	// start loop
	while ($t<=$rows){
		$loop = mysql_query($sql." WHERE id='".$i."'");
		$row = mysql_fetch_assoc($loop);
		if (isset($row['id']) && $row['id']==$i){
			// set up HTML
			echo "
				<div class='project' id='".$row['id']."' style='top:".setTop($t, '100')."'>
					<span class='project_name'>".$row['name']."</span>
					<span class='project_priority'>".$row['priority']."</span>
					<span class='project_status'>".$row['status']."</span>
					<span class='project_selection'>
						<span class='project_selection_links'>
							<a class='project_selection_link_description'>description</a> |
							<a class='project_selection_link_jot'>notes</a> |
							<a class='project_selection_link_bugger'>bugs</a>
						</span>
						<span class='project_bugger'>".$row['bugger_id']."</span>
						<span class='project_description'>".$row['description']."</span>
						<span class='project_jot'>".$row['jot_id']."</span>
					</span>
					<span class='project_timestamp'>".$row['timestamp']."</span>
				</div>
			";
			$t++;
			$i++;
		}else{$i++;}
	}
}

?>