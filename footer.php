<?php
    $user_data = get_userdata(1);
    $user_email = $user_data->user_email;
    $nickname = $user_data->nickname;
?>
            <footer class="wrap bg-light">
                <div class="container-fluid">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-sm-2 text-center border-right">
                            <?php
                                echo get_avatar(1, 128, '', $nickname, ['class' => 'img-thumbnail rounded-circle']);
                            ?>
                            <p class="text-center font-weight-bold"><?php echo $nickname;?></p>
                        </div>
                        <div class="col-sm">
                            <div class="border-bottom">
                                <span class="oi oi-envelope-closed"></span>
                                <a class="mr-5" target="_blank" href="mailto:<?php echo $user_email; ?>"><?php echo $user_email; ?></a>
                            </div>

                            <p class="text-left text-muted">
                                &copy; <?php
                              echo date('Y-m-d', strtotime(get_userdata(1)->user_registered) );
                              echo ' - '.date('Y-m-d');
                              ?>
                                <a href="<?php bloginfo('url');?>"><?php bloginfo('name'); ?>.</a>
                                湘ICP备15018644号
                                <a target="_blank" href="<?php echo site_url('sitemap.xml');?>">网站地图</a>
                            </p
                        </div>
                    </div>
                </div>

			</footer>

		<?php wp_footer(); ?>

	</body>

</html>
