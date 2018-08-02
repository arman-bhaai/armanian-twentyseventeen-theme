<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-info">
	<?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
	}
	?>
		<p>
			<?php printf( 'Copyright &copy;2018 <a href="http://muktoweb.com" target="_blank"><b>Mukto Web</b></a> <br> Designed by <a href="https://fb.me/arman.bhaai" target="_blank" class="imprint"><b>#arman.bhaai</b></a>' ); ?>
		</p>
</div><!-- .site-info -->
