<!-- Her skal der tilføjes alt den HTML som skal være i header -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
        wp_head();
    ?>

</head>

<body>
<nav class="navbar">
        <div class="max-width">
            <div class="logo">
<a href="http://localhost/wordpress/"><img src="<?php bloginfo('template_directory');?>./assets/img/BjornConsultLogo.png" alt="BjornConsult" width=120wh height=40wh></a></div>

<ul class="menu">
<?php

    wp_nav_menu(

        array(
            'theme_location' => 'top-menu',
            'menu_id' => 'main-menu',
            'container' => 'ul',
            'menu_class' => 'main-menu font-moutainsre',
        )
        );
?>

<!-- SLET MENU -->

<!-- <li><a href="#Hjem" class="menu-btn">Hjem</a></li>
<li><a href="#Om-Os" class="menu-btn">Om Os</a></li>
<li><a href="#Ydelser" class="menu-btn">Ydelser</a></li>
<li><a href="#Blog" class="menu-btn">Blog</a></li>
<li><a href="#" class="menuknap">Kontakt</a></li> -->

</ul>


</div>
</nav>

<?php
    // For at tilføje logo og give den diameter
    if(function_exists('the_custom_logo')){
        // Nem løsning
        the_custom_logo();

        // Hvis der er problemer med den anden metode
        // $custom_logo_id = get_theme_mod('custom_logo');
        // $logo = wp_get_attachment_image_sec($custom_logo_id);


    }


    // wp_nav_menu(
    //     array(
    //         'menu' => 'primary',
    //         'container' => '',
    //         'theme_location' => 'primary'
    //         // brug den id og class som der bruges i html her under. SKAL OGSÅ TILFØJES INDE I WP
    //         // 'items_wrap' => '<ul id="" class="">%3$s</ul>'
    //     )
    // );

?>
