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

$.getJSON('json/database.json',function(json){

	var notes_page_cap=3;

	var project = json.project[0];
	var readme = project.readme[0];
	var todo = project.todo[1];
	var notes = todo.notes[0];
	var priority_index = todo.priority_index[0];
	
	function notes_body_next(){
		
	}
	
	$('#tracker_header_name').html(project.name);
	$('#tracker_header_id').html('Project ID: '+project.id);
	$('#tracker_readme_text').html(readme.body);
	$('#tracker_readme_edited').html(readme.edited);
	$('#tracker_readme_date').html(readme.date);
	$('#tracker_readme_author').html(readme.author);
	$('#tracker_todo_id').html(todo.id+')');
	$('#tracker_todo_headline').html(todo.headline);
	$('#tracker_todo_date').html(todo.date);
	$('#tracker_notes_body').html(notes.body);
	$('#tracker_notes_date').html(notes.date);
	
	$('#tracker_notes_left').click(function(){
		var next = todo.notes[1].body;
		$('#tracker_notes_body').html(notes_body_next());
	/*
	if(notes.page>notes_page_cap){
		notes.page=0;
	}
	return notes=todo.notes[notes.page];
	console.log(notes_obj.page);
	*/
	});
	$('#tracker_notes_right').click(function(){
		//$('#tracker_notes_body').html(notes_body_prev());
	/*
		(int)notes.page--;
	if(notes.page==-1){
		notes.page=notes_page_cap;
	}
	return notes=todo.notes[notes_obj.page];
	console.log(notes_obj.page);
	*/
	});
	
	// debug
	//console.log(project.name+' '+project.id);
});




});
