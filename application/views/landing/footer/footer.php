    </main>
    <footer class="site-footer section-padding" id="contact">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 me-auto col-12">

                </div>

                <div class="col-lg-2 col-md-6 col-12 my-4 my-lg-0">
                    <h5 class="mb-lg-4 mb-3">MI Tepadu Kita</h5>

                    <p><a href="">-</a>
                    <p>

                    <p>Pati</p>
                </div>

                <div class="col-lg-3 col-md-6 col-12 ms-auto">
                    <h5 class="mb-lg-4 mb-2">Socials</h5>

                    <ul class="social-icon">
                        <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                        <li><a href="#" class="social-icon-link bi-twitter"></a></li>

                        <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                        <li><a href="#" class="social-icon-link bi-youtube"></a></li>
                    </ul>

                    <div>
                        <p class="copyright-text">Copyright © PPDB 2021
                            <br><br>Design: <a href="" target="_parent"></a>
                        </p>
                        <p class="copyright-text">Distributed By: <a href="h" target="_parent"></a></p>
                    </div>
                </div>



            </div>
            </section>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="<?= base_url() ?>/assets/landing/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>/assets/landing/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/assets/landing/js/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>/assets/landing/js/scrollspy.min.js"></script>
    <script src="<?= base_url() ?>/assets/landing/js/custom.js"></script>

    <script src="<?= base_url() ?>/assets/DataTables/datatables.js"></script>
    <script src="<?= base_url() ?>/assets/DataTables/datatables.min.js"></script>

    <script>
        table = $('#gelombangView').DataTable({
            responsive: true,
            "destroy": true,
            "processing": true,
            "serverSide": true,
            "render": $.fn.dataTable.render.text(),
            "order": [],

            "ajax": {
                "url": "<?= site_url('viewGelombang') ?>",
                "type": "POST"
            },


            "columnDefs": [{
                "targets": [0],
                "orderable": false,
                "width": 5
            }],

        });
    </script>

    <!--
    
TemplateMo 566 Medic Care

https://templatemo.com/tm-566-medic-care

-->
    </body>


    </html>