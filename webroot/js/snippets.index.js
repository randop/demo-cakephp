var addSnippetEditor;

$(document).ready( function(){
	addSnippetEditor = CodeMirror.fromTextArea(document.getElementById("snippetEditor"), {
		lineNumbers: true,
	});
	
	$('#addSnippetButton').click( function(event){
		addSnippetEditor.save();
		var params = $('#addSnippetForm').serialize();
		$.ajax({
			url: $('#addSnippetForm').attr('action'),
			type: 'POST',
			data: params,
			dataType: 'json',
			complete: function(data){
				$('#snippetModal').modal('hide');
			}
		});
		event.preventDefault();
	});
	
	attachSnippetLinkClickEvent();
	
});

function attachSnippetLinkClickEvent(){
	$('.snippetLink').unbind('click');
	$('.snippetLink').on("click", function(event){
		event.preventDefault();
	});
}

function showSnippet(param){
	switch( param ){
		case 'add':
			$('.modal-title','#snippetModal').text('Add Snippet');
			$('#snippetModal').modal('show');
			$('.snippet-title','#snippetModal').val('');
			addSnippetEditor.setValue('');
			addSnippetEditor.refresh();
			addSnippetEditor.focus();
			break;
	}
}