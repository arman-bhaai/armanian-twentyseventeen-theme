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

            <div class="wrapper">
                <div class="header">
                    <h1 class="header__title">Lecture Gallery</h1>
                </div>

                <div id="hsc-20-section" class="section">
                    <h1 class="section-title">H.S.C - Batch '20</h1>
                    <div class="cards">    
                        <div class=" card [ is-collapsed ] ">
                            <div class="card__inner [ js-expander ]">
                                <span>H.S.C - 3:30</span>
                                <i class="fa fa-folder-o"></i>
                            </div>
                            <div class="card__expander">
                                <i class="fa fa-close [ js-collapser ]"></i>

                                <a href="<?php echo esc_url( home_url('/hsc-3-30-running/') ); ?>">
                                    <div class="box-item">
                                        <i class="fa fa-eject"></i>
                                        <p>Running Lecture</p>
                                    </div>
                                </a>
                                <a href="<?php echo esc_url( home_url('/hsc-3-30/') ); ?>">
                                    <div class="box-item">
                                        <i class="fa fa-backward"></i>
                                        <p>Previous Lectures</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class=" card [ is-collapsed ] ">
                            <div class="card__inner [ js-expander ]">
                                <span>H.S.C - 5:30</span>
                                <i class="fa fa-folder-o"></i>
                            </div>
                            <div class="card__expander">
                                <i class="fa fa-close [ js-collapser ]"></i>

                                <a href="<?php echo esc_url( home_url('/hsc-5-30-running/') ); ?>">
                                    <div class="box-item">
                                        <i class="fa fa-eject"></i>
                                        <p>Running Lecture</p>
                                    </div>
                                </a>
                                <a href="<?php echo esc_url( home_url('/hsc-5-30/') ); ?>">
                                    <div class="box-item">
                                        <i class="fa fa-backward"></i>
                                        <p>Previous Lectures</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>

                </div>

                <div id="hsc-19-section" class="section">
                    <h1 class="section-title">H.S.C - Batch '19</h1>
                    <div class="cards">    
                        <div class=" card [ is-collapsed ] ">
                            <div class="card__inner [ js-expander ]">
                                <span>H.S.C - 4:30</span>
                                <i class="fa fa-folder-o"></i>
                            </div>
                            <div class="card__expander">
                                <i class="fa fa-close [ js-collapser ]"></i>

                                <a href="<?php echo esc_url( home_url('/hsc-4-30-running/') ); ?>">
                                    <div class="box-item">
                                        <i class="fa fa-eject"></i>
                                        <p>Running Lecture</p>
                                    </div>
                                </a>
                                <a href="<?php echo esc_url( home_url('/hsc-4-30/') ); ?>">
                                    <div class="box-item">
                                        <i class="fa fa-backward"></i>
                                        <p>Previous Lectures</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class=" card [ is-collapsed ] ">
                            <div class="card__inner [ js-expander ]">
                                <span>H.S.C - 6:30</span>
                                <i class="fa fa-folder-o"></i>
                            </div>
                            <div class="card__expander">
                                <i class="fa fa-close [ js-collapser ]"></i>

                                <a href="<?php echo esc_url( home_url('/hsc-6-30-running/') ); ?>">
                                    <div class="box-item">
                                        <i class="fa fa-eject"></i>
                                        <p>Running Lecture</p>
                                    </div>
                                </a>
                                <a href="<?php echo esc_url( home_url('/hsc-6-30/') ); ?>">
                                    <div class="box-item">
                                        <i class="fa fa-backward"></i>
                                        <p>Previous Lectures</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>

                </div>

                <div id="ssc-section" class="section">
                    <h1 class="section-title">S.S.C - Batch '19</h1>
                    <div class="cards">    
                        <div class=" card [ is-collapsed ] ">
                            <div class="card__inner [ js-expander ]">
                                <span>S.S.C - 10:30</span>
                                <i class="fa fa-folder-o"></i>
                            </div>
                            <div class="card__expander">
                                <i class="fa fa-close [ js-collapser ]"></i>

                                <a href="<?php echo esc_url( home_url('/ssc-10-30-running/') ); ?>">
                                    <div class="box-item">
                                        <i class="fa fa-eject"></i>
                                        <p>Running Lecture</p>
                                    </div>
                                </a>
                                <a href="<?php echo esc_url( home_url('/ssc-10-30/') ); ?>">
                                    <div class="box-item">
                                        <i class="fa fa-backward"></i>
                                        <p>Previous Lectures</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class=" card [ is-collapsed ] ">
                            <div class="card__inner [ js-expander ]">
                                <span>S.S.C - 1:00</span>
                                <i class="fa fa-folder-o"></i>
                            </div>
                            <div class="card__expander">
                                <i class="fa fa-close [ js-collapser ]"></i>

                                <a href="<?php echo esc_url( home_url('/ssc-1-00-running/') ); ?>">
                                    <div class="box-item">
                                        <i class="fa fa-eject"></i>
                                        <p>Running Lecture</p>
                                    </div>
                                </a>
                                <a href="<?php echo esc_url( home_url('/ssc-1-00/') ); ?>">
                                    <div class="box-item">
                                        <i class="fa fa-backward"></i>
                                        <p>Previous Lectures</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>

                </div>

                <div id="nine-section" class="section">
                    <h1 class="section-title">Class - Nine</h1>
                    <div class="cards">    
                        <div class=" card [ is-collapsed ] ">
                            <div class="card__inner [ js-expander ]">
                                <span>Nine - 9:30</span>
                                <i class="fa fa-folder-o"></i>
                            </div>
                            <div class="card__expander">
                                <i class="fa fa-close [ js-collapser ]"></i>

                                <a href="<?php echo esc_url( home_url('/nine-9-30-running/') ); ?>">
                                    <div class="box-item">
                                        <i class="fa fa-eject"></i>
                                        <p>Running Lecture</p>
                                    </div>
                                </a>
                                <a href="<?php echo esc_url( home_url('/nine-9-30/') ); ?>">
                                    <div class="box-item">
                                        <i class="fa fa-backward"></i>
                                        <p>Previous Lectures</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class=" card [ is-collapsed ] ">
                            <div class="card__inner [ js-expander ]">
                                <span>Nine - 2:00</span>
                                <i class="fa fa-folder-o"></i>
                            </div>
                            <div class="card__expander">
                                <i class="fa fa-close [ js-collapser ]"></i>

                                <a href="<?php echo esc_url( home_url('/nine-2-00-running/') ); ?>">
                                    <div class="box-item">
                                        <i class="fa fa-eject"></i>
                                        <p>Running Lecture</p>
                                    </div>
                                </a>
                                <a href="<?php echo esc_url( home_url('/nine-2-00/') ); ?>">
                                    <div class="box-item">
                                        <i class="fa fa-backward"></i>
                                        <p>Previous Lectures</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>

                </div>

                <div id="eight-section" class="section">
                    <h1 class="section-title">Class - Eight</h1>
                    <div class="cards">    
                        <div class=" card [ is-collapsed ] ">
                            <div class="card__inner [ js-expander ]">
                                <span>Eight - 12:00</span>
                                <i class="fa fa-folder-o"></i>
                            </div>
                            <div class="card__expander">
                                <i class="fa fa-close [ js-collapser ]"></i>

                                <a href="<?php echo esc_url( home_url('/eight-12-00-running/') ); ?>">
                                    <div class="box-item">
                                        <i class="fa fa-eject"></i>
                                        <p>Running Lecture</p>
                                    </div>
                                </a>
                                <a href="<?php echo esc_url( home_url('/eight-12-00/') ); ?>" >
                                    <div class="box-item">
                                        <i class="fa fa-backward"></i>
                                        <p>Previous Lectures</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
