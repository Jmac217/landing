<?php

//JSON rewrite
$JSON = json_decode(file_get_contents('json/database.json', true));

$project = $JSON->project[0];
$readme = $project->readme[0];
$todo = $project->todo[0];
$priority_index = $todo->priority_index[0];
$notes = $todo->notes[0];

echo "
	<div id='tracker'>
		<div id='tracker_header'>
			<div id='tracker_header_name'>".$project->name."</div>
			<div id='tracker_header_id'>Project ID: ".$project->id."</div>
		</div>
		<div id='tracker_body'>
			<div id='tracker_body_collpased'>
				<div id='tracker_list'>
				
					<!-- vv template for generated list vv -->
					
						<div class='tracker_list_item'>
							<div class='tracker_li_name'></div>
							<div class='tracker_li_type'></div>
							<div class='tracker_li_priority'></div>
							<div class='tracker_li_date'></div>
						</div>
						
					<!-- ^^ template for generated list ^^ -->
					
				</div>
			</div>
			<div id='tracker_body_expanded'>
				<div id='tracker_readme'>
					<div id='tracker_readme_text'>".$readme->body."</div>
					<div id='tracker_readme_foot'>
						<div id='tracker_readme_edited'>".$readme->edited."</div>
						<div id='tracker_readme_date'>".$readme->date."</div>
						<div id='tracker_readme_author'>".$readme->author."</div>
					</div>
				</div>

				<div id='tracker_todo'>
					<div id='tracker_todo_head'>
						<div id='tracker_todo_id'>".$todo->id.")</div>
						<div id='tracker_todo_headline'>".$todo->headline."</div>
						<div id='tracker_todo_date'>".$todo->date."</div>
						<div id='tracker_priority_index'>
							<div id='tracker_priority_index_value'>Medium</div>
						</div>
					</div>
					<div id='tracker_notes'>
						<div id='tracker_notes_body'>".$notes->body."</div>
						<div id='tracker_notes_foot'>
							<div id='tracker_notes_date'>".$notes->date."</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id='tracker_footer'>
			<!-- nothing so far -->
		</div>
	</div>
";

// SQL Variation
/*
include 'connect.php';

// variables
$sql = 'SELECT * FROM queued';
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
// end SQL variation
?>
