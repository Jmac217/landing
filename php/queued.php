<?php

//JSON rewrite
$JSON = json_decode(file_get_contents('json/database.json', true));

$project = $JSON->project[0];
$documentation = $project->documentation[0];
$todo = $project->todo[1];
$notes = $todo->notes[0];
$priority_index = $todo->priority_index[0];

//$file = file_get_contents($documentation->body,true);


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
				<div id='tracker_documentation'>
					<div id='tracker_documentation_collapse'>^</div>
					<div id='tracker_documentation_expand'>v</div>
					<!-- still need something done with 'type' and 'title' -->
					<div id='tracker_documentation_text'>".$documentation->body."</div>
					<div id='tracker_documentation_foot'>
						<div id='tracker_documentation_edited'>".$documentation->edited."</div>
						<div id='tracker_documentation_date'>".$documentation->date."</div>
						<div id='tracker_documentation_author'>".$documentation->author."</div>
					</div>
				</div>
				<div id='tracker_todo'>";
					//include "php/tracker_todo.php";
					echo "
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
				echo"
				</div>
			</div>
		</div>
		<div id='tracker_footer'>
			<!-- nothing so far -->
		</div>
	</div>
";
?>
