<form id="search-form" class="form-inline my-2 my-lg-0" method="GET" action="<?php echo home_url( '/' ); ?>">
  <input class="form-control mr-sm-2" name="s" id="search" type="search" placeholder="Cerca" aria-label="Cerca" value="<?php the_search_query(); ?>">
  <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
</form>
