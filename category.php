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

                    <?php

                    // Grid parameters
                    $counter = 1; // Start counter.
                    $grids = 3; // Grids per row.
                    $titlelength = 50; // Length of the post titles shown below the thumbnails.

                    // Query
                   $args=array (
                        'post_type' => 'post',
                        'posts_per_page' => -1
                        );
                    $the_query = new WP_Query($args);
                    // The Loop
                    while ( $the_query->have_posts() ) :
                        $the_query->the_post();


                    // Show all columns except the right hand side column
                    if($counter != $grids) :
                    ?>
                    
                    <div class="post griditemleft">

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
                        </div> <!-- Grid item left -->
                    </div>

                    <?php
                    // Show the right hand side column
                    elseif($counter == $grids) :
                    ?>

                    <div class="post griditemright">

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
                    </div><!-- Grid item right -->
                     
                    <div class="clear"></div>
                    <?php
                    $counter = 0;
                    endif;
                    $counter++;
                    endwhile;
                    wp_reset_postdata();
                    ?>

                </div>
            </div>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();