<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?>

<div class="col-lg-4 mb-2" >
   <img class="card-img-top" src="<?php echo the_post_thumbnail_url(); ?>" alt="Card image cap">
  <div class="card-body">
    <h4>📝 
          <?php
    the_title(
        sprintf('<a href="%s" rel="bookmark">', esc_url(get_permalink())),
        '</a>'
    ); ?>
</h4>
      <?php the_excerpt()?>

<div class="entry-meta">
  <?php twentynineteen_posted_by(); ?>
  <?php twentynineteen_posted_on(); ?>
  </div>
  </div>


</div>