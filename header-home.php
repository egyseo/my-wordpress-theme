
<div id="header" class="container-fluid" style="background-image: url('<?php header_image() ?>')">
<div class="bg-opacity-dark"></div>
    <div class="container">
      <div class="row">
        <div class="col-md">
          <?php

  if ( is_active_sidebar( 'custom-header-widget' ) ) : ?>
      <div id="header-widget-area" class="chw-widget-area widget-area" role="complementary">
      <?php dynamic_sidebar( 'custom-header-widget' ); ?>
      </div>

  <?php endif; ?>
        </div>
      </div>
    </div>

</div>
