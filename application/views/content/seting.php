     <div class="page-wrapper">
         <!-- ============================================================== -->
         <!-- Bread crumb and right sidebar toggle -->
         <!-- ============================================================== -->
         <div class="page-breadcrumb">
             <div class="row align-items-center">
                 <div class="col-md-6 col-8 align-self-center">
                     <h3 class="page-title mb-0 p-0">Pengaturan Akun PPDB User</h3>
                     <div class="d-flex align-items-center">
                         <nav aria-label="breadcrumb">
                             <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">Pengaturan Akun PPDB User</li>
                             </ol>
                         </nav>
                     </div>
                 </div>
             </div>
         </div>
         <!-- ============================================================== -->
         <!-- End Bread crumb and right sidebar toggle -->
         <!-- ============================================================== -->
         <!-- ============================================================== -->
         <!-- Container fluid  -->
         <!-- ============================================================== -->
         <div class="container-fluid">
             <!-- ============================================================== -->
             <!-- Sales chart -->
             <!-- ============================================================== -->
             <div class="row">
                 <!-- Column -->
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="title p-3">
                             <h3>Pengaturan Akun PPDB</h3>
                         </div>
                         <div class="card-body">
                             <div class="row">
                                 <div class="col-md-8">
                                     <div class="card">
                                         <h5 class="p-2">Pengaturan Umum</h5>
                                         <div id="flashdata" onload="clearme();">
                                             <?= $this->session->flashdata('message'); ?>
                                         </div>
                                         <div class="card-body">
                                             <form action="<?= base_url('UserUpdate') ?>" method="POST" enctype="multipart/form-data">
                                                 <div class="form-group">
                                                     <label for="">Nama Lengkap</label>
                                                     <input type="text" name="nama" value="<?= $this->session->userdata('nama2'); ?>" class="form-control">
                                                 </div>
                                                 <small style="color:red"><?php echo form_error('nama') ?></small>
                                                 <div class="form-group">
                                                     <label for="">Nomor KK</label>
                                                     <input type="text" name="no_kk" value="<?= $this->session->userdata('nokk2'); ?>" class=" form-control">
                                                 </div>
                                                 <small style="color:red"><?php echo form_error('no_kk') ?></small>
                                                 <div class="form-group">
                                                     <label for="">Username</label>
                                                     <input type="text" name="username" value="<?= $this->session->userdata('username2'); ?>" class=" form-control">
                                                 </div>
                                                 <small style="color:red"><?php echo form_error('username') ?></small>
                                                 <div class="btn-group">
                                                     <button class="btn btn-success btn-sm" type="submit">Simpan</button>
                                                 </div>
                                             </form>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-md-4">
                                     <div class="card">
                                         <h5 class="p-2">Pengaturan Password</h5>
                                         <div class="alert alert-warning" role="alert">Kosongi jika tidak ingin merubah password !</div>
                                         <div id="flashdata" onload="clearme();">
                                             <?= $this->session->flashdata('message1'); ?>
                                         </div>
                                         <div class="card-body">
                                             <form action="<?= base_url('passwordUpdate') ?>" method="post" enctype="multipart/form-data">
                                                 <div class="form-group">
                                                     <label for="">Password Baru</label>
                                                     <input type="password" name="password" class="form-control">
                                                 </div>
                                                 <small style="color:red"><?php echo form_error('password') ?></small>
                                                 <div class="btn-group">
                                                     <button class="btn btn-success btn-sm" type="submit">Ubah Password</button>
                                                 </div>
                                             </form>
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