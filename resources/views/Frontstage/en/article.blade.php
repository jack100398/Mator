@extends('Frontstage.en.layouts')
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
                {!! $news['text'] !!}
            </div>
            <div class="back"><a href="{{ route('en-news') }}" class="btn" style="color: #fff;">« BACK LIST</a></div>
        </div>
    </div>
@endsection
