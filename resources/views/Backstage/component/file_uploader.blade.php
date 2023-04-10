<div class="col-xl-12 col-lg-12">
    <div class="card shadow mb-4 mr-4 col-xl-6 col-lg-6" style="float:left;height:300px">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">{{ $title }}</h6>
            <img id="demo-img" v-show="{{ $vue_name }} !== null && {{ $vue_name }} !== ''" class="img-fluid"
                style="max-width: 50px;height:50px" src="{{ asset('Frontstage/images/pdf.svg') }}">
        </div>
        <div class="card-body">
            <h4>檔案網址</h4>
            <input type="text" v-model="{{ $vue_name }}" class="form-control" placeholder="{{ $title }}網址"
                aria-label="power" aria-describedby="basic-addon1">
            <hr>
            <h4>檔案名稱</h4>
            <input type="text" v-model="{{ $vue_name }}_name" class="form-control"
                placeholder="{{ $title }}名稱" aria-label="power" aria-describedby="basic-addon1">
        </div>
    </div>

    <div class="card shadow mb-4 col-xl-5 col-lg-5" style="float:left;height:300px">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">{{ $title }} 檔案上傳</h6>
        </div>
        <div class="card-body">
            <input id="{{ $name }}" class="file" type="file" multiple data-min-file-count="1">
            <button type="submit" class="btn btn-primary pull-right"
                v-on:click="upload('{{ $name }}')">上傳</button>
        </div>
    </div>
</div>
