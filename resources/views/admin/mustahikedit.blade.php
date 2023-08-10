@extends('admin/template/navbar')

@section('contentadm')
    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid justify-content-center">
                    <div class="col-sm-8 ">
                        <div class="card">
                            <div class="card-header">
                                <strong>Form</strong> Tambah Mustahik
                            </div>
                            <div class="card-body card-block">
                                <form action="{{('/mustahik/' . $data->idmustahik)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Nama</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="nama" placeholder="Masukan Nama"
                                                class="form-control" value="{{ $data->namamustahik }}">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Alamat</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="alamat"
                                                placeholder="Masukan Alamat" class="form-control"
                                                value="{{ $data->alamatmustahik }}">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">No Tel</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="number" id="text-input" name="notel" placeholder="08..."
                                                class="form-control" value="{{ $data->notelmustahik }}">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="select" class=" form-control-label">Kategori</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="kategori" id="select" class="form-control">
                                                <option value="">Please select</option>
                                                <option value="Fakir">Fakir</option>
                                                <option value="Miskin">Miskin</option>
                                                <option value="Gharim">Gharim</option>
                                                <option value="Mualaf">Mualaf</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="select" class=" form-control-label">Status</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="status" id="select" class="form-control">
                                                <option value="">Please select</option>
                                                <option value="Aktif">Aktif</option>
                                                <option value="Non-Aktif">Non-Aktif</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Save
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a
                                    href="https://colorlib.com">Colorlib</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
