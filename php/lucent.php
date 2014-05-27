<?php

$JSON = json_decode(file_get_contents('json/server_status.json', true));

function get_max_id(){
// returns the highest index in a json array
}

function get_top($i){
// returns i * height
return $i * 100;
}

function ping($url){
// sends a ping to url, returns with red if inactive or green if active; function can be found in jmac217.net/
}

for($i=0;$i<4;$i++){
	$server = $JSON->server[$i];
	$name = $server->name;
	$description = $server->description;
	$usage = $server->usage;
	$url = $server->url;
	echo "
		<div class='server_status'>
			<div id='".$i."' class='server' style='position:absolute;top:".get_top($i)."'>
				<div class='server_status_ping'>".ping($url)."</div>
				<div class='server_status_name'>".$name."</div>
				<div class='server_status_description'>".$description."</div>
				<div class='server_status_usage'>".$usage."</div>
				<div class='server_status_url'><a href='".$url."'>".$url."</a></div>
			</div>
		</div>
	";
}
?>
