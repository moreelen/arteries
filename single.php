<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Arteries
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div id="post-content">
				<div id="post-extender" class="container">
				</div>
			</div>
			<div id="post-background" class="container">
				<div class="row">
					<div class="col-sm-12 col-md-8 col-lg-8">
						<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', get_post_type() );

							// If comments are open or we have at least one comment, load up the comment template.
							//if ( comments_open() || get_comments_number() ) :
							//	comments_template();
							//endif;

						endwhile; // End of the loop.
						?>

						<h4 id="recent">Recent posts</h4>

						<div class="row" id="posts-row">

		                    <?php $the_query = new WP_Query( 'posts_per_page=2' ); ?>`

		                    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

	                        <div class="post col-sx-12 col-sm-4 col-md-4 col-lg-4">

		                        <?php
		                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
		                                the_post_thumbnail('medium_large');
		                            } ?>

		                        <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>

		                        <h5><?php the_time('j M Y'); ?></h5>

	                        </div>
	                        <?php
		                    endwhile;
		                    wp_reset_postdata();
		                    ?>
		                    <?php comment_form(); ?>
		                </div>
					</div>
					<div class="col-sm-hidden col-md-4 col-lg-4">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
