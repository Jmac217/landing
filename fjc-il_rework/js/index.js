$(document).ready(function(){
	// dynamic list sizing when clicked
	$('.link').click(function(){
		var dropdown = $(this).attr('alt');	
		var fields = null;
		var drop_height = null;
		/*
		$.ajax({
			dataType: 'json',
			url:'json/paths.json',
			async: false,
			success: function(json){
				fields = Object.keys(json.paths[dropdown]).length;
				drop_height = (fields*29)+'px';
			}
		});
		*/
		fields=9;
		drop_height = (fields*30)+'px';
		$(this).find('.link_drop').css({'height':drop_height});
		//$(this).children('ul').children('li').children('ul').css({'height':drop_height}); // I'm leaving this here in case find() doesn't work in IE
	}).mouseleave(function(){
		$(this).children('ul').children('li').children('ul').css({'height':'0px'});
	});
});