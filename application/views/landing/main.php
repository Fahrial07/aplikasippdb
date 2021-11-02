<section class="hero" id="hero">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?= base_url() ?>/assets/landing/images/slider/portrait-successful-mid-adult-doctor-with-crossed-arms.jpg" class="img-fluid" alt="">
                        </div>

                        <div class="carousel-item">
                            <img src="<?= base_url() ?>/assets/landing/images/slider/young-asian-female-dentist-white-coat-posing-clinic-equipment.jpg" class="img-fluid" alt="">
                        </div>

                        <div class="carousel-item">
                            <img src="<?= base_url() ?>/assets/landing/images/slider/doctor-s-hand-holding-stethoscope-closeup.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>

                <div class="heroText d-flex flex-column justify-content-center" style="opacity: 0.90;">
                    <h2 class="mt-auto mb-2">
                        Pendaftaran PPDB
                        <div class="animated-info">
                            <span class="animated-item">
                                <h5 class="animated-col">Tahun</h5>
                            </span>
                            <span class="animated-item">
                                <?php foreach ($tahun as $t) { ?>
                                    <h5 class="animated-col"><?php echo $t->tahun ?></h5>
                                <?php } ?>
                            </span>
                        </div>
                    </h2>
                    <div class="heroLinks d-flex flex-wrap align-items-center">
                        <a class="custom-link me-4" href="<?= base_url('DaftarUser') ?>" data-hover="Daftar PPDB">Daftar PPDB</a>
                        <a class="custom-link me-4" href="<?= base_url('MasukUser') ?>" data-hover="Masuk">Masuk</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<style>
    tr {
        text-align: center;
        vertical-align: middle;
    }

    th {
        font-size: 14px;
    }

    td {
        font-size: 12px;
    }
</style>
<section class="section-padding" id="about">
    <div class="container">
        <div class="row">
            <h2 style="text-align:center;">TENTANG</h2>
            <?php foreach ($tentang as $data) { ?>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="mb-lg-3 mb-3"><?php echo $data->judul ?></h2>
                    <h5><?php echo $data->slogan ?></h5>
                    <p><?php echo $data->isi ?></p>
                </div>
            <?php } ?>
            <div class="col-lg-6 col-md-5 col-12 mx-auto">
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
</section>


<section class="section-padding pb-0" id="alur">
    <div class="container">
        <div class="row">

            <h2 class="text-center mb-lg-5 mb-4">Alur Pendaftaran PPDB</h2>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-body bg-primary">
                                <?php foreach ($alur as $a) { ?>
                                    <h3 style="color:white; font-weight:bold; text-align:center;"><?php echo $a->judul ?></h3>
                                    <hr style="background-color:white; height:5px;">
                                    <h6 style="color:white"><?php echo $a->isi_alur ?></h6>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding" id="booking">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-12 mx-auto">
                <div class="booking-form">

                    <h2 class="text-center mb-lg-3 mb-2">Book an appointment</h2>

                    <form role="form" action="#booking" method="post">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Full name" required>
                            </div>

                            <div class="col-lg-6 col-12">
                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>
                            </div>

                            <div class="col-lg-6 col-12">
                                <input type="telephone" name="phone" id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control" placeholder="Phone: 123-456-7890">
                            </div>

                            <div class="col-lg-6 col-12">
                                <input type="date" name="date" id="date" value="" class="form-control">

                            </div>

                            <div class="col-12">
                                <textarea class="form-control" rows="5" id="message" name="message" placeholder="Additional Message"></textarea>
                            </div>

                            <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                <button type="submit" class="form-control" id="submit-button">Book Now</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</section>