
jQuery( document ).ready( function() {
	
	// Add padding and id's to each front page section
	jQuery( "h2.entry-title" ).each( function() {
		
		var panelId = jQuery( this ).html().toLowerCase().replace(/\s+/g, "-");
		jQuery( this ).wrapInner(function() {
			
			// return "<span style='padding-top:168px;' id='" + panelId + "'></span>";
			return "<span style='padding-top:96px;' id='" + panelId + "'></span>";
		})
	})
	
	// Remove navigation link highlighting
	jQuery('#top-menu li').removeClass('current-menu-item current_page_item ');
	
	// Add highlighting on click
	jQuery('#top-menu li a').on('click', function(event) {
		
		jQuery(this).parent().parent().find('li').removeClass('current-menu-item');
		jQuery(this).parent().addClass('current-menu-item');
	});
	
	// Check current URL and highlight nav for current page */
	jQuery('#top-menu li a').each( function() {
		
		var pageUrl = jQuery( location ).attr( 'href' );
		var navUrl = jQuery( this ).attr( 'href' );
		if ( navUrl == pageUrl ) {
			
			jQuery( this ).parent().addClass('current-menu-item');
		}
	})
	
	// set the default selected menu
	jQuery('#selected-menu').html('Breakfast');
})

// Menu changing
function changeMenu(selectedMenu) {
		
	var the_menu = document.getElementById('selected-menu');	
	for (var i=0; i<food_menus.length; i++) {
		
		if ( (food_menus[i][0] === selectedMenu) && (food_menus[i].length > 1) ) {
			
			console.log('selected food menu: ', food_menus[i][0]);
			for ( var j=1; j<food_menus[i].length; j++) {
			
				console.log('selected food menu item name: ', food_menus[i][j][0]);
				console.log('selected food menu item desc: ', food_menus[i][j][1]);
				console.log('selected food menu item pric: ', food_menus[i][j][2]);
				// what's listed here is the name of the item, desc, and price
			}
		}
	}
}