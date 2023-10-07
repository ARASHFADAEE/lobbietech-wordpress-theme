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
                <a href="<?php the_author_link()?>" class="entry__meta-author-url">
                  <img src="<?php get_template_directory_uri();?>/img/onwer/imgpostbloh.png" class="entry__meta-author-img" alt="">
                  <span><?php the_author();?></span>
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
                          <a class="social social-facebook" href="#" title="facebook" target="_blank" aria-label="facebook">
                            <i class="ui-facebook"></i>
                          </a>
                          <a class="social social-twitter" href="#" title="twitter" target="_blank" aria-label="twitter">
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
                    <div class="col-lg-4">
                      <article class="entry card card--small box-shadow hover-up">
                        <div class="entry__img-holder card__img-holder">
                          <a href="single-post.html">
                            <img src="img/blog/post_4.jpg" class="entry__img" alt="">
                          </a>
                          <div class="entry__body card__body">
                            <h4 class="entry__title">
                              <a href="single-post.html">Using Technology to Maximize Efficiency</a>
                            </h4>
                          </div>
                        </div>
                      </article>
                    </div>
                    <div class="col-lg-4">
                      <article class="entry card card--small box-shadow hover-up">
                        <div class="entry__img-holder card__img-holder">
                          <a href="single-post.html">
                            <img src="img/blog/post_5.jpg" class="entry__img" alt="">
                          </a>
                          <div class="entry__body card__body">
                            <h4 class="entry__title">
                              <a href="single-post.html">Offer an Outrageous or Daily Deal</a>
                            </h4>
                          </div>
                        </div>
                      </article>
                    </div>
                    <div class="col-lg-4">
                      <article class="entry card card--small box-shadow hover-up">
                        <div class="entry__img-holder card__img-holder">
                          <a href="single-post.html">
                            <img src="img/blog/post_6.jpg" class="entry__img" alt="">
                          </a>
                          <div class="entry__body card__body">
                            <h4 class="entry__title">
                              <a href="single-post.html">Investigate your Competition</a>
                            </h4>
                          </div>
                        </div>
                      </article>
                    </div>
                  </div>
                </section>
                

                <!-- Comments -->
                <div class="entry-comments">
                  <h5 class="section-title mb-24">3 comments</h5>
                  <ul class="comment-list">
                    <li class="comment">  
                      <div class="comment-body">
                        <div class="comment-avatar">
                          <img alt="" src="img/blog/comment_1.png">
                        </div>
                        <div class="comment-text">
                          <h6 class="comment-author">Joeby Ragpa</h6>
                          <div class="comment-metadata">
                            <a href="#" class="comment-date">July 17, 2017 at 12:48 pm</a>
                          </div>                      
                          <p>This template is so awesome. I didn’t expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars.</p>
                          <a href="#" class="comment-reply">Reply</a>
                        </div>
                      </div>

                      <ul class="children">
                        <li class="comment">
                          <div class="comment-body">
                            <div class="comment-avatar">
                              <img alt="" src="img/blog/comment_2.png">
                            </div>
                            <div class="comment-text">
                              <h6 class="comment-author">Alexander Samokhin</h6>
                              <div class="comment-metadata">
                                <a href="#" class="comment-date">July 17, 2017 at 12:48 pm</a>  
                              </div>                      
                              <p>This template is so awesome. I didn’t expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars.</p>
                              <a href="#" class="comment-reply">Reply</a>
                            </div>
                          </div>
                        </li> <!-- end reply comment -->
                      </ul>

                    </li> <!-- end 1-2 comment -->

                    <li>
                      <div class="comment-body">
                        <div class="comment-avatar">
                          <img alt="" src="img/blog/comment_3.png">
                        </div>
                        <div class="comment-text">
                          <h6 class="comment-author">Chris Root</h6>
                          <div class="comment-metadata">
                            <a href="#" class="comment-date">July 17, 2017 at 12:48 pm</a>  
                          </div>                      
                          <p>This template is so awesome. I didn’t expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars.</p>
                          <a href="#" class="comment-reply">Reply</a>
                        </div>
                      </div>
                    </li> <!-- end 3 comment -->

                  </ul>         
                </div> <!-- end comments -->

                <!-- Comment Form -->
                <div id="respond" class="comment-respond">
                  <h5 class="section-title mb-24">Leave your comment</h5>
                  <form id="form" class="comment-form" method="post" action="#">
                    <p class="comment-form-comment">
                      <label for="comment">Comment</label>
                      <textarea id="comment" name="comment" rows="6" required="required"></textarea>
                    </p>

                    <div class="row row-30">
                      <div class="col-lg-4">
                        <label for="name">Name: *</label>
                        <input name="name" id="name" type="text">
                      </div>
                      <div class="col-lg-4">
                        <label for="comment">Email: *</label>
                        <input name="email" id="email" type="email">
                      </div>
                      <div class="col-lg-4">
                        <label for="comment">Website:</label>
                        <input name="website" id="website" type="text">
                      </div>
                    </div>

                    <p class="comment-form-submit">
                      <input type="submit" class="btn btn--lg btn--color btn--button" value="Post Comment" id="submit-message">
                    </p>
                    
                  </form>
                </div> <!-- end comment form -->

                <!-- Prev / Next Post -->
                <nav class="entry-navigation">
                  <div class="row">
                    <div class="col-lg-6">
                      <a href="single-post.html" class="entry-navigation__url entry-navigation--left">
                        <img src="img/blog/prev_post.jpg" alt="" class="entry-navigation__img">
                        <div class="entry-navigation__body">
                          <i class="ui-arrow-left"></i>
                          <span class="entry-navigation__label">Previous Post</span>
                          <h6 class="entry-navigation__title">How to design your first mobile app</h6>
                        </div>
                      </a>
                    </div>
                    <div class="col-lg-6">
                      <a href="single-post.html" class="entry-navigation__url entry-navigation--right">
                        <div class="entry-navigation__body">
                          <span class="entry-navigation__label">Next Post</span>
                          <i class="ui-arrow-right"></i>
                          <h6 class="entry-navigation__title">How to design your first mobile app</h6>
                        </div>
                        <img src="img/blog/next_post.jpg" alt="" class="entry-navigation__img">
                      </a>
                    </div>
                  </div>                  
                </nav> 

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