<ul class="social-icons list-unstyled d-flex justify-content-center justify-content-md-start">

  	<?php if ( get_field( 'twitter', 'options' ) ): ?>

	  	<li class="social-icons__item">
			<a href="<?php the_field( 'twitter', 'options' ); ?>" class="social-icons__item__social-icon d-flex align-items-center justify-content-center twitter" target="_blank" rel="nofollow">
				<i class="fa fa-twitter"></i>
			</a>
	    </li><!-- .social-icons__item -->

    <?php endif; ?>

    <?php if ( get_field( 'youtube', 'options' ) ): ?>

	  	<li class="social-icons__item">
			<a href="<?php the_field( 'youtube', 'options' ); ?>" class="social-icons__item__social-icon d-flex align-items-center justify-content-center youtube" target="_blank" rel="nofollow">
				<i class="fa fa-youtube"></i>
			</a>
	    </li><!-- .social-icons__item -->

    <?php endif; ?>

    <?php if ( get_field( 'pinterest', 'options' ) ): ?>

	  	<li class="social-icons__item">
			<a href="<?php the_field( 'pinterest', 'options' ); ?>" class="social-icons__item__social-icon d-flex align-items-center justify-content-center pintertest" target="_blank" rel="nofollow">
				<i class="fa fa-pinterest"></i>
			</a>
	    </li><!-- .social-icons__item -->

    <?php endif; ?>

    <?php if ( get_field( 'facebook', 'options' ) ): ?>

	  	<li class="social-icons__item">
			<a href="<?php the_field( 'facebook', 'options' ); ?>" class="social-icons__item__social-icon d-flex align-items-center justify-content-center facebook" target="_blank" rel="nofollow">
				<i class="fa fa-facebook"></i>
			</a>
	    </li><!-- .social-icons__item -->

    <?php endif; ?>

    <?php if ( get_field( 'instagram', 'options' ) ): ?>

	  	<li class="social-icons__item">
			<a href="<?php the_field( 'instagram', 'options' ); ?>" class="social-icons__item__social-icon d-flex align-items-center justify-content-center instagram" target="_blank" rel="nofollow">
				<i class="fa fa-instagram"></i>
			</a>
	    </li><!-- .social-icons__item -->

    <?php endif; ?>

    <?php if ( get_field( 'google', 'options' ) ): ?>

	  	<li class="social-icons__item">
			<a href="<?php the_field( 'google', 'options' ); ?>" class="social-icons__item__social-icon d-flex align-items-center justify-content-center google" target="_blank" rel="nofollow">
				<i class="fa fa-google"></i>
			</a>
	    </li><!-- .social-icons__item -->

    <?php endif; ?>

    <?php if ( get_field( 'linkedin', 'options' ) ): ?>

	  	<li class="social-icons__item">
			<a href="<?php the_field( 'linkedin', 'options' ); ?>" class="social-icons__item__social-icon d-flex align-items-center justify-content-center linkedin" target="_blank" rel="nofollow">
				<i class="fa fa-linkedin"></i>
			</a>
	    </li><!-- .social-icons__item -->

    <?php endif; ?>

    <?php if ( get_field( 'rss', 'options' ) ): ?>

	  	<li class="social-icons__item">
			<a href="<?php the_field( 'rss', 'options' ); ?>" class="social-icons__item__social-icon d-flex align-items-center justify-content-center rss" target="_blank" rel="nofollow">
				<i class="fa fa-rss"></i>
			</a>
	    </li><!-- .social-icons__item -->

    <?php endif; ?>

</ul><!-- .social-icons list-unstyled d-flex justify-content-center justify-content-md-start -->