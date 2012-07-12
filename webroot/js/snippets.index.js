var addSnippetEditor;

$(document).ready( function(){
	addSnippetEditor = CodeMirror.fromTextArea(document.getElementById("snippetEditor"), {
		lineNumbers: true,
	});
	
	$('#addSnippetButton').click( function(){
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
		return false;
	});
	
});

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