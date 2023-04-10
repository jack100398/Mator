<div class="col-xl-12 col-lg-12">
    <div class="card shadow mb-4 mr-4 col-xl-6 col-lg-6" style="float:left;height:200px">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">{{ $title }}</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <img id="demo-img" class="img-fluid" style="max-width: 100%;height:100%;" :src="{{ $vue_name }}">
        </div>
    </div>
    <div class="card shadow mb-4 col-xl-5 col-lg-5" style="float:left;height:200px">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">{{ $title }} 圖片上傳區</h6>
        </div>
        <div class="card-body">
            <input id="{{ $name }}" class="file" type="file" multiple data-min-file-count="1">
            <button type="submit" class="btn btn-primary pull-right"
                v-on:click="upload('{{ $name }}')">上傳</button>
        </div>
    </div>
</div>
