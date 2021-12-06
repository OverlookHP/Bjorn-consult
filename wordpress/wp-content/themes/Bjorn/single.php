

<!-- Koden for header skal ind i header.php -->
<?php

    get_header();

?>


<!-- Indsæt HTML her for forsiden --> 

    <?php
        if ( have_posts() ){

            while( have_posts() ){

                the_post();
                
                get_template_part('template-parts/content', 'article');
            }
            
        }


    ?>


<!-- Inde i footer.php ligger der slut tags til body og html så de behøver ikke være herinde -->

<?php
    
    get_footer();

?>


