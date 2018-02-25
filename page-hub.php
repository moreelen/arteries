<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Arteries
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div id="hub-background" class="container">
                <div class="darken">
                    <div class="row">
                        <div id="hub-intro" class="col-xs-9 col-xs-offset-2 col-sm-4 col-sm-offsest-4 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
                            <h1 id="scroll">Hub</h1>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="categories" class="container">
                <div class="row">
                    <div id="ul-container" class="col-sm-12 col-md-12 col-lg-12">
                        <h2>Select topic</h2>
                        <ul>
                            <?php wp_list_categories( array(
                                'orderby'    => 'name',
                            ) ); ?> 
                        </ul>
                    </div>
                </div>
                <div class="row" id="posts-row">

                    <?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>`

                    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

                        <div class="post col-sx-12 col-sm-4 col-md-4 col-lg-4">

                        <?php
                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                the_post_thumbnail('medium_large');
                            } ?>

                        <h5><?php the_time('j M Y'); ?></h5>

                        <h4><?php the_title(); ?></h4>

                        <p><?php the_excerpt(); ?></p>

                        <div class="button-post">
                            <a href="<?php the_permalink() ?>">Read more</a>
                            <svg width="20" height="12" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                            <line id="svg_1" y2="6" x2="20" y1="6" x1="0" stroke="#f1234c"></line>
                            <line id="svg_3" y2="6" x2="20" y1="0" x1="15" stroke="#f1234c"></line>
                            <line id="svg_5" y2="6" x2="20" y1="12" x1="15" stroke="#f1234c"></line>
                            </svg>
                        </div>


                        </div>

                        <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>

                    
                </div>
            </div>



            <!-- POTENTIAL CODE FOR ONE PAGE CATEGORIES -->

            <!--
            <?php 
            // Check if there are any posts to display
            // if ( have_posts() ) : ?>
             
            <header class="archive-header">
            <h1 class="archive-title">Category: <?php // single_cat_title( '', false ); ?></h1>
             
             
            <?php
            // Display optional category description
             // if ( category_description() ) : ?>
            <div class="archive-meta"><?php // echo category_description(); ?></div>
            <?php //endif; ?>
            </header>
             
            <?php
             
            // The Loop
            // while ( have_posts() ) : the_post(); ?>
            <h2><a href="<?php // the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php // the_title_attribute(); ?>"><?php // the_title(); ?></a></h2>
            <small><?php // the_time('F jS, Y') ?> by <?php // the_author_posts_link() ?></small>
             
            <div class="entry">
            <?php // the_content(); ?>
             
             <p class="postmetadata"><?php
              // comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments closed');
            ?></p>
            </div>
             
            <?php // endwhile; 
             
            // else: ?>
            <p>Sorry, no posts matched your criteria.</p>
             
             
            <?php // endif; ?>
            </div>
            </section>
            -->

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();