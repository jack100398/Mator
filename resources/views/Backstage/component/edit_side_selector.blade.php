<div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">站台</h6>
    </div>
    <!-- Card Body -->
    <div class="card-body">
        <select class="form-control" v-model="data.site">
            <option value="0" disabled selected>請選擇</option>
            <option value="zh">中文站</option>
            <option value="en">英文站</option>
        </select>
    </div>
</div>
