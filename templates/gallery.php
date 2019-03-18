<?php
    /*
        Template Name: Gallery
    */
?>

<?php get_header(); ?>

<main id="main" class="gallery-template-page" tabindex="-1">

	<?php $images = get_field('hello_section_background_image'); ?>
	<?php if( $images ): ?>

		<section class="hello-section">
			<div id="hello-section__background-wrapper" class="hello-section__background-wrapper owl-carousel owl-theme">

				<?php foreach( $images as $image ): ?>

					<div class="hello-section__background-wrapper__image background-cover lazy" data-src="<?php echo $image['url']; ?>"></div><!-- /.hello-section__background-wrapper__image background-cover lazy -->

				<?php endforeach; ?>

			</div><!-- /#hello-section__background-wrapper.hello-section__background-wrapper owl-carousel owl-theme -->

			<?php if (is_array($images) && (count($images) > 1)) : ?>

				<ul class="hello-section__background-wrapper-controls">
					<li class="hello-section__background-wrapper-controls__single-control">
						<button class="hello-section__background-wrapper-controls__single-control__button hello-section__background-wrapper-controls__single-control__button--left" type="button">
							<svg id="arrow2" class="hello-section__background-wrapper-controls__single-control__button__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 22" height="32" width="42">
								<title>icon__arrow--white</title>
								<path id="Arrow_Forward" class="st0" d="M32,11c0-0.3-0.1-0.5-0.3-0.7l-9.9-10c-0.4-0.4-1-0.4-1.4,0c-0.4,0.4-0.4,1,0,1.4 c0,0,0,0,0,0l8.2,8.3H1c-0.6,0-1,0.4-1,1c0,0.6,0.4,1,1,1h27.6l-8.2,8.3c-0.4,0.4-0.4,1,0,1.4c0,0,0,0,0,0c0.4,0.4,1,0.4,1.4,0 l9.9-10C31.9,11.5,32,11.3,32,11z" />
							</svg>
						</button>
					</li><!-- /.hello-section__background-wrapper-controls__single-control -->
					<li class="hello-section__background-wrapper-controls__single-control">
						<button class="hello-section__background-wrapper-controls__single-control__button hello-section__background-wrapper-controls__single-control__button--right" type="button">
							<svg id="arrow2" class="hello-section__background-wrapper-controls__single-control__button__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 22" height="32" width="42">
								<title>icon__arrow--white</title>
								<path id="Arrow_Forward" class="st0" d="M32,11c0-0.3-0.1-0.5-0.3-0.7l-9.9-10c-0.4-0.4-1-0.4-1.4,0c-0.4,0.4-0.4,1,0,1.4 c0,0,0,0,0,0l8.2,8.3H1c-0.6,0-1,0.4-1,1c0,0.6,0.4,1,1,1h27.6l-8.2,8.3c-0.4,0.4-0.4,1,0,1.4c0,0,0,0,0,0c0.4,0.4,1,0.4,1.4,0 l9.9-10C31.9,11.5,32,11.3,32,11z" />
							</svg>
						</button>
					</li><!-- /.hello-section__background-wrapper-controls__single-control -->
				</ul><!-- /.hello-section__background-wrapper-controls -->

			<?php endif; ?>

			<div class="container">
				<div class="row">
					<div class="col-md-8 col-lg-6 col-xl-5">
						<div class="hello-section__content-wrapper text-center text-md-right" data-aos="fade">
							<h1 class="hello-section__content-wrapper__title text-uppercase"><?php if(get_field('hello_section_title')) { the_field('hello_section_title'); } else { the_title(); } ?></h1><!-- /.hello-section__content-wrapper__title text-uppercase -->
						</div><!-- /.hello-section__content-wrapper text-center text-md-right -->
					</div><!-- /.col-md-8 col-lg-6 col-xl-5 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.hello-section -->

	<?php endif; ?>

	<div class="gallery">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="text-center">

						<?php $images = get_field('gallery'); ?>

						<?php if( $images ): ?>
						    <div class="gallery-list d-flex flex-wrap">

						        <?php foreach( $images as $image ): ?>

						            <a href="<?php echo $image['url']; ?>" rel="gallery" class="single-image-link">
						            	<div class="single-image-link__image background-cover lazy" data-src="<?php echo $image['url']; ?>"></div><!-- /.single-image-link__image background-cover lazy -->
						            </a>

						        <?php endforeach; ?>

						    </div><!-- /.gallery-list d-flex flex-wrap -->
						<?php endif; ?>

						<button id="loadLess" class="campi-ya-kanzi-button campi-ya-kanzi-button__with-arrow campi-ya-kanzi-button__with-arrow--white">
							<img src="<?php echo get_template_directory_uri(); ?>/images/icon__arrow--white.svg" alt="Icon Arrow" class="arrow svg"/>
							Load less
						</button>
						<button id="loadMore" class="campi-ya-kanzi-button campi-ya-kanzi-button__with-arrow campi-ya-kanzi-button__with-arrow--white visible">
							<img src="<?php echo get_template_directory_uri(); ?>/images/icon__arrow--white.svg" alt="Icon Arrow" class="arrow svg"/>
							Load more
						</button>

					</div><!-- /.text-center -->
				</div><!-- /.col-12 -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div><!-- /.gallery -->

	<?php if( have_rows('gallery_video_section') ): ?>
		<?php $main_loop_counter = 1; ?>
		<?php while ( have_rows('gallery_video_section') ) : the_row(); ?>

			<div class="gallery-section element-margin-top" data-aos="fade">
				<div class="container">
					<div class="row no-gutters">
						<div class="col-md-6 ml-md-auto">
							<h2 class="gallery-section__title text-center text-md-left"><a href="https://www.youtube.com/user/lucasafari/videos" target="_blank"><?php the_sub_field('gallery_video_section_title'); ?></a></h2><!-- /.gallery-section__title text-center text-md-left -->
						</div><!-- /.col-md-6 ml-md-auto -->
					</div><!-- /.row no-gutters -->
					<div class="row no-gutters">
						<div class="col-md-5 ml-md-auto">
							<div class="gallery-section__thumbnails nav owl-carousel owl-theme" role="tablist">

								<?php if( have_rows('single_video') ): ?>
									<?php $loop_counter = 1; ?>

									<?php $loop_length = 0; ?>
									<?php while ( have_rows('single_video') ) : the_row(); ?>
										<?php $loop_length++; ?>
									<?php endwhile; ?>

									<?php while ( have_rows('single_video') ) : the_row(); ?>

											<?php if( ($loop_counter + 2) % 3 == 0 ) : ?><div class="item"><?php endif; ?>

												<?php $image = get_sub_field('video_placeholder'); ?>
			        							<?php if( $image ): ?>

													<a id="<?php echo $main_loop_counter; ?>-video-<?php echo $loop_counter; ?>" data-toggle="tab" href="#<?php echo $main_loop_counter; ?>-home-<?php echo $loop_counter;  ?>" role="tab" aria-controls="<?php echo $main_loop_counter; ?>-home-<?php echo $loop_counter;  ?>" <?php if( $loop_counter == 1 ) { echo ' aria-expanded="true"';} else { echo ' aria-expanded="false"';} ?> class="gallery-section__thumbnails__link<?php if( $loop_counter == 1 ) { echo ' active';} ?>">
														<div class="gallery-section__thumbnails__link__image background-cover lazy" data-src="<?php echo $image['url']; ?>"></div><!-- /.gallery-section__thumbnails__link__image background-cover lazy -->
													</a>

												<?php endif; ?>

											<?php if( $loop_counter % 3 == 0 || $loop_counter == $loop_length) : ?></div><?php endif; ?>


										<?php $loop_counter++; ?>
									<?php endwhile; ?>
								<?php endif; ?>

							</div><!-- /.gallery-section__thumbnails -->
						</div><!-- /.col-md-5 ml-md-auto -->
						<div class="col-md-6">
							<div class="tab-content">

								<?php if( have_rows('single_video') ): ?>
									<?php $loop_counter_second = 1; ?>
									<?php while ( have_rows('single_video') ) : the_row(); ?>

										<div class="tab-pane fade<?php if( $loop_counter_second == 1 ) { echo ' show active';}; ?>" id="<?php echo $main_loop_counter; ?>-home-<?php echo $loop_counter_second; ?>" role="tabpanel" aria-labelledby="<?php echo $main_loop_counter; ?>-video-<?php echo $loop_counter_second; ?>">
											<div class="gallery-section__link">
												<?php the_sub_field('video_url'); ?>
											</div>
										</div>

										<?php $loop_counter_second++; ?>
									<?php endwhile; ?>
								<?php endif; ?>

							</div><!-- /.tab-content -->
						</div><!-- /.col-md-6 -->
					</div><!-- /.row no-gutters -->
				</div><!-- /.container -->
			</div><!-- /.gallery-section element-margin-top -->

			<?php $main_loop_counter++; ?>
		<?php endwhile; ?>
	<?php endif; ?>

	<section class="gallery element-paddings" data-aos="fade">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6 ml-md-auto">
					<h2 class="gallery__title text-center text-md-left"><?php the_field( 'gallery_section_title' ); ?></h2><!-- /.gallery__title text-center text-md-left -->

					<?php get_template_part( 'partials/social-icons' ); ?>

				</div><!-- /.col-12 col-md-6 ml-md-auto -->

				<?php if ( have_rows( 'gallery_section' ) ) : ?>

					<div class="col-12">

					<div class="gallery__images">

						<?php while ( have_rows( 'gallery_section' ) ) : the_row(); ?>

							<?php $image = get_sub_field('gallery_image'); ?>
							<?php if( $image ): ?>

								<a href="<?php echo $image['url']; ?>" class="gallery__images__single-image-link" rel="gallery">
									 <img src="<?php echo $image['sizes']['square-gallery-image']; ?>" alt="<?php echo $image['alt']; ?>" class="gallery__images__single-image-link__image" />
								</a>

							<?php endif; ?>

							<?php $image = get_sub_field('video_placeholder'); ?>
							<?php if( $image ): ?>

								<a href="<?php the_sub_field('video_url', false, false); ?>&autoplay=1" class="gallery__images__single-video-link" rel="gallery">
									 <img src="<?php echo $image['sizes']['square-gallery-image']; ?>" alt="<?php echo $image['alt']; ?>" class="gallery__images__single-video-link__image" />
								</a>

							<?php endif; ?>
						<?php endwhile; ?>

					</div><!-- /.gallery__images -->
					</div><!-- /.col-12 -->

				<?php endif; ?>

			</div><!-- /.row -->
		</div><!-- /.container -->
	</section><!-- /.gallery element-paddings -->

</main><!-- /#main.gallery-template-page -->

<script>
</script>

<?php get_footer(); ?>