<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <?php wp_head(); ?>

    <style type="text/css">
      #header-widget-area h1{
        color: <?php echo"#".get_theme_mod( 'header_textcolor' ); ?>;
      }
      #header-widget-area p{
        color: <?php echo get_theme_mod( 'my-custom-theme_headertext_color', '#ffffff' ); ?>;
      }
    </style>
  </head>
  <body <?php body_class(); ?>>

      <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top" role="navigation">
        <div class="container">
            <a class="navbar-brand" href="<?php echo get_site_url() ?>"><img src="<?php echo get_site_icon_url(); ?>" width="40px" height="40px"> <?php bloginfo('name') ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
          		<span class="navbar-toggler-icon"></span>
          	</button>
            <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
              <?php
              wp_nav_menu(
                array(
                  'theme_location'  => 'top-menu',
                  'depth'           => 2,
                  'container'       => false,
                  //'container'       => 'div'
                  //'container_class' => 'collapse navbar-collapse',
                  //'container_id'    => '',
                  'menu_class'      => 'navbar-nav mr-auto',
                  'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                  'walker'          => new WP_Bootstrap_Navwalker(),
                )
              );
              get_search_form();
               ?>
            </div>

        </div>
      </nav>
