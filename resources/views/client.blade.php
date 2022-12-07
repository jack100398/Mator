@include('component.head')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        @include('component.sideBar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('component.topBar')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h1 mb-0 text-gray-800">客端DEMO</h1>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-4 col-lg-3">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">產品資訊</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">方向</span>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="vetor" id="inlineRadio1"  checked value="option1">
                                              <label class="form-check-label" for="inlineRadio1">直立</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="vetor" id="inlineRadio2" value="option2">
                                              <label class="form-check-label" for="inlineRadio2">橫立</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">解析度</span>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="hz" id="inlineRadio1" checked value="option1">
                                              <label class="form-check-label" for="inlineRadio1">1um</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="hz" id="inlineRadio2" value="option2">
                                              <label class="form-check-label" for="inlineRadio2">0.1um</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">直線尺型式</span>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="type" id="inlineRadio1" checked value="option1">
                                              <label class="form-check-label" for="inlineRadio1">增量</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="type" id="inlineRadio2" value="option2">
                                              <label class="form-check-label" for="inlineRadio2">絕對</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">參數</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <label for="customRange2" class="form-label">荷重</label>
                                    <input type="range" class="form-range" min="0" max="400" value=0 id="customRange2" oninput="this.nextElementSibling.value = this.value">
                                    <output>0</output>
                                    <label for="customRange2" class="form-label">KG</label>

                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">行程距離</span>
                                      </div>
                                      <input type="text" class="form-control" placeholder="請輸入行程距離" aria-label="power" aria-describedby="basic-addon1">
                                      <div class="input-group-append">
                                        <span class="input-group-text">mm</span>
                                      </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">選擇換算</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="speed_setting" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                          以時間決定
                                        </label>

                                        <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">目標時間</span>
                                          </div>
                                          <input type="text" class="form-control" placeholder="請輸入目標時間" aria-label="power" aria-describedby="basic-addon1">
                                          <div class="input-group-append">
                                            <span class="input-group-text">msec</span>
                                          </div>
                                        </div>
                                        <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">制限速度</span>
                                          </div>
                                          <input type="text" class="form-control" placeholder="請輸入制限速度" aria-label="power" aria-describedby="basic-addon1">
                                          <div class="input-group-append">
                                            <span class="input-group-text">mm/sec</span>
                                          </div>
                                        </div>


                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="speed_setting" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                          以加速度時間決定
                                        </label>
                                        <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">加減速時間</span>
                                          </div>
                                          <input type="text" class="form-control" placeholder="請輸入加減速時間" aria-label="power" aria-describedby="basic-addon1">
                                          <div class="input-group-append">
                                            <span class="input-group-text">msec</span>
                                          </div>
                                        </div>
                                        <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">運轉時間</span>
                                          </div>
                                          <input type="text" class="form-control" placeholder="請輸入運轉時間" aria-label="power" aria-describedby="basic-addon1">
                                          <div class="input-group-append">
                                            <span class="input-group-text">mm/sec</span>
                                          </div>
                                        </div>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="speed_setting" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                          以加速度決定
                                        </label>
                                        <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">加速度</span>
                                          </div>
                                          <input type="text" class="form-control" placeholder="請輸入加速度" aria-label="power" aria-describedby="basic-addon1">
                                          <div class="input-group-append">
                                            <span class="input-group-text">G</span>
                                          </div>
                                        </div>
                                        <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">到達速度</span>
                                          </div>
                                          <input type="text" class="form-control" placeholder="請輸入到達速度" aria-label="power" aria-describedby="basic-addon1">
                                          <div class="input-group-append">
                                            <span class="input-group-text">mm/sec</span>
                                          </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">搜尋結果</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                <div>
                                                    {{"品名:測試"}}
                                                </div>
                                                <div class="dropdown no-arrow pull-right">
                                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                        aria-labelledby="dropdownMenuLink">
                                                        <div class="dropdown-header">商品選項:</div>
                                                        <a class="dropdown-item" onclick="alert('敬請期待')">刪除</a>
                                                        <div class="dropdown-divider"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{'價錢:暫代'}}</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{'資訊:A'}}</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{'資訊:B'}}</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{'介紹:產品介紹'}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <img src="storage/QwGdXNH7KCuoAJQB4IuM2ifB9YZCbw3TvQa7ER5j.jpg" alt="" class="img-thumbnail">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="js/commodity.js"></script>

    <!-- Page level plugins -->
    {{-- <script src="vendor/chart.js/Chart.min.js"></script> --}}

    <!-- Page level custom scripts -->
    {{-- <script src="js/demo/chart-area-demo.js"></script> --}}
    {{-- <script src="js/demo/chart-pie-demo.js"></script> --}}

</body>

</html>