<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        <div>
                            {{ "型號:$name" }}
                        </div>
                        <div class="dropdown no-arrow pull-right">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">商品選項:</div>
                                <a class="dropdown-item" onclick="dropCommodities({{ $id }})">刪除</a>
                                <a class="dropdown-item" href="{{ route('editCommodityPage', ['id' => $id]) }}">編輯</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <img src="{{ $src }}" alt="" class="img-thumbnail">
                </div>
            </div>
        </div>
    </div>
</div>
