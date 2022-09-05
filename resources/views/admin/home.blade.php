    @extends('admin.panel')

    @section('content')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-6 col 6">
                            <div class="small-box bg-gradient-secondary">
                                <div class="inner">
                                    <h3>3</h3>
                                    <p>Barang Masuk</p>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-cart-plus"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col 6">
                            <div class="small-box bg-gradient-primary">
                                <div class="inner">
                                    <h3>3</h3>
                                    <p>Barang Keluar</p>
                                </div>
                                <div class="icon">
                                    <i class="fas-solid fas fa-box-open"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                    <!-- Main row -->
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    @endsection

    {{-- @extends('admin.footer') --}}
