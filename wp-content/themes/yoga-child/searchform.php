<form role="search" method="get" id="searchform" autocomplete="off" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <div class="input-group">
    <input type="search" class="form-control" placeholder="<?php echo esc_attr_x( 'Søg her', 'placeholder', 'yoga' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    <span class="input-group-btn btn-default">
    <button type="submit" class="btn"> <i class="fa fa-search"></i> </button>
    </span> </div>
</form>