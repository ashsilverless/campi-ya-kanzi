<?php $image = get_field('cta_background', 'option'); ?>

<div class="footer-wrapper">
	<footer class="main-footer">
		<div class="footer-cta background-cover parallax-window" data-parallax="scroll" data-image-src="<?php echo $image['url']; ?>" data-position-y="-200px" data-speed="0.5">
			<div class="container">

				<?php if( have_rows('main_button', 'option') ): ?>
	        		<?php while( have_rows('main_button', 'option') ): the_row(); ?>

						<div class="row">
							<div class="col-12 col-md-10 col-lg-8 col-xl-6 ml-md-auto">
								<a href="<?php the_sub_field('page_link'); ?>" class="footer-cta__make-reservation d-block" data-aos="fade">
									<h2 class="footer-cta__make-reservation__title"><?php the_sub_field('title_label'); ?></h2><!-- /.footer-cta__make-reservation__title -->
									<span class="footer-cta__make-reservation__subtitle d-inline-block">
										<?php the_sub_field('label'); ?>
										<img src="<?php echo get_template_directory_uri() ?>/images/icon__arrow--primary-color.svg" alt="Icon Arrow" class="footer-cta__make-reservation__subtitle__icon" />
									</span>
								</a>
							</div><!-- /.col-12 col-md-10 col-lg-8 col-xl-6 ml-md-auto -->
						</div><!-- /.row -->


					<?php endwhile; ?>
				<?php endif; ?>

				<?php if( have_rows('secondary_button', 'option') ): ?>
	        		<?php while( have_rows('secondary_button', 'option') ): the_row(); ?>

						<div class="row">
							<div class="col-12 col-lg-10 col-xl-8 ml-lg-auto mr-lg-auto">
								<a href="<?php the_sub_field('secondary_button_page_link'); ?>" class="footer-cta__sit-here d-block d-sm-inline-block">
									<?php the_sub_field('secondary_button_label'); ?>
								</a>
							</div><!-- /.col-12 col-lg-10 col-xl-8 ml-lg-auto mr-lg-auto -->
						</div><!-- /.row -->

					<?php endwhile; ?>
				<?php endif; ?>

			</div><!-- /.container -->
		</div><!-- /.footer-cta -->
		<div class="footer-navigation">
			<div class="container">
				<div class="row align-items-center justify-content-center justify-content-lg-between">
					<div class="col-12 col-md-auto">
						<?php get_template_part( 'partials/social-icons' ); ?>
					</div><!-- /.col-12 col-md-auto -->
					<div class="col-12 col-md-auto">
						<?php
						    wp_nav_menu([
						        'menu'            => 'Main Footer Navigation',
						        'theme_location'  => 'main_footer_navigation',
						        'menu_class'      => 'text-center footer-navigation__menu d-md-flex list-unstyled element-small-margin-top',
						        'items_wrap' 	  => '<ul id="%1$s" class="%2$s">%3$s<li class="website-by">Website by<a href="http://www.silverless.co.uk/">&nbsp;Silverless</a></li></ul>'
						    ]);
						?>
					</div><!-- /.col-12 col-md-auto -->
				</div><!-- /.row align-items-center justify-content-center justify-content-lg-between -->
			</div><!-- /.container -->
		</div><!-- /.footer-navigation -->
	</footer><!-- /.main-footer -->
</div><!-- /.footer-wrapper -->
