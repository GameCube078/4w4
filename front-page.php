<?php get_header();?>

        <div id="entete" class="global clr-agencement-primaire">
            <header class="hero">
                <h1><?php echo get_bloginfo("name") ?></h1>
                <h2><?php echo get_bloginfo("description") ?></h2>
                <h3>Ceci est le plus magnifique site de voyage!</h3>
            </header>
            <?php get_template_part("gabarit/vague") ?>
        </div>
        <div id="acceuil" class="global">
            <section>
                <h2>Acceuil</h2>
                <div class="cours">
                <?php
                $args = array(
                    'orderby' => 'name',
                    'order' => 'ASC',
                    'hide_empty' => false,
                );

                $categories = get_categories($args);

                foreach ($categories as $category) {
                    echo '<div class="carte">';
                    echo '<h2>' . $category->name . '</h2>';
                    echo '<p>' . wp_trim_words($category->description, 10) . '...</p>'; // Les 10 premiers mots de la description
                    echo '<a href="' . get_category_link($category->term_id) . '">Voir plus</a>'; // Lien vers la liste de destination associée
                    echo '<p>Nombre d\'articles : ' . $category->count . '</p>'; // Nombre d'articles dans la catégorie
                    echo '</div>';
                }
                ?>
                </div>
                <div class="cours">
                
                <?php
                    /*if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            the_title('<h3>', '</h3>');
                            echo wp_trim_words(get_the_content(),30);
                        }
                    }      */
                    if(have_posts()):
                        while(have_posts()): the_post();?>
                        
                        <div class="carte">
                            <h3><?php substr(get_the_title(),0,7) ?></h3>
                            <h3><?php the_title();?></h3>
                            <p><?php echo wp_trim_words(get_the_content(),20);?></p>
                            <?php the_category() ?>
                            <a href="<?php  the_permalink()?>"> Article -></a>
                            </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        </div>
                        
                        
                
            </section>
        </div>
        <div id="evenement" class="global diagonal">
            <section>
                <h2>Évènement</h2>
                <p class="block-code">
                    Il n'y a pas d'évènement pour le moment parce que c'est un site de voyage et des évènements sur un site de voyage c'est pas très logique.
                </p>
            </section>
            
            </div>
        </div>
        <div id="galerie" class="global">
            <section>
                <h2>Galerie</h2>
                <div class="divButton">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/tophat.png" alt="hat">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/bowlerhat.png" alt="hat">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/cowboyhat.png" alt="hat">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/sunhat.png" alt="hat">
                </div>
                <div class="divButton">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/bowlerhat.png" alt="hat">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/cowboyhat.png" alt="hat">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/sunhat.png" alt="hat">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/tophat.png" alt="hat">
                </div>
                <div class="divButton">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/cowboyhat.png" alt="hat">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/sunhat.png" alt="hat">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/tophat.png" alt="hat">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/bowlerhat.png" alt="hat">
                </div>
            </section>
            <?php get_template_part("gabarit/vague") ?>
        </div>
        <?php get_footer();?>

