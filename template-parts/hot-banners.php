    <div class="container-fluid">
        <div class="banners-wrap">
            <ul class="banners">
                <li class="slide active"><img src="https://wx3.sinaimg.cn/mw690/005J4EGely1fn5vem8ldpj30ot0xcqbi.jpg" alt=""></li>
                <li class="slide"><img src="https://wx4.sinaimg.cn/mw690/005J4EGely1fn5venxkevj30ot0xck0n.jpg" alt=""></li>
                <li class="slide"><img src="https://wx4.sinaimg.cn/mw690/005J4EGely1fn5vep2d00j30ot0xcgt9.jpg" alt=""></li>
                <li class="slide"><img src="https://wx3.sinaimg.cn/mw690/005J4EGely1fn5vekpjjcj30ot0xc0z3.jpg" alt=""></li>
            </ul>
            <div id="banners-tab" class="banners-tab"></div>
        </div>
    </div>

    <style>
        .banners-wrap {
            position: relative;
            height: 927px;
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
