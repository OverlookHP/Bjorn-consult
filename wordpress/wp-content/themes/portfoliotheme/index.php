<?php
    get_headers();
?>
    <h1>Title Test</h1>
    <h2>Title Test</h2>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.<br>
         Ipsam maxime aliquam perspiciatis aliquid vitae, tempore iusto. <br> 
         Perferendis ipsa repellendus in quam veritatis qui commodi suscipit minus,<br> 
          facilis voluptatum dignissimos id.</p>

<?php

    wp_nav_menu();



    // The post loop 
    if ( have_posts()) {
        echo "<hr>";
            while (have_posts()){
                    the_post(); ?>
                    <!-- Post title on site with link to Post -->
                    <h1><a href="<?php the_permalink();?>"> <?php the_title(); echo "<br>"; ?></a> </h1>

                    <?php
                    // Post Author
                    the_author(); echo "<br>";
                    // Post Content here
                    the_content();

                    echo "<hr>";
            }   //end while
    }   //end if

?>

    

</body>

</html>



