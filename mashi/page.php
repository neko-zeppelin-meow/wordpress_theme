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

            <?php the_content(); ?>

        <?php endwhile; ?>
    </div>

</main>

<?php get_footer(); ?>