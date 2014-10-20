<html>
<head>
		<link rel='stylesheet' type='text/css' href='css/index.rework.css' />
		<link rel='stylesheet' type='text/css' href='css/dropdown.css' />
		<link rel='shortcut icon' href='res/pipe-blend.png' />
		<script type='text/javascript' src='js/jquery1.js'></script>
		<script type='text/javascript' src='js/showdown.js'></script>
		<script type='text/javascript' src='js/globals.js'></script>
		<script type='text/javascript' src='js/index.js'></script>
		<script type='text/javascript' src='js/queued.js'></script>
</head>
<body>	
	<div id='_queued' style='position:absolute;top:1%;left:1%;height:98%;width:98%'>
		<?php /*include 'php/queued.php';*/ ?>
		<div id='tracker'>
			<div id='tracker_header' class='border-box'>
				<div id='tracker_header_name' class='link link_button link_title'>
					<span id='tracker_header_name_text'></span>
					<span class="dropclick">&#9660;</span>
					<!-- dropdown -->
					<!--
					<div class='link link_button'>
						<div class='link_title'></div>
						-->
						<div>
							<div class='link_drop'></div>
						</div>
					<!--</div>-->
				</div>
				<div id='tracker_header_id'></div>
			</div>
			<div id='tracker_body' class='border-box'>
				<div id='tracker_top'>
					<div id='tracker_documentation'>
						<div id='tracker_documentation_collapse'>&#9650;</div>
						<div id='tracker_documentation_expand'>&#9660;</div>
						<div id='tracker_documentation_head'>
							<div id='tracker_documentation_left'>
								<div id='tracker_documentation_left_text'>&#9664;</div>
							</div>
							<div id='tracker_documentation_right'>
								<div id='tracker_documentation_right_text'>&#9654;</div>
							</div>
							<div id='tracker_documentation_head_title'></div>
							<div id='tracker_documentation_head_type'></div>
						</div>
						<div id='tracker_documentation_body'></div>
						<div id='tracker_documentation_foot' class='border-box'>
							<div id='tracker_documentation_edited'></div>
							<div id='tracker_documentation_date'></div>
							<div id='tracker_documentation_author'></div>
						</div>
					</div>
				</div>
				<div id='tracker_bottom'>
					<div id='tracker_todo'>
						<div id='tracker_todo_head' class='border-box'>
							<div id='tracker_todo_id'></div>
							<div id='tracker_todo_headline'></div>
							<div id='tracker_priority_index'>
								<div id='tracker_priority_index_value'>[Medium]</div>
							</div>
							<div id='tracker_todo_date'></div>
							<div id='tracker_todo_left'>
								<div id='tracker_todo_left_text'>&#9664;</div>
							</div>
							<div id='tracker_todo_right'>
								<div id='tracker_todo_right_text'>&#9654;</div>
							</div>

						</div>
						<div id='tracker_notes'>
							<div id='tracker_notes_left'>
								<div id='tracker_notes_left_text'>&#9664;</div>
							</div>
							<div id='tracker_notes_right'>
								<div id='tracker_notes_right_text'>&#9654;</div>
							</div>
							<div id='tracker_notes_body'></div>
							<div id='tracker_notes_foot' class='border-box'>
								<div id='tracker_notes_date'></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id='tracker_footer' class='border-box'></div>
		</div>
	</div>
</body>
</html>