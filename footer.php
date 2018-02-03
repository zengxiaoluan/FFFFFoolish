<?php
    $user_data = get_userdata(1);
    $user_email = $user_data->user_email;
    $nickname = $user_data->nickname;
?>
<style>
    .footer {
        background: #eee;
    }
    .footer-contact {
        font-size: 1.5em;
        padding: 1em 0;
        /*color: var(--blue);*/
    }
</style>
            <footer class="wrap footer" role="contentinfo">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-2 text-center border-right">
                            <?php
                                echo get_avatar(1, 128, '', $nickname, ['class' => 'img-thumbnail rounded-circle']);
                            ?>
                            <p class="text-center font-weight-bold"><?php echo $nickname;?></p>
                        </div>
                        <div class="col-sm">
                            <p class="border-bottom footer-contact">
                                <span class="oi oi-envelope-closed"></span>
                                <a class="mr-5" target="_blank" href="mailto:<?php echo $user_email; ?>"><?php echo $user_email; ?></a>
                                <span class="oi oi-phone"></span>
                                <a target="_blank" href="tel:158-7338-3200">158-7338-3200</a>
                            </p>
                            <p class="text-center text-muted mt-5">
                                &copy; <?php
                              echo date('Y-m-d', strtotime(get_userdata(1)->user_registered) );
                              echo ' - '.date('Y-m-d');
                              ?>
                              <?php bloginfo('name'); ?>.
                                <a target="_blank" href="http://www.miibeian.gov.cn/state/outPortal/loginPortal.action">湘ICP备15018644号</a>
                                <a target="_blank" href="<?php echo site_url('sitemap.xml');?>">网站地图</a>
                            </p
                        </div>
                    </div>
                </div>

			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
		
		<?php wp_footer(); ?>

	</body>

</html> <!-- end page. what a ride! -->
