<?php get_header();?>

        
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
        <div id="galerie" class="global">
            <section>
                <h2>Galerie</h2>
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
