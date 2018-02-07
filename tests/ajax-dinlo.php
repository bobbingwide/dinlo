<?php // (C) Copyright Bobbing Wide 2016


class ajax_dinlo extends BW_UnitTestCase {

	function setUp() {
		if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
			// That's OK then
		} else {
			echo DOING_AJAX; 
			echo "constant not defined or not true"; 
			bw_trace2( get_defined_constants(), "constants" );
			gob();
		}
	}
	
	/**
	 * @group ajax
	 */
  function test_something_ajaxy() {
    $this->assertTrue( true );
  }
}
