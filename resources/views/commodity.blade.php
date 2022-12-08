@extends('layouts')
@section('content')
    <div id="app">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h1 mb-0 text-gray-800">商品管理</h1>
        </div>
        <!-- Content Row -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h3 class="h3 mb-0 text-gray-800">新增商品</h1>
        </div>
        <div class="row">
            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">產品資訊</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">品名</span>
                            </div>
                            <input type="text" id="commodity-name" class="form-control" placeholder="請輸入產品名稱"
                                aria-label="name" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">額定推力</span>
                            </div>
                            <input type="text" id="commodity-power" class="form-control" placeholder="請輸入額定動力"
                                aria-label="power" aria-describedby="basic-addon1">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">加速推力</span>
                            </div>
                            <input type="text" id="commodity-power" class="form-control" placeholder="請輸入加速推力"
                                aria-label="power" aria-describedby="basic-addon1">

                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">額定電流</span>
                            </div>
                            <input type="text" id="commodity-power" class="form-control" placeholder="請輸入額定電流"
                                aria-label="power" aria-describedby="basic-addon1">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">加速電流</span>
                            </div>
                            <input type="text" id="commodity-power" class="form-control" placeholder="請輸入加速電流"
                                aria-label="power" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">最大加速度</span>
                            </div>
                            <input type="text" id="commodity-power" class="form-control" placeholder="請輸入最大加速度"
                                aria-label="power" aria-describedby="basic-addon1">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">最大速度</span>
                            </div>
                            <input type="text" id="commodity-power" class="form-control" placeholder="請輸入最大速度"
                                aria-label="power" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">重複定位精準度</span>
                            </div>
                            <input type="text" id="commodity-power" class="form-control" placeholder="請輸入重複定位精準度"
                                aria-label="power" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">水平最大荷重</span>
                            </div>
                            <input type="text" id="commodity-power" class="form-control" placeholder="請輸入水平最大荷重"
                                aria-label="power" aria-describedby="basic-addon1">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">壁掛最大荷重</span>
                            </div>
                            <input type="text" id="commodity-power" class="form-control" placeholder="請輸入壁掛最大荷重"
                                aria-label="power" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">行程(雙滑軌)</span>
                            </div>
                            <input type="text" id="commodity-power" class="form-control" placeholder="請輸入行程"
                                aria-label="power" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">電源電壓</span>
                            </div>
                            <input type="text" id="commodity-power" class="form-control" placeholder="請輸入電源電壓"
                                aria-label="power" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">使用環境溫度</span>
                            </div>
                            <input type="text" id="commodity-power" class="form-control" placeholder="請輸入使用環境溫度"
                                aria-label="power" aria-describedby="basic-addon1">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">使用環境濕度</span>
                            </div>
                            <input type="text" id="commodity-power" class="form-control" placeholder="請輸入使用環境濕度"
                                aria-label="power" aria-describedby="basic-addon1">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">保存溫度</span>
                            </div>
                            <input type="text" id="commodity-power" class="form-control" placeholder="請輸入使用保存溫度"
                                aria-label="power" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">備註</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">附圖</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <img id="demo-img" class="img-thumbnail">
                        <input id="uploadImg" class="file" type="file" multiple data-min-file-count="1">
                        <button type="submit" class="btn btn-primary pull-right" id="img-upload">上傳</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <button type="button" class="btn btn-success" onclick="createCommodity()">新增</button>
        </div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h3 class="h3 mb-0 text-gray-800">商品</h1>
        </div>
        <!-- Content Row -->
        <div class="row" id="commodity_cards">
            @include('component.card', ['name' => 'abc'])
            @include('component.card', ['name' => 'abc'])
            @include('component.card', ['name' => 'abc'])
            @include('component.card', ['name' => 'abc'])
            @include('component.card', ['name' => 'abc'])
            @include('component.card', ['name' => 'abc'])
            @include('component.card', ['name' => 'abc'])
            @include('component.card', ['name' => 'abc'])
        </div>
    </div>
@endsection
