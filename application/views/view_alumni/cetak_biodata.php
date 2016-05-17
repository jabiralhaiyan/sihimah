<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cetak Biodata | SIHIMAH</title>

  <!-- Favicon-->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets2/ico/favicon-himah.ico">

  <style>
    .right {
    position: absolute;
    right: 0px;
    width: 200px;
    //border: 3px solid #73AD21;
    padding: 15px;

    * {
      box-sizing: border-box;
    }
    .header {
      border: 1px solid red;
      padding: 15px;
    }
    .row::after {
      content: "";
      clear: both;
      display: block;
    }
    [class*="col-"] {
      float: left;
      padding: 15px;
      //border: 1px solid red;
    }
    .col-1 {width: 8.33%;}
    .col-2 {width: 16.66%;}
    .col-3 {width: 25%;}
    .col-4 {width: 33.33%;}
    .col-5 {width: 41.66%;}
    .col-6 {width: 50%;}
    .col-7 {width: 58.33%;}
    .col-8 {width: 66.66%;}
    .col-9 {width: 75%;}
    .col-10 {width: 83.33%;}
    .col-11 {width: 91.66%;}
    .col-12 {width: 100%;}
  </style>

</head>

<body>

 <div class="container">
  <!-- Begin page content -->
  <div class="container">
    <div class="page-header">
          <center><img src="<?php echo base_url(); ?>assets2/img/header-himah.png" width="710px" height="118px">
          </center>
      </div>
    </div>
  </div>

  <div class="row">

    <div class="col-7">
      <h2>Profil <?php echo $NamaLengkap; ?></h2>
      <h3>Informasi Data Diri</h3>

      
      <table id="exportTable" class="table table-striped">
        <!--Nama-->
        <tr>
          <td style="width: 150px; background-color:#F2F2F2">Nama Lengkap</td>
          <td style="width: 250px; background-color:#F2F2F2"><?php echo $NamaLengkap;?></td>
        </tr>

        <!--Nama Panggilan-->
        <tr>
          <td style="width: 150px;">Nama Panggilan</td>
          <td style="width: 250px;"><?php echo ($NamaPanggilan ? $NamaPanggilan : "");?></td>
        </tr>

        <!--Jenis Kelamin-->
        <tr>
          <td style="width: 150px;background-color:#F2F2F2">Jenis Kelamin</td>
          <td style="width: 250px;background-color:#F2F2F2"><?php echo ($JenisKelamin ? $JenisKelamin : "");?></td>
        </tr>

        <!--Tempat Lahir-->
        <tr>
          <td style="width: 150px;">Tempat Lahir</td>
          <td style="width: 250px;"><?php echo ($TempatLahir ? $TempatLahir : "");?></td>
        </tr>

        <!--Tanggal Lahir-->
        <tr>
          <td style="width: 150px;background-color:#F2F2F2">Tanggal Lahir</td>
          <td style="width: 250px;background-color:#F2F2F2"><?php echo ($TanggalLahir ? $TanggalLahir : "");?></td>
        </tr>

        <!--Lembaga-->
        <tr>
          <td style="width: 150px;">Lembaga</td>
          <td style="width: 250px;"><?php echo ($Lembaga ? $Lembaga : "");?></td>
        </tr>

        <!--Lembaga-->
        <tr>
          <td style="width: 150px;background-color:#F2F2F2">Tahun Lulus</td>
          <td style="width: 250px;background-color:#F2F2F2"><?php echo ($TahunLulus ? $TahunLulus : "");?></td>
        </tr>

        <!--Cabang-->
        <tr>
          <td style="width: 150px;">Cabang PTN/PTS</td>
          <td style="width: 250px;"><?php echo ($Cabang ? $Cabang : "");?></td>
        </tr>

        <!--Alamat-->
        <tr>
          <td style="width: 150px;background-color:#F2F2F2">Alamat Sekarang</td>
          <td style="width: 250px;background-color:#F2F2F2"><?php echo ($AlamatSekarang ? $AlamatSekarang : "");?></td>
        </tr>

        <!--No. HP-->
        <tr>
          <td style="width: 150px;">No. HP</td>
          <td style="width: 250px;">+62<?php echo ($NoHP ? $NoHP : "");?></td>
        </tr>
        <!--Email-->
        <tr>
          <td style="width: 150px;background-color:#F2F2F2">Email</td>
          <td style="width: 250px;background-color:#F2F2F2"><?php echo ($Email ? $Email : "");?></td>
        </tr>
      </table>
      
      <br><br>
      <!--Informasi Pendidikan-->
      <h3>Pendidikan Terakhir</h3>
      <table class="table table-striped">
        <!--Perguruan Tinggi-->
        <tr>
          <td style="width: 150px;background-color:#F2F2F2">Perguruan Tinggi</td>
          <td style="width: 250px;background-color:#F2F2F2"><?php echo ($PerguruanTinggi ? $PerguruanTinggi : "");?></td>
        </tr>

        <!--Jurusan-->
        <tr>
          <td style="width: 150px;">Jurusan</td>
          <td style="width: 250px;"><?php echo ($Jurusan ? $Jurusan : "");?></td>
        </tr>
      </table>
      
      <br><br>
      <!--Informasi Pengalaman-->
      <h3>Informasi Pengalaman</h3>
      <table class="table table-striped">
        <!--Aktif Organisasi-->
        <tr>
          <td style="width: 150px;background-color:#F2F2F2">Aktif Organisasi</td>
          <td style="width: 250px;background-color:#F2F2F2"><?php echo ($Kesibukan ? $Kesibukan : "");?></td>
        </tr>

        <!--Prestasi-->
        <tr>
          <td style="width: 150px;">Pestasi</td>
          <td style="width: 250px;"><?php echo ($Prestasi ? $Prestasi : "");?></td>
        </tr>

        <!--Kerja-->
        <tr>
          <td style="width: 150px;background-color:#F2F2F2">Bekerja</td>
          <td style="width: 250px;background-color:#F2F2F2"><?php echo ($TempatKerja ? $TempatKerja : "");?></td>
        </tr>

      </table>

    </div>


    <div class="right">
        <br><br><br><br><br><br><br><br><br>
        <img src="<?php 
        if($LinkFoto == ''){
          echo base_url().'assets2/img/default-foto.png'; 
        }
        else
        {
          echo base_url().$LinkFoto;
        }
        ?>" width="200px" height="200px" class="img-polaroid">
      </div>
    
  </div>


</div>
  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the user load faster -->
  <script src="<?php echo base_url(); ?>assets2/js/jquery-2.1.4.min.js"></script>
  <!--<script src="assets2/js/bootstrap.min.js"></script>-->
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="<?php echo base_url(); ?>assets2/js/ie10-viewport-bug-workaround.js"></script>

  <script src="<?php echo base_url(); ?>assets2/js/modal.js"></script>
  <script src="<?php echo base_url(); ?>assets2/js/transition.js"></script>
  <script src="<?php echo base_url(); ?>assets2/js/alert.js"></script>
  <script src="<?php echo base_url(); ?>assets2/js/dropdown.js"></script>
  <script src="<?php echo base_url(); ?>assets2/js/scrollspy.js"></script>
  <script src="<?php echo base_url(); ?>assets2/js/tab.js"></script>
  <script src="<?php echo base_url(); ?>assets2/js/tooltip.js"></script>
  <script src="<?php echo base_url(); ?>assets2/js/popover.js"></script>
  <script src="<?php echo base_url(); ?>assets2/js/button.js"></script>
  <script src="<?php echo base_url(); ?>assets2/js/collapse.js"></script>
  <script src="<?php echo base_url(); ?>assets2/js/carousel.js"></script>
  <script src="<?php echo base_url(); ?>assets2/js/typeahead.js"></script>


  <!-- you need to include the shieldui css and js assets in order for the components to work -->

  <script type="text/javascript" src="<?php echo base_url(); ?>assets2/js/pdf/shieldui-all.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets2/js/pdf/jszip.min.js"></script>
<!--
  <script type="text/javascript">
    jQuery(function ($) {
      $("#exportButton").click(function () {
            // parse the HTML table element having an id=exportTable
            var dataSource = shield.DataSource.create({
              data: "#exportTable",
              schema: {
                type: "table",
                fields: {
                  NamaLengkap: { type: String },
                  NamaPanggilan: { type: String }
                }
              }
            });

            // when parsing is done, export the data to PDF
            dataSource.read().then(function (data) {
              var pdf = new shield.exp.PDFDocument({
                author: "PrepBootstrap",
                created: new Date()
              });

              pdf.addPage("a4", "portrait");

              pdf.table(
                50,
                50,
                data,
                [
                { field: "Nama Lengkap", title: "Nama Lengkap", width: 150 },
                { field: "Nama Panggilan", title: "Nama Panggilan", width: 150 }
                ],
                {
                  margins: {
                    top: 50,
                    left: 50
                  }
                }
                );

              pdf.saveAs({
                fileName: "PrepBootstrapPDF"
              });
            });
          });
    });
  </script>

  <style>
    #exportButton {
      border-radius: 0;
    }
  </style>
-->
<!-- Export a Table to PDF - END -->

</body>
</html>
