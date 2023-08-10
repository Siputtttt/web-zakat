@extends('template/navbar') @section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center" style="background-image: url('');">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2>Kontak</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container pt-5">
                @if ($message = Session::get('pesan'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        {{ $message }}
                    </div>
                @endif
                <div class="my-5 justify-content-center">
                    <div class="card">
                        <div class="card-header">Saran & Masukan</div>
                        <div class="card-body m-4">
                            <div class="card-title">
                                <h3 class="text-center title-2">Form Saran & Masukan</h3>
                            </div>
                            <hr>
                            <form action="simpansaran" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group has-success mt-3 mb-2">
                                    <label for="cc-name" class="control-label mb-1">Masukan Nama</label>
                                    <input id="cc-name" name="nama" type="text" class="form-control cc-name valid"
                                        data-val="true" data-val-required="Please enter the name on card"
                                        autocomplete="cc-name" aria-required="true" aria-invalid="false"
                                        aria-describedby="cc-name-error">
                                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name"
                                        data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group has-success mt-3 mb-2">
                                    <label for="cc-name" class="control-label mb-1">Masukan Subjek</label>
                                    <input id="cc-name" name="subjek" type="text" class="form-control cc-name valid"
                                        data-val="true" data-val-required="Please enter the name on card"
                                        autocomplete="cc-name" aria-required="true" aria-invalid="false"
                                        aria-describedby="cc-name-error">
                                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name"
                                        data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group has-success mt-3 mb-2">
                                    <label for="cc-name" class="control-label mb-1">Masukan saran</label>
                                    <textarea id="cc-name" name="saran" type="textarea" class="form-control cc-name valid" data-val="true"
                                        data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false"
                                        aria-describedby="cc-name-error" cols="30" rows="9"></textarea>

                                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name"
                                        data-valmsg-replace="true"></span>
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
