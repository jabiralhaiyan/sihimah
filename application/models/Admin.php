<?php

class Admin extends CI_Model
{

	private $Nama;
	private $Alamat;
	private $NoHP;
	private $Username;
	private $Password;
	private $LinkFoto;

	public function __construct()
	{
		parent::__construct();
	}
	public function setUsername($Username)
	{
		$this->Username = $Username;
	}
	public function setPassword($Password)
	{
		$this->Password = $Password;
	}
	public function setNamaLengkap($Nama)
	{
		$this->Nama = $Nama;
	}
	public function setAlamat($Alamat)
	{
		$this->Alamat = $Alamat;
	}
	public function setNoHP($NoHP)
	{
		$this->NoHP = $NoHP;
	}
	public function setLinkFoto($LinkFoto)
	{
		$this->LinkFoto = $LinkFoto;
	}
	public function setPesan($Pesan)
	{
		$this->Pesan = $Pesan;
	}
	public function setPenerima($Penerima)
	{
		$this->Penerima = $Penerima;
	}

	
	//Get Log Notifikasi
	public function getNotificationLogin()
	{
		$this->load->database();
		$this->db->cache_on();
		$query = $this->db->query
		("
			SELECT Nama, TahunLulus, Lembaga, Waktu, Tanggal
			FROM sim_log
			WHERE User='Alumni' AND TipeNotifikasi='1' 
			ORDER BY Tanggal DESC, Waktu DESC
			LIMIT 5
			");
		$this->db->close();
		return $query;
	}

	//Get Log Notifikasi
	public function getNotificationLogout()
	{
		$this->load->database();
		$this->db->cache_on();
		$query = $this->db->query
		("
			SELECT Nama, TahunLulus, Lembaga, Waktu, Tanggal
			FROM sim_log
			WHERE User='Alumni' AND TipeNotifikasi='2' 
			ORDER BY Tanggal DESC, Waktu DESC
			LIMIT 5
			");
		$this->db->close();
		return $query;
	}

	public function getNotificationUpdate()
	{
		$this->load->database();
		$this->db->cache_on();
		$query = $this->db->query
		("
			SELECT Nama, TahunLulus, Lembaga, Waktu, Tanggal
			FROM sim_log
			WHERE User='Alumni' AND TipeNotifikasi='3' 
			ORDER BY Tanggal DESC, Waktu DESC
			LIMIT 5
			");
		$this->db->close();
		return $query;
	}

	public function getNotificationUploadPhoto()
	{
		$this->load->database();
		$this->db->cache_on();
		$query = $this->db->query
		("
			SELECT Nama, TahunLulus, Lembaga, LinkFoto, Waktu, Tanggal
			FROM sim_log
			WHERE User='Alumni' AND TipeNotifikasi='4' 
			ORDER BY Tanggal DESC, Waktu DESC
			LIMIT 5
			");
		$this->db->close();
		return $query;
	}

	public function getNotificationChangePassword()
	{
		$this->load->database();
		$this->db->cache_on();
		$query = $this->db->query
		("
			SELECT Nama, TahunLulus, Lembaga, Waktu, Tanggal
			FROM sim_log
			WHERE User='Alumni' AND TipeNotifikasi='5' 
			ORDER BY Tanggal DESC, Waktu DESC
			LIMIT 5
			");
		$this->db->close();
		return $query;
	}

	public function getNotification()
	{
		$this->load->database();
		$this->db->cache_on();
		$query = $this->db->query
		("
			SELECT Nama, LinkFoto, User, Notifikasi, Waktu
			FROM sim_log
			WHERE user='Alumni'
			ORDER BY Tanggal DESC, Waktu DESC
			LIMIT 5
			");
		$this->db->close();
		return $query;
	}

	public function getAllNotification()
	{
		$this->load->database();
		$this->db->cache_on();
		$query = $this->db->query
		("
			SELECT Id, Nama, TahunLulus, Lembaga, User, Notifikasi, Waktu, Tanggal
			FROM sim_log
			");
		$this->db->close();
		return $query;
	}
	public function getNotificationMessage()
	{
		$this->load->database();
		$this->db->cache_on();
		$query = $this->db->query
		("
			SELECT sim_pesan.Pengirim, sim_pesan.Pesan, sim_alumni.LinkFoto as LinkFotoAlumni, sim_pesan.Waktu
			FROM sim_pesan, sim_alumni, sim_admin
			WHERE sim_pesan.Pengirim = sim_alumni.Username 
			AND sim_pesan.Penerima=sim_admin.Username 
			ORDER BY sim_pesan.Waktu DESC LIMIT 5
			");
		$this->db->close();
		return $query;
	}

	/*-----------------------------------------------------------------*/
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
			SELECT sim_pesan.IdPesan, sim_pesan.Pengirim, sim_pesan.Pesan, sim_pesan.Status, sim_admin.LinkFoto as LinkFotoAdmin, sim_alumni.LinkFoto as LinkFotoAlumni, sim_pesan.Waktu
			FROM sim_pesan, sim_alumni, sim_admin
			WHERE sim_pesan.Pengirim = sim_alumni.Username 
			AND sim_pesan.Penerima=sim_admin.Username 
			ORDER BY sim_pesan.Waktu
			DESC LIMIT 10
			");
		$this->db->close();
		return $query;
	}

	//Update Status Pesan
	public function updateStatusMessage()
	{
		$this->load->database();
		$this->db->cache_on();
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
			SELECT sim_pesan.IdPesan, sim_pesan.Penerima, sim_pesan.Pesan, sim_admin.LinkFoto as LinkFotoAdmin, sim_pesan.Waktu
			FROM sim_pesan, sim_alumni, sim_admin
			WHERE sim_pesan.Penerima = sim_alumni.Username 
			AND sim_pesan.Pengirim=sim_admin.Username 
			ORDER BY sim_pesan.Waktu
			DESC LIMIT 10
			");
		$this->db->close();
		return $query;
	}

	//delete inbox
	public function deleteInboxFromMessage($IdPesan)
	{
		$this->IdPesan = $IdPesan;
		$this->load->database();
		$query = $this->db->query
		("
			DELETE FROM sim_pesan
			WHERE
			sim_pesan.IdPesan = '$this->IdPesan'
			");
		$this->db->close();
		return ;
	}

	//delete outbox
	public function deleteOutboxFromMessage($IdPesan)
	{
		$this->IdPesan = $IdPesan;
		$this->load->database();

		$query = $this->db->query
		("
			DELETE FROM sim_pesan
			WHERE
			sim_pesan.IdPesan = '$this->IdPesan'
			");
		$this->db->close();
		return ;
	}

	/*-----------------------------------------------------------------*/
	public function getFromDatabase()
	{
		$this->load->database();
		$this->db->cache_on();
		$query = $this->db->query
		("
			SELECT Username, Nama, LinkFoto
			FROM sim_admin
			WHERE 
			Username = '$this->Username' AND
			Password = '$this->Password'
			");
		$this->db->close();
		return $query;
	}


	public function getSomeFromDatabase()
	{
		$this->load->database();
		$this->db->cache_on();
		$query = $this->db->query
		("
			SELECT Nama, Alamat, NoHP, Username
			FROM sim_admin
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
			FROM sim_admin
			WHERE 
			Username = '$this->Username'	
			");
		$this->db->close();
		return $query;
	}

	public function getAllFromDatabaseByUsername($Username)
	{
		//$this->Username = $Username;
		$this->load->database();
		$this->db->cache_on();
		$query = $this->db->query
		("
			SELECT *
			FROM sim_admin
			WHERE 
			Username = '$Username'	
			");
		$this->db->close();
		return $query;
	}

	public function addToDatabase()
	{
		$this->load->database();
		$query = $this->db->query
		("
			INSERT INTO sim_admin (Username, Password, Nama, Alamat, NoHP)
			VALUES
			(						
			'$this->Username',
			'$this->Password',
			'$this->Nama',
			'$this->Alamat',
			'$this->NoHP'
			)							
			");
		$this->db->close();
		return $query;
	}
	
	public function updateDatabase()
	{
		
		$this->load->database();
		$query = $this->db->query
		("
			UPDATE sim_admin
			SET 
			Nama = '$this->Nama',
			Alamat = '$this->Alamat',
			NoHP = '$this->NoHP',
			Password = '$this->Password'
			
			WHERE 
			Username = '$this->Username'	
			");
		$this->db->close();
		return $query;
	}

	//LinkFoto = '$this->LinkFoto'
	public function updateProfilAdmin()
	{
		$this->load->database();
		$query = $this->db->query
		("
			UPDATE sim_admin
			SET 
			Nama = '$this->Nama',
			Alamat = '$this->Alamat',
			NoHP = '$this->NoHP',
			Password = '$this->Password'
			
			WHERE 
			Username = '$this->Username'
			");
		$this->db->close();
		return $query;
	}

	public function getFoto()
	{
		$link = ' ';
		$this->load->database();
		$query = $this->db->query
		("
			SELECT LinkFoto
			FROM sim_admin
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
			UPDATE sim_admin
			SET LinkFoto = '$this->LinkFoto'
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
			DELETE FROM sim_admin
			WHERE
			Username = '$this->Username'
			");
		$this->db->close();
		return ;
	}

//Counting Dashboard Beranda
	
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

	public function getCountAlumni()
	{
		$this->load->database();
		$this->db->cache_on();

		//query total alumni
		$query1 = $this->db->query
		("
			SELECT  COUNT(*) as TotalAlumni 
			FROM sim_alumni	
			");
		//$this->db->close();

		//query total laki-laki
		$query2 = $this->db->query
		("
			SELECT COUNT(JenisKelamin) as TotalLakiLaki
			FROM sim_alumni
			WHERE JenisKelamin='L'

			");

		//query total perempuan
		$query3 = $this->db->query
		("
			SELECT COUNT(JenisKelamin) as TotalPerempuan
			FROM sim_alumni
			WHERE JenisKelamin='P'
			");

		
		if ($query1->num_rows()>0)
		{
			foreach ($query1->result() as $row)
			{
						//bukan pesan
				$notifikasi['TotalAlumni'] = $row->TotalAlumni;
			}
		}
		
		if ($query2->num_rows()>0)
		{
			foreach ($query2->result() as $row)
			{
						//bukan pesan
				$notifikasi['TotalLakiLaki'] = $row->TotalLakiLaki;
			}
		}

		if ($query3->num_rows()>0)
		{
			foreach ($query3->result() as $row)
			{
						//bukan pesan
				$notifikasi['TotalPerempuan'] = $row->TotalPerempuan;
			}
		}

		return $notifikasi;
	}

/*
	public function getCountMaleUser()
	{
		$this->load->database();
		$this->db->cache_on();
		$query = $this->db->query
		("
			SELECT COUNT(JenisKelamin) as TotalLakiLaki
			FROM sim_alumni
			WHERE JenisKelamin='L'

			");
		$this->db->close();
		return $query;
	}

	public function getCountFemaleUser()
	{
		$this->load->database();
		$this->db->cache_on();
		$query = $this->db->query
		("
			SELECT COUNT(JenisKelamin) as TotalPerempuan
			FROM sim_alumni
			WHERE JenisKelamin='P'
			");
		$this->db->close();
		return $query;
	}

*/
	public function getCountAlumniPerLembaga()
	{
		$this->load->database();
		$this->db->cache_on();
		
		$query1 = $this->db->query
		("
			SELECT COUNT(Lembaga) as TotalMAUSby
			FROM sim_alumni
			WHERE Lembaga='MA Unggulan Amanatul Ummah Surabaya'
			");
		
		$query2 = $this->db->query
		("
			SELECT COUNT(Lembaga) as TotalMAASby
			FROM sim_alumni
			WHERE Lembaga='MA Akselerasi Amanatul Ummah Surabaya'
			");

		$query3 = $this->db->query
		("
			SELECT COUNT(Lembaga) as TotalSMAUSby
			FROM sim_alumni
			WHERE Lembaga='SMA Unggulan Amanatul Ummah Surabaya'
			");	

		$query4 = $this->db->query
		("
			SELECT COUNT(Lembaga) as TotalMBISby
			FROM sim_alumni
			WHERE Lembaga='MBI Amanatul Ummah Surabaya'
			");
		
		$query5 = $this->db->query
		("
			SELECT COUNT(Lembaga) as TotalMAAPacet
			FROM sim_alumni
			WHERE Lembaga='MA Akselerasi Amanatul Ummah Pacet'
			");

		$query6 = $this->db->query
		("
			SELECT COUNT(Lembaga) as TotalMBIPacet
			FROM sim_alumni
			WHERE Lembaga='MBI Amanatul Ummah Pacet'
			");

		$query7 = $this->db->query
		("
			SELECT COUNT(Lembaga) as TotalMABejatPacet
			FROM sim_alumni
			WHERE Lembaga='MA Bendungan Jati Hikmatul Amanah Pacet'
			");

		$query8 = $this->db->query
		("
			SELECT COUNT(Lembaga) as TotalSMABPPacet
			FROM sim_alumni
			WHERE Lembaga='SMA Berbasis Pesantren Amanatul Ummah Pacet'
			");

		if ($query1->num_rows()>0)
		{
			foreach ($query1->result() as $row)
			{
						//bukan pesan
				$notifikasi['TotalMAUSby'] = $row->TotalMAUSby;
			}
		}

		if ($query2->num_rows()>0)
		{
			foreach ($query2->result() as $row)
			{
						//bukan pesan
				$notifikasi['TotalMAASby'] = $row->TotalMAASby;
			}
		}

		if ($query3->num_rows()>0)
		{
			foreach ($query3->result() as $row)
			{
						//bukan pesan
				$notifikasi['TotalSMAUSby'] = $row->TotalSMAUSby;
			}
		}

		if ($query4->num_rows()>0)
		{
			foreach ($query4->result() as $row)
			{
						//bukan pesan
				$notifikasi['TotalMBISby'] = $row->TotalMBISby;
			}
		}

				//Total Alumni Per Lembaga di Pacet

		if ($query5->num_rows()>0)
		{
			foreach ($query5->result() as $row)
			{
						//bukan pesan
				$notifikasi['TotalMAAPacet'] = $row->TotalMAAPacet;
			}
		}

		if ($query6->num_rows()>0)
		{
			foreach ($query6->result() as $row)
			{
						//bukan pesan
				$notifikasi['TotalMBIPacet'] = $row->TotalMBIPacet;
			}
		}

		if ($query7->num_rows()>0)
		{
			foreach ($query7->result() as $row)
			{
						//bukan pesan
				$notifikasi['TotalMABejatPacet'] = $row->TotalMABejatPacet;
			}
		}

		if ($query8->num_rows()>0)
		{
			foreach ($query8->result() as $row)
			{
						//bukan pesan
				$notifikasi['TotalSMABPPacet'] = $row->TotalSMABPPacet;
			}
		}


		return $notifikasi;
	}

		//Jumlah Alumni MAU Sby
	public function getCountMAUSby()
	{
		$this->load->database();
		$this->db->cache_on();
		$query = $this->db->query
		("
			SELECT COUNT(Lembaga) as TotalMAUSby
			FROM sim_alumni
			WHERE Lembaga='MA Unggulan Amanatul Ummah Surabaya'
			");
		$this->db->close();
		return $query;
	}

		//Jumlah Alumni MAA Sby
	public function getCountMAASby()
	{
		$this->load->database();
		$this->db->cache_on();
		$query = $this->db->query
		("
			SELECT COUNT(Lembaga) as TotalMAASby
			FROM sim_alumni
			WHERE Lembaga='MA Akselerasi Amanatul Ummah Surabaya'
			");
		$this->db->close();
		return $query;
	}

		//Jumlah Alumni SMAU Sby
	public function getCountSMAUSby()
	{
		$this->load->database();
		$this->db->cache_on();
		$query = $this->db->query
		("
			SELECT COUNT(Lembaga) as TotalSMAUSby
			FROM sim_alumni
			WHERE Lembaga='SMA Unggulan Amanatul Ummah Surabaya'
			");
		$this->db->close();
		return $query;
	}

		//Jumlah Alumni MBI Sby
	public function getCountMBISby()
	{
		$this->load->database();
		$this->db->cache_on();
		$query = $this->db->query
		("
			SELECT COUNT(Lembaga) as TotalMBISby
			FROM sim_alumni
			WHERE Lembaga='MBI Amanatul Ummah Surabaya'
			");
		$this->db->close();
		return $query;
	}

		//Jumlah Alumni MAA Pacet
	public function getCountMAAPacet()
	{
		$this->load->database();
		$this->db->cache_on();
		$query = $this->db->query
		("
			SELECT COUNT(Lembaga) as TotalMAAPacet
			FROM sim_alumni
			WHERE Lembaga='MA Akselerasi Amanatul Ummah Pacet'
			");
		$this->db->close();
		return $query;
	}

		//Jumlah Alumni MBI Pacet
	public function getCountMBIPacet()
	{
		$this->load->database();
		$this->db->cache_on();
		$query = $this->db->query
		("
			SELECT COUNT(Lembaga) as TotalMBIPacet
			FROM sim_alumni
			WHERE Lembaga='MBI Amanatul Ummah Pacet'
			");
		$this->db->close();
		return $query;
	}

		//Jumlah Alumni SMA Bendungan Jati Hikmatul Amanah Pacet
	public function getCountMABejatPacet()
	{
		$this->load->database();
		$this->db->cache_on();
		$query = $this->db->query
		("
			SELECT COUNT(Lembaga) as TotalMABejatPacet
			FROM sim_alumni
			WHERE Lembaga='MA Bendungan Jati Hikmatul Amanah Pacet'
			");
		$this->db->close();
		return $query;
	}

		//Jumlah Alumni SMA Berbasis Pesantren Amanatul Ummah Pacet
	public function getCountSMABPPacet()
	{
		$this->load->database();
		$this->db->cache_on();
		$query = $this->db->query
		("
			SELECT COUNT(Lembaga) as TotalSMABPPacet
			FROM sim_alumni
			WHERE Lembaga='SMA Berbasis Pesantren Amanatul Ummah Pacet'
			");
		$this->db->close();
		return $query;
	}


//end counting dashboard
}

