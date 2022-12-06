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
                        <h1 class="h1 mb-0 text-gray-800">商品管理</h1>
                    </div>

                    <!-- Content Row -->

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h3 class="h3 mb-0 text-gray-800">新增商品</h1>
                    </div>

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
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
                                        <span class="input-group-text" id="basic-addon1">品名</span>
                                      </div>
                                      <input type="text" id="commodity-name" class="form-control" placeholder="請輸入產品名稱" aria-label="name" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">額定動力</span>
                                      </div>
                                      <input type="text" id="commodity-power" class="form-control" placeholder="請輸入額定動力" aria-label="power" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">暫代</span>
                                      </div>
                                      <input type="text" class="form-control" placeholder="請輸入暫代" aria-label="power" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">暫代</span>
                                      </div>
                                      <input type="text" class="form-control" placeholder="請輸入暫代" aria-label="power" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">暫代</span>
                                      </div>
                                      <input type="text" class="form-control" placeholder="請輸入暫代" aria-label="power" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">暫代</span>
                                      </div>
                                      <input type="text" class="form-control" placeholder="請輸入暫代" aria-label="power" aria-describedby="basic-addon1">
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">附圖</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <img id="demo-img" class="img-thumbnail">
                                    <input id="uploadImg" class="file" type="file" multiple data-min-file-count="1">
                                    <button type="submit" class="btn btn-primary pull-right" id="img-upload">上傳</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-end">
                        <button type="button" class="btn btn-success" onclick="createCommodity()">新增</button>
                    </div>

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h3 class="h3 mb-0 text-gray-800">商品</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        @include('component.card')
                        @include('component.card')
                        @include('component.card')
                        @include('component.card')
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