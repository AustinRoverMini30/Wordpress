<?php
get_header(); ?>

    <div class="portfolio-archive">
        <h1 class="portfolio-title">Mes réalisations</h1>
        <div class="portfolio-grid">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                            <h2 class="portfolio-item-title"><?php the_title(); ?></h2>
                        </a>
                <?php endwhile; endif; ?>
        </div>
    </div>

<?php get_footer();