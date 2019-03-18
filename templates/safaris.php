<?php
    /*
        Template Name: Safaris
    */
?>

<?php get_header(); ?>

<main id="main" class="safaris-template-page" tabindex="-1">

	<?php get_template_part( 'partials/hello-section' ); ?>
	<?php get_template_part( 'partials/content-collapsed-section' ); ?>

	<?php
	$args = array(
	    'post_parent' => $post->ID,
	    'post_type' => 'page',
	    'orderby' => 'menu_order'
	); ?>

	<?php $child_query = new WP_Query( $args ); ?>

		<div class="link-boxes element-paddings d-flex flex-wrap">

			<?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>

			<a href="<?php echo get_permalink($pageChild->ID); ?>" class="link-boxes__single-link d-flex flex-wrap align-content-center align-items-center justify-content-center background-cover text-center lazy" data-src="<?php if ( has_post_thumbnail() ) { echo get_the_post_thumbnail_url(); } else { echo get_template_directory_uri().'/assets/images/img__featured-image-placeholder.jpg';}?>" data-aos="fade">
				<h2 class="link-boxes__single-link__label"><?php the_title(); ?></h2>
				<img src="<?php echo get_template_directory_uri(); ?>/images/icon__arrow--primary-color.svg" alt="arrow" class="link-boxes__single-link__arrow svg"/>
			</a>

			<?php endwhile; ?>

		</div><!-- /.link-boxes element-paddings d-flex flex-wrap -->

	<?php wp_reset_postdata(); ?>


</main><!-- /#main.safaris-template-page -->

<?php get_footer(); ?>