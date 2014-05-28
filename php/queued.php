<?php

//JSON rewrite
$JSON = json_decode(file_get_contents('json/database.json', true));

$project = $JSON->project[0];
$readme = $project->readme[0];

//$file = file_get_contents($readme->body,true);


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
					<div id='tracker_readme_collapse'>^</div>
					<div id='tracker_readme_expand'>v</div>
					<div id='tracker_readme_text'>".$readme->body."</div>
					<div id='tracker_readme_foot'>
						<div id='tracker_readme_edited'>".$readme->edited."</div>
						<div id='tracker_readme_date'>".$readme->date."</div>
						<div id='tracker_readme_author'>".$readme->author."</div>
					</div>
				</div>
				<div id='tracker_todo'>";
					include "php/tracker_todo.php";
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
