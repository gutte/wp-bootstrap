<?php
/*
Template Name: Flatview Subpages
*/

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
            <p>&nbsp;</p>
            <div class="flatview-menu">
            <?php
            list_subpages_menu($post->ID);
            ?>
            </div>
		</div>
		<?php if (has_post_thumbnail()) {
			?><div class="col-md-5"><?php 
				echo the_post_thumbnail('large', array('class' => 'featurette-image img-responsive center-block'));
			?></div>
			<?php }?>
      </div>
      <hr class="featurette-divider"/>
<?php
endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;

    // query subpages
    ?>


    <?php
    list_subpages_flatview($post->ID);
    ?>

    <?php
    


get_sidebar();

get_footer();


function list_subpages_menu($postid) {
    // query subpages
    if ($children = query_subpages($postid)) {
        // create menu of subpages
        ?>
        <ul>
        <?php foreach ($children as $child) { ?>
            <li><a href="#<?php echo $child->post_name;?>"><?php echo $child->post_title;?></a><?php
            list_subpages_menu($child->ID);
            ?></li>
        <?php } ?>
        </ul>
    <?php
    }
}

function list_subpages_flatview($postid) {
    // query subpages
    if ($children = query_subpages($postid)) {
        // create menu of subpages
        ?>
        <?php foreach ($children as $child) { ?>
            <h3><a name="<?php echo $child->post_name;?>"><?php echo $child->post_title;?></a></h3>
            <?php echo $child->post_content; ?>
            <hr class="featurette-divider"/>
            <?php
            list_subpages_flatview($child->ID);
            ?>
        <?php } ?>
        </ul>
    <?php
    }
}

?>
