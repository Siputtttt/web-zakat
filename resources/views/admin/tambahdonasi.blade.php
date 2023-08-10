@extends('admin/template/navbar')

@section('contentadm')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center" style="background-image: url('');">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2>Donasi</h2>
                            <p>"Anda memiliki kesempatan untuk membuat perbedaan dalam hidup orang lain. Setiap sumbangan,
                                tidak peduli seberapa kecil, sangat berarti bagi kami. Bergabunglah dengan kami dalam misi
                                ini dengan memberikan donasi Anda hari ini."</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                @if ($message = Session::get('success'))
                    <div class="alert alert-succeess alert-vlock">
                        <strong>{{ $message }}</strong>
                    </div>
                    <img src="images/{{ \session::get('image') }}">[]
                @endif
                <div class=" my-5 d-flex justify-content-center">
                    <div class="card">
                        <div class="card-header">Pembayaran zakat</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Form Donasi</h3>
                            </div>
                            <hr>
                            <form action="simpandonasi" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group mb-3">
                                    <label for="cc-payment" class="control-label mb-1">Nama Zakat</label>
                                    <select class="form-select form-select-sm" id="kode" name="idzakat">
                                        @foreach ($jenis as $row)
                                            <option value="{{ $row->idzakat }}">{{ $row->nmzakat }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group has-success mb-5">
                                    <label for="cc-name" class="control-label mb-1">Masukan Nominal</label>
                                    <input id="cc-name" name="nominal" type="number" class="form-control cc-name valid"
                                        data-val="true" data-val-required="Please enter the name on card"
                                        autocomplete="cc-name" aria-required="true" aria-invalid="false"
                                        aria-describedby="cc-name-error">
                                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name"
                                        data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group has-success mt-3 mb-2">
                                    <label for="cc-name" class="control-label mb-1">Masukan Nama</label>
                                    <input id="cc-name" name="nama" type="text" class="form-control cc-name valid"
                                        data-val="true" data-val-required="Please enter the name on card"
                                        autocomplete="cc-name" aria-required="true" aria-invalid="false"
                                        aria-describedby="cc-name-error">
                                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name"
                                        data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group has-success">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Pilih Kelamin</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="kelamin" id="select" class="form-control">
                                            <option value="Pria">Pria</option>
                                            <option value="Wanita">Wanita</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group has-success mt-3 mb-2">
                                    <label for="cc-name" class="control-label mb-1">No Telp</label>
                                    <input id="cc-name" name="notel" type="number" class="form-control cc-name valid"
                                        data-val="true" data-val-required="Please enter the name on card"
                                        autocomplete="cc-name" aria-required="true" aria-invalid="false"
                                        aria-describedby="cc-name-error">
                                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name"
                                        data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group has-success mt-3 mb-2">
                                    <label for="cc-name" class="control-label mb-1">Email</label>
                                    <input id="cc-name" name="email" type="email" class="form-control cc-name valid"
                                        data-val="true" data-val-required="Please enter the name on card"
                                        autocomplete="cc-name" aria-required="true" aria-invalid="false"
                                        aria-describedby="cc-name-error">
                                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name"
                                        data-valmsg-replace="true"></span>
                                </div>
                                <div class="mb-2 gambar">
                                    <label for="cc-name" class="control-label mb-1">Upload bukti</label>
                                    <input type="file" class="form-control" name="foto" id="foto"
                                        accept=".jpg, .jpeg, .png"
                                        onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                                <div class="mt-3"><img src="" id="output" width="500"></div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Submit </button>
                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Reset </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Breadcrumbs -->
    </main><!-- End #main -->
@endsection
