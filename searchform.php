<form class="search-form" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>">
    <input class="search-input" type="text" placholder="Поиск" value="<?php echo get_search_query() ?>" name="s"
        id="s" />
    <button class="search-button" type="submit" id="searchsubmit"></button>
</form>