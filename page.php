<?php get_header(); ?>
    <div class="container clearfix">
        <main>
            <?php if ( have_posts() ): ?>
                <?php while ( have_posts() ): the_post(); ?>
                    <article class="post">
                        <h3><?php the_title(); ?></h3>
                        <?php if ( has_post_thumbnail() ): ?>
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        <?php endif; ?>

                        <?php the_content(); ?>

                        <br>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <?php echo wpautop( 'Sorry, no posts were found' ) ?>
            <?php endif; ?>
        </main>

<?php get_footer(); ?>