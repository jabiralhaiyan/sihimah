<?php
require_once(APPPATH.'/views/view_admin/layout/layout_head.php');
require_once(APPPATH.'/views/view_admin/layout/layout_sidemenu.php');
require_once(APPPATH.'/views/view_admin/layout/layout_topmenu.php');
?>

    <!-- page content -->
    <div class="right_col" role="main">

        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Tambah Akun Admin</h3>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2 class="section">Personal Info</h2>
                            <ul class="nav navbar-right">
                                <li><a href="#" class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <form class="form-horizontal form-label-left" method="post" action="<?php echo base_url(); ?>pilihadmin/do_tambahakunadmin">

                                <!--data-validate-words="n"-->
                                <!--Nama-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputNama">Nama <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="inputNama" class="form-control col-md-7 col-xs-12" data-validate-length-range="1,20" name="inputNama" placeholder="" value="" required="required" type="text" 
                                        onkeyup="updateSelfMsg('inputNama','confirmMessage0');">
                                        <br><span id="confirmMessage0"></span>
                                    </div>
                                </div>

                                <!--Alamat Sekarang-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputAlamatSekarang">Alamat Sekarang <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="inputAlamatSekarang" class="form-control col-md-7 col-xs-12" data-validate-length-range="1,20" name="inputAlamatSekarang" placeholder="" value="" required="required" type="text" 
                                        onfocus="checkNull('inputNama', 'confirmMessage0', 'inputNama'); return false;" 
                                        onkeyup="updateSelfMsg('inputAlamatSekarang','confirmMessage1'); checkPass(); return false;">
                                        <br><span id="confirmMessage1"></span>
                                    </div>
                                </div>

                                <!--No. HP-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputNoHP">No. HP <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="inputNoHP" class="form-control col-md-7 col-xs-12" data-validate-length-range="1,20" name="inputNoHP" placeholder="" value="" required="required" type="text" 
                                        onfocus="checkNull('inputAlamatSekarang', 'confirmMessage1', 'inputAlamatSekarang'); return false;" 
                                        onkeyup="updateSelfMsg('inputNoHP','confirmMessage2'); checkPass(); return false;">
                                        <br><span id="confirmMessage2"></span>
                                    </div>
                                </div>

                                <!--Username-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputUsername">Username <span class="required">*</span>
                                    </label>
                                    <!--Peringatan username sudah ada-->
                                    <label>

                                        <?php
                                        if ($username_sudah_ada) echo "<center style='background-color:red; color:white;'>&nbsp &nbsp".$username_sudah_ada."&nbsp &nbsp</center><br>";
                                        ?>
                                    </label>

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        <input id="inputUsername" class="form-control col-md-7 col-xs-12" data-validate-length-range="1,10" name="inputUsername" placeholder="Username wajib diawali huruf 'A' KAPITAL | Ex : A121" value="" required="required" type="text"
                                        onfocus="checkNull('inputNoHP', 'confirmMessage2', 'inputNoHP'); return false;" 
                                        onkeyup="updateSelfMsg('inputUsername','confirmMessage3'); checkPass(); return false;">
                                        <br><span id="confirmMessage3"></span>
                                    </div>
                                    
                                </div>

                                <!--Password-->
                                <div class="item form-group">
                                    <label for="inputPassword" class="control-label col-md-3">Password
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="inputPassword" type="password" name="inputPassword" data-validate-length-range="1,8" class="form-control col-md-7 col-xs-12" required="required"
                                        onfocus="checkNull('inputUsername', 'confirmMessage3', 'inputUsername'); return false;" 
                                        onkeyup="updateSelfMsg('inputPassword','confirmMessage4'); checkPass(); return false;">
                                        <br><span id="confirmMessage4"></span>
                                    </div>
                                </div>

                                <!--Ulangi Password-->
                                <div class="item form-group">
                                    <label for="inputPassword2" class="control-label col-md-3 col-sm-3 col-xs-12">Ulangi Password
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="inputUlangiPassword" type="password" name="inputUlangiPassword" data-validate-linked="inputPassword" class="form-control col-md-7 col-xs-12" required="required"
                                        onfocus="checkNull('inputPassword', 'confirmMessage4', 'inputPassword'); return false;" 
                                        onkeyup="updateSelfMsg('inputUlangiPassword','confirmMessage5'); checkPass(); return false;">
                                        <br><span id="confirmMessage5"></span>
                                    </div>
                                </div>


                                <div class="ln_solid"></div>
                                <!--Submit & Cancel-->
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <button type="submit" class="btn btn-primary" >Cancel</button>
                                        <button id="send" type="submit" class="btn btn-success" onclick="finalCheck(); return false;">Save</button>
                                    </div>
                                </div>
                            </form>



                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer content -->
        <?php require_once(APPPATH.'/views/view_admin/layout/layout_footer.php'); ?>
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

<?php require_once(APPPATH.'/views/view_admin/layout/layout_script.php'); ?>

<script>
    NProgress.done();
</script>


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
                else if ($typeBefore == "inputUlangiPasword"){
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
            var inputAlamat = document.getElementById('inputAlamat');
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
