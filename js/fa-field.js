jQuery(document).ready(function($) {
	
	$( '.add-fa-icon' ).on( 'click', function(e) {
		e.preventDefault();


		$('#fa-field-modal').show();
	});

	$( '.fa-field-modal-close' ).on( 'click', function() {

		$('#fa-field-modal').hide();

	});

	$( '.fa-field-modal-icon-holder' ).on( 'click', function() {

		var icon = $(this).data('icon'),
			holder = $( '.fa-field-metabox .fa-field-current-icon .icon' ),
			deleter = $( '.fa-field-metabox .fa-field-current-icon .delete' ),
			input = $( '.fa-field-metabox #fa_field_icon' ),
			close = $( '.fa-field-modal-close' );

		holder.html( '<i class="fa '+ icon +'" />' );
		deleter.addClass( 'active' );
		input.val(icon);
		close.trigger( 'click' );



	});

	$( '.fa-field-metabox .fa-field-current-icon .icon' ).on( 'click', function() {

		var holder = $( '.fa-field-metabox .fa-field-current-icon .icon' ),
			deleter = $( '.fa-field-metabox .fa-field-current-icon .delete' ),
			input = $( '.fa-field-metabox #fa_field_icon' ),
			close = $( '.fa-field-modal-close' );

		holder.html( '' );
		deleter.removeClass( 'active' );
		input.val('');

	});

});