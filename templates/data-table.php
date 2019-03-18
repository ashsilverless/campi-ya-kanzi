<?php
    /*
        Template Name: Data Table
    */
?>

<?php get_header(); ?>

<main id="main" class="contact-template-page" tabindex="-1">

	<?php get_template_part( 'partials/hello-section' ); ?>

	<div class="contact-details element-paddings">
		<div class="container">
			<div class="row">
				<div class="col-md-12 ml-md-auto" style="text-align:center;">
					<h2 id="contactTitle" class="contact-details__title" data-aos="fade"><?php the_title();?></h2>
				</div><!-- /.col-md-6 ml-md-auto -->
			</div><!-- /.row -->
			<div class="row">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post(); ?>
		<div class="col-md-12 ml-md-auto">
		<?php the_content(); ?>
		</div><!-- /.col-md-12 ml-md-auto -->
		<?php endwhile;?>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- /.contact-details element-paddings -->

</main><!-- /#main.contact-template-page -->
<div style="display:none" class="fancybox-hidden">
<div id="availability_form_pop">
<?php echo do_shortcode('[gravityform id=3 title="false" description="false" ajax="true"]'); ?>
</div>
</div>
<?php get_footer('with-gallery'); ?>

<script type="text/javascript">
	jQuery(document).ready(function($){
	
	$('.post-password-form input[type=submit]').addClass('post-password-submit');
	$('.post-password-form input[type=submit]').after("<p>Don't have a password? Please sign up <a href='#availability_form_pop' class='fancybox popuplink'>here</a></p>");
	   
	$("td:contains('Y')").each(function () {
	$(this).text(" ");
	$(this).addClass('available'); 
	});
	$("td:contains('N')").each(function () { 
	  $(this).text(" ");
	  $(this).addClass('booked'); 
	}); 
   
   
   
   
	$(".wpdatatable").slice(0, 2).addClass('display');
	
	$("#loadMore").on('click', function (e) {
		e.preventDefault();
		$(".wpdatatable:hidden").slice(0, 2).addClass('display');
		if ($(".wpdatatable:hidden").length == 0) {
		   $("#loadMore").fadeOut('slow');
		}
		$('.wpdatatable').animate({
		 scrollTop: $(this).offset().top
		}, 1000);
	});

   });
   </script>