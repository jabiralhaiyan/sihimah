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
                    <!--judul>-->
                </div>

                <div class="title_right">
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">

                            <h3>Profil Admin</h3>
                            <ul class="nav navbar-right">
                                <li><a href="#" class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">


                            <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                                
                                <div class="profile_img">
                                    

                                    <?php 
                                        /*
                                        if($status == 1)
                                        {
                                            echo "<center><h4>Gambar berhasil diunggah</h4></center>";
                                        }
                                        else if($status == 2)
                                        {
                                            echo "<center><h4>Maaf terdapat kesalahan ketika mengunggah gambar</h4></center>";
                                        }
                                        else if($status == 3)
                                        {
                                            echo "<center><h4>Silakan pilih gambar yang akan diunggah</h4></center>";
                                        }
                                        else if($status == 4)
                                        {
                                            echo "<center><h4>Ukuran gambar terlalu besar</h4></center>";
                                        }
                                        else if($status == 5)
                                        {
                                            echo "<center><h4>Format file gambar tidak tepat</h4></center>";
                                        }
                                        */
                                        
                                    ?>
                                    <center>
                                    
                                    <img src="<?php 
                                        if ($LinkFoto == NULL)
                                            echo base_url().'assets/images/user.png';
                                        else
                                            echo base_url().$LinkFoto; 
                                        ?>"
                                        width="200px" height="200px" class="img-polaroid">
                                      <h5>Unggah Foto :</h5>
                                      <p style="font-size: 12px; color: #003bb3"><i class="fa fa-check"></i> Ukuran max 300 kB <br>
                                          <i class="fa fa-check"></i> Tipe file : jpg. jpeg, png</p>
                                    </center>
                                          
                                          <form class="form-search" action="<?php echo base_url() ;?>pilihadmin/uploadfotoadmin" method="post" enctype="multipart/form-data">
                                            <center>
                                                <input type="file" name="fileToUpload" id="fileToUpload"><br>
                                                <button class="btn btn-primary" type="submit" name="submit" data-loading-text="Loading...">Unggah</button>
                                            </center>
                                        </form>



                              </div>
                              <!--
                              <h3><?php echo $Nama; ?></h3>

                              <ul class="list-unstyled user_data">
                                <li><i class="fa fa-map-marker user-profile-icon"></i> <?php echo $Alamat; ?>
                                </li>
                            </ul>
                            -->
                            <br />
                        </div>

                        <!--Edit Profil-->
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="profile_title">
                                <div class="col-md-6">
                                    <h2>Edit Profil</h2>
                                </div>
                                <div class="col-md-6">
                                    <div id="reportrange" class="pull-right" style="margin-top: 5px; background: #fff; padding: 5px 10px; border: 1px solid #E6E9ED">
                                    </div>
                                </div>
                            </div>

                            <!--form-->
                            <form action="<?php echo base_url() ;?>pilihadmin/do_ubahprofiladmin" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                <br><span id="confirmMessage6"> </span>

                                <!--Nama-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputNama">Nama <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="inputNama" name="inputNama" required="required" value="<?php echo $Nama; ?>" class="form-control col-md-7 col-xs-12"
                                        onkeyup="updateSelfMsg('inputNama','confirmMessage0');">
                                        <br><span id="confirmMessage0"></span>
                                    </div>
                                </div>
                                <!--Alamat Sekarang-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputAlamatSekarang">Alamat Sekarang <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="inputAlamatSekarang" name="inputAlamatSekarang" value="<?php echo $Alamat; ?>" required="required" class="form-control col-md-7 col-xs-12"
                                        onfocus="checkNull('inputNama', 'confirmMessage0', 'inputNama'); return false;" 
                                        onkeyup="updateSelfMsg('inputAlamatSekarang','confirmMessage1'); checkPass(); return false;">
                                        <br><span id="confirmMessage1"></span>
                                    </div>
                                </div>
                                <!--No. HP-->
                                <div class="form-group">
                                    <label for="inputNoHP" class="control-label col-md-3 col-sm-3 col-xs-12">No. HP <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="inputNoHP" class="form-control col-md-7 col-xs-12" value="<?php echo $NoHP; ?>" required="required" name="inputNoHP"
                                        onfocus="checkNull('inputAlamatSekarang', 'confirmMessage1', 'inputAlamatSekarang'); return false;" 
                                        onkeyup="updateSelfMsg('inputNoHP','confirmMessage2'); checkPass(); return false;">
                                        <br><span id="confirmMessage2"></span>
                                    </div>
                                </div>
                                <!--Username-->
                                <div class="form-group">
                                    <label for="inputUsername" class="control-label col-md-3 col-sm-3 col-xs-12">Username <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="inputUsername" class="form-control col-md-7 col-xs-12" value="<?php echo $Username; ?>" required="required" name="inputUsername"
                                        readonly="readonly"
                                        onfocus="checkNull('inputNoHP', 'confirmMessage2', 'inputNoHP'); return false;" 
                                        onkeyup="updateSelfMsg('inputUsername','confirmMessage3'); checkPass(); return false;">
                                        <br><span id="confirmMessage3"></span>
                                    </div>
                                </div>
                                <!--Password-->
                                <div class="form-group">
                                    <label for="inputPassword" class="control-label col-md-3 col-sm-3 col-xs-12">Password <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="password" id="inputPassword" class="form-control col-md-7 col-xs-12" value="<?php echo $Password; ?>" required="required" name="inputPassword"
                                        onfocus="checkNull('inputUsername', 'confirmMessage3', 'inputUsername'); return false;"
                                        onkeyup="updateSelfMsg('inputPassword','confirmMessage4'); checkPass(); return false;">
                                        <br><span id="confirmMessage4"></span>
                                    </div>
                                </div>
                                <!--Password Baru-->
                                <div class="form-group">
                                    <label for="inputUlangiPassword" class="control-label col-md-3 col-sm-3 col-xs-12">Konfirmasi Password <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="password" id="inputUlangiPassword" data-validate-linked="inputPassword" class="form-control col-md-7 col-xs-12" required="required" name="inputUlangiPassword"
                                        onfocus="checkNull('inputPassword', 'confirmMessage4', 'inputPassword'); return false;"
                                        onkeyup="updateSelfMsg('inputUlangiPassword','confirmMessage5'); checkPass(); return false;">
                                        <br><span id="confirmMessage5"></span>
                                    </div>
                                </div>

                                <div class="ln_solid"></div>
                                <!--Submit & Cancel-->
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <button type="submit" class="btn btn-primary">Cancel</button>
                                        <button id="send" type="submit" class="btn btn-success" onclick="finalCheck(); return false;">Update</button>
                                    </div>
                                </div>

                            </form>
                            <!--/form-->

                        </div>
                        <!--/Edit Profil-->

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer content -->             
    <?php require_once('layout/layout_footer.php'); ?>
    <!-- /footer content -->

