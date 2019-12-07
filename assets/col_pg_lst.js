jQuery(document).ready( function($) {
	$('.plugin-title').click( function() {
		if( $(this).hasClass('collapsed') ) {
			$(this).removeClass('collapsed');
			$(this).next('.column-description').removeClass('show');
			$(this).closest('tr').next('.plugin-update-tr').removeClass('show');
			$(this).find('.row-actions').removeClass('show');
		} else {
			$(this).addClass('collapsed');
			$(this).next('.column-description').addClass('show');
			$(this).closest('tr').next('.plugin-update-tr').addClass('show');
			$(this).find('.row-actions').addClass('show');
		}		
	});
	
	
	$('#wpbody-content .wp-list-table.plugins thead th#name').click( function() {
		$(this).closest('thead').toggleClass('collapsed');
		$(this).closest('thead').next('tbody').find('tr:not(.plugin-update-tr)').each( function() {
			$(this).find('.plugin-title').trigger('click');
		});
	});
});