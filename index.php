<?php

get_header();

// The loop

if ( have_posts() ) : while ( have_posts() ) : the_post();
    ?>

      <div class="row featurette">
        <div class="col-md-7">
    <!-- Display the Title as a link to the Post's permalink. -->
	<h2 class="featurette-heading"><?php the_title(); ?></h2>
	
    <?php
    the_content();
    ?>
		</div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/img/placeholder.jpg" alt="Generic placeholder image">
        </div>
      </div>
      <hr class="featurette-divider">
<?php
endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;



get_sidebar();

get_footer();

?>
