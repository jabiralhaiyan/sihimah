<?php
  require_once('layout/layout_head.php');
  require_once('layout/layout_menu.php');
?> 

  <!--Kolom Kiri Foto-->
  <div class="container">
   <div class="col-md-12">
    <div class="col-md-3">
      <center>
        <img src="
        <?php 
        if($LinkFoto == ''){
         echo base_url()."assets2/img/default-foto.png";  
       }
       else
       {
         echo base_url().$LinkFoto;
       }
       ?>" width="250px" height="250px" class="img-polaroid"><br>                             
     </center>
     <script>
      $(function() {
        $('a').tooltip({placement: 'top'});
      });
    </script>
  </div>
  <div class="col-md-6">                  

    <!--Kolom Kanan Informasi-->
    <blockquote>              
      <h2><?php echo $NamaLengkap;?></h2>
      <small class="text-primary" style=" font-size:13px"><?php echo ($Lembaga ? ("Alumni Lembaga " . $Lembaga) : "");?> 
       <a  href="<?php echo base_url(); ?>pilihalumni/ubahdatapribadi"> <span class="badge"><i class="icon-edit icon-white"></i> Mengubah Data</span></a></small>
       <table>
        <tbody style=" font-size:14px">
          <!--Nama-->
          <tr>
            <td style="width: 200px;"><i class="fa fa-bookmark"></i> Nama Lengkap</td>
            <td>:</td>
            <td style="width: 450px;"><?php echo $NamaLengkap;?></td>
          </tr>


          <!--Lembaga-->
          <tr>
            <td style="width: 200px;"><i class="fa fa-bookmark"></i> Lembaga</td>
            <td>:</td>
            <td style="width: 450px;"><?php echo ($Lembaga ? $Lembaga : "");?></td>
          </tr>

          <!--Cabang-->
          <tr>
            <td style="width: 200px;"> <i class="fa fa-bookmark"></i> Cabang PTN/PTS</td>
            <td>:</td>
            <td style="width: 450px;"><?php echo ($Cabang ? $Cabang : "");?></td>
          </tr>

          <!--Alamat-->
          <tr>
            <td style="width: 200px;"><i class="fa fa-bookmark"></i> Alamat Sekarang</td>
            <td>:</td>
            <td style="width: 450px;"><?php echo ($AlamatSekarang ? $AlamatSekarang : "");?></td>
          </tr>

          <!--No. HP-->
          <tr>
            <td style="width: 200px;"><i class="fa fa-bookmark"></i> No. HP</td>
            <td>:</td>
            <td style="width: 450px;">+62<?php echo ($NoHP ? $NoHP : "");?></td>
          </tr>
          <!--Email-->
          <tr>
            <td style="width: 200px;"><i class="fa fa-bookmark"></i> Email</td>
            <td>:</td>
            <td style="width: 450px;"><?php echo ($Email ? $Email : "");?></td>
          </tr>


        </tbody>                 
      </table>
      <br>

      <a href="http://<?php echo ($Email ? $Email : "");?>" data-toggle="tooltip" title="<?php echo ($Email ? $Email : "");?>"><img src="<?php echo base_url(); ?>assets2/img/logo-email.png" width="50px" height="50px"></a>
      <a href="http://<?php echo ($Blog ? $Blog : "");?>" data-toggle="tooltip" title="<?php echo ($Blog ? $Blog : "");?>"><img src="<?php echo base_url(); ?>assets2/img/logo-blog.png" width="50px" height="50px"></a>
      <a href="<?php echo ($Facebook ? $Facebook : "");?>" data-toggle="tooltip" title="<?php echo ($Facebook ? $Facebook : "");?>"><img src="<?php echo base_url(); ?>assets2/img/logo-fb.png" width="50px" height="50px"></a>
      <a href="http://twitter.com/<?php echo ($Twitter ? $Twitter : "");?>" data-toggle="tooltip" title="<?php echo ($Twitter ? $Twitter : "");?>"><img src="<?php echo base_url(); ?>assets2/img/logo-twitter.png" width="50px" height="50px"></a>
      <a href="http://instagram.com/<?php echo ($Instagram ? $Instagram : "");?>" data-toggle="tooltip" title="<?php echo ($Instagram ? $Instagram : "");?>"><img src="<?php echo base_url(); ?>assets2/img/logo-instagram.png" width="50px" height="50px"></a>        
      <a href="#" data-toggle="tooltip" title="<?php echo ($Line ? $Line : "");?>"><img src="<?php echo base_url(); ?>assets2/img/logo-line.png" width="50px" height="50px"></a>        
    </blockquote>
  </div>


</div>

