<?php get_header(); ?>

<?php
if (has_post_thumbnail( $post->ID ) ){
  $image_src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
}
 ?>

<div id="header-page-single" class="text-white" style="background-image: url('<?php echo $image_src[0] ?>');">
  <div class="w-100 h-100">
    <h1 class="centered"> <?php the_title(); ?></h1>
  </div>

</div>

<div class="container">
  <?php

  if(have_posts()){

    //while(have_posts()){
      the_post();
  ?>
  <?php the_content(); ?>
  <?php
    //}
  }
   ?>
</div>

<?php get_footer(); ?>
