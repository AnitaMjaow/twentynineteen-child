
<?php
 
// The Query
$bloggs = new WP_Query( array( 'category__in' => 1 ) );
 
// The Loop
if ( $bloggs->have_posts() ) {
    echo '';
    while ( $bloggs->have_posts() ) {
        $bloggs->the_post();
        ?>

        <!-- Foreach include template part -->
        <?php get_template_part('loop-templates/loop-blogg'); ?>


    <?php
        }
        // DON'T FORGET TO RESET POSTDATA!
        wp_reset_postdata();
        ?>
<?php
}

