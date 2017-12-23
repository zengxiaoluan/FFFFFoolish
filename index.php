<?php get_header(); ?>
			
	<div id="content" class="wrap clearfix">

	    <div id="main" class="eightcol first clearfix" role="main">
			
			<?php get_template_part('template-parts/hot-article'); ?>
			<h3 class="articles">All Articles</h3>
		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
			    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
					
				    <header class="article-header">
					
						<h1 class="entry-title single-title" itemprop="headline"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
						<p class="author">
							<?php
							  	printf(__('%1$s', 'serena'), serena_get_the_author_posts_link());
							  	printf(__('<time datetime="%1$s" pubdate>%2$s</time>', 'serena'), get_the_time('Y-m-j'), get_the_time(get_option('date_format')) );
							?>
							<span>
								<?php printf(__( '阅读%1$s', 'foolish' ), the_views()); ?>
							</span>
						</p>
					    
				    </header> <!-- end article header -->
						
					<section>
						<?php the_post_thumbnail( 'post-thumbnail', '' ); ?>
					</section>

				    <section class="entry-content clearfix">
					    <?php the_excerpt(); ?>
				    </section> <!-- end article section -->
				
				    <footer class="article-footer">
				    </footer> <!-- end article footer -->
			
			    </article> <!-- end article -->
			    	
			
		    <?php endwhile; ?>	
				
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
	
	    </div> <!-- end #main -->				    

	   <?php get_sidebar(); ?>

	</div> <!-- end #content -->

<?php get_footer(); ?>
