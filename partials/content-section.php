<div class="content-section element-padding-top <?php if ( is_page_template( array( 'templates/about.php', 'templates/accommodation.php' ) ) ) { echo 'content-section--with-image'; } ?>" data-aos="fade">
	<div class="container">
		<div class="row">

			<?php if ( is_page_template( 'templates/accommodation.php' ) ): ?>

				<?php $image = get_field('content_image'); ?>
				<?php if( !empty($image) ): ?>

					<div class="col-md-6">
						<img data-src="<?php echo $image['url']; ?>" src="<?php echo get_template_directory_uri(); ?>/images/img__empty.png" alt="<?php echo $image['alt']; ?>" class="content-section__image lazy d-block" />
					</div><!-- /.col-md-6 -->

				<?php endif; ?>

			<?php elseif ( is_page (375) ) : ?>

				<?php $image = get_field('content_image'); ?>
				<?php if( !empty($image) ): ?>

					<div class="col-md-6">
						<img data-src="<?php echo $image['url']; ?>" src="<?php echo get_template_directory_uri(); ?>/images/img__empty.png" alt="<?php echo $image['alt']; ?>" class="content-section__image lazy d-block" />
					</div><!-- /.col-md-6 -->

				<?php endif; ?>

			<?php endif; ?>

			<div class="col-md-6 ml-md-auto">
				<div class="content-section__content content">
					<?php the_content(); ?>
				</div><!-- /.content-section__content content -->
			</div><!-- /.col-md-6 ml-md-auto -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /.content-section element-padding-top -->