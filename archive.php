<?php get_header(); ?>
<div style="height: 50px"></div>
<div class="container">
  <div class="container" id="post">

    <?php
    if(have_posts()){
      while(have_posts()){
        the_post();

        get_template_part('template-parts/content', get_post_format());

        //the_category('<span></span>');

      }
    }

    ?>
    <nav aria-label="Page navigation example">
     <ul class="pagination">
       <li class="page-item"><?php previous_posts_link(); ?></li>
       <li class="page-item"><?php next_posts_link(); ?></li>
     </ul>
   </nav>
  </div>
</div>
<div style="height: 50px"></div>
<?php get_footer(); ?>
