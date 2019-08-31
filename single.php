<?php get_header(); ?>

<?php
if(have_posts()){
  the_post();
  if (has_post_thumbnail( $post->ID ) ){
    $image_src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
  }
?>

<div id="header-page-single" class="text-white" style="background-image: url('<?php echo $image_src[0] ?>');">
  <div class="w-100 h-100">
    <h1 class="centered"> <?php the_title(); ?></h1>
  </div>
</div>
<div style="height: 50px"></div>
<div class="container">
  <?php
  the_content();
  the_tags('<div class="tag-single">#','</div><div class="tag-single">#' , '</div>');
  ?>
  <div style="height: 50px"></div>
  <nav aria-label="Page navigation example">
   <ul class="pagination">
     <li class="page-item"><?php previous_post_link('%link', '<< Post Precedente'); ?></li>
     <li class="page-item"><?php next_post_link('%link', 'Post Successivo >>'); ?></li>
   </ul>
 </nav>

  <?php
  comments_template();
  ?>


</div>

<?php
}
?>

<?php get_footer(); ?>
