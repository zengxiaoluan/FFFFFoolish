    <div class="banners-wrap">
        <ul class="banners">
            <li class="slide active"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/0.png" alt=""></li>
            <li class="slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/1.png" alt=""></li>
            <li class="slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/2.png" alt=""></li>
        </ul>
        <div id="banners-tab" class="banners-tab"></div>
    </div>

    <style>
        @media (max-width: 798px) {
            .banners-wrap {
                display: none;
            }
        }
        .banners-wrap {
            position: relative;
            height: 288px;
            overflow: hidden;
        }
        .banners-tab {
            height: 100px;
            width: 20px;
            position: absolute;
            left: 10px;
            bottom: 50px;
            background: pink;
            z-index: 2;
        }
        .banners .slide {
            position: absolute;
            will-change: transform;
            transition: transform .5s;
            transform: translate3d(0, 100%, 0);
        }
        .banners .slide.active {
            transform: translate3d(0, 0, 0);
        }
    </style>

    <script>
        (function ($) {
            $(function () {
                var slides = $('.banners .slide')
                var slideLength = slides.length
                var index = 0

                var Banners = {
                    init: function () {
                        this.turnSlides()
                        this.renderBannersTab()
                    },
                    renderBannersTab: function () {
                        var html = ''
                        for(var i = 0; i < slideLength; i++) {
                            html += '<span></span>'
                        }

                    },
                    turnSlides: function () {
                        var self = this

                        setTimeout(function () {
                            index++
                            if (index === slideLength) {
                                index = 0
                            }

                            slides.removeClass('active').eq(index).addClass('active')
                            self.turnSlides()
                        }, 5000)
                    }
                }
                // 执行入口
                Banners.init()
            })
        })(jQuery)
    </script>
