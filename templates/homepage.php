<?php
    /*
        Template Name: Homepage
    */
?>

<?php get_header(); ?>

<main id="main" class="homepage-template" tabindex="-1">

	<?php $image = get_field('intro_background'); ?>
	<?php if( !empty($image) ): ?>

		<section class="intro element-padding-bottom background-cover lazy" data-src="<?php echo $image['url']; ?>" style="background-position: left;">
			<div class="container">
				<div class="row justify-content-md-between">
					<div class="col-md-5">
						<h1 class="intro__title text-md-right" data-aos="fade"><?php if(get_field('intro_title')) { the_field('hello_section_title'); } else { the_title(); } ?></h1><!-- /.intro__title text-md-right -->
					</div><!-- /.col-md-5 -->
					<div class="col-md-6">
						<div class="intro__content content element-small-margin-top" data-aos="fade">
							<?php the_field('intro_content'); ?>
						</div><!-- /.intro__content content element-small-margin-top -->
					</div><!-- /.col-md-6 -->
				</div><!-- /.row justify-content-md-between -->
			</div><!-- /.container -->
		</section><!-- /.intro element-padding-bottom background-cover lazy -->

	<?php endif; ?>

	<?php if ( have_rows( 'link_boxes' ) ) : ?>

		<div class="link-boxes d-flex flex-wrap" data-aos="fade">

			<?php while ( have_rows( 'link_boxes' ) ) : the_row(); ?>

				<?php $image = get_sub_field('link_boxes_image'); ?>
				<?php if( !empty($image) ): ?>

					<a href="<?php the_sub_field( 'link_boxes_page' ); ?>" class="link-boxes__single-link d-flex flex-wrap align-content-center align-items-center justify-content-center background-cover text-center lazy" data-src="<?php echo $image['url']; ?>">
						<span class="link-boxes__single-link__label"><?php the_sub_field( 'link_boxes_title' ); ?></span>
						<img src="<?php echo get_template_directory_uri(); ?>/images/icon__arrow--primary-color.svg" alt="Icon Arrow" class="link-boxes__single-link__arrow svg"/>
					</a>

				<?php endif; ?>

			<?php endwhile; ?>

		</div><!-- /.link-boxes d-flex flex-wrap -->

	<?php endif; ?>

	<section class="introduction element-paddings">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-md-6 ml-md-auto">

					<?php if( have_rows('introduction') ): ?>
	        			<?php while( have_rows('introduction') ): the_row(); ?>

							<h2 class="introduction__title text-center text-md-left" data-aos="fade"><?php the_sub_field('introduction_title'); ?></h2><!-- /.introduction__title text-center text-md-left -->

						<?php endwhile; ?>
					<?php endif; ?>

				</div><!-- /.col-md-6 ml-md-auto -->
			</div><!-- /.row no-gutters -->
			<div class="row no-gutters">

				<?php if( have_rows('testimonial') ): ?>
        			<?php while( have_rows('testimonial') ): the_row(); ?>

						<div class="col-md-5 ml-md-auto">
							<div class="introduction__quotation-wrapper d-flex flex-wrap flex-column justify-content-between" data-aos="fade">
								<blockquote class="introduction__quotation-wrapper__quotation text-md-right element-small-margin-top">
									<div class="introduction__quotation-wrapper__quotation__content content">
										<?php the_sub_field('quotation'); ?>
									</div><!-- /.introduction__quotation-wrapper__quotation__content content -->
									<cite class="introduction__quotation-wrapper__quotation__cite d-block element-small-margin-top"><?php the_sub_field('cite'); ?></cite>
								</blockquote><!-- /.introduction__quotation-wrapper__quotation text-md-right element-small-margin-top -->

								<?php if( have_rows('button_wrapper') ): ?>
	        						<?php while( have_rows('button_wrapper') ): the_row(); ?>

										<a href="<?php the_sub_field('link'); ?>" target="_blank" class="campi-ya-kanzi-button campi-ya-kanzi-button__bordered-box campi-ya-kanzi-button__with-arrow campi-ya-kanzi-button__with-arrow--primary-color" data-aos="fade-right">
										<img src="<?php echo get_template_directory_uri(); ?>/images/icon__owl.svg" alt="Icon Owl" class="icon svg" />
										<img src="<?php echo get_template_directory_uri(); ?>/images/icon__arrow--primary-color.svg" alt="Icon Arrow" class="arrow svg"/>
										<?php the_sub_field('label'); ?></a>

									<?php endwhile; ?>
								<?php endif; ?>
							</div><!-- /.introduction__quotation-wrapper d-flex flex-wrap flex-columns justify-content-between -->
						</div><!-- /.col-md-5 ml-md-auto -->

					<?php endwhile; ?>
				<?php endif; ?>

				<div class="col-md-6 ml-md-auto">

					<?php if( have_rows('introduction') ): ?>
	        			<?php while( have_rows('introduction') ): the_row(); ?>

							<div class="introduction__content content element-small-margin-top" data-aos="fade">
								<?php the_sub_field('introduction_content'); ?>
							</div><!-- /.introduction__content content element-small-margin-top -->

						<?php endwhile; ?>
					<?php endif; ?>

				</div><!-- /.col-md-6 ml-md-auto -->
			</div><!-- /.row no-gutters -->
		</div><!-- /.container -->
	</section><!-- /.introduction element-paddings -->

	<section class="where-we-are">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="where-we-are__title-wrapper">
						<div class="row no-gutters">
							<div class="col-12 col-md-6 ml-md-auto">
								<h2 class="where-we-are__title-wrapper__title text-center text-md-left" data-aos="fade"><?php the_field( 'where_we_are_title'); ?></h2><!-- /.where-we-are__title-wrapper__title text-center text-lg-left -->
							</div><!-- /.col-12 col-md-6 ml-md-auto -->
						</div><!-- /.row no-gutters -->
					</div><!-- /.where-we-are__title-wrapper -->
				</div><!-- /.col-12 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
		<div class="where-we-are__map" data-aos="fade">

			<?php $location = get_field('where_we_are_map'); ?>
			<?php if( !empty($location) ): ?>

			<div class="acf-map map element-small-margin-top">
				<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
			</div>

			<?php endif; ?>

		</div><!-- /.where-we-are__map -->
		<div class="where-we-are__content-wrapper">
			<div class="container">
				<div class="row no-gutters">

					<?php if( have_rows('where_we_are_button') ): ?>

						<div class="col-12 col-md-5">

							<?php while( have_rows('where_we_are_button') ): the_row(); ?>

								<a href="<?php the_sub_field( 'where_we_are_button_url' ); ?>" target="_blank" class="where-we-are__content-wrapper__link campi-ya-kanzi-button campi-ya-kanzi-button__bordered-box campi-ya-kanzi-button__with-arrow campi-ya-kanzi-button__with-arrow--primary-color campi-ya-kanzi-button__with-arrow--cross" data-aos="fade-right">
									<img src="<?php echo get_template_directory_uri(); ?>/images/icon__map.svg" alt="Icon Map" class="icon svg" />
									<img src="<?php echo get_template_directory_uri(); ?>/images/icon__arrow--primary-color.svg" alt="Icon Arrow" class="arrow svg"/>
									<?php the_sub_field( 'where_we_are_button_label' ); ?>
								</a>

							<?php endwhile; ?>

						</div><!-- /.col-12 col-md-5 -->

					<?php endif; ?>

					<div class="col-12 col-md-6 ml-md-auto">
						<div class="where-we-are__content-wrapper__address" data-aos="fade">

							<?php if( have_rows('where_we_are_address') ): ?>
								<?php while( have_rows('where_we_are_address') ): the_row(); ?>

									<span class="where-we-are__content-wrapper__address__name"><?php the_sub_field( 'where_we_are_address_name' ); ?>, </span>
									<span class="where-we-are__content-wrapper__address__location"><?php the_sub_field( 'where_we_are_address_location' ); ?></span>

								<?php endwhile; ?>
							<?php endif; ?>
							<ul class="where-we-are__content-wrapper__address__list list-unstyled list-inline">
								<li class="where-we-are__content-wrapper__address__list__item list-inline-item">
									Latitude: <span class="where-we-are__content-wrapper__address__list__item__value"><?php the_field( 'where_we_are_latitude' ); ?></span>
								</li><!-- /.where-we-are__content-wrapper__address__list__item list-inline-item -->
								<li class="where-we-are__content-wrapper__address__list__item list-inline-item">
									Longitude: <span class="where-we-are__content-wrapper__address__list__item__value"><?php the_field( 'where_we_are_longitude' ); ?></span>
								</li><!-- /.where-we-are__content-wrapper__address__list__item list-inline-item -->
							</ul><!-- /.where-we-are__content-wrapper__address__list list-unstyled list-inline -->
						</div><!-- /.where-we-are__content-wrapper__address -->
					</div><!-- /.col-12 col-md-6 ml-md-auto -->
				</div><!-- /.row no-gutters -->
			</div><!-- /.container -->
		</div><!-- /.where-we-are__content-wrapper -->
	</section><!-- /.where-we-are -->

	<?php get_template_part( 'partials/gallery' ); ?>

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

								<a rel="next" href="<?php echo $image['url']; ?>" class="gallery__images__single-image-link">
									 <img src="<?php echo $image['sizes']['square-gallery-image']; ?>" alt="<?php echo $image['alt']; ?>" class="gallery__images__single-image-link__image" />
								</a>

							<?php endif; ?>

							<?php $image = get_sub_field('video_placeholder'); ?>
							<?php if( $image ): ?>

								<a rel="next" href="<?php the_sub_field('video_url', false, false); ?>&autoplay=1" class="gallery__images__single-video-link">
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

</main><!-- /#main.homepage-template -->

<?php get_footer('partners'); ?>