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
				<div class="darken">
					<div class="row">
						<div id="about-intro" class="col-xs-12 col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
							<h1 id="scroll">About us</h1>
						</div>
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
							<div class="button">
								<a href="/contact">Contact us</a>
								<svg width="20" height="12" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
								<line id="svg_1" y2="6" x2="20" y1="6" x1="0" stroke="#ffffff"></line>
								<line id="svg_3" y2="6" x2="20" y1="0" x1="15" stroke="#ffffff"></line>
								<line id="svg_5" y2="6" x2="20" y1="12" x1="15" stroke="#ffffff"></line>
								</svg>
							</div>
						</div>
						<div id="what-photo" class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="row">
								<div id="offer" class="col-xs-12 col-sm-6 col-sm-offset-6 col-md-6 col-offset-6 col-lg-7 col-lg-offset-5">
									<h3>What we offer</h3>
									<h2>Research</h2>
									<h2>Facilitation</h2>
									<h2>Learning Journeys</h2>
									<h2>Emergent Strategy</h2>
									<h2>Change Design</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="practice" class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-6 col-lg-offset-3">
						<h2>Our practice</h2>
						<p>Arteries work with people and communities who lead the design of our projects. We prioritise understanding the most marginalised perspectives. This often leads the way to unearthing root causes.</p>
						<p>Arteries also take a whole systems view, working from analysis of established infrastructures to create more context-responsive alternatives. We regenerate social, environmental and cultural wealth.</p>
						<p>Organisations often see change as linear – ‘if we do this then it is likely to result in that’.</p>
						<p>Arteries see change as emergent and non-linear. Many of the most powerful changes are not easily predicted. So to increase our chances of creating positive outcomes, we design and facilitate learning architecture for people in different inquiry strands, enabling us to see systems from many different angles, including those missing from the viewpoint of any single group.</p>
						<p>We weave together these strands, looking at patterns at different scales. Working with diverse groups in this way can enable all participants to gain a broader and deeper perspective on the systems they are part of, emerging new possibilities.</p>
						<p>Power inequalities can prevent these from being seen and put into practice, so we facilitate our way through these. Effective movement on the kinds of problems that our societies face today often comes from creating resonance between people in diverse, often conflicting, groups. This leads to effective ownership over the outcomes of a change process, which can range from new social innovations to policy frameworks.</p>
						<ol>
							<li>Take a systemic view, understanding the complexities of marginalisation</li>
							<li>Look for innovation and adaptation potential</li>
							<li>Prototype and iterate, responding to feedback across systems</li>
						</ol>
					</div>
				</div>
			</div>
			<div id="connections" class="container">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-6 col-lg-offset-3">
							<h2>Our connections</h2>
							<div id="con-logos" class="row">
								
								<?php $the_query = new WP_Query( 'post_type=connections', 'posts_per_page=5' ); ?>`

			                    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

			                        <div class="post col-sx-12 col-sm-3 col-md-3 col-lg-3">

			                        <?php
			                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
			                                the_post_thumbnail('medium_large');
			                            } ?>

			                        <?php the_excerpt(); ?>

			                        </div>

			                        <?php
			                    endwhile;
			                    wp_reset_postdata();
			                    ?>


							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>

<?php
get_footer();