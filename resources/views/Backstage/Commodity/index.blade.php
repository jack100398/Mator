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
                        <div class="card shadow m-3 col-xs-12 col-md-4 col-lg-3 col-xxl-2">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">{{ $item['name'] }}</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="card shadow mb-4" style="height: 70%">
                                    <div class="card-body">
                                        <img id="demo-img" class="img-fluid" style="max-width: 100%;height:100%;"
                                            src="{{ $item['picture_one'] }}">
                                    </div>
                                </div>


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
