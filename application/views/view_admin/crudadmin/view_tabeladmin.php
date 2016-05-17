<?php
require_once(APPPATH.'/views/view_admin/layout/layout_head.php');
require_once(APPPATH.'/views/view_admin/layout/layout_sidemenu.php');
require_once(APPPATH.'/views/view_admin/layout/layout_topmenu.php');
?>
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>
                            Tabel Admin
                        </h3>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2 class="section">Aktif Admin</h2>
                                <ul class="nav navbar-right">
                                    <li><a href="#" class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>

                            <div class="x_content">
                                <a href="<?php echo base_url(); ?>pilihadmin/tambahakunadmin" class="btn btn-primary"><i class="fa fa-plus-square"></i> &nbsp Tambah Admin</a>

                                <table id="example" class="table table-striped responsive-utilities jambo_table">
                                    <thead>
                                        <tr class="headings">
                                            <th>
                                                <input type="checkbox" class="tableflat">
                                            </th>
                                            <th>Nama </th>
                                            <th>Alamat Sekarang </th>
                                            <th>No. HP </th>
                                            <th>Username </th>
                                           

                                            <th class=" no-link last"><span class="nobr">Action</span>
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php foreach ($data_user->result() as $row){ ?>
                                        <tr class="even pointer">
                                            <td class="a-center ">
                                                <input type="checkbox" class="tableflat">
                                            </td>
                                            <td><?php echo  $row->Nama; ?></td>
                                            <td><?php echo  $row->Alamat; ?></td>
                                            <td><?php echo  $row->NoHP; ?></td>
                                            <td><?php echo  $row->Username; ?></td>

                                            <!--<td class="a-right a-right "> </td>-->
                                            <td>
                                                    <a 
                                                    <?php echo 'href="'.base_url().'pilihadmin/ubahdataadmin/'.$row->Username.'" '?>
                                                    class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                                    
                                                    
                                                    <a  onClick="return confirm('Apakah anda yakin ingin menghapus ?')"
                                                        href="<?php echo base_url(); ?>pilihadmin/do_hapusdataadmin/<?php echo  $row->Username; ?>"
                                                        class="btn btn-danger btn-xs">
                                                        <i class="fa fa-trash-o"></i>
                                                        Delete
                                                    </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                        
                                        <!--
                                        <tr class="odd pointer">
                                            <td class="a-center ">
                                                <input type="checkbox" class="tableflat">
                                            </td>
                                            <td class=" "> </td>
                                            <td class=" "> </td>
                                            <td class=" "> </td>
                                            <td class=" "> </td>
                                            
                                            <td class="a-right a-right "></td>
                                            <td>
                                                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                                            </td>
                                        </tr>
                                        <tr class="even pointer selected">
                                            <td class="a-center ">
                                                <input type="checkbox" class="tableflat">
                                            </td>
                                            <td class=" "></td>
                                            <td class=" "></td>
                                            <td class=" "></td>                        
                                            <td class=" "></td>
                                            
                                            <td class="a-right a-right "></td>
                                            <td>
                                                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                                            </td>
                                        </tr>
                                        -->
                                       
                                        
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>

                    <br />
                    <br />
                    <br />

                </div>
            </div>

            <!-- footer content -->
            <?php require_once(APPPATH.'/views/view_admin/layout/layout_footer.php'); ?>
            <!-- /footer content -->

        </div>
        <!-- /page content -->

<?php require_once(APPPATH.'/views/view_admin/layout/layout_script.php'); ?>
<script>
    NProgress.done();
</script>

  
<!--Alert Konfirmasi-->
<?php

        if ($tambah_akun_admin_berhasil) echo "<script>
                                                    window.onload = fungsi_notifikasi;
                                                    
                                                    function fungsi_notifikasi()
                                                    {
                                                        alert(" . '"' . $tambah_akun_admin_berhasil . '"' . ");
                                                    }
                                               </script>";
        else if ($hapus_data_berhasil) echo "<script>
                                                        window.onload = fungsi_notifikasi;
                                                        
                                                        function fungsi_notifikasi()
                                                        {
                                                            alert(" . '"' . $hapus_data_berhasil . '"' . ");
                                                        }
                                                    </script>";
        else if ($ubah_data_berhasil) echo "<script>
                                                        window.onload = fungsi_notifikasi;
                                                        
                                                        function fungsi_notifikasi()
                                                        {
                                                            alert(" . '"' . $ubah_data_berhasil . '"' . ");
                                                        }
                                                    </script>";
?>


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