@extends('Backstage.layouts')
@section('content')
    <div id="app">
        @include('Backstage.component.title')
        <a href="{{ route('createProductPage') }}">
            <button type="submit" class="btn btn-success">新增</button>
        </a>
        <br>
        <br>
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">站台</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <select class="form-control" onchange="location = this.value;">
                    <option value="{{ route('product-admin') }}" selected>全選
                    </option>
                    <option value="{{ route('product-admin', ['site' => 'zh']) }}" {{ $site === 'zh' ? 'selected' : '' }}>
                        中文站
                    </option>
                    <option value="{{ route('product-admin', ['site' => 'en']) }}" {{ $site === 'en' ? 'selected' : '' }}>
                        英文站
                    </option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-lg-12">
                @foreach ($items as $item)
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">{{ $item['name'] }}</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <img id="demo-img" class="img-fluid" style="max-width: 10%;height:10%;"
                                        src="{{ $item['image'] }}">
                                </div>
                            </div>


                            <div class="row justify-content-end">
                                <a href="{{ route('editProductPage', ['id' => $item['id']]) }}">
                                    <button type="submit" class="btn btn-primary">修改</button>
                                </a>
                                <button onclick="drop({{ $item['id'] }})" type="submit"
                                    class="btn btn-danger">刪除</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
    <script src="{{ asset('Backstage/js/product.js') }}"></script>
@endsection
