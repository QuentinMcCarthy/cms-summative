// Init jQuery
$ = jQuery;

$(document).ready(function(){
	// alert('JS: Ready');

	// Add bootstrap classes to single-post content
	$("#single-post-content form")
		.addClass("border border-dark p-2")
		.find("p:has('input:not([type=checkbox]):not([type=radio])'), p:has('textarea'), p:has('select')")
			.addClass("form-group")
			.end()
		.find("p:has('input[type=checkbox]'), p:has('input[type=radio]')")
			.addClass("form-check")
			.end()
		.find("input:not([type=reset]):not([type=submit]):not([type=checkbox]):not([type=radio]):not([type=file]):not([type=range]), textarea, select")
			.addClass("form-control")
			.end()
		.find("input[type=checkbox], input[type=radio]")
			.addClass("form-check-input")
			.end()
		.find("input[type=file]")
			.addClass("form-control-file")
			.end()
		.find("input[type=range]")
			.addClass("form-control-range")
			.end()
		.find("input[type=reset]")
			.addClass("btn btn-secondary")
			.end()
		.find("input[type=submit]")
			.addClass("btn btn-primary")
			.end();

	$("#single-post-content table").addClass("table");
});
