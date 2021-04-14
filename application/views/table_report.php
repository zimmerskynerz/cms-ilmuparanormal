<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="<?= base_url('assets/') ?>img/logo/logo.png" rel="icon" />
    <title>Biro Administrasi Akademik dan Kemahasiswaan (BAAK)</title>
    <link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Select2 -->
    <link href="<?= base_url('assets/') ?>vendor/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap DatePicker -->

    <!-- Bootstrap Touchspin -->
    <link href="<?= base_url('assets/') ?>vendor/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css" rel="stylesheet" />
    <!-- ClockPicker -->
    <link href="<?= base_url('assets/') ?>vendor/clock-picker/clockpicker.css" rel="stylesheet" />
    <!-- RuangAdmin CSS -->
    <link href="<?= base_url('assets/') ?>css/ruang-admin.min.css" rel="stylesheet" />
    <link href="<?= base_url('assets/') ?>css/custom.css" rel="stylesheet" />
    <script src="<?= base_url('assets/') ?>tinymce/js/tinymce/tinymce.min.js"></script>
    <script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/forms/theme-checkbox-radio.css">
    <link href="<?= base_url('assets/') ?>css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/') ?>plugins/file-upload/file-upload-with-preview.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/') ?>css/components/tabs-accordian/custom-tabs.css" rel="stylesheet" type="text/css" />
    <script src="<?= base_url('assets/') ?>js/jquery-1.10.2.min.js"></script>
    <script src="<?= base_url('assets/') ?>plugins/sweetalerts/promise-polyfill.js"></script>
    <link href="<?= base_url('assets/') ?>plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/') ?>plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/') ?>css/components/custom-sweetalert.css" rel="stylesheet" type="text/css" />
    <script src="<?= base_url('assets/') ?>plugins/sweetalerts/sweetalert2.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type='text/javascript'>
        tinymce.init({
            selector: ".tinymce", // change this value according to your HTML
            skin: "CUSTOM",
            content_css: "CUSTOM"
        });
    </script>
    <style>
        .sidebar.toggled .nav-item .collapse {
            position: relative;
            padding-left: 1rem;
            left: 0;
            z-index: 1;
            top: 0;
        }

        .sidebar.toggled {
            width: 60vw !important;
            transition: all .3s ease-in-out;
            -webkit-transition: all .3s ease-in-out;
        }
    </style>
    <style>
        .responsive img {
            max-width: 50%;
            align-content: center;
            /*width:100%;*/
            height: auto;
        }
    </style>
</head>

