<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ) ?>">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>

<body>
<?php get_header(); ?>

<div class="main-and-sidebar">
    <main>
        <?php if ( have_posts() ): ?>
            <?php while ( have_posts() ): the_post(); ?>
                <article class="post">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class="meta">Created By
                        <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>
                        on <?php the_time( 'F j, Y g:i a' ); ?>
                    </div>
                    <?php if ( has_post_thumbnail() ): ?>
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endif; ?>

                    <?php the_excerpt(); ?>

                    <br>

                    <a class="button" href="<?php the_permalink(); ?>">Read More</a>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <?php echo wpautop( 'Sorry, no posts were found' ) ?>
        <?php endif; ?>
    </main>
    <?php include "sidebar.php" ?>

</div>
<?php get_footer(); ?>
</body>
</html>
