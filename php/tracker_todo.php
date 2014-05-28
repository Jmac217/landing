<?php 

if(isset($_POST['notes_page'])){
	$path='../';
	echo $notes_page = (int)$_POST['notes_page'];
}else{
	$path='./';
	$notes_page = 0;
}

$JSON = json_decode(file_get_contents($path.'json/database.json', true));

$project = $JSON->project[0];
$todo = $project->todo[1];
$notes = $todo->notes[$notes_page];
$priority_index = $todo->priority_index[0];

echo"
	<div id='tracker_todo_head'>
		<div id='tracker_todo_id'>".$todo->id.")</div>
		<div id='tracker_todo_headline'>".$todo->headline."</div>
		<div id='tracker_todo_date'>".$todo->date."</div>
		<div id='tracker_priority_index'>
			<div id='tracker_priority_index_value'>Medium</div>
		</div>
	</div>
	<div id='tracker_notes'>
		<div id='tracker_notes_left'>
			<div id='tracker_notes_left_text'><</div>
		</div>
		<div id='tracker_notes_right'>
			<div id='tracker_notes_right_text'>></div>
		</div>
		<div id='tracker_notes_body'>".$notes->body."</div>
		<div id='tracker_notes_foot'>
			<div id='tracker_notes_date'>".$notes->date."</div>
		</div>
	</div>
";
?>