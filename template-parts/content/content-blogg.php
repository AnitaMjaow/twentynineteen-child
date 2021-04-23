<?php

 // The Query
 query_posts( array ( 'category_name' => 'bloggs', 'posts_per_page' => -1 ) );

 // The Loop
while ( have_posts() ) : the_post(); ?>
        <?php get_template_part('loop-templates/loop-blogg'); ?>

 <?php endwhile;

 // Reset Query
 wp_reset_query();

 ?>