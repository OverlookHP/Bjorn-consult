<?php
/* Template Name: Blog_post */
get_header();
?>

<section class="blogpostff">
  <!-- <main class="grid-parent"> -->
    <section class="main-content">
        <div class="blog-text">
            <?php the_content();?>
        </div>
      </section>


  </section>



  <!-- forside blog start -->
    <div class="forsideblog">

    <div class="blogsektiontekst"><h1>Hold dig opdateret</h1>

      <div class="mest_nylige_opslag"><p>Mest nylige opslag</p>
      </div>
      <div class="se_alle_opslag"><p>Se Alle Opslag ></p>
      </div>
    </div>
    <br>
    <hr class="new4">
  <div class="grid-container2">

    <div class="grid-item2">
      <img src="<?php bloginfo('template_directory');?>/assets/img/Stock.jpeg" alt="Avatar" width="300" height="250">
    <div class="container6">
    <h4><b>overskrift</b></h4>
    <p>brødtekst</p>
    </div>
    </div>

    <div class="grid-item2">
      <img src="<?php bloginfo('template_directory');?>./assets/img/Stock.jpeg" alt="Avatar" width="300" height="250">
    <div class="container6">
    <h4><b>overskrift</b></h4>
    <p>brødtekst</p>
    </div>
    </div>

    <div class="grid-item2">
      <img src="<?php bloginfo('template_directory');?>./assets/img/Stock.jpeg" alt="Avatar" width="300" height="250">
    <div class="container6">
    <h4><b>overskrift</b></h4>
    <p>brødtekst</p>
    </div>
    </div>

    </div>


  </div>


</body>


<?php
get_footer();
?>
