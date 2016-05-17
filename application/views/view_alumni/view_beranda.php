<?php
  require_once('layout/layout_head.php');
  require_once('layout/layout_menu.php');
?>  
           <!--Modal-->
<div class="modal fade" id="myModal" role="dialog" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">#News!</h4>
      </div>
        <div class="alert alert-info">
          <p style="font-size:18px"><strong>Silahkan memperbarui informasi tentang diri anda untuk keperluan administrasi organisasi</strong></p>
          <p style="font-size:16px">Terima-Kasih.</p>
          </div>
      <div class="modal-footer">
        <a href="<?php echo base_url(); ?>pilihalumni/ubahdatapribadi" id="myBtn" class="btn btn-primary">Update Data</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

    <!-- PAGE CONTENT -->
    <div class="container">
      <div class="page-header">
        <center>

          <h3>Selamat Datang di<br>Sistem Informasi Himpunan Alumni Amaatul Ummah</h3>
          <h3>(SIHIMAH)</h3>

          <a><img src="<?php echo base_url(); ?>assets2/img/logo-himah.png" width="290px" height="290px"> </a>
        </center>
      </div>

      <div class="row">
        <div class="col-md-1"></div>

        <div class="col-md-4" style="background-color: #e3e3e3">
          <p><a class="btn btn-large btn-block btn-primary" href="<?php echo base_url(); ?>pilihalumni/ubahdatapribadi">Mengubah Data Pribadi</a></p>
          <p>Menu ini digunakan untuk mengubah data pribadi setiap alumni agar data yang tersimpan menjadi data yang valid dan update.</p>
        </div>  
        <div class="col-md-2"></div>
        <div class="col-md-4" style="background-color: #e3e3e3">
          <p><a class="btn btn-large btn-block btn-primary" href="<?php echo base_url(); ?>pilihalumni/uploadfoto">Upload Foto</a></p>
          <p>Menu ini digunakan untuk mengubah foto profil akun alumni.</p>
          <br>
        </div>
        <div class="col-md-1"></div>
      </div>
  </div>

<?php require_once('layout/layout_script.php'); ?>

  <script>
     $('#myModal').modal('toggle')
  </script>

      <?php
      if ($ubah_data_pribadi_berhasil) echo "<script>
       window.onload = fungsi_notifikasi;

     function fungsi_notifikasi()
     {
      alert(" . '"' . $ubah_data_pribadi_berhasil . '"' . ");
    }
  </script>";
  if ($ubah_password_berhasil) echo "<script>
    window.onload = fungsi_notifikasi;

  function fungsi_notifikasi()
  {
    alert(" . '"' . $ubah_password_berhasil . '"' . ");
  }
</script>";                    
?>

<?php require_once('layout/layout_footer.php'); ?>