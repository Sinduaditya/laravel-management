@extends('admin.panel')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Barang</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
                            <li class="breadcrumb-item active">Barang</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Barang</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-tambahbarang">
                            <i class="fas fa-plus-circle">
                            </i>
                            Tambah Barang
                        </button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th>
                                    Kode Barang
                                </th>
                                <th>
                                    Nama Barang
                                </th>
                                <th>
                                    Jumlah Barang
                                </th>
                                <th>
                                    Penggirim
                                </th>
                                <th>
                                    Tanggal
                                </th>
                                <th>
                                    Penerima
                                </th>
                                <th>
                                    Pengaturan
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    <a>
                                        Kulkas 5 Pintu
                                    </a>
                                </td>
                                <td>
                                    50
                                </td>
                                <td>
                                    Sindu Aditya Janadi
                                </td>
                                <td>
                                    <span>24-11-2022</span>
                                </td>
                                <td>
                                    Rosyana
                                </td>
                                <td class="project-actions ">

                                    <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-editbarang"
                                        href="#">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <a class="btn btn-danger swalDefaultWarning btn-sm" href="#">
                                        <i class="fas fa-trash">
                                        </i>
                                        Delete
                                    </a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>




        {{-- MODALASET --}}
        {{-- TAMBAH BARANG --}}
        <div class="modal fade" id="modal-tambahbarang">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <h4 class="modal-title">Tambah Barang</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="kodeBarang">Kode Barang</label>
                                    <input type="text" class="form-control" id="kodeBarang"
                                        placeholder="Masukan Kode Barang">
                                </div>
                                <div class="form-group">
                                    <label for="namaBarang">Nama Barang</label>
                                    <input type="text" class="form-control" id="namaBarang"
                                        placeholder="Masukan Nama Barang">
                                </div>
                                <div class="form-group">
                                    <label for="jumlahBarang">Jumlah Barang</label>
                                    <input type="number" class="form-control" id="jumlahBarang"
                                        placeholder="Masukan Jumlah Barang">
                                </div>
                                <div class="form-group">
                                    <label for="namaPengirim">Nama Pengirim</label>
                                    <input type="text" class="form-control" id="namaPengirim"
                                        placeholder="Masukan Nama Pengirim">

                                </div>
                                <div class="form-group">
                                    <label for="tanggalMasuk">Tanggal Masuk</label>
                                    <input type="date" class="form-control" id="tanggalMasuk">
                                </div>
                                <div class="form-group">
                                    <label for="namaPenerima">Nama Penerima</label>
                                    <input type="text" class="form-control" id="namaPenerima"
                                        placeholder="Masukan Nama Penerima">
                                </div>

                            </div>
                            <!-- /.card-body -->
                        </form>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.content -->
        {{-- EDIT BARANG --}}
        <div class="modal fade" id="modal-editbarang">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h4 class="modal-title">Edit Barang</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="kodeBarang">Kode Barang</label>
                                    <input type="text" class="form-control" id="kodeBarang"
                                        placeholder="Masukan Kode Barang">
                                </div>
                                <div class="form-group">
                                    <label for="namaBarang">Nama Barang</label>
                                    <input type="text" class="form-control" id="namaBarang"
                                        placeholder="Masukan Nama Barang">
                                </div>
                                <div class="form-group">
                                    <label for="jumlahBarang">Jumlah Barang</label>
                                    <input type="number" class="form-control" id="jumlahBarang"
                                        placeholder="Masukan Jumlah Barang">
                                </div>
                                <div class="form-group">
                                    <label for="namaPengirim">Nama Pengirim</label>
                                    <input type="text" class="form-control" id="namaPengirim"
                                        placeholder="Masukan Nama Pengirim">

                                </div>
                                <div class="form-group">
                                    <label for="tanggalMasuk">Tanggal Masuk</label>
                                    <input type="date" class="form-control" id="tanggalMasuk">
                                </div>
                                <div class="form-group">
                                    <label for="namaPenerima">Nama Penerima</label>
                                    <input type="text" class="form-control" id="namaPenerima"
                                        placeholder="Masukan Nama Penerima">
                                </div>

                            </div>
                            <!-- /.card-body -->
                        </form>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </div>
@endsection
