<html>
	<head>
		<link rel='stylesheet' type='text/css' href='css/index.css' />
		<link rel='shortcut icon' href='res/lz.png' />
		<title>Landing Zone</title>
	</head>
	<body>
		<div id='doc'>
		
			<span id='title'><i>Landing Zone</i></span>
			
			<div id='panel'>
			
				<div id='webapps'>
					<p class='title'>Webapps</p>
					<ul>
						<li>
								<a href='./inventory/'>Inventory</a>
						</li>
						<li>
								<a href='./MLT/'>MLT</a>
						</li>
						<li>
								<a href='./TBOC/'>TBOC</a>
						</li>
						<li>
								<a href='./Codefront/photo'>Photo</a>
						</li>
						<li>
								<a href='./eto-reworked'>Sundial</a>
						</li>
						<li>
								<a href='http://localhost/Jmac217/Bocce'>Bocce</a>
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
			
			<div id='page'>
			
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
					<span id='marquee'><marquee><!-- Rss Stuff --></marquee></span>
					
					<div id='body_panel'>
						<span id='body_panel_links_queued'>Queued</span>
						<span id='body_panel_links_jot'>Jot</span>
						<span id='body_panel_links_lucent'>Lucent</span>
						<span id='body_panel_links_bugger'>Bugs</span>
					</div>
					
					<div id='bugger'>
						<?php include 'php/Bugger/php/bugger.php'; ?>
						<!--* This is the location for the actual landing bugger - bugger's view *-->
					</div>
					
					<div id='queued'>
						<?php include 'php/Queued/php/queued.php'; ?>
					</div>
					
					<div id='lucent'>
						<?php include 'php/lucent.php'; ?>
					</div>
					
					<div id='jot'>
						<?php include 'php/Jot/index.php'; ?>
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
		<script type='text/javascript' src='js/jquery.js'></script>
		<script type='text/javascript' src='js/index.js'></script>
	</body>
</html>
