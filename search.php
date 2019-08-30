<?php get_header(); ?>

<div id="search-page" class="container text-center">
  <h3 class="search-title">La ricerca per <em><u><?php the_search_query(); ?></u></em> ha prodotto...</h3>

  <?php

  if(have_posts()){
    while(have_posts()){
      the_post();

      get_template_part('template-parts/content', get_post_format());


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

<?php get_footer(); ?>
