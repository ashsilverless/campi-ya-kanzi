<?php
    /*
        Template Name: Accommodation 2nd Level
    */
?>

<?php get_header(); ?>

<main id="main" class="accommodation-template-page" tabindex="-1">

	<?php get_template_part( 'partials/hello-section' ); ?>
	<?php get_template_part( 'partials/content-collapsed-section' ); ?>

	<div class="big-info element-padding-top">

        <?php if ( have_rows( 'accommodation_type' ) ) : ?>

            <?php $loop_counter = 1; ?>
            <?php while ( have_rows( 'accommodation_type' ) ) : the_row(); ?>

                <section class="big-info-section<?php if( $loop_counter == 1) { echo ' big-info-section--first';} ?>" data-aos="fade">
                    <div class="container">
                        <div class="row">

                            <?php $images = get_sub_field('accommodation_type_images'); ?>
                            <?php if( $images ): ?>

                                <div class="col-lg-6">
                                    <div class="big-info-section__carousel owl-carousel owl-theme" data-mh="match-height-big-info-section">

                                        <?php foreach( $images as $image ): ?>

                                            <div class="big-info-section__carousel__image background-cover lazy" data-src="<?php echo $image['url']; ?>"></div><!-- /.big-info-section__carousel__image background-cover lazy -->

                                        <?php endforeach; ?>

                                    </div><!-- /.big-info-section__carousel owl-carousel owl-theme -->
                                </div><!-- /.col-lg-6 -->

                            <?php endif; ?>

                            <div class="col-lg-6">
                                <div class="big-info-section__content-wrapper">
                                    <h2 class="big-info-section__title"><?php the_sub_field( 'accommodation_type_title' ); ?></h2><!-- /.big-info-section__title -->
                                    <div class="row">
                                        <div class="col-md-7 order-2 order-md-1">
                                            <div class="big-info-section__content content" data-mh="match-height-big-info-section">
                                                <?php the_sub_field('accommodation_type_content_left'); ?>
                                                <a href="<?php the_sub_field('accommodation_type_book_now_url'); ?>" class="campi-ya-kanzi-button campi-ya-kanzi-button__bordered-box campi-ya-kanzi-button__with-arrow campi-ya-kanzi-button__with-arrow--primary-color campi-ya-kanzi-button__with-arrow--cross">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon__arrow--primary-color.svg" alt="Icon Arrow" class="arrow svg"/>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon__tent.svg" alt="Icon Tent" class="icon svg" />
                                                    Book Now
                                                </a>
                                            </div><!-- /.big-info-section__content content -->
                                        </div><!-- /.col-md-7 order-2 order-md-1 -->
                                        <div class="col-md-5 order-1 order-md-2 ml-md-auto">
                                            <div class="big-info-section__content content">
                                                <?php the_sub_field('accommodation_type_content_right'); ?>
                                            </div><!-- /.big-info-section__content content -->
                                        </div><!-- /.col-md-5 order-1 order-md-2 ml-md-auto -->
                                    </div><!-- /.row -->
                                </div><!-- /.big-info-section__content-wrapper -->
                            </div><!-- /.col-lg-6 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </section><!-- /.big-info-section big-info-section-first -->

                <?php $loop_counter++; ?>
            <?php endwhile; ?>

        <?php endif; ?>

    </div><!-- /.big-info element-padding-top -->

    <?php get_template_part( 'partials/gallery-section' ); ?>

</main><!-- /#main.accommodation-template-page -->

<?php get_footer(); ?>