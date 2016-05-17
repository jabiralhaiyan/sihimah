<?php
  require_once('layout/layout_head.php');
  require_once('layout/layout_menu.php');
?>  
      <!-- Begin page content -->
      <div class="container">
	  
			<!--Hasil Pencarian-->
        <?php 
					if($status == 0)
						echo "<center><h3>Silakan masukkan pencarian</h3></center>";
					else if($status == 1)
						echo "<center><h3>Hasil pencarian '$nama'</h3></center>";
					else if($status == 2)
						echo "<center><h3>Data tidak ditemukan</h3></center>";
				?>

					<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
					<table class="table" style="background-color:white">
                    <tbody style="font-size:16px;">
                    	
                      <?php if($status == 1) {
                      	foreach($query->result() as $row):
                      echo'
                         <tr>
							<td style= "width: 100px;" rowspan="8">
								<center>
									<img src="
										'.($row->LinkFoto ? base_url().$row->LinkFoto : base_url().'assets2/profpic/default-foto.png').'
									" 
									width="200px" height="200px">
								</center>
							</td>
						</tr>
                          <tr>
                          	<td style="width: 200px;"><i class="fa fa-mortar-board"></i> Nama Lengkap</td>
				            <td>: '.$row->NamaLengkap.'</td>
				            
                          </tr>
                          <tr>
				            <td style="width: 200px;"><i class="fa fa-mortar-board"></i> Lembaga</td>
				            <td>: '.$row->Lembaga.'</td>
				          </tr>
				          <tr>
				            <td style="width: 200px;"><i class="fa fa-star"></i> Cabang PTN/PTS</td>
				            <td>: '.$row->Cabang.'</td>
				          </tr>
				          <tr>
				            <td style="width: 200px;"><i class="fa fa-home"></i> Alamat</td>
				            
				            <td>: '.$row->AlamatSekarang.'</td>
				          </tr>
				          <tr>
				            <td style="width: 200px;"><i class="fa fa-phone"></i> No. HP</td>
				            
				            <td>: '.$row->NoHP.'</td>
				          </tr>
				          <tr>
				            <td style="width: 200px;"><i class="fa fa-envelope"></i>Email</td>
				            
				            <td>: '.$row->Email.'</td>
				          </tr>
                          
                          <tr>
							<td></td>

                          <br>
                          <td>
	                          <a href="'.$row->Facebook.'" data-toggle="tooltip" data-placement="bottom" title="'.$row->Facebook.'" > 
	                          	<img src="'.base_url().'assets2/img/logo-fb.png" width="35px" height="35px">
	                          </a>
							  <a href="http://twitter.com/'.$row->Twitter.'" data-toggle="tooltip" data-placement="bottom" title="'.$row->Twitter.'">
							  	<img src="'.base_url().'assets2/img/logo-twitter.png" width="35px" height="35px">
							  </a>
							  <a href="http://'.$row->Blog.'" data-toggle="tooltip" data-placement="bottom" title="'.$row->Blog.'">
							  	<img src="'.base_url().'assets2/img/logo-blog.png" width="35px" height="35px">
							  </a>
							  <a href="http://instagram.com/'.$row->Instagram.'" data-toggle="tooltip" data-placement="bottom" title="'.$row->Instagram.'">
							  	<img src="'.base_url().'assets2/img/logo-instagram.png" width="35px" height="35px">
							  </a>
							  <a href="http://'.$row->Line.'" data-toggle="tooltip" data-placement="bottom" title="'.$row->Line.'">
							  	<img src="'.base_url().'assets2/img/logo-line.png" width="35px" height="35px">
							  </a>
						  </td>
						  </tr>
                      ';
                      endforeach; } ?>
                      
                      
                      </tbody>
					</table>
					</div>
					<div class="col-md-2"></div>
                </div>
        </div>        
			<!--end-->
<?php require_once('layout/layout_script.php'); ?>
<?php require_once('layout/layout_footer.php'); ?>