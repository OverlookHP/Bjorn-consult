

<!-- Koden for header skal ind i header.php -->
<?php

    get_header();

?>

<!-- Hjem start -->
<section class="hjem" id="hjem">
        <div class="max-width">
            <div class="hjem-indhold">
  <div class="text-2">From Mind to Market</div>
  <div class="text-3">Healthy Sustainability for all</div>
  <a href="#" class="menuknap">Kontakt</a>
            </div>
        </div>
  </section>


    <!-- text video start -->

<div class="vidtextcontainer">
  
  <div class="grid-container">
    <div class="grid-item">
        <h1>Overskrift</h1>
        <br>
        <p>brodtekst</p>
        <br>
      <a href="#" class="menuknap">Læs Mere</a></div>

    <div class="grid-itemvideo"><video src='' controls></video></div>
  </div>
</div>

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

          <div class="grid-item2">
            <img src="<?php bloginfo('template_directory');?>./assets/img/Stock.jpeg" alt="Avatar" width="300" height="250">
          <div class="container6">
          <h4><b>overskrift</b></h4>
          <p>brødtekst</p>
          </div>
          </div>

          </div>


        </div>

        <!-- Logoer forside start -->

          <div class="logoerforsideoverskrift"><h1>Virksomheder vi har hjulpet</h1
            </div>




            <div class="grid-container3">

              <div class="grid-item3">
                <img src="<?php bloginfo('template_directory');?>./assets/img/logoicon.png" alt="Avatar" width="150" height="150">
              </div>

              <div class="grid-item3">
                <img src="<?php bloginfo('template_directory');?>./assets/img/logoicon.png" alt="Avatar" width="150" height="150">
              </div>

              <div class="grid-item3">
                <img src="<?php bloginfo('template_directory');?>./assets/img/logoicon.png" alt="Avatar" width="150" height="150">
              </div>

              <div class="grid-item3">
                <img src="<?php bloginfo('template_directory');?>./assets/img/logoicon.png" alt="Avatar" width="150" height="150">
              </div>

              </div>

              <div class="grid-container4">

                <div class="grid-item4">
                  <img src="<?php bloginfo('template_directory');?>./assets/img/logoicon.png" alt="Avatar" width="150" height="150">
                </div>

                <div class="grid-item4">
                  <img src="<?php bloginfo('template_directory');?>./assets/img/logoicon.png" alt="Avatar" width="150" height="150">
                </div>

                <div class="grid-item4">
                  <img src="<?php bloginfo('template_directory');?>./assets/img/logoicon.png" alt="Avatar" width="150" height="150">
                </div>

                </div>

                <div class="logoerforsidekundeudsagn"><p>"Indsæt quote fra kunde"</p>
                  </div>
                  <br>
                <div class="logoerforsidekundeudsagnperson"><p>- Tine rasmussen, CEO, Pepsi</p>
                    </div>

</body>
<!-- Indsæt HTML her for forsiden --> 

    <?php
        if ( have_posts() ){

            while( have_posts() ){

                the_post();
                the_content();
            }
            
        }


    ?>


<!-- Inde i footer.php ligger der slut tags til body og html så de behøver ikke være herinde -->

<?php
    
    get_footer();

?>


