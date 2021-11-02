     <div class="page-wrapper">
         <!-- ============================================================== -->
         <!-- Bread crumb and right sidebar toggle -->
         <!-- ============================================================== -->
         <div class="page-breadcrumb">
             <div class="row align-items-center">
                 <div class="col-md-6 col-8 align-self-center">
                     <h3 class="page-title mb-0 p-0">Dashboard</h3>
                     <div class="d-flex align-items-center">
                         <nav aria-label="breadcrumb">
                             <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="#">Home</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                             </ol>
                         </nav>
                     </div>
                 </div>
             </div>
         </div>
         <style>
             tr {
                 text-align: center;
                 vertical-align: middle;
             }
         </style>
         <div class="container-fluid">
             <div class="row">
                 <!-- Column -->
                 <div class="col-lg-8">
                     <div class="card">
                         <div class="card-body">
                             <div class="row">
                                 <div class="col-12">
                                     <h5>Selamat Datang Admin di Dashboard Aplikasi PPDB ONLINE MI Terpadu Kita</h5>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-md-4">
                             <div class="card">
                                 <div class="card-header">
                                     <h5 class="title">Data User</h5>
                                 </div>
                                 <div class="card-body">
                                     <div class="row">
                                         <div class="col-12">
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-4">
                             <div class="card">
                                 <div class="card-header">
                                     <h5 class="title">Calon Siswa</h5>
                                 </div>
                                 <div class="card-body">
                                     <div class="row">
                                         <div class="col-12">
                                             <hr>
                                             <small>Tahun Ajaran&nbsp;:&nbsp;2021/2022</small>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-4">
                             <div class="card">
                                 <div class="card-header">
                                     <h5 class="title">Akun</h5>
                                 </div>
                                 <div class="card-body">
                                     <div class="row">
                                         <div class="col-12">
                                             <p style="color:green">Active&nbsp;:&nbsp;<span><?php ?></span></p>
                                             <p style="color:red">Inactive&nbsp;:&nbsp;<span><?php ?></span></p>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="card">
                         <form action="<?= base_url('deleteActivity') ?>" method="post" enctype="multipart/form-data" id="form-delete">
                             <div class="card-header">
                                 <h5>Log Aktifitas Users<span style="float: right;"><button id="btn-delete" class="btn btn-danger btn-sm" type="button"><i class="fas fa-trash"></i></button></span></h5>
                             </div>
                             <div id="flashdata" onload="clearme();">
                                 <?= $this->session->flashdata('message'); ?>
                             </div>
                             <div class="card-body" style="height: 750px; overflow:auto;">
                                 <div class="row">
                                     <div class="col-12">
                                         <div class="table-responsive">
                                             <table id="activity" class="table table-striped table-bordered" style="width:100%">
                                                 <thead>
                                                     <tr>
                                                         <th><input type="checkbox" id="check-all"></th>
                                                         <th>No</th>
                                                         <th>Data Aktivitas Users</th>
                                                         <th>Tanggal</th>
                                                     </tr>
                                                 </thead>
                                             </table>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
                 <div class="col-lg-4">
                     <div class="card">
                         <div class="card-body">
                             <h3 class="card-title">Data Akun Anda</h3>
                             <small>Role : <b>Admin</b></small>
                             <h6 class="card-subtitle">
                                 <hr>
                             </h6>

                             <label class="" for="">
                                 Nama :
                             </label>
                             <p class="card-subtitle"><?php echo $this->session->userdata('nama'); ?></p>
                             <label class="" for="">
                                 Username :
                             </label>
                             <p class="card-subtitle"><?php echo $this->session->userdata('username'); ?></p>
                             <div>
                                 <hr class="mt-0 mb-0">
                             </div>
                             <div class="card-body text-center ">
                                 <ul class="list-inline d-flex justify-content-center align-items-center mb-n2">
                                     <p class="card-subtitle">Tanggal Buat Akun Admin&nbsp;:&nbsp;<?php echo $this->session->userdata('tgl'); ?></p>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>

             </div>

         </div>