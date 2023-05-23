@extends('Backstage.layouts')
@section('content')
    <div id="app">
        @include('Backstage.component.title')
        <a href="{{ route('createProductPage') }}">
            <button type="submit" class="btn btn-success">新增</button>
        </a>
        <br>
        <br>

        @include('Backstage.component.index_side_selector', ['route' => 'product-admin'])

        <div class="row">
            @foreach ($types as $items)
                <div class="col-12 mb-4">
                    <h6 class="m-3 font-weight-bold text-primary">
                        分類：{{ $items->first()['type_site'] }}{{ $items->first()['type_name'] }}
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
                                            <a href="{{ route('editProductPage', ['id' => $item['id']]) }}">
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
                </div>
            @endforeach
        </div>
    </div>
    <script src="{{ asset('Backstage/js/product.js') }}"></script>
@endsection
