@extends('Backstage.layouts')
@section('content')
    <div id="app">
        @include('Backstage.component.title')
        <a class="mb-4" href="{{ route('createProductTypePage') }}">
            <button type="submit" class="btn btn-success">新增</button>
        </a>

        @include('Backstage.component.index_side_selector', ['route' => 'product-type'])

        <div class="row">
            @foreach ($typies as $key => $items)
                <div class="col-12 mb-4">
                    <h6 class="m-3 font-weight-bold text-primary">
                        站台：{{ $key === 'zh' ? '中文站' : '英文站' }}
                    </h6>
                    <div class="row">
                        @foreach ($items as $item)
                            <div class="col-sm-4 col-lg-3" style="padding: 1rem">
                                <div class="card">
                                    <h6 class="card-header">{{ $item['name'] }}</h6>
                                    <img src="{{ $item['image'] }}" class="card-img-top">
                                    <div class="card-footer text-muted">
                                        <div class="row justify-content-end">

                                            <div class="col-md-12 col-xl">
                                                <button class="btn" disabled>優先級：{{ $item['sort'] }}</button>
                                            </div>

                                            <a href="{{ route('editProductTypePage', ['id' => $item['id']]) }}">
                                                <button type="submit" class="btn btn-primary">修改</button>
                                            </a>
                                            <a>
                                                <button onclick="drop({{ $item['id'] }})" type="submit"
                                                    class="btn btn-danger">刪除</button>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
            @endforeach
        </div>
    </div>
    <script src="{{ asset('Backstage/js/product_type.js') }}"></script>
@endsection
