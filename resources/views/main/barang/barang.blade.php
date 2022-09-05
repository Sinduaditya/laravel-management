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
            <div class="card p-5 ">
                <div class="card-header">
                    <h3 class="card-title">Barang</h3>
                    <div class="card-tools">
                        <a href="{{ route('item.create') }}" class="btn btn-info">
                            <i class="fas fa-plus-circle">
                            </i>
                            Tambah Barang</a>

                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-default-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped" id="tableBarang">
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
                            @php
                                $i = 0;
                            @endphp
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $item->nama_barang }}</td>
                                    <td>{{ $item->jml_barang }}</td>
                                    <td>{{ $item->penggirim }}</td>
                                    <td>{{ $item->tanggal }}</td>
                                    <td>{{ $item->penerima }}</td>
                                    <td class="project-actions ">
                                        <form action="{{ route('item.destroy', $item->id) }}" method="POST">
                                            <a class="btn btn-primary" href="{{ route('item.edit', $item->id) }}">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    @section('js')
        <!-- DataTables  & Plugins -->
        <script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('lte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('lte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('lte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('lte/plugins/jszip/jszip.min.js') }}"></script>
        <script src="{{ asset('lte/plugins/pdfmake/pdfmake.min.js') }}"></script>
        <script src="{{ asset('lte/plugins/pdfmake/vfs_fonts.js') }}"></script>
        <script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('lte/dist/js/adminlte.min.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('lte/dist/js/demo.js') }}"></script>
        <!-- Page specific script -->
        <script>
            $(function() {
                $("#tableBarang").DataTable({
                    // "searching": true,
                    // "responsive": true,
                    // "lengthChange": false,
                    // "autoWidth": false,
                    "paging": true,
                    "lengthChange": false,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                }).buttons().container().appendTo('#tableBarang_wrapper .col-md-6:eq(0)');
            });
        </script>
    @endsection
</div>
@endsection
