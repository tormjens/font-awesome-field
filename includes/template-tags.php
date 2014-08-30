<?php  
/**
 * Template tags for the Font Awesome Field
 * 
 * @package WordPress
 **/

if( ! function_exists( 'get_fa' ) ) {

	/**
	 * Retrieve the icon
	 *
	 * @param bool $format Format the output
	 * @param integer $post_id The post ID
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
	 * @param bool $format Format the output
	 * @param integer $post_id The post ID
	 * @return void Echoes the icon, either formatted as HTML, or just the name
	 * @author 
	 **/
	function the_fa( $format = false, $post_id = null ) {
		echo get_fa( $format, $post_id );
	}

}
?>