<!-- Her skal der tilføjes alt den HTML som skal være i header -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="assets/js/main.js" defer></script>
    <?php
        wp_head();
    ?>

</head>

<body>
<nav class="navbar">
            <div class="logo">
<a href="http://localhost/wordpress/"><img src="<?php bloginfo('template_directory');?>/assets/img/BjornConsultLogo.png" alt="BjornConsult" width=120wh height=40wh></a></div>
<a href="#" class="toggle-button">
  <span class="bar"></span>
  <span class="bar"></span>
  <span class="bar"></span>
</a>
<div class="navbar-links">
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
</ul>
        <!-- BRUGES OGSÅ TIL MOBIL MENU -->
<!-- <?php //wp_nav_menu( array( 'theme_location' => 'primary-res-navigation',
                          //'menu_class' => 'responsive-navigation' ) ); ?> -->

</div>
</nav>

<?php
    // For at tilføje logo og give den diameter
    if(function_exists('the_custom_logo')){
        the_custom_logo();
    }

?>
