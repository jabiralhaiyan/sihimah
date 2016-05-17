<?php
	class Alumni extends CI_Model
	{
		private $Username;
		private $Password;
		private $NamaLengkap;
		private $NamaPanggilan;
		private $JenisKelamin;
		private $TempatLahir;
		private $TanggalLahir;
		private $Lembaga;
		private $TahunLulus;
		private $Cabang;
		private $AlamatAsal;
		private $AlamatSekarang;
		private $Facebook;
		private $Twitter;
		private $Blog;
		private $Email;
		private $Line;
		private $Instagram;
		private $NoHP;
		private $Hobi;
		private $Cita_Cita;
		private $Motto;
		private $Prestasi;
		private $PerguruanTinggi;
		private $Jurusan;
		private $TempatKerja;
		private $Kesibukan;
		private $NamaOrtu;
		private $PendidikanOrtu;
		private $PekerjaanOrtu;
		private $KontakOrtu;
		private $LinkFoto;
		//private $TanggalUpdate;
		
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		public function setUsername($Username)
		{
			$this->Username = $Username;
		}
		public function setPassword($Password)
		{
			$this->Password = $Password;
		}
		public function setNamaLengkap($NamaLengkap)
		{
			$this->NamaLengkap = $NamaLengkap;
		}
		public function setNamaPanggilan($NamaPanggilan)
		{
			$this->NamaPanggilan = $NamaPanggilan;
		}
		public function setJenisKelamin($JenisKelamin)
		{
			$this->JenisKelamin = $JenisKelamin;
		}
		public function setTempatLahir($TempatLahir)
		{
			$this->TempatLahir = $TempatLahir;
		}
		public function setTanggalLahir($TanggalLahir)
		{
			$this->TanggalLahir = $TanggalLahir;
		}
		public function setLembaga($Lembaga)
		{
			$this->Lembaga = $Lembaga;
		}
		public function setTahunLulus($TahunLulus)
		{
			$this->TahunLulus = $TahunLulus;
		}
		public function setCabang($Cabang)
		{
			$this->Cabang = $Cabang;
		}
		public function setAlamatAsal($AlamatAsal)
		{
			$this->AlamatAsal = $AlamatAsal;
		}
		public function setAlamatSekarang($AlamatSekarang)
		{
			$this->AlamatSekarang = $AlamatSekarang;
		}
		public function setFacebook($Facebook)
		{
			$this->Facebook = $Facebook;
		}
		public function setTwitter($Twitter)
		{
			$this->Twitter = $Twitter;
		}
		public function setBlog($Blog)
		{
			$this->Blog = $Blog;
		}
		public function setEmail($Email)
		{
			$this->Email = $Email;
		}
		public function setLine($Line)
		{
			$this->Line = $Line;
		}
		public function setInstagram($Instagram)
		{
			$this->Instagram = $Instagram;
		}
		public function setNoHP($NoHP)
		{
			$this->NoHP = $NoHP;
		}
		public function setHobi($Hobi)
		{
			$this->Hobi = $Hobi;
		}
		public function setCita_Cita($Cita_Cita)
		{
			$this->Cita_Cita = $Cita_Cita;
		}
		public function setMotto($Motto)
		{
			$this->Motto = $Motto;
		}
		public function setPrestasi($Prestasi)
		{
			$this->Prestasi = $Prestasi;
		}
		public function setPerguruanTinggi($PerguruanTinggi)
		{
			$this->PerguruanTinggi = $PerguruanTinggi;
		}
		public function setJurusan($Jurusan)
		{
			$this->Jurusan = $Jurusan;
		}
		public function setTempatKerja($TempatKerja)
		{
			$this->TempatKerja = $TempatKerja;
		}
		public function setKesibukan($Kesibukan)
		{
			$this->Kesibukan = $Kesibukan;
		}
		public function setNamaOrtu($NamaOrtu)
		{
			$this->NamaOrtu = $NamaOrtu;
		}
		public function setPendidikanOrtu($PendidikanOrtu)
		{
			$this->PendidikanOrtu = $PendidikanOrtu;
		}
		public function setPekerjaanOrtu($PekerjaanOrtu)
		{
			$this->PekerjaanOrtu = $PekerjaanOrtu;
		}
		public function setKontakOrtu($KontakOrtu)
		{
			$this->KontakOrtu = $KontakOrtu;
		}
		public function setLinkFoto($LinkFoto)
		{
			$this->LinkFoto = $LinkFoto;
		}
		/*public function setTanggalUpdate($TanggalUpdate)
		{
			$this->TanggalUpdate = $TanggalUpdate;
		}*/
		public function setPenerima($Penerima)
		{
			$this->Penerima = $Penerima;
		}
		public function setPesan($Pesan)
		{
			$this->Pesan = $Pesan;
		}



		
		//Notifikasi Last Login
		public function setNotificationLogin()
		{
			$this->load->database();
			$query = $this->db->query
			("
				INSERT INTO sim_log (Nama, TahunLulus, Lembaga, LinkFoto, User, Notifikasi, TipeNotifikasi, Waktu, Tanggal)
				SELECT sim_alumni.NamaLengkap, sim_alumni.TahunLulus, sim_alumni.Lembaga, sim_alumni.LinkFoto, 'Alumni' ,'Telah Login', '1', NOW(), NOW() 
				FROM sim_alumni
				WHERE sim_alumni.Username='$this->Username'
			");
			$this->db->close();
			return $query;
		}

		//Notifikasi Last Logout
		public function setNotificationLogout()
		{
			$this->load->database();
			$query = $this->db->query
			("
				INSERT INTO sim_log (Nama, TahunLulus, Lembaga, LinkFoto, User, Notifikasi, TipeNotifikasi, Waktu, Tanggal)
				SELECT sim_alumni.NamaLengkap, sim_alumni.TahunLulus, sim_alumni.Lembaga, sim_alumni.LinkFoto, 'Alumni' ,'Telah Logout', '2', NOW(), NOW() 
				FROM sim_alumni
				WHERE sim_alumni.Username='$this->Username'
				");
			$this->db->close();
			return $query;
		}

		//Notifikasi Last Update Data
		public function setNotificationUpdate()
		{
			$this->load->database();
			$query = $this->db->query
			("
				INSERT INTO sim_log (Nama, TahunLulus, Lembaga, LinkFoto, User, Notifikasi, TipeNotifikasi, Waktu, Tanggal)
				SELECT sim_alumni.NamaLengkap, sim_alumni.TahunLulus, sim_alumni.Lembaga, sim_alumni.LinkFoto, 'Alumni' ,'Telah Update Data', '3', NOW(), NOW() 
				FROM sim_alumni
				WHERE sim_alumni.Username='$this->Username'
				");
			$this->db->close();
			return $query;
		}

		//Notifikasi Last Upload Foto
		public function setNotificationUploadPhoto()
		{
			$this->load->database();
			$query = $this->db->query
			("
				INSERT INTO sim_log (Nama, TahunLulus, Lembaga, LinkFoto, User, Notifikasi, TipeNotifikasi, Waktu, Tanggal)
				SELECT sim_alumni.NamaLengkap, sim_alumni.TahunLulus, sim_alumni.Lembaga, sim_alumni.LinkFoto, 'Alumni' ,'Telah Ganti Foto', '4', NOW(), NOW() 
				FROM sim_alumni
				WHERE sim_alumni.Username='$this->Username'
				");
			$this->db->close();
			return $query;
		}

		//Notifikasi Last Change Password
		public function setNotificationChangePassword()
		{
			$this->load->database();
			$query = $this->db->query
			("
				INSERT INTO sim_log (Nama, TahunLulus, Lembaga, LinkFoto, User, Notifikasi, TipeNotifikasi, Waktu, Tanggal)
				SELECT sim_alumni.NamaLengkap, sim_alumni.TahunLulus, sim_alumni.Lembaga, sim_alumni.LinkFoto, 'Alumni' ,'Telah Ganti Password', '5', NOW(), NOW() 
				FROM sim_alumni
				WHERE sim_alumni.Username='$this->Username'
				");
			$this->db->close();
			return $query;
		}

/*-------------------------------------------------------------------------------------*/

//Pesan
	public function sendMessage()
	{
		$this->load->database();
		$query = $this->db->query
		("
			INSERT INTO sim_pesan (Pengirim, Penerima, Pesan, Status, Waktu)
			VALUES
			(						
				'$this->Username',
				'$this->Penerima',
				'$this->Pesan',
				'Unread',
				NOW()
				)							
		");
		$this->db->close();
		return $query;
	}

	//Kotak Masuk
	public function getInboxMessage()
	{
		$this->load->database();
		$this->db->cache_on();
		$query = $this->db->query
		("
			SELECT sim_pesan.IdPesan, sim_pesan.Pengirim, sim_pesan.Pesan, sim_pesan.Status, sim_pesan.Waktu
			FROM sim_pesan
			WHERE sim_pesan.Penerima = '$this->Username'
			ORDER BY sim_pesan.Waktu
			DESC LIMIT 10
		");
		$this->db->close();
		return $query;
	}

	public function updateStatusMessage()
	{
		$this->load->database();
		$query = $this->db->query
		("
			UPDATE sim_pesan
			SET
				Status='Read'
			WHERE
				sim_pesan.Penerima = '$this->Username'

		");
		$this->db->close();
		return $query;
	}

	//Kotak Keluar
	public function getOutboxMessage()
	{
		$this->load->database();
		$this->db->cache_on();
		$query = $this->db->query
		("
			SELECT sim_pesan.IdPesan, sim_pesan.Penerima, sim_pesan.Pesan, sim_pesan.Waktu
			FROM sim_pesan, sim_admin
			WHERE sim_pesan.Penerima = sim_admin.Username 
									AND sim_pesan.Pengirim='$this->Username' 
			ORDER BY sim_pesan.Waktu
			DESC LIMIT 10
		");
		$this->db->close();
		return $query;
	}


/*-------------------------------------------------------------------------------------*/

		public function getFromDatabase()
		{
			$this->load->database();
			$this->db->cache_on();
			$query = $this->db->query
					("
						SELECT Username, NamaLengkap, IdLembaga, TahunLulus, LinkFoto
						FROM sim_alumni, sim_lembaga
						WHERE 
							sim_alumni.Lembaga = sim_lembaga.Lembaga AND
							sim_alumni.Username = '$this->Username' AND
							sim_alumni.Password = '$this->Password'	
					");
			$this->db->close();
			return $query;
		}

		public function addToDatabase()
		{
			$this->load->database();
			$query = $this->db->query
					("
						INSERT INTO sim_alumni 
						
						VALUES
						(
							'$this->Username',
							'$this->Password',
							'$this->NamaLengkap',
							'$this->NamaPanggilan',
							'$this->JenisKelamin',
							'$this->TempatLahir',
							STR_TO_DATE('$this->TanggalLahir','%Y-%m-%d'),
							'$this->Lembaga',
							'$this->TahunLulus',
							'$this->Cabang',
							'$this->AlamatAsal',
							'$this->AlamatSekarang',
							'$this->Facebook',
							'$this->Twitter',
							'$this->Blog',
							'$this->Instagram',
							'$this->Line',
							'$this->Email',
							'$this->NoHP',
							'$this->Hobi',
							'$this->Cita_Cita',
							'$this->Motto',
							'$this->Prestasi',
							'$this->PerguruanTinggi',
							'$this->Jurusan',
							'$this->TempatKerja',
							'$this->Kesibukan',
							'$this->NamaOrtu',
							'$this->PendidikanOrtu',
							'$this->PekerjaanOrtu',
							'$this->KontakOrtu',
							'$this->LinkFoto',
							NOW()
						)
					");
			$this->db->close();
			return $query;
		}

		public function updateDatabaseFromAlumni()
		{
			$this->load->database();
			$query = $this->db->query
					("
						UPDATE sim_alumni
						SET
							NamaLengkap = '$this->NamaLengkap',
							NamaPanggilan = '$this->NamaPanggilan',
							JenisKelamin = '$this->JenisKelamin',
							TempatLahir = '$this->TempatLahir',
							TanggalLahir = STR_TO_DATE('$this->TanggalLahir','%Y-%m-%d'),
							Lembaga = '$this->Lembaga',
							TahunLulus = '$this->TahunLulus',
							Cabang = '$this->Cabang',
							AlamatAsal = '$this->AlamatAsal',
							AlamatSekarang = '$this->AlamatSekarang',
							Facebook = '$this->Facebook',
							Twitter = '$this->Twitter',
							Blog = '$this->Blog',
							Instagram = '$this->Instagram',
							Line = '$this->Line',
							Email = '$this->Email',
							NoHP = '$this->NoHP',
							Hobi = '$this->Hobi',
							Cita_Cita = '$this->Cita_Cita',
							Motto = '$this->Motto',
							Prestasi = '$this->Prestasi',
							PerguruanTinggi = '$this->PerguruanTinggi',
							Jurusan = '$this->Jurusan',
							TempatKerja = '$this->TempatKerja',
							Kesibukan = '$this->Kesibukan',
							NamaOrtu = '$this->NamaOrtu',
							PendidikanOrtu = '$this->PendidikanOrtu',
							PekerjaanOrtu = '$this->PekerjaanOrtu',
							KontakOrtu = '$this->KontakOrtu',
							TanggalUpdate = NOW()
						WHERE
							Username = '$this->Username'
					");
			$this->db->close();
			return $query;
		}

		public function updateDatabaseFromAdmin()
		{
			$this->load->database();
			$query = $this->db->query
					("
						UPDATE sim_alumni
						SET
							NamaLengkap = '$this->NamaLengkap',
							NamaPanggilan = '$this->NamaPanggilan',
							JenisKelamin = '$this->JenisKelamin',
							TempatLahir = '$this->TempatLahir',
							TanggalLahir = STR_TO_DATE('$this->TanggalLahir','%Y-%m-%d'),
							Lembaga = '$this->Lembaga',
							TahunLulus = '$this->TahunLulus',
							Cabang = '$this->Cabang',
							AlamatAsal = '$this->AlamatAsal',
							AlamatSekarang = '$this->AlamatSekarang',
							Facebook = '$this->Facebook',
							Twitter = '$this->Twitter',
							Blog = '$this->Blog',
							Instagram = '$this->Instagram',
							Line = '$this->Line',
							Email = '$this->Email',
							NoHP = '$this->NoHP',
							Hobi = '$this->Hobi',
							Cita_Cita = '$this->Cita_Cita',
							Motto = '$this->Motto',
							Prestasi = '$this->Prestasi',
							PerguruanTinggi = '$this->PerguruanTinggi',
							Jurusan = '$this->Jurusan',
							TempatKerja = '$this->TempatKerja',
							Kesibukan = '$this->Kesibukan',
							NamaOrtu = '$this->NamaOrtu',
							PendidikanOrtu = '$this->PendidikanOrtu',
							PekerjaanOrtu = '$this->PekerjaanOrtu',
							KontakOrtu = '$this->KontakOrtu',
							LinkFoto = '$this->LinkFoto',
							TanggalUpdate = NOW()
						WHERE
							Username = '$this->Username'
					");
					
			$this->db->close();
			return $query;
		}
		
		public function changePassword()
		{
			$this->load->database();
			$query = $this->db->query
					("
						UPDATE sim_alumni
						SET
							Username = '$this->Username',
							Password = '$this->Password'
						WHERE
							Username = '$this->Username'
					");
			$this->db->close();
			return $query;
		}

		public function getAllFromDatabase()
		{
			$this->load->database();
			$this->db->cache_on();
			$query = $this->db->query
					("
						SELECT *
						FROM sim_alumni
						WHERE 
							Username = '$this->Username'	
					");
			$this->db->close();
			return $query;
		}

		public function getAllDatabaseAlumni()
		{
			$this->load->database();
			$this->db->cache_on();
			$query = $this->db->query
					("
						SELECT *
						FROM sim_alumni
					");
			$this->db->close();
			return $query;
		}

		public function getFoto()
		{
			$link = '';
			$this->load->database();
			$this->db->cache_on();
			$query = $this->db->query
					("
						SELECT LinkFoto
						FROM sim_alumni
						WHERE 
							Username = '$this->Username'	
					");
			$this->db->close();
			foreach($query->result() as $row):
				$link = $row->LinkFoto;
			endforeach;
			return $link;
		}
		public function setFoto()
		{
			$this->load->database();
			$query = $this->db->query
					("
						UPDATE sim_alumni
						SET LinkFoto = '$this->LinkFoto'
						WHERE 
							Username = '$this->Username'	
					");
			$this->db->close();
			return $query;
		}
		public function getUsernameFromDatabase()
		{
			$this->load->database();
			$this->db->cache_on();
			$query = $this->db->query
					("
						SELECT Username
						FROM sim_alumni
						WHERE 
							Username = '$this->Username'	
					");
			$this->db->close();
			return $query;
		}
		public function deleteThatUsernameFromDatabase($Username)
		{
			$this->Username = $Username;
			$this->load->database();
			$query = $this->db->query
					("
						DELETE FROM sim_alumni
						WHERE 
							Username = '$this->Username'	
					");
			$this->db->close();
			return $query;
		}
		
		public function searchMhs($status)
		{
			$this->load->database();
			$this->db->cache_on();
			if($status == 1)
			{
				$query = $this->db->query
					("
						SELECT Username, NamaLengkap, Lembaga, Cabang, AlamatSekarang, NoHP, Email, TahunLulus
						FROM sim_alumni
						WHERE 
							NamaLengkap Like '%$this->NamaLengkap%'
					");
			}
			else if($status == 2)
			{
				$query = $this->db->query
					("
						SELECT Username, NamaLengkap, Lembaga, Cabang, AlamatSekarang, NoHP, Email, TahunLulus
						FROM sim_alumni
						WHERE 
							Cabang = '$this->Cabang'
					");
			}
			else if($status == 3)
			{
				$query = $this->db->query
					("
						SELECT Username, NamaLengkap, Lembaga, Cabang, AlamatSekarang, NoHP, Email, TahunLulus
						FROM sim_alumni
						WHERE 
							Lembaga = '$this->Lembaga'
					");
			}
			else if($status == 4)
			{
				$query = $this->db->query
					("
						SELECT Username, NamaLengkap, Lembaga, Cabang, AlamatSekarang, NoHP, Email, TahunLulus
						FROM sim_alumni
						WHERE Lembaga = '$this->Lembaga' AND
							Cabang = '$this->Cabang'
					");
			}
			else if($status == 5)
			{
				$query = $this->db->query
					("
						SELECT Username, NamaLengkap, Lembaga, Cabang, AlamatSekarang, NoHP, Email, TahunLulus
						FROM sim_alumni
						WHERE NamaLengkap Like '%$this->NamaLengkap%' AND
							Cabang = '$this->Cabang'
					");
			}
			else if($status == 6)
			{
				$query = $this->db->query
					("
						SELECT Username, NamaLengkap, Lembaga, Cabang, AlamatSekarang, NoHP, Email, TahunLulus
						FROM sim_alumni
						WHERE NamaLengkap Like '%$this->NamaLengkap%' AND
							Lembaga = '$this->Lembaga'
					");
			}
			else if($status == 7)
			{
				$query = $this->db->query
					("
						SELECT Username, NamaLengkap, Lembaga, Cabang, AlamatSekarang, NoHP, Email, TahunLulus
						FROM sim_alumni
						WHERE NamaLengkap Like '%$this->NamaLengkap%' AND
							Lembaga = '$this->Lembaga' AND
							Cabang = '$this->Cabang'
					");
			}
			else if($status == 8)
			{
				$query = $this->db->query
					("
						SELECT Username, NamaLengkap, Lembaga, Cabang, AlamatSekarang, NoHP, Email, TahunLulus
						FROM sim_alumni
						WHERE NamaLengkap = '$this->NamaLengkap' AND
							Lembaga = '$this->Lembaga' AND
							Cabang = '$this->Cabang'
					");
			}
			
			//nama dicari
			else if($status == 9)
			{
				$query = $this->db->query
					("
						SELECT Username, NamaLengkap, Lembaga, Cabang, AlamatSekarang, NoHP, Email, TahunLulus, LinkFoto, Facebook, Twitter,  Instagram, Line, Blog
						FROM sim_alumni
						WHERE NamaLengkap Like '%$this->NamaLengkap%'
					");
			}

			$this->db->close();
			return $query;
		}


    public function importData($filename)
    {
        ini_set('memory_limit', '-1');
        $inputFileName = './assets/importdata/'.$filename;
        try {
        $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
        } catch(Exception $e) {
        die('Error loading file :' . $e->getMessage());
        }
 
        $worksheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
        $numRows = count($worksheet);
 
        for ($i=1; $i < ($numRows+1) ; $i++) { 
            $tgl_asli = str_replace('/', '-', $worksheet[$i]['B']);
            $exp_tgl_asli = explode('-', $tgl_asli);
            $exp_tahun = explode(' ', $exp_tgl_asli[2]);
            $tgl_sql = $exp_tahun[0].'-'.$exp_tgl_asli[0].'-'.$exp_tgl_asli[1].' '.$exp_tahun[1];
 
            $ins = array(
                    "username"          => $worksheet[$i]["A"],
                    "password"   		=> $tgl_sql
                   );
 
            $this->db->insert('sim_alumni', $ins);
        }
    }

		

	}
