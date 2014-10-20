$(document).ready(function(){

	$('#tracker_header > #tracker_header_name').attr('class', '.link').click(function(){
		var dropdown = $(this).attr('alt');	
		var fields = null;
		var drop_height = null;
		fields=9;// this.keys
		drop_height = (fields*30)+'px';
		$(this).find('.link_drop').css({'height':drop_height,'visibility':'visible'});
	}).mouseleave(function(){
		$(this).children('div').children('div').css({'height':'0px'});
		$(this).find('.link_drop').css({'visibility':'hidden'});
	});

	// tracker views
	// documentation
	$('#tracker_documentation_collapse').click(function(){
		$('#tracker_documentation').animate({'height':'35px'});
		$('#tracker_todo').animate({'top':'20px','height':'390px'});
		$('#tracker_notes').animate({'height':'360px'});
		$('#tracker_notes_body').animate({'height':'330px'});
		$('#tracker_documentation_collapse').css({'visibility':'hidden'});
		$('#tracker_documentation_expand').css({'visibility':'visible'});
		$('#tracker_top').css({'visibility':'hidden'});
		setTimeout(function(){
			$('#tracker_documentation_head').css({'visibility':'hidden'});
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
		$('#tracker_top').css({'visibility':'visible'});
		$('#tracker_documentation_head').css({'visibility':'visible'});
		$('#tracker_documentation_body').css({'visibility':'visible'});
	});

	function get_markdown(id, body){
		var showdown = new Showdown.converter();
		$.ajax({
			url:body,
			cache:false,
			dataType:"text",
			success:function(data){
				$(id).html(showdown.makeHtml(data));
			}
		});
	}

	$.getJSON('json/database.json',function(json){

		/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
		 * There really must be a better way than thunking pointers  *
		 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
		 * This whole function is pretending to be an object, and, as*
		 * such, should be rewritten as such; or structured to act as*
		 * the functional monster it could become. Either of which   *
		 * will be much better than what is currently written...     *
		 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
		 * This honestly looks more like bad PHP...                  *
		 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
		 * Things are just going to have to remain hard-coded as I   *
		 * write the .MD functionality out, but rest assured that    *
		 * functions are coming!																		 *
		 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

		// initial vars
		var project_init = 0;
		var documentation_init = 0;
		var todo_init = 0;
		var notes_init = 0;
		var priority_index_init = 0;

		// "pointers" from inital vars
		var project_num = project_init;
		var documentation_num = documentation_init;
		var todo_num = todo_init;
		var notes_num = notes_init;
		var priority_index_num = priority_index_init;

		// preparing object from nested starting points
		var project = json.project[project_num];
		var documentation = project.documentation[documentation_num];
		var todo = project.todo[todo_num];
		var notes = todo.notes[notes_num];
		var priority_index = todo.priority_index[priority_index_num];

		// capping values from objective length attribute
		var project_cap = (json.project.length)-1;
		var documentation_cap = (project.documentation.length)-1;
		var todo_cap = (project.todo.length)-1;
		var notes_cap = (todo.notes.length)-1;// minus 1 for index of 0
		var priority_index_cap = todo.priority_index.length;
		
		// Markdown init : paths
		var notes_body = 'project/'+project.name+'/notes/'+todo.headline+'/'+(notes_num+1)+'.md';
		var documentation_body = 'project/'+project.name+'/documentation/'+documentation.title+'.md';
		// alert(notes_body+', '+documentation_body);

		function debug(){
			console.log("============================");
			console.log("initial vars:");	
			console.log("project_init, "+project_init);
			console.log("documentation_init, "+documentation_init);
			console.log("todo_init, "+todo_init);
			console.log("notes_init, "+notes_init);
			console.log("priority_index_init, "+priority_index_init);
			console.log("--------------------");
			console.log("'pointers' from inital vars:");	
			console.log("project_num, "+project_num);
			console.log("documentation_num, "+documentation_num);
			console.log("todo_num, "+todo_num);
			console.log("notes_num, "+notes_num);
			console.log("priority_index_num, "+priority_index_num);
			console.log("--------------------");
			console.log("preparing object from nested starting points:");	
			console.log("project, "+JSON.stringify(project), null, 2);
			console.log("documentation, "+JSON.stringify(documentation), null, 2);
			console.log("todo, "+JSON.stringify(todo), null, 2);
			console.log("notes, "+JSON.stringify(notes), null, 2);
			console.log("priority_index, "+JSON.stringify(priority_index), null, 2);
			console.log("--------------------");
			console.log("capping values from objective length attribute:");	
			console.log("project_cap, "+project_cap);
			console.log("documentation_cap, "+documentation_cap);
			console.log("todo_cap, "+todo_cap);
			console.log("notes_cap, "+notes_cap);
			console.log("priority_index_cap, "+priority_index_cap);
			console.log("============================");
		}
		debug();

		/*
		 *
		 * hierarchy of this poor JSON object
		 *
		 * init ~> num
		 *
		 * :: num +/- <- obj 
		 *
		 * if cap/0 +/- 0 || length
		 *
		 */

		$('#tracker_header_name_text').prepend(project.name);
		$('#tracker_header_id').html('Project ID: '+project.id);
		$('#tracker_documentation_head_title').html(documentation.title);
		$('#tracker_documentation_head_type').html(documentation.type);
		$('#tracker_documentation_body').html(documentation.body); // JSON will point to .md file location
		$('#tracker_documentation_edited').html(documentation.edited);
		$('#tracker_documentation_date').html(documentation.date);
		$('#tracker_documentation_author').html(documentation.author);
		$('#tracker_todo_id').html(todo.id+')');
		$('#tracker_todo_headline').html(todo.headline);
		$('#tracker_todo_date').html(todo.date);
		$('#tracker_notes_body').html(notes.body);
		$('#tracker_notes_date').html(notes.date);

		$.each(json.project, function(key, val){
		 $('.link_drop').append("<a id='"+(key+1)+"' class='load_link load_link_li'>"+val.name+"</a>");
		});

		$('.load_link').click(function(){
			project_num = $(this).attr('id')-1;
			project = json.project[project_num];
			$('#tracker_header_name_text').html(project.name);
			$('#tracker_header_id').html('Project ID: '+project.id);

			documentation_num = 0;
			documentation = project.documentation[documentation_num];
			$('#tracker_documentation_head_title').html(documentation.title);
			$('#tracker_documentation_head_type').html(documentation.type);
			$('#tracker_documentation_body').html(documentation.body); // JSON will point to .md file location
			$('#tracker_documentation_edited').html(documentation.edited);
			$('#tracker_documentation_date').html(documentation.date);
			$('#tracker_documentation_author').html(documentation.author);

			todo_num = 0;
			notes_num = 0;
			todo = project.todo[todo_num];
			notes = todo.notes[notes_num];
			$('#tracker_todo_id').html(todo.id+')');
			$('#tracker_todo_headline').html(todo.headline);
			$('#tracker_todo_date').html(todo.date);
			$('#tracker_notes_body').html(notes.body);
			$('#tracker_notes_date').html(notes.date);

			debug();
		});

		// documentation
		$('#tracker_documentation_right').click(function(){
			if(documentation_num<documentation_cap){
				++documentation_num;	
				debug();
			}else{
				documentation_num=documentation_init;	
				debug();
			}
			documentation = project.documentation[documentation_num];
			var documentation_body = 'project/'+project.name+'/documentation/'+documentation.title+'.md';

			get_markdown('#tracker_documentation_body', documentation_body);

			$('#tracker_documentation_head_title').html(documentation.title);
			$('#tracker_documentation_head_type').html(documentation.type);
			//$('#tracker_documentation_body').html(documentation.body); // JSON will point to .md file location
			$('#tracker_documentation_edited').html(documentation.edited);
			$('#tracker_documentation_date').html(documentation.date);
			$('#tracker_documentation_author').html(documentation.author);
		});
		$('#tracker_documentation_left').click(function(){
			if(documentation_num>0){
				--documentation_num;	
				debug();
			}else{
				documentation_num=documentation_cap;	
				debug();
			}
			documentation = project.documentation[documentation_num];
			var documentation_body = 'project/'+project.name+'/documentation/'+documentation.title+'.md';

			get_markdown('#tracker_documentation_body', documentation_body);

			var showdown = new Showdown.converter();
			$.ajax({
				url:documentation_body,
				cache:false,
				dataType:"text",
				success:function(data){
					$('#tracker_documentation_body').html(showdown.makeHtml(data));
				}
			});

			$('#tracker_documentation_head_title').html(documentation.title);
			$('#tracker_documentation_head_type').html(documentation.type);
			//$('#tracker_documentation_body').html(documentation.body); // JSON will point to .md file location
			$('#tracker_documentation_edited').html(documentation.edited);
			$('#tracker_documentation_date').html(documentation.date);
			$('#tracker_documentation_author').html(documentation.author);
		});


		// todo
		$('#tracker_todo_').click(function(){});
		$('#tracker_todo_right').click(function(){
			if(todo_num<todo_cap){
				++todo_num;
			}else{
				todo_num=todo_init;
			}
			notes_num = 0;
			todo = project.todo[todo_num];
			notes = todo.notes[notes_num];
			$('#tracker_todo_id').html(todo.id+')');
			$('#tracker_todo_headline').html(todo.headline);
			$('#tracker_todo_date').html(todo.date);
			$('#tracker_notes_body').html(notes.body);
			$('#tracker_notes_date').html(notes.date);
			debug();
			// add priority index
		});

		$('#tracker_todo_left').click(function(){
			if(todo_num>0){
				--todo_num;
			}else{
				todo_num=todo_cap;
			}
			notes_num = 0;
			todo = project.todo[todo_num];
			notes = todo.notes[notes_num];
			$('#tracker_todo_id').html(todo.id+')');
			$('#tracker_todo_headline').html(todo.headline);
			$('#tracker_todo_date').html(todo.date);
			$('#tracker_notes_body').html(notes.body);
			$('#tracker_notes_date').html(notes.date);
			debug();
			// add priority index
		});


		// notes
		$('#tracker_notes_right').click(function(){
			if(notes_num<notes_cap){
				++notes_num;
			}else{
				notes_num=notes_init;
			}
			notes = todo.notes[notes_num];
			var notes_body = 'project/'+project.name+'/notes/'+todo.headline+'/'+(notes_num+1)+'.md';
			var showdown = new Showdown.converter();
			$.ajax({
				url:notes_body,
				cache:false,
				dataType:"text",
				success:function(data){
					$('#tracker_notes_body').html(showdown.makeHtml(data));
				}
			});
			//$('#tracker_notes_body').html(notes.body);
			$('#tracker_notes_date').html(notes.date);
			debug();
		});

		$('#tracker_notes_left').click(function(){
			if(notes_num>0){
				--notes_num;
			}else{
				notes_num=notes_cap;
			}
			notes = todo.notes[notes_num];

			// src : project / <project.name> / <notes.headline> / <notes.(notes_num)+'.md'

			var notes_body = 'project/'+project.name+'/notes/'+todo.headline+'/'+(notes_num+1)+'.md';

			// showdown.js
			var showdown = new Showdown.converter();

			$.ajax({
				url:notes_body,
				cache:false,
				dataType:"text",
				success:function(data){
					$('#tracker_notes_body').html(showdown.makeHtml(data));
				}
			});

			/** If AJAX cache or async becomes necessary **/
			/*
			$.ajax({
				url:notes_body,
				cache:false,
				dataType:"text",
				success:function(data){
					$('#tracker_notes_body').html(showdown.makeHtml(data));
				}
			});
			*/

			/* otherwise, if these do not matter, use $.get() */

			/*
			$.get(notes_body, function(data){
				$('#tracker_notes_body').html(showdown.makeHtml(data));
			});
			*/

			//$('#tracker_notes_body').html(notes.body);
			$('#tracker_notes_date').html(notes.date);
			debug();
		});

		// DEBUG
		// prints keys out, don't know if I'll need this yet. Maybe for dropdown dictionaries?
		// var keys = Object.keys(todo);
		// var debug = 'project cap: '+project_cap+'\ndocumentation cap: '+documentation_cap+'\ntodo cap: '+todo_cap+'\nnotes cap: '+notes_cap+'\npriority_index cap: '+priority_index_cap;
		// var debug = 'project cap: '+project_num+'\ndocumentation cap: '+documentation_num+'\ntodo cap: '+todo_num+'\nnotes cap: '+notes_num+'\npriority_index cap: '+priority_index_num;
		//console.log(debug);
	});
});
