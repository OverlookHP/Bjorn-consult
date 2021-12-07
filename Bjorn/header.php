<!-- Her skal der tilføjes alt den HTML som skal være i header -->
<!DOCTYPE html5> 
<html lang="en">
<head>
    <!-- vi fjerner title tag for at WP selv giver siden en title -->


<?php
    // For at tilføje logo og give den diameter
    if(function_exists('the_custom_logo')){
        // Nem løsning
        the_custom_logo();

        // Hvis der er problemer med den anden metode
        // $custom_logo_id = get_theme_mod('custom_logo');
        // $logo = wp_get_attachment_image_sec($custom_logo_id);
        

    }


    wp_nav_menu(
        array(
            'menu' => 'primary',
            'container' => '',
            'theme_location' => 'primary'
            // brug den id og class som der bruges i html her under. SKAL OGSÅ TILFØJES INDE I WP 
            // 'items_wrap' => '<ul id="" class="">%3$s</ul>'
        )
    );

?>






<?php

    wp_head();

?>