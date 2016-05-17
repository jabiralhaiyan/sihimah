      <!--NAVBAR-->
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="brand" href="<?php echo base_url(); ?>home"><img src="<?php echo base_url(); ?>assets2/img/logo-himah.png" width="50px" height="50px"/> &nbsp</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
              <ul class="nav navbar-nav">
                <li <?php echo $beranda_active; ?>><a href="<?php echo base_url(); ?>home"><i class="fa fa-home"></i> BERANDA</a></li>
                <li <?php echo $profil_active; ?>><a href="<?php echo base_url(); ?>pilihalumni/profil"><i class="fa fa-user"></i> PROFIL</a></li>
                <li <?php echo $pesan_active; ?>><a href="<?php echo base_url(); ?>pilihalumni/pesan"> <i class="fa fa-envelope"> </i> PESAN</a></li>
                <li <?php echo $tentang_active; ?>><a href="<?php echo base_url(); ?>pilihalumni/tentang"> <i class="fa fa-bookmark"> </i> TENTANG</a></li>
              </ul>
              <form class="navbar-form navbar-left" role="search" method="post" action="<?php echo base_url(); ?>pilihalumni/carialumni">
                <div class="form-group">
                  <input name="inputNama" type="text" class="form-control" placeholder="Mencari Data Alumni">
                </div>
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </form>
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <div class="btn-group">
                    <a href="<?php echo base_url(); ?>pilihalumni/profil" class="btn btn-primary"><i class="fa fa-user"></i> <?php echo $NamaLengkap; ?></a>
                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="#"><span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                     <li <?php echo $update_active; ?>><a href="<?php echo base_url(); ?>pilihalumni/ubahdatapribadi"><i class="fa fa-pencil"></i> Mengubah Data</a></li>
                     <li <?php echo $upload_active; ?>><a href="<?php echo base_url(); ?>pilihalumni/uploadfoto"><i class="fa fa-camera"></i> Upload Foto</a></li>
                     
                     <li class="divider"></li>
                     
                     <li class="nav-header">Pengaturan</li>
                     <li <?php echo $password_active; ?>><a href="<?php echo base_url(); ?>pilihalumni/ubahpassword"><i class="fa fa-lock"></i> Mengubah Password</a></li>
                     
                     <li class="divider"></li>
                     
                     <li class="nav-header">Akun</li>
                     <li><a href="<?php echo base_url(); ?>home/sign_out"><i class="fa fa-power-off"></i> Keluar</a></li>
                   </ul>
                 </div>
               </li>
             </ul>
           </div>
         </div>
       </nav>