<?php
  require_once('layout/layout_head.php');
  require_once('layout/layout_menu.php');
?>

      <!--CONTENT-->
      <!-- Mengubah Data Pribadi -->
      <div class="container">
       <center><h2>Mengubah Password</h2></center>
       <center style="color:red;">&nbsp &nbsp * (wajib diisi)</center>
       <br>
        <!--center style="background-color:red; color:white;">&nbsp &nbsp tes</center>
        <br>
        <center style="background-color:red; color:white;">&nbsp &nbsp tes</center>
        <br-->
        <?php

        if ($username_kosong) echo "<center style='background-color:red; color:white;'>&nbsp &nbsp " . $username_kosong . "</center><br>";
        if ($password_kosong) echo "<center style='background-color:red; color:white;'>&nbsp &nbsp " . $password_kosong . "</center><br>";
        if ($ulangi_password_kosong) echo "<center style='background-color:red; color:white;'>&nbsp &nbsp " . $ulangi_password_kosong . "</center><br>";
        if ($username_sudah_ada) echo "<center style='background-color:red; color:white;'>&nbsp &nbsp " . $username_sudah_ada . "</center><br>";
        if ($password_dan_ulangi_password_tidak_sama) echo "<center style='background-color:red; color:white;'>&nbsp &nbsp " . $password_dan_ulangi_password_tidak_sama . "</center><br>";
        ?>
        <div class="col-md-3"></div>

        <form class="form-horizontal" action="<?php echo base_url(); ?>pilihalumni/do_ubahpassword" method="post">

          <!--Ganti Password-->
          <div class="col-md-6">
           <!--Username-->
           <div class="form-group">
            <label class="col-lg-2 col-lg-2 control-label" for="inputUsername" style="text-align: left">Username <span style="color:red;">*</span></label>
            <div class="col-lg-10">
             <input name="inputUsername" class="form-control" type="text" id="inputNRP" value="<?php echo ($Username ? $Username : "");?>" placeholder="Username" readonly>
           </div>
         </div>

         <!--Password-->
         <div class="form-group">
          <label class="col-lg-2 control-label" for="inputPassword" style="text-align: left">Password <span style="color:red;">*</span></label>
          <div class="col-lg-10">
           <input name="inputPassword" class="form-control" type="password" id="inputPassword" value="<?php echo ($Password ? $Password : "");?>" placeholder="Password">
         </div>
       </div>

       <!--Ulangi Password-->
       <div class="form-group">
        <label class="col-lg-2 control-label" for="inputUlangiPassword" style="text-align: left">Ulangi Password <span style="color:red;">*</span></label>
        <div class="col-lg-10">
         <input name="inputUlangiPassword" class="form-control" type="password" id="inputUlangiPassword" value="" placeholder="Konfirmasi Password">
       </div>
     </div>

   </div>

   <div class="col-md-3"></div>

   <br><br><br><br><br><br><br><br><br><br>
   <center>
    <button type="submit" class="btn btn-primary">Simpan Data</button>
  </center>
  <div id="push"></div>

  </form>

  </div>

  <?php require_once('layout/layout_script.php'); ?>
  <?php require_once('layout/layout_footer.php'); ?>
