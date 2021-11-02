        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © 2021 Material Pro Admin by <a href="https://www.wrappixel.com/">wrappixel.com </a>
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="<?= base_url() ?>/assets/plugins/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="<?= base_url() ?>/assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url() ?>/assetsjs/app-style-switcher.js"></script>
        <!--Wave Effects -->
        <script src="<?= base_url() ?>/assetsjs/waves.js"></script>
        <!--Menu sidebar -->
        <script src="<?= base_url() ?>/assetsjs/sidebarmenu.js"></script>
        <!-- ============================================================== -->
        <!-- This page plugins -->
        <!-- ============================================================== -->
        <!-- chartist chart -->
        <script src="<?= base_url() ?>/assets/plugins/chartist-js/dist/chartist.min.js"></script>
        <script src="<?= base_url() ?>/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
        <!--c3 JavaScript -->
        <script src="<?= base_url() ?>/assets/plugins/d3/d3.min.js"></script>
        <script src="<?= base_url() ?>/assets/plugins/c3-master/c3.min.js"></script>
        <!--Custom JavaScript -->
        <script src="<?= base_url() ?>/assets/js/pages/dashboards/dashboard1.js"></script>
        <script src="<?= base_url() ?>/assets/js/custom.js"></script>

        <script src="<?= base_url() ?>/assets/plugins/bootstrap/js/bootstrap.js"></script>
        <script src="<?= base_url() ?>/assets/plugins/bootstrap/js/bootstrap..min.js"></script>
        <script src="<?= base_url() ?>/assets/plugins/bootstrap/js/tether.js"></script>

        <script src="<?= base_url() ?>/assets/form_wizard/wizard.js"></script>

        <script src="<?= base_url() ?>/assets/DataTables/datatables.js"></script>
        <script src="<?= base_url() ?>/assets/DataTables/datatables.min.js"></script>

        <script src="<?= base_url() ?>/assets/ckeditor/build-config.js"></script>
        <script src="<?= base_url() ?>/assets/ckeditor/ckeditor.js"></script>
        <script src="<?= base_url() ?>/assets/ckeditor/style.js"></script>
        <script src="<?= base_url() ?>/assets/ckeditor/config.js"></script>

        </body>
        <script>
            $(document).ready(function() {
                // Ketika halaman sudah siap (sudah selesai di load)
                $("#check-all").click(function() { // Ketika user men-cek checkbox all
                    if ($(this).is(":checked")) // Jika checkbox all diceklis
                        $(".check-item").prop("checked", true); // ceklis semua checkbox siswa dengan class "check-item"
                    else // Jika checkbox all tidak diceklis
                        $(".check-item").prop("checked", false); // un-ceklis semua checkbox siswa dengan class "check-item"
                });

                $("#btn-delete").click(function() { // Ketika user mengklik tombol delete
                    var confirm = window.confirm("Apakah Anda yakin ingin menghapus data aktivitas ini?"); // Buat sebuah alert konfirmasi

                    if (confirm) // Jika user mengklik tombol "Ok"
                        $("#form-delete").submit(); // Submit form
                });

                $("#btn-del").click(function() { // Ketika user mengklik tombol delete
                    var confirm = window.confirm("Apakah Anda yakin ingin menghapus data gelombang ini?"); // Buat sebuah alert konfirmasi

                    if (confirm) // Jika user mengklik tombol "Ok"
                        $("#form-del").submit(); // Submit form
                });

                $("#btn-tentang").click(function() { // Ketika user mengklik tombol delete
                    var confirm = window.confirm("Apakah Anda yakin ingin menghapus data tentang ini?"); // Buat sebuah alert konfirmasi

                    if (confirm) // Jika user mengklik tombol "Ok"
                        $("#form-tentang").submit(); // Submit form
                });

            });
        </script>
        <script>
            setTimeout(function() {
                $('#flashdata').hide();
            }, 3000);
        </script>
        <script>
            function clearme() {
                <?php
                if (isset($_SESSION['message'])) :
                    unset($_SESSION['message']);
                elseif (isset($_SESSION['message'])) :
                    unset($_SESSION['message']);
                endif;
                ?>
            }
        </script>
        <script>
            table = $('#datasiswa').DataTable({
                responsive: true,
                "destroy": true,
                "processing": true,
                "serverSide": true,
                "render": $.fn.dataTable.render.text(),
                "order": [],

                "ajax": {
                    "url": "<?= site_url('dataDaftar') ?>",
                    "type": "POST"
                },


                "columnDefs": [{
                    "targets": [0],
                    "orderable": false,
                    "width": 5
                }],

            });
        </script>
        <script>
            table = $('#activity').DataTable({
                responsive: true,
                "destroy": true,
                "processing": true,
                "serverSide": true,
                "render": $.fn.dataTable.render.text(),
                "order": [],

                "ajax": {
                    "url": "<?= site_url('logUser') ?>",
                    "type": "POST"
                },


                "columnDefs": [{
                    "targets": [0],
                    "orderable": false,
                    "width": 5
                }],

            });
        </script>

        <script>
            table = $('#gelombang').DataTable({
                responsive: true,
                "destroy": true,
                "processing": true,
                "serverSide": true,
                "render": $.fn.dataTable.render.text(),
                "order": [],

                "ajax": {
                    "url": "<?= site_url('getGelombang') ?>",
                    "type": "POST"
                },


                "columnDefs": [{
                    "targets": [0],
                    "orderable": false,
                    "width": 5
                }],

            });
        </script>
        <script>
            table = $('#Arsip').DataTable({
                responsive: true,
                "destroy": true,
                "processing": true,
                "serverSide": true,
                "render": $.fn.dataTable.render.text(),
                "order": [],

                "ajax": {
                    "url": "<?= site_url('arsip') ?>",
                    "type": "POST"
                },


                "columnDefs": [{
                    "targets": [0],
                    "orderable": false,
                    "width": 5
                }],

            });
        </script>

        <script>
            table = $('#data-akun').DataTable({
                responsive: true,
                "destroy": true,
                "processing": true,
                "serverSide": true,
                "render": $.fn.dataTable.render.text(),
                "order": [],

                "ajax": {
                    "url": "<?= site_url('getData') ?>",
                    "type": "POST"
                },


                "columnDefs": [{
                    "targets": [0],
                    "orderable": false,
                    "width": 5
                }],

            });
        </script>

        <script>
            table = $('#tentang').DataTable({
                responsive: true,
                "destroy": true,
                "processing": true,
                "serverSide": true,
                "render": $.fn.dataTable.render.text(),
                "order": [],

                "ajax": {
                    "url": "<?= site_url('datatentang') ?>",
                    "type": "POST"
                },


                "columnDefs": [{
                    "targets": [0],
                    "orderable": false,
                    "width": 5
                }],

            });
        </script>
        <script>
            table = $('#alur').DataTable({
                responsive: true,
                "destroy": true,
                "processing": true,
                "serverSide": true,
                "render": $.fn.dataTable.render.text(),
                "order": [],

                "ajax": {
                    "url": "<?= site_url('viewalur') ?>",
                    "type": "POST"
                },


                "columnDefs": [{
                    "targets": [0],
                    "orderable": false,
                    "width": 5
                }],

            });
        </script>

        </html>