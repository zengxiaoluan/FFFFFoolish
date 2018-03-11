<?php get_header(); ?>
			
    <div id="content" class="wrap clearfix">

            <div id="main" class="eightcol first clearfix" role="main">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

                        <header class="article-header">
                            <h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
                            <p class="text-center pb-2 pt-2">
                              <?php
                                printf(__('%1$s', 'foolish'), serena_get_the_author_posts_link());
                              ?>
                                <span class="mr-5">
                                    <span class="oi oi-tags"></span>
                                    <?php echo get_the_category_list(' | ');?>
                                </span>
                                <?php foolish_get_post_date();?>
                            </p>


                        </header> <!-- end article header -->

                        <section>
                            <?php the_post_thumbnail( 'post-thumbnail', '' ); ?>
                        </section>

                        <section class="entry-content clearfix" itemprop="articleBody">
                            <?php the_content(); ?>
                        </section> <!-- end article section -->

                        <footer class="article-footer">
                            <?php wp_link_pages(); ?>
                            <?php the_tags('<p class="tags"><span class="tags-title">' . __('Tags:', 'serena') . '</span> ', ', ', '</p>'); ?>
                            <div class="post-link">
                                <?php
                                    previous_post_link('%link', 'prev');
                                    next_post_link('%link', 'next');
                                ?>
                            </div>
                        </footer> <!-- end article footer -->

                        <?php comments_template(); ?>

                    </article> <!-- end article -->

                <?php endwhile; ?>

                <?php else : ?>

                    <article id="post-not-found" class="hentry clearfix">
                        <header class="article-header">
                            <h1><?php _e("Article Missing", "serena"); ?></h1>
                        </header>
                        <section class="entry-content">
                            <p><?php _e("Sorry, but something is missing. Please try again!", "serena"); ?></p>
                        </section>
                        <footer class="article-footer">
                            <p><?php _e("This is the error message in the single.php template.", "serena"); ?></p>
                        </footer>
                    </article>

                <?php endif; ?>

            </div> <!-- end #main -->

            <?php get_sidebar(); ?>

        </div> <!-- end #content -->

<?php get_footer(); ?>
