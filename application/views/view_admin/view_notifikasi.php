<?php
require_once('layout/layout_head.php');
require_once('layout/layout_sidemenu.php');
require_once('layout/layout_topmenu.php');
?>
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>
                            Tabel Notifikasi
                        </h3>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2 class="section">Lihat Notifikasi</h2>
                                <ul class="nav navbar-right">
                                    <li><a href="#" class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>

                            <div class="x_content">

                                <table id="example" class="table table-striped responsive-utilities jambo_table">
                                    <thead>
                                        <tr class="headings">
                                            <th>
                                                <input type="checkbox" class="tableflat">
                                            </th>
                                            <th>No. </th>
                                            <th>Nama </th>
                                            <th>Tahun Lulus </th>
                                            <th>Lembaga </th>
                                            <th>User </th>
                                            <th>Notifikasi </th>
                                            <th>Waktu </th>
                                            <th>Tanggal </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php foreach ($tabelnotiflogin->result() as $row){ ?>
                                        <tr class="even pointer">
                                            <td class="a-center ">
                                                <input type="checkbox" class="tableflat">
                                            </td>
                                            <td><?php echo $row->Id; ?></td>
                                            <td><?php echo $row->Nama; ?></td>
                                            <td><?php echo $row->TahunLulus; ?></td>
                                            <td><?php echo $row->Lembaga; ?></td>  
                                            <td><?php echo $row->User; ?></td>
                                            <td><?php echo $row->Notifikasi; ?></td>
                                            <td><?php echo $row->Waktu; ?></td>
                                            <td><?php echo $row->Tanggal; ?></td>

                                            
                                        </tr>
                                    <?php } ?>

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>

                    <br />
                    <br />
                    <br />

                </div>
            

            <!-- footer content -->
            <?php require_once('layout/layout_footer.php'); ?>
            <!-- /footer content -->

            </div>
        </div>
        <!-- /page content -->


<?php require_once('layout/layout_script.php'); ?>

<script>
    NProgress.done();
</script>


<!-- Datatables -->
        <script>
            $(document).ready(function () {
                $('input.tableflat').iCheck({
                    checkboxClass: 'icheckbox_flat-green',
                    radioClass: 'iradio_flat-green'
                });
            });

            var asInitVals = new Array();
            $(document).ready(function () {
                var oTable = $('#example').dataTable({
                    "oLanguage": {
                        "sSearch": "Search all columns:"
                    },
                    "aoColumnDefs": [
                        {
                            'bSortable': false,
                            'aTargets': [0]
                        } //disables sorting for column one
            ],
                    'iDisplayLength': 12,
                    "sPaginationType": "full_numbers",
                    "dom": 'T<"clear">lfrtip',
                    "tableTools": {
                    "sSwfPath": "<?php echo base_url('assets2/js/Datatables/tools/swf/copy_csv_xls_pdf.swf'); ?>"
                    }
                    
                });
                $("tfoot input").keyup(function () {
                    /* Filter on the column based on the index of this element's parent <th> */
                    oTable.fnFilter(this.value, $("tfoot th").index($(this).parent()));
                });
                $("tfoot input").each(function (i) {
                    asInitVals[i] = this.value;
                });
                $("tfoot input").focus(function () {
                    if (this.className == "search_init") {
                        this.className = "";
                        this.value = "";
                    }
                });
                $("tfoot input").blur(function (i) {
                    if (this.value == "") {
                        this.className = "search_init";
                        this.value = asInitVals[$("tfoot input").index(this)];
                    }
                });
            });
        </script>

</body>
</html>