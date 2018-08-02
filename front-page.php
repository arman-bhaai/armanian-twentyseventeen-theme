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


	<h2 class="tagline-1">জীবনটাই তো জীববিজ্ঞান!!!</h2>
	<?php echo do_shortcode('[metaslider id="156"]'); ?>
	<h2 class="tagline-2">আমাদের অনলাইন রিসোর্সের সাহায্যে নিজেকে করে নাও আরো সমৃদ্ধ!!!</h2>


	<ul id="secondary-nav">
		<li>
			<div class="container">
				<a href="<?php get_home_url() ?>/gallery/">
					<div class="overlay"></div>
					<span style="font-weight: bold"><i>&gt;&gt; GO &gt;&gt;</i></span>
				</a>
			</div>
		</li>	
		<li>
			<div class="container">
				<a href="<?php get_home_url() ?>/videos/">
					<div class="overlay"></div>
					<span style="font-weight: bold"><i>&gt;&gt; GO &gt;&gt;</i></span>
				</a>
			</div>
		</li>	
		<li>
			<div class="container">
				<a href="<?php get_home_url() ?>/botany/">
					<div class="overlay"></div>
					<span style="font-weight: bold"><i>&gt;&gt; GO &gt;&gt;</i></span>
				</a>
			</div>
		</li>	
		<li>
			<div class="container">
				<a href="<?php get_home_url() ?>/zoology/">
					<div class="overlay"></div>
					<span style="font-weight: bold"><i>&gt;&gt; GO &gt;&gt;</i></span>
				</a>
			</div>
		</li>	
		<li>
			<div class="container">
				<a href="<?php get_home_url() ?>/admission/">
					<div class="overlay"></div>
					<span style="font-weight: bold"><i>&gt;&gt; GO &gt;&gt;</i></span>
				</a>
			</div>
		</li>	
		<li>
			<div class="container">
				<a href="<?php get_home_url() ?>/thoughts/">
					<div class="overlay"></div>
					<span style="font-weight: bold"><i>&gt;&gt; GO &gt;&gt;</i></span>
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
