<?php
require_once('layout/layout_head.php');
require_once('layout/layout_sidemenu.php');
require_once('layout/layout_topmenu.php');
?>

    <!-- page content -->
    <div class="right_col" role="main">

       <div class="col-md-3 col-sm-3 col-xs-3"> </div>

       <!--Tulis Pesan-->
       <div class="col-md-6 col-sm-6 col-xs-6">
        <div class="x_panel">
            <div class="x_title">
                <h2>Tulis Pesan</h2>
                <ul class="nav navbar-right">
                    <li><a href="#" class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                <form action="<?php echo base_url() ;?>pilihadmin/do_pesan" method="post"> 
                    <!--Penerima Pesan-->
                    <label for="inputPenerima">Kepada</label>
                    <input type="text" id="inputPenerima" required="required" class="form-control" name="inputPenerima" placeholder="Penerima"></>

                    <!--Input Pesan-->
                    <label for="inputPesan">Pesan</label>
                    <textarea id="inputPesan" required="required" class="form-control" name="inputPesan"></textarea>

                    <br>
                    <div class="form-group">
                        <center>
                            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                        </center>
                    </div>
                </form>    

            </div>


        </div>
    </div>

    <!--Pesan Masuk-->
    <div class="col-md-6 col-sm-6 col-xs-6">
        <div class="x_panel">
            <div class="x_title">
                <h2>Pesan Masuk (Inbox)</h2>
                <ul class="nav navbar-right">
                    <li><a href="#" class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Dari</th>
                            <th>Pesan</th>
                            <th>Waktu</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <?php foreach ($kotakmasuk->result() as $row){ ?>
                    <tbody>
                        <tr>
                            <th><?php echo $row->Pengirim; ?></th>
                            <td><?php echo (SUBSTR($row->Pesan, 0, 20)).'...'; ?></td>
                            <th><?php echo $row->Waktu; ?></th>
                            <td>
                                
                                <a type="button" class="btn btn-primary btn-xs" data-toggle="modal" href=".bs-example-modal-lg<?php echo $row->IdPesan; ?>"><i class="fa fa-reply"></i> Reply</a>

                                <!--Modal-->
                                    <div class="modal fade bs-example-modal-lg<?php echo $row->IdPesan; ?>" tabindex="-1" role="dialog" aria-hidden="true">

                                    <div class="modal-dialog modal-lg" style="width:650px">

                                        <div class="modal-content" >
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                                </button>
                                                <h3 class="modal-title" id="myModalLabel">Balas Pesan</h3>
                                            </div>
                                             <form action="<?php echo base_url() ;?>pilihadmin/do_pesan" method="post"> 
                                            <div class="modal-body">
                                                
                                               
                                                    <!--Penerima Pesan-->
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <label for="inputPenerima">Kepada</label>
                                                        <input type="text" id="inputPenerima" required="required" class="form-control" name="inputPenerima" placeholder="Penerima" value="<?php echo $row->Pengirim; ?>" readonly="readonly" />
                                                    </div>
                                                    
                                                    <!--Pesan Sebelumnya-->
                                                    <div class="col-md-12 col-sm-12 col-xs-12"> <br>
                                                        <div class="col-md-2 col-sm-2 col-xs-12">
                                                            <img src="<?php
                                                                        if ($row->LinkFotoAlumni == NULL)
                                                                            echo '../assets/images/user.png';
                                                                        else
                                                                        echo $row->LinkFotoAlumni; ?>"
                                                            width="75px" heigth="75px" alt="profile_img" class="img-circle">
                                                        </div>
                                                        <div class="col-md-10 col-sm-10 col-xs-12">
                                                            <textarea style="background-color:#eaeaea; color:black;" class="form-control" readonly="readonly"><?php echo $row->Pesan; ?></textarea>
                                                        </div>
                                                    </div>

                                                    <!--Pesan Sesudahnya-->
                                                    <div class="col-md-12 col-sm-12 col-xs-12"> <br>
                                                        <div class="col-md-10 col-sm-10 col-xs-12">
                                                            <textarea style="background-color:#0084ff; color:white;" id="inputPesan" required="required" class="form-control" name="inputPesan"></textarea>
                                                        </div>

                                                        <div class="col-md-2 col-sm-2 col-xs-12">
                                                            <img src="<?php
                                                                        if ($row->LinkFotoAdmin == NULL)
                                                                            echo '../assets/images/user.png';
                                                                        else
                                                                        echo $row->LinkFotoAdmin; ?>"
                                                            width="75px" heigth="75px" alt="profile_img" class="img-circle">
                                                        </div>
                                                    </div>
                                                
                                            </div>
                                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                            
                                            <div class="modal-footer">
                                                <center>
                                                <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <center>
                                            </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--End Modal-->
                                

                                <a  onClick="return confirm('Apakah anda yakin ingin menghapus ?')"
                                href="<?php echo base_url() ;?>pilihadmin/do_hapuskotakmasuk/<?php echo  $row->IdPesan; ?>"
                                class="btn btn-danger btn-xs">
                                <i class="fa fa-trash-o"></i>
                                Delete
                            </a>
                        </td>
                    </tr>
                </tbody>
                <?php } ?>

            </table>
        </div>
    </div>
