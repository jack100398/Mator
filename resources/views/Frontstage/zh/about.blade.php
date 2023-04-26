@extends('Frontstage.zh.layouts')
@section('content')
    <div id="app">
        <div class="page-title2">
            <h2 class="tk-century-gothic">ABOUT <br class="mobile hide-in-tablet">NEW MOTECH</h2>
        </div>

        <div class="about">
            <div class="wrap3">
                <div class="top">
                    <div class="flex-row">
                        <div class="col"><img src="{{ asset('Frontstage/images/about1.png') }}" alt=""></div>
                        <div class="col">
                            <h2>營運方針</h2>
                            <ul>
                                <li><img src="{{ asset('Frontstage/images/list_icon.png') }}"
                                        alt=""><span>提供最佳服務，研發創新商品。</span></li>
                                <li><img src="{{ asset('Frontstage/images/list_icon.png') }}"
                                        alt=""><span>提供專業建議，建立良好合作關係。</span></li>
                                <li><img src="{{ asset('Frontstage/images/list_icon.png') }}"
                                        alt=""><span>致力研發更多更新產品，深耕與客戶關係。</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex-row">
                        <div class="col">
                            <h2>欣茂達科技</h2>
                            <p>在精密高科技產業的全球化發展之下，設備對於高精準定位的商品需求與日俱增。<br>
                                對此，欣茂達不僅提供線性馬達及直驅馬達單品，更提供高精度定位模組，可大幅縮短設計開發時間，組裝快速又便利。</p>
                        </div>
                        <div class="col"><img src="{{ asset('Frontstage/images/about2.jpg') }}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-block2">
            <div class="wrap3">
                <h2>經營理念</h2>
                <div class="flex-row">
                    <div class="col">
                        <h3>堅持</h3>
                        <p>突破現況創造價值</p>
                    </div>
                    <div class="col">
                        <h3>精進</h3>
                        <p>不間斷的進步和改正，以持續發揮創造力</p>
                    </div>
                    <div class="col">
                        <h3>衝勁</h3>
                        <p>保持正向積極的動力，永不退縮</p>
                    </div>
                    <div class="col">
                        <h3>創新</h3>
                        <p>前瞻思維，永懷夢想及志向</p>
                    </div>
                    <div class="col">
                        <h3>抱負</h3>
                        <p>貢獻一己之力量，為企業長遠的理想而努力</p>
                    </div>
                    <div class="col">
                        <h3>獲利</h3>
                        <p>在合作的基礎上創造與客戶間最大的利益</p>
                    </div>
                </div>
                <div class="bottom">
                    <h3>誠信</h3>
                    <p>以客戶的立場為出發點，提供最佳品質之商品</p>
                </div>
            </div>
        </div>

        <div class="about-block3">
            <div class="wrap3">
                <div class="flex">
                    <img src="{{ asset('Frontstage/images/about3-1.jpg') }}" alt="" class="img1">
                    <img src="{{ asset('Frontstage/images/about3-2.jpg') }}" alt="" class="img2">
                    <img src="{{ asset('Frontstage/images/about3-3.jpg') }}" alt="" class="img3">
                </div>
            </div>
        </div>

        <div class="about-block4">
            <div class="wrap3">
                <h2>公司願景、使命</h2>
                <div class="flex-row">
                    <div class="col">
                        <h3>願景</h3>
                        <p>提供優質商品，增加設備商與其競爭對手的產品差異性<br class="pc">
                            提升客戶競爭力</p>
                    </div>
                    <div class="col">
                        <h3>使命</h3>
                        <p>成就客戶、創新為要、誠信負責；與客戶感同身受<br class="pc">
                            完整售後服務</p>
                    </div>
                </div>
                <div class="contact-img">
                    <a href="{{ route('contact') }}"><img src="{{ asset('Frontstage/images/icon.png') }}"
                            alt=""><span>與我們聯繫</span></a>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {


            $(window).scroll(function() {
                var _scrollTop = $(window).scrollTop();

                if (_scrollTop >= 100) {
                    $('#fixed-header.index').addClass('active')
                } else {
                    $('#fixed-header.index').removeClass('active')
                }
            });

            $('.product-slider').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                centerPadding: '0',
                autoplay: false,
                responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                }, {
                    breakpoint: 700,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }, ]
            });

            $('.index-block1-slider').flexslider({
                animation: "slide",
                directionNav: true,
                controlNav: true,
                animationLoop: false,
                pauseOnAction: false,
                slideshowSpeed: 5000,
                touch: $('.flexslider li').length > 1,
                after: function(slider) {
                    slider.pause();
                    slider.play();
                }
            });

            wow = new WOW({
                boxClass: 'wow',
                animateClass: 'animated',
                offset: 0,
                mobile: false,
                live: true
            })
            wow.init();

        });
    </script>
@endsection
