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
			<div id="main-background" class="container">
				<div class="darken">
					<div class="row">
						<div id="main-intro" class="col-xs-9 col-xs-offset-2 col-sm-4 col-sm-offsest-4 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
							<h1 id="scroll">Weaving together an abundant world.</h1>
						</div>
					</div>
					<div id="arrow-row" class="row">
						<div id="arrow" class="col-xs-9 col-xs-offset-2 col-sm-4 col-sm-offsest-4 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 viewBox="0 0 133 42" style="enable-background:new 0 0 133 42;" xml:space="preserve">
							<style type="text/css">
								.st0{fill:#f8f5ee;}
								.st1{fill:none;stroke:#000000;stroke-miterlimit:10;}
							</style>
							<path class="st0" d="M133,42c-32,0-27.1-42-64.8-42S30.3,42,0,42"/>
							<g>
								<line class="st1" x1="66.5" y1="10" x2="66.5" y2="31"/>
								<line class="st1" x1="59.5" y1="24" x2="66.5" y2="31"/>
								<line class="st1" x1="73.5" y1="24" x2="66.5" y2="31"/>
							</g>
							</svg>

						</div>
					</div>
				</div>
			</div>
			<div id="welcome-background" class="container">
				<div class="row">
					<div id="welcome" class="col-sm-12 col-md-12 col-lg-6 col-lg-offset-3">
						<h2>Welcome</h2>
						<p>We are Arteries, we design events, projects, processes and platforms that support people to build better futures.</p>
					</div>
				</div>
			</div>
			<div id="featured" class="container">
				<div class="row">
					<div id="story-photo" class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					</div>
					<div id="story-text" class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<h2>Our story</h2>
						<p>With roots in 5 continents and having travelled many routes across the globe, Arteries brings together insights &amp; initiatives from research &amp; innovation, collaborative governance, bioregional planning, social change, health, design &amp; arts practice.</p>
						<p>Humans – across time - have created many worlds. On one earth. By re-weaving traditions, innovations &amp; political and social adaptations, we regenerate worlds that are diverse, just, sustainable, community-led and resilient. Effective social transformation connects thousands of people &amp; communities. We work with this diversity, creating abundance from difference.</p>
						<div class="button">
							<a href="#">More about us</a>
							<svg width="20" height="12" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
							<line id="svg_1" y2="6" x2="20" y1="6" x1="0" stroke="#ffffff"></line>
							<line id="svg_3" y2="6" x2="20" y1="0" x1="15" stroke="#ffffff"></line>
							<line id="svg_5" y2="6" x2="20" y1="12" x1="15" stroke="#ffffff"></line>
							</svg>
						</div>
					</div>
				</div>
				<div class="row">
					<div id="pluri-photo" class="col-sx-12 col-sm-6 col-md-6 col-lg-6 col-sm-push-6">
					</div>
					<div id="pluri-text" class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-sm-pull-6">
						<h2>Featured project</h2>
						<h3>Pluriversal Futures</h3>
						<p>All too often, top-down policy &amp; practice features only one world-view.</p>
						<p>To create a future that includes all of us, we need to recognise that most people navigate many worlds on a daily basis.</p>
						<p>From there, we create. A world where many worlds fit, on one earth.</p>
						<div class="button">
							<a href="#">Learn more</a>
							<svg width="20" height="12" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
							<line id="svg_1" y2="6" x2="20" y1="6" x1="0" stroke="#ffffff"></line>
							<line id="svg_3" y2="6" x2="20" y1="0" x1="15" stroke="#ffffff"></line>
							<line id="svg_5" y2="6" x2="20" y1="12" x1="15" stroke="#ffffff"></line>
							</svg>
						</div>
					</div>
				</div>
			</div>
			<div id="hub" class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-6 col-lg-offset-3">
						<h2>Hub</h2>
						<p>The Arteries Hub is filled with info on our projects, events and other stories. Be sure to sign up to our mailing list for updates.</p>
					</div>
				</div>
				<div class="row" id="posts-row">

			        <?php $the_query = new WP_Query( 'posts_per_page=2' ); ?>`

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
				<div class="row">
					<div class="more-posts col-sm-12 col-md-12 col-lg-6 col-lg-offset-3">
						<div class="button">
							<a href="#">More posts</a>
							<svg width="20" height="12" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
							<line id="svg_1" y2="6" x2="20" y1="6" x1="0" stroke="#ffffff"></line>
							<line id="svg_3" y2="6" x2="20" y1="0" x1="15" stroke="#ffffff"></line>
							<line id="svg_5" y2="6" x2="20" y1="12" x1="15" stroke="#ffffff"></line>
							</svg>
						</div>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
