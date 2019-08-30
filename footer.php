
      <footer>
        <div id="footer" class="container-fluid">
          <!--<div class="row">
              <?php
              /*wp_nav_menu(
                array(
                  'theme_location' => 'bottom-menu',
                  'menu_class' => ''
                )
              );*/
               ?>

          </div>-->
          <div id="footer-sidebar" class="secondary">
            <div class="row">

                <?php
                if(is_active_sidebar('footer-sidebar-1')){
                ?>
                <div class="col-md">
                  <div id="footer-sidebar1">
                <?php
                dynamic_sidebar('footer-sidebar-1');
                ?>
                  </div>
                </div>
                <?php
                }
                ?>

                <?php
                if(is_active_sidebar('footer-sidebar-2')){
                ?>
                <div class="col-md">
                  <div id="footer-sidebar2">
                <?php
                dynamic_sidebar('footer-sidebar-2');
                ?>
                  </div>
                </div>
                <?php
                }
                ?>

                <?php
                if(is_active_sidebar('footer-sidebar-3')){
                ?>
                <div class="col-md">
                  <div id="footer-sidebar3">
                <?php
                dynamic_sidebar('footer-sidebar-3');
                ?>
                  </div>
                </div>
                <?php
                }
                ?>

            </div>
          </div>
        </div>
      </footer>

    <?php wp_footer(); ?>
  </body>
</html>
