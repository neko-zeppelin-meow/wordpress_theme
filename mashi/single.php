<?php get_header(); ?>

<main class="main">
    <div class="single-page">
        <?php while (have_posts()) : ?>
            <?php the_post(); ?>
            <div class="blog-title">
                <h1>
                    <?php the_title(); ?>
                </h1>
            </div>
            <div class="blog-time">
                <time class="article-date" datetime="<?php echo get_the_date(DATE_W3C); ?>">投稿日：<?php echo get_the_date(); ?></time>
            </div>
            <?php the_content(); ?>

        <?php endwhile; ?>
    </div>
    <div class="pagination">
        <span class="pre"><?php previous_post_link(); ?></span>
        <span class="next"><?php next_post_link(); ?></span>
    </div>
</main>

<?php get_footer(); ?>