<!--Bagian Bawah-->
<div class="col-md-10">
  <br>
  <ul class="nav nav-pills" id="myTab" role="tablist">
    <li role="presentation" class="active"><a href="#about" aria-controls="home" role="tab">Informasi Lanjutan</a></li>
    <li role="presentation"><a href="#prestasi" aria-controls="prestasi" role="tab">Prestasi</a></li>
    <li role="presentation"><a href="#orang_tua" aria-controls="orang_tua" role="tab">Informasi Orang Tua</a></li>
    <li role="presentation"><a href="#cetak" aria-controls="cetak" role="tab">Cetak</a></li>
    <li role="presentation"><a href="#kartu" aria-controls="kartu" role="tab">Identity Card <span class="badge badge-important">New</span></a></li>
  </ul>

  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="about">
      <blockquote>
        <table class="table table-hover">

          <!--Informasi Lanjutan-->
          <tbody>
            <tr>
              <td style="width: 200px;"><i class="fa fa-tasks"></i> Perguruan Tinggi</td>
              <td style="width: 1px;">:</td>
              <td><?php echo ($PerguruanTinggi ? $PerguruanTinggi : "");?></td>
            </tr>
            <tr>
              <td style="width: 200px;"><i class="fa fa-tasks"></i> Jurusan</td>
              <td style="width: 1px;">:</td>
              <td><?php echo ($Jurusan ? $Jurusan : "");?></td>
            </tr>
            <tr>
              <td style="width: 200px;"><i class="fa fa-tasks"></i> Aktif Organisasi</td>
              <td style="width: 1px;">:</td>
              <td><?php echo ($Kesibukan ? $Kesibukan : "");?></td>
            </tr>
            <tr>
              <td style="width: 200px;"> <i class="fa fa-tasks"></i> Bekerja</td>
              <td style="width: 1px;">:</td>
              <td><?php echo ($TempatKerja ? $TempatKerja : "");?></td>
            </tr>
            <tr>
              <td style="width: 200px;"><i class="fa fa-tasks"></i> Hobi</td>
              <td style="width: 1px;">:</td>
              <td><?php echo ($Hobi ? $Hobi : "");?></td>
            </tr>
            <tr>
              <td style="width: 200px;"><i class="fa fa-tasks"></i> Cita-Cita</td>
              <td style="width: 1px;">:</td>
              <td><?php echo ($Cita_Cita ? $Cita_Cita : "");?></td>
            </tr>
            <tr>
              <td style="width: 200px;"><i class="fa fa-tasks"></i> Motto</td>
              <td style="width: 1px;">:</td>
              <td><?php echo ($Motto ? $Motto : "");?></td>
            </tr>

          </tbody>                 
        </table>            
      </blockquote>
    </div>

    <!--Prestasi-->
    <div role="tabpanel" class="tab-pane" id="prestasi">
      <blockquote>
        <table class="table table-hover">
          <tbody>
            <tr>
              <td style="width: 200px;"><i class="fa fa-star"></i> Prestasi</td>
              <td style="width: 1px;">:</td>
              <td><?php echo ($Prestasi ? $Prestasi : "");?> </td>
            </tr>
          </tbody>                 
        </table>
      </blockquote>
    </div>

    <!--Informasi Orang-Tua-->
    <div role="tabpanel" class="tab-pane" id="orang_tua">
      <blockquote>
        <table class="table table-hover">
          <tbody>
            <tr>
              <td style="width: 200px;"><i class="fa fa-th-list"></i> Nama Orang-Tua</td>
              <td style="width: 1px;">:</td>
              <td><?php echo ($NamaOrtu ? $NamaOrtu : "");?></td>
            </tr>
            <tr>
              <td style="width: 200px;"><i class="fa fa-th-list"></i> Pendidikan Terakhir</td>
              <td style="width: 1px;">:</td>
              <td><?php echo ($PendidikanOrtu ? $PendidikanOrtu : "");?></td>
            </tr>
            <tr>
              <td style="width: 200px;"><i class="fa fa-th-list"></i> Pekerjaan</td>
              <td style="width: 1px;">:</td>
              <td><?php echo ($PekerjaanOrtu ? $PekerjaanOrtu : "");?></td>
            </tr>
            <tr>
              <td style="width: 200px;"><i class="fa fa-th-list"></i> Kontak Orang Tua</td>
              <td style="width: 1px;">:</td>
              <td><?php echo ($KontakOrtu ? $KontakOrtu : "");?></td>
            </tr>
          </tbody>                 
        </table>
      </blockquote>
    </div>

    <!--Print-->
    <div role="tabpanel" class="tab-pane" id="cetak">
      <blockquote>
        <div class="hero-unit">
          <br>
          <a href="<?php echo base_url(); ?>pilihalumni/cetakbiodata" target="_blank" class="btn btn-primary btn-lg" ><i class="fa fa-print"></i> Cetak Biodata
          </a>
        </div>
      </blockquote>
    </div>

    <!--Id Card-->
    <div role="tabpanel" class="tab-pane" id="kartu">
      <blockquote>
        <div class="hero-unit">
          <h1>Coming Soon!</h1>
          <br>
          <div class="progress progress-striped active">
            <div class="progress-bar" style="width: 20%;"></div>
          </div>
        </div>
      </blockquote>
    </div>

    
  </div>
</div>
</div>
<br>
</div>

<!--End-->

<?php require_once('layout/layout_script.php'); ?>

<!--Script Nav Nav Pills-->
<script>
  $('#myTab a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
  })
</script>

<?php require_once('layout/layout_footer.php'); ?>