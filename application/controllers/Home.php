<?php

	class Home extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		function index()
		{
			$this->load->library('session');
			$username = $this->session->userdata('username');
			if ($username==false)
			{
				$this->load->model('Referensi');

				$notifikasi;
				//mendapatkan tahun lulus, lembaga, dan cabang dari database
				$notifikasi['tahunlulus'] = $this->Referensi->getTahunLulus();
				$notifikasi['lembaga'] = $this->Referensi->getLembaga();
				$notifikasi['cabang'] = $this->Referensi->getCabang();

				//pesan gagal
				$notifikasi['username_kosong'] = $this->session->flashdata('username_kosong');
				$notifikasi['password_kosong'] = $this->session->flashdata('password_kosong');
				$notifikasi['username_password_salah'] = $this->session->flashdata('username_password_salah');
				$notifikasi['password_dan_ulangi_password_tidak_sama'] = $this->session->flashdata('password_dan_ulangi_password_tidak_sama');
				$notifikasi['username_sudah_ada'] = $this->session->flashdata('username_sudah_ada');
				
				//pesan berhasil
				$notifikasi['logout_berhasil'] = $this->session->flashdata('logout_berhasil');
				$notifikasi['registrasi_berhasil'] = $this->session->flashdata('registrasi_berhasil');

				
				$this->load->view('view_login',$notifikasi);
			}
			else if ($username[0]=='A') 
			{
				$notifikasi;

				$this->load->model('Admin');
				//Total Alumni, Laki2, Perempuan				
				$notifikasi = array_merge ( $this->Admin->getCountAlumni(), $this->Admin->getCountAlumniPerLembaga() ) ;

				//bukan pesan
				$notifikasi['NamaLengkap'] = $this->session->userdata('namalengkap');
				$notifikasi['FotoProfil'] = $this->session->userdata('foto');
				//pesan berhasil
				$notifikasi['tambah_akun_admin_berhasil'] = $this->session->flashdata('tambah_akun_admin_berhasil');
				$notifikasi['tambah_akun_berhasil'] = $this->session->flashdata('tambah_akun_berhasil');
				$notifikasi['hapus_data_alumni_berhasil'] = $this->session->flashdata('hapus_data_alumni_berhasil');
				$notifikasi['ganti_data_alumni_berhasil'] = $this->session->flashdata('ganti_data_alumni_berhasil');
				$notifikasi['ubah_data_berhasil'] = $this->session->flashdata('ubah_data_berhasil');

				//title head
				$notifikasi['title']='Beranda | SIHIMAH';
				//Mendapatkan notifikasi
				$notifikasi['notifikasi'] = $this->Admin->getNotification();
				//Mendapatkan notifikasi pesan
				$notifikasi['notifikasipesan'] = $this->Admin->getNotificationMessage();
				
				//jumlah total alumni dan alumni per lembaga
				

				$this->load->view('view_admin/view_berandaadmin',$notifikasi);
			}
			else 
			{
				$notifikasi;
				//menu active
				$notifikasi=array('beranda_active' 	=> 'class="active"',
							'profil_active' 	=> 'class=""',
							'pesan_active' 		=> 'class=""',
							'tentang_active' 	=> 'class=""',
							'update_active' 	=> 'class=""',
							'upload_active' 	=> 'class=""',
							'password_active' 	=> 'class=""'
							 );
				//title head
				$notifikasi['title']='Beranda | SIHIMAH';

				//bukan pesan
				$notifikasi['NamaLengkap'] = $this->session->userdata('namalengkap');
				
				//pesan berhasil
				$notifikasi['ubah_data_pribadi_berhasil'] = $this->session->flashdata('ubah_data_pribadi_berhasil');
				$notifikasi['ubah_password_berhasil'] = $this->session->flashdata('ubah_password_berhasil');
				
				$this->load->view('view_alumni/view_beranda',$notifikasi);
			}
		}

		function register()
		{
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
					redirect('home','location');
				}

				if ($this->input->post('inputPassword')!=$this->input->post('inputUlangiPassword'))
				{
					$this->session->set_flashdata('password_dan_ulangi_password_tidak_sama','Konfirmasi Password tidak sesuai');
					$this->load->helper('url');
					redirect('home','location');
				}
				
				$this->load->model('Alumni');
				$this->Alumni->setUsername($this->input->post('inputUsername'));
				$query = $this->Alumni->getUsernameFromDatabase();
				if ($query->num_rows()>0)
				{
					$this->session->set_flashdata('username_sudah_ada','Username sudah ada! Silahkan masukkan username lain');
					$this->load->helper('url');
					redirect('home','location');
				}
				
				$this->Alumni->setNamaLengkap($this->input->post('inputNamaLengkap'));
				$this->Alumni->setJenisKelamin($this->input->post('inputJenisKelamin'));
				$this->Alumni->setLembaga($this->input->post('inputCabangLembaga'));
				$this->Alumni->setTahunLulus($this->input->post('inputTahunLulus'));
				$this->Alumni->setCabang($this->input->post('inputCabang'));
				$this->Alumni->setNoHP($this->input->post('inputNoHP'));
				$this->Alumni->setEmail($this->input->post('inputEmail'));
				$this->Alumni->setPassword($this->input->post('inputPassword'));
				
				
				$query = $this->Alumni->addToDatabase();
				$this->session->set_flashdata('registrasi_berhasil','Anda telah berhasil registrasi, Silahkan login !');
				$this->load->helper('url');
				redirect('home','location');
				//$this->load->view('view_login');
		}

		function sign_in()
		{			
			$this->load->library('session');
			$username = $this->session->userdata('username');
			if ($username==false)
			{
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				if ($username=='' || $password=='')
				{
					if ($username=='') $this->session->set_flashdata('username_kosong','Maaf! Bagian username harus diisi');
					if ($password=='') $this->session->set_flashdata('password_kosong','Maaf! Bagian password harus diisi');
					//header('location : ../home');
					$this->load->helper('url');
					redirect('home','location');
				}
				else if ($username[0]=='A')
				{
					$this->load->model('Admin');
					$this->Admin->setUsername($username);
					$this->Admin->setPassword($password);

					
					$query = $this->Admin->getFromDatabase();
					if ($query->num_rows()>0)
					{
						foreach ($query->result() as $row)
						{
							$newdata = array(
										'username' => $row->Username,
										'namalengkap' => $row->Nama,
										'foto' => $row->LinkFoto
											);
							$this->session->set_userdata($newdata);
						}
						
						//notifikasi login
						//$query = $this->Admin->setNotificationLogin();
						
						//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
						$this->load->helper('url');
						redirect('home','location');
					}
					else 
					{
						$this->session->set_flashdata('username_password_salah','Maaf! Username atau password anda salah');
						//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
						$this->load->helper('url');
						redirect('home','location');
					}


					
				}
				else
				{
					$this->load->model('Alumni');
					$this->Alumni->setUsername($username);
					$this->Alumni->setPassword($password);
					$query = $this->Alumni->getFromDatabase();
					if ($query->num_rows()>0)
					{
						foreach ($query->result() as $row)
						{
							$newdata = array(
										'username' => $row->Username,
										'namalengkap' => $row->NamaLengkap,
										'tahunlulus' => $row->TahunLulus,
										'idlembaga' => $row->IdLembaga
											);
							$this->session->set_userdata($newdata);
						}

						//notifikasi login
						$query = $this->Alumni->setNotificationLogin();
						//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
						$this->load->helper('url');
						redirect('home','location');
					}
					else 
					{
						$this->session->set_flashdata('username_password_salah','Maaf! Username atau password anda salah');
						//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
						$this->load->helper('url');
						redirect('home','location');
					}
				}
			}
			else if ($username[0]=='A')
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
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


		function sign_out()
		{
			//Notifikasi SignOut Masih diperbaiki
			//$this->load->model('Alumni');
			//$query = $this->Alumni->setNotificationLogout();
			$username = $this->session->userdata('username');

			//Notifikasi SignOut Masih diperbaiki
			$this->load->model('Alumni');
			$this->Alumni->setUsername($username);
			$query = $this->Alumni->setNotificationLogout();

			$this->session->unset_userdata('username');

			$this->session->set_flashdata('logout_berhasil','Anda berhasil logout');

			//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
			$this->load->helper('url');
			redirect('home','location');
					}
	}
