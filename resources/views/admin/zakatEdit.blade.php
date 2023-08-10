@extends('admin/template/navbar')

@section('contentadm')
    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="col-sm-8">
                        <div class="card">
                            <div class="card-header">
                                <strong>Basic Form</strong> Elements
                            </div>
                            <div class="card-body card-block">
                                <form action="{{ '/zakat/' . $data->idzakatms }}" method="post" enctype="multipart/form-data"
                                    class="form-horizontal">
                                    @csrf
                                    @method('PUT')
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Tanggal</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="tanggal" placeholder="Text"
                                                class="form-control" value="{{ $data->updated_at }}" readonly>
                                            <input type="hidden" id="text-input" name="id" placeholder="Text"
                                                class="form-control" value="{{ $data->iddonasi }}" readonly>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Nama Donatur</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="namadonatur" placeholder="Text"
                                                class="form-control" value="{{ $data->namadonatur }}" readonly>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="email-input" class=" form-control-label">Email</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="email" id="email-input" name="emaildonatur"
                                                placeholder="Enter Email" class="form-control"
                                                value="{{ $data->emaildonatur }}" readonly>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">No Telepon</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="noteldonatur" placeholder="Text"
                                                class="form-control" value="{{ $data->noteldonatur }}" readonly>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Nominal</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="number" id="text-input" name="nominal" placeholder="Text"
                                                class="form-control" value="{{ $data->nominal }}" readonly>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">No Telepon</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="kelamin" placeholder="Text"
                                                class="form-control" value="{{ $data->kelamin }}" readonly>
                                            <input type="text" id="text-input" name="jenis" placeholder="Text"
                                                class="form-control" value="{{ $data->idzakat }}" readonly>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Gambar</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <img src="{{ url('/') }}/storage/{{ $data->foto }}" />
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="select" class=" form-control-label">Pilih Status</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="status" id="select" class="form-control">
                                                <option value="">Please select</option>
                                                <option value="Diterima">Diterima</option>
                                                <option value="Ditolak">Ditolak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Update
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </form>
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
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
    @endsection
