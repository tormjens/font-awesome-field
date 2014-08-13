<?php  

if( ! function_exists( 'get_fa' ) ) {

	/**
	 * Retrieve the icon
	 *
	 * @param bool Format the output
	 * @param integer The post ID
	 * @return string The icon, either formatted as HTML, or just the name
	 * @author 
	 **/
	function get_fa( $format = false, $post_id = null ) {
		return Font_Awesome_Field::retrieve( $post_id, $format );
	}

}

if( ! function_exists( 'the_fa' ) ) {

	/**
	 * Print the icon
	 *
	 * @param bool Format the output
	 * @param integer The post ID
	 * @return void Echoes the icon, either formatted as HTML, or just the name
	 * @author 
	 **/
	function the_fa( $format = false, $post_id = null ) {
		echo get_fa( $format, $post_id );
	}

}
?>