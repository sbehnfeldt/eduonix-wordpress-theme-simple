<header>
    <div class="title">
        <h1><?php bloginfo( 'name' ); ?></h1>
        <span><?php bloginfo( 'description' ); ?></span>
    </div>

    <nav class="main-nav">
        <?php wp_nav_menu( [
            'theme_location' => 'primary'
        ] ) ?>
    </nav>

</header>
