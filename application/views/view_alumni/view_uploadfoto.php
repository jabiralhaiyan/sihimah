<?php
  require_once('layout/layout_head.php');
  require_once('layout/layout_menu.php');
?>

	<!--Upload Foto-->
	<div class="container">
	<div class="col-md-4"></div>
	<div class="col-md-4">
			<?php 
			if($status == 1)
			{
				echo "<center>
						<h4 style='background-color:#66cc66 ; color:white'> Gambar berhasil diunggah</h4>
					 </center>";
			}
			else if($status == 2)
			{
				echo "<center>
						<h4 style='background-color:#ff6666 ; color:white'>
							Maaf terdapat kesalahan ketika mengunggah gambar
						</h4>
					</center>";
			}
			else if($status == 3)
			{
				echo "<center>
						<h4 style='background-color:#ff6666 ; color:white'>
							Silakan pilih gambar yang akan diunggah
						</h4>
					</center>";
			}
			else if($status == 4)
			{
				echo "<center>
						<h4 style='background-color:#ff6666 ; color:white'>
							Ukuran gambar terlalu besar
						</h4>
					  </center>";
			}
			else if($status == 5)
			{
				echo "<center>
						<h4 style='background-color:#ff6666 ; color:white'>
							Format file gambar tidak tepat
						</h4>
					  </center>";
			}
			?>
	</div>
	<div class="col-md-4"></div>
			<br>
			<center><h2>Upload Foto</h2></center>
			<br>
		<div class="row">
			<div class="col-md-12">
				<ul class="nav nav-list bs-docs-sidenav">
					<li>
						<center>

            <img src="
						<?php 
						if($link == ''){
							echo base_url().'assets2/img/default-foto.png';	
						}
						else
						{
							echo base_url().$link;
						}
						?>" width="200px" height="200px" class="img-polaroid">
							<h4>Unggah Foto :</h4>
							<p style="font-size: 16px; color: #003bb3"><i class="icon-ok"></i> Ukuran max 300 kB <br>
							<i class="icon-ok"></i> Tipe file : jpg. jpeg, png</p></center>
					<form class="form-search" action="<?php echo base_url(); ?>pilihalumni/uploadfoto" method="post" enctype="multipart/form-data">
						<center>
							<input type="file" name="fileToUpload" id="fileToUpload"><br>
							<button class="btn btn-primary" type="submit" data-loading-text="Loading..." name="submit">Unggah</button>
						</center>
					</form>
					</li>
				</ul>       
			</div>
		</div>
	</div>
	
<?php require_once('layout/layout_script.php'); ?>
<?php require_once('layout/layout_footer.php'); ?>