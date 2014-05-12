<html>
<head>
	<title>Bugger</title>
	<link rel='stylesheet' type='text/css' href='css/index.css' />
	<link rel='shortcut icon' href='res/icon.png' />
</head>
<body>
<div id='doc'>
	<div id='form'>
		<div id='banner'>
			<span id='title'>Bugger</span>
			<span id='goback'>Return to Landing</span>
		</div>
		<div id='body'>
			<div id='bugger'>
				<h3>Report A New Issue</h3>

				<input type='text' id='name' value='Bug Name'></input><br />
				<input type='text' id='status' value='Status'></input><br />
				<input type='text' id='code' value='Error Code'></input><br />
				<input type='text' id='description' value='Bug Description' class='grows'></input><br />
				<input type='text' id='notes' value='Notes' class='grows'></input><br />
				<select id='selection'>
					<option>- Select Database -</option>
					<option>Inventory</option>
					<option>MLT</option>
					<option>Codefront</option>
					<option>Landing</option>
				</select><br />
				<input type='button' value='Send' id='send_report'/>
			</div>
		</div>
		<div id='footer'><span id='feedback'></span></div>
	</div>
</div>
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/index.js'></script>
</body>
</html>