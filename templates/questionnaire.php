<?php
    /*
        Template Name: Blank Template
    */
?>

<?php get_header(); ?>

<main id="main" class="blank-template-page" tabindex="-1">

	<h1 class="hide"><?php the_title(); ?></h1>


		<div class="container">
			
			<?php the_content();?>
			
		</div><!-- /.container-fluid -->



</main><!-- /#main.gallery-template-page -->



<?php get_footer(); ?>