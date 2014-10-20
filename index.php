<!-- 
    Landing Zone: A project management board
    Copyright (C) 2014 Jordan Elder

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
-->
<!DOCTYPE HTML>
<!--[if lt IE 7 ]> <html class="ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
	<head>
		<link rel='stylesheet' type='text/css' href='css/index.rework.css' />
		<link rel='stylesheet' type='text/css' href='css/dropdown.css' />
		<link rel='shortcut icon' href='res/pipe-blend.png' />
		<script type='text/javascript' src='js/jquery1.js'></script>
		<script type='text/javascript' src='js/showdown.js'></script>
		<script type='text/javascript' src='js/globals.js'></script>
		<script type='text/javascript' src='js/index.js'></script>
		<script type='text/javascript' src='js/queued.js'></script>
		<title>Landing Zone</title>
	</head>
	<body>
		<div id='doc'>
			<span id='title'>Landing Zone</span>
			<div id='header' class='border-box'>
				<span id='time'><?php date_default_timezone_set("America/Chicago"); echo date("g:ia"); ?></span>
				<span id='date'><?php echo date("F d, Y"); ?></span>
				<span id='git' class='gitlinks'>
					GitHub Repositories
					<br />
					<a href='https://github.com/Jmac217/'>Jmac217</a> / 
					<a href='https://github.com/codefrontdesign/'>Codefront</a>
				</span>
			</div>
			<div id='home_panel' class='border-box'></div>
			<div id='pages'>
				<div id='body'>
					<div id='body_panel' class='border-box'></div>
					<div id='view'>
						<span id='marquee'>
							<marquee></marquee>
						</span>
						<div id='_queued'>
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
						<div id='_jot'><?php //include 'php/jot.php'; ?></div>
						<div id='_lucent'><?php //include 'php/lucent.php'; ?></div>
						<div id='_bugger'><?php //include 'php/bugger.php'; ?></div>
					</div>
					
					<!--
					<div class='queued'></div>
					<div class='jot'></div>
					<div class='lucent'></div>
					<div class='bugger'>
						<div id='bugger_form'>
							<div id='bugger_banner'>
								<span id='bugger_banner_title'>Bugger</span>
								<span id='bugger_banner_return'>Return to Landing</span>
							</div>
							<div id='bugger_body'>
								<div id='bugger'>
									<h3>Report A New Issue</h3>
									<input type='text' id='bugger_name' value='Bug Name'></input><br />
									<input type='text' id='bugger_status' value='Status'></input><br />
									<input type='text' id='bugger_code' value='Error Code'></input><br />
									<input type='text' id='bugger_description' value='Bug Description' class='grows'></input><br />
									<input type='text' id='bugger_notes' value='Notes' class='grows'></input><br />
									<select id='bugger_selection'>
										<option>- Select Database -</option>
										<option>Inventory</option>
										<option>MLT</option>
										<option>Codefront</option>
										<option>Landing</option>
									</select><br />
									<input type='bugger_button' value='Send' id='send_report'/>
								</div>
							</div>
							<div id='bugger_footer'><span id='bugger_footer_feedback'></span></div>
						</div>
					</div>
					-->
				</div>
			</div>
			<div id='footer' class='border-box'>
				<span id='quick_links'>
					<span class='gitlinks'>
						<a class='accepted' href='http://www.codefrontdesign.com/'>.Codefront</a> | <a class='accepted' href='http://www.godaddy.com/'>GoDaddy</a>
					</span>
				</span>
			</div>
		</div>
	</body>
</html>
