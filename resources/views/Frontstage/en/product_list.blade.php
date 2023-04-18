@extends('Frontstage.en.layouts')
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
                                        <a
                                            href="{{ route('en-product-list', ['id' => $type['id']]) }}">{{ $type['name'] }}</a>
                                    </li>
                                @else
                                    <li>
                                        <a
                                            href="{{ route('en-product-list', ['id' => $type['id']]) }}">{{ $type['name'] }}</a>
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
                                @foreach ($products as $product)
                                    <div class="col">
                                        <a href="{{ route('en-product-detail', ['product' => $product['id']]) }}"
                                            class="inner hover-scale">
                                            <div class="img"><img src="{{ asset($product['image']) }}" alt="">
                                            </div>
                                            <div class="name">{{ $product['name'] }}</div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="pager">
                            <a href="{{ $products->previousPageUrl() ?? 'javascript:void(0)' }}" class="page-prev">PREV</a>

                            <a href="{{ $products->path() }}"
                                class=" {{ $products->onFirstPage() ? 'current' : '' }}">1</a>
                            @for ($i = 2; $i <= $products->lastPage(); $i++)
                                <span>/</span>
                                <a class=" {{ $products->currentPage() == $i ? 'current' : '' }}"
                                    href="{{ $products->path() }}&page={{ $i }}">{{ $i }}</a>
                            @endfor
                            <a href="{{ $products->nextPageUrl() ?? 'javascript:void(0)' }}" class="page-next">NEXT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
