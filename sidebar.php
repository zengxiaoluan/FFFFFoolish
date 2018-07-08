    <div class="sidebar">

        <?php if ( is_active_sidebar( 'sidebar_blog' ) ) : ?>
            <?php dynamic_sidebar( 'sidebar_blog' ); ?>

        <?php else : ?>

            <div class="alert help">
                <p><?php _e("Please activate some Widgets.", "foolish");  ?></p>
            </div>

        <?php endif; ?>

    </div>