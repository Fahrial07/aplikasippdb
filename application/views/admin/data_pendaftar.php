     <div class="page-wrapper">
         <!-- ============================================================== -->
         <!-- Bread crumb and right sidebar toggle -->
         <!-- ============================================================== -->
         <div class="page-breadcrumb">
             <div class="row align-items-center">
                 <div class="col-md-6 col-8 align-self-center">
                     <h3 class="page-title mb-0 p-0">Data Calon Siswa/i Baru</h3>
                     <div class="d-flex align-items-center">
                         <nav aria-label="breadcrumb">
                             <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="#">Home</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">Data Calon Siswa/i Baru</li>
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
                 <div class="col-lg-12">
                     <div class="alert alert-warning">
                         <p class="font-bold">Data calon Siswa/i baru sesuai dengan data gelombang yang aktif !</p>
                         <small>Jika data gelombang tidak aktif semua, maka data ini akan kosong !</small>
                     </div>
                     <div class="card">
                         <div class="card-body">
                             <div id="flashdata" onload="clearme();">
                                 <?= $this->session->flashdata('message'); ?>
                             </div>
                             <div class="table-responsive">
                                 <table id="datasiswa" class="table table-striped table-bordered" style="width:100%">
                                     <thead>
                                         <tr class="text-center">
                                             <th>No</th>
                                             <th>Aksi</th>
                                             <th>Status Akun</th>
                                             <th>Status Pendaftaran</th>
                                             <th>Id</th>
                                             <th>Nama</th>
                                             <th>Username</th>
                                             <th>No KK</th>
                                             <th>Tahun Angkatan</th>
                                         </tr>
                                     </thead>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

         </div>