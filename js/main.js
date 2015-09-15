$( function() {

	// caching DOM elements
	var $shiftForm = $( '.shift-form' ),
		$formBtn = $( '.submit-btn' ),
		$shift = $( '.shift' ),
		$day = $( '.calendar' ),
		$collection = $( '.saved-times' );

	// submit handler for times/hift-saving
	$shiftForm.on( 'submit', function() {
		showSavedTimes( $shift.val() + ", " + $day.val() + ".<br>" );
		resetDate( $day );
		resetShift( $shift );

		return false;
	});

	// function to append the input values to ".saved-times"
	var showSavedTimes = function( time, date ) {
		$collection.append( time, date);
	};

	// function to reset the datepicker input
	var resetDate = function( param ) {
		param.val( "" );
	};

	// function to reset shift
	var resetShift = function( param ) {
		param.val( "Choose shift:" );
	};

});