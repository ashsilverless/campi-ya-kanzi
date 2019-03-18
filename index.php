
<?php get_header(); ?>
<section class="page container" id="main">

		<?php if ( have_posts() ) { ?>

			<div class="page__body js-infinite-container">

				<?php while ( have_posts() ) {

					the_post(); ?>

                    <article class="item aos-init aos-animate" data-aos="fade">

                        <header class="item__header">
                            <time class="item__date" datetime="<?php echo get_the_date( 'c' ); ?>"><?php echo get_the_date(); ?></time>
                            <h2 class="item__title">
                                <a class="item__link" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                            </h2>
                        </header>

                        <p class="item__body"><?php the_excerpt() ?></p>

                    </article> <!-- End .item -->
                    
                <?php } ?>

			</div> <!-- End .page__body -->

            <div class="page__buttons">
                <?php previous_posts_link( '< Newer posts' ); ?>
                <?php next_posts_link( 'Older posts >' ); ?>
            </div>

			<?php
			//get_template_part( 'partials/pagination' );
			//get_template_part( 'partials/loader', 'infinite' );
			?>

		<?php } ?>

	</section> <!-- End .page -->

<?php get_footer(); ?>