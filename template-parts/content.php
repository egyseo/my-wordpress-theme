<article id="post-<?php the_id(); ?>" <?php post_class(); ?>>


<div class="card post-wrap m-auto text-left">
<div class="row">
  <div class="col-md-4">
    <?php echo get_the_post_thumbnail() ?>
  </div>
  <div class="col-md-5">
    <div style="height: 50px"></div>
    <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
    <p><?php the_excerpt() ?></p>
    <span class="cat-links badge-light badge badge-pill"><?php the_category(' '); ?></span>
    <div style="height: 50px"></div>
  </div>
  <div class="col-md-3">
    <div class="text-center">
      <a href="<?php the_permalink(); ?>" class="btn">Continua <i class="fas fa-chevron-right"></i></a>
    </div>
  </div>
</div>
</div>

</article>
