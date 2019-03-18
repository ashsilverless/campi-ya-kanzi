<?php $image = get_field('gallery_introduction_background', 'options'); ?>

<section class="gallery-introduction background-cover element-paddings lazy" data-src="<?php echo $image['url']; ?>" data-aos="fade">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 ml-md-auto">
				<h2 class="gallery-introduction__title text-uppercase" data-aos="fade"><?php the_field('gallery_introduction_title', 'options'); ?></h2><!-- /.gallery-introduction__title text-uppercase -->

				<?php if( have_rows('gallery_introduction_category', 'options') ): ?>

					<ul class="gallery-introduction__categories list-unstyled list-inline" data-aos="fade">

						<?php while( have_rows('gallery_introduction_category', 'options') ): the_row(); ?>

							<li class="list-inline-item gallery-introduction__categories__item"><?php the_sub_field('category'); ?></li><!-- /.list-inline-item gallery-introduction__categories__item -->

						<?php endwhile; ?>

					</ul><!-- /.gallery-introduction__categories list-unstyled list-inline -->

				<?php endif; ?>

				<?php if( have_rows('button_wrapper', 'options') ): ?>
	        		<?php while( have_rows('button_wrapper', 'options') ): the_row(); ?>

						<a href="<?php the_sub_field( 'page_link' ); ?>" class="campi-ya-kanzi-button campi-ya-kanzi-button__with-arrow campi-ya-kanzi-button__with-arrow--primary-color" data-aos="fade">
							<img src="<?php echo get_template_directory_uri(); ?>/images/icon__arrow--primary-color.svg" alt="Icon Arrow" class="arrow svg"/>
							<?php the_sub_field('label'); ?>
						</a>

					<?php endwhile; ?>
				<?php endif; ?>

			</div><!-- /.col-12 col-md-6 ml-md-auto -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</section><!-- /.gallery-introduction background-cover element-paddings lazy -->