<?php
	class Referensi extends CI_Model
	{

		private $IdTahunLulus;
		private $TahunLulus;
		private $IdLembaga;
		private $Lembaga;
		private $IdCabang;
		private $Cabang;
		private $IdPTN;
		private $PTN;


		public function __construct()
		{
			parent::__construct();
		}

		public function setIdTahunLulus($IdTahunLulus)
		{
			$this->IdTahunLulus = $IdTahunLulus;
		} 
		public function setTahunLulus($TahunLulus)
		{
			$this->TahunLulus = $TahunLulus;
		} 
		
		public function setIdLembaga($IdLembaga)
		{
			$this->IdLembaga = $IdLembaga;
		}
		public function setLembaga($Lembaga)
		{
			$this->Lembaga = $Lembaga;
		}
		
		public function setIdCabang($IdCabang)
		{
			$this->IdCabang = $IdCabang;
		}
		public function setCabang($Cabang)
		{
			$this->Cabang = $Cabang;
		}
		public function setPTN($PTN)
		{
			$this->PTN = $PTN;
		}


		public function getTahunLulus()
		{
			$this->load->database();
			$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT TahunLulus FROM sim_tahunlulus
			");
			$this->db->close();
			return $query;
		}

		public function getLembaga()
		{
			$this->load->database();
			$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT Lembaga FROM sim_lembaga
			");
			$this->db->close();
			return $query;
		}

		public function getCabang()
		{
			$this->load->database();
			$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT Cabang FROM sim_cabang
			");
			$this->db->close();
			return $query;
		}

		public function getPT()
		{
			$this->load->database();
			$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT PerguruanTinggi FROM sim_perguruantinggi
			");
			$this->db->close();
			return $query;
		}

/*-------------------------JUMLAH-------------------------*/
		public function getCountUsers()
		{
			$this->load->database();
			$this->db->cache_on();
			$query = $this->db->query
					("
						SELECT  COUNT(*) as TotalAlumni 
						FROM sim_alumni	
					");
			$this->db->close();
			return $query;
		}

		public function getCountCabang()
		{
			$this->load->database();
			$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT COUNT(Cabang) AS JumlahCabang FROM sim_cabang
			");
			$this->db->close();
			return $query;
		}

		public function getCountTahunLulus()
		{
			$this->load->database();
			$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT COUNT(TahunLulus) AS JumlahAngkatan FROM sim_tahunlulus
			");
			$this->db->close();
			return $query;
		}

		//Jumlah Alumni Per Cabang
		public function getCountAlumniPerCabangSby()
		{
			$this->load->database();
			$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT COUNT(Cabang) AS JumlahAlumniSby
				FROM sim_alumni
				WHERE Cabang='Surabaya'
			");
			$this->db->close();
			return $query;
		}

		public function getCountAlumniPerCabangSid()
		{
			$this->load->database();
			$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT COUNT(Cabang) AS JumlahAlumniSid
				FROM sim_alumni
				WHERE Cabang='Sidoarjo'
			");
			$this->db->close();
			return $query;
		}

		public function getCountAlumniPerCabangMoj()
		{
			$this->load->database();
			$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT COUNT(Cabang) AS JumlahAlumniMoj
				FROM sim_alumni
				WHERE Cabang='Mojokerto'
			");
			$this->db->close();
			return $query;
		}

		public function getCountAlumniPerCabangMal()
		{
			$this->load->database();
			$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT COUNT(Cabang) AS JumlahAlumniMal
				FROM sim_alumni
				WHERE Cabang='Malang'
			");
			$this->db->close();
			return $query;
		}

		public function getCountAlumniPerCabangJem()
		{
			$this->load->database();
			$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT COUNT(Cabang) AS JumlahAlumniJem
				FROM sim_alumni
				WHERE Cabang='Jember'
			");
			$this->db->close();
			return $query;
		}

		public function getCountAlumniPerCabangMad()
		{
			$this->load->database();
			$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT COUNT(Cabang) AS JumlahAlumniMad
				FROM sim_alumni
				WHERE Cabang='Madura'
			");
			$this->db->close();
			return $query;
		}

		public function getCountAlumniPerCabangYog()
		{
			$this->load->database();
			$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT COUNT(Cabang) AS JumlahAlumniYog
				FROM sim_alumni
				WHERE Cabang='Yogyakarta'
			");
			$this->db->close();
			return $query;
		}

		public function getCountAlumniPerCabangSem()
		{
			$this->load->database();
			$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT COUNT(Cabang) AS JumlahAlumniSem
				FROM sim_alumni
				WHERE Cabang='Semarang'
			");
			$this->db->close();
			return $query;
		}

		public function getCountAlumniPerCabangSol()
		{
			$this->load->database();
			$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT COUNT(Cabang) AS JumlahAlumniSol
				FROM sim_alumni
				WHERE Cabang='Solo'
			");
			$this->db->close();
			return $query;
		}

		public function getCountAlumniPerCabangJak()
		{
			$this->load->database();
			$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT COUNT(Cabang) AS JumlahAlumniJak 
				FROM sim_alumni
				WHERE Cabang='Jakarta'
			");
			$this->db->close();
			return $query;
		}

		public function getCountAlumniPerCabangBog()
		{
			$this->load->database();
			$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT COUNT(Cabang) AS JumlahAlumniBog
				FROM sim_alumni
				WHERE Cabang='Bogor'
			");
			$this->db->close();
			return $query;
		}


	//Total Pengunjung
	public function getCountLogin()
		{
			$this->load->database();
			$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT COUNT(Notifikasi) AS JumlahLogin
				FROM sim_log
				WHERE Notifikasi='Telah Login'
			");
			$this->db->close();
			return $query;
		}


	/*------------JUMLAH PER ANGKATAN--------*/
	public function getCountAlumni2008()
		{
			$this->load->database();
			$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT COUNT(TahunLulus) AS JumlahAlumni2008
				FROM sim_alumni
				WHERE TahunLulus='2008'
			");
			$this->db->close();
			return $query;
		}

	public function getCountAlumni2009()
		{
			$this->load->database();
			$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT COUNT(TahunLulus) AS JumlahAlumni2009
				FROM sim_alumni
				WHERE TahunLulus='2009'
			");
			$this->db->close();
			return $query;
		}

		public function getCountAlumni2010()
		{
			$this->load->database();
			$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT COUNT(TahunLulus) AS JumlahAlumni2010
				FROM sim_alumni
				WHERE TahunLulus='2010'
			");
			$this->db->close();
			return $query;
		}

	public function getCountAlumni2011()
		{
			$this->load->database();
			$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT COUNT(TahunLulus) AS JumlahAlumni2011
				FROM sim_alumni
				WHERE TahunLulus='2011'
			");
			$this->db->close();
			return $query;
		}

	/*------------/JUMLAH PER ANGKATAN--------*/

	/*------------JUMLAH PENGUNJUNG------------*/
	public function getCountVisitor()
		{
			$this->load->database();
			$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT Tanggal, COUNT(Notifikasi) AS JumlahPengunjung FROM sim_log
				WHERE Notifikasi = 'Telah Login'
				GROUP BY Tanggal
				ORDER BY Tanggal DESC LIMIT 0,10
			");
			$this->db->close();
			return $query;
		}

	/*-------------/JUMLAH PENGUNJUNG-----------*/
	}