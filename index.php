<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="eightcol first clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

								<header class="article-header">

									<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

									<p class="byline">
										<?php
										printf(__('<time class="updated" datetime="%1$s" pubdate>%2$s</time> in %3$s.', 'z13'), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_category_list(', ')); ?>
									</p>

								</header> <!-- end article header -->

								<section class="entry-content clearfix">
									<?php the_content(); ?>
								</section> <!-- end article section -->


							</article> <!-- end article -->

							<?php endwhile; ?>

									<?php if (function_exists('bones_page_navi')) { ?>
											<?php bones_page_navi(); ?>
									<?php } else { ?>
											<nav class="wp-prev-next">
													<ul class="clearfix">
														<li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "z13")) ?></li>
														<li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "z13")) ?></li>
													</ul>
											</nav>
									<?php } ?>

							<?php else : // no posts ?>

									<article id="post-not-found" class="hentry clearfix">
											<header class="article-header">
												<h1><?php _e("Oops, Post Not Found!", "z13"); ?></h1>
											</header>
											<section class="entry-content">
												<p><?php _e("Sorry, we couldn't find the post you requested.", "z13"); ?></p>
										</section>

									</article>

							<?php endif; ?>

						</div> <!-- end #main -->

						<?php //get_sidebar(); ?>

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
