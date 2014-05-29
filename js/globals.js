var notes_obj={page:0};
var notes_page_cap=3;

function post_notes(){

	/* jQuery */
	

	/* php */
	/*
	$.post('php/tracker_todo.php',{notes_page:notes_obj.page},function(data){
		$('#tracker_todo').html(data);
		$.getScript('js/queued.js',function(){});
	});
	*/
}
function notes_next_id(notes_obj){
	//alert(notes_obj);
	notes_obj.page++;
	if(notes_obj.page>notes_page_cap){
		notes_obj.page=0;
	}
	notes=todo.notes[notes_obj.page];
	console.log(notes_obj.page);
	//post_notes();
}
function notes_last_id(notes_obj){
	notes_obj.page--;
	if(notes_obj.page==-1){
		notes_obj.page=notes_page_cap;
	}
	notes=todo.notes[notes_obj.page];
	console.log(notes_obj.page);
	//post_notes();
}
