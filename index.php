<!DOCTYPE HTML>
<!--[if lt IE 7 ]> <html class="ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<html>
	<head>
		<link rel='stylesheet' type='text/css' href='css/index.css' />
		<link rel='shortcut icon' href='res/pipe-blend.png' />
		<script type='text/javascript' src='js/jquery1.js'></script>
		<script type='text/javascript' src='js/globals.js'></script>
		<script type='text/javascript' src='js/index.js'></script>
		<script type='text/javascript' src='js/queued.js'></script>
		<title>Landing Zone</title>
	</head>
	<body>
		<div id='user_panel'>
			<div id='login_area'>
				<input id='login_user' type='text' value='User' alt='User' />
				<input id='login_pass' type='password' value='Password' alt='Password' />
				<div id='login_slider' class='box bezzle'>
					<span id='login_forgotten'>I have forgotten my <span id='login_forgotten_username'>Username</span> or <span id='login_forgotten_password'>Password</span></span>
					<input id='login_submit' type='button' value='Login'/>
				</div>
			</div>
			<div id='user_data'></div>
			<div id='settings'>
				<div id='settings_slider' class='box bezzle'>
					<a class='settings_slider_li'>0</a>
					<a class='settings_slider_li'>1</a>
					<a class='settings_slider_li'>2</a>
					<a class='settings_slider_li'>3</a>
					<a class='settings_slider_li'>4</a>
					<a class='settings_slider_li'>5</a>
					<a class='settings_slider_li'>6</a>
					<a class='settings_slider_li'>7</a>
					<a class='settings_slider_li'>8</a>
					<a class='settings_slider_li'>9</a>
					<a class='settings_slider_li'>10</a>
					<a class='settings_slider_li'>11</a>
					<a class='settings_slider_li'>12</a>
					<a class='settings_slider_li'>13</a>
				</div>
			</div>
		</div>
		<div id='doc'>
		
			<span id='title'><i>Landing Zone</i></span>

			
			<div id='panel'>
				<div id='webapps'>
					<p class='title'>Webapps</p>
					<ul>
						<li>
								<a href='../inventory/'>Inventory</a>
						</li>
						<li>
								<a href='../MLT/'>MLT</a>
						</li>
						<li>
								<a href='../TBOC/'>TBOC</a>
						</li>
						<li>
								<a href='../Codefront/photo'>Photo</a>
						</li>
						<li>
								<a href='../eto-reworked'>Sundial</a>
						</li>
						<li>
								<a href='http://localhost/Jmac217/Bocce'>Bocce</a>
						</li>
						<li>
								<a href='http://localhost/TBOC/Customers/'>Customer Database</a>
						</li>
					<ul>
				</div>
				<div id='modules'>
					<p class='title'>Modules</p>
					<ul>
						<li>
								<a href='./php/Queued/'>Queued</a>
						</li>
						<li>
								<a href='./php/Jot/'>Jot</a>
						</li>
						<li>
								<a href='./php/lucent.php'>Lucent</a>
						</li>
						<li>
								<a href='./php/Bugger/'>Bugger</a>
						</li>
					<ul>
				</div>
				<span id='scripts'>
					<p class='title'><a href='script' class='headerLink'>Scripts<a></p>
				</span>
				<div id='databases'>
					<p class='title'>Databases</p>
					<ul>
						<li>
							<a href='./phpmyadmin/'>Localhost</a> / <a href=''>Ubuntu</a> / <a href=''>GoDaddy</a>
						</li><!-- localhost will need to become a dropdown. Listing for  "Work" and "Home", maybe even "Other" that pops up with a IP entry field. Why? Why not. -->
					</ul>
				</div>
			</div>
			<!-- /panel -->
			
			<div id='pages'>
			
				<div id='header'>
					<span id='time'><?php date_default_timezone_set("America/Chicago"); echo date("g:ia"); ?></span>
					<span id='date'><?php echo date("F d, Y"); ?></span>
					<span id='git' class='gitlinks'>
						<u>GitHub Repositories<br /></u>
						<a href='https://github.com/Jmac217/'>Jmac217</a> / <!-- these are going to be hover-dropdowns containing all urls for the github account -->
						<a href='https://github.com/codefrontdesign/'>Codefront</a>
					</span>
				</div>
				
				<div id='body'>
				
					<div id='body_panel'>
						<span id='body_panel_links_queued'>Project Queue</span>
						<span id='body_panel_links_jot'>Add a Note</span>
						<span id='body_panel_links_lucent'>Server Status</span>
						<span id='body_panel_links_bugger'>Bug Tracker</span>
					</div>

					<div id='home'>
						<span id='marquee'><marquee><!-- Rss Stuff from "newsbeard" --></marquee></span>
						<!-- application panel -->
						<!-- - pop this up a level, to be accessible from any of the pages -->
						<div id='queued'><?php /*include 'php/queued.php';*/ ?>
						
							<div id='tracker'>
								<div id='tracker_header'>
									<div id='tracker_header_name'></div>
									<div id='tracker_header_id'></div>
								</div>
								<div id='tracker_body'>
									<div id='tracker_top'>
										<div id='tracker_documentation'>
											<div id='tracker_documentation_collapse'>^</div>
											<div id='tracker_documentation_expand'>v</div>
											<div id='tracker_documentation_head'>
												<div id='tracker_documentation_head_title'>Documentation</div>
												<div id='tracker_documentation_head_type'>readme</div>
											</div>
											<div id='tracker_documentation_body'></div>
											<div id='tracker_documentation_foot'>
												<div id='tracker_documentation_edited'></div>
												<div id='tracker_documentation_date'></div>
												<div id='tracker_documentation_author'></div>
											</div>
										</div>
									</div>
									<div id='tracker_bottom'>
										<div id='tracker_todo'>
											<div id='tracker_todo_head'>
												<div id='tracker_todo_id'></div>
												<div id='tracker_todo_headline'></div>
												<div id='tracker_todo_date'></div>
												<div id='tracker_priority_index'>
													<div id='tracker_priority_index_value'>[Medium]</div>
												</div>
											</div>
											<div id='tracker_notes'>
												<div id='tracker_notes_left'>
													<div id='tracker_notes_left_text'><</div>
												</div>
												<div id='tracker_notes_right'>
													<div id='tracker_notes_right_text'>></div>
												</div>
												<div id='tracker_notes_body'></div>
												<div id='tracker_notes_foot'>
													<div id='tracker_notes_date'></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div id='tracker_footer'>
									<!-- nothing so far -->
								</div>
							</div>
						
						</div>
						<div id='jot'><?php include 'php/jot.php'; ?></div>
						<div id='lucent'><?php include 'php/lucent.php'; ?></div>
						<div id='bugger'><?php include 'php/bugger.php'; ?><!--* This is the location for the actual landing bugger - bugger's view *--></div>
					</div>
					
					<!-- application exchange -->
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
					
				</div>
			</div>
			<div id='footer'>
				<span id='quick_links'>
					<span class='gitlinks'>
						<a class='accepted' href='http://www.codefrontdesign.com/'>.Codefront</a> | <a class='accepted' href='http://www.godaddy.com/'>GoDaddy</a>
					</span>
				</span>
			</div>
		</div>
		<div id='extra_footer'></div>
	</body>
</html>
