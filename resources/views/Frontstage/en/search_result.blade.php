@extends('Frontstage.en.layouts')
@section('content')
    <div id="app">
        <div class="wrap">
            <div class="search-result">
                <div class="product-list">
                    <div class="flex-row">
                        @if ($products->isNotEmpty())
                            @foreach ($products as $item)
                                <div class="col">
                                    <a href="{{ route('product-detail', ['product' => $item['id']]) }}"
                                        class="inner hover-scale">
                                        <div class="img"><img src="{{ $item['image'] }}" alt=""></div>
                                        <div class="name">{{ $item['name'] }} / {{ $item['type']['name'] }}</div>
                                    </a>
                                </div>
                            @endforeach
                        @else
                            <div class="wrap">
                                <div class="search-result">
                                    <div class="not-found">
                                        <img src="{{ asset('Frontstage/images/oops.png') }}" alt="">
                                        <p>很抱歉，尚無相關資訊...</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
