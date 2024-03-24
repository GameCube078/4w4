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
                            <?php the_category() ?>
                            <a href="<?php  the_permalink()?>"> Article -></a>
                            </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        </div>
                        
                        
                
            </section>
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

