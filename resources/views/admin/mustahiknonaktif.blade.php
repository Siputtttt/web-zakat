@extends('admin/template/navbar')

@section('contentadm')
    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    @if ($message = Session::get('pesan'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            {{ $message }}
                        </div>
                    @endif
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <a href="{{ url('/mustahik/create') }}" class="au-btn au-btn-icon au-btn--blue">
                                <i class="zmdi zmdi-plus"></i>add Mustahik</a>
                        </div>
                    </div>
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg bg-light p-4 rounded">
                                    <div class="table-responsive m-b-40">
                                        <table id="example" class="table table-borderless table-data3">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Alamat</th>
                                                    <th>Notel</th>
                                                    <th>Kategori</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $item)
                                                    @if ($item->statusmustahik == 'Non-Aktif')
                                                        <tr>
                                                            <td scope="row">{{ $no++ }}</td>
                                                            <td>{{ $item->namamustahik }}</td>
                                                            <td>{{ $item->alamatmustahik }}</td>
                                                            <td>{{ $item->notelmustahik }}</td>
                                                            <td>{{ $item->kategorimustahik }}</td>
                                                            <td><button
                                                                    class="btn btn-success">{{ $item->statusmustahik }}</button>
                                                            </td>
                                                            <td>
                                                                <a href="{{ url('/mustahik/' . $item->idmustahik . '/edit') }}"
                                                                    class="btn btn-primary">Edit</a>
                                                                <a href="{{ url('/mustahik/' . $item->idmustahik . '/destroy') }}"
                                                                    class="btn btn-danger">Hapus</a>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $.noConflict();
            $('#example').DataTable();
        });
    </script>
@endsection
