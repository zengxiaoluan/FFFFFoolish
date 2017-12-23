
    <div id="hot-article" class="hot-article-wrap">
        <h3 class="articles">Hot Articles</h3>

        <?php 
            $query_args = array(
                'post_type' => 'hot-article',
                'post_count' => 4
            );
            $query = new WP_Query( $query_args );
         ?>

         <?php if ( $query->have_posts() ) : ?>
            <div class="container-fluid">
                <?php $i = 0; while ( $query->have_posts() ) : $query->the_post(); ?>

                    <?php if ($i % 2 == 0) : ?>
                        <div class="row hot-article-row">
                    <?php endif; ?>

                        <div class="col-sm">
                            <div class="hot-article-item">
                                <a title="<?php the_title('&#x1f408;', '&#x1f415;'); ?>" href="<?php the_permalink(); ?>">
                                    <h2 class="hot-article-title"><?php the_title('&#x1f408;', '&#x1f415;', true); ?></h2>
                                    <?php the_post_thumbnail(); ?>
                                </a>
                            </div>
                        </div>

                    <?php $i++; if ($i % 2 == 0 || $query->post_count == $i) : ?>
                        </div>
                    <?php endif; ?>

                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>
            </div>
         <?php else : ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'foolish' ); ?></p>
         <?php endif; ?>
    </div>

    <style>
        .hot-article-wrap, .hot-article-row {
            margin: 0 0 20px 0;
        }
        .hot-article-title {
            background: rgba(0, 0, 0, .3);
            width: 100%;
            margin: 0;
            padding: 5px;
            color: white;

            position: absolute;
            bottom: 0;
            left: 0;
        }
        .hot-article-item {
            height: 300px;
            overflow: hidden;
            position: relative;
        }
        .hot-article-item img{
            width: auto;
            height: 100%;
            
            display: block;
            margin: 0 auto;
        }
    </style>