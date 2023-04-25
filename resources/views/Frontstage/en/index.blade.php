@extends('Frontstage.en.layouts')
@section('content')
    <div id="app">
        <div class="wrap">
            <div class="product-slider">
                @foreach ($product_tyipes as $type)
                    <div class="swiper-content">
                        <a href="{{ route('en-product-list', ['id' => $type['id']]) }}">
                            <div class="img"><img src="{{ $type['index_image'] }}" alt=""></div>
                            <div class="text">
                                <h3>{{ $type['name'] }}</h3>
                                <p>{{ $type['remark'] }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="page-title">
            <h2 class="tk-century-gothic wow fadeInDown">AUTOMATION <br class="mobile">SERVICE</h2>
            <p class="wow fadeInDown">Provider of professional automation technology services</p>
        </div>

        <div class="wrap2">
            <div class="index-block1 row">
                <div class="left col">
                    <p>new motech Focusing on the pursuit of speed, stability, precision, and quality, innovative technology
                        helps users maintain their leading positions in the market. <br>
                        We listen carefully to customer needs, and provide various service technologies such as correct
                        linear motor selection, assembly consultation and accuracy verification through a professional team.
                    </p>
                    <a href="" class="btn">MORE</a>
                    <img src="{{ asset('Frontstage/images/index_block1.jpg') }}" alt="">
                </div>
                <div class="col">
                    @if ($index_slider->filter(fn($silder) => $silder['type'] === '2')->count() > 0)
                        <div class="youtube">
                            <img src="{{ asset('Frontstage/images/youtube-base.png') }}" alt="">
                            <iframe
                                src="{{ $index_slider->filter(fn($silder) => $silder['type'] === '2')->first()['url'] }}"
                                title="2020年5月14日(1)" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    @elseif ($index_slider->filter(fn($silder) => $silder['type'] === '1')->count() > 0)
                        <div class="index-block1-slider flexslider no-direction">
                            <ul class="slides">
                                @foreach ($index_slider->filter(fn($silder) => $silder['type'] === '1') as $item)
                                    <li>
                                        <a href="{{ $item['link'] }}">
                                            <img src="{{ $item['url'] }}" alt="">
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="index-block2" data-parallax="scroll"
            data-image-src="{{ asset('Frontstage/images/index_block2_bg.jpg') }}">
            <div class="wrap">
                <div class="col">
                    <h2 class="tk-century-gothic">MATCHING</h2>
                    <p>To facilitate you to find suitable products more effectively<br>
                        We provide a quick search system! </p>
                    <a href="{{ route('en-recommend') }}" class="btn style2">智慧配對</a>
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
