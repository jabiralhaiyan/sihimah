<?php
require_once('layout/layout_head.php');
require_once('layout/layout_sidemenu.php');
require_once('layout/layout_topmenu.php');
?>
<!-- page content -->
<div class="right_col" role="main">

    <!-- Start to do list -->
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <br>
                <?php 
                if($status == 0)
                    echo "<h3>Silakan Masukkan Pencarian</h3>";
                else if($status == 1)
                    echo "<h3 style='background-color:#66cc66; color:white; '>Hasil Pencarian</h3>";
                else if($status == 2)
                    echo "<h3 style='background-color:#ff6666; color:white; '>Data tidak ditemukan</h3>";
                ?> 


                <ul class="nav navbar-right">
                    <li><a href="#" class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">


                <form action="<?php echo base_url() ;?>pilihadmin/caridataalumni" data-parsley-validate class="form-horizontal form-label-left" method="post">

                    <!--Cari Nama-->
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputNama">Nama</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="inputNama" name="inputNama" placeholder="Nama" class="form-control col-md-7 col-xs-12" />
                        </div>
                    </div>

                    <!--Cari Lembaga-->
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputLembaga">Lembaga </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control" id="inputLembaga" name="inputLembaga">
                                <!----Pilih Lembaga---->
                                <option>-</option>
                                <?php foreach($lembaga->result() as $row) { ?>
                                <option><?php echo $row->Lembaga; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>


                    <!--Cabang PTN/PTS-->
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputCabang">Cabang PTN/PTS</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control" id="inputCabang" name="inputCabang">
                                <!----Pilih Cabang PTN/PTS---->
                                <option>-</option>
                                <?php foreach($cabang->result() as $row) { ?>
                                <option><?php echo $row->Cabang; ?></option>
                                <?php } ?> 
                            </select>
                        </div>
                    </div>



                    <!--Button Proses-->
                    <div class="form-group">
                        <center>
                           <button type="submit" class="btn btn-success">Cari</button>
                       </center>
                   </div>

               </form>

               <!--view tabel-->
               <table id="example" class="table table-striped responsive-utilities jambo_table">
                <thead>
                    <tr class="headings">
                        <th>
                            <input type="checkbox" class="tableflat">
                        </th>
                        <th>Nama Lengkap</th>
                        <th>Lembaga</th>
                        <th>Tahun Lulus</th>
                        <th>Cabang</th>
                        <th>Alamat Sekarang</th>
                        <th>Email</th>
                        <th>No. HP</th>
                        <th class=" no-link last"><span class="nobr">Action</span>
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <?php 
                    if ($status==1)
                    { 
                                        //$counter = 0;
                        foreach ($query->result() as $row) { ?>
                        <!--$counter++;-->


                        <tr class="even pointer">
                            <td class="a-center ">
                                <input type="checkbox" class="tableflat">
                            </td>
                            <td><?php echo  $row->NamaLengkap; ?></td>
                            <td><?php echo  $row->Lembaga; ?></td>
                            <td><?php echo  $row->TahunLulus; ?></td>
                            <td><?php echo  $row->Cabang; ?></td>
                            <td><?php echo  $row->AlamatSekarang; ?></td>
                            <td><?php echo  $row->Email; ?></td>
                            <td><?php echo  $row->NoHP; ?></td>


                            <!--<td class="a-right a-right "> </td>-->
                            <td>
                                <a 
                                <?php echo 'href="'.base_url().'pilihadmin/updatedataalumni/'.$row->Username.'" '?>
                                class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>


                                <a  onClick="return confirm('Apakah anda yakin ingin menghapus ?')"
                                href="<?php echo base_url() ;?>pilihadmin/hapusdataalumni/<?php echo  $row->Username; ?>"
                                class="btn btn-danger btn-xs">
                                <i class="fa fa-trash-o"></i>
                                Delete
                            </a>
                        </td>
                    </tr>
                    <?php } 
                }
                ?>
            </tbody>

        </table>
        <!--/view tabel-->


    </div>



</div>

<!-- footer content -->             
<?php require_once('layout/layout_footer.php');?>
<!-- /footer content -->

</div>
</div>
<!-- End to do list -->

<!-- /page content -->

</div>

</div>

<?php require_once('layout/layout_script.php');?>

<script>
    NProgress.done();
</script>

<!--Alert Konfirmasi-->
<?php
if ($hapus_data_alumni_berhasil) echo "<script>
    window.onload = fungsi_notifikasi;

function fungsi_notifikasi()
{
    alert(" . '"' . $hapus_data_alumni_berhasil . '"' . ");
}

</script>";

else if ($update_data_alumni_berhasil) echo "<script>
    window.onload = fungsi_notifikasi;

function fungsi_notifikasi()
{
    alert(" . '"' . $update_data_alumni_berhasil . '"' . ");
}
</script>";
?>

<!--Datatables Script-->
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
<!--/Datatables Script-->

</body>

</html>