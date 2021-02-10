<form id="searchform" method="get" action="<?php echo esc_url(home_url('/')); ?>">
  <input type="text" class="a-search" name="s" placeholder="Search" value="<?php echo get_search_query(); ?>" autocomplete="off">
</form>