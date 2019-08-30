<?php
if(!is_active_sidebar('sidebar-1'))
  return;

?>

<aside class="card">
  <div class="card-body">

<?php dynamic_sidebar('sidebar-1'); ?>

  </div>
</aside>
