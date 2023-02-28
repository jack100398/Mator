@extends('Frontstage.zh.layouts')
@section('content')
    <div id="app">
        <div class="wrap">
            <div class="page-title2">
                <h2 class="tk-century-gothic">NEWS</h2>
            </div>
            <div class="news-center">
                <div class="flex-row">
                    <div class="col">
                        <div class="inner">
                            <div class="img"><img src="{{ asset('Frontstage/images/pic1.jpg') }}" alt="">
                                <a href="{{ route('article', ['id' => 1]) }}"><i class="fa fa-align-left"></i></a>
                            </div>
                            <div class="text">
                                <h3>營養師教你吃冰消暑不怕胖2招有助改善吃冰頭痛</h3>
                                <p>根據研究發現，因為吞嚥或吸入外界寒冷刺激所引起的頭痛（HICS），又稱為「冰淇淋頭痛」，兩個導管治療的概念是一樣的，但是高血壓導管治療，是透過微創導管由鼠蹊部進入到腎臟動脈血管內...
                                </p>
                                <div class="bottom">
                                    <div class="date">8 September 2020</div>
                                    <a href="{{ route('article', ['id' => 1]) }}">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <div class="img"><img src="{{ asset('Frontstage/images/pic4.jpg') }}" alt="">
                                <a href="{{ route('article', ['id' => 1]) }}"><i class="fa fa-align-left"></i></a>
                            </div>
                            <div class="text">
                                <h3>用眼藥水舒緩眼疲勞？ ２情況千萬別自己判斷</h3>
                                <p>當您眼睛突然發癢時怎麼辦？食藥署提醒，民眾若要自行購買眼藥水緩解不適，一定要先...</p>
                                <div class="bottom">
                                    <div class="date">3-6 August 2020</div>
                                    <a href="{{ route('article', ['id' => 1]) }}">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <div class="img"><img src="{{ asset('Frontstage/images/pic2.jpg') }}" alt="">
                                <a href="{{ route('article', ['id' => 1]) }}"><i class="fa fa-align-left"></i></a>
                            </div>
                            <div class="text">
                                <h3>擊退血管裡的血液風暴！ 「簡單 生活七件事」預...</h3>
                                <p>當您眼睛突然發癢時怎麼辦？食藥署提醒，民眾若要自行購買眼藥水緩解不適，一定要先看以下三點眼藥水知識喔！眼藥水種類多 對症下藥才有用
                                    在藥局或藥粧店購買屬醫師藥師藥劑生指示藥品或成藥，不必經醫師處方...</p>
                                <div class="bottom">
                                    <div class="date">1 August 2020</div>
                                    <a href="{{ route('article', ['id' => 1]) }}">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <div class="img"><img src="{{ asset('Frontstage/images/pic3.jpg') }}" alt="">
                                <a href="{{ route('article', ['id' => 1]) }}"><i class="fa fa-align-left"></i></a>
                            </div>
                            <div class="text">
                                <h3>西瓜透心涼！美女營養師：3種人少吃 西瓜透心涼！美女營養師：3種人少吃</h3>
                                <p>當您眼睛突然發癢時怎麼辦？食藥署提醒，民眾若要自行購買眼藥水緩解不適，一定要先看以下三點眼藥水知識喔！眼藥水種類多 對症下藥才有用
                                    在藥局或藥粧店購買屬醫師藥師藥劑生指示藥品或成藥，不必經醫師處方...</p>
                                <div class="bottom">
                                    <div class="date">12-15 July 2020</div>
                                    <a href="{{ route('article', ['id' => 1]) }}">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pager">
                <a href="" class="page-prev">上一頁</a>
                <a href="" class="current">1</a>
                <span>/</span>
                <a href="">2</a>
                <a href="" class="page-next">下一頁</a>
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
