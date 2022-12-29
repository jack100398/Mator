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
                                <span class="input-group-text" id="basic-addon1">姿勢</span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="vetor" id="inlineRadio1" checked
                                        v-model="data.direction" value="0">
                                    <label class="form-check-label" for="inlineRadio1">垂直</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="vetor" id="inlineRadio2"
                                        v-model="data.direction" value="1">
                                    <label class="form-check-label" for="inlineRadio2">水平</label>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">解析度</span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="hz" id="inlineRadio1" checked
                                        v-model="data.resolution" value="0.001">
                                    <label class="form-check-label" for="inlineRadio1">1um</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="hz" id="inlineRadio2"
                                        v-model="data.resolution" value="0.0001">
                                    <label class="form-check-label" for="inlineRadio2">0.1um</label>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">直線尺型式</span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="type" id="inlineRadio1" checked
                                       v-model="data.linear_ruler" value="0">
                                    <label class="form-check-label" for="inlineRadio1">增量</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="type" id="inlineRadio2"
                                       v-model="data.linear_ruler" value="1">
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
                        <div class="input-group mb-3">
                            <label for="customRange2" class="form-label">荷重</label>
                            <input type="range" class="form-range" min="0" max="400" step="10" v-model="data.weight"
                                id="customRange2">
                            <input type="text" size="4" class="form-control bg-light border-0"
                                v-model="data.weight" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text">KG</span>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <label for="customRange2" class="form-label">行程距離</label>
                            <input type="range" class="form-range" min="0" max="10000" step="50" v-model="data.distance"
                                id="customRange2">
                            <input type="text" size="4" class="form-control bg-light border-0"
                                v-model="data.distance" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text">KG</span>
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
                                v-model="data.video" value="option1">
                            <label class="form-check-label" for="exampleRadios1">
                                以時間決定
                            </label>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">目標時間</span>
                                </div>
                                <input type="text" class="form-control" v-model="byTime.time" placeholder="請輸入目標時間"
                                    aria-label="power" aria-describedby="basic-addon1">
                                <div class="input-group-append">
                                    <span class="input-group-text">msec</span>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">制限速度</span>
                                </div>
                                <input type="text" class="form-control" v-model="byTime.speed" placeholder="請輸入制限速度"
                                    aria-label="power" aria-describedby="basic-addon1">
                                <div class="input-group-append">
                                    <span class="input-group-text">mm/sec</span>
                                </div>
                            </div>


                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="speed_setting" id="exampleRadios1"
                                v-model="data.video" value="option2">
                            <label class="form-check-label" for="exampleRadios1">
                                以加速度時間決定
                            </label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">加減速時間</span>
                                </div>
                                <input type="text" class="form-control" v-model="byAccelerationTime.time"
                                    placeholder="請輸入加減速時間" aria-label="power" aria-describedby="basic-addon1">
                                <div class="input-group-append">
                                    <span class="input-group-text">msec</span>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">運轉速度</span>
                                </div>
                                <input type="text" class="form-control" v-model="byAccelerationTime.speed"
                                    placeholder="請輸入運轉速度" aria-label="power" aria-describedby="basic-addon1">
                                <div class="input-group-append">
                                    <span class="input-group-text">mm/sec</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="speed_setting" id="exampleRadios1"
                                v-model="data.video" value="option3">
                            <label class="form-check-label" for="exampleRadios1">
                                以加速度決定
                            </label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">加速度</span>
                                </div>
                                <input type="text" class="form-control" v-model="byAcceleration.acceleration"
                                    placeholder="請輸入加速度" aria-label="power" aria-describedby="basic-addon1">
                                <div class="input-group-append">
                                    <span class="input-group-text">G</span>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">到達速度</span>
                                </div>
                                <input type="text" class="form-control" v-model="byAcceleration.speed"
                                    placeholder="請輸入到達速度" aria-label="power" aria-describedby="basic-addon1">
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
                    <div class="card-body search_answer">
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <button type="button" class="btn btn-success" v-on:click="send">搜尋</button>
            </div>
        </div>
    </div>
    <script>
        const {
            createApp
        } = Vue
        createApp({
            data() {
                return {
                    data: {
                        video: 'option2',
                        direction : 0, //垂直0 水平1
                        resolution : 0.0001, //解析度
                        weight: 100,
                        acceleration: 0, //加速度
                        acceleration_time: 0, //加速時間
                        constant_time: 0, //定速移動時間
                        distance: 1500,
                        linear_ruler: 0
                    },
                    byTime: {
                        time: 15000,
                        speed: 1000,
                    },
                    byAccelerationTime: {
                        time: 125,
                        speed: 800,
                    },
                    byAcceleration: {
                        acceleration: 0.65,
                        speed: 800,
                    }
                }
            },
            methods: {
                async send() {
                    switch (this.data.video) {
                        case 'option3':
                            await this.countByAcceleration();
                            break;
                        case 'option2':
                            await this.countByAccelerationTime();
                            break;
                        case 'option1':
                            await this.countByTime();
                            break;
                    }
                    await search(this.data)
                        .then(value => {
                            $('.search_answer').html(value);
                        })
                        .catch(error => {
                            alert('請確認荷重與行程不可為空值');
                        });
                    
                },
                async countByTime() {
                    let Stroke = this.data.distance / 1000
                    let MokuhyouJikan = this.byTime.time / 1000
                    let SeigenSokudo = this.byTime.speed / 1000

                    let temporary_acceleration = (Stroke * 4) / (MokuhyouJikan * MokuhyouJikan)
                    let highest_speed = temporary_acceleration * (MokuhyouJikan / 2)
                    if (SeigenSokudo < highest_speed) {
                        if (SeigenSokudo * MokuhyouJikan <= Stroke) {
                            alert('不可能');
                        } else {
                            let Kasokudo = (SeigenSokudo * SeigenSokudo) / (SeigenSokudo * MokuhyouJikan - Stroke)
                            this.setSpeedData(
                                Kasokudo,
                                highest_speed / Kasokudo,
                                MokuhyouJikan - (KasokuJikan * 2)
                            );
                        }
                    } else {
                        this.setSpeedData(temporary_acceleration / 9.8, MokuhyouJikan / 2 * 1000)
                    }
                },
                async countByAccelerationTime() {
                    let IdoSokudo = this.byAccelerationTime.speed / 1000
                    let TachiagariJikan = this.byAccelerationTime.time / 1000
                    let Stroke = this.data.distance / 1000
                    let Kasokudo = IdoSokudo / TachiagariJikan
                    let KasokuKyori = Kasokudo * TachiagariJikan * TachiagariJikan / 2

                        let TeisokuKyori = Stroke - 2 * KasokuKyori
                        let TeisokuJikan = TeisokuKyori / IdoSokudo

                        this.setSpeedData(Kasokudo / 9.8, this.byAccelerationTime.time, Math.max(TeisokuJikan * 1000, 0))
                },
                async countByAcceleration() {
                    let Stroke = this.data.distance / 1000
                    let Kasokudo = this.byAcceleration.acceleration * 9.8
                    let IdoSokudo = this.byAcceleration.speed / 1000
                    let KasokuKyori = IdoSokudo * IdoSokudo / Kasokudo / 2
                    if (KasokuKyori * 2 > Stroke) {
                        KasokuKyori = Stroke / 2
                        let KasokuJikan = (2 * KasokuKyori / Kasokudo) ^ 0.5
                        let ToutatsuSokudo = Kasokudo * KasokuJikan

                        this.setSpeedData(Kasokudo / 9.8, KasokuJikan * 1000)
                    } else {
                        let KasokuJikan = IdoSokudo / Kasokudo
                        let ToutatsuSokudo = IdoSokudo
                        let TeisokuKyori = Stroke - 2 * KasokuKyori

                        let TeisokuJikan = TeisokuKyori / ToutatsuSokudo

                        this.setSpeedData(Kasokudo / 9.8, KasokuJikan * 1000, TeisokuJikan * 1000)
                    }
                },
                setSpeedData(acceleration = 0, acceleration_time = 0, constant_time = 0) {
                    this.data.acceleration = acceleration;
                    this.data.acceleration_time = acceleration_time;
                    this.data.constant_time = constant_time;
                }
            }
        }).mount('#app')
    </script>
@endsection
