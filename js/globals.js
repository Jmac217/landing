var notes_obj={page:0};
var notes_page_cap=3;

function post_notes(){
	$.post('php/tracker_todo.php',{notes_page:notes_obj.page},function(data){
	//alert(data);	
	//alert(notes_obj.page);
	$('#tracker_todo').html(data);
	$.getScript('js/queued.js',function(){/*nothing yet*/});
	});
}
function notes_next_id(notes_obj){
	//alert(notes_obj);
	notes_obj.page++;
	if(notes_obj.page>notes_page_cap){notes_obj.page=0;}
	console.log(notes_obj.page);
	post_notes();
}
function notes_last_id(notes_obj){
	notes_obj.page--;
	if(notes_obj.page==-1){notes_obj.page=notes_page_cap;}
	console.log(notes_obj.page);
	post_notes();
}
