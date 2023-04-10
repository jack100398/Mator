@extends('Backstage.layouts')
@section('content')
    <div id="app">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h1 mb-0 text-gray-800">商品管理</h1>
        </div>
        <!-- Content Row -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h3 class="h3 mb-0 text-gray-800">編輯商品</h1>
        </div>
        <div class="row">
            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">產品資訊</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">*型號</span>
                            </div>
                            <input type="text" v-model="data.name" class="form-control" placeholder="請輸入型號"
                                aria-label="name" aria-describedby="basic-addon1">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">產品類別</span>
                            </div>
                            <input type="text" v-model="data.type" class="form-control" placeholder="請輸入產品類別"
                                aria-label="name" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">*解析度</span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="resolution" id="inlineRadio1"
                                        checked v-model="data.resolution" value="0.0001">
                                    <label class="form-check-label" for="inlineRadio1">0.1um</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="resolution" id="inlineRadio2"
                                        v-model="data.resolution" value="0.001">
                                    <label class="form-check-label" for="inlineRadio2">1um</label>
                                </div>
                            </div>
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">*直線尺型式</span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="linear_ruler" id="inlineRadio1"
                                        checked v-model="data.linear_ruler" value="0">
                                    <label class="form-check-label" for="inlineRadio1">增量</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="linear_ruler" id="inlineRadio2"
                                        v-model="data.linear_ruler" value="1">
                                    <label class="form-check-label" for="inlineRadio2">絕對</label>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">額定推力</span>
                            </div>
                            <input type="number" v-model="data.rated_thrust" class="form-control" placeholder="請輸入額定動力"
                                aria-label="power" aria-describedby="basic-addon1">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">加速推力</span>
                            </div>
                            <input type="number" v-model="data.acceleration_thrust" class="form-control"
                                placeholder="請輸入加速推力" aria-label="power" aria-describedby="basic-addon1">

                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">額定電流</span>
                            </div>
                            <input type="number" v-model="data.rated_current" class="form-control" placeholder="請輸入額定電流"
                                aria-label="power" aria-describedby="basic-addon1">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">加速電流</span>
                            </div>
                            <input type="number" v-model="data.acceleration_current" class="form-control"
                                placeholder="請輸入加速電流" aria-label="power" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">最大加速度</span>
                            </div>
                            <input type="number" v-model="data.max_acceleration" class="form-control"
                                placeholder="請輸入最大加速度" aria-label="power" aria-describedby="basic-addon1">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">最大速度</span>
                            </div>
                            <input type="number" v-model="data.max_speed" class="form-control" placeholder="請輸入最大速度"
                                aria-label="power" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">重複定位精準度</span>
                            </div>
                            <input type="number" v-model="data.accuracy" class="form-control" placeholder="請輸入重複定位精準度"
                                aria-label="power" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">*水平最大荷重</span>
                            </div>
                            <input type="number" v-model="data.horizontal_load" class="form-control"
                                placeholder="請輸入水平最大荷重" aria-label="power" aria-describedby="basic-addon1">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">*壁掛(垂直)最大荷重</span>
                            </div>
                            <input type="number" v-model="data.vertical_load" class="form-control"
                                placeholder="請輸入壁掛最大荷重" aria-label="power" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">*行程(雙滑軌)</span>
                            </div>
                            <input type="number" v-model="data.travel" class="form-control" placeholder="請輸入行程"
                                aria-label="power" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">電源電壓</span>
                            </div>
                            <input disabled="disabled" type="number" v-model="data.voltage" class="form-control"
                                placeholder="請輸入電源電壓" aria-label="power" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">使用環境溫度</span>
                            </div>
                            <input type="number" v-model="data.ambient_temperature" class="form-control"
                                placeholder="請輸入使用環境溫度" aria-label="power" aria-describedby="basic-addon1">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">使用環境濕度</span>
                            </div>
                            <input type="number" v-model="data.environment_humidity" class="form-control"
                                placeholder="請輸入使用環境濕度" aria-label="power" aria-describedby="basic-addon1">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">保存溫度</span>
                            </div>
                            <input type="number" v-model="data.storage_temperature" id="commodity-power"
                                class="form-control" placeholder="請輸入使用保存溫度" aria-label="power"
                                aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">*逆起電力定数 （V/m/s）</span>
                            </div>
                            <input type="number" v-model="data.Siemens" class="form-control" placeholder="請輸入導抗"
                                aria-label="power" aria-describedby="basic-addon1">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">*電阻值</span>
                            </div>
                            <input type="number" v-model="data.ohm" class="form-control" placeholder="請輸入電阻值"
                                aria-label="power" aria-describedby="basic-addon1">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">*推力定數</span>
                            </div>
                            <input type="number" v-model="data.force_constant" id="commodity-power"
                                class="form-control" placeholder="請輸入推力定數" aria-label="power"
                                aria-describedby="basic-addon1">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">*可動子重量(公斤力)</span>
                            </div>
                            <input type="number" v-model="data.kgf" id="commodity-power" class="form-control"
                                placeholder="請輸入可動子重量" aria-label="power" aria-describedby="basic-addon1">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">*熱抗</span>
                            </div>
                            <input type="number" v-model="data.heat_resistance" id="commodity-power"
                                class="form-control" placeholder="請輸入熱抗" aria-label="power"
                                aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">備註</label>
                            <textarea v-model="data.remark" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-xl-12 col-lg-12">
                @include('Backstage.component.commodity_pic', [
                    'title' => '產品圖片 (寬720*高280)',
                    'vue_name' => 'data.picture_one',
                    'name' => 'picture_one',
                ])

                @include('Backstage.component.commodity_pic', [
                    'title' => 'F-V曲線圖 (寬900*高670)',
                    'vue_name' => 'data.picture_two',
                    'name' => 'picture_two',
                ])

                @include('Backstage.component.commodity_pic', [
                    'title' => '重複定位精準度 (寬900*高670)',
                    'vue_name' => 'data.picture_three',
                    'name' => 'picture_three',
                ])

                @include('Backstage.component.commodity_pic', [
                    'title' => '加速度與荷重關係圖 (寬900*高670)',
                    'vue_name' => 'data.picture_four',
                    'name' => 'picture_four',
                ])

                @include('Backstage.component.file_uploader', [
                    'title' => '中文站pdf',
                    'vue_name' => 'data.pdf',
                    'name' => 'pdf',
                ])

                @include('Backstage.component.file_uploader', [
                    'title' => '英文站pdf',
                    'vue_name' => 'data.en_pdf',
                    'name' => 'en_pdf',
                ])

            </div>
        </div>
        <div class="row justify-content-end">
            <button v-show="data.id > 0" type="button" class="btn btn-success" v-on:click="update">修改</button>
            <button v-show="data.id === 0" type="button" class="btn btn-primary" v-on:click="create">建立</button>
        </div>
    </div>
    <script src="{{ asset('Backstage/js/commodity.js') }}"></script>
    <script>
        window._asset = '{{ asset('') }}';
        const {
            createApp
        } = Vue
        createApp({
            data() {
                return {
                    data: {
                        id: {{ $id }},
                        name: null,
                        type: null,
                        resolution: 0.0001, //解析度
                        rated_thrust: null, //額定推力
                        acceleration_thrust: null, //加速推力
                        rated_current: null, //額定電流
                        acceleration_current: null, //加速電流
                        max_acceleration: null, //最大加速度
                        max_speed: null, //最大速度
                        accuracy: null, //重複定位精準度
                        voltage: 220, //電源電壓
                        ambient_temperature: null, //環境溫度
                        environment_humidity: null, //環境濕度
                        storage_temperature: null, //保存溫度
                        remark: null, //備註
                        Siemens: null, //導抗
                        ohm: null, //阻抗
                        force_constant: null, // 推力定數
                        kgf: null, //可動子重量(公斤力)
                        heat_resistance: null, //熱抗
                        picture_one: null, //附圖
                        picture_two: null, //附圖
                        picture_three: null, //附圖
                        picture_four: null, //附圖
                        linear_ruler: 0, //直線尺形式(0:增量,1:絕對)
                        pdf: null,
                        en_pdf: null,
                        horizontal_load: null,
                        vertical_load: null,
                    },
                }
            },
            mounted: async function() {
                if (this.data.id !== 0) {
                    await this.getItem();
                }
            },
            methods: {
                async upload(item) {
                    var url = document.location.origin + '/' + await uploadImage(item);

                    this.data[item] = url;
                },
                async getItem() {
                    await getItem(this.data.id)
                        .then(res => {
                            this.data = res;
                        })
                        .catch(err => {
                            alert('發生錯誤,請聯繫系統管理員');
                        })
                },
                async update(id) {
                    updateModel(this.data)
                },

                async create() {
                    createModel(this.data)
                },
            }
        }).mount('#app')
    </script>
@endsection
