  <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2018 Ela Admin
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="{{ asset('public/assets/js/main.js') }}"></script>

    <?php if ($themes == "form") : ?>
        <script src="{{ asset('public/assets/js/lib/chosen/chosen.jquery.min.js') }}"></script>

        <script>
        jQuery(document).ready(function() {
            jQuery(".standardSelect").chosen({
                disable_search_threshold: 10,
                no_results_text: "Oops, nothing found!",
                width: "100%"
            });
        });
        </script>

    <?php elseif ($themes == "table") : ?>
        <script src="{{ asset('public/assets/js/lib/data-table/datatables.min.js') }}"></script>
        <script src="{{ asset('public/assets/js/lib/data-table/dataTables.bootstrap.min.js') }}"></script>
        <script src="{{ asset('public/assets/js/lib/data-table/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('public/assets/js/lib/data-table/buttons.bootstrap.min.js') }}"></script>
        <script src="{{ asset('public/assets/js/lib/data-table/jszip.min.js') }}"></script>
        <script src="{{ asset('public/assets/js/lib/data-table/vfs_fonts.js') }}"></script>
        <script src="{{ asset('public/assets/js/lib/data-table/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('public/assets/js/lib/data-table/buttons.print.min.js') }}"></script>
        <script src="{{ asset('public/assets/js/lib/data-table/buttons.colVis.min.js') }}"></script>
        <script src="{{ asset('public/assets/js/init/datatables-init.js') }}"></script>

        <script type="text/javascript">
            $(document).ready(function() {
            $('#bootstrap-data-table-export').DataTable();
        } );
        </script>

    <?php endif; ?>


</body>
</html>
