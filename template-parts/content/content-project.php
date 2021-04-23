<?php

 // The Query
 query_posts( array ( 'post_type' => 'projects', 'posts_per_page' => -1 ) );

 // The Loop
while ( have_posts() ) : the_post(); ?>
        <?php get_template_part('loop-templates/loop-project'); ?>

 <?php endwhile;

 // Reset Query
 wp_reset_query();

 ?>