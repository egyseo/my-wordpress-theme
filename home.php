<?php get_header(); ?>
<?php get_header('home'); ?>

<div class="container">
  <div class="row">
    <div class="col-md">
      <div style="height: 50px"></div>
      <h1><?php bloginfo(); ?></h1>
      <div style="height: 30px"></div>
      <h3>Cerca nel sito</h3>
      <?php get_search_form(); ?>
      <div style="height: 30px"></div>
    </div>
  </div>
  <?php if(is_active_sidebar('sidebar-1')) : ?><div class="row"><div class="col-lg-8"> <?php endif; ?>
  <div class="row">
    <div class="col">
      <h2>Gli ultimi articoli</h2>
      <hr>
    </div>
  </div>
  <div class="row">
    <div id="post" class="col">
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
  </div>
  <?php if(is_active_sidebar('sidebar-1')) : ?></div> <?php endif; ?>
  <?php if(is_active_sidebar('sidebar-1')) : ?>
    <div class="col-lg-4">
      <?php get_sidebar(); ?>
    </div>
  <?php endif; ?>
  <?php if(is_active_sidebar('sidebar-1')) : ?></div> <?php endif; ?>
</div>

<?php get_footer(); ?>
