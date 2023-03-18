@extends('Frontstage.zh.layouts')
@section('content')
    <div id="app">
        <div class="wrap">
            <div class="plist-banner">
                <img src="{{ asset($current_type['page_banner']) }}" alt="">
                <div class="youtube">
                    <img src="{{ asset('Frontstage/images/youtube-base.png') }}" alt="">
                    <iframe src="{{ $current_type['video'] ?? '' }}" title="2020年5月14日(1)" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="plist">
                <div class="flex-row">
                    <div class="col left">
                        <h2 class="tk-century-gothic">PRODUCT CATAGORY</h2>
                        <ul>
                            @foreach ($product_typies as $type)
                                @if ($type['id'] == $current_type['id'])
                                    <li class="current">
                                        <a href="{{ route('product-list', ['id' => $type['id']]) }}">{{ $type['name'] }}</a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ route('product-list', ['id' => $type['id']]) }}">{{ $type['name'] }}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <div class="col right">
                        <div class="title">{{ $current_type['name'] }}</div>
                        <img src="{{ asset($current_type['type_banner']) }}" alt="">
                        <div class="product-list">
                            <div class="flex-row">
                                <div class="col">
                                    <a href="{{ route('product-detail', ['id' => 1]) }}" class="inner hover-scale">
                                        <div class="img"><img src="{{ asset('Frontstage/images/product6.png') }}"
                                                alt=""></div>
                                        <div class="name">JDBN-65</div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="{{ route('product-detail', ['id' => 1]) }}" class="inner hover-scale">
                                        <div class="img"><img src="{{ asset('Frontstage/images/product6-2.png') }}"
                                                alt=""></div>
                                        <div class="name">JDB-240</div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="{{ route('product-detail', ['id' => 1]) }}" class="inner hover-scale">
                                        <div class="img"><img src="{{ asset('Frontstage/images/product6-3.png') }}"
                                                alt=""></div>
                                        <div class="name">JDB-180</div>
                                    </a>
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
            </div>
        </div>
    </div>
@endsection
