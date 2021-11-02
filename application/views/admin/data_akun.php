<div class="page-wrapper">

    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Data Akun</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Akun</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <style>
        td {
            text-align: center;
            vertical-align: middle;
        }

        label {
            float: left;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <!-- Column -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Data Akun Users</h5>
                    </div>
                    <div class="card-body">
                        <div class="btn-group">
                            <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>&nbsp;Hapus Akun</button>&nbsp;
                            <button type="button" class="btn btn-success btn-sm"><i class="fas fa-plus-circle"></i>&nbsp;Tambah Akun</button>
                        </div>
                        <div class="mt-2" id="flashdata" onload="clearme();">
                            <?= $this->session->flashdata('message'); ?>
                        </div>
                        <div class="row">
                            <div class="table-responsive mt-2">
                                <table id="data-akun" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr class="text-center">
                                            <th><input type="checkbox" id="check-all"></th>
                                            <th>No</th>
                                            <th>Aksi</th>
                                            <th>Status Akun</th>
                                            <th>Id</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Enroll User</th>
                                            <th>No KK</th>
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