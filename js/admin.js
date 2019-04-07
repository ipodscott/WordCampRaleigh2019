$( document ).ready(function() {
	$(".content_toggle").click(function() {
		$( ".edit-post-text-editor, .postarea.wp-editor-expand, .edit-post-visual-editor" ).toggle();
	});
});