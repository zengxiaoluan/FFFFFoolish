<?php get_header(); ?>
			
	<div class="wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9 p-0">
                    <div id="main" class="first clearfix" role="main">

                      <?php get_template_part('template-parts/banner'); ?>

                      <?php get_template_part('template-parts/hot-article'); ?>

                      <?php get_template_part('template-parts/cold-article'); ?>

                        <div class="container-fluid">
                            <div class="col-md">
                                <h3 class="text-info">All Articles</h3>
                              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                                  <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

                                      <header class="article-header">

                                          <h1 class="entry-title single-title" itemprop="headline"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                                          <p class="author text-center text-secondary m-3">
                                            <?php
                                            serena_get_the_author_posts_link();
                                            foolish_get_post_date();
                                            ?>
                                              <span>
								        <?php printf(__( '%1$s', 'foolish' ), the_views()); ?>
							        </span>
                                          </p>

                                      </header>

                                      <section class="entry-content clearfix">
                                        <?php the_excerpt(); ?>
                                      </section>

                                  </article>

                              <?php endwhile; ?>
                            </div>
                        </div>

                          <nav class="wp-prev-next">
                              <ul>
                                  <li class="prev-link"><?php next_posts_link(__('&laquo; Older', "serena")) ?></li>
                                  <li class="next-link"><?php previous_posts_link(__('Newer &raquo;', "serena")) ?></li>
                              </ul>
                          </nav>

                      <?php else : ?>

                          <article id="post-not-found" class="hentry clearfix">
                              <header class="article-header">
                                  <h1><?php _e("Article Missing", "serena"); ?></h1>
                              </header>
                              <section class="entry-content">
                                  <p><?php _e("Sorry, but something is missing. Please try again!", "serena"); ?></p>
                              </section>
                              <footer class="article-footer">
                              </footer>
                          </article>

                      <?php endif; ?>

                    </div>
                </div>
                <div class="col-md-3">
                  <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
	</div>

<?php get_footer(); ?>
