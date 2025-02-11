<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Report Pemasangan Baru</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/siatur/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/siatur/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="/siatur/dist/css/adminlte.min.css">
    <link rel="icon" href="/siatur/storage/nsp.jpg">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <?php include "/xampp/htdocs/siatur/layouts/header.php"?>
        <?php include "/xampp/htdocs/siatur/layouts/sidebar-user.php"?>

        <!-- Main Content -->
        <div class="content-wrapper bg-gradient-white">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Report</h1>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="content-fluid">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Report Pemasangan Baru</h3>
                        </div>
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="whatsapp">No Working Order</label>
                                    <input type="text" class="form-control" id="no_wa" placeholder="NO WA"> // ambil
                                    data no WO
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama Pelanggan</label>
                                    <input type="text" class="form-control" id="nama_pelanggan"
                                        placeholder="Nama Pelanggan"> // akan ngambil data nama karyawan
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat atau Titik Kordinat</label>
                                    <input type="text" class="form-control" id="alamat" placeholder="Alamat"> // ambil
                                    data alamat
                                </div>
                                <div class="form-group">
                                    <label for="jabatan">Status Pengerjaan</label>
                                    <select class="custom-select" name="jabatan_karyawan">
                                        <option>-- Pilih --</option>
                                        <option>Admin</option>
                                        <option>IT</option>
                                        <option>Teknisi</option>
                                        <option>Supervisior</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Keterangan</label>
                                    <input type="text" class="form-control" id="alamat" placeholder="Alamat"> //
                                    keterangan dari status pekerjaan
                                </div>
                                <div class="form-group">
                                    <label for="jabatan">Material Yang digunakan</label>
                                    <select class="custom-select" name="jabatan_karyawan">
                                        <option>-- Pilih --</option>
                                        <option>Admin</option>
                                        <option>IT</option>
                                        <option>Teknisi</option>
                                        <option>Supervisior</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Jumlah material yang digunakan</label>
                                    <input type="text" class="form-control" id="alamat" placeholder="Alamat"> // jumlah
                                </div>
                                <div class="form-group">
                                    <label for="ktp">Foto ODP</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="foto_rumah">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>

                                    <label for="ktp">Foto Redaman</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="foto_rumah">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>

                                    <label for="ktp">Foto SN Modem</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="foto_rumah">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success" id="btn_submit">Submit</button>
                                <button type="submit" class="btn btn-danger" id="btn_cancel">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
        <!-- END Main Content -->

        <?php include "/xampp/htdocs/siatur/layouts/footer.php"?>
    </div>

    <script src="/siatur/plugins/jquery/jquery.min.js"></script>
    <script src="/siatur/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/siatur/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="/siatur/dist/js/adminlte.js"></script>
    <script src="/siatur/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="/siatur/plugins/raphael/raphael.min.js"></script>
    <script src="/siatur/plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="/siatur/plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <script src="/siatur/plugins/chart.js/Chart.min.js"></script>
    <script src="/siatur/dist/js/demo.js"></script>
    <script src="/siatur/dist/js/pages/dashboard2.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>