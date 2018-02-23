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
			<div id="contact-background" class="container">
				<div class="darken">
					<div class="row">
						<div id="contact-intro" class="col-xs-9 col-xs-offset-2 col-sm-4 col-sm-offsest-4 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
							<h1 id="scroll">Contact us</h1>
						</div>
					</div>
				</div>
			</div>
			<div id="info-background" class="container">
				<div class="row">
					<div id="info" class="col-sm-12 col-md-12 col-lg-6 col-lg-offset-3">
						<h2>Contact us</h2>
						<p>We’re interested in collaborating to build a future for all of us. 
						</br>Come say <a href="mailto:hello@arteries.earth">hello@arteries.earth</a></p>
						<p>We’d love to chat.</p>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
