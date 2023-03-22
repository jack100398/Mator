@extends('Frontstage.zh.layouts')
@section('content')
    <div id="app">
        <div class="wrap">
            <div class="page-title2">
                <h2 class="tk-century-gothic">PRODUCT</h2>
            </div>
            <div class="product flex-row">
                @foreach ($product_typies as $type)
                    <div class="col">
                        <a href="{{ route('product-list', ['id' => $type['id']]) }}">
                            <div class="img">
                                <img src="{{ asset($type['image']) }}" alt="">
                                <div class="text">{{ $type['remark'] }}</div>
                            </div>
                            <h1>{{ $type['name'] }}</h1>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        @if ($third_links->isNotEmpty())
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
        @endif
    </div>
    <script src="{{ asset('Frontstage/js/slick.js') }}"></script>
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
