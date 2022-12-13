@extends('layouts')
@section('content')
    <div id="app">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h1 mb-0 text-gray-800">客端DEMO</h1>
        </div>

        <!-- Content Row -->

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-4 col-lg-3">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">產品資訊</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">方向</span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="vetor" id="inlineRadio1" checked
                                        value="option1">
                                    <label class="form-check-label" for="inlineRadio1">直立</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="vetor" id="inlineRadio2"
                                        value="option2">
                                    <label class="form-check-label" for="inlineRadio2">橫立</label>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">解析度</span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="hz" id="inlineRadio1" checked
                                        value="option1">
                                    <label class="form-check-label" for="inlineRadio1">1um</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="hz" id="inlineRadio2"
                                        value="option2">
                                    <label class="form-check-label" for="inlineRadio2">0.1um</label>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">直線尺型式</span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="type" id="inlineRadio1" checked
                                        value="option1">
                                    <label class="form-check-label" for="inlineRadio1">增量</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="type" id="inlineRadio2"
                                        value="option2">
                                    <label class="form-check-label" for="inlineRadio2">絕對</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">參數</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <label for="customRange2" class="form-label">荷重</label>
                        <input type="range" class="form-range" min="0" max="400" value=0 id="customRange2"
                            oninput="this.nextElementSibling.value = this.value">
                        <output>0</output>
                        <label for="customRange2" class="form-label">KG</label>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">行程距離</span>
                            </div>
                            <input type="text" class="form-control" placeholder="請輸入行程距離" aria-label="power"
                                aria-describedby="basic-addon1">
                            <div class="input-group-append">
                                <span class="input-group-text">mm</span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">選擇換算</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="speed_setting" id="exampleRadios1"
                                value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                以時間決定
                            </label>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">目標時間</span>
                                </div>
                                <input type="text" class="form-control" placeholder="請輸入目標時間" aria-label="power"
                                    aria-describedby="basic-addon1">
                                <div class="input-group-append">
                                    <span class="input-group-text">msec</span>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">制限速度</span>
                                </div>
                                <input type="text" class="form-control" placeholder="請輸入制限速度" aria-label="power"
                                    aria-describedby="basic-addon1">
                                <div class="input-group-append">
                                    <span class="input-group-text">mm/sec</span>
                                </div>
                            </div>


                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="speed_setting" id="exampleRadios1"
                                value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                以加速度時間決定
                            </label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">加減速時間</span>
                                </div>
                                <input type="text" class="form-control" placeholder="請輸入加減速時間" aria-label="power"
                                    aria-describedby="basic-addon1">
                                <div class="input-group-append">
                                    <span class="input-group-text">msec</span>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">運轉速度</span>
                                </div>
                                <input type="text" class="form-control" placeholder="請輸入運轉速度" aria-label="power"
                                    aria-describedby="basic-addon1">
                                <div class="input-group-append">
                                    <span class="input-group-text">mm/sec</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="speed_setting" id="exampleRadios1"
                                value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                以加速度決定
                            </label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">加速度</span>
                                </div>
                                <input type="text" class="form-control" placeholder="請輸入加速度" aria-label="power"
                                    aria-describedby="basic-addon1">
                                <div class="input-group-append">
                                    <span class="input-group-text">G</span>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">到達速度</span>
                                </div>
                                <input type="text" class="form-control" placeholder="請輸入到達速度" aria-label="power"
                                    aria-describedby="basic-addon1">
                                <div class="input-group-append">
                                    <span class="input-group-text">mm/sec</span>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">搜尋結果</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    <div>
                                        {{ '品名:測試' }}
                                    </div>
                                    <div class="dropdown no-arrow pull-right">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">商品選項:</div>
                                            <a class="dropdown-item" onclick="alert('敬請期待')">刪除</a>
                                            <div class="dropdown-divider"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ '價錢:暫代' }}
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ '資訊:A' }}
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ '資訊:B' }}
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ '介紹:產品介紹' }}
                                </div>
                            </div>
                            <div class="col-auto">
                                <img src="storage/QwGdXNH7KCuoAJQB4IuM2ifB9YZCbw3TvQa7ER5j.jpg" alt=""
                                    class="img-thumbnail">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
