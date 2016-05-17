<?php

class Pilihadmin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//$this->load->library("PHPExcel");
		//$this->load->library("WriteExcel");
		$this->load->helper('form', 'url');
		$this->load->database();

	}
	public function tentang()
	{
		$this->load->library('session');
		$username = $this->session->userdata('username');
		if ($username==false)
		{
			$this->load->helper('url');
			redirect('home','location');
		}
		else if ($username[0]=='A')
		{
			$notifikasi;
			//title head
			$notifikasi['title']='Tentang | SIHIMAH';

				$notifikasi['NamaLengkap'] = $this->session->userdata('namalengkap');//menampilkan nama lengkap admin
				$notifikasi['FotoProfil'] = $this->session->userdata('foto'); //menampilkan foto profil admin

				$this->load->model('Admin');
				//Mendapatkan notifikasi
				$notifikasi['notifikasi'] = $this->Admin->getNotification();
				//Mendapatkan notifikasi pesan
				$notifikasi['notifikasipesan'] = $this->Admin->getNotificationMessage();

				$this->load->view('view_admin/view_tentangadmin', $notifikasi);
			}
			else 
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}
		}

		public function notifikasi()
		{
			$this->load->library('session');
			$username = $this->session->userdata('username');
			if ($username==false)
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else if ($username[0]=='A')
			{
				$notifikasi;

					//title head
				$notifikasi['title']='Notifikasi | SIHIMAH';

					$notifikasi['NamaLengkap'] = $this->session->userdata('namalengkap');//menampilkan nama lengkap admin
					$notifikasi['FotoProfil'] = $this->session->userdata('foto'); //menampilkan foto profil admin

					$this->load->model('Admin');
					//Mendapatkan notifikasi
					$notifikasi['notifikasi'] = $this->Admin->getNotification();
					$notifikasi['tabelnotiflogin'] = $this->Admin->getAllNotification();
					//Mendapatkan notifikasi pesan
					$notifikasi['notifikasipesan'] = $this->Admin->getNotificationMessage();

					$this->load->view('view_admin/view_notifikasi', $notifikasi);
				}
				else 
				{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
					$this->load->helper('url');
					redirect('home','location');
				}
			}

			

			public function pesan()
			{
				$this->load->library('session');
				$username = $this->session->userdata('username');
				if ($username==false)
				{
					$this->load->helper('url');
					redirect('home','location');
				}
				else if ($username[0]=='A')
				{
					$notifikasi;
					//title head
					$notifikasi['title']='Pesan | SIHIMAH';
					$notifikasi['NamaLengkap'] = $this->session->userdata('namalengkap');//menampilkan nama lengkap admin
					$notifikasi['FotoProfil'] = $this->session->userdata('foto'); //menampilkan foto profil admin

					//notifikasi pesan
					$notifikasi['kirim_pesan_berhasil'] = $this->session->flashdata('kirim_pesan_berhasil');
					$notifikasi['hapus_kotak_masuk_berhasil'] = $this->session->flashdata('hapus_kotak_masuk_berhasil');
					$notifikasi['hapus_kotak_keluar_berhasil'] = $this->session->flashdata('hapus_kotak_keluar_berhasil');

					$this->load->model('Admin');
					$this->Admin->setUsername($username);
					//Mendapatkan notifikasi
					$notifikasi['notifikasi'] = $this->Admin->getNotification();
					//Mendapatkan notifikasi pesan
					$notifikasi['notifikasipesan'] = $this->Admin->getNotificationMessage();
					//Mendapatkan kotak masuk
					$notifikasi['kotakmasuk'] = $this->Admin->getInboxMessage();
					//Update status message
					$this->Admin->updateStatusMessage();
					//mendapatkan kotak keluar
					$notifikasi['kotakkeluar'] = $this->Admin->getOutboxMessage();
					$this->load->view('view_admin/view_pesan', $notifikasi);
				}
				else 
				{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
					$this->load->helper('url');
					redirect('home','location');
				}
			}

			public function do_pesan()
			{
				$this->load->library('session');
				$username = $this->session->userdata('username');
				if ($username==false)
				{
					$this->load->helper('url');
					redirect('home','location');
				}
				else if ($username[0]=='A')
				{

					$this->load->model('Admin');
					$this->Admin->setUsername($username);
					$this->Admin->setPenerima($this->input->post('inputPenerima'));
					$this->Admin->setPesan($this->input->post('inputPesan'));

				//$query = $this->Admin->getAllFromDatabase();

					$query = $this->Admin->sendMessage();

					$this->session->set_flashdata('kirim_pesan_berhasil','Anda berhasil mengirim pesan');
					$this->load->helper('url');
					redirect('pilihadmin/pesan','location');
				}
				else 
				{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
					$this->load->helper('url');
					redirect('home','location');
				}
			}

			public function do_hapuskotakmasuk($IdPesan)
			{
				$this->load->library('session');
				$username = $this->session->userdata('username');
				if ($username==false)
				{
					$this->load->helper('url');
					redirect('home','location');
				}
				else if ($username[0]=='A')
				{

					$this->load->model('Admin');
					$this->Admin->deleteInboxFromMessage($IdPesan);

					$this->session->set_flashdata('hapus_kotak_masuk_berhasil',"Anda berhasil menghapus kotak masuk dari $Penerima");

					$this->load->helper('url');
					redirect('pilihadmin/pesan','location');

				}
				else 
				{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
					$this->load->helper('url');
					redirect('home','location');
				}
			}

			public function do_hapuskotakkeluar($IdPesan)
			{
				$this->load->library('session');
				$username = $this->session->userdata('username');
				if ($username==false)
				{
					$this->load->helper('url');
					redirect('home','location');
				}
				else if ($username[0]=='A')
				{

					$this->load->model('Admin');
					$this->Admin->deleteOutboxFromMessage($IdPesan);

					$this->session->set_flashdata('hapus_kotak_keluar_berhasil',"Anda berhasil menghapus kotak keluar kepada $Penerima");

					$this->load->helper('url');
					redirect('pilihadmin/pesan','location');
				}
				else 
				{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
					$this->load->helper('url');
					redirect('home','location');
				}
			}

			public function ekspor_impor()
			{
				$this->load->library('session');
				$username = $this->session->userdata('username');
				if ($username==false)
				{
					$this->load->helper('url');
					redirect('home','location');
				}
				else if ($username[0]=='A')
				{
					$notifikasi;
					//title head
					$notifikasi['title']='Ekspor/Impor | SIHIMAH';
					$notifikasi['NamaLengkap'] = $this->session->userdata('namalengkap');//menampilkan nama lengkap admin
					$notifikasi['FotoProfil'] = $this->session->userdata('foto'); //menampilkan foto profil admin

					//notifikasi gagal
					//$notifikasi['file_kosong'] = $this->session->flashdata('file_kosong');
					//notifikasi berhasil
					//$notifikasi['import_data_berhasil'] = $this->session->flashdata('import_data_berhasil');


					$this->load->model('Admin');
					$this->Admin->setUsername($username);
					//Mendapatkan notifikasi
					$notifikasi['notifikasi'] = $this->Admin->getNotification();
					//Mendapatkan notifikasi pesan
					$notifikasi['notifikasipesan'] = $this->Admin->getNotificationMessage();
					
					//Update status message
					$this->Admin->updateStatusMessage();
					
					$this->load->view('view_admin/view_eksporimpor', $notifikasi);
				}
				else 
				{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
					$this->load->helper('url');
					redirect('home','location');
				}
			}

			public function do_ekspor()
			{

				$this->load->library('session');
 			//load librarynya terlebih dahulu
            //jika digunakan terus menerus lebih baik load ini ditaruh di auto load
				$this->load->library("PHPExcel");
				$username = $this->session->userdata('username');
				if ($username==false)
				{
					$this->load->helper('url');
					redirect('home','location');
				}
				else if ($username[0]=='A')
				{
					$this->load->model('Alumni');
					$notifikasi ['dataalumni'] = $this->Alumni->getAllDatabaseAlumni();
					$this->load->view('view_admin/export_excel',$notifikasi);
				}
				else 
				{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
					$this->load->helper('url');
					redirect('home','location');
				}

			}

			public function do_impor()
			{

				$this->load->library('session');
				$this->load->model('Alumni');
	 			//load librarynya terlebih dahulu
	            //jika digunakan terus menerus lebih baik load ini ditaruh di auto load
				//$this->load->library("PHPExcel");
				$this->load->library('tools');
				$username = $this->session->userdata('username');
				if ($username==false)
				{
					$this->load->helper('url');
					redirect('home','location');
				}
				else if ($username[0]=='A')
				{
					
					$tb=$this->input->post('tb1');
			        $fl=$this->input->post('file');
			        $br=$this->input->post('mulai');
			        $config['upload_path'] = './assets/importdata';
			        $config['allowed_types'] = 'xls|xlsx';
			        $config['max_size'] = 1024 * 8;
			        $config['encrypt_name'] = TRUE;
			 
			        $this->load->library('upload', $config);
			               
			        if ($this->upload->do_upload('file'))        
			        {
			            $data = $this->upload->data();
			            $nama = $data['file_name'];
			            if(file_exists("./assets/importdata/".$nama))
			            {
			                $file="./assets/importdata/".$nama;
			                $this->tools->importdata($file,$tb,$br,FALSE);
			                unlink($file);
			                echo json_encode('Berhasil import data');                
			            }else{
			                echo json_encode('Gagal, karena kesalahan file atau file tidak ditemukan');
			            }
			        }else{
			            echo json_encode('Gagal upload file');
			        }
				}
				else 
				{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
					$this->load->helper('url');
					redirect('home','location');
				}

			}

			public function format_impor()
			{

				$this->load->library('session');
 			//load librarynya terlebih dahulu
            //jika digunakan terus menerus lebih baik load ini ditaruh di auto load
				$this->load->library("PHPExcel");
				$username = $this->session->userdata('username');
				if ($username==false)
				{
					$this->load->helper('url');
					redirect('home','location');
				}
				else if ($username[0]=='A')
				{
					//$this->load->model('Alumni');
					//$notifikasi ['dataalumni'] = $this->Alumni->getAllDatabaseAlumni();
					$this->load->view('view_admin/format_impor');
				}
				else 
				{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
					$this->load->helper('url');
					redirect('home','location');
				}

			}

			public function profiladmin()
			{
				$this->load->library('session');
				$username = $this->session->userdata('username');
				if ($username==false)
				{
					$this->load->helper('url');
					redirect('home','location');
				}
				else if ($username[0]=='A')
				{

					$notifikasi;
				//title head
					$notifikasi['title']='Profil Admin | SIHIMAH';
				$notifikasi['NamaLengkap'] = $this->session->userdata('namalengkap');//menampilkan nama lengkap admin
				$notifikasi['FotoProfil'] = $this->session->userdata('foto'); //menampilkan foto profil admin
				
				$this->load->model('Admin');
				$this->Admin->setUsername($username);
				$query = $this->Admin->getAllFromDatabase();
				if ($query->num_rows()>0)
				{
					foreach ($query->result() as $row)
					{
						//bukan pesan
						$notifikasi['Nama'] = $row->Nama;
						$notifikasi['Alamat'] = $row->Alamat;
						$notifikasi['NoHP'] = $row->NoHP;
						$notifikasi['Username'] = $row->Username;
						$notifikasi['Password'] = $row->Password;
						$notifikasi['LinkFoto'] = $row->LinkFoto;
					}
				}

				//Mendapatkan notifikasi
				$notifikasi['notifikasi'] = $this->Admin->getNotification();
				//Mendapatkan notifikasi pesan
				$notifikasi['notifikasipesan'] = $this->Admin->getNotificationMessage();

				$this->load->view('view_admin/view_profiladmin', $notifikasi);

			}
			else 
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}
		}

		public function do_ubahprofiladmin()
		{
			$this->load->library('session');
			$username = $this->session->userdata('username');
			if ($username==false)
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else if ($username[0]=='A')
			{
				
				if ($this->input->post('inputPassword')!=$this->input->post('inputUlangiPassword'))
				{
					$this->session->set_flashdata('password_dan_konfirmasi_password_tidak_sesuai','Konfirmasi Password tidak sesuai');
					$this->load->helper('url');
					redirect('pilihadmin/profiladmin','location');
				}

				$this->load->model('Admin');
				$this->Admin->setUsername($username);
				$this->Admin->setNamaLengkap($this->input->post('inputNama'));
				$this->Admin->setAlamat($this->input->post('inputAlamatSekarang'));
				$this->Admin->setNoHP($this->input->post('inputNoHP'));
				$this->Admin->setPassword($this->input->post('inputPassword'));
				//$this->Admin->setLinkFoto($this->input->post('inputFoto'));
				
				
				$query = $this->Admin->updateProfilAdmin();
				
				$this->session->set_flashdata('ubah_data_berhasil','Anda berhasil mengubah data');
				$this->load->helper('url');
				redirect('home','location');

			}
			else 
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}
		}

		public function uploadfotoadmin()
		{
			

			$this->load->model('Admin');
			$this->load->library('session');
			$username = $this->session->userdata('username');
			//$data['NamaLengkap'] = $this->session->userdata('namalengkap');
			$this->Admin->setUsername($username);
			$data['link'] = $this->Admin->getFoto();
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) 
			{
				if(empty($_FILES["fileToUpload"]["name"]))
				{
					$data['status'] = 3;
				}
				else
				{
					$target_dir = realpath(__DIR__) . '/../../assets/profpic_admin/';
					$linkfoto = 'assets/profpic_admin/' . basename($_FILES["fileToUpload"]["name"]);
					$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
					$uploadOk = 1;
					$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
					$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
					if($check !== false) {
						//echo "File is an image - " . $check["mime"] . ".";
						$uploadOk = 1;
					} else {
						//echo "File is not an image.";
						$uploadOk = 0;
					}
					// Check if file already exists
					if (file_exists($target_file)) {
						//echo "Sorry, file already exists.";
						$uploadOk = 0;
						$data['status'] = 2;
					}
					
					// Check file size
					if ($_FILES["fileToUpload"]["size"] > 350000) {
						//echo "Sorry, your file is too large.";
						$uploadOk = 0;
						$data['status'] = 4;
					}
					
					// Allow certain file formats
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
						&& $imageFileType != "gif" ) {
						//echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
						$uploadOk = 0;
					$data['status'] = 5;
				}

					// Check if $uploadOk is set to 0 by an error
				if ($uploadOk != 0) {
					if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
							//echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
						$data['status'] = 1;
						$this->Admin->setUsername($username);
						$this->Admin->setLinkFoto($linkfoto);
						$this->Admin->setFoto();
						$data['link'] = $linkfoto;
					} else {
							//echo "Sorry, there was an error uploading your file.";
						$data['status'] = 2;
					}
				}
			}
			if ($username==false)
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else
			{
				$this->load->helper('url');
				redirect('pilihadmin/profiladmin',$data);
					//$this->load->view('view_profiladmin', $data);
			}
		}
		else
		{
			$data['status'] = 0;
			if ($username==false)
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else
			{
				$this->load->helper('url');
				redirect('pilihadmin/profiladmin',$data);
					//$this->load->view('view_profiladmin', $data);
			}
		}
	}

	public function akunadmin()
	{
		$this->load->library('session');
		$username = $this->session->userdata('username');

		if ($username==false)
		{
			$this->load->helper('url');
			redirect('home','location');
		}

		else if ($username[0]=='A')
		{

			$notifikasi;
			//title head
			$notifikasi['title']='Akun Admin | SIHIMAH';
				$notifikasi['NamaLengkap'] = $this->session->userdata('namalengkap'); //menampilkan nama lengkap admin
				$notifikasi['FotoProfil'] = $this->session->userdata('foto'); //menampilkan foto profil admin

				$this->load->model('Admin');
				$notifikasi['data_user'] = $this->Admin->getSomeFromDatabase();
				$notifikasi['tambah_akun_admin_berhasil'] = $this->session->flashdata('tambah_akun_admin_berhasil');
				$notifikasi['ubah_data_berhasil'] = $this->session->flashdata('ubah_data_berhasil');
				$notifikasi['hapus_data_berhasil'] = $this->session->flashdata('hapus_data_berhasil');

				$this->load->model('Admin');
				
				//Mendapatkan notifikasi
				$notifikasi['notifikasi'] = $this->Admin->getNotification();
				//Mendapatkan notifikasi pesan
				$notifikasi['notifikasipesan'] = $this->Admin->getNotificationMessage();
				
				$this->load->view('view_admin/crudadmin/view_tabeladmin', $notifikasi);
			}

			else 
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}

		}

		public function tambahakunadmin()
		{
			$this->load->library('session');
			$username = $this->session->userdata('username');
			if ($username==false)
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else if ($username[0]=='A')
			{
				$notifikasi;
				//title head
				$notifikasi['title']='Tambah Admin | SIHIMAH';
				//bukan pesan error
				$notifikasi['NamaLengkap'] = $this->session->userdata('namalengkap');
				$notifikasi['FotoProfil'] = $this->session->userdata('foto'); //menampilkan foto profil admin
				//pesan error
				$notifikasi['nama_kosong'] = $this->session->flashdata('nama_kosong');
				$notifikasi['username_kosong'] = $this->session->flashdata('username_kosong');
				$notifikasi['password_kosong'] = $this->session->flashdata('password_kosong');
				$notifikasi['konfirmasi_password_kosong'] = $this->session->flashdata('konfirmasi_password_kosong');
				$notifikasi['username_sudah_ada'] = $this->session->flashdata('username_sudah_ada');
				$notifikasi['password_dan_konfirmasi_password_tidak_sesuai'] = $this->session->flashdata('password_dan_konfirmasi_password_tidak_sesuai');
				
				$this->load->model('Admin');
				//Mendapatkan notifikasi
				$notifikasi['notifikasi'] = $this->Admin->getNotification();
				//Mendapatkan notifikasi pesan
				$notifikasi['notifikasipesan'] = $this->Admin->getNotificationMessage();



				$this->load->view('view_admin/crudadmin/view_tambahakunadmin',$notifikasi);
			}
			else 
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}
		}

		public function do_tambahakunadmin()
		{
			$this->load->library('session');
			$username = $this->session->userdata('username');
			if ($username==false)
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else if ($username[0]=='A')
			{
				
				if ($this->input->post('inputPassword')!=$this->input->post('inputUlangiPassword'))
				{
					$this->session->set_flashdata('password_dan_konfirmasi_password_tidak_sesuai','Konfirmasi Password tidak sesuai');
					$this->load->helper('url');
					redirect('pilihadmin/tambahakunadmin','location');
				}
				
				$this->load->model('Admin');
				$this->Admin->setNamaLengkap($this->input->post('inputNama'));
				$this->Admin->setAlamat($this->input->post('inputAlamatSekarang'));
				$this->Admin->setNoHP($this->input->post('inputNoHP'));
				$this->Admin->setUsername($this->input->post('inputUsername'));
				$this->Admin->setPassword($this->input->post('inputPassword'));
				
				$query = $this->Admin->getAllFromDatabase();
				if ($query->num_rows()>0)
				{
					$this->session->set_flashdata('username_sudah_ada','Username sudah ada! Silahkan masukkan username lain');
					$this->load->helper('url');
					redirect('pilihadmin/tambahakunadmin','location');
				}
				
				$query = $this->Admin->addToDatabase();
				$this->session->set_flashdata('tambah_akun_admin_berhasil','Anda berhasil menambah satu akun admin');
				
				$this->load->helper('url');
				redirect('pilihadmin/akunadmin','location');
			}
			else 
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}
		}

		public function ubahdataadmin($User)
		{
			$this->load->library('session');
			$username = $this->session->userdata('username');

			if ($username==false)
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else if ($username[0]=='A')
			{
				
				$notifikasi;
				//title head
				$notifikasi['title']='Update Admin | SIHIMAH';

				$notifikasi['NamaLengkap'] = $this->session->userdata('namalengkap');//menampilkan nama lengkap admin
				$notifikasi['FotoProfil'] = $this->session->userdata('foto');//menampilkan nama lengkap admin

				$this->load->model('Admin');
				$this->Admin->setUsername($User);
				$query = $this->Admin->getAllFromDatabaseByUsername($User);
				
				if ($query->num_rows()>0)
				{
					foreach ($query->result() as $row)
					{
							//bukan pesan
						$notifikasi['Nama'] = $row->Nama;
						$notifikasi['Alamat'] = $row->Alamat;
						$notifikasi['NoHP'] = $row->NoHP;
						$notifikasi['Username'] = $row->Username;
						$notifikasi['Password'] = $row->Password;
					}
				}
				
				$this->load->model('Admin');
				//Mendapatkan notifikasi
				$notifikasi['notifikasi'] = $this->Admin->getNotification();
				//Mendapatkan notifikasi pesan
				$notifikasi['notifikasipesan'] = $this->Admin->getNotificationMessage();

				//$notifikasi['update']=$this->Admin->getAllFromDatabaseByUsername($user);
				$this->load->view('view_admin/crudadmin/view_updateadmin', $notifikasi);

			}
			else 
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}
		}

		public function do_ubahdataadmin()
		{
			$this->load->library('session');
			$username = $this->session->userdata('username');
			
			
			if ($username==false)
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			
			else if ($username[0]=='A')
			{
				
				$User = $this->input->post('inputUsername');
				
				if ($this->input->post('inputPassword')!=$this->input->post('inputUlangiPassword'))
				{
					$this->session->set_flashdata('password_dan_konfirmasi_password_tidak_sesuai','Konfirmasi Password tidak sesuai');
					$this->load->helper('url');
					redirect('pilihadmin/ubahdataadminadmin','location');
				}
				
				$this->load->model('Admin');
				$this->Admin->setUsername($User);
				$this->Admin->setNamaLengkap($this->input->post('inputNama'));
				$this->Admin->setAlamat($this->input->post('inputAlamatSekarang'));
				$this->Admin->setNoHP($this->input->post('inputNoHP'));
				$this->Admin->setPassword($this->input->post('inputPassword'));
				$this->Admin->setLinkFoto($this->input->post('inputFoto'));
				
				
				$query = $this->Admin->updateDatabase();
				
				$this->session->set_flashdata('ubah_data_berhasil','Anda berhasil mengubah data');
				
				$this->load->helper('url');
				redirect('pilihadmin/akunadmin','location');

				$notifikasi['username_sudah_ada'] = $this->session->flashdata('username_sudah_ada');
			}
			else 
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}
		}

		public function do_hapusdataadmin($user)
		{
			$this->load->library('session');
			$username = $this->session->userdata('username');
			if ($username==false)
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else if ($username[0]=='A')
			{
				$this->load->model('Admin');
				$this->Admin->deleteThatUsernameFromDatabase($user);
				
				$this->session->set_flashdata('hapus_data_berhasil',"Anda berhasil menghapus akun dengan username $user");
				
				$this->load->helper('url');
				redirect('pilihadmin/akunadmin','location');
			}
			else 
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}
		}
		
		

		public function tambahakun()
		{
			$this->load->library('session');
			$username = $this->session->userdata('username');

			if ($username==false)
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else if ($username[0]=='A')
			{
				
				$notifikasi;
				//title head
				$notifikasi['title']='Tambah Alumni | SIHIMAH';
				//bukan pesan
				$notifikasi['NamaLengkap'] = $this->session->userdata('namalengkap');//menampilkan nama lengkap
				$notifikasi['FotoProfil'] = $this->session->userdata('foto'); //menampilkan foto profil admin
				//pesan error
				$notifikasi['nama_lengkap_kosong'] = $this->session->flashdata('nama_lengkap_kosong');
				$notifikasi['jenis_kelamin_kosong'] = $this->session->flashdata('jenis_kelamin_kosong');
				$notifikasi['nama_lembaga_kosong'] = $this->session->flashdata('nama_lembaga_kosong');
				$notifikasi['tahun_lulus_kosong'] = $this->session->flashdata('tahun_lulus_kosong');
				$notifikasi['username_kosong'] = $this->session->flashdata('username_kosong');
				$notifikasi['password_kosong'] = $this->session->flashdata('password_kosong');
				$notifikasi['ulangi_password_kosong'] = $this->session->flashdata('ulangi_password_kosong');
				$notifikasi['nama_lembaga_tidak_terdaftar'] = $this->session->flashdata('nama_lembaga_tidak_terdaftar');
				$notifikasi['format_email_salah'] = $this->session->flashdata('format_email_salah');
				$notifikasi['username_sudah_ada'] = $this->session->flashdata('username_sudah_ada');
				$notifikasi['password_dan_ulangi_password_tidak_sama'] = $this->session->flashdata('password_dan_ulangi_password_tidak_sama');

				//pesan berhasil
				$notifikasi['tambah_akun_berhasil'] = $this->session->flashdata('tambah_akun_berhasil');

				$this->load->model('Admin');
				//Mendapatkan notifikasi
				$notifikasi['notifikasi'] = $this->Admin->getNotification();
				//Mendapatkan notifikasi pesan
				$notifikasi['notifikasipesan'] = $this->Admin->getNotificationMessage();

				$this->load->model('Referensi');
				//mendapatkan tahun lulus, lembaga, cabang, pt dari database
				$notifikasi['tahunlulus'] = $this->Referensi->getTahunLulus();
				$notifikasi['lembaga'] = $this->Referensi->getLembaga();
				$notifikasi['cabang'] = $this->Referensi->getCabang();
				$notifikasi['perguruantinggi'] = $this->Referensi->getPT();

				$this->load->view('view_admin/view_tambahakun',$notifikasi);
			}
			else 
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}
		}

		public function do_tambahakun()
		{
			$this->load->model('Alumni');
			$this->load->library('session');
			$username = $this->session->userdata('username');
			
			if ($username==false)
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else if ($username[0]=='A')
			{
				
				if ($this->input->post('inputNamaLengkap')==''
					|| $this->input->post('inputJenisKelamin')==''
					|| $this->input->post('inputCabangLembaga')==''
					|| $this->input->post('inputTahunLulus')==''
					|| $this->input->post('inputUsername')==''
					|| $this->input->post('inputPassword')==''
					|| $this->input->post('inputUlangiPassword')=='')
				{
					if ($this->input->post('inputNamaLengkap')=='') $this->session->set_flashdata('nama_lengkap_kosong','Nama Lengkap harus diisi');
					if ($this->input->post('inputJenisKelamin')=='') $this->session->set_flashdata('jenis_kelamin_kosong','Jenis Kelamin harus diisi');
					if ($this->input->post('inputCabangLembaga')=='') $this->session->set_flashdata('nama_lembaga_kosong','Nama Lembaga harus diisi');
					if ($this->input->post('inputTahunLulus')=='') $this->session->set_flashdata('tahun_lulus_kosong','Tahun Lulus harus diisi');
					if ($this->input->post('inputUsername')=='') $this->session->set_flashdata('username_kosong','Username harus diisi');
					if ($this->input->post('inputPassword')=='') $this->session->set_flashdata('password_kosong','Password harus diisi');
					if ($this->input->post('inputUlangiPassword')=='') $this->session->set_flashdata('ulangi_password_kosong','Ulangi/Konfirmasi Password harus diisi');

					$this->load->helper('url');
					redirect('pilihadmin/tambahakun','location');
				}

				if ($this->input->post('inputCabangLembaga')!='MA Unggulan Amanatul Ummah Surabaya'
					&& $this->input->post('inputCabangLembaga')!='MA Akselerasi Amanatul Ummah Surabaya'
					&& $this->input->post('inputCabangLembaga')!='SMA Unggulan Amanatul Ummah Surabaya'
					&& $this->input->post('inputCabangLembaga')!='MBI Amanatul Ummah Surabaya'
					&& $this->input->post('inputCabangLembaga')!='MA Akselerasi Amanatul Ummah Pacet'
					&& $this->input->post('inputCabangLembaga')!='MBI Amanatul Ummah Pacet'
					&& $this->input->post('inputCabangLembaga')!='SMA Berbasis Pesantren Amanatul Ummah Pacet'
					&& $this->input->post('inputCabangLembaga')!='MA Bendungan Jati Hikmatul Amanah Pacet')
				{
					$this->session->set_flashdata('nama_lembaga_tidak_terdaftar','Nama Lembaga tidak terdaftar');
					
					$this->load->helper('url');
					redirect('pilihadmin/tambahakun','location');
				}
				

				$apakah_email_sah = false;
				$posisi_at;
				$banyak_at = 0;
				$panjang = strlen($this->input->post('inputEmail'));
				for ($i=0;$i<$panjang;$i++)
				{
					if ($this->input->post('inputEmail')[$i]=='@')
					{
						$posisi_at = $i;
						$banyak_at++;
						if ($banyak_at>1) break;
					}
				}
				if ($posisi_at==0)
				{
					$this->session->set_flashdata('format_email_salah','Format penulisan email salah');
					$this->load->helper('url');
					redirect('pilihadmin/tambahakun','location');
				}
				else if ($posisi_at==($panjang-1))
				{
					$this->session->set_flashdata('format_email_salah','Format penulisan email salah');
					$this->load->helper('url');
					redirect('pilihadmin/tambahakun','location');
				}
				else if ($banyak_at>1)
				{
					$this->session->set_flashdata('format_email_salah','Format penulisan email salah');
					$this->load->helper('url');
					redirect('pilihadmin/tambahakun','location');
				}
				
				if ($this->input->post('inputPassword')!=$this->input->post('inputUlangiPassword'))
				{
					$this->session->set_flashdata('password_dan_ulangi_password_tidak_sama','Konfirmasi Password tidak sesuai');
					$this->load->helper('url');
					redirect('pilihadmin/tambahakun','location');
				}
				
				
				$this->Alumni->setUsername($this->input->post('inputUsername'));
				$query = $this->Alumni->getUsernameFromDatabase();
				if ($query->num_rows()>0)
				{
					$this->session->set_flashdata('username_sudah_ada','Username sudah ada! Silahkan masukkan username lain');
					$this->load->helper('url');
					redirect('pilihadmin/tambahakun','location');
				}
				
				$this->Alumni->setNamaLengkap($this->input->post('inputNamaLengkap'));
				$this->Alumni->setNamaPanggilan($this->input->post('inputNamaPanggilan'));
				$this->Alumni->setJenisKelamin($this->input->post('inputJenisKelamin'));
				$this->Alumni->setTempatLahir($this->input->post('inputTempatLahir'));
				$this->Alumni->setTanggalLahir($this->input->post('inputTanggalLahir'));
				$this->Alumni->setLembaga($this->input->post('inputCabangLembaga'));
				$this->Alumni->setTahunLulus($this->input->post('inputTahunLulus'));
				$this->Alumni->setCabang($this->input->post('inputCabang'));
				$this->Alumni->setAlamatAsal($this->input->post('inputAlamatAsal'));
				$this->Alumni->setAlamatSekarang($this->input->post('inputAlamatSekarang'));
				$this->Alumni->setNoHP($this->input->post('inputNoHP'));
				$this->Alumni->setEmail($this->input->post('inputEmail'));
				
				$this->Alumni->setPerguruanTinggi($this->input->post('inputPerguruanTinggi'));
				$this->Alumni->setJurusan($this->input->post('inputJurusan'));
				$this->Alumni->setKesibukan($this->input->post('inputAktifOrganisasi'));
				$this->Alumni->setTempatKerja($this->input->post('inputBekerja'));
				$this->Alumni->setHobi($this->input->post('inputHobi'));
				$this->Alumni->setPrestasi($this->input->post('inputPrestasi'));
				$this->Alumni->setCita_Cita($this->input->post('inputCita'));
				$this->Alumni->setMotto($this->input->post('inputMotto'));
				
				$this->Alumni->setNamaOrtu($this->input->post('inputNamaOrangTua'));
				$this->Alumni->setPendidikanOrtu($this->input->post('inputPendidikanTerakhir'));
				$this->Alumni->setPekerjaanOrtu($this->input->post('inputPekerjaan'));
				$this->Alumni->setKontakOrtu($this->input->post('inputKontakOrtu'));

				$this->Alumni->setFacebook($this->input->post('inputLinkFB'));
				$this->Alumni->setTwitter($this->input->post('inputIDTwitter'));
				$this->Alumni->setBlog($this->input->post('inputAlamatBlog'));
				$this->Alumni->setInstagram($this->input->post('inputIDInstagram'));
				$this->Alumni->setLine($this->input->post('inputIDLine'));
				
				$this->Alumni->setPassword($this->input->post('inputPassword'));
				
				$this->Alumni->setLinkFoto($linkfoto);
				
				$query = $this->Alumni->addToDatabase();
				$this->session->set_flashdata('tambah_akun_berhasil','Anda berhasil menambah satu akun alumni');
				
				$this->load->helper('url');
				redirect('pilihadmin/tambahakun','location');
				//echo $this->input->post('inputTanggalLahir');
			}
			else 
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}
		}

		public function caridataalumni()
		{
			$this->load->library('session');
			$username = $this->session->userdata('username');
			if ($username==false)
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else if ($username[0]=='A')
			{
				
				$notifikasi;
				//title head
				$data['title']='Cari Alumni | SIHIMAH';
				//bukan pesan
				$data['NamaLengkap'] = $this->session->userdata('namalengkap');//menampilkan nama lengkap
				$data['FotoProfil'] = $this->session->userdata('foto'); //menampilkan foto profil admin
				//notifikasi
				$data['hapus_data_alumni_berhasil'] = $this->session->flashdata('hapus_data_alumni_berhasil');
				$data['update_data_alumni_berhasil'] = $this->session->flashdata('update_data_alumni_berhasil');

				$this->load->model('Admin');
				$this->load->model('Referensi');
				//Mendapatkan notifikasi
				$data['notifikasi'] = $this->Admin->getNotification();
				//Mendapatkan notifikasi pesan
				$data['notifikasipesan'] = $this->Admin->getNotificationMessage();

				//mendapatkan tahun lulus, lembaga, dan cabang dari database
				//$data['tahunlulus'] = $this->Referensi->getTahunLulus();
				$data['lembaga'] = $this->Referensi->getLembaga();
				$data['cabang'] = $this->Referensi->getCabang();
				

				$this->load->model('Alumni');
				$nama = $this->input->post('inputNama');
				$lembaga = $this->input->post('inputLembaga');
				$cabang = $this->input->post('inputCabang');
				$this->Alumni->setNamaLengkap($nama);
				$this->Alumni->setLembaga($lembaga);
				$this->Alumni->setCabang($cabang);
				$data['debug'] = '';
				$this->load->library('session');
				$username = $this->session->userdata('username');
				
				if($nama == '' && $lembaga == '' && $cabang == '')
				{
					$data['query'] = $this->Alumni->searchMhs(7);
				}
				else if($nama != ' ' && $lembaga[0] == '-' && $cabang[0] == '-')
				{
					$data['query'] = $this->Alumni->searchMhs(1);
				}
				else if($nama == '' && $lembaga[0] == '-' && $cabang[0] != '-')
				{
					$data['query'] = $this->Alumni->searchMhs(2);
				}
				else if($nama == '' && $lembaga[0] != '-' && $cabang[0] == '-')
				{
					$data['query'] = $this->Alumni->searchMhs(3);
				}
				else if($nama == '' && $lembaga[0] != '-' && $cabang[0] != '-')
				{
					$data['query'] = $this->Alumni->searchMhs(4);
				}
				else if($nama != '' && $lembaga[0] == '-' && $cabang[0] != '-')
				{
					$data['query'] = $this->Alumni->searchMhs(5);
				}
				else if($nama != '' && $lembaga[0] != '-' && $cabang[0] == '-')
				{
					$data['query'] = $this->Alumni->searchMhs(6);
				}
				else if($nama == '' && $lembaga[0] == '-' && $cabang[0] == '-')
				{
					$data['query'] = $this->Alumni->searchMhs(8);
				}
				else
				{
					$data['query'] = $this->Alumni->searchMhs(7);
				}
				
				$data['NamaLengkap'] = $this->session->userdata('namalengkap');
				$data['NamaCari'] = $nama;
				$data['LembagaCari'] = $lembaga;
				$data['CabangCari'] = $cabang;
				$data['status'] = 0;
				
				if ($username==false)
				{
					$this->load->helper('url');
					redirect('home','location');
				}
				else if($username[0]=='A' && $nama == '' && ($lembaga == '' || $lembaga == '-')  && ($cabang == '' || $cabang == '-'))
				{
					$data['status'] = 0;
					$this->load->view('view_admin/view_caridataalumni', $data);
				}
				else if($username[0]=='A' && $data['query']->num_rows()>0)
				{
					$data['status'] = 1;
					$this->load->view('view_admin/view_caridataalumni', $data);
				}
				else 
				{
					//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
					$data['status'] = 2;
					$this->load->view('view_admin/view_caridataalumni', $data);
					//$this->load->helper('url');
					//redirect('home','location');
				}
			}
			else 
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}
		}
		public function updatedataalumni($user)
		{
			$this->load->library('session');
			$username = $this->session->userdata('username');
			if ($username==false)
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else if ($username[0]=='A')
			{
				$notifikasi;
				//title head
				$notifikasi['title']='Update ALumni| SIHIMAH';
				//bukan pesn error
				$notifikasi['NamaLengkapAdmin'] = $this->session->userdata('namalengkap');//menampilkan nama lengkap
				$notifikasi['FotoProfil'] = $this->session->userdata('foto'); //menampilkan foto profil admin

				$this->load->model('Admin');
				$this->load->model('Referensi');

				//Mendapatkan notifikasi
				$notifikasi['notifikasi'] = $this->Admin->getNotification();
				//Mendapatkan notifikasi pesan
				$notifikasi['notifikasipesan'] = $this->Admin->getNotificationMessage();

				$notifikasi['tahunlulus'] = $this->Referensi->getTahunLulus();
				$notifikasi['lembaga'] = $this->Referensi->getLembaga();
				$notifikasi['cabang'] = $this->Referensi->getCabang();
				$notifikasi['perguruantinggi'] = $this->Referensi->getPT();

				$this->load->model('Alumni');
				$this->Alumni->setUsername($user);
				$query = $this->Alumni->getAllFromDatabase();
				if ($query->num_rows()>0)
				{
					foreach ($query->result() as $row)
					{
						//bukan pesan
						$notifikasi['Username'] = $row->Username;
						$notifikasi['Password'] = $row->Password;
						$notifikasi['NamaLengkap'] = $row->NamaLengkap;
						//$notifikasi['NamaLengkapAtas'] = $this->session->userdata('namalengkap');
						$notifikasi['NamaPanggilan'] = $row->NamaPanggilan;
						$notifikasi['JenisKelamin'] = $row->JenisKelamin;
						$notifikasi['TempatLahir'] = $row->TempatLahir;
						$notifikasi['TanggalLahir'] = $row->TanggalLahir;
						$notifikasi['Lembaga'] = $row->Lembaga;
						$notifikasi['TahunLulus'] = $row->TahunLulus;
						$notifikasi['Cabang'] = $row->Cabang;
						$notifikasi['AlamatAsal'] = $row->AlamatAsal;
						$notifikasi['AlamatSekarang'] = $row->AlamatSekarang;
						$notifikasi['Facebook'] = $row->Facebook;
						$notifikasi['Twitter'] = $row->Twitter;
						$notifikasi['Blog'] = $row->Blog;
						$notifikasi['Instagram'] = $row->Instagram;
						$notifikasi['Line'] = $row->Line;
						$notifikasi['Email'] = $row->Email;
						$notifikasi['NoHP'] = $row->NoHP;
						$notifikasi['Hobi'] = $row->Hobi;
						$notifikasi['Cita_Cita'] = $row->Cita_Cita; 
						$notifikasi['Motto'] = $row->Motto;
						$notifikasi['Prestasi'] = $row->Prestasi;
						$notifikasi['PerguruanTinggi'] = $row->PerguruanTinggi;
						$notifikasi['Jurusan'] = $row->Jurusan;
						$notifikasi['TempatKerja'] = $row->TempatKerja;
						$notifikasi['Kesibukan'] = $row->Kesibukan;
						$notifikasi['NamaOrtu'] = $row->NamaOrtu;
						$notifikasi['PendidikanOrtu'] = $row->PendidikanOrtu;
						$notifikasi['PekerjaanOrtu'] = $row->PekerjaanOrtu;
						$notifikasi['KontakOrtu'] = $row->KontakOrtu;
						$notifikasi['LinkFoto'] = $row->LinkFoto;
						//pesan error
						$notifikasi['nama_lengkap_kosong'] = $this->session->flashdata('nama_lengkap_kosong');
						$notifikasi['jenis_kelamin_kosong'] = $this->session->flashdata('jenis_kelamin_kosong');
						$notifikasi['nama_lembaga_kosong'] = $this->session->flashdata('nama_lembaga_kosong');
						$notifikasi['tahun_lulus_kosong'] = $this->session->flashdata('tahun_lulus_kosong');
						$notifikasi['username_kosong'] = $this->session->flashdata('username_kosong');
						$notifikasi['password_kosong'] = $this->session->flashdata('password_kosong');
						$notifikasi['ulangi_password_kosong'] = $this->session->flashdata('ulangi_password_kosong');
						$notifikasi['nama_lembaga_tidak_terdaftar'] = $this->session->flashdata('nama_lembaga_tidak_terdaftar');
						$notifikasi['format_email_salah'] = $this->session->flashdata('format_email_salah');
						$notifikasi['username_sudah_ada'] = $this->session->flashdata('username_sudah_ada');
						$notifikasi['password_dan_ulangi_password_tidak_sama'] = $this->session->flashdata('password_dan_ulangi_password_tidak_sama');

						//pesan error foto
						$notifikasi['file_fotoprofil'] = $this->session->flashdata('file_fotoprofil');
						$notifikasi['nama_fotoprofil'] = $this->session->flashdata('nama_fotoprofil');
						$notifikasi['ukuran_fotoprofil'] = $this->session->flashdata('ukuran_fotoprofil');
						$notifikasi['format_fotoprofil'] = $this->session->flashdata('format_fotoprofil');
						$notifikasi['error_fotoprofil'] = $this->session->flashdata('error_fotoprofil');
					}
				}
				$this->load->view('view_admin/view_updatedataalumni', $notifikasi);
			}
			else
			{
				$this->load->helper('url');
				redirect('home','location');
			}
		}

		public function do_updatedataalumni()
		{
			
			$this->load->library('session');
			$username = $this->session->userdata('username');
			if ($username==false)
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else if ($username[0]=='A')
			{
				if ($this->input->post('inputNamaLengkap')==''
					|| $this->input->post('inputJenisKelamin')==''
					|| $this->input->post('inputCabangLembaga')==''
					|| $this->input->post('inputTahunLulus')==''
					|| $this->input->post('inputUsername')==''
					|| $this->input->post('inputPassword')==''
					|| $this->input->post('inputUlangiPassword')=='')
				{
					if ($this->input->post('inputNamaLengkap')=='') $this->session->set_flashdata('nama_lengkap_kosong','Nama Lengkap harus diisi');
					if ($this->input->post('inputJenisKelamin')=='') $this->session->set_flashdata('jenis_kelamin_kosong','Jenis Kelamin harus diisi');
					if ($this->input->post('inputCabangLembaga')=='') $this->session->set_flashdata('nama_lembaga_kosong','Nama Lembaga harus diisi');
					if ($this->input->post('inputTahunLulus')=='') $this->session->set_flashdata('tahun_lulus_kosong','Tahun Lulus harus diisi');
					if ($this->input->post('inputUsername')=='') $this->session->set_flashdata('username_kosong','Username harus diisi');
					if ($this->input->post('inputPassword')=='') $this->session->set_flashdata('password_kosong','Password harus diisi');
					if ($this->input->post('inputUlangiPassword')=='') $this->session->set_flashdata('ulangi_password_kosong','Ulangi/Konfirmasi Password harus diisi');

					$this->load->helper('url');
					$alamat = $this->input->post('alamatUsernameTujuan');
					redirect("pilihadmin/updatedataalumni/$alamat",'location');
				}
				
				if ($this->input->post('inputCabangLembaga')!='MA Unggulan Amanatul Ummah Surabaya'
					&& $this->input->post('inputCabangLembaga')!='MA Akselerasi Amanatul Ummah Surabaya'
					&& $this->input->post('inputCabangLembaga')!='SMA Unggulan Amanatul Ummah Surabaya'
					&& $this->input->post('inputCabangLembaga')!='MBI Amanatul Ummah Surabaya'
					&& $this->input->post('inputCabangLembaga')!='MA Akselerasi Amanatul Ummah Pacet'
					&& $this->input->post('inputCabangLembaga')!='MBI Amanatul Ummah Pacet'
					&& $this->input->post('inputCabangLembaga')!='SMA Berbasis Pesantren Amanatul Ummah Pacet'
					&& $this->input->post('inputCabangLembaga')!='SMA Bendungan Jati Hikmatul Amanah Pacet')
				{
					$this->session->set_flashdata('nama_lembaga_tidak_terdaftar','Nama Lembaga tidak terdaftar');
					
					$this->load->helper('url');
					$alamat = $this->input->post('alamatUsernameTujuan');
					redirect("pilihadmin/updatedataalumni/$alamat",'location');
				}
				
				


				/*
				$apakah_email_sah = false;
				$posisi_at;
				$banyak_at = 0;
				$panjang = strlen($this->input->post('inputEmail'));
				for ($i=0;$i<$panjang;$i++)
				{
					if ($this->input->post('inputEmail')[$i]=='@')
					{
						$posisi_at = $i;
						$banyak_at++;
						if ($banyak_at>1) break;
					}
				}
				if ($posisi_at==0)
				{
					$this->session->set_flashdata('format_email_salah','Format penulisan email salah');
					$this->load->helper('url');
					$alamat = $this->input->post('alamatUsernameTujuan');
					redirect("pilihadmin/updatedataalumni/$alamat",'location');
				}
				else if ($posisi_at==($panjang-1))
				{
					$this->session->set_flashdata('format_email_salah','Format penulisan email salah');
					$this->load->helper('url');
					$alamat = $this->input->post('alamatUsernameTujuan');
					redirect("pilihadmin/updatedataalumni/$alamat",'location');
				}
				else if ($banyak_at>1)
				{
					$this->session->set_flashdata('format_email_salah','Format penulisan email salah');
					$this->load->helper('url');
					$alamat = $this->input->post('alamatUsernameTujuan');
					redirect("pilihadmin/updatedataalumni/$alamat",'location');
				}
				*/
				
				if ($this->input->post('inputPassword')!=$this->input->post('inputUlangiPassword'))
				{
					$this->session->set_flashdata('password_dan_ulangi_password_tidak_sama','Konfirmasi Password tidak sesuai');
					$this->load->helper('url');
					$alamat = $this->input->post('alamatUsernameTujuan');
					redirect("pilihadmin/updatedataalumni/$alamat",'location');
				}


				/*------*/

				$this->load->model('Alumni');
				//upload foto
				$data['NamaLengkap'] = $this->session->userdata('namalengkap');
				$this->Alumni->setUsername($Username);
				$data['link'] = $this->Alumni->getFoto();


				$target_dir = realpath(__DIR__) . '/../../assets2/profpic/';
				$linkfoto = 'assets2/profpic/' . $username.'-'.trim(str_replace(" ","",date('dmYHis'))).'.jpeg';
				$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
				$target_file_new = $target_dir . $username.'-'.trim(str_replace(" ","",date('dmYHis'))).'.jpeg';

				$uploadOk = 1;
				$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
				$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

				if(empty($_FILES["fileToUpload"]["name"]))
				{
					$data['status'] = 3;

					//kalau kosong akan diupload sesuai dengan nama link foto database
					//$linkfoto = '../assets2/profpic/' . basename($_FILES["fileToUpload"]["name"]);

					//$LinkFoto = $this->input->post('LinkFoto');
					$uploadOk = 1;
					$foto = $this->input->post('fotoProfil');
					//$this->Sahabat->setLinkFoto($this->input->post($foto));

					// Check if $uploadOk is set to 0 by an error
					if ($uploadOk != 0) {
						//if (move_uploaded_file($_FILES["fotoProfil"]["tmp_name"], $target_file)) {
									//echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
						$data['status'] = 1;
						$this->Alumni->setUsername($Username);
						$this->Alumni->setLinkFoto($foto);
						$this->Alumni->setFoto();
						$data['link'] = $foto;
					} 
						/*
						else {
									//echo "Sorry, there was an error uploading your file.";
							$this->session->set_flashdata('error_fotoprofil','Maaf, terdapat error saat penguplodan');
							$data['status'] = 2;
							$alamat = $this->input->post('alamatNRPTujuan');
							redirect("pilihadmin/updatedatasahabat/$alamat",'location');
						}
						*/
					}

					else{


						if($check != false) {
						//echo "File is an image - " . $check["mime"] . ".";
							$uploadOk = 1;
						}
						else {
						//echo "File is not an image.";
							$this->session->set_flashdata('file_fotoprofil','Maaf, File bukan image');
							$uploadOk = 0;
							$alamat = $this->input->post('alamatUsernameTujuan');
							redirect("pilihadmin/updatedataalumni/$alamat",'location');
						}
					// Check if file already exists
						if (file_exists($target_file)) {
						//echo "Sorry, file already exists.";
							$this->session->set_flashdata('nama_fotoprofil','Nama file foto sudah ada');
							$uploadOk = 0;
							$data['status'] = 2;
							$alamat = $this->input->post('alamatUsernameTujuan');
							redirect("pilihadmin/updatedataalumni/$alamat",'location');
						}

					// Check file size
						if ($_FILES["fileToUpload"]["size"] > 350000) {
						//echo "Sorry, your file is too large.";
							$this->session->set_flashdata('ukuran_fotoprofil','Ukuran max foto 300 kB');
							$uploadOk = 0;
							$data['status'] = 4;
							$alamat = $this->input->post('alamatUsernameTujuan');
							redirect("pilihadmin/updatedataalumni/$alamat",'location');
						}

					// Allow certain file formats
						if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
							&& $imageFileType != "gif" ) {
						//echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
							$this->session->set_flashdata('format_fotoprofil','Foto profil harus jpg|png|jpeg|gif');
						$uploadOk = 0;
						$data['status'] = 5;
						$alamat = $this->input->post('alamatUsernameTujuan');
						redirect("pilihadmin/updatedataalumni/$alamat",'location');
					}


				// Check if $uploadOk is set to 0 by an error
					if ($uploadOk != 0) {
						if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file_new)) {
								//echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
							$data['status'] = 1;
							$this->Alumni->setUsername($username);
							$this->Alumni->setLinkFoto($linkfoto);
							$this->Alumni->setFoto();
							$data['link'] = $linkfoto;
						} else {
								//echo "Sorry, there was an error uploading your file.";
							$this->session->set_flashdata('error_fotoprofil','Maaf, terdapat error saat penguplodan');
							$data['status'] = 2;
							$alamat = $this->input->post('alamatUsernameTujuan');
							redirect("pilihadmin/updatedataalumni/$alamat",'location');
						}
					}
				}

				//end upload foto

				$this->Alumni->setUsername($this->input->post('inputUsername'));
				$this->Alumni->setPassword($this->input->post('inputPassword'));
				$this->Alumni->setNamaLengkap($this->input->post('inputNamaLengkap'));
				$this->Alumni->setNamaPanggilan($this->input->post('inputNamaPanggilan'));
				$this->Alumni->setJenisKelamin($this->input->post('inputJenisKelamin'));
				$this->Alumni->setTempatLahir($this->input->post('inputTempatLahir'));
				$this->Alumni->setTanggalLahir($this->input->post('inputTanggalLahir'));
				$this->Alumni->setLembaga($this->input->post('inputCabangLembaga'));
				$this->Alumni->setTahunLulus($this->input->post('inputTahunLulus'));
				$this->Alumni->setCabang($this->input->post('inputCabang'));
				$this->Alumni->setAlamatAsal($this->input->post('inputAlamatAsal'));
				$this->Alumni->setAlamatSekarang($this->input->post('inputAlamatSekarang'));

				$this->Alumni->setFacebook($this->input->post('inputLinkFB'));
				$this->Alumni->setTwitter($this->input->post('inputIDTwitter'));
				$this->Alumni->setInstagram($this->input->post('inputIDInstagram'));
				$this->Alumni->setLine($this->input->post('inputIDLine'));
				$this->Alumni->setBlog($this->input->post('inputAlamatBlog'));
				$this->Alumni->setEmail($this->input->post('inputEmail'));
				$this->Alumni->setNoHP($this->input->post('inputNoHP'));

				$this->Alumni->setHobi($this->input->post('inputHobi'));
				$this->Alumni->setCita_Cita($this->input->post('inputCita'));
				$this->Alumni->setMotto($this->input->post('inputMotto'));
				$this->Alumni->setPrestasi($this->input->post('inputPrestasi'));
				$this->Alumni->setPerguruanTinggi($this->input->post('inputPerguruanTinggi'));	
				$this->Alumni->setJurusan($this->input->post('inputJurusan'));
				$this->Alumni->setTempatKerja($this->input->post('inputBekerja'));
				$this->Alumni->setKesibukan($this->input->post('inputAktifOrganisasi'));
				$this->Alumni->setNamaOrtu($this->input->post('inputNamaOrangTua'));
				$this->Alumni->setPendidikanOrtu($this->input->post('inputPendidikanTerakhir'));
				$this->Alumni->setPekerjaanOrtu($this->input->post('inputPekerjaan'));
				$this->Alumni->setKontakOrtu($this->input->post('inputKontakOrtu'));

				$query = $this->Alumni->updateDatabaseFromAdmin();
				$this->session->set_flashdata('update_data_alumni_berhasil',"Anda berhasil mengubah data alumni");
				$this->load->helper('url');
				redirect('pilihadmin/caridataalumni','location');
			}
			else
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}

		}

		public function hapusdataalumni($user)
		{
			$this->load->library('session');
			$username = $this->session->userdata('username');
			if ($username==false)
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else if ($username[0]=='A')
			{
				$this->load->model('Alumni');
				$this->Alumni->deleteThatUsernameFromDatabase($user);

				$this->session->set_flashdata('hapus_data_alumni_berhasil',"Anda berhasil menghapus akun alumni dengan username $user");

				$this->load->helper('url');
				redirect('pilihadmin/caridataalumni','location');
			}
			else 
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}
		}
	

	/*---------------------------LAPORAN------------------------------------------*/

	public function laporanpemetaan()
	{
		$this->load->library('session');
		$username = $this->session->userdata('username');
		if ($username==false)
		{
			$this->load->helper('url');
			redirect('home','location');
		}
		else if ($username[0]=='A')
		{
			$notifikasi;
			//title head
			$notifikasi['title']='Laporan Pemetaan | SIHIMAH';

				$notifikasi['NamaLengkap'] = $this->session->userdata('namalengkap');//menampilkan nama lengkap admin
				$notifikasi['FotoProfil'] = $this->session->userdata('foto'); //menampilkan foto profil admin

				$this->load->model('Admin');
				$this->load->model('Referensi');

				//Jumlah Alumni
				$query = $this->Admin->getCountUsers();
				if ($query->num_rows()>0)
				{
					foreach ($query->result() as $row)
					{
						//bukan pesan
						$notifikasi['totalalumni'] = $row->TotalAlumni;
					}
				}

				//Jumlah Angkatan
				$query = $this->Referensi->getCountTahunLulus();
				if ($query->num_rows()>0)
				{
					foreach ($query->result() as $row)
					{
						//bukan pesan
						$notifikasi['jumlahangkatan'] = $row->JumlahAngkatan;
					}
				}

				//Jumlah Cabang
				$query = $this->Referensi->getCountCabang();
				if ($query->num_rows()>0)
				{
					foreach ($query->result() as $row)
					{
						//bukan pesan
						$notifikasi['jumlahcabang'] = $row->JumlahCabang;
					}
				}

				//Jumlah Alumni Per Angkatan
				$query = $this->Referensi->getCountAlumni2008();
				if ($query->num_rows()>0){
					foreach ($query->result() as $row){
						$notifikasi['jumlahalumni2008'] = $row->JumlahAlumni2008;
					}
				}
				$query = $this->Referensi->getCountAlumni2009();
				if ($query->num_rows()>0){
					foreach ($query->result() as $row){
						$notifikasi['jumlahalumni2009'] = $row->JumlahAlumni2009;
					}
				}
				$query = $this->Referensi->getCountAlumni2010();
				if ($query->num_rows()>0){
					foreach ($query->result() as $row){
						$notifikasi['jumlahalumni2010'] = $row->JumlahAlumni2010;
					}
				}
				$query = $this->Referensi->getCountAlumni2011();
				if ($query->num_rows()>0){
					foreach ($query->result() as $row){
						$notifikasi['jumlahalumni2011'] = $row->JumlahAlumni2011;
					}
				}


				/*--JUMLAH ALUMNI PER CABANG--*/
				$query = $this->Referensi->getCountAlumniPerCabangSby();
				if ($query->num_rows()>0){
					foreach ($query->result() as $row){
						$notifikasi['jumlahalumnisby'] = $row->JumlahAlumniSby;
					}
				}
				
				$query = $this->Referensi->getCountAlumniPerCabangSid();
				if ($query->num_rows()>0){
					foreach ($query->result() as $row){
						$notifikasi['jumlahalumnisid'] = $row->JumlahAlumniSid;
					}
				}


				$query = $this->Referensi->getCountAlumniPerCabangMoj();
				if ($query->num_rows()>0){
					foreach ($query->result() as $row){
						$notifikasi['jumlahalumnimoj'] = $row->JumlahAlumniMoj;
					}
				}

				$query = $this->Referensi->getCountAlumniPerCabangMal();
				if ($query->num_rows()>0){
					foreach ($query->result() as $row){
						$notifikasi['jumlahalumnimal'] = $row->JumlahAlumniMal;
					}
				}

				$query = $this->Referensi->getCountAlumniPerCabangJem();
				if ($query->num_rows()>0){
					foreach ($query->result() as $row){
						$notifikasi['jumlahalumnijem'] = $row->JumlahAlumniJem;
					}
				}
				
				$query = $this->Referensi->getCountAlumniPerCabangMad();
				if ($query->num_rows()>0){
					foreach ($query->result() as $row){
						$notifikasi['jumlahalumnimad'] = $row->JumlahAlumniMad;
					}
				}

				$query = $this->Referensi->getCountAlumniPerCabangYog();
				if ($query->num_rows()>0){
					foreach ($query->result() as $row){
						$notifikasi['jumlahalumniyog'] = $row->JumlahAlumniYog;
					}
				}

				$query = $this->Referensi->getCountAlumniPerCabangSem();
				if ($query->num_rows()>0){
					foreach ($query->result() as $row){
						$notifikasi['jumlahalumnisem'] = $row->JumlahAlumniSem;
					}
				}

				$query = $this->Referensi->getCountAlumniPerCabangSol();
				if ($query->num_rows()>0){
					foreach ($query->result() as $row){
						$notifikasi['jumlahalumnisol'] = $row->JumlahAlumniSol;
					}
				}

				$query = $this->Referensi->getCountAlumniPerCabangJak();
				if ($query->num_rows()>0){
					foreach ($query->result() as $row){
						$notifikasi['jumlahalumnijak'] = $row->JumlahAlumniJak;
					}
				}

				$query = $this->Referensi->getCountAlumniPerCabangBog();
				if ($query->num_rows()>0){
					foreach ($query->result() as $row){
						$notifikasi['jumlahalumnibog'] = $row->JumlahAlumniBog;
					}
				}

				/*--/JUMLAH ALUMNI PER CABANG--*/

				//Mendapatkan notifikasi
				$notifikasi['notifikasi'] = $this->Admin->getNotification();
				//Mendapatkan notifikasi pesan
				$notifikasi['notifikasipesan'] = $this->Admin->getNotificationMessage();

				$this->load->view('view_admin/view_laporanpemetaan', $notifikasi);
			}
			else 
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}
		}

		public function laporanpengunjung()
		{
			$this->load->library('session');
			$username = $this->session->userdata('username');
			if ($username==false)
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else if ($username[0]=='A')
			{
				$notifikasi;
				//title head
				$notifikasi['title']='Laporan Pengunjung | SIHIMAH';

				$notifikasi['NamaLengkap'] = $this->session->userdata('namalengkap');//menampilkan nama lengkap admin
				$notifikasi['FotoProfil'] = $this->session->userdata('foto'); //menampilkan foto profil admin

				$this->load->model('Admin');
				$this->load->model('Referensi');

				//Jumlah Login
				$query = $this->Referensi->getCountLogin();
				if ($query->num_rows()>0){
					foreach ($query->result() as $row){
						$notifikasi['jumlahlogin'] = $row->JumlahLogin;
					}
				}
				//Jumlah Pengunjung
				$notifikasi['pengunjung'] = $this->Referensi->getCountVisitor();

				//Mendapatkan notifikasi
				$notifikasi['notifikasi'] = $this->Admin->getNotification();
				//Mendapatkan notifikasi pesan
				$notifikasi['notifikasipesan'] = $this->Admin->getNotificationMessage();

				$this->load->view('view_admin/view_laporanpengunjung', $notifikasi);
			}
			else 
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}
		}

		public function laporanlog()
			{
				$this->load->library('session');
				$username = $this->session->userdata('username');
				if ($username==false)
				{
					$this->load->helper('url');
					redirect('home','location');
				}
				else if ($username[0]=='A')
				{
					$notifikasi;
					//title head
					$notifikasi['title']='Laporan Log | SIHIMAH';
					$notifikasi['NamaLengkap'] = $this->session->userdata('namalengkap');//menampilkan nama lengkap admin
					$notifikasi['FotoProfil'] = $this->session->userdata('foto'); //menampilkan foto profil admin

					$this->load->model('Admin');
					//mendapatkan 5 notifikasi terakhir
					$notifikasi['notifikasi'] = $this->Admin->getNotification();
					//Mendapatkan notifikasi pesan
					$notifikasi['notifikasipesan'] = $this->Admin->getNotificationMessage();
					//Mendapatkan notifikasi login
					$notifikasi['notifikasilogin'] = $this->Admin->getNotificationLogin();
					//Mendapatkan notifikasi login
					$notifikasi['notifikasilogout'] = $this->Admin->getNotificationLogout();
					//Mendapatkan notifikasi update
					$notifikasi['notifikasiupdate'] = $this->Admin->getNotificationUpdate();
					//Mendapatkan notifikasi upload foto
					$notifikasi['notifikasiuploadfoto'] = $this->Admin->getNotificationUploadPhoto();
					//Mendapatkan notifikasi change password
					$notifikasi['notifikasiubahpassword'] = $this->Admin->getNotificationChangePassword();

					$this->load->view('view_admin/view_laporanlog', $notifikasi);
				}
				else 
				{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
					$this->load->helper('url');
					redirect('home','location');
				}
			}

/*---------------------------/LAPORAN------------------------------------------*/

}