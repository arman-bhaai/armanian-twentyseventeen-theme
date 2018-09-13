<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Armanian_Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>





<div id="primary" class="content-area">
	<main id="main" class="site-main bangla-text centered" role="main">


	<h2 class="tagline-1">!!! BIOLOGY ZONE !!!</h2>
	<?php //echo do_shortcode('[metaslider id="156"]'); ?>
	<h2 class="tagline-2">আমাদের অনলাইন রিসোর্সের সাহায্যে নিজেকে করে নাও আরো সমৃদ্ধ!!!</h2>


	<ul id="secondary-nav">
		<li>
			<div class="container" style="background-color: #3abd01;">
				<a href="<?php get_home_url() ?>/gallery/">
					<h3>Lecture Gallery</h3>
					<div class="overlay"></div>
				</a>
			</div>
		</li>
		<li>
			<div class="container" style="background-color: #3abd01;">
				<a href="<?php get_home_url() ?>/gallery/">
					<h3>Videos</h3>
					<div class="overlay"></div>
				</a>
			</div>
		</li>
		<li>
			<div class="container" style="background-color: #3abd01;">
				<a href="<?php get_home_url() ?>/gallery/">
					<h3>Botany</h3>
					<div class="overlay"></div>
				</a>
			</div>
		</li>
		<li>
			<div class="container" style="background-color: #3abd01;">
				<a href="<?php get_home_url() ?>/gallery/">
					<h3>Zoology</h3>
					<div class="overlay"></div>
				</a>
			</div>
		</li>	
		<li>
			<div class="container" style="background-color: #3abd01;">
				<a href="<?php get_home_url() ?>/gallery/">
					<h3>Students Blog</h3>
					<div class="overlay"></div>
				</a>
			</div>
		</li>
			
	</ul>

<!-- <<<+++ HTML Code for FB Like Box +++>>> -->
	<!-- <div class="fb-page" data-href="https://www.facebook.com/FunnyPhotosEver" data-tabs="timeline" data-width="300" data-height="210" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
		<blockquote cite="https://www.facebook.com/FunnyPhotosEver" class="fb-xfbml-parse-ignore">
			<a href="https://www.facebook.com/FunnyPhotosEver">Funny Photos</a>
		</blockquote>
	</div> -->
<!-- <<<+++ End +++>>> -->

		<?php
		// Get each of our panels and show the post data.
		if ( 0 !== twentyseventeen_panel_count() || is_customize_preview() ) : // If we have pages to show.

			/**
			 * Filter number of front page sections in Twenty Seventeen.
			 *
			 * @since Twenty Seventeen 1.0
			 *
			 * @param int $num_sections Number of front page sections.
			 */
			$num_sections = apply_filters( 'twentyseventeen_front_page_sections', 4 );
			global $twentyseventeencounter;

			// Create a setting and control for each of the sections available in the theme.
			for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
				$twentyseventeencounter = $i;
				twentyseventeen_front_page_section( null, $i );
			}

	endif; // The if ( 0 !== twentyseventeen_panel_count() ) ends here. ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
