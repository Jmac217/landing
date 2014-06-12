$(document).ready(function(){

	$('#goback').click(function(){
		document.location.href='http://localhost/';
	});

	$('input[type="text"]').click(function(){
		$(this).select();
	}).mouseover(function(){
		$(this).css({'border':'solid 1px #016CA4'});
	}).mouseout(function(){
		$(this).css({'border':'solid 1px transparent'});
	});
	
	$('.grows').click(function(){
		$(this).animate({'width':'600px'});
	}).mouseleave(function(){
		$(this).animate({'width':'127px'});
	});
	
	$('#send_report').click(function(){
	
		var name = $('#name').val();
		//var status = $('#status').val();
		var type = $('#type').val();
		var description = $('#description').val();
		
		//alert(email+' '+name+' '+type+' '+description);
		
		/*
		if(select == '- Select Database -'){
			$('#feedback').html('Select a Database');
		}else if(select != 'Inventory'){
			$('#feedback').html('This database does not exist yet');
		}else */if(name == 'Bug Name' || name == ''){
			$('#feedback').html('This bug needs a name');
		}else{
			$.post('send_report.php',{name:name,status:status,type:type,description:description},function(data){
				//alert(data);
				if(data==''){
					$('#feedback').css({'color':'green'}).html('This bug has been filed');
				}else{
					$('#feedback').html('Query was unsuccessful');
				}
			});
		}
		
	});
	
});