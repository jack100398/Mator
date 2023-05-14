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
                                <option value="{{ $type['id'] }}">{{ $type['admin_select_name'] }}</option>
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
                        <h6 class="m-0 font-weight-bold text-primary">產品圖片 (圖片使用像素：寬700*高500 / 解析度72dpi)</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <img id="demo-img" class="img-fluid" style="max-width: 50%;height:auto;" :src="data.image">
                        <input id="image" class="file" type="file" multiple data-min-file-count="1">
                        <button type="submit" class="btn btn-primary pull-right" v-on:click="upload('image')">上傳</button>
                    </div>
                </div>

                {{-- <div class="card shadow mb-4">
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
                </div> --}}

                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">檔案</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <img v-show="data.pdf !== null && data.pdf !== ''" id="demo-img" class="img-fluid"
                            style="max-width: 50px;height:50px" src="{{ asset('Frontstage/images/pdf.svg') }}">
                    </div>
                    <div class="card-body">
                        檔案連結
                        <input type="text" v-model="data.pdf" class="form-control" placeholder="" aria-label="power"
                            aria-describedby="basic-addon1">
                        <hr>
                        檔案名稱
                        <input type="text" v-model="data.pdf_name" class="form-control" placeholder="" aria-label="power"
                            aria-describedby="basic-addon1">
                    </div>
                    <div class="card-body">
                        <input id="pdf" class="file" type="file" multiple data-min-file-count="1">
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
                        <h6 class="m-0 font-weight-bold text-primary">備註說明(簡介)</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <textarea v-model="data.remark" class="form-control" id="exampleFormControlTextarea1" rows="5"
                            placeholder="該類別簡易介紹，簡單70字數內即可，讓瀏覽者更加了解該分類內容產品，至多兩排文字介紹，每排約35個字數..."></textarea>
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">產品說明</h6>
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
    <script src="{{ asset('Backstage/js/product.js') }}"></script>
    <script>
        $(document).ready(function() {
            var gArrayFonts = ['標楷體', '新細明體', '微軟正黑體'];
            $('#summernote').summernote({
                placeholder: '產品說明',
                tabsize: 2,
                height: 300,
                fontNames: gArrayFonts,
                fontNamesIgnoreCheck: gArrayFonts,
                toolbar: [
                    ['style', ['clear', 'bold', 'italic', 'underline']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['fontsize', ['fontsize']], //字型大小    
                    ['table', ['table']], //插入表格 
                    ['hr', ['hr']], //插入水平線  
                    ['link', ['link']], //插入連結  
                    ['picture', ['picture']], //插入圖片  
                    ['video', ['video']], //插入視訊
                    ['view', ['codeview']],
                ],
                callbacks: {
                    onImageUpload: async function(files) {
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
                        pdf_name: 'file_name',
                        acting: null
                    },
                }
            },
            mounted: async function() {
                if (this.data.id !== 0) {
                    await this.getItem();
                    $('#summernote').summernote('code', this.data.introduction);
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
                    this.data.introduction = $('#summernote').summernote('code');
                    updateModel(this.data)
                },

                async create() {
                    this.data.introduction = $('#summernote').summernote('code');
                    createModel(this.data)
                },
            }
        }).mount('#app')
    </script>
@endsection
