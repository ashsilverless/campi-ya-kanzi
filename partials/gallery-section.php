<section class="gallery element-paddings" data-aos="fade">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 ml-md-auto">
				<h2 class="gallery__title text-center text-md-left"><?php the_field( 'gallery_section_title' ); ?></h2><!-- /.gallery__title text-center text-md-left -->

			</div><!-- /.col-12 col-md-6 ml-md-auto -->

			<?php if ( have_rows( 'gallery_section' ) ) : ?>

				<div class="col-12">

				<div class="gallery__images">

					<?php while ( have_rows( 'gallery_section' ) ) : the_row(); ?>

						<?php $image = get_sub_field('gallery_image'); ?>
						<?php if( $image ): ?>

							<a href="<?php echo $image['url']; ?>" class="gallery__images__single-image-link" rel="gallery">
								 <img data-src="<?php echo $image['sizes']['square-gallery-image']; ?>" alt="<?php echo $image['alt']; ?>" class="gallery__images__single-image-link__image lazy" />
							</a>

						<?php endif; ?>

						<?php $image = get_sub_field('video_placeholder'); ?>
						<?php if( $image ): ?>

							<a href="<?php the_sub_field('video_url', false, false); ?>&autoplay=1" class="gallery__images__single-video-link" rel="gallery">
								 <img data-src="<?php echo $image['sizes']['square-gallery-image']; ?>" alt="<?php echo $image['alt']; ?>" class="gallery__images__single-video-link__image lazy" />
							</a>

						<?php endif; ?>
					<?php endwhile; ?>

				</div><!-- /.gallery__images -->
				</div><!-- /.col-12 -->

			<?php endif; ?>

		</div><!-- /.row -->
	</div><!-- /.container -->
</section><!-- /.gallery element-paddings -->