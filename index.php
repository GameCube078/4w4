<?php get_header();?>

        <div id="entete" class="global">
            <header class="hero">
                <h1>Thème WP</h1>
                <h2>4W4 - Conception d'interface et développement Web</h2>
                <h3>TIM-Collège Maisonneuve</h3>
                <a href="https://en.wikipedia.org/wiki/Watermelon">
                    <button> Ceci est un lien </button>
                </a>
            </header>
            <?php get_template_part("gabarit/vague") ?>
        </div>
        <div id="acceuil" class="global">
            <section>
                <h2>Acceuil</h2>
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
                    Code intéresant Code intéresant Code intéresant Code intéresant Code intéresant Code intéresant Code intéresant Code intéresant Code intéresant Code intéresant Code intéresant Code intéresant Code intéresant Code intéresant Code intéresant Code intéresant
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
                    <button> bouton 1 </button>
                    <button> bouton 2 </button>
                    <button> bouton 3 </button>
                </div>
            </section>
            <?php get_template_part("gabarit/vague") ?>
        </div>
        <div id="footer" class="global">
            <footer>
                <h2>Footer</h2>
                <p>Texte de footer fort intéresant</p>
                <p>poisson rouge de couleur bleu</p>
            </footer>
        </div>
    </body>
</html>
