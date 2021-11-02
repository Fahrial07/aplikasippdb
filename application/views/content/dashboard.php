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
         <div class="container-fluid">
             <div class="row">
                 <!-- Column -->
                 <div class="col-lg-8">
                     <div class="card">
                         <div class="card-body">
                             <div class="row">
                                 <div class="col-12">
                                     <h2>Selamat Datang di Aplikasi PPDB ONLINE MI Terpadu Kita</h2>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="card">
                         <div class="card-body">
                             <div class="col-12">
                                 <h4>Status Pendaftaran Anda :</h4>
                                 <?php foreach ($lulus as $data) { ?>
                                     <?php if ($data->status_daftar == 'Diterima') { ?>
                                         <div class="alert alert-success" role="alert">
                                             <h6>Selamat anda di terima sebagai Siswa/i di MI Terpadu Kita</h6>
                                         </div>
                                     <?php } else if ($data->status_daftar == 'Tidak di terima') { ?>
                                         <div class="alert alert-danger" role="alert">
                                             <h6>Maaf.. anda belum terima sebagai Siswa/i di MI Terpadu Kita</h6>
                                             <small>Tetap semangat jangan meneyerah !</small>
                                         </div>
                                     <?php } else { ?>
                                         <div class="alert alert-info" role="alert">
                                             <p><b>Silahkan lengkapi formulir pendaftaran !</b></p>
                                             <small>
                                                 <b>Tunggu 1 x 24 jam setelah daftar ulang, maka setatus pendaftaran akan muncul.</b>
                                             </small>
                                         </div>
                                     <?php } ?>
                                 <?php } ?>
                             </div>
                         </div>
                     </div>
                     <div class="card">
                         <div class="card-body">
                             <div class="row">
                                 <div class="col-12">
                                     <h2>Progres Pengisian Formulir</h2>
                                     <ul>
                                         <li><i class="<?= $this->session->userdata('buser') == $this->session->userdata('id_user') ? 'fas fa-check-circle text-success' : 'fas fa-times-circle text-danger' ?>"></i>&nbsp;Biodata Siswa/i</li>
                                         <li><i class="<?= $this->session->userdata('buser') == $this->session->userdata('id_user') ? 'fas fa-check-circle text-success' : 'fas fa-times-circle text-danger' ?>"></i>&nbsp;Biodata Orangtua</li>
                                         <li><i class="<?= $this->session->userdata('buser') == $this->session->userdata('id_user') ? 'fas fa-check-circle text-success' : 'fas fa-times-circle text-danger' ?>"></i>&nbsp;Biodata Wali</li>
                                         <li><i class="<?= $this->session->userdata('buser') == $this->session->userdata('id_user') ? 'fas fa-check-circle text-success' : 'fas fa-times-circle text-danger' ?>"></i>&nbsp;Asal Sekolah</li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4">
                     <div class="card">
                         <div class="card-body">
                             <h3 class="card-title">Data Akun Anda</h3>
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
                             <label class="" for="">
                                 Nomor KK:
                             </label>
                             <p class="card-subtitle"><?php echo $this->session->userdata('nokk'); ?></p>
                         </div>

                         <div>
                             <hr class="mt-0 mb-0">
                         </div>
                         <div class="card-body text-center ">
                             <ul class="list-inline d-flex justify-content-center align-items-center mb-0">
                                 <p class="card-subtitle">Tanggal Daftar&nbsp;:&nbsp;<?php echo $this->session->userdata('tgl'); ?></p>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>

         </div>