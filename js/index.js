$(document).ready(function(){

	$('#title').click(function() {
	    window.location.reload(true);
	});

	$('#login_area').mouseover(function() {
	    $('#login_slider').css({
	        'visibility': 'visible'
	    });
	}).mouseout(function() {
	    $('#login_slider').css({
	        'visibility': 'hidden'
	    });
	});

	$('#settings').click(function() {
	    $('#settings_slider').css({
	        'visibility': 'visible'
	    })
	}).children('#settings_slider').mouseleave(function() {
	    $('#settings_slider').css({
	        'visibility': 'hidden'
	    });
	}).blur(function() {
	    $('#settings_slider').css({
	        'visibility': 'hidden'
	    });
	});

	$('input[type="text"], input[type="password"]').focus(function() {
	    // on focus if value is default
	    if ($(this).val() == $(this).attr('alt')) {
	        // remove value and set color to black
	        $(this).val('').css({
	            'color': 'black'
	        });
	    }
	}).blur(function() {
	    // When input has lost focus and is empty
	    if ($(this).val() == '') {
	        // set it's value to this input's alt attribute,
	        var alt = $(this).attr('alt');
	        // and it's color back to default gray.
	        $(this).val(alt).css({
	            'color': 'gray'
	        });
	        // Otherwise leave the color black, because it's in use and not default.
	    } else {
	        $(this).css({
	            'color': 'black'
	        });
	    }
	});

	// Home Panel Generation
	$.getJSON('json/home_panel.json', function(json) {
	    $.each(json, function(key, val) {
	        $('#home_panel').append("<span id='" + key + "' class='panel_header'>" + val.title + "</span>");
	        $.each(val.urls, function(key, val) {
	            $('#home_panel').append("<a class='panel_link' href='" + val.href + "'>" + val.name + "</a>");
	        });
	    });
	});

	// Body Panel Generation
	$.getJSON('json/body_panel.json', function(json) {
	    $.each(json.body_panel, function(key, val) {
	        $('#body_panel').append("<span id='" + key + "' class='body_panel_link'>" + val.title + "</span>");
	    });
	});

	// queued
	$('#body_panel_links_queued').click(function() {
	    $('#queued').css({
	        'visibility': 'visible'
	    });
	    $('#lucent').css({
	        'visibility': 'hidden'
	    });
	    $('#jot').css({
	        'visibility': 'hidden'
	    });
	    $('#bugger').css({
	        'visibility': 'hidden'
	    });
	});

	// server info
	$('#body_panel_links_lucent').click(function() {
	    $('#lucent').css({
	        'visibility': 'visible'
	    });
	    $('#queued').css({
	        'visibility': 'hidden'
	    });
	    $('#jot').css({
	        'visibility': 'hidden'
	    });
	    $('#bugger').css({
	        'visibility': 'hidden'
	    });
	});

	// jot
	$('#body_panel_links_jot').click(function() {
	    $('#jot').css({
	        'visibility': 'visible'
	    });
	    $('#queued').css({
	        'visibility': 'hidden'
	    });
	    $('#lucent').css({
	        'visibility': 'hidden'
	    });
	    $('#bugger').css({
	        'visibility': 'hidden'
	    });
	});

	// bugger
	$('#body_panel_links_bugger').click(function() {
	    $('#bugger').css({
	        'visibility': 'visible'
	    });
	    $('#queued').css({
	        'visibility': 'hidden'
	    });
	    $('#lucent').css({
	        'visibility': 'hidden'
	    });
	    $('#jot').css({
	        'visibility': 'hidden'
	    });
	});
	$('.bug_selection_link_code').click(function() {
	    $(this).parent().siblings('.bug_description').css({
	        'visibility': 'hidden'
	    });
	    $(this).parent().siblings('.bug_notes').css({
	        'visibility': 'hidden'
	    });
	    $(this).parent().siblings('.bug_code').css({
	        'visibility': 'visible'
	    });
	});
	$('.bug_selection_link_description').click(function() {
	    $(this).parent().siblings('.bug_description').css({
	        'visibility': 'visible'
	    });
	    $(this).parent().siblings('.bug_notes').css({
	        'visibility': 'hidden'
	    });
	    $(this).parent().siblings('.bug_code').css({
	        'visibility': 'hidden'
	    });
	});
	$('.bug_selection_link_notes').click(function() {
	    $(this).parent().siblings('.bug_description').css({
	        'visibility': 'hidden'
	    });
	    $(this).parent().siblings('.bug_notes').css({
	        'visibility': 'visible'
	    });
	    $(this).parent().siblings('.bug_code').css({
	        'visibility': 'hidden'
	    });
	});
});
