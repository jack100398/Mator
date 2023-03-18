@extends('Backstage.layouts')
@section('content')
    <div id="app">
        @include('Backstage.component.title')
        <div class="row">
            <!-- Pie Chart -->
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">產品類型</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <select class="form-control" v-model="data.type_id">
                            <option value="0" disabled selected>請選擇</option>
                            @foreach ($product_typies as $type)
                                <option value="{{ $type['id'] }}">{{ $type['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">代理商</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <input type="text" v-model="data.acting" class="form-control" placeholder="請輸入代理商"
                            aria-label="power" aria-describedby="basic-addon1">
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">名稱</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <input type="text" v-model="data.name" class="form-control" placeholder="請輸入名稱"
                            aria-label="power" aria-describedby="basic-addon1">
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">產品圖片</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <img id="demo-img" class="img-fluid" style="max-width: 50%;height:auto;" :src="data.image">
                        <input id="image" class="file" type="file" multiple data-min-file-count="1">
                        <button type="submit" class="btn btn-primary pull-right" v-on:click="upload('image')">上傳</button>
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">介紹(數據)圖片</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <img id="demo-img" class="img-fluid" style="max-width: 50%;height:auto;" :src="data.chart_image">
                        <input id="chart_image" class="file" type="file" multiple data-min-file-count="1">
                        <button type="submit" class="btn btn-primary pull-right"
                            v-on:click="upload('chart_image')">上傳</button>
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">pdf</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <img v-show="data.pdf !== null" id="demo-img" class="img-fluid" style="max-width: 50px;height:50px"
                            src="{{ asset('Frontstage/images/pdf.svg') }}">
                        <input id="pdf" class="file" type="file" accept=".pdf" multiple data-min-file-count="1">
                        <button type="submit" class="btn btn-primary pull-right" v-on:click="upload('pdf')">上傳</button>
                    </div>
                </div>


                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">影片連結</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <input type="text" v-model="data.video_url1" class="form-control" placeholder="請輸入連結"
                            aria-label="power" aria-describedby="basic-addon1">
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">影片連結2</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <input type="text" v-model="data.video_url2" class="form-control" placeholder="請輸入連結"
                            aria-label="power" aria-describedby="basic-addon1">
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">影片連結3</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <input type="text" v-model="data.video_url3" class="form-control" placeholder="請輸入連結"
                            aria-label="power" aria-describedby="basic-addon1">
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">影片連結4</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <input type="text" v-model="data.video_url4" class="form-control" placeholder="請輸入連結"
                            aria-label="power" aria-describedby="basic-addon1">
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">特色說明</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <textarea v-model="data.features" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">備註說明</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <textarea v-model="data.remark" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">簡介</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <textarea v-model="data.introduction" class="form-control"id="exampleFormControlTextarea1" rows="5"></textarea>
                    </div>
                </div>

            </div>
        </div>
        <div class="row justify-content-end">
            <button v-show="data.id > 0" type="button" class="btn btn-success" v-on:click="update">修改</button>
            <button v-show="data.id === 0" type="button" class="btn btn-primary" v-on:click="create">建立</button>
        </div>
    </div>
    <script src="{{ asset('Backstage/js/product.js') }}"></script>
    <script>
        const {
            createApp
        } = Vue
        createApp({
            data() {
                return {
                    data: {
                        id: {{ $id }},
                        type_id: 0,
                        image: null,
                        features: null,
                        remark: null,
                        introduction: null,
                        chart_image: null,
                        video_url1: null,
                        video_url2: null,
                        video_url3: null,
                        video_url4: null,
                        pdf: null,
                        acting: null
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
