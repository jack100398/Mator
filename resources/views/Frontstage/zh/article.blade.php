@extends('Frontstage.zh.layouts')
@section('content')
    <div id="app">
        <div class="wrap">
            <div class="article-text">
                <div class="activity-date">{{ $date }}</div>
                <h1>{{ $title }}</h1>
                <span></span>
                <p><span>新聞類別名稱</span><span>2023/01/01-2023/01/29</span></p>
            </div>
            <div class="editor">
                {!! $content !!}
            </div>
            <div class="back"><a href="{{ route('news') }}" class="btn" style="color: #fff;">« 回列表</a></div>
        </div>
    </div>
@endsection
