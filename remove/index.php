<html>
	<head>
		<link rel='stylesheet' type='text/css' href='Jmac217/landing/css/index.css' />
		<link rel='shortcut icon' href='Jmac217/landing/res/lz.png' />
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
								<a href='./Jmac217/inventory/'>Inventory</a>
						</li>
						<li>
								<a href='./Jmac217/MLT/'>MLT</a>
						</li>
						<li>
								<a href='./TBOC/'>TBOC</a>
						</li>
						<li>
								<a href='./Codefront/photo'>Photo</a>
						</li>
						<li>
								<a href='./Jmac217/eto-reworked'>Sundial</a>
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
								<a href='./Jmac217/landing/php/Queued/'>Queued</a>
						</li>
						<li>
								<a href='./Jmac217/landing/php/Jot/'>Jot</a>
						</li>
						<li>
								<a href='./Jmac217/landing/php/lucent.php'>Lucent</a>
						</li>
						<li>
								<a href='./Jmac217/landing/php/Bugger/'>Bugger</a>
						</li>
					<ul>
				</div>
				
				<span id='scripts'>
					<p class='title'><a href='Jmac217/script' class='headerLink'>Scripts<a></p>
				</span>
				
				<div id='databases'>
					<p class='title'>Databases</p>
					<ul>
						<li>
							<a href='./phpmyadmin/'>Localhost</a> / <a href='http://10.0.0.241/phpmyadmin/'>Ubuntu</a> / <a href='https://p3nlmysqladm002.secureserver.net/dgrid50/207/index.php'>GoDaddy</a>
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
						<?php include 'Jmac217/landing/php/Bugger/php/bugger.php'; ?>
						<!--* This is the location for the actual landing bugger - bugger's view *-->
					</div>
					
					<div id='queued'>
						<?php include 'Jmac217/landing/php/Queued/php/queued.php'; ?>
					</div>
					
					<div id='lucent'>
						<?php include 'Jmac217/landing/php/lucent.php'; ?>
					</div>
					
					<div id='jot'>
						<?php include 'Jmac217/landing/php/Jot/index.php'; ?>
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
		<script type='text/javascript' src='Jmac217/landing/js/jquery.js'></script>
		<script type='text/javascript' src='Jmac217/landing/js/index.js'></script>
	</body>
</html>
