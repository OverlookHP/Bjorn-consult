<?php
    // Her skal der tilføjes classes for de forskellige linjer. 


    // Til thumbnail billede af blog posts sætter man bare src til the_post_thumbnail_url('thumbnail');

    // title class så en h2 eller h3 for at få titlen til at linke ind på siden lav man et a tag og sætter the_permalink(); til href
    the_title();
    // date class til den her så vi kan se hvornår bloggen er skrevet
    the_date();
    // Her skal der tilføjes html og css styling for at få det til at se rigtigt ud 
    the_excerpt();
    // read more class til denne
    the_permalink();
?>