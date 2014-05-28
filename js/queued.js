$(document).ready(function(){
// tracker views
// readme
$('#tracker_readme_collapse').click(function(){
	$('#tracker_readme').animate({'height':'40px'});
	$('#tracker_todo').animate({'top':'20px','height':'390px'});
	$('#tracker_notes').animate({'height':'360px'});
	$('#tracker_notes_body').animate({'height':'330px'});
	$('#tracker_readme_collapse').css({'visibility':'hidden'});
	$('#tracker_readme_expand').css({'visibility':'visible'});
	setTimeout(function(){
		$('#tracker_readme_text').css({'visibility':'hidden'});
	},370);
});
$('#tracker_readme_expand').click(function(){
	$('#tracker_readme').animate({'height':'246px'});
	$('#tracker_todo').animate({'top':'246px','height':'164px'});
	$('#tracker_notes').animate({'height':'134px'});
	$('#tracker_notes_body').animate({'height':'95px'});
	$('#tracker_readme_expand').css({'visibility':'hidden'});
	$('#tracker_readme_collapse').css({'visibility':'visible'});
	$('#tracker_readme_text').css({'visibility':'visible'});
});

// notes


$('#tracker_notes_left').click(function(){notes_last_id(notes_obj);});
$('#tracker_notes_right').click(function(){notes_next_id(notes_obj);});
});
