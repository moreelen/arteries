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
			<div id="about-background" class="container">
				<div class="row">
					<div id="main-intro" class="col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
						<h1 id="scroll">About us</h1>
					</div>
				</div>
			</div>
			<div id="what-do" class="container">
				<div class="container">
					<div class="row">
						<div id="what-text" class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<h2>What we do</h2>
							<p>Every project is unique and we bring together the team to match it. Between us we have built social movements &amp; sustainable infrastructure, designed participatory processes &amp; multimedia platforms, curated immersive events &amp; multi-year learning journeys.</p>
							<p>We are a community of practice &amp; a movement for change.</p>
							<p>We believe in collaborating to transform systems. Get in touch, we’d love to work with you.</p>
						</div>
						<div id="what-photo" class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="row">
								<div id="offer" class="col-xs-12 col-sm-8 col-sm-offset-4 col-md-8 col-offset-4 col-lg-8 col-lg-offset4">
									<h3>What we offer</h3>
									<h2>Research</h2>
									<h2>Facilitation</h2>
									<h2>Process Design</h2>
									<h2>Learning Journeys</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="connections" class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-6 col-lg-offset-3">
						<h2>Our connections</h2>
						<div id="con-logos" class="row">
							<div class="col-xs-6 col-md-3 col-lg-3">
								<p><img src="#"></p>
								<p><a href="#">Connection</a></p>
							</div>
							<div class="col-xs-6 col-md-3 col-lg-3">
								<p><img src="#"></p>
								<p><a href="#">Connection</a></p>
							</div>
							<div class="col-xs-6 col-md-3 col-lg-3">
								<p><img src="#"></p>
								<p><a href="#">Connection</a></p>
							</div>
							<div class="col-xs-6 col-md-3 col-lg-3">
								<p><img src="#"></p>
								<p><a href="#">Connection</a></p>
							</div>
							<div class="col-xs-6 col-md-3 col-lg-3">
								<p><img src="#"></p>
								<p><a href="#">Connection</a></p>
							</div>
							<div class="col-xs-6 col-md-3 col-lg-3">
								<p><img src="#"></p>
								<p><a href="#">Connection</a></p>
							</div>
							<div class="col-xs-6 col-md-3 col-lg-3">
								<p><img src="#"></p>
								<p><a href="#">Connection</a></p>
							</div>
							<div class="col-xs-6 col-md-3 col-lg-3">
								<p><img src="#"></p>
								<p><a href="#">Connection</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>

<?php
get_footer();