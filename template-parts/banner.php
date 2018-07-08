  <?php
  wp_enqueue_style('flickity-css', get_template_directory_uri() . '/assets/flickity/flickity.min.css', array(), '2018-07-01', 'all');
  wp_enqueue_script( 'flickity-js', get_template_directory_uri() . '/assets/flickity/flickity.pkgd.min.js', array( 'jquery' ), '', true );
  $query = new WP_Query(
          array(
            'post_type' => 'banner'
            ));
  ?>
  <div class="container-fluid banner-wrap">
      <div class="row align-items-center justify-content-center text-center">
          <div class="main-carousel col-sm-12 col-md-9 mb-2">

            <?php if ( $query->have_posts() ) : ?>
              <?php
              while ( $query->have_posts() ) : $query->the_post();
                if (has_post_thumbnail()) {
                  $image = get_the_post_thumbnail_url();
                } else {
                  preg_match_all('/(((http:\/\/www)|(https?:\/\/)|(www)|)[-a-zA-Z0-9@:%_\+.~#?&\/\/=]+)\.(jpg|jpeg|gif|png|bmp|tiff|tga|svg)/i', get_the_content(), $matches);
                  if (isset($matches[0][0])) {
                    $image = $matches[0][0];
                  } else {
                    $image = 'https://wx4.sinaimg.cn/mw1024/005PPPsyly1fp4ltiuhmxj31kw23vu0x.jpg';
                  }
                }
                ?>
                  <a class="carousel-cell" style="height: 288px;width: 798px;background: url(<?php echo $image;?>) no-repeat center / cover;" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">

                  </a>

              <?php endwhile; ?>

              <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'foolish' ); ?></p>
            <?php endif; ?>
          </div>

        <?php if ( is_active_sidebar( 'ads-sidebar' ) ) : ?>
            <div class="ads-image col-sm-12 col-md-3">
              <?php dynamic_sidebar( 'ads-sidebar' ); ?>
            </div>
        <?php endif; ?>
      </div>
  </div>

  <script>
      (function ($) {
          $(function () {
              $('.main-carousel').flickity({
                  wrapAround: true,
                  contain: true,
                  freeScroll: false,
                  autoPlay: 5000,
                  prevNextButtons: false
              });
          })
      })(jQuery)
  </script>

  <style>
      .banner-wrap {
          margin-bottom: 20px;
      }
      .main-carousel {
          width: 798px;
      }
  </style>
