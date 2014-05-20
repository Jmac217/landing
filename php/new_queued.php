<?php

echo "<link rel='stylesheet' href='../css/queued.css'/>";

$startingRow = 1;

// instantiate loop variables from $startingRow
$i = $startingRow;
$t = $startingRow;

// functions

function setTop($i, $height){
	$height = $height+1;// plus 1 for border
	return $top = ($i * $height) - $height.'px'; // minus height to start from 0px
}

$JSON = json_decode(file_get_contents('../json/databases.json', true));

$project = $JSON->project[1];
$readme = $project->readme[0];
$todo = $project->todo[1];
$notes = $todo->notes[0];

echo "<div id='queued'>";

echo $project->id;

echo "<br/>".$readme->body;
echo "<br/>".$readme->edited;
echo "<br/>".$readme->date;
echo "<br/>".$readme->author;

echo "<br/>".$todo->id;
echo "<br/>".$todo->priority;
echo "<br/>".$todo->type;
echo "<br/>".$todo->headline;

echo "<br/>".$notes->body;
echo "<br/>".$notes->date;

echo "<br/>".$todo->date;

echo "</div>";

// nothing to display
/*
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
*/
?>
