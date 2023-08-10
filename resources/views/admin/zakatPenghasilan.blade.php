@extends('admin/template/navbar')

@section('contentadm')
    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="overview-wrap">
                                <h2 class="title-1">Data Zakat Penghasilan</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <a href="{{ url('/') }}/bayarzakat" class="au-btn au-btn-icon au-btn--blue">
                                <i class="zmdi zmdi-plus"></i>add Donasi</a>
                        </div>
                    </div>
                    @if ($message = Session::get('pesan'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            {{ $message }}
                        </div>
                    @endif
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg bg-light p-4 rounded">
                                    <div class="table-responsive m-b-40">
                                        <table id="example" class="table table-borderless table-data3">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Tanggal Masuk</th>
                                                    <th>Nama Donatur</th>
                                                    <th>No Hp</th>
                                                    <th>Total donasi</th>
                                                    <th>Bukti Donasi</th>
                                                    <th>Status Validasi</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-secondary">
                                                @foreach ($data as $item)
                                                    @if ($item->nmzakat == 'Zakat Penghasilan')
                                                        <tr>
                                                            <td scope="row">{{ $no++ }}</td>
                                                            <td>{{ $item->updated_at }}</td>
                                                            <td>{{ $item->namadonatur }}</td>
                                                            <td>{{ $item->noteldonatur }}</td>
                                                            <td>{{ $item->nominal }}</td>
                                                            <td><img src="storage/{{ $item->foto }}" width="150px" />
                                                            </td>
                                                            @if ($item->status == 'Diterima')
                                                                <td><button
                                                                        class="btn btn-success">{{ $item->status }}</button>
                                                                </td>
                                                            @elseif($item->status == 'Ditolak')
                                                                <td><button
                                                                        class="btn btn-danger">{{ $item->status }}</button>
                                                                </td>
                                                            @else
                                                                <td><button
                                                                        class="btn btn-warning">{{ $item->status }}</button>
                                                                </td>
                                                            @endif
                                                            <td><a href="{{ url('/zakat/' . $item->idzakatms . '/edit') }}"
                                                                    class="btn btn-primary">Edit</a></td>
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

        <!-- MAIN CONTENT-->

        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
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
