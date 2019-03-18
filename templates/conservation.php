<?php
    /*
        Template Name: Conservation
    */
?>

<?php get_header(); ?>

<main id="main" class="conservation-template-page" tabindex="-1">

	<?php get_template_part( 'partials/hello-section' ); ?>
	<?php get_template_part( 'partials/content-collapsed-section' ); ?>

	<div class="small-info element-paddings">
    	<div class="container">
    		<div class="row">
    			<div class="col-12">

    				<?php
    				$args = array(
    				    'post_parent' => $post->ID,
    				    'post_type' => 'page',
    				    'orderby' => 'menu_order'
    				); ?>

    				<?php $child_query = new WP_Query( $args ); ?>

    				<?php $loop_counter = 1; ?>
    				<?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>

        				<section class="small-info-section<?php if( $loop_counter == 1) { echo ' small-info-section--first';} ?>" data-aos="fade">
        					<div class="row">
        						<div class="col-md-6">
                                    <div class="small-info-section__image-wrapper" data-mh="match-height-small-info-section">
                                        <div class="small-info-section__image-wrapper__image background-cover lazy" data-src="<?php if ( has_post_thumbnail($pageChild->ID, 'full') ) { echo get_the_post_thumbnail_url(); } else { echo get_template_directory_uri().'/assets/images/img__featured-image-placeholder.jpg';}?>"></div><!-- /.small-info-section__image-wrapper__image background-cover lazy -->
                                    </div><!-- /.small-info-section__image-wrapper -->
        						</div><!-- /.col-md-6 -->
        						<div class="col-md-6">
        							<div class="small-info-section__content-wrapper" data-mh="match-height-small-info-section">
        								<h3 class="small-info-section__content-wrapper__title"><?php echo get_the_title($pageChild->ID); ?></h3>
	        							<div class="small-info-section__content-wrapper__content content element-small-margin-top">
	        								<?php echo get_the_excerpt($pageChild->ID); ?>

                                            <?php $icon = get_field('conservation_icon'); ?>
	        								<a href="<?php echo get_permalink($pageChild->ID); ?>" class="campi-ya-kanzi-button campi-ya-kanzi-button__bordered-box campi-ya-kanzi-button__with-arrow campi-ya-kanzi-button__with-arrow--primary-color campi-ya-kanzi-button__with-arrow--cross">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/icon__arrow--primary-color.svg" alt="Icon Arrow" class="arrow svg"/>
                                                <img src="<?php echo $icon['url']; ?>" alt="Icon <?php the_field('color'); ?>" class="icon svg" />
                                                Find out more
                                            </a>
	        							</div><!-- /.small-info-section__content content element-small-margin-top -->
        							</div><!-- /.small-info-section__content-wrapper -->
        						</div><!-- /.col-md-6 -->
        					</div><!-- /.row -->
        				</section><!-- /.small-info-section small-info-section-first -->

					   <?php $loop_counter++; ?>
        			<?php endwhile; ?>

        			<?php wp_reset_postdata(); ?>

    			</div><!-- /.col-12 -->
    		</div><!-- /.row -->
    	</div><!-- /.container -->
	</div><!-- /.small-info element-paddings -->

</main><!-- /#main.conservation-template-page -->

<?php get_footer(); ?>