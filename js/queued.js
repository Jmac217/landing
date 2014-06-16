$(document).ready(function(){
// tracker views
// documentation
$('#tracker_documentation_collapse').click(function(){
	$('#tracker_documentation').animate({'height':'35px'});
	$('#tracker_todo').animate({'top':'20px','height':'390px'});
	$('#tracker_notes').animate({'height':'360px'});
	$('#tracker_notes_body').animate({'height':'330px'});
	$('#tracker_documentation_collapse').css({'visibility':'hidden'});
	$('#tracker_documentation_expand').css({'visibility':'visible'});
	$('#tracker_top').css({'visibility':'visible'});
	setTimeout(function(){
		$('#tracker_documentation_body').css({'visibility':'hidden'});
	},370);
});
$('#tracker_documentation_expand').click(function(){
	$('#tracker_documentation').animate({'height':'246px'});
	$('#tracker_todo').animate({'top':'246px','height':'164px'});
	$('#tracker_notes').animate({'height':'134px'});
	$('#tracker_notes_body').animate({'height':'95px'});
	$('#tracker_documentation_expand').css({'visibility':'hidden'});
	$('#tracker_documentation_collapse').css({'visibility':'visible'});
	$('#tracker_top').css({'visibility':'hidden'});
	$('#tracker_documentation_body').css({'visibility':'visible'});
});

$.getJSON('json/database.json',function(json){
	
	var project_init = 0;
	var documentation_init = 0;
	var todo_init = 1;
	var notes_init = 0;
	var priority_index_init = 0;

	var project_num = project_init;
	var documentation_num = documentation_init;
	var todo_num = todo_init;
	var notes_num = notes_init;
	var priority_index_num = priority_index_init;

	var project = json.project[project_num];
	var documentation = project.documentation[documentation_num];
	var todo = project.todo[todo_num];
	var notes = todo.notes[notes_num];
	var priority_index = todo.priority_index[priority_index_num];

	var project_cap = json.project.length;
	var documentation_cap = project.documentation.length;
	var todo_cap = project.todo.length;
	var notes_cap = (todo.notes.length)-1;// minus 1 for index of 0
	var priority_index_cap = todo.priority_index.length;

	$('#tracker_header_name').html(project.name);
	$('#tracker_header_id').html('Project ID: '+project.id);
	$('#tracker_documentation_body').html(documentation.body);
	$('#tracker_documentation_edited').html(documentation.edited);
	$('#tracker_documentation_date').html(documentation.date);
	$('#tracker_documentation_author').html(documentation.author);
	$('#tracker_todo_id').html(todo.id+')');
	$('#tracker_todo_headline').html(todo.headline);
	$('#tracker_todo_date').html(todo.date);
	$('#tracker_notes_body').html(notes.body);
	$('#tracker_notes_date').html(notes.date);

	// todo
	$('#tracker_todo_').click(function(){});

	// notes
	$('#tracker_notes_right').click(function(){
		if(notes_num<notes_cap){
			++notes_num;
		}else{
			notes_num=notes_init;
		}
		notes = todo.notes[notes_num];
		$('#tracker_notes_body').html(notes.body);
		$('#tracker_notes_date').html(notes.date);
	});

	$('#tracker_notes_left').click(function(){
		if(notes_num>0){
			--notes_num;
		}else{
			notes_num=notes_cap;
		}
		notes = todo.notes[notes_num];
		$('#tracker_notes_body').html(notes.body);
		$('#tracker_notes_date').html(notes.date);
	});

	/*
	while(project_num>=project_init||project_num<=project_cap){
		while(documentation_num>=documentation_init||documentation_num<=documentation_cap){
			documentation_num++;
			console.log(documentation_num);
		}
		while(todo_num>=todo_init||todo_num<=todo_cap){
			while(notes_num>=notes_init||notes_num<=notes_cap){
				while(priority_index_num>=priority_index_init||priority_index_num<=priority_index_cap){
					priority_index_num++;
					console.log(priority_index_num);
				}
				notes_num++;
				console.log(notes_num);
			}
			todo_num++;
			console.log(todo_num);
		}
		project_num++;
		console.log(project_num);
	}
	*/
	
	// DEBUG
	// prints keys out, don't know if I'll need this yet. Maybe for dropdown dictionaries?
	// var keys = Object.keys(todo);
	// var debug = 'project cap: '+project_cap+'\ndocumentation cap: '+documentation_cap+'\ntodo cap: '+todo_cap+'\nnotes cap: '+notes_cap+'\npriority_index cap: '+priority_index_cap;
	// var debug = 'project cap: '+project_num+'\ndocumentation cap: '+documentation_num+'\ntodo cap: '+todo_num+'\nnotes cap: '+notes_num+'\npriority_index cap: '+priority_index_num;
	//console.log(debug);
});




});
