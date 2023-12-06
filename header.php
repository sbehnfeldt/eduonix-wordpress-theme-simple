<html <?php
language_attributes(); ?>>
<head>
    <meta charset="<?php
    bloginfo( 'charset' ); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php
    bloginfo( 'stylesheet_url' ) ?>">
    <title><?php
        bloginfo( 'name' ); ?></title>
    <?php
    wp_head(); ?>
</head>

<body>
<header>
    <div class="container">
        <h1><?php
            bloginfo( 'name' ); ?></h1>
        <span><?php
            bloginfo( 'description' ); ?></span>
    </div>
</header>
<nav class="main-nav">
    <div class="container">
        <?php wp_nav_menu( [
            'theme_location' => 'primary'
        ] ) ?>

    </div>
</nav>
