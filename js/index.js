$(document).ready(function(){

/** queued **/
	$('#body_panel_links_queued').click(function(){
		$('#queued').css({'visibility':'visible'});
			$('#lucent').css({'visibility':'hidden'});
			$('#jot').css({'visibility':'hidden'});		
			$('#bugger').css({'visibility':'hidden'});
	});
/** server info **/
	$('#body_panel_links_lucent').click(function(){
		$('#lucid').css({'visibility':'visible'});
			$('#queued').css({'visibility':'hidden'});
			$('#jot').css({'visibility':'hidden'});		
			$('#bugger').css({'visibility':'hidden'});
	});
/** jot **/
	$('#body_panel_links_jot').click(function(){
		$('#jot').css({'visibility':'visible'});
			$('#queued').css({'visibility':'hidden'});
			$('#lucent').css({'visibility':'hidden'});
			$('#bugger').css({'visibility':'hidden'});		
	});
/** bugger **/
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
});