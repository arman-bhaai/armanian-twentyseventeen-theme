<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="custom-header">

		<!-- <div class="custom-header-media">
			<?php /* the_custom_header_markup(); */ ?>
		</div> -->

		<div class="custom-header-media">
			<div id="wp-custom-header" class="wp-custom-header">
				<img id="changeable-header-image" src="" width="2000" height="1200" alt="Mukto Web">
			</div>		
		</div>

		 

	<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>

</div><!-- .custom-header -->
