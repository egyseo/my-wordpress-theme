<?php get_header(); ?>

<?php
if ( 'posts' == get_option( 'show_on_front' ) ) {
	include( get_home_template() );
} else {
  get_header('home');
?>

  <div class="container">
    <div style="height: 50px"></div>
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

<?php
}
?>



<?php get_footer(); ?>
