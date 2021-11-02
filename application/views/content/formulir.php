     <div class="page-wrapper">
         <!-- ============================================================== -->
         <!-- Bread crumb and right sidebar toggle -->
         <!-- ============================================================== -->
         <div class="page-breadcrumb">
             <div class="row align-items-center">
                 <div class="col-md-6 col-8 align-self-center">
                     <h3 class="page-title mb-0 p-0">Formulir Pedaftaran</h3>
                     <div class="d-flex align-items-center">
                         <nav aria-label="breadcrumb">
                             <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">Formulir Pendaftaran</li>
                             </ol>
                         </nav>
                     </div>
                 </div>
             </div>
         </div>
         <div class="container-fluid">
             <div class="row">
                 <div class="col-md-12 text-center">
                     <div class="card mt-4 overflow-auto">
                         <div class="col-md-12 col-md-offset-1 p-5">
                             <form action="<?= base_url('InsertFormulir') ?>" method="post" enctype="multipart/form-data" class="f1">
                                 <div class="f1-steps">
                                     <div class="f1-progress">
                                         <div class="f1-progress-line" data-now-value="25" data-number-of-steps="4" style="width: 25%;"></div>
                                     </div>
                                     <div class="f1-step active">
                                         <div class="f1-step-icon"><i class="fa fa-user"></i></div>
                                         <p>Biodata Siswa/i</p>
                                     </div>
                                     <div class="f1-step">
                                         <div class="f1-step-icon"><i class="fa fa-users"></i></div>
                                         <p>Biodata Orang Tua</p>
                                     </div>
                                     <div class="f1-step">
                                         <div class="f1-step-icon"><i class="fa fa-user"></i></div>
                                         <p>Biodata Wali</p>
                                     </div>
                                     <div class="f1-step">
                                         <div class="f1-step-icon"><i class="fa fa-address-book"></i></div>
                                         <p>Sekolah Asal</p>
                                     </div>
                                 </div>
                                 <div id="flashdata" onload="clearme();">
                                     <?= $this->session->flashdata('message'); ?>
                                 </div>
                                 <!-- step 1 -->
                                 <fieldset>
                                     <h4>Biodata Siswa/i</h4>
                                     <div class="form-group">
                                         <label>Nama Lengkap</label>
                                         <input type="text" name="nama" value="<?= $this->session->userdata('namal') == '' ? set_value('nama')  :   $this->session->userdata('namal') ?>" placeholder="Nama Lengkap. (Max 50 Kata)" class="form-control">
                                     </div>
                                     <small style="color:red;"><?php echo form_error('nama'); ?></small>
                                     <div class="form-group">
                                         <label>Nama Panggilan</label>
                                         <input type="text" name="nama_panggilan" value="<?= $this->session->userdata('nama_panggilan') == '' ? set_value('nama_panggilan') : $this->session->userdata('nama_panggilan')   ?>" placeholder="Nama Panggilan. (Max 20 Kata)" class="form-control">
                                     </div>
                                     <small style="color:red;"><?php echo form_error('nama_panggilan'); ?></small>
                                     <div class="form-group">
                                         <label>Jenis Kelamin</label>
                                         <select name="kelamin" class="form-control" id="">
                                             <option value="" disabled selected> - Pilih Jenis Kelamin - </option>
                                             <option value="L" <?= $this->session->userdata('kelamin') == 'L' ? 'selected' : '' ?>>Laki - Laki</option>
                                             <option value="P" <?= $this->session->userdata('kelamin') == 'P' ? 'selected' : '' ?>>Perempuan</option>
                                         </select>
                                     </div>
                                     <small style="color:red;"><?php echo form_error('kelamin'); ?></small>
                                     <div class="form-group">
                                         <label>Tempat, tanggal lahir</label>
                                         <input type="text" name="ttl" value="<?= $this->session->userdata('ttl') == '' ? set_value('ttl') : $this->session->userdata('ttl')  ?>" placeholder="Tempat, 01-01-2010. (Max 20 Kata)" class="form-control">
                                     </div>
                                     <small style="color:red;"><?php echo form_error('ttl'); ?></small>
                                     <div class="form-group">
                                         <label>Nomor Induk Penduduk (&nbsp;NIK&nbsp;)</label>
                                         <input type="number" name="nik" value="<?= $this->session->userdata('nik') == '' ? set_value('nik')  : $this->session->userdata('nik') ?>" placeholder="Nomor Induk Penduduk. (Max 16 Kata)" class="form-control">
                                     </div>
                                     <small style="color:red;"><?php echo form_error('nik'); ?></small>
                                     <div class="form-group">
                                         <label>Agama</label>
                                         <select id="agama" name="agama" class="form-control" id="">
                                             <option value="" disabled selected> - Pilih Agama - </option>
                                             <option value="Islam" <?= $this->session->userdata('agama') == 'Islam' ? 'selected' : '' ?>>Islam</option>
                                             <option value="Kristen" <?= $this->session->userdata('agama') == 'Kristen' ? 'selected' : '' ?>>Kristen</option>
                                         </select>
                                     </div>
                                     <small style="color:red;"><?php echo form_error('agama'); ?></small>
                                     <div class="form-group">
                                         <label>Warganegara</label>
                                         <select name="warganegara" class="form-control" id="">
                                             <option value="" disabled selected> - Pilih Warganegara - </option>
                                             <option value="WNI" <?= $this->session->userdata('warganegara') == 'WNI' ? 'selected' : '' ?>>WNI</option>
                                             <option value="WNA" <?= $this->session->userdata('warganegara') == 'WNA' ? 'selected' : '' ?>>WNA</option>
                                         </select>
                                     </div>
                                     <small style="color:red;"><?php echo form_error('warganegara'); ?></small>
                                     <div class="form-group">
                                         <label>Saudara Kandung</label>
                                         <input type="number" name="saudara_kandung" value="<?= $this->session->userdata('saudara_kandung') == '' ? 0  : $this->session->userdata('saudara_kandung') ?>" placeholder="Saudara Kandung" class="form-control">
                                     </div>
                                     <small style="color:red;"><?php echo form_error('saudara_kandung'); ?></small>
                                     <div class="form-group">
                                         <label>Saudara Tiri</label>
                                         <input type="number" name="saudara_tiri" value="<?= $this->session->userdata('saudara_tiri') == '' ? 0  : $this->session->userdata('saudara_tiri') ?>" placeholder="Saudara Tiri" class="form-control">
                                     </div>
                                     <small style="color:red;"><?php echo form_error('saudara_tiri'); ?></small>
                                     <div class="form-group">
                                         <label>Saudara Angkat</label>
                                         <input type="number" name="saudara_angkat" value="<?= $this->session->userdata('saudara_angkat') == '' ? 0  : $this->session->userdata('saudara_angkat') ?>" placeholder="Saudara Angkat" class="form-control">
                                     </div>
                                     <small style="color:red;"><?php echo form_error('saudara_angkat'); ?></small>
                                     <div class="form-group">
                                         <label>Anak Ke</label>
                                         <input type="number" name="anak_ke" value="<?= $this->session->userdata('anak_ke') == '' ? 1  : $this->session->userdata('anak_ke') ?>" placeholder="Anak Ke" class="form-control">
                                     </div>
                                     <small style="color:red;"><?php echo form_error('anak_ke'); ?></small>
                                     <div class="form-group">
                                         <label>Berat Badan</label>
                                         <input type="number" name="bb" value="<?= $this->session->userdata('nik') == '' ? set_value('nik')  : $this->session->userdata('bb') ?>" placeholder="Berat Badan" class="form-control">
                                     </div>
                                     <small style="color:red;"><?php echo form_error('bb'); ?></small>
                                     <div class="form-group">
                                         <label>Tinggi Badan</label>
                                         <input type="number" name="tinggi" value="<?= $this->session->userdata('tinggi') == '' ? set_value('tinggi')  : $this->session->userdata('tinggi') ?>" placeholder="Tinggi Badan" class="form-control">
                                     </div>
                                     <small style="color:red;"><?php echo form_error('tinggi'); ?></small>
                                     <div class="form-group">
                                         <label>Golongan Darah</label>
                                         <select name="gol_darah" class="form-control" id="">
                                             <option value="" disabled selected> - Pilih Golongan Darah - </option>
                                             <option value="A" <?= $this->session->userdata('gol_darah') == 'A' ? 'selected' : '' ?>>A</option>
                                             <option value="B" <?= $this->session->userdata('gol_darah') == 'B' ? 'selected' : '' ?>>B</option>
                                             <option value="AB" <?= $this->session->userdata('gol_darah') == 'AB' ? 'selected' : '' ?>>AB</option>
                                             <option value="O" <?= $this->session->userdata('gol_darah') == '0' ? 'selected' : '' ?>>O</option>
                                             <option value="Tidak Tahu" <?= $this->session->userdata('gol_darah') == 'Tidak Tahu' ? 'selected' : '' ?>>Tidak Tahu</option>
                                         </select>
                                     </div>
                                     <small style="color:red;"><?php echo form_error('gol_darah'); ?></small>
                                     <div class="form-group">
                                         <label>Alamat Rumah</label>
                                         <textarea name="alamat_rumah" placeholder="Alamat Rumah. (Max 225 Kata)" class="form-control"><?= $this->session->userdata('alamat_rumah') == '' ? set_value('alamat_rumah')  : $this->session->userdata('alamat_rumah') ?></textarea>
                                     </div>
                                     <small style="color:red;"><?php echo form_error('alamat_rumah'); ?></small>
                                     <div class="form-group">
                                         <label>Kode Pos</label>
                                         <input type="number" name="kodepos" value="<?= $this->session->userdata('kodepos') == '' ? set_value('kodepos')  : $this->session->userdata('kodepos') ?>" placeholder="Kode Pos. (Max 8 kata)" class="form-control">
                                     </div>
                                     <small style="color:red;"><?php echo form_error('kode_pos'); ?></small>
                                     <div class="form-group">
                                         <label>Nomor Telp/Wa</label>
                                         <input type="number" name="telp_wa" value="<?= $this->session->userdata('telp_wa') == '' ? set_value('telp_wa')  : $this->session->userdata('telp_wa') ?>" placeholder="Nomor Telp/Wa. (Max 16 kata)" class="form-control">
                                     </div>
                                     <small style="color:red;"><?php echo form_error('telp_wa'); ?></small>
                                     <div class="form-group">
                                         <label>Tempat Tinggal</label>
                                         <textarea name="tempat_tinggal" placeholder="Tempat Tinggal. (Max 225 kata)" class="form-control"><?= $this->session->userdata('tempat_tinggal') == '' ? set_value('tempat_tinggal')  : $this->session->userdata('tempat_tinggal') ?></textarea>
                                     </div>
                                     <small style="color:red;"><?php echo form_error('tempat_tinggal'); ?></small>
                                     <div class="form-group">
                                         <label>Jarak rumah dari sekolah ( Meter )</label>
                                         <input type="number" name="jarak_dari_sekolah" value="<?= $this->session->userdata('jarak_dari_sekolah') == '' ? 0  : $this->session->userdata('jarak_dari_sekolah') ?>" placeholder="Jarak rumah dari sekolah" class="form-control">
                                     </div>
                                     <small style="color:red;"><?php echo form_error('jarak_dari_sekolah'); ?></small>
                                     <div class="f1-buttons">
                                         <button type="button" class="btn btn-primary btn-next">Selanjutnya <i class="fa fa-arrow-right"></i></button>
                                     </div>
                                 </fieldset>
                                 <!-- step 2 -->
                                 <fieldset>
                                     <h4>Biodata Orang Tua</h4>
                                     <div class="form-group">
                                         <label>Nama Ayah</label>
                                         <input type="text" name="nama_ayah" value="<?= $this->session->userdata('nama_ayah') == '' ? set_value('nama_ayah')  :   $this->session->userdata('nama_ayah') ?>" placeholder="Nama Ayah. (Max 50 kata)" class="form-control">
                                     </div>
                                     <small style="color:red;"><?php echo form_error('nama_ayah'); ?></small>
                                     <div class="form-group">
                                         <label>Pendidikan Ayah</label>
                                         <select name="pendidikan_ayah" class="form-control" id="">
                                             <option value="" selected disabled>- Pilih Pendidikan Ayah -</option>
                                             <option value="SD" <?php echo $this->session->userdata('pendidikan_ayah') == 'SD' ? 'selected' : '' ?>>SD</option>
                                             <option value="SMP" <?php echo $this->session->userdata('pendidikan_ayah') == 'SMP' ? 'selected' : '' ?>>SMP</option>
                                             <option value="SMA" <?php echo $this->session->userdata('pendidikan_ayah') == 'SMA' ? 'selected' : '' ?>>SMA</option>
                                             <option value="D1" <?php echo $this->session->userdata('pendidikan_ayah') == 'D1' ? 'selected' : '' ?>>D1</option>
                                             <option value="D2" <?php echo $this->session->userdata('pendidikan_ayah') == 'D2' ? 'selected' : '' ?>>D2</option>
                                             <option value="D3" <?php echo $this->session->userdata('pendidikan_ayah') == 'D3' ? 'selected' : '' ?>>D3</option>
                                             <option value="S1" <?php echo $this->session->userdata('pendidikan_ayah') == 'S1' ? 'selected' : '' ?>>S1</option>
                                             <option value="S2" <?php echo $this->session->userdata('pendidikan_ayah') == 'S2' ? 'selected' : '' ?>>S2</option>
                                             <option value="S3" <?php echo $this->session->userdata('pendidikan_ayah') == 'S3' ? 'selected' : '' ?>>S3</option>
                                         </select>
                                     </div>
                                     <small style="color:red;"><?php echo form_error('pendidikan_ayah'); ?></small>
                                     <div class="form-group">
                                         <label>Penghasilan Ayah</label>
                                         <select name="penghasilan_ayah" class="form-control" id="">
                                             <option value="" selected disabled>- Pilih Penghasilan Ayah -</option>
                                             <option value="<Rp. 1000.000" <?php echo $this->session->userdata('penghasilan_ayah') == '<Rp. 1000.000' ? 'selected' : '' ?>>
                                                 < Rp. 1000.000</option>
                                             <option value=">Rp. 1000.000" <?php echo $this->session->userdata('penghasilan_ayah') == '>Rp. 1000.000' ? 'selected' : '' ?>> > Rp. 1000.000</option>
                                             <option value=">Rp. 2000.000" <?php echo $this->session->userdata('penghasilan_ayah') == '>Rp. 2000.000' ? 'selecetd' : '' ?>> > Rp. 2000.000</option>
                                             <option value="Rp. 3000.000" <?php echo $this->session->userdata('penghasilan_ayah') == 'Rp. 3000.000' ? 'selected' : '' ?>> Rp. 3000.000</option>
                                             <option value=">Rp. 3000.000" <?php echo $this->session->userdata('penghasilan_ayah') == '>Rp. 3000.000' ? 'selected' : '' ?>> > Rp. 3000.000</option>
                                             <option value=">Rp. 4000.000" <?php echo $this->session->userdata('penghasilan_ayah') == '>Rp. 4000.000' ? 'selected' : '' ?>> > Rp. 4000.000</option>
                                             <option value="Rp. 5000.000" <?php echo $this->session->userdata('penghasilan_ayah') == 'Rp. 5000.000' ? 'selected' : '' ?>> Rp. 5000.000</option>
                                         </select>
                                     </div>
                                     <small style="color:red;"><?php echo form_error('penghasilan_ayah'); ?></small>
                                     <div class="form-group">
                                         <label>Nama Ibu</label>
                                         <input type="text" name="nama_ibu" value="<?= $this->session->userdata('nama') == '' ? set_value('nama')  :   $this->session->userdata('nama_ibu') ?>" placeholder="Nama Ibu. (Max 50 kata)" class="form-control">
                                     </div>
                                     <small style="color:red;"><?php echo form_error('nama_ibu'); ?></small>
                                     <div class="form-group">
                                         <label>Pendidikan Ibu</label>
                                         <select name="pendidikan_ibu" class="form-control" id="">
                                             <option value="" selected disabled>- Pilih Pendidikan Ibu -</option>
                                             <option value="SD" <?php echo $this->session->userdata('pendidikan_ibu') == 'SD' ? 'selected' : '' ?>>SD</option>
                                             <option value="SMP" <?php echo $this->session->userdata('pendidikan_ibu') == 'SMP' ? 'selected' : '' ?>>SMP</option>
                                             <option value="SMA" <?php echo $this->session->userdata('pendidikan_ibu') == 'SMA' ? 'selected' : '' ?>>SMA</option>
                                             <option value="D1" <?php echo $this->session->userdata('pendidikan_ibu') == 'D1' ? 'selected' : '' ?>>D1</option>
                                             <option value="D2" <?php echo $this->session->userdata('pendidikan_ibu') == 'D2' ? 'selected' : '' ?>>D2</option>
                                             <option value="D3" <?php echo $this->session->userdata('pendidikan_ibu') == 'D3' ? 'selected' : '' ?>>D3</option>
                                             <option value="S1" <?php echo $this->session->userdata('pendidikan_ibu') == 'S1' ? 'selected' : '' ?>>S1</option>
                                             <option value="S2" <?php echo $this->session->userdata('pendidikan_ibu') == 'S2' ? 'selected' : '' ?>>S2</option>
                                             <option value="S3" <?php echo $this->session->userdata('pendidikan_ibu') == 'S3' ? 'selected' : '' ?>>S3</option>
                                         </select>
                                     </div>
                                     <small style="color:red;"><?php echo form_error('pendidikan_ibu'); ?></small>
                                     <div class="form-group">
                                         <label>Penghasilan Ibu</label>
                                         <select name="penghasilan_ibu" class="form-control" id="">
                                             <option value="" selected disabled>- Pilih Penghasilan Ibu -</option>
                                             <option value="<Rp. 1000.000" <?php echo $this->session->userdata('penghasilan_ayah') == '<Rp. 1000.000' ? 'selected' : '' ?>>
                                                 < Rp. 1000.000</option>
                                             <option value=">Rp. 1000.000" <?php echo $this->session->userdata('penghasilan_ibu') == '>Rp. 1000.000' ? 'selected' : '' ?>> > Rp. 1000.000</option>
                                             <option value=">Rp. 2000.000" <?php echo $this->session->userdata('penghasilan_ibu') == '>Rp. 2000.000' ? 'selected' : '' ?>> > Rp. 2000.000</option>
                                             <option value="Rp. 3000.000" <?php echo $this->session->userdata('penghasilan_ibu') == 'Rp. 3000.000' ? 'selected' : '' ?>> Rp. 3000.000</option>
                                             <option value=">Rp. 3000.000" <?php echo $this->session->userdata('penghasilan_ibu') == '>Rp. 3000.000' ? 'selected' : '' ?>> > Rp. 3000.000</option>
                                             <option value=">Rp. 4000.000" <?php echo $this->session->userdata('penghasilan_ibu') == '>Rp. 4000.000' ? 'selected' : '' ?>> > Rp. 4000.000</option>
                                             <option value="Rp. 5000.000" <?php echo $this->session->userdata('penghasilan_ibu') == 'Rp. 5000.000' ? 'selected' : '' ?>> Rp. 5000.000</option>
                                             <option value="Tidak Bekerja" <?php echo $this->session->userdata('penghasilan_ibu') == 'Tidak Bekerja' ? 'selected' : '' ?>> Tidak Bekerja</option>
                                         </select>
                                     </div>
                                     <small style="color:red;"><?php echo form_error('penghasilan_ibu'); ?></small>
                                     <div class="f1-buttons">
                                         <button type="button" class="btn btn-warning btn-previous"><i class="fa fa-arrow-left"></i> Sebelumnya</button>
                                         <button type="button" class="btn btn-primary btn-next">Selanjutnya <i class="fa fa-arrow-right"></i></button>
                                     </div>
                                 </fieldset>
                                 <!-- step 3 -->
                                 <fieldset>
                                     <h4>Biodata Wali Murid</h4>
                                     <div class="form-group">
                                         <label>Nama Wali</label>
                                         <input type="text" name="nama_wali" value="<?= $this->session->userdata('nama_wali') == '' ? set_value('nama_wali') : $this->session->userdata('nama_wali') ?>" placeholder="Nama Wali. (Max 50 kata)" class="form-control">
                                     </div>
                                     <small style="color:red;"><?php echo form_error('nama_wali'); ?></small>
                                     <div class="form-group">
                                         <label>Pendidikan Wali</label>
                                         <select name="pendidikan_wali" class="form-control" id="">
                                             <option value="" selected disabled>- Pilih Pendidikan Wali -</option>
                                             <option value="SD" <?php echo $this->session->userdata('pendidikan_wali') == 'SD' ? 'selected' : '' ?>>SD</option>
                                             <option value="SMP" <?php echo $this->session->userdata('pendidikan_wali') == 'SMP' ? 'selected' : '' ?>>SMP</option>
                                             <option value="SMA" <?php echo $this->session->userdata('pendidikan_wali') == 'SMA' ? 'selected' : '' ?>>SMA</option>
                                             <option value="D1" <?php echo $this->session->userdata('pendidikan_wali') == 'D1' ? 'selected' : '' ?>>D1</option>
                                             <option value="D2" <?php echo $this->session->userdata('pendidikan_wali') == 'D2' ? 'selected' : '' ?>>D2</option>
                                             <option value="D3" <?php echo $this->session->userdata('pendidikan_wali') == 'D3' ? 'selected' : '' ?>>D3</option>
                                             <option value="S1" <?php echo $this->session->userdata('pendidikan_wali') == 'S1' ? 'selected' : '' ?>>S1</option>
                                             <option value="S2" <?php echo $this->session->userdata('pendidikan_wali') == 'S2' ? 'selected' : '' ?>>S2</option>
                                             <option value="S3" <?php echo $this->session->userdata('pendidikan_wali') == 'S3' ? 'selected' : '' ?>>S3</option>
                                         </select>
                                     </div>
                                     <small style="color:red;"><?php echo form_error('pendidikan_wali'); ?></small>
                                     <div class="form-group">
                                         <label>Penghasilan Wali</label>
                                         <select name="penghasilan_wali" class="form-control" id="">
                                             <option value="" selected disabled>- Pilih Penghasilan Wali -</option>
                                             <option value="<Rp. 1000.000" <?php echo $this->session->userdata('penghasilan_wali') == '<Rp. 1000.000' ? 'selected' : '' ?>>
                                                 < Rp. 1000.000</option>
                                             <option value=">Rp. 1000.000" <?php echo $this->session->userdata('penghasilan_wali') == '>Rp. 1000.000' ? 'selected' : '' ?>> > Rp. 1000.000</option>
                                             <option value=">Rp. 2000.000" <?php echo $this->session->userdata('penghasilan_wali') == '>Rp. 2000.000' ? 'seleceted' : '' ?>> > Rp. 2000.000</option>
                                             <option value="Rp. 3000.000" <?php echo $this->session->userdata('penghasilan_wali') == 'Rp. 3000.000' ? 'selected' : '' ?>> Rp. 3000.000</option>
                                             <option value=">Rp. 3000.000" <?php echo $this->session->userdata('penghasilan_wali') == '>Rp. 3000.000' ? 'selected' : '' ?>> > Rp. 3000.000</option>
                                             <option value=">Rp. 4000.000" <?php echo $this->session->userdata('penghasilan_wali') == '>Rp. 4000.000' ? 'selected' : '' ?>> > Rp. 4000.000</option>
                                             <option value="Rp. 5000.000" <?php echo $this->session->userdata('penghasilan_wali') == 'Rp. 5000.000' ? 'selected' : '' ?>> Rp. 5000.000</option>
                                         </select>
                                     </div>
                                     <small style="color:red;"><?php echo form_error('penghasilan_wali'); ?></small>
                                     <div class="form-group">
                                         <label>Hubungan Keluarga</label>
                                         <input type="text" name="hubungan_keluarga" value="<?= $this->session->userdata('hubungan_keluarga') == '' ? set_value('hubungan_keluarga') : $this->session->userdata('hubungan_keluarga') ?>" placeholder="Hubungan Keluarga. (Max 20 kata)" class="form-control">
                                     </div>
                                     <small style="color:red;"><?php echo form_error('hubungan_keluarga'); ?></small>
                                     <div class="f1-buttons">
                                         <button type="button" class="btn btn-warning btn-previous"><i class="fa fa-arrow-left"></i> Sebelumnya</button>
                                         <button type="button" class="btn btn-primary btn-next">Selanjutnya <i class="fa fa-arrow-right"></i></button>
                                     </div>
                                 </fieldset>
                                 <!-- step 4 -->
                                 <fieldset>
                                     <h4>Sekolah Asal</h4>
                                     <div class="form-group">
                                         <label>Nama Sekolah Asal</label>
                                         <input type="text" name="nama_sekolah" value="<?= $this->session->userdata('nama_sekolah') == '' ? set_value('nama_sekolah') : $this->session->userdata('nama_sekolah') ?>" placeholder="Nama Sekolah Asal. (Max 50 kata)  " class="form-control">
                                     </div>
                                     <small style="color:red;"><?php echo form_error('nama_sekolah'); ?></small>
                                     <div class="form-group">
                                         <label>Alamat Sekolah Asal</label>
                                         <textarea name="alamat_sekolah" placeholder="Alamat Sekolah Asal. (Max 225 kata)" class="form-control"><?= $this->session->userdata('alamat_sekolah') == '' ? set_value('alamat_sekolah') : $this->session->userdata('alamat_sekolah') ?></textarea>
                                     </div>
                                     <small style="color:red;"><?php echo form_error('alamat_sekolah'); ?></small>
                                     <div class="f1-buttons">
                                         <button type="button" class="btn btn-warning btn-previous"><i class="fa fa-arrow-left"></i> Sebelumnya</button>
                                         <button type="submit" class="btn btn-primary btn-submit"><i class="fa fa-save"></i> Submit</button>
                                 </fieldset>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>