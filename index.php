<?php get_header()?>
    <div class="content-wrapper oh">

      <!-- Page Title -->
      <section class="page-title text-center">
        <div class="container">
          <div class="page-title__holder">
            <h1 class="page-title__title">Blog</h1>
            <p class="page-title__subtitle">Recent news about marketing and SEO</p>
          </div>
        </div>
      </section> <!-- end page title -->

      <!-- Blog -->
      <section class="section-wrap bottom-divider">
        <div class="container">
          <div class="row card-row">
            <?php

            if (have_posts()):
              while(have_posts()):the_post();?>

            <div class="col-lg-4">
              <article class="entry card box-shadow hover-up">
                <div class="entry__img-holder card__img-holder">
                  <a href="<?php the_permalink()?>">
                    <?php the_post_thumbnail()?>
                  </a>
                  <div class="entry__date">
                    <span class="entry__date-day"><?php the_time('j')?></span>
                    <span class="entry__date-month"><?php the_time('F')?></span>
                  </div>
                  <div class="entry__body card__body">                    
                    <h4 class="entry__title">
                      <a href="<?php the_permalink()?>"><?php the_title()?></a>
                    </h4>
                    <ul class="entry__meta">
                      <li class="entry__meta-category">
                        <i class="ui-category"></i>
                        <a href="#"><?php the_category(',')?></a>
                      </li>
                      <li class="entry__meta-comments">
                        <i class="ui-comments"></i>
                        <a href="#"><?php echo get_comments_number( $post->ID )?> Comments</a>
                      </li>
                    </ul>                     
                    <div class="entry__excerpt">
                      <p><? the_excerpt()?></p>
                    </div>
                  </div>
                </div>
              </article>
            </div>
            <?php
      
    endwhile;
endif;
?>  




    </div>
          <?php
$pagination_args = array(
    'prev_text' => '<i class="ui-arrow-left"></i>',
    'next_text' => '<i class="ui-arrow-right"></i>',
    'mid_size'  => 3, // تعداد لینک‌های صفحه قبل و بعد از صفحه فعلی
);

$pagination_links = paginate_links($pagination_args);
if ($pagination_links) {
    echo '<nav class="pagination">';
    echo $pagination_links;
    echo '</nav>';
}
?>          <!-- Pagination -->
          <!-- <nav class="pagination">
            <span class="pagination__page pagination__page--current">1</span>
            <a href="#" class="pagination__page">2</a>
            <a href="#" class="pagination__page">3</a>
            <a href="#" class="pagination__page">4</a>
            <a href="#" class="pagination__page pagination__icon pagination__page--next"><i class="ui-arrow-right"></i></a>
          </nav> -->

        </div>
      </section> <!-- end blog -->


      <!-- Footer -->
<?php get_footer( )?>

  
</body>
</html>