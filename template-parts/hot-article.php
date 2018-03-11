
<div id="hot-article" class="hot-article-wrap">
    <h3 class="border-bottom pt-2 pb-2">Hot Articles</h3>

    <?php 
        $query_args = array(
            // 'post_type' => 'hot-article',
            'posts_per_page' => 5,
            'orderby'   => 'meta_value_num',
            'meta_key'  => 'views'
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
                            <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
                                <h2 class="hot-article-title">
                                    <?php
                                        the_title('', ' | ');
                                        the_views();
                                    ?>
                                </h2>
                                <?php 
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

                                    echo '<div style="height: 100%;background: url(' . $image . ') no-repeat center / cover;"></div>';

                                    unset($image);

                                ?>
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
        z-index: 1;

        transform: translateY(100%);
        transition: all .2s ease-in-out;
    }
    .hot-article-item:hover .hot-article-title {
        transform: translateY(0);
    }
    .hot-article-item {
        height: 300px;
        overflow: hidden;
        position: relative;
        margin-bottom: 1em;
    }
</style>