     <div class="page-wrapper">
         <!-- ============================================================== -->
         <!-- Bread crumb and right sidebar toggle -->
         <!-- ============================================================== -->
         <div class="page-breadcrumb">
             <div class="row align-items-center">
                 <div class="col-md-6 col-8 align-self-center">
                     <h3 class="page-title mb-0 p-0">Data Gelombang</h3>
                     <div class="d-flex align-items-center">
                         <nav aria-label="breadcrumb">
                             <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="#">Home</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">Data Gelombang</li>
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
         </style>
         <div class="container-fluid">
             <div class="row">
                 <!-- Column -->
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <h5>Data Gelombang</h5>
                         </div>
                         <form action="<?= base_url('deleteGelombang') ?>" method="post" enctype="multipart/form-data" id="form-del">
                             <div class="card-body">
                                 <div id="flashdata" onload="clearme();">
                                     <?= $this->session->flashdata('message'); ?>
                                 </div>
                                 <div class="btn-group mb-2">
                                     <button class="btn btn-danger btn-sm" id="btn-del" type="button"><i class="fas fa-trash"></i></button>
                                     &nbsp;<button class="btn btn-success btn sm" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-plus"></i>Tambah Data</button>
                                 </div>
                                 <div class="table-responsive">
                                     <table id="gelombang" class="table table-striped table-bordered" style="width:100%">
                                         <thead>
                                             <tr class="text-center">
                                                 <th><input type="checkbox" id="check-all"></th>
                                                 <th>No</th>
                                                 <th>Aksi</th>
                                                 <th>Status</th>
                                                 <th>Publish</th>
                                                 <th>Gelombang Ke</th>
                                                 <th>Tahun Ajaran</th>
                                                 <th>Tanggal Buka</th>
                                                 <th>Tanggal Tutup</th>
                                                 <th>Tanggal</th>
                                             </tr>
                                         </thead>
                                     </table>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>

         </div>



         <!-- Modal -->
         <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog modal-lg">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Tambah data gelombang
                         </h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                         <form action="<?= base_url('gelombang') ?>" method="post" enctype="multipart/form-data">
                             <div class="form-group">
                                 <label for="gel">Gelombang</label>
                                 <input type="text" name="gelombang" class="form-control" placeholder="Contoh : Gelombang 1" id="gel">
                             </div>
                             <div class="form-group">
                                 <label for="gel">Tahun Ajaran</label>
                                 <input type="text" name="tahun" class="form-control" placeholder="Contoh : 2021/2022" id="gel">
                             </div>
                             <div class="form-group">
                                 <label for="tb">Tanggal Buka </label>
                                 <input type="date" name="tgl_buka" class="form-control" id="b">
                             </div>
                             <div class="form-group">
                                 <label for="tb">Tanggal Tutup </label>
                                 <input type="date" name="tgl_tutup" class="form-control" id="b">
                             </div>
                             <div class="form-group">
                                 <label for="">Publish</label><br>
                                 <input type="radio" name="publish" value="1" id="">&nbsp; Active
                                 <input type="radio" name="publish" value="0" id="">&nbsp; Inactive
                             </div>
                             <div class="form-group">
                                 <label for="">Status Aktif</label><br>
                                 <input type="radio" name="is_active_gel" value="1" id="">&nbsp; Ya
                                 <input type="radio" name="is_active_gel" value="0" id="">&nbsp; Tidak
                             </div>
                             <div class="btn-group">
                                 <button class="btn btn-success btn-sm" type="submit">Simpan</button>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
         <!-- end modal -->