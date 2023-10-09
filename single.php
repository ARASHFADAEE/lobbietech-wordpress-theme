<?php get_header()?>
    
    
    
    <div class="content-wrapper oh">
      <?php
    if (have_posts()):
              while(have_posts()):the_post();?>
      <!-- Page Title -->
      <section class="page-title blog-featured-img bg-color-overlay bg-color-overlay--1 text-center" style="background-image: url(<?php echo get_the_post_thumbnail_url()?>);">
        <div class="container">
          <div class="page-title__holder">
            <h1 class="page-title__title"><?php the_title();?></h1>
            <ul class="entry__meta">
              <li class="entry__meta-author">
                <a href="" class="entry__meta-author-url">
                  <img src="<?php get_template_directory_uri();?>/img/onwer/imgpostbloh.png" class="entry__meta-author-img" alt="">
                  <span><?php the_author_posts_link();?></span>
                </a>
              </li>
              <li class="entry__meta-date">
                <?php the_date()?>
              </li>
            </ul>
          </div>
        </div>
      </section> <!-- end page title -->

      <!-- Single Post -->
      <section class="section-wrap pt-40 pb-48">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="blog__content">
                <article class="entry mb-0">
                  <div class="entry__article-wrap">

                    <!-- Share -->
                    <div class="entry__share">
                      <div class="sticky-col">
                        <div class="socials socials--rounded socials--large">
                          <a class="social social-facebook" href="https://www.facebook.com/sharer.php?u=<?php the_permalink($post->ID)?>" title="facebook" target="_blank" aria-label="facebook">
                            <i class="ui-facebook"></i>
                          </a>
                          <a class="social social-twitter" href="https://twitter.com/intent/tweet?text=<?php the_excerpt() ?>&url=<?php the_permalink($post->ID)?>" title="twitter" target="_blank" aria-label="twitter">
                            <i class="ui-twitter"></i>
                          </a>
                          <a class="social social-google-plus" href="#" title="google" target="_blank" aria-label="google">
                            <i class="ui-google"></i>
                          </a>
                        </div>
                      </div>                  
                    </div> <!-- share -->

                    <div class="entry__article">
                      <ul class="entry__meta">
                        <li class="entry__meta-category">
                          <i class="ui-category"></i>
                          <a href="#"><?php the_category(',')?></a>
                        </li>
                        <li class="entry__meta-comments">
                          <i class="ui-comments"></i>
                          <a href="#"><?php echo get_comments_number( $post->ID )?></a>
                        </li>
                      </ul>

                      <?php the_content()?>


                      <!-- tags -->
                      <div class="entry__tags">
                        <i class="ui-tags"></i>
                        <span class="entry__tags-label">Tags:</span>
                        <?php the_tags('',',')?>

                      </div> <!-- end tags -->

                    </div> <!-- end entry article -->
                  </div> <!-- end entry article wrap -->
                </article>
                
                <section class="related-posts">
                  <h5 class="mb-24">You might also like</h5>
                  <div class="row row-16 card-row">
                    <?php 
                    $related= get_posts( array(
                      'category__id'=> wp_get_post_categories($post->ID),
                      'numberposts'=> 3,
                      'post__not_in'=> array($post->ID),

                    ) );

                    if($related) foreach($related as $post){
                      setup_postdata( $post );?>
                  
                    <div class="col-lg-4">
                      <article class="entry card card--small box-shadow hover-up">
                        <div class="entry__img-holder card__img-holder">
                          <a href="<?php the_permalink()?>">
                          <?php the_post_thumbnail()?>
                          </a>
                          <div class="entry__body card__body">
                            <h4 class="entry__title">
                              <a href="<?php the_permalink()?>"><?php the_title() ?></a>
                            </h4>
                          </div>
                        </div>
                      </article>
                    </div>

                    <?php 
                    }
                    wp_reset_postdata();
                    
                    ?>

                  </div>
                </section>
                
<?php comments_template() ?>





              </div>
            </div>
          </div>
        </div>
      </section> <!-- end single post -->

<?php

endwhile;
endif;

?>


      <!-- Newsletter -->
      <section class="section-wrap newsletter bg-color-overlay bg-color-overlay--2" style="background-image: url(img/newsletter/newsletter.jpg);">
        <div class="container">
          <div class="title-row title-row--boxed text-center">
            <h3 class="section-title">Our Daily Newsletter</h3>
            <p class="subtitle">Get the latest and our most important news</p>
          </div>
          <div class="widget widget_mc4wp_form_widget">
            <div class="newsletter__container">
              <div class="newsletter__form">
                <form class="mc4wp-form" method="post">
                  <div class="mc4wp-form-fields">
                    <div class="form-group">
                      <input type="email" name="EMAIL" placeholder="Your email" required="">
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn--lg btn--color" value="Subscribe Now">
                    </div>
                  </div>
                </form>
              </div> 
            </div>
          </div>
        </div>
      </section> <!-- end newsletter -->


      <!-- Footer -->
      <?php get_footer()?>
 <!-- end footer -->

</body>
</html>