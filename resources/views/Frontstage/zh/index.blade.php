@extends('Frontstage.zh.layouts')
@section('content')
    <div id="app">
        <div class="wrap">
            <div class="product-slider">
                @foreach ($products as $product)
                    <div class="swiper-content">
                        <a href="{{ route('product-detail', ['product' => $product['id']]) }}">
                            <div class="img"><img src="{{ $product['image'] }}" alt=""></div>
                            <div class="text">
                                <h3>{{ $product['name'] }}</h3>
                                <p>{{ $product['introduction'] }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="page-title">
            <h2 class="tk-century-gothic wow fadeInDown">AUTOMATION <br class="mobile">SERVICE</h2>
            <p class="wow fadeInDown">專業自動化技術服務的提供者</p>
        </div>

        <div class="wrap2">
            <div class="index-block1 row">
                <div class="left col">
                    <p>NEW MOTECH 專注於追求速度、穩定、精準、品質，創新科技協助用戶永保市場領先地位。<br class="pc">
                        我們仔細聆聽客戶需求，經由專業的團隊提供正確的線性馬達選型、組裝諮詢及精度校驗...等各項服務技術。</p>
                    <a href="" class="btn">進入了解</a>
                    <img src="{{ asset('Frontstage/images/index_block1.jpg') }}" alt="">
                </div>
                <div class="col">
                    <!-- 圖片輪播-->
                    <div class="index-block1-slider flexslider no-direction" style="display: none;">
                        <ul class="slides">
                            <li>
                                <a href="#">
                                    <img src="{{ asset('Frontstage/images/index_block2.jpg') }}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('Frontstage/images/index_block2.jpg') }}" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- 圖片輪播-->
                    <!-- youtube -->
                    <div class="youtube">
                        <img src="{{ asset('Frontstage/images/youtube-base.png') }}" alt="">
                        <iframe src="https://www.youtube.com/embed/C1IP05_Hk0Y?list=PLGyv6kOJhxI_FB7C3WLLjO2LUmIus4G88"
                            title="2020年5月14日(1)" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <!-- youtube -->
                </div>
            </div>
        </div>

        <div class="index-block2" data-parallax="scroll"
            data-image-src="{{ asset('Frontstage/images/index_block2_bg.jpg') }}">
            <div class="wrap">
                <div class="col">
                    <h2 class="tk-century-gothic">MATCHING</h2>
                    <p>為便利您更加有效尋找符合之產品 <br>
                        我們提供快速搜索系統！</p>
                    <a href="" class="btn style2">智慧配對</a>
                </div>
            </div>
        </div>
        <div class="bottom_bg"></div>
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
