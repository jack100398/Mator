@extends('Backstage.layouts')
@section('content')
    <div id="app">
        @include('Backstage.component.title')
        <a href="{{ route('createIndexSilderPage') }}">
            <button type="submit" class="btn btn-success">新增</button>
        </a>
        <br>
        <br>

        <div class="row">
            <div class="col-xl-12 col-lg-12">
                @foreach ($items as $item)
                    <div class="card shadow mb-4">
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                @if ($item['type'] === '1')
                                    <h6 class="m-0 font-weight-bold text-primary">圖片</h6>
                                @else
                                    <h6 class="m-0 font-weight-bold text-primary">影片</h6>
                                @endif
                            </div>
                            <div class="card shadow mb-4">
                                @if ($item['type'] === 1)
                                    <div class="card-body">
                                        <img id="demo-img" class="img-fluid" style="max-width: 10%;height:10%;"
                                            src="{{ $item['url'] }}">
                                    </div>
                                @else
                                    <iframe src="{{ $item['url'] }}" title="2020年5月14日(1)" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                                @endif
                            </div>
                            <div class="row justify-content-end">
                                <a href="{{ route('editIndexSilderPage', ['id' => $item['id']]) }}">
                                    <button type="submit" class="btn btn-primary">修改</button>
                                </a>
                                <button onclick="drop({{ $item['id'] }})" type="submit"
                                    class="btn btn-danger">刪除</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
    <script src="{{ asset('Backstage/js/index_silder.js') }}"></script>
@endsection