<body>

    <div class="main-panel">
        <div class="content-wrapper">
            <style>
                hr {
                    display: block;
                    margin-top: 0.1em;
                    margin-bottom: 0.5em;
                    margin-left: auto;
                    margin-right: auto;
                    border-style: double;
                    border-width: 2px;
                }

                table,
                th,
                td {
                    padding: 8px 10px;
                }
            </style>

            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="card-body">
                                    <center>
                                        <table class="text-center">
                                            <tr>
                                                <td><img src="<?= base_url('assets/') ?>img/logo/logo.png" width="100px" alt=""></td>
                                                <td class="text-center" width="500px">
                                                    <center>
                                                        <h4><b>Biro Administrasi Akademik dan Kemahasiswaan (BAAK)</b></h4>
                                                        <h4><b>UNIVERSITAS MURIA KUDUS</b></h4>
                                                        <h7>Jl. Lkr. Utara, Kayuapu Kulon, Gondangmanis</h7><br>
                                                        <h7>Kec. Bae, Kabupaten Kudus, Jawa Tengah 59327</h7>
                                                    </center>
                                                </td>

                                            </tr>
                                        </table>
                                    </center>
                                    <hr class="mb-4">
                                    <table>
                                        <tr>
                                            <td>Tahun Pilmapres</td>
                                            <td>:</td>
                                            <td><?= $data_gelombang['nm_pilmapres']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Pendaftar</td>
                                            <td>:</td>
                                            <td><?= $jml_pendaftar['jml_pendaftar']; ?> Mahasiswa</td>
                                        </tr>
                                    </table>
                                    <hr class="mb-4">
                                    <center>
                                        <h4>LAPORAN PILMAPRES TAHUN <?= $data_gelombang['nm_pilmapres']; ?></h4>
                                    </center>
                                    <br>
                                    <table class="table align-items-center table-flush table-hover" id="">
                                        <thead class="thead-light">
                                            <tr>
                                                <th style="text-align: center;">No</th>
                                                <th style="text-align: center;">NIM</th>
                                                <th style="text-align: center;">Nama Mahasiswa</th>
                                                <th style="text-align: center;">Fakultas & Prodi</th>
                                                <th style="text-align: center;">Prestasi</th>
                                                <th style="text-align: center;">Artikel</th>
                                                <th style="text-align: center;">Presentasi</th>
                                                <th style="text-align: center;">Total</th>
                                                <th style="text-align: center;">Juara</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            <?php foreach ($semua_nilai as $Semua_nilai) : ?>
                                                <tr>
                                                    <td style="text-align: center;"><?= $no ?></td>
                                                    <td><?= $Semua_nilai->nim ?></td>
                                                    <td><?= $Semua_nilai->nm_mhs ?></td>
                                                    <td><?= $Semua_nilai->nm_fakultas ?> - <?= $Semua_nilai->nm_prodi ?></td>
                                                    <td style="text-align: center;"><?= $Semua_nilai->nilai_prestasi ?></td>
                                                    <td style="text-align: center;"><?= $Semua_nilai->nilai_artikel ?></td>
                                                    <td style="text-align: center;"><?= $Semua_nilai->nilai_presentasi ?></td>
                                                    <td style="text-align: center;"><?= $Semua_nilai->nilai_akhir ?></td>
                                                    <td>
                                                        <center>
                                                            <?php
                                                            foreach ($juara as $Juara) :
                                                                if ($Juara->id_mhs == $Semua_nilai->id_mhs) :
                                                                    echo $Juara->status_aktif;
                                                                endif;
                                                            endforeach;
                                                            ?>
                                                        </center>
                                                    </td>
                                                </tr>
                                                <?php $no++; ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                    <br>
                                    <h5 style="text-indent: 60px; font-weight: normal; line-height: 2;">Data yang diberikan bisa dipertanggung jawabkan kebenarannya, di tulis dan disahkan oleh petugas Biro Administrasi Akademik dan Kemahasiswaan (BAAK).</h5>
                                    <table colspan="2" width="100%">
                                        <thead>
                                            <tr>
                                                <td align="center">Kudus, <?= date('d F Y') ?></td>
                                            </tr>
                                            <tr>
                                                <td align="center">Wakil Rektor III,</td>
                                            </tr>
                                            <tr>
                                                <td align="center"></td>
                                            </tr>
                                            <tr>
                                                <td align="center"></td>
                                            </tr>
                                            <tr colspan="3">
                                                <td align="center"></td>
                                            </tr>
                                            <tr>
                                                <td align="center">Rochmad Winarso, S.T., M.T.<br>NIDN : 0612037201</td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- plugins:js -->
    <script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/ruang-admin.min.js"></script>
    <script src="<?= base_url('assets/') ?>vendor/select2/dist/js/select2.min.js"></script>
    <!-- Bootstrap Datepicker -->
    <script src="<?= base_url('assets/') ?>vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <!-- Bootstrap Touchspin -->
    <script src="<?= base_url('assets/') ?>vendor/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js"></script>
    <!-- ClockPicker -->
    <script src="<?= base_url('assets/') ?>vendor/clock-picker/clockpicker.js"></script>
    <!-- Page level plugins -->

    <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugins -->
    <script src="<?= base_url('assets/') ?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/') ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- File Upload -->
    <script src="<?= base_url('assets/') ?>plugins/file-upload/file-upload-with-preview.min.js"></script>
    <script>
        //First upload
        var firstUpload = new FileUploadWithPreview('myFirstImage')
        //Second upload
        var secondUpload = new FileUploadWithPreview('mySecondImage')
    </script>
    <!-- Alert Time Out -->
    <script>
        setTimeout(function() {
            $('#pesan_berhasil').hide()
        }, 3000);
        setTimeout(function() {
            $('#pesan_berhasil2').hide()
        }, 3000);
        setTimeout(function() {
            $('#pesan_gagal').hide()
        }, 3000);
        setTimeout(function() {
            $('#pesan_gagal2').hide()
        }, 3000);
    </script>
    <!-- Page level custom scripts -->
    <script>
        $(document).ready(function() {
            $("#dataTable").DataTable(); // ID From dataTable
            $("#dataTableHover").DataTable(); // ID From dataTable with Hover
        });
    </script>
    <script language=javascript>
        function printWindow() {
            bV = parseInt(navigator.appVersion);
            if (bV >= 4) window.print();
        }
        printWindow();
    </script>
</body>

</html>