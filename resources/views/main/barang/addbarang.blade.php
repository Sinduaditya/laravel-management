@extends('admin.panel')
@section('content')
    <section class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tambah Barang</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('item.index') }}">Barang Masuk</a></li>
                            <li class="breadcrumb-item active">Tambah Barang</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card ">
            <div class="card-header">
                <h3 class="card-title">Tambah Barang</h3>
            </div>
            <form action="{{ route('item.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="txtNamaBarang">Nama Barang&nbsp;:</label>
                        <input type="text" class="form-control" id="txtNamaBarang" placeholder="Masukkan Nama Barang"
                            name="txtNamaBarang">
                    </div>
                    <div class="form-group">
                        <label for="txtJumlahBarang">Jumlah Barang&nbsp;:</label>
                        <input type="number" class="form-control" id="txtJumlahBarang" name="txtJumlahBarang"
                            placeholder="Masukkan Jumlah Barang">
                    </div>
                    <div class="form-group">
                        <label for="txtPenggirim">Nama Penggirim&nbsp;:</label>
                        <input type="text" class="form-control" id="txtPenggirim" name="txtPenggirim"
                            placeholder="Masukkan Nama Penggirim">
                    </div>
                    <div class="form-group">
                        <label for="txtTanggal">Masukkan Tanggal&nbsp;:</label>
                        <input type="date" class="form-control" name="txtTanggal" id="txtTanggal"
                            placeholder="Masukkan Tanggal Masuk Gudang">
                    </div>
                    <div class="form-group">
                        <label for="txtPenerima">Nama Penerima&nbsp;:</label>
                        <input type="text" name="txtPenerima" class="form-control" id="txtPenerima"
                            placeholder="Masukkan Nama Penerima">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </section>
@endsection
