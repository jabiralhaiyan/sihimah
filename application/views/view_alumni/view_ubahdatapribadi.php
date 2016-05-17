<?php
require_once('layout/layout_head.php');
require_once('layout/layout_menu.php');
?>

<!-- Mengubah Data Pribadi -->
<div class="container">
  <center><h2>Mengubah Data Pribadi</h2></center>
  <center style="color:red;">&nbsp &nbsp * (wajib diisi)</center>
  <br>
      <!--center style="background-color:red; color:white;">&nbsp &nbsp tes</center>
      <br>
      <center style="background-color:red; color:white;">&nbsp &nbsp tes</center>
      <br-->
      <?php
      if ($nama_lengkap_kosong) echo "<center style='background-color:red; color:white;'>&nbsp &nbsp " . $nama_lengkap_kosong . "</center><br>";
      if ($jenis_kelamin_kosong) echo "<center style='background-color:red; color:white;'>&nbsp &nbsp " . $jenis_kelamin_kosong . "</center><br>";
      
      if ($tahun_lulus_kosong) echo "<center style='background-color:red; color:white;'>&nbsp &nbsp " . $tahun_lulus_kosong . "</center><br>";
      
      if ($format_email_salah) echo "<center style='background-color:red; color:white;'>&nbsp &nbsp " . $format_email_salah . "</center><br>";
      ?>

      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <form class="form-horizontal" name="login" action="<?php echo base_url(); ?>pilihalumni/do_ubahdatapribadi" method="post">
              <!--Informasi data diri-->
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <i class="fa fa-tasks"></i><i class="fa fa-chevron-down pull-right"></i> INFORMASI DATA DIRI
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                    <!-- Nama Lengkap -->
                    <div class="form-group">
                      <label class="col-lg-2 col-lg-2 control-label" for="inputNamaLengkap" style="text-align: left">Nama Lengkap <span style="color:red;">*</span></label>
                      <div class="col-lg-10">
                        <input name="inputNamaLengkap" class="form-control" type="text" id="inputNamaLengkap" value="<?php echo ($NamaLengkap ? $NamaLengkap : "");?>" placeholder="Nama Lengkap">
                      </div>
                    </div>
                    <!-- Nama Panggilan -->
                    <div class="form-group">
                      <label class="col-lg-2 col-lg-2 control-label" for="inputNamaPanggilan" style="text-align: left">Nama Panggilan</label>
                      <div class="col-lg-10">
                        <input name="inputNamaPanggilan" class="form-control" type="text" id="inputNamaPanggilan" value="<?php echo ($NamaPanggilan ? $NamaPanggilan : "");?>" placeholder="Nama Panggilan">
                      </div>
                    </div>
                    <!-- Jenis Kelamin -->
                    <div class="form-group">
                      <label class="col-lg-2 control-label" for="inputJenisKelamin" style="text-align: left">Jenis Kelamin <span style="color:red;">*</span></label>
                      <div class="col-lg-10">                                
                        <label class="radio">
                          <input name="inputJenisKelamin" type="radio" id="inputJenisKelamin" value="L" <?php echo ($JenisKelamin=='L' ? "checked" : "");?>>Laki-laki
                        </label>
                        <label class="radio">
                          <input name="inputJenisKelamin" type="radio" id="inputJenisKelamin" value="P" <?php echo ($JenisKelamin=='P' ? "checked" : "");?>>Perempuan
                        </label>
                      </div>
                    </div>

                    <!--Tempat Tanggal Lahir-->
                    <div class="form-group">
                      <label class="col-lg-2 col-lg-2 control-label" for="inputTTL" style="text-align: left">Tempat-Tanggal Lahir</label>
                      <div class="col-lg-10">
                        <input name="inputTempatLahir" style="width:110px;" class="span3" type="text" id="inputTempat" value="<?php echo ($TempatLahir ? $TempatLahir : "");?>" placeholder="Tempat Lahir"> - 
                        <input name="inputTanggalLahir" style="width:145px;" class="span3" type="date" id="inputTempat" value="<?php echo ($TanggalLahir ? $TanggalLahir : "");?>" placeholder="Tanggal Lahir">
                      </div>
                    </div>


                    <!--Nama Lembaga-->
                    <div class="form-group">
                      <label class="col-lg-2 col-lg-2 control-label" for="inputPTN" style="text-align: left">Lembaga <span style="color:red;">*</span></label>
                      <div class="col-lg-10"> 

                        <select class="form-control" name="inputCabangLembaga">
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
                    <label class="col-lg-2 col-lg-2 control-label" for="inputTahunLulus" style="text-align: left">Tahun Lulus <span style="color:red;">*</span></label>
                    <div class="col-lg-10">
                      <select name="inputTahunLulus">
                        <?php foreach($tahunlulus->result() as $row) {
                          if ($TahunLulus==$row->TahunLulus)
                            echo '<option selected>'.$row->TahunLulus.'</option>';
                          else
                            echo '<option>'.$row->TahunLulus.'</option>';
                        } ?>
                      </select>
                    </div>
                  </div>

                  <!--Cabang-->
                  <div class="form-group">
                    <label class="col-lg-2 col-lg-2 control-label" for="inputCabang" style="text-align: left">Cabang PTN/PTS<span style="color:red;">*</span></label>
                    <div class="col-lg-10"> 
                      <select name="inputCabang">
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
                    <label class="col-lg-2 col-lg-2 control-label" for="inputAlamatAsal" style="text-align: left">Alamat Asal</label>
                    <div class="col-lg-10">
                      <textarea name="inputAlamatAsal" class="form-control" rows="4" id="inputAlamatAsal" placeholder="Alamat Asal" required><?php echo ($AlamatAsal ? $AlamatAsal : "");?></textarea>
                    </div>
                  </div>

                  <!--Alamat Sekarang-->
                  <div class="form-group">
                    <label class="col-lg-2 col-lg-2 control-label" for="inputAlamatSekarang" style="text-align: left">Alamat Sekarang</label>
                    <div class="col-lg-10">
                      <textarea name="inputAlamatSekarang" class="form-control" rows="4" id="inputAlamatSekarang" placeholder="Alamat Sekarang" required><?php echo ($AlamatSekarang ? $AlamatSekarang : "");?></textarea>
                    </div>
                  </div>

                  <!-- No HP -->
                  <div class="form-group">
                    <label class="col-lg-2 col-lg-2 control-label" for="inputNoHP" style="text-align: left">Nomor Handphone</label>
                    <div class="col-lg-10">
                      <div class="input-prepend">
                        <span class="add-on">+62</span>
                        <input name="inputNoHP" class="input-medium" class="span2" id="inputNoHP" type="text" value="<?php echo ($NoHP ? $NoHP : "");?>" placeholder="81234....." required>                                    
                      </div>
                    </div>
                  </div>            
                  <!-- Email -->
                  <div class="form-group">
                    <label class="col-lg-2 col-lg-2 control-label" for="inputEmail" style="text-align: left">Email</label>
                    <div class="col-lg-10">
                      <input name="inputEmail" class="form-control" class="span3" type="email" id="inputEmail" value="<?php echo ($Email ? $Email : "");?>" placeholder="yourname@email.com" required>
                    </div>
                  </div>  
                </div>
              </div>
            </div>

            <!--Informasi Lanjutan-->
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <i class="fa fa-tasks"></i><i class="fa fa-chevron-down pull-right"></i> INFORMASI UMUM
                  </a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">

                <!--Perguruan Tinggi-->
                 <div class="form-group">
                  <label class="col-lg-2 control-label" for="inputPT" style="text-align: left">Perguruan Tinggi</label>
                  <div class="col-lg-10">
                    <select name="inputPT">
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
                  <label class="col-lg-2 control-label" for="inputJurusan" style="text-align: left">Jurusan</label>
                  <div class="col-lg-10">
                    <textarea name="inputJurusan" class="form-control" rows="4" id="inputJurusan" placeholder="Kuliah"><?php echo ($Jurusan ? $Jurusan : "");?></textarea>
                  </div>
                </div>

                <!-- Aktif Organisasi -->
                <div class="form-group">
                  <label class="col-lg-2 control-label" for="inputAktifOrganisasi" style="text-align: left">Aktif Organisasi</label>
                  <div class="col-lg-10">
                    <textarea name="inputAktifOrganisasi" class="form-control" rows="4" id="inputAktifOrganisasi" placeholder="Aktif Organisasi"><?php echo ($Kesibukan ? $Kesibukan : "");?></textarea>
                  </div>
                </div>

                <!-- Bekerja -->
                <div class="form-group">
                  <label class="col-lg-2 control-label" for="inputBekerja" style="text-align: left">Bekerja</label>
                  <div class="col-lg-10">
                    <textarea name="inputBekerja" class="form-control" rows="4" id="inputBekerja" placeholder="Bekerja"><?php echo ($TempatKerja ? $TempatKerja : "");?></textarea>
                  </div>
                </div>

                <!-- Hobby -->
                <div class="form-group">
                  <label class="col-lg-2 control-label" for="inputHobi" style="text-align: left">Hobi</label>
                  <div class="col-lg-10">
                    <textarea name="inputHobi" class="form-control" rows="3" id="inputHobi" placeholder="Hobi"><?php echo ($Hobi ? $Hobi : "");?></textarea>
                  </div>
                </div>

                <!--Prestasi-->
                <div class="form-group">
                  <label class="col-lg-2 control-label" for="inputPrestasi" style="text-align: left">Prestasi</label>
                  <div class="col-lg-10">
                    <textarea name="inputPrestasi" class="form-control" rows="4" id="inputPrestasi" placeholder="Prestasi"><?php echo ($Prestasi ? $Prestasi : "");?></textarea>
                  </div>
                </div>

                <!-- Cita-cita -->
                <div class="form-group">
                  <label class="col-lg-2 control-label" for="inputCita" style="text-align: left">Cita-cita</label>
                  <div class="col-lg-10">
                   <textarea name="inputCita" class="form-control" rows="3" id="inputCita" placeholder="Cita-cita"><?php echo ($Cita_Cita ? $Cita_Cita : "");?></textarea>
                 </div>
               </div>              
               <!-- Motto -->
               <div class="form-group">   
                <label class="col-lg-2 control-label" for="inputMotto" style="text-align: left">Motto</label>
                <div class="col-lg-10">
                  <textarea name="inputMotto" class="form-control" rows="3" id="inputMotto" placeholder="Motto"><?php echo ($Motto ? $Motto : "");?></textarea>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--Informasi Orang-Tua-->
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <i class="fa fa-tasks"></i><i class="fa fa-chevron-down pull-right"></i> INFORMASI ORANG-TUA
              </a>
            </h4>
          </div>
          <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
              <!-- Nama Orang-Tua -->
              <div class="form-group">
                <label class="col-lg-2 control-label" for="namaOrangTua" style="text-align: left">Nama Orang-Tua</label>
                <div class="col-lg-10">
                  <input name="inputNamaOrangTua" class="form-control" type="text" id="inputNamaOrangTua" value="<?php echo ($NamaOrtu ? $NamaOrtu : "");?>" placeholder="Nama Orang-Tua">
                </div>
              </div>

              <!--Pendidikan Terakhir-->
              <div class="form-group">
                <label class="col-lg-2 control-label" for="pendidikanTerakhir" style="text-align: left">Pendidikan Terakhir</label>
                <div class="col-lg-10">
                  <input name="inputPendidikanTerakhir" class="form-control" type="text" id="inputPendidikanTerakhir" value="<?php echo ($PendidikanOrtu ? $PendidikanOrtu : "");?>" placeholder="Pendidikan Terakhir">
                </div>
              </div>  

              <!--Pekerjaan-->
              <div class="form-group">
                <label class="col-lg-2 control-label" for="pekerjaan" style="text-align: left">Pekerjaan</label>
                <div class="col-lg-10">
                  <input name="inputPekerjaan" class="form-control" type="text" id="inputPekerjaan" value="<?php echo ($PekerjaanOrtu ? $PekerjaanOrtu : "");?>" placeholder="Pekerjaan">
                </div>
              </div>


              <!-- Kontak Ortu -->
              <div class="form-group">
                <label class="col-lg-2 control-label" for="inputKontakOrtu" style="text-align: left">Kontak Ortu</label>
                <div class="col-lg-10">
                  <input name="inputKontakOrtu" class="form-control" type="text" id="inputKontakOrtu" value="<?php echo ($KontakOrtu ? $KontakOrtu : "");?>" placeholder="Kontak Bapak/Ibu">
                </div>
              </div>
            </div>
          </div>
        </div>


        <!--Sosial Media-->
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingFour">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <i class="fa fa-tasks"></i><i class="fa fa-chevron-down pull-right"></i> SOSIAL MEDIA
              </a>
            </h4>
          </div>
          <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
            <div class="panel-body">
              <div class="tabbable tabs-left">
                <ul class="nav nav-tabs" id="myTab">
                  <li><a href="#blog"><img src="<?php echo base_url(); ?>assets2/img/logo-blog.png" width="70px" height="70px"></a></li>
                  <li class="active"><a href="#facebook"><img src="../assets2/img/logo-fb.png" width="70px" height="70px"></a></li>
                  <li><a href="#twitter"><img src="<?php echo base_url(); ?>assets2/img/logo-twitter.png" width="70px" height="70px"></a></li>
                  <li><a href="#instagram"><img src="<?php echo base_url(); ?>assets2/img/logo-instagram.png" width="70px" height="70px"></a></li>
                  <li><a href="#line"><img src="<?php echo base_url(); ?>assets2/img/logo-line.png" width="70px" height="70px"></a></li>

                </ul>
                <div class="tab-content">
                  <div class="tab-pane" id="blog">
                    <blockquote><h3>Blog/Website</h3></blockquote>
                    <div class="form-group">
                     <label class="col-lg-2 control-label" for="inputAlamatBlog">Alamat Website</label>
                     <div class="col-lg-10">
                      <input name="inputAlamatBlog" type="text" id="inputAlamatWebsite" placeholder="Alamat Blog/Website" value="<?php echo ($Blog ? $Blog : "");?>">
                    </div>
                  </div>
                </div>
                <div class="tab-pane active" id="facebook">
                  <blockquote><h3>Facebook</h3></blockquote>
                  <div class="form-group">
                    <label class="col-lg-2 control-label" for="inputLinkFB">Link Profil Facebook</label>
                    <div class="col-lg-10">
                      <input name="inputLinkFB" type="text" id="inputLinkFB" placeholder="(ex: www.facebook.com/jabiralhayyan)" value="<?php echo ($Facebook ? $Facebook : "");?>">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="twitter">
                  <blockquote><h3>Twitter</h3></blockquote>
                  <div class="form-group">
                    <label class="col-lg-2 control-label" for="inputIDTwitter">ID Twitter</label>
                    <div class="col-lg-10">
                      <input name="inputIDTwitter" type="text" id="inputIDTwitter" placeholder="(ex : @JabirHayyan)" value="<?php echo ($Twitter ? $Twitter : "");?>">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="instagram">
                  <blockquote><h3>Instagram</h3></blockquote>
                  <div class="form-group">
                    <label class="col-lg-2 control-label" for="inputIDInstagram">ID Instagram</label>
                    <div class="col-lg-10">
                      <input name="inputIDInstagram" type="text" id="inputIDInstagram" placeholder="(ex : jabiralhayyan)" value="<?php echo ($Instagram ? $Instagram : "");?>">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="line">
                  <blockquote><h3>Line</h3></blockquote>
                  <div class="form-group">
                    <label class="col-lg-2 control-label" for="inputIDLine">ID Line</label>
                    <div class="col-lg-10">
                      <input name="inputIDLine" type="text" id="inputIDLine" placeholder="(ex : jabiralhayyan)" value="<?php echo ($Line ? $Line : "");?>">
                    </div>
                  </div>
                </div>
              </div>
            </div> 
          </div>
        </div>
      </div>

      <br>
      <center>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
      </center>
    </form>    
  </div>
</div>
<div class="col-md-2"></div>

<?php require_once('layout/layout_script.php'); ?>

<script>
  $('#myTab a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
  })
</script>

<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>
<?php require_once('layout/layout_footer.php'); ?>