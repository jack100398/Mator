@extends('Frontstage.zh.layouts')
@section('content')
    <div id="app">
        <div class="wrap">
            <div class="page-title2">
                <h2 class="tk-century-gothic">PRODUCT</h2>
            </div>
            <div class="product flex-row">
                <div class="col">
                    <a href="{{ route('product-list') }}">
                        <div class="img">
                            <img src="{{ asset('Frontstage/images/product-6.png') }}" alt="">
                            <div class="text">該類別簡易介紹，簡單70字數內即可，讓瀏覽者更加了解該分類內容產品，至多兩排文字介紹，每排約35個字數...</div>
                        </div>
                        <h1>NEW MOTECH 線性馬達模組</h1>
                    </a>
                </div>
                <div class="col">
                    <a href="{{ route('product-list') }}">
                        <div class="img">
                            <img src="{{ asset('Frontstage/images/product-1.png') }}" alt="">
                            <div class="text">該類別簡易介紹，簡單70字數內即可，讓瀏覽者更加了解該分類內容產品，至多兩排文字介紹，每排約35個字數...</div>
                        </div>
                        <h1>NEW MOTECH 精密Z軸線性馬達模組</h1>
                    </a>
                </div>
                <div class="col">
                    <a href="{{ route('product-list') }}">
                        <div class="img">
                            <img src="{{ asset('Frontstage/images/product-2.png') }}" alt="">
                            <div class="text">該類別簡易介紹，簡單70字數內即可，讓瀏覽者更加了解該分類內容產品，至多兩排文字介紹，每排約35個字數...</div>
                        </div>
                        <h1>NEW MOTECH 精密水平軸線性馬達模組</h1>
                    </a>
                </div>
                <div class="col">
                    <a href="{{ route('product-list') }}">
                        <div class="img">
                            <img src="{{ asset('Frontstage/images/product-3.png') }}" alt="">
                            <div class="text">該類別簡易介紹，簡單70字數內即可，讓瀏覽者更加了解該分類內容產品，至多兩排文字介紹，每排約35個字數...</div>
                        </div>
                        <h1>NEW MOTECH 精密多動子線性馬達模組</h1>
                    </a>
                </div>
                <div class="col">
                    <a href="{{ route('product-list') }}">
                        <div class="img">
                            <img src="{{ asset('Frontstage/images/product-4.png') }}" alt="">
                            <div class="text">該類別簡易介紹，簡單70字數內即可，讓瀏覽者更加了解該分類內容產品，至多兩排文字介紹，每排約35個字數...</div>
                        </div>
                        <h1>NEW MOTECH 龍門同動專用線性馬達模組</h1>
                    </a>
                </div>
                <div class="col">
                    <a href="{{ route('product-list') }}">
                        <div class="img">
                            <img src="{{ asset('Frontstage/images/product-5.png') }}" alt="">
                            <div class="text">該類別簡易介紹，簡單70字數內即可，讓瀏覽者更加了解該分類內容產品，至多兩排文字介紹，每排約35個字數...</div>
                        </div>
                        <h1>NEW MOTECH 精密線性馬達微型STAGE</h1>
                    </a>
                </div>
            </div>
        </div>

        <div class="brands">
            <div class="wrap">
                <div class="brands-slider">
                    @foreach ($third_links as $third_link)
                        <div class="swiper-content">
                            <a href="{{ $third_link->url }}">
                                <img src="{{ asset($third_link->image) }}" alt="">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script src="js/slick.js"></script>
    <script>
        $(document).ready(function() {

            $('.brands-slider').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                centerPadding: '0',
                autoplay: false,
                responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                    }
                }, {
                    breakpoint: 700,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                }, ]
            });

        });
    </script>
@endsection
