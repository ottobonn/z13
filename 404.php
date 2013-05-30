<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<div id="main" class="eightcol first clearfix" role="main">

						<article id="post-not-found" class="hentry clearfix">

							<header class="article-header">

								<h1><?php _e("Oops: Article Not Found (404)", "z13"); ?></h1>

							</header> <!-- end article header -->

							<section class="entry-content">

								<p><?php _e("Sorry, we couldn't find the article you requested.", "z13"); ?></p>

							</section> <!-- end article section -->

							<section class="search">

									<p><?php get_search_form(); ?></p>

							</section> <!-- end search section -->

						</article> <!-- end article -->

					</div> <!-- end #main -->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
