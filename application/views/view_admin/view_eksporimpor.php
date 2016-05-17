<?php
require_once('layout/layout_head.php');
require_once('layout/layout_sidemenu.php');
require_once('layout/layout_topmenu.php');
?>
<!-- page content -->
<div class="right_col" role="main">

    <!-- Start to do list -->
    <div class="col-md-6 col-sm-6 col-xs-6">
        <div class="x_panel">
            <div class="x_title">
                <h2>Import</h2> 
                <ul class="nav navbar-right">
                    <li><a href="#" class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <h3>Impor Data Alumni</h3>
                <?php
              //  if ($file_kosong) 
              //      echo "<p style='background-color:#ff6666 ; color:white'>" . $file_kosong . "</p>";
              //  if ($import_data_berhasil) 
              //      echo "<p style='background-color:#66cc66 ; color:white'>" . $import_data_berhasil . "</p>";
                ?>

                <p style="font-size:14px">Impor File dengan ektensi (.xls | .xlsx) (WAJIB SESUAI FORMAT)
                   <a href="<?php echo base_url(); ?>pilihadmin/format_impor" target="_blank"><span class="label label-info">Lihat Format</span></a></p>

                   <!-- Standar Form -->
                   <h4>Pilih File dari Komputer</h4>
                   <?php
                   $att=array(
                    'id'=>'formimport',
                    );
                   echo form_open_multipart("",$att);
                   ?>

                   <div class="form-group">
                    <label for="x" class="control-label col-md-3 col-sm-3 col-xs-12">Tabel</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <select name="tb1" id="tb1" class="form-control" required="">
                          <option value="">--Pilih Tabel--</option>
                          <?php
                          $t1 = $this->db->list_tables();
                          foreach($t1 as $rf1)
                          {
                              ?>
                              <option value="<?=$rf1;?>"><?=ucwords($rf1);?></option>
                              <?php
                          }
                          ?>
                      </select>
                  </div>
              </div>
              <br><br><br>
              <div class="form-group">
                <label for="x" class="control-label col-md-3 col-sm-3 col-xs-12">Pilih File (xls/xlsx)</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="file" id="file" name="file" required="" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
              </div>
          </div>
          <br><br>
          <div class="form-group">
            <label for="x" class="control-label col-md-3 col-sm-3 col-xs-12">Baris Ke</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="number" class="form-control" id="mulai" name="mulai" required="">

          </div>
      </div>
      <br><br>
      <span class="text-info">
        <ul>
          <li>1. Tabel yang dimasksud adalah tabel yang akan diimport datanya</li>
          <li>2. Kolom harus sesuai dengan nama field (contoh : nama_ibu,tanggal_lahir), untuk contoh bisa lihat format</li>
          <li>3. Baris data adalah letak data pada file. <a href="javascript:showelement('img1','bd');" id="bd" data-id="0" class="btn btn-xs btn-flat btn-success"><i class="glyphicon glyphicon-picture"></i> Lihat contoh gambar</a> <img src="<?=base_url();?>assets/images/barisdata.jpg" class="img-responsive" id="img1" style="display:none"/></li>
        </ul>
      </span>

      <br><br>
      <center>
      <button type="submit" id="importbtn" class="btn btn-primary btn-lg">Import Data</button>
      <button type="reset" id="resetbtn" class="btn btn-default btn-lg">Reset Form</button>
      </center>

      <br><br>
      <div id="respon1"></div>
      <?php
      echo form_close();
      ?>

      <!-- /container --> 
  </div>
</div>
</div>

<!-- Start to do list -->
<div class="col-md-6 col-sm-6 col-xs-6">
    <div class="x_panel">
        <div class="x_title">
            <h2>Export</h2> 
            <ul class="nav navbar-right">
                <li><a href="#" class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">

            <h3>Ekspor Data Alumni</h3>
            <p style="font-size:14px">Download File .xls yang Berisi Data Alumni</p>


            <a href="<?php echo base_url() ;?>pilihadmin/do_ekspor" class="btn btn-primary btn-lg"><i class="fa fa-file-excel-o"></i> Download Export File</a>


        </div>
    </div>
</div>


<!-- footer content -->
<?php require_once('layout/layout_footer.php'); ?>
<!-- /footer content -->
</div>
<!-- End to do list -->

<!-- /page content -->


<?php require_once('layout/layout_script.php'); ?>

<script>
  function showelement(id,container)
  {
    var did=$("#"+container).attr('data-id');
    if(did==0)
    {
        $("#"+id).show();
        $("#"+container).attr('data-id','1');
    }else if(did==1){
        $("#"+id).hide();
        $("#"+container).attr('data-id','0');
    }
}
$(document).ready(function(){

    $("#formimport").on('submit',function(e){
        e.preventDefault();            
        var tb=$("#tb1").val();
        var fl=$("#file").val();
        var br=$("#mulai").val();
        $.ajax({
            type:'post',
            dataType:'json',
            url:'<?=site_url();?>/pilihadmin/do_impor',
            data:  new FormData(this),
            mimeType:"multipart/form-data",
            contentType: false,
            cache: false,
            processData:false,
            beforeSend:function(){
                $("#respon1").html('<img src="<?=base_url();?>assets/images/ajax-loader.gif"/><span>harap tunggu...</span>');
            },
            success:function(x){
                $("#respon1").html(x);
                $("#resetbtn").trigger('click');
                return false;
            },
        });
    });


});
</script>

<script>
    NProgress.done();
</script>

<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip({
            placement: 'top'
        });   
        /* end dot nav */
    });
</script>



</body>

</html>
