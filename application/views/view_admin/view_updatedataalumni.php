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
                        <h3>Form Update Akun</h3>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Form Update Akun <small>Alumni</small></h2>
                                <ul class="nav navbar-right">
                                    <li><a href="#" class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>

                            <div class="x_content">
                                <form class="form-horizontal form-label-left" action="<?php echo base_url() ;?>pilihadmin/do_updatedataalumni" method="POST" enctype="multipart/form-data">

                                    <!--tidak terlihat-->
                                    <input name="alamatUsernameTujuan" type="hidden" value="<?php echo ($Username ? $Username : "");?>">
                                    <!--LinkFoto-->
                                    <input name="fotoProfil" type="hidden" value="<?php echo ($LinkFoto ? $LinkFoto : "");?>">

                                    <!-- Smart Wizard -->
                                    <p>Isilah informasi data alumni selengkap-lengkapnya !</p>
                                    <?php
                                    if ($username_sudah_ada)
                                        echo "<p style='background-color:#ff6666 ; color:white'>" . $username_sudah_ada . "</p>";
                                    if ($nama_lembaga_tidak_terdaftar)
                                        echo "<p style='background-color:#ff6666 ; color:white'>" . $nama_lembaga_tidak_terdaftar . "</p>";
                                    if ($nama_lengkap_kosong)
                                        echo "<p style='background-color:#ff6666 ; color:white'>" . $nama_lengkap_kosong . "</p>";
                                    if ($jenis_kelamin_kosong)
                                        echo "<p style='background-color:#ff6666 ; color:white'>" . $jenis_kelamin_kosong . "</p>";
                                    if ($nama_lembaga_kosong)
                                        echo "<p style='background-color:#ff6666 ; color:white'>" . $nama_lembaga_kosong . "</p>";
                                    if ($tahun_lulus_kosong)
                                        echo "<p style='background-color:#ff6666 ; color:white'>" . $tahun_lulus_kosong . "</p>";
                                    if ($username_kosong)
                                        echo "<p style='background-color:#ff6666 ; color:white'>" . $username_kosong . "</p>";
                                    if ($password_kosong)
                                        echo "<p style='background-color:#ff6666 ; color:white'>" . $password_kosong . "</p>";
                                    if ($ulangi_password_kosong)
                                        echo "<p style='background-color:#ff6666 ; color:white'>" . $ulangi_password_kosong . "</p>";
                                    if ($password_dan_ulangi_password_tidak_sama)
                                        echo "<p style='background-color:#ff6666 ; color:white'>" . $password_dan_ulangi_password_tidak_sama . "</p>";

                                //error upload foto
                                    if ($file_fotoprofil)
                                        echo "<p style='background-color:#ff6666 ; color:white'>" . $file_fotoprofil . "</p>";
                                    if ($nama_fotoprofil)
                                        echo "<p style='background-color:#ff6666 ; color:white'>" . $nama_fotoprofil . "</p>";
                                    if ($ukuran_fotoprofil)
                                        echo "<p style='background-color:#ff6666 ; color:white'>" . $ukuran_fotoprofil . "</p>";
                                    if ($format_fotoprofil)
                                        echo "<p style='background-color:#ff6666 ; color:white'>" . $format_fotoprofil . "</p>";
                                    if ($error_fotoprofil)
                                        echo "<p style='background-color:#ff6666 ; color:white'>" . $error_fotoprofil . "</p>";

                                    ?>
                                    <div id="wizard" class="form_wizard wizard_horizontal">
                                        <ul class="wizard_steps">
                                            <!--Informasi Umum-->
                                            <li>
                                                <a href="#step-1">
                                                    <span class="step_no">1</span>
                                                    <span class="step_descr">
                                                        Step 1<br />
                                                        <small>Informasi Umum</small>
                                                    </span>
                                                </a>
                                            </li>
                                            <!--Informasi Lanjutan-->
                                            <li>
                                                <a href="#step-2">
                                                    <span class="step_no">2</span>
                                                    <span class="step_descr">
                                                        Step 2<br />
                                                        <small>Informasi Lanjutan</small>
                                                    </span>
                                                </a>
                                            </li>
                                            <!--Informasi Orang-Tua-->
                                            <li>
                                                <a href="#step-3">
                                                    <span class="step_no">3</span>
                                                    <span class="step_descr">
                                                        Step 3<br />
                                                        <small>Informasi Orang-Tua</small>
                                                    </span>
                                                </a>
                                            </li>
                                            <!--Media Sosial-->
                                            <li>
                                                <a href="#step-4">
                                                    <span class="step_no">4</span>
                                                    <span class="step_descr">
                                                        Step 4<br />
                                                        <small>Media Sosial</small>
                                                    </span>
                                                </a>
                                            </li>
                                            <!--Foto Profil-->
                                            <li>
                                                <a href="#step-5">
                                                    <span class="step_no">5</span>
                                                    <span class="step_descr">
                                                        Step 5<br />
                                                        <small>Foto Profil</small>
                                                    </span>
                                                </a>
                                            </li>
                                            <!--Username & Password-->
                                            <li>
                                                <a href="#step-6">
                                                    <span class="step_no">6</span>
                                                    <span class="step_descr">
                                                        Step 6<br />
                                                        <small>Username & Password</small>
                                                    </span>
                                                </a>
                                            </li>

                                        </ul>


                                        <!--Deskripsi Informasi Umum-->
                                        <div id="step-1">
                                            <!--<form class="form-horizontal form-label-left">-->
                                            <!--Nama Lengkap-->
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputNamaLengkap">Nama Lengkap <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" id="inputNamaLengkap" name="inputNamaLengkap" value="<?php echo $NamaLengkap; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>
                                            <!--Nama Panggilan--> 
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputNamaPanggilan">Nama Panggilan <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" id="inputNamaPanggilan" name="inputNamaPanggilan" value="<?php echo $NamaPanggilan; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>

                                            <!--Jenis Kelamin-->
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Janis Kelamin</label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div id="gender" class="btn-group" data-toggle="buttons">
                                                        <label class="btn btn-default active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                            <input type="radio" name="inputJenisKelamin" value="L" checked> &nbsp; Laki-Laki &nbsp;
                                                        </label>
                                                        <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                            <input type="radio" name="inputJenisKelamin" value="P"> Perempuan
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Tempat Tanggal Lahir-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputTempatLahir">Tempat Lahir - Tanggal Lahir
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input style="width:110px;" type="text" id="inputTempatLahir" name="inputTempatLahir" value="<?php echo $TempatLahir; ?>" class="form-control col-md-7 col-xs-12">&nbsp;-&nbsp;

                                                <input style="width:145px;height:35px" type="date" id="inputTanggalLahir" name="inputTanggalLahir" value="<?php echo $TanggalLahir; ?>" placeholder="Tanggal Lahir">
                                            </div>
                                        </div>

                                        <!--Nama Lembaga-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Lembaga <span class="required">*</span></label>

                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select class="select2_single form-control" name="inputCabangLembaga" required="required">
                                                    <?php foreach($lembaga->result() as $row) {
                                                        if ($Lembaga==$row->Lembaga)
                                                            echo '<option selected>'.$row->Lembaga.'</option>';
                                                        else
                                                            echo '<option>'.$row->Lembaga.'</option>';
                                                    } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <!--Tahun Lulus-->
                                        <div class="form-group">
                                            <label for="inputTahunLulus" class="control-label col-md-3 col-sm-3 col-xs-12">Tahun Lulus <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select class="select2_single form-control" name="inputTahunLulus" required="required">
                                                    <?php foreach($tahunlulus->result() as $row) {
                                                        if ($TahunLulus==$row->TahunLulus)
                                                            echo '<option selected>'.$row->TahunLulus.'</option>';
                                                        else
                                                            echo '<option>'.$row->TahunLulus.'</option>';
                                                    } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <!--Cabang PTN/PTS-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Cabang PTN/PTS <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select class="select2_single form-control" name="inputCabang" required="required">
                                                    <?php foreach($cabang->result() as $row) {
                                                        if ($Cabang==$row->Cabang)
                                                            echo '<option selected>'.$row->Cabang.'</option>';
                                                        else
                                                            echo '<option>'.$row->Cabang.'</option>';
                                                    } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <!--Alamat Asal-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputAlamatAsal" >Alamat Asal
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea name="inputAlamatAsal" id="inputAlamatAsal" class="form-control" rows="2" placeholder="Alamat Asal"><?php echo $AlamatAsal; ?></textarea>
                                            </div>
                                        </div>

                                        <!--Alamat Sekarang-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputAlamatSekarang">Alamat Sekarang
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea name="inputAlamatSekarang" id="inputAlamatSekarang" class="form-control" rows="2" placeholder="Alamat Sekarang"><?php echo $AlamatSekarang; ?></textarea>
                                            </div>
                                        </div>

                                        <!--No. HP-->
                                        <div class="form-group">
                                            <label for="inputTahunLulus" class="control-label col-md-3 col-sm-3 col-xs-12">No. Handphone <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="input-prepend">
                                                    <span class="add-on">+62</span>
                                                    <input name="inputNoHP" class="input-large" id="inputNoHP" type="text" value="<?php echo $NoHP; ?>" placeholder="81234....." required="required">                                    
                                                </div>
                                            </div>
                                        </div>

                                        <!--Email-->
                                        <div class="form-group">
                                            <label for="inputEmail" class="control-label col-md-3 col-sm-3 col-xs-12">Email <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="inputEmail" class="form-control col-md-7 col-xs-12" type="text" name="inputEmail" value="<?php echo $Email; ?>" placeholder="yourmail@mail.com" required="required">
                                            </div>
                                        </div>


                                        <!--</form>-->

                                    </div>

                                    <!--Deskripsi Informasi Lanjutan-->
                                    <div id="step-2">
                                       <!--<form class="form-horizontal form-label-left">-->

                                    <!--Perguruan Tinggi-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Perguruan Tinggi</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select class="select2_single" name="inputPerguruanTinggi" style="width:100%">
                                                    <?php foreach($perguruantinggi->result() as $row) {
                                                        if ($PerguruanTinggi==$row->PerguruanTinggi)
                                                            echo '<option selected>'.$row->PerguruanTinggi.'</option>';
                                                        else
                                                            echo '<option>'.$row->PerguruanTinggi.'</option>';
                                                    } ?>
                                                </select>
                                            </div>
                                        </div>
                                    
                                    <!--Jurusan-->
                                       <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputJurusan">Jurusan
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea name="inputJurusan" id="inputJurusan" class="form-control" rows="2" placeholder="Teknik Material dan Metalurgi"><?php echo $Jurusan; ?></textarea>
                                        </div>
                                    </div>

                                    <!--Aktif Organisasi-->
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputAktifOrganisasi" >Aktif Organisasi
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea name="inputAktifOrganisasi" id="inputAktifOrganisasi" class="form-control" rows="2" placeholder="Aktif Organisasi"><?php echo $Kesibukan; ?></textarea>
                                        </div>
                                    </div>

                                    <!--Bekerja-->
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputBekerja">Bekerja
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea name="inputBekerja" id="inputBekerja" class="form-control" rows="2" placeholder="Bekerja"><?php echo $TempatKerja; ?></textarea>
                                        </div>
                                    </div>

                                    <!--Hobi-->
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputHobi">Hobi
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea name="inputHobi" id="inputHobi" class="form-control" rows="2" placeholder="Hobi"><?php echo $Hobi; ?></textarea>
                                        </div>
                                    </div>

                                    <!--Prestasi-->
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputPrestasi">Prestasi
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea name="inputPrestasi" id="inputPrestasi" class="form-control" rows="3" placeholder="Prestasi"><?php echo $Prestasi; ?></textarea>
                                        </div>
                                    </div>

                                    <!--Cita-Cita-->
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputCita">Cita-Cita
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea name="inputCita" id="inputCita" class="form-control" rows="2" placeholder="Cita-Cita"><?php echo $Cita_Cita; ?></textarea>
                                        </div>
                                    </div>

                                    <!--Motto-->
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputMotto">Motto
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea name="inputMotto" id="inputMotto" class="form-control" rows="2" placeholder="Motto"><?php echo $Motto; ?></textarea>
                                        </div>
                                    </div>

                                    <!--</form>-->
                                </div>

                                <!--Deskripsi Orang-Tua-->
                                <div id="step-3">
                                    <!--<form class="form-horizontal form-label-left">-->
                                    <!--Nama Orang-Tua-->
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputNamaOrangTua">Nama Orang-Tua
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="inputNamaOrangTua" name="inputNamaOrangTua"
                                            value="<?php echo $NamaOrtu; ?>" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>

                                    <!--Pendidikan Terakhir--> 
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputPendidikanTerakhir">Pendidikan Terakhir
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="inputPendidikanTerakhir" name="inputPendidikanTerakhir" value="<?php echo $PendidikanOrtu; ?>" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>

                                    <!--Pekerjaan--> 
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputPekerjaan">Pekerjaan
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="inputPekerjaan" name="inputPekerjaan" 
                                            value="<?php echo $PekerjaanOrtu; ?>" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>

                                    <!--Kontak Ortu-->
                                    <div class="form-group">
                                        <label for="inputTahunLulus" class="control-label col-md-3 col-sm-3 col-xs-12">Kontak Ortu
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="input-prepend">
                                                <span class="add-on">+62</span>
                                                <input name="inputKontakOrtu" class="input-large" id="inputKontakOrtu" type="text" value="<?php echo $KontakOrtu; ?>" placeholder="81234.....">
                                            </div>
                                        </div>
                                    </div>


                                    <!-- </form> -->
                                </div>


                                <!--Media Sosial-->
                                <div id="step-4">
                                   <!-- <form class="form-horizontal form-label-left"> -->

                                   <!--Facebook--> 
                                   <div class="form-group">

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputLinkFB">
                                        <img src="<?php echo base_url() ;?>assets/images/logo-fb.png" width="50px" height="50px">
                                    </label>

                                    <br>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="inputLinkFB" name="inputLinkFB"
                                        value="<?php echo $Facebook; ?>" class="form-control col-md-7 col-xs-12" placeholder="Link Facebook">
                                    </div>
                                </div>

                                <!--Twitter-->
                                <div class="form-group">

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputIDTwitter">
                                        <img src="<?php echo base_url() ;?>assets/images/logo-twitter.png" width="50px" height="50px">
                                    </label>

                                    <br>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="inputIDTwitter" name="inputIDTwitter" class="form-control col-md-7 col-xs-12" value="<?php echo $Twitter; ?>" placeholder="ex : @jabiralhaiyan">
                                    </div>
                                </div>

                                <!--Blog-->
                                <div class="form-group">

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputAlamatBlog">
                                        <img src="<?php echo base_url() ;?>assets/images/logo-blog.png" width="50px" height="50px">
                                    </label>

                                    <br>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="inputAlamatBlog" name="inputAlamatBlog" 
                                        value="<?php echo $Blog; ?>" class="form-control col-md-7 col-xs-12" placeholder="ex : Alamat Blog/Website">
                                    </div>
                                </div>

                                <!--Instagram-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputIDInstagram">
                                        <img src="<?php echo base_url() ;?>assets/images/logo-instagram.png" width="50px" height="50px">
                                    </label>
                                    <br>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="inputIDInstagram" name="inputIDInstagram" class="form-control col-md-7 col-xs-12" value="<?php echo $Instagram; ?>" placeholder="ex : jabiralhayyan">
                                    </div>
                                </div>

                                <!--Line-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputIDLine">
                                        <img src="<?php echo base_url() ;?>assets/images/logo-line.png" width="50px" height="50px">
                                    </label>
                                    <br>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="inputIDLine" name="inputIDLine" class="form-control col-md-7 col-xs-12" value="<?php echo $Line; ?>" placeholder="ex : jabiralhayyan">
                                    </div>
                                </div>  
                                <!--</form>-->
                            </div>

                            <!--Foto Profil-->
                            <div id="step-5">
                                <!--Username-->
                                <div class="form-group">
                                    <center><h3>Ganti Foto Profil<h3></center>
                                    <center><img src="
                                        <?php 
                                        if($LinkFoto == NULL){
                                            echo base_url().'assets2/profpic/default-foto.png'; 
                                        }
                                        else
                                        {
                                            echo base_url().$LinkFoto;
                                        }
                                        ?>" width="200px" height="200px" class="img-polaroid">
                                        <h4>Unggah Foto :</h4>
                                        <p style="font-size: 16px; color: #003bb3"><i class="fa fa-check"></i> Ukuran max 300 kB <br>
                                            <i class="fa fa-check"></i> Tipe file : jpg. jpeg, png</p>
                                            <input type="file" name="fileToUpload" id="fileToUpload">
                                        </center>
                                    </div>
                                </div>

                                <!--Username & Password-->
                                <div id="step-6">
                                    <!--<form class="form-horizontal form-label-left">-->

                                    <!--Username-->
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputUsername">Username <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="inputUsername" name="inputUsername" 
                                            value="<?php echo $Username; ?>" required="required"class="form-control col-md-7 col-xs-12" >
                                        </div>
                                    </div>

                                    <!--Password-->
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputPassword">Password <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="password" id="inputPassword" name="inputPassword" 
                                            value="<?php echo $Password; ?>" required="required" class="form-control col-md-7 col-xs-12" >
                                        </div>
                                    </div>

                                    <!--Konfirmasi Password-->
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputUlangiPassword">Ulangi Password <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="password" id="inputUlangiPassword" name="inputUlangiPassword"
                                            value="" required="required" class="form-control col-md-7 col-xs-12" >
                                        </div>
                                    </div>

                                    <!--</form>-->
                                </div>
                                <!--End Form Input to ../piihadmin/do_tambahakun-->
                            </div>
                            <!-- End SmartWizard Content -->  
                        </form>
                    </div>

                </div>

                <!-- footer content -->             
                <?php require_once('layout/layout_footer.php'); ?>
                <!-- /footer content -->

            </div>
            <!-- End to do list -->
        </div>
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
 <!-- form wizard -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/wizard/jquery.smartWizard.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            // Smart Wizard     
            $('#wizard').smartWizard();
            /*
            $('#wizard').smartWizard({
                onLeaveStep:leaveAStepCallback,
                onFinish:onFinishCallback
            });
        */
            /*
            function leaveAStepCallback(obj, context){
                alert("Leaving step " + context.fromStep + " to go to step " + context.toStep);
                return validateSteps(context.fromStep); // return false to stay on step and true to continue navigation 
            }
            */
            //objs, context
            function onFinishCallback(){
                if(validateAllSteps()){
                    //$('#wizard').smartWizard('showMessage', 'Finish Clicked');
                    $('form').submit();
                }
            }
            /*  
            function onFinishCallback() {
                $('#wizard').smartWizard('showMessage', 'Finish Clicked');
        
                //alert('Finish Clicked');
            }
            */
        });

    /*
    $(document).ready(function () {
            // Smart Wizard 
            $('#wizard_verticle').smartWizard({
                transitionEffect: 'slide'
            });

        });
*/
</script>

<!-- select2 -->
<script>
    $(document).ready(function () {
        $(".select2_single").select2({
            //placeholder: "Select a state",
            allowClear: true
        });
        $(".select2_group").select2({});
        $(".select2_multiple").select2({
            maximumSelectionLength: 4,
            placeholder: "With Max Selection limit 4",
            allowClear: true
        });
    });
</script>
<!-- /select2 -->

<!-- input_mask -->
<script>
    $(document).ready(function () {
        $(":input").inputmask();
    });
</script>
<!-- /input mask -->


</body>

</html>
