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
                <div class="col-xl-12 col-lg-12">
                    <h6 class="m-3 font-weight-bold text-primary">
                        站台：{{ $key === 'zh' ? '中文站' : '英文站' }}
                    </h6>
                    @foreach ($items as $item)
                        <div class="card shadow mb-4 mr-0 col-xl-3 col-lg-3" style="float:left;height:260px">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">{{ $item['name'] }}</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="card shadow mb-4">
                                    <div class="card-body">
                                        <img id="demo-img" class="img-fluid" style="max-width: 10%;height:10%;"
                                            src="{{ $item['image'] }}">
                                    </div>
                                </div>


                                <div class="row justify-content-end">
                                    <a href="{{ route('editProductTypePage', ['id' => $item['id']]) }}">
                                        <button type="submit" class="btn btn-primary">修改</button>
                                    </a>
                                    <button onclick="drop({{ $item['id'] }})" type="submit"
                                        class="btn btn-danger">刪除</button>
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
