@extends('Backstage.layouts')
@section('content')
    <div id="app">
        @include('Backstage.component.title')
        <a href="{{ route('createSliderImagePage') }}">
            <button type="submit" class="btn btn-success">新增</button>
        </a>
        <br>
        <br>

        <div class="row">
            <div class="col-xl-12 col-lg-12">
                @foreach ($items as $item)
                    <div class="card shadow mb-4">
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <img id="demo-img" class="img-fluid" style="max-width: 10%;height:10%;"
                                        src="{{ $item['desktop_image'] }}">
                                </div>
                                <div class="card-body">
                                    <img id="demo-img" class="img-fluid" style="max-width: 10%;height:10%;"
                                        src="{{ $item['mobile_image'] }}">
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <a href="{{ route('editSliderImagePage', ['id' => $item['id']]) }}">
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
    <script src="{{ asset('Backstage/js/product_type.js') }}"></script>
@endsection
