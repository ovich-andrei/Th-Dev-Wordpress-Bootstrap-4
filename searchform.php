<form role="search" method="get" class="searchform wp-thdev-searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="text" class="s form-control" name="s" placeholder="<?php esc_attr_e( 'Search&hellip;', 'wp-thdev' ); ?>" value="<?php the_search_query(); ?>" >
</form>
