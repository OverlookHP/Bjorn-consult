<?php 
/* Template Name: Kontakt */
get_header();
?>  

<body>


    <!-- Hjem start -->

<section class="blogpostf">
<div class="tekstintro">
  <h1>Kontakt Os Her</h1>

</div>

  <div class="inner contact">
                  <div class="contact-form">
                      <form id="contact-us" method="post" action="https://formsubmit.co/jonas98@live.dk" method="POST">
                      <input type="text" name="_honey" style="display: none;">
                      <input type="hidden" name="_captcha" value="false">
                      <input type="hidden" name="_next" value="http://contacttest.inessenceofcones.com/kontaktpagesendt.html">
                          <!-- Venstre Inputs -->
                          <div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
                              <input type="text" name="Navn" id="Navn" required="required" class="form" placeholder="Navn" />
                              <input type="Email" name="Email" id="Email" required="required" class="form" placeholder="Email" />
                              <input type="text" name="Tlf" id="subject" class="form" placeholder="Mobil Nr" />
                          </div>
                          <!-- Højre Inputs -->
                          <div class="col-xs-6 wow animated slideInRight" data-wow-delay=".5s">
                          <textarea name="Besked" id="Besked" class="form textarea"  placeholder="Besked"></textarea>
                          </div>
                          <div class="relative fullwidth col-xs-12">
                                 <button type="submit" id="submit" class="form-btn semibold">Send besked</button>
                          </div>
                          <div class="clear"></div>
                      </form>

                  

                  </div><!-- End Contact Form Area -->
              </div><!-- End Inner -->

</section>


</div>







</body>

<?php get_footer(); ?> 