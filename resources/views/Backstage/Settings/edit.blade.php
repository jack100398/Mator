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
                        <h6 class="m-0 font-weight-bold text-primary">@{{ data.remark }}設定</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <input type="text" v-model="data.value" class="form-control" placeholder="請輸入設定值" aria-label="power"
                            aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <button type="button" class="btn btn-success" v-on:click="update">修改</button>
        </div>

    </div>
    <script src="{{ asset('Backstage/js/settings.js') }}"></script>
    <script>
        const {
            createApp
        } = Vue
        createApp({
            data() {
                return {
                    data: {
                        id: {{ $id }},
                        remark: null,
                        value: null,
                    },
                }
            },
            mounted: async function() {
                if (this.data.id !== 0) {
                    await this.getItem();
                }
            },
            methods: {
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
            }
        }).mount('#app')
    </script>
@endsection
