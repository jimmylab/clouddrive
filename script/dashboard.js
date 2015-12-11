// JavaScript Document

/*
 * Checkbox module
 */
$(function() {
	$.fn.extend({
		'highlight': (
		function(add) {
			if ( add === true ) {
				$(this).parent().parent().addClass('info');
			} else if ( add === false ) {
				$(this).parent().parent().removeClass('info');
			}
		})
	});
	$('#fileview > thead').on('change', 'tr > th > input', function() {
		/*if ( this.checked === true ) {
			$('#fileview > tbody > tr > td > input').each(function() {
				this.checked = true;
				$(this).parent().parent().addClass('info');
			});
			$(this).parent().parent().addClass('info');
		} else if ( this.checked === false ) {
			$('#fileview > tbody > tr > td > input').each(function() {
				this.checked = false;
				$(this).parent().parent().removeClass('info');
			});
			$(this).parent().parent().removeClass('info');
		}*/
		var checkAll = this.checked;
		$(this).highlight(checkAll);
		$('#fileview > tbody > tr > td > input').each(function() {
			this.checked = checkAll;
			$(this).highlight(checkAll);
		});
	});
	
	$('#fileview > tbody').on('change', 'tr > td > input', function() {
		if ( this.checked === false ) {
			// Actually there's only one checkbox inside the <thead>
			$('#fileview > thead > tr > th > input').each(function() {
				this.checked = false;
				$(this).parent().parent().removeClass('info');
			});
			$(this).parent().parent().removeClass('info');
		} else if ( this.checked === true ) {
			$(this).parent().parent().addClass('info');
		}
	});
});