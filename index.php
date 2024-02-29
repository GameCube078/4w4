<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Theme</title>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/normalize.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@100;400;600&display=swap" rel="stylesheet" />
    </head>
    <body>
        <div id="entete" class="global">
            <header class="entete__header">
                <h1>Thème WP</h1>
                <h2>4W4 - Conception d'interface et développement Web</h2>
                <h3>TIM-Collège Maisonneuve</h3>
                <a href="https://en.wikipedia.org/wiki/Watermelon">
                    <button> Ceci est un lien </button>
                </a>
            </header>
            <div class="vague">
                <svg
                    data-name="Layer 1"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 1200 120"
                    preserveAspectRatio="none"
                >
                    <path
                        d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                        style="fill: var(--couleur-arriere-accueil)"
                    ></path>
                </svg>
            </div>
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
            <div class="vague">
                <svg
                    data-name="Layer 1"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 1200 120"
                    preserveAspectRatio="none"
                >
                    <path
                        d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                        style="fill: var(--couleur-arriere-footer)"
                    ></path>
                </svg>
            </div>
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
