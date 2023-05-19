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
                        <input type="text" v-model="data.remark" class="form-control" placeholder="請輸入名稱" aria-label="power"
                            aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Banner (圖片使用像素：寬260*高105 / 解析度72dpi)</h6>
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
                        <h6 class="m-0 font-weight-bold text-primary">連結</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <input type="text" v-model="data.url" class="form-control" placeholder="請輸入連結" aria-label="power"
                            aria-describedby="basic-addon1">
                    </div>
                </div>

            </div>
        </div>
        <div class="row justify-content-end">
            <button v-show="data.id > 0" type="button" class="btn btn-success" v-on:click="update">修改</button>
            <button v-show="data.id === 0" type="button" class="btn btn-primary" v-on:click="create">建立</button>
        </div>
    </div>
    <script src="{{ asset('Backstage/js/third_link.js') }}"></script>
    <script>
        const {
            createApp
        } = Vue
        createApp({
            data() {
                return {
                    data: {
                        id: {{ $id }},
                        image: null,
                        remark: null,
                    },
                }
            },
            mounted: async function() {
                if (this.data.id !== 0) {
                    await this.getThirdLink();
                }
            },
            methods: {
                async upload(item) {
                    var url = document.location.origin + '/' + await uploadImage(item);

                    this.data[item] = url;
                },
                async getThirdLink() {
                    await getThirdLink(this.data.id)
                        .then(res => {
                            this.data = res;
                        })
                        .catch(err => {
                            alert('發生錯誤,請聯繫系統管理員');
                        })
                },
                async update(id) {
                    await sendAjax('patch', 'third/' + this.data.id, this.data)
                        .then(value => {
                            alert('修改成功');
                            window.location.href = "{{ route('third') }}"
                        })
                        .catch(error => {
                            alert('修改失敗,請確認資訊使否皆已填入');
                        });
                },

                async create(id) {
                    await sendAjax('post', 'third', this.data)
                        .then(value => {
                            alert('新增成功');
                            window.location.href = "{{ route('third') }}"
                        })
                        .catch(error => {
                            alert('修改失敗,請確認資訊使否皆已填入');
                        });
                },
            }
        }).mount('#app')
    </script>
@endsection
