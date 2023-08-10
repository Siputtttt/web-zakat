@extends('admin/template/navbar')

@section('contentadm')
    <!-- PAGE CONTAINER-->
    <div class="page-container">


        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="overview-wrap">
                                <h2 class="title-1">Data Saran Masuk</h2>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('pesan'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            {{ $message }}
                        </div>
                    @endif
                    <div class="row mt-3">
                        <div class="col-lg bg-light p-4 rounded">
                            <div class="table-responsive m-b-40">
                                <table id="example" class="table table-borderless table-data3" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Subjek</th>
                                            <th>Saran</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $saran)
                                            <tr>
                                                <td scope="row">{{ $no++ }}</td>
                                                <td>{{ $saran->nama }}</td>
                                                <td>{{ $saran->subjek }}</td>
                                                <td>{{ $saran->saran }}</td>
                                                <td>
                                                    <form action="{{ route('saran.destroy', $saran->idsaran) }}"
                                                        method="POST">

                                                        <a class="btn btn-info"
                                                            href="{{ route('saran.show', $saran->idsaran) }}">Show</a>

                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
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
    </div>
@endsection
