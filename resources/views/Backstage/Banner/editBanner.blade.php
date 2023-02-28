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
                        <h6 class="m-0 font-weight-bold text-primary">@{{ data.remark }} 電腦版</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <img id="demo-img" class="img-fluid" style="max-width: 50%;height:auto;" :src="data.desktop_url">
                        <input id="desktop_url" class="file" type="file" multiple data-min-file-count="1">
                        <button type="submit" class="btn btn-primary pull-right"
                            v-on:click="upload('desktop_url')">上傳</button>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">@{{ data.remark }} 手機版</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <img id="demo-img" class="img-fluid" style="max-width: 50%;height:auto;" :src="data.mobile_url">
                        <input id="mobile_url" class="file" type="file" multiple data-min-file-count="1">
                        <button type="submit" class="btn btn-primary pull-right"
                            v-on:click="upload('mobile_url')">上傳</button>
                    </div>
                </div>

            </div>
        </div>
        <div class="row justify-content-end">
            <button type="button" class="btn btn-success" v-on:click="update">修改</button>
        </div>
    </div>
    <script src="{{ asset('Backstage/js/banner.js') }}"></script>
    <script>
        const {
            createApp
        } = Vue
        createApp({
            data() {
                return {
                    data: {
                        id: {{ $id }},
                        desktop_url: null,
                        mobile_url: null,
                        remark: null,
                    },
                }
            },
            mounted: async function() {
                await this.getBanner();
            },
            methods: {
                async upload(item) {
                    var url = document.location.origin + '/' + await uploadImage(item);

                    this.data[item] = url;
                },
                async getBanner() {
                    await getBanner(this.data.id)
                        .then(res => {
                            this.data = res;
                        })
                        .catch(err => {
                            alert('發生錯誤,請聯繫系統管理員');
                        })
                },
                async update(id) {
                    await sendAjax('patch', 'banner/' + this.data.id, this.data)
                        .then(value => {
                            alert('修改成功');
                            window.location.href = "{{ route('banner') }}"
                        })
                        .catch(error => {
                            alert('修改失敗,請確認資訊使否皆已填入');
                        });
                },
            }
        }).mount('#app')
    </script>
@endsection
