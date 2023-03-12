@extends('Backstage.layouts')
@section('content')
    <div id="app">
        @include('Backstage.component.title')
        <a href="{{ route('createThirdLinkPage') }}">
            <button type="submit" class="btn btn-success">新增</button>
        </a>
        <br>
        <br>

        <div class="row">
            <div class="col-xl-12 col-lg-12">
                @foreach ($links as $link)
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">{{ $link->remark }}</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Banner</h6>
                                </div>
                                <div class="card-body">
                                    <img id="demo-img" class="img-fluid" style="max-width: 10%;height:10%;"
                                        src="{{ $link->image }}">
                                </div>
                            </div>

                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">連結</h6>
                                </div>
                                <div class="card-body">
                                    <a href="{{ $link->url }}" target="_blank">{{ $link->url }}</a>
                                </div>
                            </div>

                            <div class="row justify-content-end">
                                <a href="{{ route('editLinkPage', ['id' => $link->id]) }}">
                                    <button type="submit" class="btn btn-primary">修改</button>
                                </a>
                                <button onclick="dropThirdLink({{ $link->id }})" type="submit"
                                    class="btn btn-danger">刪除</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
    <script src="{{ asset('Backstage/js/third_link.js') }}"></script>
@endsection
