<?php get_header(); ?>

<main class="main">
    <div class="articles">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
                <?php the_post(); ?>
                <article class="article">
                    <div class="article-info">
                        <h2 class="article-title"><?php the_title(); ?></h2>
                        <h3><time class="article-date" datetime="<?php echo get_the_date(DATE_W3C); ?>"><?php echo get_the_date(); ?></time></h3>
                        <?php the_excerpt(); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="article-link"></a>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p class="error">投稿がありやせん。</p>
        <?php endif; ?>
    </div>

    <div class="pagination">
        <span class="pre"><?php previous_posts_link(); ?></span>
        <span class="next"><?php next_posts_link(); ?></span>
    </div>

</main>

<?php get_footer(); ?>