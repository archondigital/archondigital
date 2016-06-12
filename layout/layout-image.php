<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package archondigital
 */

if( get_field('image_orientation_tall') )
	{
	    get_template_part( 'layout/layout', 'image-tall' );
	}
	else
	{
		get_template_part( 'layout/layout', 'image-wide' );
	}

?>

	