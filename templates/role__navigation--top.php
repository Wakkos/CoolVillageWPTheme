<input type="checkbox" class="checkbox__hack" id="checkbox__hack">
<label for="checkbox__hack" class="checkbox-hack__label"></label>
<nav role="navigation" aria-labelledby="PageNavigation" class="nav" id="el">
    <?php wp_nav_menu (array (
                            'theme_location' => 'main-nav-menu',
                            'container' => 'false',
                            'menu_class' => 'nav__list'
                            )
                        );
    ?>
</nav>