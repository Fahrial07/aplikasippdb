     <div class="page-wrapper">
         <!-- ============================================================== -->
         <!-- Bread crumb and right sidebar toggle -->
         <!-- ============================================================== -->
         <div class="page-breadcrumb">
             <div class="row align-items-center">
                 <div class="col-md-6 col-8 align-self-center">
                     <h3 class="page-title mb-0 p-0">Landing Pages</h3>
                     <div class="d-flex align-items-center">
                         <nav aria-label="breadcrumb">
                             <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="#">Home</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">Landing Pages</li>
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

             label {
                 float: left;
             }

             .tentang {
                 height: 600px;
             }
         </style>
         <div class="container-fluid">
             <div class="row">
                 <!-- Column -->
                 <div class="col-lg-12">
                     <div id="flashdata" onload="clearme();">
                         <?= $this->session->flashdata('message'); ?>
                     </div>
                     <div class="card overflow-auto tentang">
                         <div class="card-header">
                             <h5>Setting Tentang</h5>
                         </div>
                         <div class="card-body">
                             <form action="<?= base_url('DeleteT') ?>" method="post" enctype="multipart/form-data" id="form-tentang">
                                 <div class="btn-group mb-1">
                                     <button class="btn btn-danger btn-sm" type="button" id="btn-tentang"><i class="fas fa-trash"></i></button>
                                     <button class="btn btn-success btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-plus-circle"></i>&nbsp;Tambah Data</button>
                                     </dib>
                                 </div>
                                 <div class="table-responsive">
                                     <table id="tentang" class="table table-striped table-bordered" style="width:100%">
                                         <thead>
                                             <tr class="text-center">
                                                 <th><input type="checkbox" id="check-all"></th>
                                                 <th>No</th>
                                                 <th>Aksi</th>
                                                 <th>Judul</th>
                                                 <th>Slogan</th>
                                                 <th>Isi Tentang</th>
                                                 <th>Status</th>
                                                 <th>Tanggal</th>
                                             </tr>
                                         </thead>
                                     </table>
                                 </div>
                             </form>
                         </div>
                     </div>
                     <div class="card overflow-auto tentang">
                         <div class="card-header">
                             <h5>Setting Alur PPDB</h5>
                         </div>
                         <div class="card-body">
                             <form action="<?= base_url('Alur') ?>" method="post" enctype="multipart/form-data" id="form-alur">
                                 <div class="btn-group mb-1">
                                     <button class="btn btn-danger btn-sm" type="button" id="btn-alur"><i class="fas fa-trash"></i></button>
                                     <button class="btn btn-success btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#alur-ppdb"><i class="fas fa-plus-circle"></i>&nbsp;Tambah Data</button>

                                     <!-- Modal -->
                                     <div class="modal fade" id="alur-ppdb" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                         <div class="modal-dialog modal-lg">
                                             <div class="modal-content">
                                                 <div class="modal-header">
                                                     <h5 class="modal-title" id="exampleModalLabel">Tambah data alur PPDB
                                                     </h5>
                                                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                 </div>
                                                 <div class="modal-body">
                                                     <form action="<?= base_url('Alur') ?>" method="post" enctype="multipart/form-data">
                                                         <div class="form-group">
                                                             <label for="gel">Judul</label>
                                                             <input type="text" name="judul" class="form-control" id="gel">
                                                         </div>
                                                         <small class="text-danger"><?php echo form_error('judul'); ?></small>
                                                         <div class="form-group">
                                                             <p>Alur PPDB</p>
                                                             <textarea name="isi_alur" id="" class="form-control ckeditor" id="ckeditor"></textarea>
                                                         </div>
                                                         <small class="text-danger"><?php echo form_error('isi_alur'); ?></small>
                                                         <div class="btn-group">
                                                             <button class="btn btn-success btn-sm" type="submit">Simpan</button>
                                                         </div>
                                                     </form>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <!-- end modal -->

                                     </dib>
                                 </div>
                                 <div class="table-responsive">
                                     <table id="alur" class="table table-striped table-bordered" style="width:100%">
                                         <thead>
                                             <tr class="text-center">
                                                 <th><input type="checkbox" id="check-all"></th>
                                                 <th>No</th>
                                                 <th>Aksi</th>
                                                 <th>Judul</th>
                                                 <th>Alur</th>
                                                 <th>Status</th>
                                                 <th>Tanggal</th>
                                             </tr>
                                         </thead>
                                     </table>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>

                 <!-- Modal -->
                 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog modal-lg">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel">Tambah data Tentang
                                 </h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                             </div>
                             <div class="modal-body">
                                 <form action="<?= base_url('Tentang') ?>" method="post" enctype="multipart/form-data">
                                     <div class="form-group">
                                         <label for="gel">Judul</label>
                                         <input type="text" name="judul" class="form-control" id="gel">
                                     </div>
                                     <small class="text-danger"><?php echo form_error('judul'); ?></small>
                                     <div class="form-group">
                                         <label for="gel">Slogan</label>
                                         <input type="text" name="slogan" class="form-control" id="gel">
                                     </div>
                                     <small class="text-danger"><?php echo form_error('slogan'); ?></small>
                                     <div class="form-group">
                                         <p>Isi Tentang</p>
                                         <textarea name="isi" id="" class="form-control ckeditor" id="ckeditor"></textarea>
                                     </div>
                                     <small class="text-danger"><?php echo form_error('isi'); ?></small>
                                     <div class="btn-group">
                                         <button class="btn btn-success btn-sm" type="submit">Simpan</button>
                                     </div>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- end modal -->




             </div>

         </div>

     </div>