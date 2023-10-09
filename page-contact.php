<?php ?>
      <!-- Page Title -->
      <section class="page-title text-center">
        <div class="container">
          <div class="page-title__holder">
            <h1 class="page-title__title">Contact</h1>
            <p class="page-title__subtitle">Let’s have a discussion</p>
          </div>
        </div>
      </section> <!-- end page title -->

      <!-- Contact -->
      <section class="section-wrap">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="contact box-shadow-large offset-top-171">
                <ul class="contact__items">
                  <li class="contact__item">
                    <address>Melbourne's GPO 350 Bourke St. Melbourne VIC 3000, Australia</address>
                  </li>
                  <li class="contact__item">
                    <span class="contact__item-label">Phone: </span>
                    <a href="tel:+1-800-1554-456-123">+ 1 (800) 155 4561</a>
                  </li>
                  <li class="contact__item">
                    <span class="contact__item-label">Email: </span>
                    <a href="mailto:themesupport@gmail.com">themesupport@gmail.com</a>
                  </li>
                </ul>    

                <!-- Contact Form -->
                <form id="contact-form" class="contact-form mt-30 mb-30" method="post" action="#">
                  <div class="row row-30">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="name">Name <abbr title="required" class="required">*</abbr></label>
                        <input name="name" id="name" type="text">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="email">Email <abbr title="required" class="required">*</abbr></label>
                        <input name="email" id="email" type="email">
                      </div>
                    </div>
                  </div>
                  
                  <div class="contact-message">
                    <label for="message">Message <abbr title="required" class="required">*</abbr></label>
                    <textarea id="message" name="message" rows="7" required="required"></textarea>
                  </div>

                  <input type="submit" class="btn btn--lg btn--color btn--wide btn--button" value="Send Message" id="submit-message">
                  <div id="msg" class="message"></div>
                </form>
              </div>
            </div>            
          </div>
        </div>
      </section> <!-- end contact -->


      <!-- Google Map -->
      <div id="google-map" class="gmap" data-address="V Tytana St, Manila, Philippines"></div>



      <!-- Footer -->
      <footer class="footer">
        <div class="container">
          <div class="footer__widgets">
            <div class="row">

              <div class="col-lg-3 col-md-6">
                <div class="widget widget-about-us">
                  <!-- Logo -->
                  <a href="index.html" class="logo-container flex-child">
                    <img class="logo" src="img/logo.png" srcset="img/logo.png 1x, img/logo@2x.png 2x" alt="logo">
                  </a>
                  <p class="mt-24 mb-32">Tools to Effectively Build Your Brand and Grow Your Business.</p>
                  <div class="socials">
                    <a href="#" class="social social-twitter" aria-label="twitter" title="twitter" target="_blank"><i class="ui-twitter"></i></a>
                    <a href="#" class="social social-facebook" aria-label="facebook" title="facebook" target="_blank"><i class="ui-facebook"></i></a>
                    <a href="#" class="social social-google-plus" aria-label="google plus" title="google plus" target="_blank"><i class="ui-google"></i></a>
                  </div>
                </div>
              </div> <!-- end about us -->


              <div class="col-lg-2 offset-lg-3 col-md-6">
                <div class="widget widget_nav_menu">
                  <h5 class="widget-title">Resources</h5>
                  <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                  </ul>
                </div>
              </div>

              <div class="col-lg-2 col-md-6">
                <div class="widget widget_nav_menu">
                  <h5 class="widget-title">Solutions</h5>
                  <ul>                  
                    <li><a href="#">Marketing Strategy</a></li>
                    <li><a href="#">Advertising</a></li>
                    <li><a href="#">SMM</a></li>
                    <li><a href="#">SEO</a></li>
                    <li><a href="#">Google AdWords</a></li>
                  </ul>
                </div>
              </div>

              <div class="col-lg-2 col-md-6">
                <div class="widget widget-address">
                  <h5 class="widget-title">Company</h5>
                  <ul>
                    <li><address>8910 University Center Lane Suite 620 San Diego, CA 92102</address></li>
                    <li>
                      <span>Phone: </span>
                      <a href="tel:+1-800-1554-456-123">+ 1 (800) 155 4561</a>
                    </li>
                    <li>
                      <span>Email: </span>
                      <a href="mailto:hi@margin.com">hi@margin.com</a>
                    </li>
                  </ul>
                </div>
              </div>           

            </div>
          </div>    
        </div> <!-- end container -->

        <div class="footer__bottom top-divider">
          <div class="container text-center">
            <span class="copyright">
              &copy; 2018 Margin, Made by <a href="https://deothemes.com">DeoThemes</a>
            </span>
          </div>
        </div> <!-- end footer bottom -->
      </footer> <!-- end footer -->

      <div id="back-to-top">
        <a href="#top"><i class="ui-arrow-up"></i></a>
      </div>

    </div> <!-- end content wrapper -->
  </main> <!-- end main wrapper -->
  

  <!-- jQuery Scripts -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/plugins.js"></script>
  <!-- 
    1. Generate your key here - https://developers.google.com/maps/documentation/javascript/get-api-key
    2. Paste your key in the script below.
  -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoQ3_zzRfW-hYspkwr5kvwCwLPGZsN4nw"></script>
  <script src="js/gmap3.min.js"></script>
  <script src="js/google-map.js"></script>
  <script src="js/scripts.js"></script>

  <!-- Cookies -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
  <script src="js/cookies.js"></script>
    
</body>
</html>