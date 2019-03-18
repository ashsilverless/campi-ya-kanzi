<?php
    /*
        Template Name: Rates
    */
?>

<?php get_header(); ?>

<main id="main" class="rates-template-page" tabindex="-1">

	<?php get_template_part( 'partials/hello-section' ); ?>

	<?php if( have_rows('rates') ): ?>

		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="rates element-paddings">
						<div class="row">
							<div class="col-12 col-md-6 ml-md-auto">
								<h2 class="rates__title" data-aos="fade"><?php the_field( 'rates_title' ); ?></h2><!-- /.rates__title -->
							</div><!-- /.col-12 col-md-6 ml-md-auto -->
						</div><!-- /.row -->

						<?php $loop_counter = 1 ?>
						<?php while ( have_rows('rates') ) : the_row(); ?>

							<div class="rate<?php if( $loop_counter == 1) { echo ' rate--first';} ?>" data-aos="fade">
								<div class="row justify-content-end">
									<div class="col-md-4 md-ml-auto">
										<h2 class="rate__title text-md-right"><?php the_sub_field('rate_title'); ?></h2><!-- /.rate__title text-md-right -->
									</div><!-- /.col-md-4 md-ml-auto -->
									<div class="col-md-6">
										<div class="rate__content content">
											<?php the_sub_field('rate_content'); ?>
										</div><!-- /.rate__content content -->
									</div><!-- /.col-md-6 -->
								</div><!-- /.row justify-content-end -->
							</div><!-- /.rate -->

							<?php $loop_counter++ ?>
						<?php endwhile; ?>

					</div><!-- /.rates element-paddings -->
				</div><!-- /.col-12 -->
			</div><!-- /.row -->
		</div><!-- /.container -->

	<?php endif; ?>

	<?php get_template_part( 'partials/flexible-content' ); ?>

</main><!-- /#main.rates-template-page -->

<?php get_footer(); ?>