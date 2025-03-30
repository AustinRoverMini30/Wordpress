<?php
get_header(); ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <div class="content">

        <!-- Présentation personnelle -->
        <section id="about-me">
            <h2>Qui suis-je ?</h2>
            <div class="box-inligne" id="me">
                <div id="presentation">
                    <img src="app/uploads/2025/03/20241018_181736.jpg" alt="Photo de Nicolas Champy" id="pp">
                </div>
                <div>
                    <p>Je suis <strong>Nicolas Champy</strong>, étudiant en <strong>2ème année de BUT Informatique</strong> à l'IUT de Laval.</p>
                    <p>Curieux et rigoureux, j'aime explorer les défis techniques et développer des solutions créatives et efficaces.</p>
                    <p>Pour en savoir plus sur mes compétences et mes réalisations, n'hésitez pas à explorer les différentes pages de ce portfolio.</p>
                </div>
            </div>
        </section>

        <!-- Titre principal -->
        <section id="competences">
            <h1>Mes Compétences</h1>
        </section>

        <!-- Compétences en développement web -->
        <section class="skills-section">
            <h2><i class="fas fa-globe"></i> Développement Web</h2>
            <div class="skills-grid">
                <div class="skill-item">
                    <i class="fab fa-html5"></i>
                    <p>HTML</p>
                </div>
                <div class="skill-item">
                    <i class="fab fa-css3-alt"></i>
                    <p>CSS</p>
                </div>
                <div class="skill-item">
                    <i class="fab fa-php"></i>
                    <p>PHP</p>
                </div>
                <div class="skill-item">
                    <i class="fab fa-js"></i>
                    <p>JavaScript</p>
                </div>
            </div>
        </section>

        <!-- Compétences en programmation -->
        <section class="skills-section">
            <h2><i class="fas fa-code"></i> Programmation</h2>
            <div class="skills-grid">
                <div class="skill-item">
                    <i class="fab fa-python"></i>
                    <p>Python</p>
                </div>
                <div class="skill-item">
                    <i class="fab fa-java"></i>
                    <p>Java</p>
                </div>
                <div class="skill-item">
                    <i class="fas fa-terminal"></i>
                    <p>Bash</p>
                </div>
                <div class="skill-item">
                    <i class="fas fa-database"></i>
                    <p>PL/SQL</p>
                </div>
                <div class="skill-item">
                    <i class="fas fa-c"></i>
                    <p>C / C++ / C#</p>
                </div>
            </div>
        </section>

        <!-- Environnements et outils -->
        <section class="skills-section">
            <h2><i class="fas fa-laptop-code"></i> Environnements et Outils</h2>
            <div class="skills-grid">
                <div class="skill-item">
                    <i class="fas fa-code"></i>
                    <p>VS Code</p>
                </div>
                <div class="skill-item">
                    <i class="fas fa-project-diagram"></i>
                    <p>GANTT & PERT</p>
                </div>
                <div class="skill-item">
                    <i class="fab fa-git-alt"></i>
                    <p>Git / GitHub</p>
                </div>
                <div class="skill-item">
                    <i class="fas fa-draw-polygon"></i>
                    <p>Figma</p>
                </div>
                <div class="skill-item">
                    <i class="fas fa-sitemap"></i>
                    <p>UML</p>
                </div>
            </div>
        </section>

        <!-- Derniers projets -->

        <section>
            <h2><i class="fas fa-laptop-code"></i>Mes derniers projets</h2>
            <?php
            $args = [
                'post_type' => 'portfolio',
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'DESC',
            ];
            $query = new WP_Query($args);
            if ($query->have_posts()) : ?>
                <div class="portfolio-grid">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <article>
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="image du projet">
                                <h3><?php the_title(); ?></h3>
                            </a>
                        </article>
                    <?php endwhile; ?>
                </div>
            <?php else : ?>
                <p>Aucune réalisation récente trouvée.</p>
            <?php endif; wp_reset_postdata(); ?>

            <a href="/portfolio/"><h3>Voir tout mes projets</h3></a>

        </section>

        <!-- Hobbies et centres d'intérêt -->
        <section id="hobbies">
            <h2>Mes Centres d'Intérêt</h2>

            <!-- Véhicules de collection -->
            <div class="hobby-item">
                <h3><i class="fas fa-car"></i> Véhicules de collection</h3>
                <div class="box-inligne">
                    <img src="app/uploads/2025/03/20240430_204552.jpg" alt="Austin MINI">
                    <p>
                        Malgré une logique passion pour l'informatique, je ne peux me présenter sans évoquer
                        ma passion pour les véhicules de collection.
                        Je suis ainsi l'heureux propriétaire d'une Austin MINI édition 30ème anniversaire,
                        un modèle particulièrement rare limité à 3000 exemplaires, sorti en 1989. Outre cette
                        passion qu'elle nourrit en moi, elle me rappelle aussi chaque jour qu'un travail de
                        qualité repose parfois sur des bases anciennes, mais solides, à toute épreuve.

                        Elle est aujourd'hui devenue une véritable muse et se trouve toujours une place au sein de
                        mes projets, qu'ils soient personnels ou professionnels. En témoigne le badge de MINI, qui peuple
                        bon nombre de mes projets informatiques, ou bien encore le nom de code "MINI Picture", qui est devenu
                        ma marque de fabrique.
                    </p>
                </div>
            </div>

            <!-- Exploration spatiale -->
            <div class="hobby-item">
                <h3><i class="fas fa-satellite"></i> Exploration spatiale robotisée</h3>
                <div class="box-inligne">
                    <img src="app/uploads/2025/03/Philae.jpg" alt="Philae">
                    <img src="app/uploads/2025/03/Genny.jpg" alt="Ingenuity">
                    <img src="app/uploads/2025/03/Voyager.jpg" alt="Voyager">
                    <p>Depuis mon plus jeune âge, j'ai toujours été passionné par le secteur spatial, et plus particulièrement par son exploration robotisée. Tout a commencé
                        avec <strong>Curiosity</strong>, le rover de la NASA, qui a atterri sur Mars en 2012. Depuis, je suis toujours l'exploration de son successeur <strong>Perseverance</strong>,
                        qui a atterri en 2021, avec un petit démonstrateur de vol nommé <strong>Ingenuity</strong>. En parallèle, je me suis passionné pour les missions passées. <strong>Opportunity</strong>,
                        <strong>Spirit</strong>, ou bien encore les sondes <strong>Voyager</strong> et <strong>Pioneer</strong>, qui ont toutes révolutionner notre vision du monde et de l'univers. Grâce aux innovations dont elles ont profité, elles ont pu inspirer des
                        générations, comme la mienne, à repousser sans cesse ses limites pour aller toujours plus loin.</p>
                </div>
            </div>

            <!-- LEGO de collection -->
            <div class="hobby-item">
                <h3><i class="fas fa-puzzle-piece"></i> LEGO de collection</h3>
                <div class="box-inligne">
                    <img src="app/uploads/2025/03/LEGO1.jpg" alt="LEGO Collection 1">
                    <img src="app/uploads/2025/03/LEGO2.jpg" alt="LEGO Collection 2">
                    <img src="app/uploads/2025/03/LEGO3.jpg" alt="LEGO Collection 3">
                    <p>Je suis aussi un grand amateur de LEGO, et plus particulièrement de LEGO de collection. C'est un travail de précision, de patience, et de rigueur, qui procure
                        ensuite une grande satisfaction. Voir cet ensemble de pièces inutiles en l'état, se métamorphoser entre mes mains en d'incroyables constructions, est l'un
                        de mes plus grands plaisirs. Je fais la comparaison avec l'informatique, qui, de la même manière, construit un incroyable produit, en assemblant de petits éléments de
                        code.</p>
                </div>
            </div>

            <!-- Jeux et romans d'aventure -->
            <div class="hobby-item">
                <h3><i class="fas fa-gamepad"></i> Jeux et romans d'aventure</h3>
                <div class="box-inligne">
                    <img src="app/uploads/2025/03/Lost%20Ember.jpg" alt="Lost Ember">
                    <img src="app/uploads/2025/03/Farewell%20North.jpg" alt="Farewell North">
                    <img src="app/uploads/2025/03/oscar.jpg" alt="Syberia">
                    <p>Enfin, j'aime vivre des aventures. Si je suis un grand amateur de romans d'aventures, et que j'en rédige un moi-même, je joue aussi à des jeux d'aventures. La licence <strong>Syberia</strong>
                        est ainsi ma préférée, aux côtés de jeux indépendants comme <strong>Lost Ember</strong> ou <strong>Farewell North</strong>. Ces jeux, à la direction artistique incroyable, me racontent des histoires qui
                        m'inspirent, et me donnent envie de créer à mon tour des histoires, des univers, et des personnages. Ils m'aident à développer toujours un peu plus ma créativité, et dans
                        une certaine mesure, m'inspirent dans mes projets tuteurés et personnels, en informatique.</p>
                </div>
            </div>
        </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<?php get_footer();
