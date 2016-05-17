        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav class="" role="navigation">
                    <div class="nav toggle">
                        <a id="menu_toggle" href="#"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="<?php
                                if ($FotoProfil == NULL)
                                    echo base_url().'assets/images/user.png';
                                else
                                    echo base_url().$FotoProfil; //harus dikurangi ../
                                ?>" 
                                alt=""><?php echo $NamaLengkap . " "; ?>(Admin)
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">

                            <!--                            
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge bg-red pull-right">50%</span>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                -->   
                                <li>
                                    <a href="<?php echo base_url(); ?>pilihadmin/profiladmin"><i class="fa fa-user pull-right"></i>Profil Admin</a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url(); ?>pilihadmin/akunadmin"><i class="fa fa-user pull-right"></i>Akun</a>
                                </li>

                                
                                <li>
                                    <a href="javascript:;"><i class="fa fa-yelp pull-right"></i>Help</a>
                                </li>
                                <li>
                                    <a href="javascript:;"><i class="fa fa-cog pull-right"></i>Setting</a>
                                </li>


                                <li><a href="<?php echo base_url(); ?>home/sign_out"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                </li>

                            </ul>

                        </li>

                        <!--Notification-->
                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell-o"></i>
                                <span class="badge bg-red">6</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                                <?php foreach ($notifikasi->result() as $row){ ?>
                                <li>
                                    <a>
                                        <span class="image">
                                            <img src="<?php
                                            //$jumkarakter = strlen($LinkFoto);
                                            //$row->LinkFoto = substr($row->LinkFoto, 3, $jumkar-3); //mengambil string dari indeks ketiga sampai karakter terakhir
                                            if ($row->LinkFoto == NULL)
                                                echo base_url().'assets/images/user.png';
                                            else
                                                echo base_url().$row->LinkFoto; //harus dikurangi ../
                                            ?>" alt="Profile Image" />
                                        </span>
                                        <span>
                                        <span><strong><?php echo $row->Nama; ?></strong></span>
                                            <span class="time"><?php echo $row->Waktu; ?></span>
                                        </span>
                                        <span class="message">
                                            <?php echo $row->Notifikasi; ?> sebagai <?php echo $row->User; ?>. 
                                        </span>
                                    </a>
                                </li>
                                <?php } ?>
                                <li>
                                    <div class="text-center">
                                        <a href="<?php echo base_url(); ?>pilihadmin/notifikasi">
                                            <strong>Lihat Semua</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <!--Notifikasi Pesan-->
                        <li role="presentation" class="dropdown">
                            <!--data-toggle="dropdown"-->
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                                
                                <?php 
                                foreach($notifikasipesan->result() as $row): ?>
                                <li>
                                    <a>
                                        <span class="image">
                                            <img src="<?php
                                                //$jumkarlinkfoto = strlen($LinkFotoAlumni);
                                               // $row->LinkFotoAlumni = substr($row->LinkFotoAlumni, 3, $jumkar-3); //mengambil string dari indeks ketiga sampai karakter terakhir
                                                if ($row->LinkFotoAlumni == NULL)
                                                    echo base_url().'assets/images/user.png';
                                                else
                                                    echo base_url().$row->LinkFotoAlumni; //harus dikurangi ../
                                                ?>" alt="Profile Image" />
                                            </span>
                                            <span>
                                                <?php
                                                $row->Waktu = substr($row->Waktu, 11, 5);
                                                ?>
                                                <span><strong><?php echo $row->Pengirim; ?></strong></span>
                                                <span class="time"><?php echo $row->Waktu; ?></span>
                                            </span>
                                            <span class="message">
                                                <?php echo (SUBSTR($row->Pesan, 0, 20)).'...'; ?>
                                            </span>
                                        </a>
                                    </li>
                             
                               <?php endforeach; ?>

                                <li>
                                    <div class="text-center">
                                        <a href="<?php echo base_url(); ?>pilihadmin/pesan">
                                            <strong>Lihat Semua</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li> 
                </ul>
            </nav>
        </div>

    </div>
    <!-- /top navigation -->