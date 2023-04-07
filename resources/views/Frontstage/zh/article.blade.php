@extends('Frontstage.zh.layouts')
@section('content')
    <div id="app">
        <div class="wrap">
            <div class="article-text">
                <div class="activity-date">{{ $news['created_at'] }}</div>
                <h1>{{ $news['title'] }}</h1>
                <span></span>
                <p><span>{{ $news['type'] }}</span>
            </div>
            <div class="editor">
                <div class="article-text">
                    {!! $news['text'] !!}
                </div>
            </div>
            <div class="back"><a href="{{ route('news') }}" class="btn" style="color: #fff;">« 回列表</a></div>
        </div>
    </div>
@endsection
