<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title ?></title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <link href="<?= base_url() ?>/assets/landing/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?= base_url() ?>/assets/landing/css/bootstrap-icons.css" rel="stylesheet">

    <link href="<?= base_url() ?>/assets/landing/css/owl.carousel.min.css" rel="stylesheet">

    <link href="<?= base_url() ?>/assets/landing/css/owl.theme.default.min.css" rel="stylesheet">

    <link href="<?= base_url() ?>/assets/landing/css/templatemo-medic-care.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/DataTables/datatables.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/DataTables/datatables.min.css" rel="stylesheet">

    <!--

TemplateMo 566 Medic Care

https://templatemo.com/tm-566-medic-care

-->
</head>

<body class="bg-white" style="height: 100%;">

    <main>
        <nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
            <div class="container">
                <a class="navbar-brand mx-auto d-lg-none" href="index.html">
                    Aplikasi PPDB Online
                    <strong class="d-block">MI Terpadu Kita</strong>
                </a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <a class="navbar-brand d-none d-lg-block" href="index.html">
                            Aplikasi PPDB Online
                            <strong class="d-block">MI Terpadu Kita</strong>
                        </a>
                    </ul>
                </div>

            </div>
        </nav>
        <style>
            body {
                width: 100%;
            }

            label {
                font-weight: bold;
                font-size: 15px;
                margin-bottom: 5px;
                margin-top: 5px;
            }

            small {
                color: red;
            }

            .pe {
                vertical-align: middle;
                margin-top: 20%;
                margin-bottom: 50%;
            }

            tr {
                text-align: center;
                vertical-align: middle;
            }

            th {
                font-size: 13px;
            }

            td {
                font-size: 12px;
            }
        </style>
        </style>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mx-auto mt-5">
                                <div class="card-header">
                                    <div class="btn-group">
                                        <a class="btn btn-primary btn-sm" href="<?= base_url('') ?>">Home</a> &nbsp;
                                        <a class="btn btn-warning btn-sm" href="<?= base_url('DaftarUser') ?>">Daftar</a>
                                    </div>
                                </div>
                                <div class="card-body p-4 m-4">
                                    <div class="text-center">
                                        <h3>Masuk User PPDB Online</h3>
                                        <h3>MI Terpadu Kita</h3>
                                    </div>
                                    <div id="flashdata" onload="clearme();">
                                        <?= $this->session->flashdata('message'); ?>
                                    </div>
                                    <form action="<?= base_url('Login') ?>" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="un">Username :</label>
                                            <input type="text" class="form-control" name="username" value="<?= set_value('username') ?>" id="un" placeholder="Username">
                                            <small class="err"><?php echo form_error('username') ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="ps">Password :</label>
                                            <input type="password" class="form-control" name="password" id="ps" placeholder="Password">
                                            <small class="err"><?php echo form_error('password') ?></small>
                                        </div>
                                        <div class="form-group p-1">
                                            <label for="">Kode Keamanan :</label>
                                            <span><?php echo $captcha ?></span>
                                            <input type="hidden" name="captcha" value="<?= $this->session->userdata('captcha'); ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="ps">Masukkan Kode Keamanan di Atas :</label>
                                            <input type="text" class="form-control" name="captcha_isi" value="<?= set_value('captcha_isi') ?>" id="ps" placeholder="Masukkan kode di atas">
                                            <small class="err"><?php echo form_error('captcha_isi') ?></small>
                                        </div>
                                        <br>
                                        <div class="d-grid gap-2 col-12 mx-auto">
                                            <button class="btn btn-success btn-round btn-block shadow-sm" type="submit">Masuk</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 bg-success">
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="align-self-center mx-auto">
                                            <div class="card pe">
                                                <div class="card-header">
                                                    <h6>Tanggal Pendaftaran</h6>
                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table id="gelombangView" class="table table-striped table-bordered" style="width:100%">
                                                            <thead>
                                                                <tr class="text-center">
                                                                    <th>No</th>
                                                                    <th>Gelombang Ke</th>
                                                                    <th>Tanggal</th>
                                                                    <th>Tahun Ajaran</th>
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
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="site-footer section-padding  bg-primary" id="contact">
        <div class="container">
            <div class="row">
                <h5 class="text-center text-bold">Aplikasi PPDB</h5>
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="<?= base_url() ?>/assets/landing/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>/assets/landing/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/assets/landing/js/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>/assets/landing/js/scrollspy.min.js"></script>
    <script src="<?= base_url() ?>/assets/landing/js/custom.js"></script>

    <script src="<?= base_url() ?>/assets/DataTables/datatables.js"></script>
    <script src="<?= base_url() ?>/assets/DataTables/datatables.min.js"></script>
    <!--

TemplateMo 566 Medic Care

https://templatemo.com/tm-566-medic-care

-->
</body>
<script>
    setTimeout(function() {
        $('#flashdata').hide();
    }, 3000);
</script>
<script>
    function clearme() {
        <?php
        if (isset($_SESSION['message'])) :
            unset($_SESSION['message']);
        elseif (isset($_SESSION['message'])) :
            unset($_SESSION['message']);
        endif;
        ?>
    }
</script>
<script>
    table = $('#gelombangView').DataTable({
        responsive: true,
        "destroy": true,
        "processing": true,
        "serverSide": true,
        "render": $.fn.dataTable.render.text(),
        "order": [],

        "ajax": {
            "url": "<?= site_url('viewGelombang') ?>",
            "type": "POST"
        },


        "columnDefs": [{
            "targets": [0],
            "orderable": false,
            "width": 5
        }],

    });
</script>

</html>