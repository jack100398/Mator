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
                        <h6 class="m-0 font-weight-bold text-primary">文章類別</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <input type="text" v-model="data.type" class="form-control" placeholder="請輸入文章類別" aria-label="power"
                            aria-describedby="basic-addon1">
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">名稱</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <input type="text" v-model="data.title" class="form-control" placeholder="請輸入名稱"
                            aria-label="power" aria-describedby="basic-addon1">
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">貼文時間</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <input type="text" v-model="data.created_at" class="form-control" placeholder="請輸入貼文時間"
                            aria-label="power" aria-describedby="basic-addon1">
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">標題圖片</h6>
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
                        <h6 class="m-0 font-weight-bold text-primary">簡介</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <input type="text" v-model="data.introduction" class="form-control" placeholder="請輸入簡介"
                            aria-label="power" aria-describedby="basic-addon1">
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">文章內容</h6>
                    </div>
                    <!-- Card Body -->
                    <div id="summernote">
                    </div>
                </div>

            </div>
        </div>
        <div class="row justify-content-end">
            <button v-show="data.id > 0" type="button" class="btn btn-success" v-on:click="update">修改</button>
            <button v-show="data.id === 0" type="button" class="btn btn-primary" v-on:click="create">建立</button>
        </div>

    </div>
    <script src="{{ asset('Backstage/js/news.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: '貼文內容',
                tabsize: 2,
                height: 600,
                callbacks: {
                    onImageUpload: async function(files) {
                        console.log(files);
                        var url = document.location.origin + '/' + await uploadImageByNote(files[0]);
                        $('#summernote').summernote('insertImage', url, 'newimage');
                    },
                }
            });
        });

        const {
            createApp
        } = Vue
        createApp({
            data() {
                return {
                    data: {
                        id: {{ $id }},
                        title: null,
                        type: null,
                        image: null,
                        text: null,
                        introduction: null,
                        created_at: null,
                    },
                }
            },
            mounted: async function() {
                if (this.data.id !== 0) {
                    await this.getItem();
                    $('#summernote').summernote('code', this.data.text);
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
                    this.data.text = $('#summernote').summernote('code');
                    updateModel(this.data)
                },

                async create() {
                    this.data.text = $('#summernote').summernote('code');
                    createModel(this.data)
                },
            }
        }).mount('#app')
    </script>
@endsection
