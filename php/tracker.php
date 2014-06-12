<html>
<head>
	<title>Bugger</title>
	<style>
		body{font-size:20px;background-image:url(../../../landing/res/landing8.jpg);}
		select{position:relative;top:10px;border-style:none;height:30px;width:200px;font-size:20px;text-align:center;background-color:#CCC;color:#222;}
		input{border-style:none;text-align:center;}
		input[type='text']{height:30px;width:200px;font-size:20px;background-color:#CCC;color:#222}
		input[type='button']{position:relative;top:20px;cursor:pointer;background-color:#016CA4;height:30px;width:100px;color:#EEE;border:solid 1px black;font-size:15px;}
		input[type='button']:hover{cursor:pointer;}
		#doc{top:20%;left:10%;width:80%;height:60%;}
		#form{position:absolute;top:10%;left:10%;height:80%;width:80%;background-color:#222;}
		#banner{position:absolute;top:0px;left:0px;height:10%;width:100%;background-color:#016CA4;color:#EEE;}
		#title{position:absolute;bottom:2px;right:15px;font-size:40px;}
		#goback{position:absolute;bottom:2px;left:10px;font-size:20px;cursor:pointer;}
		#body{position:absolute;top:10%;left:0px;height:85%;width:100%;background-color:#CCC;text-align:center;color:#222;}
		#bugger{position:relative;top:75px;}
		#footer{position:absolute;bottom:0px;left:0px;height:5%;width:100%;background-color:#AAA;text-align:center;color:red;font-size:25px;}
	</style>
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