<form id="demo-2" role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input type="search" placeholder="Digite a pesquisa" value="<?php echo get_search_query(); ?>" name="s" id="s" />
        <input type="hidden" value="blog" name="post_type" id="post_type" />
</form>
