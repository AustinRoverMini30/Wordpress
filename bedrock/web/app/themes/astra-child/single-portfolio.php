<?php get_header(); ?>

    <div class="portfolio-single">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                echo '<h1>' . get_the_title() . '</h1>';
                echo '<div class="portfolio-content">' . get_the_content() . '</div>';

                echo '<p>Client : ' . get_field('client') . '</p>';
                echo '<p>Date de réalisation : ' . get_field('date_de_realisation') . '</p>';
                echo '<p><a href="' . get_field('lien_projet') . '">Voir le projet</a></p>';

                echo '<h2>Galerie d\'images</h2>';

                $galerie = get_field('gallerie');
                if ($galerie) {
                    echo '<div class="portfolio-gallery">';
                    foreach ($galerie as $image) {
                        echo '<img class="image-" src="' . $image['url'] . '" alt="' . $image['alt'] . '">';
                    }
                    echo '</div>';
                }
            endwhile;
        endif;
        ?>
    </div>

<?php get_footer(); ?>