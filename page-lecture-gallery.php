<?php
/**
 * The template for displaying Lecture Gallery Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Armanian_Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 * 
 * Source Pen: https://codepen.io/nailaahmad/pen/LGRxWJ
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main bangla-text" role="main">

			<?php
			/* while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop. */
			?>


<div class="wrapper">
    <div class="header">
        <h1 class="header__title">Lecture Gallery</h1>
        <h2 class="header__subtitle">Browse</h2>
    </div>

    <div class="cards">    
        <div class=" card [ is-collapsed ] ">
            <div class="card__inner [ js-expander ]">
                <span>Batch 01</span>
                <i class="fa fa-folder-o"></i>
            </div>
            <div class="card__expander">
                <i class="fa fa-close [ js-collapser ]"></i>

                <a href="#">
                    <div class="box-item">
                        <i class="fa fa-eject"></i>
                        <p>Running Lecture</p>
                    </div>
                </a>
                <a href="#">
                    <div class="box-item">
                        <i class="fa fa-backward"></i>
                        <p>Previous Lectures</p>
                    </div>
                </a>
            </div>
        </div>

        <div class=" card [ is-collapsed ] ">
            <div class="card__inner [ js-expander ]">
                <span>Batch 02</span>
                <i class="fa fa-folder-o"></i>
            </div>
            <div class="card__expander">
                <i class="fa fa-close [ js-collapser ]"></i>

                <a href="#">
                    <div class="box-item">
                        <i class="fa fa-eject"></i>
                        <p>Running Lecture</p>
                    </div>
                </a>
                <a href="#">
                    <div class="box-item">
                        <i class="fa fa-backward"></i>
                        <p>Previous Lectures</p>
                    </div>
                </a>
            </div>
        </div>

        <div class=" card [ is-collapsed ] ">
            <div class="card__inner [ js-expander ]">
                <span>Batch 03</span>
                <i class="fa fa-folder-o"></i>
            </div>
            <div class="card__expander">
                <i class="fa fa-close [ js-collapser ]"></i>

                <a href="#">
                    <div class="box-item">
                        <i class="fa fa-eject"></i>
                        <p>Running Lecture</p>
                    </div>
                </a>
                <a href="#">
                    <div class="box-item">
                        <i class="fa fa-backward"></i>
                        <p>Previous Lectures</p>
                    </div>
                </a>
            </div>
        </div>



    </div>
</div>



		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
