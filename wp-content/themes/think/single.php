<?php get_header();?>


		<section id="blog-single" data-scroll-index='5'>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<div class="main-wrapper">

				<div class="blog-right-column four-fifths">

					<article class="blog-single-page" id="post-<?php the_ID(); ?>">

						<div class="featured-image-column one-half">

							<div class="sticky">
								<!-- post thumbnail -->
								<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
									<?php the_post_thumbnail(); // Fullsize image for the single post ?>
								<?php endif; ?>

								<div class="social-links">
									<?php echo do_shortcode( '[hupso]' ); ?>
								</div>

							</div>

						</div>

						<div class="blog-content one-half">

							<h1><?php the_title();?></h1>

							<!-- <time class="date"><?php the_time('d.m.Y'); ?></time>

							<span class="author"> by <?php the_author_posts_link(); ?></span> -->

							<?php the_content();?>

							<p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>

							<div class="next-prev-posts">
								<a href="<?php echo get_permalink(get_adjacent_post(false,'',true)); ?>" class="previous-post one-half">>
									<div>
										<svg version="1.1" id="previous_arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="184.6 0 429.4 800" enable-background="new 184.6 0 429.4 800" xml:space="preserve"><path fill="#3FA9F5" id="previous_arrow" d="M494.8,397.3L296.6,32.5l145.1,87.6l152.2,277.2L441.7,677.4L298,762.1L494.8,397.3z M206.1,706.1l169.5-308.8L206.1,87l64.6-63.2l203.9,373.4L272.2,770.7L206.1,706.1z M272.2-2l-87.6,87.6L354,398.7L184.6,710.4l87.6,87.6l0,0l182.4-107.7L614,398.7l0,0L456,108.6L272.2-2z"/></svg>
									</div>
								</a>
								<a href="<?php echo get_permalink(get_adjacent_post(false,'',false)); ?>" class="next-post one-half">>
									<div>
										<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="184.6 0 429.4 800" enable-background="new 184.6 0 429.4 800" xml:space="preserve"><path fill="#3FA9F5" d="M494.8,397.3L296.6,32.5l145.1,87.6l152.2,277.2L441.7,677.4L298,762.1L494.8,397.3z M206.1,706.1l169.5-308.8L206.1,87l64.6-63.2l203.9,373.4L272.2,770.7L206.1,706.1z M272.2-2l-87.6,87.6L354,398.7L184.6,710.4l87.6,87.6l0,0l182.4-107.7L614,398.7l0,0L456,108.6L272.2-2z"/></svg>
									</div>
								</a>
							</div>

						</div>

					</article>

				</div>

			</div>

			<?php endwhile; ?>

			<?php else: ?>

			<?php endif; ?>

		</section><!-- /section -->

		<!-- Lightbox video -->
	<section id="contact-form" class="contact-lightbox lightbox">
		<div class="close-container"></div>

		<div class="lightbox-wrapper">
			<?php echo do_shortcode('[contact-form-7 id="99" title="Contact form"]')?>		
		</div>
	</section><!-- /lightbox video -->


<?php get_footer(); ?>
