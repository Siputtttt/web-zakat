@extends('template/navbar')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center" style="background-image: url('');">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2>Zakat</h2>
                            <p>"Anda memiliki kesempatan untuk membuat perbedaan dalam hidup orang lain. Setiap sumbangan,
                                tidak peduli seberapa kecil, sangat berarti bagi kami. Bergabunglah dengan kami dalam misi
                                ini dengan memberikan zakat Anda hari ini."</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="m-5">
                    <div class="btn-group mb-3 d-flex justify-content-center" role="group" aria-label="Basic example">
                        <button type="button" id="btnmal" class="btn btn-primary disabled">Zakat Mal</button>
                        <button type="button" id="btnfitrah" class="btn btn-primary">Zakat Fitrah</button>
                        <button type="button" id="btnpenghasilan" class="btn btn-primary">Zakat Penghasilan</button>
                    </div>
                    <div id="zakatmal" class=" d-flex justify-content-center">
                        <div id="hitungmal" class="col-6">
                            <div class="card">
                                <div class="card-header">
                                    Zakat Mal
                                </div>
                                <div class="card-body">
                                    <div method="" enctype="multipart/form-data">
                                        <div class="form-group has-success mb-2">
                                            <label for="cc-name" class="control-label mb-1"><b>Tunai, tabungan,
                                                    deposito</b></label>
                                            <input id="harta" name="harta" type="text"
                                                class="form-control cc-name valid " value="0">
                                        </div>
                                        <div class="form-group has-success mb-2">
                                            <label for="cc-name" class="control-label mb-1"><b>Kendaraan, rumah, aset
                                                    lain</b></label>
                                            <input id="hartakendaraan" name="nominal" type="text"
                                                class="form-control cc-name valid" value="0">
                                        </div>
                                        <div class="form-group has-success mt-3 mb-2">
                                            <label for="cc-name" class="control-label mb-1"><b>Jumlah
                                                    hutang/cicilan(optional)</b></label>
                                            <input id="hutang" name="notel" type="text"
                                                class="form-control cc-name valid" value="0">
                                        </div>
                                        <div class="mt-3"><img src="" id="output" width="500"></div>
                                        <div class="card-footer">
                                            <button id="jumlah" class="btn btn-success btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Hitung </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="hasilmal" class="d-none col-sm-5">
                            <p style="text-align: center; font-size: 18px;">Zakat Mal Anda</p>
                            <P style="font-size: 36px; text-align: center; font-weight: bold;">
                                <span id="totalmal"></span>,-
                            </P>
                            <p style="font-size: 15px; text-align: center;" class="d-flex justify-content-center"><b
                                    id="pesan"></b></p>
                            <div class="row">
                                <div class="col-6">
                                    <p style="font-size: 13px;"><b>Tabungan dan lainnya</b></p>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <p style="font-size: 13px;"><b><span id="nilaiharta"></span></b></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p style="font-size: 13px;">Kendaraan dan aset</p>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <p style="font-size: 13px;"><b><span id="nilaiaset"></span></b></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p style="font-size: 13px;">Hutang</p>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <p style="font-size: 13px;"><b>- <span id="nilaihutang"></span></b></p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button id="hitungulangmal" class="btn btn-outline-success btn-sm m-2">
                                    Hitung Ulang </button>
                                <a href="bayarzakat" class="btn btn-success btn-sm m-2">
                                    <i class="fa fa-ban"></i> Zakat Sekarang </a>
                            </div>
                        </div>
                    </div>
                    <div id="zakatfitrah" class="d-none d-flex justify-content-center">
                        <div id="fitrah" class="col-6">
                            <div class="card">
                                <div class="card-header">
                                    Zakat Fitrah
                                </div>
                                <div class="card-body">
                                    <div method="" enctype="multipart/form-data">
                                        <div class="form-group has-success mb-2">
                                            <label for="cc-name" class="control-label mb-1"><b>Jumlah Orang</b></label>
                                            <input id="jumlahorang" type="number" class="form-control cc-name valid">
                                        </div>
                                        <div class="card-footer">
                                            <button id="hitungfitrah" class="btn btn-success btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Hitung </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="hasilfitrah" class="d-none col-sm-5">
                            <p style="text-align: center; font-size: 18px;">Jumlah zakat fitrah :</p>
                            <P style="font-size: 36px; text-align: center; font-weight: bold;">
                                <span id="zfitrah"></span>,-
                            </P>
                            <p style="font-size: 15px; text-align: center;" class="d-flex justify-content-center"><b
                                    id="pesanft">Jumlah zakat fitrah yang harus dibayarkan</b></p>
                            <div class="row">
                                <div class="col-6">
                                    <p style="font-size: 13px;"><b>Jumlah Orang</b></p>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <p style="font-size: 13px;"><b><span id="nilaijumlah"></span> Orang</b></p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button id="hitungulangfitrah" class="btn btn-outline-success btn-sm m-2">
                                    Hitung Ulang </button>
                                <a href="bayarzakat" class="btn btn-success btn-sm m-2">
                                    <i class="fa fa-ban"></i> Zakat Sekarang </a>
                            </div>
                        </div>
                    </div>
                    <div id="zakatpenghasilan" class="d-none d-flex justify-content-center">
                        <div id="hitungpenghasilan" class="col-6">
                            <div class="card">
                                <div class="card-header">
                                    Zakat Penghasilan
                                </div>
                                <div class="card-body">
                                    <div method="" enctype="multipart/form-data">
                                        <div class="form-group has-success mb-2">
                                            <label for="cc-name" class="control-label mb-1"><b>Jumlah pendapatan per
                                                    bulan</b></label>
                                            <input id="pendapatan" type="text" class="form-control cc-name valid "
                                                value="0">
                                        </div>
                                        <div class="form-group has-success mt-3 mb-2">
                                            <label for="cc-name" class="control-label mb-1"><b>Bonus, THR dan
                                                    lainnya</b></label>
                                            <input id="lainnya" type="text" class="form-control cc-name valid"
                                                value="0">
                                        </div>
                                        <div class="mt-3"><img src="" id="output" width="500"></div>
                                        <div class="card-footer">
                                            <button id="hitungpendapatan" class="btn btn-success btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Hitung </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="hasilpenghasilan" class="d-none col-sm-5">
                            <p style="text-align: center; font-size: 18px;">Jumlah zakat penghasilan Anda:</p>
                            <P style="font-size: 36px; text-align: center; font-weight: bold;">
                                <span id="zpendapatan"></span>,-
                            </P>
                            <p style="font-size: 15px; text-align: center;" class="d-flex justify-content-center"><b
                                    id="pesanpd"></b></p>
                            <div class="row">
                                <div class="col-6">
                                    <p style="font-size: 13px;">Pendapatan per bulan</p>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <p style="font-size: 13px;"><b><span id="nilaipendapatan"></span></b></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p style="font-size: 13px;">Bonus, THR dan lainnya</p>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <p style="font-size: 13px;"><b><span id="nilailainnya"></span></b></p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button id="hitungulangpenda" class="btn btn-outline-success btn-sm m-2">
                                    Hitung Ulang </button>
                                <a href="bayarzakat" class="btn btn-success btn-sm m-2">
                                    <i class="fa fa-ban"></i> Zakat Sekarang </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Breadcrumbs -->
    </main><!-- End #main -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            const hzakatmal = document.getElementById('zakatmal');
            const hmal = document.getElementById('hitungmal');
            const hsmal = document.getElementById('hasilmal');

            const hzakatfitrah = document.getElementById('zakatfitrah');
            const hzakatpenghasilan = document.getElementById('zakatpenghasilan');

            $('#btnmal').click(function() {
                toggleZakatSection(hzakatmal);
                enableButton('#btnmal');
                disableButton('#btnfitrah', '#btnpenghasilan');
            });

            $('#btnfitrah').click(function() {
                toggleZakatSection(hzakatfitrah);
                enableButton('#btnfitrah');
                disableButton('#btnmal', '#btnpenghasilan');
            });

            $('#btnpenghasilan').click(function() {
                toggleZakatSection(hzakatpenghasilan);
                enableButton('#btnpenghasilan');
                disableButton('#btnmal', '#btnfitrah');
            });

            function toggleZakatSection(element) {
                hzakatmal.classList.add('d-none');
                hzakatfitrah.classList.add('d-none');
                hzakatpenghasilan.classList.add('d-none');
                element.classList.remove('d-none');
            }

            function enableButton(buttonId) {
                $(buttonId).addClass('disabled');
            }

            function disableButton(...buttonIds) {
                buttonIds.forEach(buttonId => {
                    $(buttonId).removeClass('disabled');
                });
            }
        });

        // Fungsi untuk mengubah format angka menjadi format Rupiah
        function formatRupiah(angka) {
            var bilangan = parseInt(angka);
            var minus = (bilangan < 0) ? "-" : "";
            var formattedValue = "Rp. " + bilangan.toLocaleString("id-ID");
            return minus + formattedValue;
        }

        $(document).ready(function() {
            $('#harta, #hartakendaraan, #hutang, #pendapatan, #lainnya').on('input', function() {
                // Menghapus semua karakter selain angka
                var cleanValue = $(this).val().replace(/[^0-9]/g, "");

                // Mengubah format angka menjadi format Rupiah
                var formattedValue = formatRupiah(cleanValue);

                // Menampilkan hasil format ke input
                $(this).val(formattedValue);
            });
        });


        //zakat MAL
        $(document).ready(function() {
            $('#jumlah').click(function() {
                var harta = parseInt($("#harta").val().replace(/[^0-9]/g, ""));
                var hkendaraan = parseInt($("#hartakendaraan").val().replace(/[^0-9]/g, ""));
                var hut = parseInt($("#hutang").val().replace(/[^0-9]/g, ""));

                const nisab = 81945667;
                const hasilharta = harta + hkendaraan - hut;
                const persentasemal = 0.025;
                const jumlahmal = (hasilharta >= nisab) ? hasilharta * persentasemal : 0;

                $('#pesan').html((hasilharta >= nisab) ? "Anda sudah mencapai nishab" :
                    "Anda belum mencapai nishab. Anda tetap bisa menyempurnakan niat baik dengan bersedekah."
                );
                $('#totalmal').html(formatRupiah(jumlahmal));
                $('#nilaiharta').html(formatRupiah(harta));
                $('#nilaiaset').html(formatRupiah(hkendaraan));
                $('#nilaihutang').html(formatRupiah(hut));

                $('#hitungmal').addClass('d-none');
                $('#hasilmal').removeClass('d-none');

                $('#hitungulangmal').click(function() {
                    $('#hitungmal').removeClass('d-none');
                    $('#hasilmal').addClass('d-none');
                });
            });
            $('#hitungpendapatan').click(function() {
                var pendapatan = parseInt($("#pendapatan").val().replace(/[^0-9]/g, ""));
                var lainnya = parseInt($("#lainnya").val().replace(/[^0-9]/g, ""));

                const nisab = 6828806;
                const hasil = pendapatan + lainnya;
                const persentase = 0.025;

                const jumlahzakat = (hasil >= nisab) ? hasil * persentase : 0;

                $('#pesanpd').html((hasil >= nisab) ? "Anda sudah mencapai nishab" :
                    "Penghasilan Anda belum mencapai nishab.Anda tetap bisa menyempurnakan niat baik dengan bersedekah."
                );

                $('#zpendapatan').html(formatRupiah(jumlahzakat));
                $('#nilaipendapatan').html(formatRupiah(pendapatan));
                $('#nilailainnya').html(formatRupiah(lainnya));

                $('#hitungpenghasilan').addClass('d-none');
                $('#hasilpenghasilan').removeClass('d-none');

                $('#hitungulangpenda').click(function() {
                    $('#hitungpenghasilan').removeClass('d-none');
                    $('#hasilpenghasilan').addClass('d-none');
                });
            });
            $('#hitungfitrah').click(function() {
                var jorang = $("#jumlahorang").val();
                const perorang = 25000;

                const jumlahzakat = jorang * perorang;

                $('#zfitrah').html(formatRupiah(jumlahzakat));
                $('#nilaijumlah').html(jorang);

                $('#fitrah').addClass('d-none');
                $('#hasilfitrah').removeClass('d-none');

                $('#hitungulangfitrah').click(function() {
                    $('#fitrah').removeClass('d-none');
                    $('#hasilfitrah').addClass('d-none');
                });
            });
        })
    </script>
@endsection
