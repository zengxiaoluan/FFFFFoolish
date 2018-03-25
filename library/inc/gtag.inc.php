<?php 
    function gtag () { ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112443998-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-112443998-1');
    </script>

<?php }

    if (!is_admin() && !WP_DEBUG) {
        add_action('wp_footer', 'gtag');
    }
