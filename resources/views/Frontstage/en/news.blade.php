@extends('Frontstage.en.layouts')
@section('content')
    <div id="app">
        <div class="wrap">
            <div class="page-title2">
                <h2 class="tk-century-gothic">NEWS</h2>
            </div>
            <div class="news-center">
                <div class="flex-row">
                    @foreach ($news as $new)
                        <div class="col">
                            <div class="inner">
                                <div class="img">
                                    <img style="width: 360px" src="{{ $new['image'] }}" alt="">
                                    <a href="{{ route('en-article', ['news' => $new['id']]) }}">
                                        <i class="fa fa-align-left"></i>
                                    </a>
                                </div>
                                <div class="text">
                                    <h3>{{ $new['title'] }}</h3>
                                    <p>{{ $new['introduction'] }}</p>
                                    <div class="bottom">
                                        <div class="date">{{ $new['created_at'] }}</div>
                                        <a href="{{ route('en-article', ['news' => $new['id']]) }}">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="pager">
                <a href="{{ $news->previousPageUrl() ?? 'javascript:void(0)' }}" class="page-prev">PREV</a>

                <a href="{{ $news->path() }}" class=" {{ $news->onFirstPage() ? 'current' : '' }}">1</a>
                @for ($i = 2; $i <= $news->lastPage(); $i++)
                    <span>/</span>
                    <a class=" {{ $news->currentPage() == $i ? 'current' : '' }}"
                        href="{{ $news->path() }}?page={{ $i }}">{{ $i }}</a>
                @endfor
                <a href="{{ $news->nextPageUrl() ?? 'javascript:void(0)' }}" class="page-next">NEXT</a>
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
