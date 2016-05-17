<?php
  require_once('layout/layout_head.php');
  require_once('layout/layout_menu.php');
?>  
	 
      <!-- Begin page content -->
      <div class="container">
        <div class="well" style="max-width: 600px; margin: 0 auto 10px;">
          <div class="accordion" id="accordion" style="background-color: white">
            
          <!--Tulis Pesan-->
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#TulisPesan">
                  <i class="fa fa-pencil"></i><i class="fa fa-chevron-down pull-right"></i> Tulis Pesan
                </a>
              </div>
              <div id="TulisPesan" class="accordion-body collapse">
                <div class="accordion-inner">
                <form class="form-horizontal" action="<?php echo base_url(); ?>pilihalumni/do_pesan" method="post">
                    <div class="form-group">
                      <label class="control-label" for="inputPenerima">Kirim ke</label>
                      <input class="form-control" type="text" id="inputPenerima" name="inputPenerima" value="A001" readonly>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputPesan">Pesan</label>
                      <textarea class="form-control" rows="5" id="inputPesan" name="inputPesan" placeholder="Kirimkan pesan, kritik atau saran Anda :)"></textarea>
                    </div>
                    <div class="form-group">
                      <center><button type="submit" class="btn btn-primary">Kirim Pesan</button></center>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            
            <!--Kotak Masuk-->
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#Inbox">
                  <i class="fa fa-pencil"></i><i class="fa fa-chevron-down pull-right"></i> Kotak Masuk
                </a>
              </div>
              <div id="Inbox" class="accordion-body collapse in">
                <div class="accordion-inner">
                  <div class="thumbnail" style="background-color: white; border: 0px">
                    <div class="caption">
                      <h3>Kotak Masuk (Inbox)</h3>
                      <table class="table table-striped table-hover">
                        <tr>
                          <th style="font-size:12px; width: 80px;">Dari</th>
                          <th style="font-size:12px;">Pesan</th>
                          <th style="font-size:12px; width: 120px;">Waktu</th>
                        </tr>
                        
                        <?php foreach ($kotakmasuk->result() as $row){ ?>

                        <tr   data-toggle="modal" data-target="#myModal<?php echo $row->IdPesan; ?>">
                          <td style="font-size:12px;"><?php echo $row->Pengirim; ?></td>
                          <td style="font-size:12px;"><?php echo (SUBSTR($row->Pesan, 0, 30)).'...'; ?></td>
                          <td style="font-size:12px;"><?php echo $row->Waktu; ?></td>
                        </tr>

                        
                        <div id="myModal<?php echo $row->IdPesan; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                          <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Lihat Pesan Masuk</h4>
                          </div>
                          <div class="modal-body">
                              <div class="form-group">
                                <label class="control-label" for="pengirim"><b>Dari</b></label>
                                <input class="form-control" id="pengirim" type="text" value="Admin" disabled>
                              </div>
                              <div class="form-group">
                                <label class="control-label" for="pesan"><b>Pesan</b></label>
                                  <textarea class="form-control" id="pesan" disabled><?php echo $row->Pesan; ?></textarea>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <center>
                                <button class="btn btn-large btn-block btn-primary" class="close" data-dismiss="modal">OK</button>
                              </center>
                            </div>
                          </div>
                          </div>
                        </div>
                        
                        <?php } ?>

                        </table>           
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!--Kotak Keluar-->
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#Outbox">
                  <i class="fa fa-pencil"></i><i class="fa fa-chevron-down pull-right"></i> Kotak Keluar
                </a>
              </div>
              <div id="Outbox" class="accordion-body collapse">
                <div class="accordion-inner">
                  <div class="thumbnail" style="background-color: white; border: 0px">
                    <div class="caption">
                      <h3>Kotak Keluar (Outbox)</h3>
                      <table class="table table-striped table-hover">
                        <tr>
                          <th style="font-size:12px; width: 80px;">Kepada</th>
                          <th style="font-size:12px;">Pesan</th>
                          <th style="font-size:12px; width: 120px;">Waktu</th>
                        </tr>
                        
                        <?php foreach ($kotakkeluar->result() as $row){ ?>
                        
                        <tr   data-toggle="modal" data-target="#myModal<?php echo $row->IdPesan; ?>">
                          <td style="font-size:12px;"><?php echo $row->Penerima; ?></td>
                          <td style="font-size:12px;"><?php echo (SUBSTR($row->Pesan, 0, 30)).'...'; ?></td>
                          <td style="font-size:12px;"><?php echo $row->Waktu; ?></td>
                        </tr>

                        
                        <div id="myModal<?php echo $row->IdPesan; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                          <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Lihat Pesan Keluar</h4>
                          </div>
                          <div class="modal-body">
                              <div class="form-group">
                                <label class="control-label" for="pengirim"><b>Kepada</b></label>
                                <input class="form-control" id="pengirim" type="text" value="Admin" disabled>
                              </div>
                              <div class="form-group">
                                <label class="control-label" for="pesan"><b>Pesan</b></label>
                                  <textarea class="form-control" id="pesan" disabled><?php echo $row->Pesan; ?></textarea>
                              </div>
                          </div>
                          <div class="modal-footer">
                              <center>
                                <button class="btn btn-large btn-block btn-primary" class="close" data-dismiss="modal">OK</button>
                              </center>
                          </div>
                          </div>
                          </div>
                        </div>

                        <?php } ?>

                        </table>           
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

			
	</div>


<?php require_once('layout/layout_script.php'); ?>

<?php
if ($kirim_pesan_berhasil) echo "<script>
    window.onload = fungsi_notifikasi;
function fungsi_notifikasi()
{
    alert(" . '"' . $kirim_pesan_berhasil . '"' . ");
}
</script>";
?>

<?php require_once('layout/layout_footer.php'); ?>