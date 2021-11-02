<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Formulir PPDB</title>
</head>
<style>
    .judul {
        text-align: center;
    }

    .tgl {
        float: right;
        text-decoration: underline;
    }

    .n {
        text-align: center;
    }

    .biodata p {
        margin-bottom: -2;
    }

    .ft {
        margin-top: 50px;
        border-top: solid 2px;
    }

    .tgl {
        font-size: 10px;
    }

    .f {
        font-size: 10px;
    }

    footer {
        position: absolute;
    }
</style>

<body>
    <small class="tgl"><?php echo date('d F Y') ?></small>
    <div class="kop">
        <h3 class="judul">FORMULIR PENDAFTARAN MI TERPADU KITA</h3>
        <h4 class="judul">DESA BULUMANIS LOR</h4>
    </div>
    <hr>
    <p class="n"><b>Biodata Siswa/i</b></p>
    <?php foreach ($biodata as $siswa) { ?>
        <div class="biodata">
            <p>Nama : <span><?php echo $siswa->nama ?></span></p>
            <p>Nama Panggilan : <span><?php echo $siswa->nama_panggilan ?></span></p>
            <p>Kelamin : <span><?php echo $siswa->kelamin ?></span></p>
            <p>Tempat Tanggal Lahir : <span><?php echo $siswa->ttl ?></span></p>
            <p>NIK : <span><?php echo $siswa->nik ?></span></p>
            <p>Agama : <span><?php echo $siswa->agama ?></span></p>
            <p>Warganegara : <span><?php echo $siswa->warganegara ?></span></p>
            <p>Saudara Kandung : <span><?php echo $siswa->saudara_kandung ?></span></p>
            <p>Saudara Tiri : <span><?php echo $siswa->saudara_tiri ?></span></p>
            <p>Saudara Angkat : <span><?php echo $siswa->saudara_angkat ?></span></p>
            <p>Anak Ke : <span><?php echo $siswa->anak_ke ?></span></p>
            <p>Berat Badan : <span><?php echo $siswa->bb ?></span></p>
            <p>Tinggi Badan : <span><?php echo $siswa->tinggi ?></span></p>
            <p>Golongan Darah : <span><?php echo $siswa->gol_darah ?></span></p>
            <p>Alamat Rumah : <span><?php echo $siswa->alamat_rumah ?></span></p>
            <p>Kode Pos : <span><?php echo $siswa->kodepos ?></span></p>
            <p>No. Telepon / WA : <span><?php echo $siswa->telp_wa ?></span></p>
            <p>Tempat Tinggal : <span><?php echo $siswa->tempat_tinggal ?></span></p>
            <p>Jarak Rumah dari Sekolah : <span><?php echo $siswa->jarak_dari_sekolah ?> Meter</span></p>
        </div>
    <?php } ?>
    <p class="n"><b>Biodata Orangtua</b></p>
    <?php foreach ($orangtua as $p) { ?>
        <div class="biodata">
            <p>Nama Ayah : <span><?php echo $p->nama_ayah ?></span></p>
            <p>Pendikan Ayah : <span><?php echo $p->pendidikan_ayah ?></span></p>
            <p>Penghasilan Ayah : <span>Rp. <?php echo $p->penghasilan_ayah ?></span></p>
            <p>Nama Ibu : <span><?php echo $p->nama_ibu ?></span></p>
            <p>Pendikan Ibu : <span><?php echo $p->pendidikan_ibu ?></span></p>
            <p>Penghasilan Ibu : <span>Rp. <?php echo $p->penghasilan_ibu ?></span></p>
        </div>
    <?php } ?>
    <p class="n"><b>Biodata Wali</b></p>
    <?php foreach ($wali as $w) { ?>
        <div class="biodata">
            <p>Nama Wali : <span><?php echo $w->nama_wali ?></span></p>
            <p>Pendikan Wali : <span><?php echo $w->pendidikan_wali ?></span></p>
            <p>Penghasilan Wali : <span>Rp. <?php echo $w->penghasilan_wali ?></span></p>
            <p>Hubungan Keluarga : <span>Rp. <?php echo $w->hubungan_keluarga ?></span></p>
        </div>
    <?php } ?>
    <p class="n"><b>Sekolah Asal</b></p>
    <?php foreach ($asal as $a) { ?>
        <div class="biodata">
            <p>Nama Sekolah Asal : <span><?php echo $a->nama_sekolah ?></span></p>
            <p>Alamat Sekolah Asal : <span><?php echo $a->alamat_sekolah ?></span></p>
        </div>
    <?php } ?>
    <div class="ft">
        <footer>
            <small class="f"> <b>PERHATIAN!</b> Silahkan melakukan pendaftaran ulang ke <b>MI TERPADU KITA</b> terakhir pada : ....... , dengan membawa formulir ini sebagai bukti telah mendaftar secara online !</small>
        </footer>
    </div>
</body>

</html>