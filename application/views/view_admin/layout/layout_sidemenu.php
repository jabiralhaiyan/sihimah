    <div class="container body">
        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="home" class="site_title"><img src="<?php echo base_url(); ?>assets/images/logo-himah.png" width="50px" height="50px"> <span>SI-HIMAH</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="<?php 
                            //$jumkar = strlen($FotoProfil);
                                //$FotoProfil = substr($FotoProfil, 3, $jumkar-3); //mengambil string dari indeks ketiga sampai karakter terakhir
                            if ($FotoProfil == NULL)
                                echo base_url().'assets/images/user.png';
                            else
                                echo base_url().$FotoProfil; ?>" 
                            alt="..." class="img-circle profile_img">
                        </div>

                        <div class="profile_info">
                            <span>Selamat Datang,</span>

                            <h2><?php echo $NamaLengkap; ?></h2>

                        </div>
                    </div>
                    <!-- /menu prile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General Admin</h3>
                            <ul class="nav side-menu">

                                <!--Home-->
                                <li><a href="<?php echo base_url(); ?>home"><i class="fa fa-home"></i> Home</a>
                                </li>

                                <!--Laporan-->
                                <li><a><i class="fa fa-file"></i> Laporan<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li>
                                            <a href="<?php echo base_url(); ?>pilihadmin/laporanpemetaan"><i class="fa fa-pie-chart"></i> Laporan Pemetaan</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>pilihadmin/laporanpengunjung"><i class="fa fa-bar-chart"></i> Laporan Pengunjung</a>
                                        </li>
                                        <li>
                                             <a href="<?php echo base_url(); ?>pilihadmin/laporanlog"><i class="fa fa-table"></i> Laporan Log Aktifitas</a>
                                         </li>

                                     </ul>
                                 </li>

                                 <!--Alumni-->
                                 <li><a><i class="fa fa-mortar-board"></i> Alumni <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li>
                                            <a href="<?php echo base_url(); ?>pilihadmin/tambahakun"><i class="fa fa-plus-square"></i> Tambah Alumni</a>
                                        </li>
                                        <li>
                                           <a href="<?php echo base_url(); ?>pilihadmin/caridataalumni"><i class="fa fa-search"></i> Pencarian</a>
                                       </li>

                                   </ul>
                               </li>

                               <li><a href="<?php echo base_url(); ?>pilihadmin/tentang"><i class="fa fa-info-circle"></i> Tentang</a>
                               </li>

                               <li><a href="<?php echo base_url(); ?>pilihadmin/pesan"><i class="fa fa-envelope"></i> Pesan 
                               </a>
                           </li>

                           <li><a href="<?php echo base_url(); ?>pilihadmin/ekspor_impor"><i class="fa fa-th-large"></i> Export/Import 
                           </a>
                       </li> 

                   </ul>
               </div>


           </div>
           <!-- /sidebar menu -->

           <!-- /menu footer buttons -->
                 <!--
                 <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
            -->
            <!-- /menu footer buttons -->
        </div>
    </div>