</div>

<!--Pesan Keluar-->

<div class="col-md-6 col-sm-6 col-xs-6">
    <div class="x_panel">
        <div class="x_title">
            <h2>Pesan Keluar (Out Box)</h2>
            <ul class="nav navbar-right">
                <li><a href="#" class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>

        <div class="x_content">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Kepada</th>
                        <th>Pesan</th>
                        <th>Waktu</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <?php foreach ($kotakkeluar->result() as $row){ ?>
                <tbody>
                    <tr>
                        <th><?php echo $row->Penerima; ?></th>
                        <td><?php echo (SUBSTR($row->Pesan, 0, 20)).'...'; ?></td>
                        <th><?php echo $row->Waktu; ?></th>
                        <td>
                        
                        <a type="button" class="btn btn-primary btn-xs" data-toggle="modal" href=".bs-example-modal-lg<?php echo $row->IdPesan; ?>"><i class="fa fa-folder"></i> View</a>


                                <!--Modal-->
                                    <div class="modal fade bs-example-modal-lg<?php echo $row->IdPesan; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" style="width:650px">
                                        <div class="modal-content" >

                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                                </button>
                                                <h3 class="modal-title" id="myModalLabel">Lihat Pesan</h3>
                                            </div>
                                            <div class="modal-body">
                                                
                                                    <!--Penerima Pesan-->
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <label for="inputPenerima">Kepada</label>
                                                        <input type="text" id="inputPenerima" required="required" class="form-control" name="inputPenerima" placeholder="Penerima" value="<?php echo $row->Penerima; ?>" readonly="readonly" />
                                                    </div>
                                                    
                                                    <!--Lihat Pesan-->
                                                    <div class="col-md-12 col-sm-12 col-xs-12"> <br>
                                                        <div class="col-md-2 col-sm-2 col-xs-12">
                                                            <img src="<?php
                                                                        if ($row->LinkFotoAdmin == NULL)
                                                                            echo '../assets/images/user.png';
                                                                        else
                                                                        echo $row->LinkFotoAdmin; ?>"
                                                            width="75px" heigth="75px" alt="profile_img" class="img-circle">
                                                        </div>
                                                        <div class="col-md-10 col-sm-10 col-xs-12">
                                                            <textarea style="background-color:#0084ff; color:white;" class="form-control" readonly="readonly"><?php echo $row->Pesan; ?></textarea>
                                                        </div>
                                                    </div>
                                                
                                            </div>
                                            <br><br><br><br><br><br><br><br><br>
                                            
                                            <div class="modal-footer">
                                                <center>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Modal-->

                        <a  onClick="return confirm('Apakah anda yakin ingin menghapus ?')"
                            href="<?php echo base_url() ;?>pilihadmin/do_hapuskotakkeluar/<?php echo  $row->IdPesan; ?>"
                            class="btn btn-danger btn-xs">
                            <i class="fa fa-trash-o"></i>
                            Delete
                        </a>
                    </td>
                </tr>
            </tbody>
            <?php } ?>


        </table>
    </div>
</div>


<!-- footer content -->             
<?php require_once('layout/layout_footer.php'); ?>
<!-- /footer content -->
</div>
</div>
</div>
<!-- /page content -->

</div>

</div>

<?php require_once('layout/layout_script.php'); ?>

<script>
    NProgress.done();
</script>

<!--Alert Konfirmasi-->
<?php

if ($kirim_pesan_berhasil) echo "<script>
    window.onload = fungsi_notifikasi;
function fungsi_notifikasi()
{
    alert(" . '"' . $kirim_pesan_berhasil . '"' . ");
}
</script>";

else if ($hapus_kotak_masuk_berhasil) echo "<script>
    window.onload = fungsi_notifikasi;
function fungsi_notifikasi()
{
    alert(" . '"' . $hapus_kotak_masuk_berhasil . '"' . ");
}
</script>";

else if ($hapus_kotak_keluar_berhasil) echo "<script>
    window.onload = fungsi_notifikasi;
function fungsi_notifikasi()
{
    alert(" . '"' . $hapus_kotak_keluar_berhasil . '"' . ");
}
</script>";

?>

</body>

</html>
