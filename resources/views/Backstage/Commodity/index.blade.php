@extends('Backstage.layouts')
@section('content')
    <div id="app">
        @include('Backstage.component.title')
        <a href="{{ route('createCommodityPage') }}">
            <button type="submit" class="btn btn-success">新增</button>
        </a>
        <br>
        <br>

        <div class="row">
            <div class="col-12 mb-4">
                <div class="row">
                    @foreach ($items as $item)
                        <div class="card shadow m-3 col-xs-12 col-lg-3">
                            <h6 class="card-header">{{ $item['name'] }}</h6>
                            <img src="{{ $item['picture_one'] }}" class="card-img-top">
                            <div class="card-footer text-muted">
                                <div class="row justify-content-end">
                                    <a href="{{ route('editCommodityPage', ['id' => $item['id']]) }}">
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
        <script src="{{ asset('Backstage/js/commodity.js') }}"></script>
    @endsection