</div>
<!-- /page content -->
</div>

</div>

<?php require_once('layout/layout_script.php'); ?>

<script>
        //Cek Konfirmasi Password
        function checkPass()
        {
            var pass1 = document.getElementById('inputPassword');
            var pass2 = document.getElementById('inputUlangiPassword');
            var message = document.getElementById('confirmMessage4');
            var message1 = document.getElementById('confirmMessage5');
            var goodColor = "#66cc66";
            var badColor = "#ff6666";
            if (pass1.value == "" || pass2.value == ""){
                message.innerHTML = "";
                pass2.style.backgroundColor = "transparent";
            }
            else{    
                if(pass1.value == pass2.value){
                    pass2.style.backgroundColor = goodColor;
                    message.style.color = goodColor;
                    message1.innerHTML = "";
                    message.innerHTML = "Password yang dimasukkan sama!"
                }
                else{
                    pass2.style.backgroundColor = badColor;
                    message.style.color = badColor;
                    message1.innerHTML = "";
                    message.innerHTML = "Password yang dimasukkan tidak sama!"
                }
            }
        }


        function updateSelfMsg($this, $msgThis){
            var elem = document.getElementById($this);
            var message = document.getElementById($msgThis);
            if (elem.value != "" && ($this != "inputPassword" || $this != "inputUlangiPassword"))
            {
                message.innerHTML = "";
                elem.style.backgroundColor = "transparent";
            }
        }


        function checkNull($before, $msgBefore, $typeBefore){
            var elem = document.getElementById($before);
            var message = document.getElementById($msgBefore);
            if (elem.value == ""){
                elem.style.backgroundColor = "#ff6666";
                message.style.color = "#ff6666";
                if ($typeBefore == "inputNama"){
                    message.innerHTML = "Nama tidak boleh kosong!"    
                }
                else if ($typeBefore == "inputAlamatSekarang"){
                    message.innerHTML = "Alamat tidak boleh kosong!"    
                }
                else if ($typeBefore == "inputNoHP"){
                    message.innerHTML = "No. HP tidak boleh kosong!"    
                }
                else if ($typeBefore == "inputUsername"){
                    message.innerHTML = "Username tidak boleh kosong!"    
                }
                else if ($typeBefore == "inputPassword"){
                    message.innerHTML = "Password tidak boleh kosong!"    
                }
                else if ($typeBefore == "inputPasword2"){
                    message.innerHTML = "Konfirmasi Password tidak boleh kosong!"    
                }

            }

            /*
            else if (elem.value == -1)
                {
                    elem.style.backgroundColor = "#ff6666";
                    message.style.color = "#ff6666";
                    if ($typeBefore == "pic"){
                        message.innerHTML = "PIC tidak boleh kosong!"    
                    }
                }
                */
                
                else {
                    message.innerHTML = "";
                    elem.style.backgroundColor = "transparent";
                }
            }

        /*
        function updateSelfMsg($this, $msgThis){
            var elem = document.getElementById($this);
            var message = document.getElementById($msgThis);
            if (elem.value != "" && ($this != "nosuratmasuk")){
                message.innerHTML = "";
                elem.style.backgroundColor = "transparent";
            }
        }
        */

        function finalCheck(){
            var sub = 0;
            var inputNama = document.getElementById('inputNama');
            var inputAlamat = document.getElementById('inputAlamatSekarang');
            var inputNoHP = document.getElementById('inputNoHP');
            var inputUsername = document.getElementById('inputUsername');
            var inputPassword = document.getElementById('inputPassword');
            var inputUlangiPassword = document.getElementById('inputUlangiPassword');
            if (inputNama.value != ""){
                if (inputAlamat.value != ""){
                    if (inputNoHP.value != ""){
                        if (inputUsername.value != ""){
                            if (inputPassword.value != ""){
                                if (inputUlangiPassword.value != ""){
                                    sub = 1;
                                }   
                            }
                        }
                    }
                }
            }
            
            if (sub == 1) {document.getElementById('doneEdit').submit();}
            /*
            else if ((inputPassword.value=="") != (inputPassword2.value=="")) {
                var msg = document.getElementById('confirmMessage6');
                msg.style.color = "#ff6666";
                msg.innerHTML = "Maaf, pass";
                $('#myModal').modal('hide');
            }
            */
            else{
                var msg = document.getElementById('confirmMessage6');
                msg.style.color = "#ff6666";
                msg.innerHTML = "Maaf, ada data yang salah atau belum lengkap, tolong periksa kembali!";
                $('#myModal').modal('hide');
            }
        }
    </script>

</body>

</html>