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
        </body>
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

            function clearme() {

                <?php
                if (isset($_SESSION['message1'])) :
                    unset($_SESSION['message1']);
                elseif (isset($_SESSION['message1'])) :
                    unset($_SESSION['message1']);
                endif;
                ?>
            }
        </script>

        </html>