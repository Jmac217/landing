$(document).ready(function(){

// tracker views
// readme
$('#tracker_readme_collapse').click(function(){
	$('#tracker_readme').animate({'height':'40px'}).css({'overflow':'hidden'});
	$('#tracker_todo').animate({'top':'20px'});
	$('#tracker_notes').animate({'height':'360px'});
	$('#tracker_readme_collapse').css({'visibility':'hidden'});
	$('#tracker_readme_expand').css({'visibility':'visible'});
});
$('#tracker_readme_expand').click(function(){
	$('#tracker_readme').animate({'height':'246px'});
	$('#tracker_todo').animate({'top':'246px'});
	$('#tracker_notes').animate({'height':'134px'});
	$('#tracker_readme_expand').css({'visibility':'hidden'});
	$('#tracker_readme_collapse').css({'visibility':'visible'});
});
// notes
var notes_page=0;
var notes_page_cap=3;
function post_notes(){
	$.post('php/queued.php',{notes_page:notes_page},function(data){
	alert(data);	
	$('#tracker_notes_body').html(data);
	});
}
function notes_next_id(notes_page){
	notes_page++;
	post_notes();
	return notes_page;
}
function notes_last_id(notes_page){
	notes_page--;
	post_notes();
	return notes_page;
}
$('#tracker_notes_left').click(function(){});
$('#tracker_notes_right').click(function(){});

// queued
	$('#body_panel_links_queued').click(function(){
		$('#queued').css({'visibility':'visible'});
			$('#lucent').css({'visibility':'hidden'});
			$('#jot').css({'visibility':'hidden'});
			$('#bugger').css({'visibility':'hidden'});
	});
	
// server info
	$('#body_panel_links_lucent').click(function(){
		$('#lucent').css({'visibility':'visible'});
			$('#queued').css({'visibility':'hidden'});
			$('#jot').css({'visibility':'hidden'});
			$('#bugger').css({'visibility':'hidden'});
	});
	
// jot
	$('#body_panel_links_jot').click(function(){
		$('#jot').css({'visibility':'visible'});
			$('#queued').css({'visibility':'hidden'});
			$('#lucent').css({'visibility':'hidden'});
			$('#bugger').css({'visibility':'hidden'});
	});
	
// bugger
	$('#body_panel_links_bugger').click(function(){
		$('#bugger').css({'visibility':'visible'});
			$('#queued').css({'visibility':'hidden'});
			$('#lucent').css({'visibility':'hidden'});
			$('#jot').css({'visibility':'hidden'});
	});
	$('.bug_selection_link_code').click(function(){
		$(this).parent().siblings('.bug_description').css({'visibility':'hidden'});
		$(this).parent().siblings('.bug_notes').css({'visibility':'hidden'});
		$(this).parent().siblings('.bug_code').css({'visibility':'visible'});
	});
	$('.bug_selection_link_description').click(function(){
		$(this).parent().siblings('.bug_description').css({'visibility':'visible'});
		$(this).parent().siblings('.bug_notes').css({'visibility':'hidden'});
		$(this).parent().siblings('.bug_code').css({'visibility':'hidden'});
	});
	$('.bug_selection_link_notes').click(function(){
		$(this).parent().siblings('.bug_description').css({'visibility':'hidden'});
		$(this).parent().siblings('.bug_notes').css({'visibility':'visible'});
		$(this).parent().siblings('.bug_code').css({'visibility':'hidden'});
	});

/* bugger */
/*
	$('#goback').click(function(){
		document.location.href='http://localhost/';
	});

	$('input[type="text"]').click(function(){
		$(this).select();
	}).mouseover(function(){
		$(this).css({'border':'solid 1px #016CA4'});
	}).mouseout(function(){
		$(this).css({'border':'none'});
	});
	
	$('.grows').click(function(){
		$(this).animate({'width':'600px'});
	}).mouseleave(function(){
		$(this).animate({'width':'200px'});
	});
	
	$('#send_report').click(function(){
		var name = $('#name').val();
		var status = $('#status').val();
		var code = $('#code').val();
		var description = $('#description').val();
		var notes = $('#notes').val();
		var select = $('#selection option:selected').text();
		if(select == '- Select Database -'){
			$('#feedback').html('Select a Database');
		}else if(select != 'Inventory'){
			$('#feedback').html('This database does not exist yet');
		}else if(name == 'Bug Name' || name == ''){
			$('#feedback').html('This bug needs a name');
		}else{
			$.post('php/send_report.php',{name:name,status:status,code:code,description:description,notes:notes,select:select},function(data){
				if(data==''){
					$('#feedback').css({'color':'green'}).html('This bug has been filed');
				}else{
					$('#feedback').html('Query was unsuccessful');
				}
			});
		}
	});
*/
});
