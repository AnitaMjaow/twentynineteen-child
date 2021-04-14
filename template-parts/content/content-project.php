<?php
$projects = new WP_Query([
    'post_type' => 'projects',
    'posts_per_page' => 10,
]);
if ($projects->have_posts()) {
    ?>
    <!-- Loop -->
    <?php
        while ($projects->have_posts()) {
            $projects->the_post();
            ?>

          

        <!-- Foreach include template part -->
        <?php get_template_part('loop-templates/loop-project'); ?>


    <?php
        }
        // DON'T FORGET TO RESET POSTDATA!
        wp_reset_postdata();
        ?>
<?php
}

