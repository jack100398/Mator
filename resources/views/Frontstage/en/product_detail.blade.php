@extends('Frontstage.en.layouts')
@section('content')
    <div id="app">
        <div class="wrap">
            <div class="product-detail flex-row">
                <div class="col"><img src="{{ $product['image'] }}" alt=""></div>
                <div class="col">
                    <div class="sub-title">{{ $product['acting'] }}</div>
                    <h1>{{ $product['type'] }}</h1>
                    <div class="type">{{ $product['name'] }}</div>
                    @if ($product['features'] != '')
                        <h2>FEATURE</h2>
                        <p>{!! $product['features'] !!}</p>
                    @endif
                    @if ($product['remark'] != '')
                        <h2>REMARK</h2>
                        <p>{{ $product['remark'] }}</p>
                    @endif
                    <div class="bottom-btn flex-row">
                        @if ($product['pdf'] !== null)
                            <a href="{{ $product['pdf'] }}" download="{{ $product['pdf_name'] }}.{{ $product['pdf_ext'] }}"
                                class="col hover-scale">File Download</a>
                        @endif
                        <a href="javascript:history.back()" class="col hover-scale">
                            < Previous Page</a>
                    </div>
                </div>
            </div>
            @if ($product['introduction'] != '')
                <div class="steps">DESCRIPTION</div>
                <div class="editor">
                    {!! $product['introduction'] !!}
                </div>
            @endif
            @if (count($product['video_urls']) > 0)
                <div class="steps">APPLICATION</div>
                <div class="p-video flex-row">
                    @foreach ($product['video_urls'] as $url)
                        <div class="col">
                            <div class="youtube">
                                <img src="{{ asset('Frontstage/images/youtube-base.png') }}" alt="">
                                <iframe src="{{ $url }}" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
        <div class="back">
            <a href="javascript:history.back()" class="col hover-scale">
                < Previous Page</a>
        </div>
    </div>
@endsection
