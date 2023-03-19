@extends('Backstage.layouts')
@section('content')
    <div id="app">
        @include('Backstage.component.title')
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                @foreach ($banners as $banner)
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">{{ $banner['remark'] }} - {{ $banner['site'] }}
                            </h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">電腦</h6>
                                </div>
                                <div class="card-body">
                                    <img id="demo-img" class="img-fluid" style="max-width: 10%;height:10%;"
                                        src="{{ $banner['desktop_url'] }}">
                                </div>
                            </div>

                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">手機版</h6>
                                </div>
                                <div class="card-body">
                                    <img id="demo-img" class="img-fluid" style="max-width: 10%;height:10%;"
                                        src="{{ $banner['mobile_url'] }}">
                                </div>
                            </div>

                            <div class="row justify-content-end">
                                <a href="{{ route('editBannerPage', ['id' => $banner['id']]) }}">
                                    <button type="submit" class="btn btn-primary">修改</button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    @endsection
