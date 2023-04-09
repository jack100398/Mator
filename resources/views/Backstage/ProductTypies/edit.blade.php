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
                        <h6 class="m-0 font-weight-bold text-primary">名稱</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <input type="text" v-model="data.name" class="form-control" placeholder="請輸入名稱" aria-label="power"
                            aria-describedby="basic-addon1">
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">站台</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <select class="form-control" v-model="data.site">
                            <option value="0" disabled selected>請選擇</option>
                            <option value="zh">中文站</option>
                            <option value="en">英文站</option>
                        </select>
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">類別圖示</h6>
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
                        <h6 class="m-0 font-weight-bold text-primary">首頁圖示</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <img id="demo-img" class="img-fluid" style="max-width: 50%;height:auto;" :src="data.index_image">
                        <input id="index-image" class="file" type="file" multiple data-min-file-count="1">
                        <button type="submit" class="btn btn-primary pull-right"
                            v-on:click="upload('index-image')">上傳</button>
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">上Banner</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <img id="demo-img" class="img-fluid" style="max-width: 50%;height:auto;" :src="data.page_banner">
                        <input id="page_banner" class="file" type="file" multiple data-min-file-count="1">
                        <button type="submit" class="btn btn-primary pull-right"
                            v-on:click="upload('page_banner')">上傳</button>
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">中Banner</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <img id="demo-img" class="img-fluid" style="max-width: 50%;height:auto;" :src="data.type_banner">
                        <input id="type_banner" class="file" type="file" multiple data-min-file-count="1">
                        <button type="submit" class="btn btn-primary pull-right"
                            v-on:click="upload('type_banner')">上傳</button>
                    </div>
                </div>


                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">影片連結</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <input type="text" v-model="data.video" class="form-control" placeholder="請輸入連結"
                            aria-label="power" aria-describedby="basic-addon1">
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">備註</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <textarea v-model="data.remark" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <button v-show="data.id > 0" type="button" class="btn btn-success" v-on:click="update">修改</button>
            <button v-show="data.id === 0" type="button" class="btn btn-primary" v-on:click="create">建立</button>
        </div>
    </div>
    <script src="{{ asset('Backstage/js/product_type.js') }}"></script>
    <script>
        const {
            createApp
        } = Vue
        createApp({
            data() {
                return {
                    data: {
                        id: {{ $id }},
                        name: null,
                        page_banner: null,
                        type_banner: null,
                        image: null,
                        video: null,
                        remark: null,
                        en_remark: null,
                        index_image: null
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
