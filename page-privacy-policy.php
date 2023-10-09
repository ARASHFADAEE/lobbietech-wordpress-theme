<?php get_header()?>

    <div class="content-wrapper oh">

      <!-- Page Title -->
      <section class="page-title text-center">
        <div class="container">
          <div class="page-title__holder">
            <h1 class="page-title__title">Privacy Policy</h1>
            <p class="page-title__subtitle">Last Updated: July 28, 2018</p>
          </div>
        </div>
      </section> <!-- end page title -->


      <!-- Privacy Policy -->
      <section class="section-wrap">
        <div class="container">
          <div class="row justify-content-center">

            <div class="col-lg-8">
              <div class="entry__article">
                <?php if (have_posts()):?>

                 <?php while(have_posts()):the_post();?>

                 <?php the_content()?>





                 <?php
                endwhile;
              endif;
                 
                 ?>
                
               
              </div>                    
            </div>
          </div>
        </div>
      </section> <!-- end privacy policy -->

  
      <!-- CTA -->
      <div class="call-to-action text-center">
        <div class="call-to-action__container">
          <h3 class="call-to-action__title">
            Get, keep and grow more customers. We’re here to help.
          </h3>
          <a href="#" class="btn btn--lg btn--color">
            <span>Let’s Work Together</span>
          </a>
        </div>                
      </div> <!-- end cta -->      

      <!-- Footer -->
<?php get_footer()?>



</body>
</html>