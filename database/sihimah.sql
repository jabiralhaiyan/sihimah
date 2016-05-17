/*
Navicat MySQL Data Transfer

Source Server         : localhost_3434
Source Server Version : 50620
Source Host           : localhost:3434
Source Database       : sihimah

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2016-05-16 22:21:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for sim_admin
-- ----------------------------
DROP TABLE IF EXISTS `sim_admin`;
CREATE TABLE `sim_admin` (
  `Username` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `NoHP` varchar(15) NOT NULL,
  `LinkFoto` varchar(200) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sim_admin
-- ----------------------------
INSERT INTO `sim_admin` VALUES ('A001', 'jabir', 'Muhammad Jabir Al', 'jab', 'jab', 'assets/profpic_admin/11904627_913089762117119_448759934407895387_n.jpg');
INSERT INTO `sim_admin` VALUES ('A002', 'huseinganteng', 'Mujahid Husein', 'Jalan- Jalanan', '08765434234', '');
INSERT INTO `sim_admin` VALUES ('A003', 'uziganteng', 'Ahmad Ridwan Fauzi', 'Jalan Welud, Wonocolo, Surabaya', '088888888', '');
INSERT INTO `sim_admin` VALUES ('A0080', 'k', 'akujaran', 'aku', 'k', '');

-- ----------------------------
-- Table structure for sim_alumni
-- ----------------------------
DROP TABLE IF EXISTS `sim_alumni`;
CREATE TABLE `sim_alumni` (
  `Username` varchar(45) NOT NULL,
  `Password` varchar(45) DEFAULT NULL,
  `NamaLengkap` varchar(100) DEFAULT NULL,
  `NamaPanggilan` varchar(15) DEFAULT NULL,
  `JenisKelamin` char(1) DEFAULT NULL,
  `TempatLahir` varchar(50) DEFAULT NULL,
  `TanggalLahir` date DEFAULT NULL,
  `Lembaga` varchar(50) DEFAULT NULL,
  `TahunLulus` int(11) DEFAULT NULL,
  `Cabang` varchar(50) DEFAULT NULL,
  `AlamatAsal` varchar(200) DEFAULT NULL,
  `AlamatSekarang` varchar(200) DEFAULT NULL,
  `Facebook` varchar(80) DEFAULT NULL,
  `Twitter` varchar(30) DEFAULT NULL,
  `Blog` varchar(80) DEFAULT NULL,
  `Instagram` varchar(50) DEFAULT NULL,
  `Line` varchar(50) DEFAULT NULL,
  `Email` varchar(80) DEFAULT NULL,
  `NoHP` varchar(15) DEFAULT NULL,
  `Hobi` varchar(200) DEFAULT NULL,
  `Cita_Cita` varchar(200) DEFAULT NULL,
  `Motto` varchar(200) DEFAULT NULL,
  `Prestasi` varchar(200) DEFAULT NULL,
  `PerguruanTinggi` varchar(255) DEFAULT NULL,
  `Jurusan` varchar(200) DEFAULT NULL,
  `TempatKerja` varchar(200) DEFAULT NULL,
  `Kesibukan` varchar(200) DEFAULT NULL,
  `NamaOrtu` varchar(200) DEFAULT NULL,
  `PendidikanOrtu` varchar(200) DEFAULT NULL,
  `PekerjaanOrtu` varchar(200) DEFAULT NULL,
  `KontakOrtu` varchar(15) DEFAULT NULL,
  `LinkFoto` varchar(100) DEFAULT NULL,
  `TanggalUpdate` datetime DEFAULT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sim_alumni
-- ----------------------------
INSERT INTO `sim_alumni` VALUES ('1108100703', '1108100703', 'Hasan Bisri', 'Hasbi', 'L', 'Pandeglang', null, 'MBI Amanatul Ummah Pacet', '2008', 'Semarang', 'Majau, Kec. Saketi, Pandeglang, Banten', 'Asrama Mahasiswa ITS Blok E-207', null, null, null, null, null, 'hasbi@physics.its.ac.id', '85733086402', 'Menjelejah', 'Profesor', 'Berpengalamanlah! Karena pengalaman adalah guru yang terbaik', null, null, null, null, null, 'Raman / Uun Unaenah', 'MTs. / MI', 'Petani / Ibu rumah tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('1109100701', '1109100701', 'Andika Yuliananto', 'Andika', 'L', 'Tuban', null, 'MBI Amanatul Ummah Surabaya', '2008', 'Malang', 'Tuban', 'Keputih gang 1 no 1', null, null, null, null, null, 'andika=jeje@yahoo.co.id', '85755470888', 'Membaca buku', 'Dosen', 'Tertawalah sebelum tertawa dilarang', null, null, null, null, null, 'Edi Suryono / Indah Wati', 'SMA / S1', 'Tani / PNS', null, null, null);
INSERT INTO `sim_alumni` VALUES ('1109100704', '1109100704', 'Ahmad Mustangin', 'Mustangin', 'L', 'Sidodadi', null, 'MA Akselerasi Amanatul Ummah Surabaya', '2009', 'Mojokerto', 'Sidodadi, Kec. Sekampung Kab. Lampung Timur', 'Kepuih gang II 27 A', null, null, null, null, null, null, '0857 6841 8168', 'Kumpul bareng sama temen-temen (cowok lho..)', 'Guru', 'Hidup adalah perjuangan, dalam berjuang kita harus tetap semangat, SEMANGAT!', null, null, null, null, null, 'Satimin/Subur', 'SR', 'Tani', null, null, null);
INSERT INTO `sim_alumni` VALUES ('1109100707', '1109100707', 'Banatul Muflihati', 'Ufie', 'P', 'Wonosobo', null, 'SMA Unggulan Amanatul Ummah Surabaya ', '2009', 'Yogyakarta', 'Jl. Purworejo Km 26 Rt 03 RW 02 Sumpet, Kepil, Wonosobo 56374', 'jl. Arif rahman hakim no. 104', null, null, null, null, null, 'aksi_banat@yahoo.com', '0819 0425 0565', 'Membaca, Hunting film & buku (terbaru)', 'Imuan', 'Bergerak & Bermanfaat', null, null, null, null, null, 'Idris Sholeh/Tashilah', 'Diploma / SMA (Pesantren)', 'Pensiunan PNS / Wirausahawati', null, null, null);
INSERT INTO `sim_alumni` VALUES ('1109100708', '1109100708', 'Anwaril Mubasiroh', 'Ariel', 'P', 'Kediri', null, 'SMA Unggulan Amanatul Ummah Surabaya ', '2009', 'Madura', 'Jl Selamat Sidomulyo Puncu kediri', 'Bumi marina emas utara blok-F 119', null, null, null, null, null, 'aril_green@yahoo.co.id', '085 65578 9455', 'Membaca', null, 'Kunci Keberhasilan adalah Berusaha dan Berdo\'a', null, null, null, null, null, 'M. Sokib/Binti Kholifah', 'SD/SD', 'Tani/Tani', null, null, null);
INSERT INTO `sim_alumni` VALUES ('1110100701', '1110100701', ' Zid Latifataz Zahrok', 'Zio', 'L', 'Blitar', '0000-00-00', 'MBI Amanatul Ummah Surabaya', '2010', 'Jember', 'Rt 02 RW 04 Bakung Udanawu Blitar', 'keputih gg 3 C no.17', null, null, null, null, null, 'kuncara64@gmail.com', '85646357664', 'Coret coret buku, denger musik', 'Penulis , Arsitek, Peneliti', ' -', null, null, null, null, null, 'Istamar/Sunsiqoh', 'S1/S1', 'Guru/Guru', null, null, null);
INSERT INTO `sim_alumni` VALUES ('1110100705', '1110100705', 'Syaiful Arifin', 'ipul', 'L', ' Lamongan', '0000-00-00', 'MA Akselerasi Amanatul Ummah Surabaya', '2010', 'Mojokerto', 'kalanganyar, Karanggeneng Lamongan', 'keputih gg 1 A', null, null, null, null, null, 'saefull.arifin@gmail.com /Syaiful arifin / adammervie', '85645079791', ' -', ' -', ' -', null, null, null, null, null, 'Baidlowi/Na�imah', 'SD/SD', 'Tani/Tani', null, null, null);
INSERT INTO `sim_alumni` VALUES ('1111100701', '1111100701', 'Mohammad Ainul Yaqin', 'Yaqin', 'L', ' Probolinggo', '0000-00-00', 'SMA Unggulan Amanatul Ummah Surabaya ', '2011', 'Madura', ': Jalan Surgai Sampit Rt 03/Rw 05 Jrebeng Kulon Kedepok Probolinggo Jawa Timur', ' Asrama Mahasiswa ITS', null, null, null, null, null, 'ainul66@yahoo.co.id ', '85334598200', 'Main Basket dan Voly ', ': Menjadi Ilmuan dan Profesor', ': lakukanlah untuk duniamu seakan-akan engkau hidup selamannya, lakukanlah untuk akhiratmu seakan-akan engkau mati esok.', null, null, null, null, null, 'Abd. Manan dan Siti Sumila', 'SD/MI dan SMP/MTs', 'Pedagang dan pedagang', null, null, null);
INSERT INTO `sim_alumni` VALUES ('1111100702', '1111100702', ' Churroh childa mafaza', ' childa', 'P', 'Temanggung', '0000-00-00', 'MA Akselerasi Amanatul Ummah Surabaya', '2011', 'Sidoarjo', ' Rejosari ngadirejo temanggung', 'Asrama Mahasiswa ITS', null, null, null, null, null, 'childleaderz@yahoo.com', '85645999574', null, null, 'selalu berusaha menjadi lebih baik', null, null, null, null, null, 'M. tholkhah mansur dan baroroh', 'SMA dan SMA', 'tani dan ibu rumah tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('1111100703', '1111100703', 'Wahyuni Lestari', 'Yuni', 'P', 'Gresik', '0000-00-00', 'MA Hikmatul Amanah Pacet', '2011', 'Surabaya', 'Sukorejo Sidayu Gresik Jatim', 'Asrama Mahasiswa ITS', null, null, null, null, null, 'yuni_preet@rocketmail.com ', '85731073294', 'membaca dan corat-coret', 'ingin jadi guru dan sukses dunia akhirat', 'Manjadda Wajada', null, null, null, null, null, 'Abdul Mu�in dan Suhartatik', 'SD dan SD', 'petani dan petani', null, null, null);
INSERT INTO `sim_alumni` VALUES ('1208100705', '1208100705', 'Ana Fadilah', 'Ana', 'P', 'Blitar', null, 'MBI Amanatul Ummah Surabaya', '2008', 'Malang', 'Bakung Udanawu Blitar', 'Asrama Mahasiswa ITS', null, null, null, null, null, 'anfa@matematika.its.ac.id/ana_fadlilah@yahoo.com', '85732440672', 'Mendengarkan Musik', null, 'Di mana ada ke mana di situ pasti ada jalan', null, null, null, null, null, 'Muhammad Ansyori / Siti Nafisah', 'SLTP/ SLTP', 'Petani', null, null, null);
INSERT INTO `sim_alumni` VALUES ('1209100702', '1209100702', 'Ulir Rohwana ', 'Wana', 'L', 'Kudus', null, 'MA Akselerasi Amanatul Ummah Surabaya', '2009', 'Mojokerto', 'Kudus', 'jl. Arif rahman hakim no. 9', null, null, null, null, null, 'wana.alfaqiir@gmail.com', '0813 2503 6967', 'Main Bola', 'Ingin menjadi orang yang sukses dunia akhirat', 'Sekarang atau tidak sama sekali', null, null, null, null, null, 'Muhammad sikun', null, 'Buruh', null, null, null);
INSERT INTO `sim_alumni` VALUES ('1209100707', '1209100707', 'Wahyuni Ningsih', 'Yuni', 'P', 'Pasuruan', null, 'MBI Amanatul Ummah Surabaya', '2009', 'Malang', 'Jl Indrokilo RT 01 RW 01 Klata\'an, Dayu rejo, Kc. Prigen Kab. Pasuruan', 'asrama blok B-106', null, null, null, null, null, 'younee.ningsih@gmail', '0857 3188 9310', 'Mendengarkan Musik, Baca Sholawat Nabi', 'Ingin Jadi Guru Matematika', 'Ingat Tujuan utama hidup, tetap tawakkal pada Sang Pencipta', null, null, null, null, null, 'Cawis/Mahada', 'Tidak sekolah', 'Tani/Tani', null, null, null);
INSERT INTO `sim_alumni` VALUES ('1211100701', '1211100701', 'Muhammad fikri Zamzami', 'fikri', 'L', 'tergaleg', '0000-00-00', 'MBI Amanatul Ummah Pacet', '2011', 'Semarang', ' RT 16 RW 8 krandegan gandusari trenggaleg jatim', 'Asrama mahasiswa ITS  blok-G', null, null, null, null, null, 'fikri_alazzam@yahoo.com ', '85853420844', 'memancing', ': dosen', ': terus berjuang dan istiqomah', null, null, null, null, null, 'Mohammad Imron rosyadi dan Siti muyasharoh', 'SI dan SLTP', 'Guru dan wiraswasta', null, null, null);
INSERT INTO `sim_alumni` VALUES ('1211100702', '1211100702', 'Mariyatul ilmiah', 'ilmi', 'P', 'Pasuruan', '0000-00-00', 'SMA Unggulan Amanatul Ummah Surabaya ', '2011', 'Madura', 'Ds.Parasrejo RT 02 RW 05 kab. Pasuruan', 'Asrama Mahasiswa ITS blok  J', null, null, null, null, null, null, '81937017439', 'nonton TV', ': Guru/dosen', ': Selalu semangat dalam belajar', null, null, null, null, null, 'Mochammad fake dan Makhmudah', 'SMP dan MTs', 'Wiraswasta dan ibu rumah tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('1211100703', '1211100703', 'Mohammad Jalaluddin Attohar', ' Aat', 'L', ' Tulungagung', '0000-00-00', 'SMA Unggulan Amanatul Ummah Surabaya ', '2011', 'Yogyakarta', 'Ds. Tenggur Rt 02/Rw 02 Kec. Rejatangan Kab. Tulungagung', ' Asrama Mahasiswa ITS', null, null, null, null, null, 'udinjalal46@yahoo.co.id  ', '89679277492', 'membaca ', ': Hafal Al Qur�an, Da�i, guru prifat', ':jadilah ddiri sendiri', null, null, null, null, null, 'Abd. Manan dan Siti Sumila', 'SD/MI dan SMP/MTs', 'Pedagang dan pedagang', null, null, null);
INSERT INTO `sim_alumni` VALUES ('1310100702', '1310100702', ' Zakariyah ', 'Zaka', 'L', 'Cirebon', '0000-00-00', 'MBI Amanatul Ummah Surabaya', '2010', 'Malang', 'Tegalgubug RT 05/07 , Arjawinangun, Cirebon', 'gebang kidul 59', null, null, null, null, null, 'Zakariya1244@yahoo.co.id/Fb : Zexra Nezuz', '85730099014', 'Sepak bola, Futsal, Basket dan baca komik', ' Sa�idufiddunya wa sa�idufilakhiroh', 'Iskariman aw mujtahidan', null, null, null, null, null, 'Rosidin/Soipah', 'SD/SD', 'Tani/Tani', null, null, null);
INSERT INTO `sim_alumni` VALUES ('1310100703', '1310100703', 'Evi kinasih ikhwan', 'Evi', 'P', 'Gilimanue', '0000-00-00', 'MA Akselerasi Amanatul Ummah Surabaya', '2010', 'Sidoarjo', 'Jl Layur No 6 Penginuman Gilimanuk Bali', 'Keputih 3C No. 17', null, null, null, null, null, 'evi kinasih@yahoo.com/', '85731111437', 'Bersepeda', 'Dokter', 'kalau mau pasti bisa', null, null, null, null, null, 'Muhammad Ikhwan/', 'SD/SMA', 'Pekerja Bangunan / Wiraswasta', null, null, null);
INSERT INTO `sim_alumni` VALUES ('1311100701', '1311100701', 'Suwarno', 'suwarno', 'L', 'Kudus', '0000-00-00', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', '2011', 'Surabaya', 'Jln. Undaan Tengan RT 1 RW 2 Undaan Kudus', 'Asrama Mahasiswa ITS', null, null, null, null, null, 'chine.5w412no@yahoo.com ', '87855190153', 'Membaca, Sholawatan', 'Menjadi Orang yang sukses dan bermanfaat', 'Nothing is easy but nothing is impossible', null, null, null, null, null, 'Sumidi dan Kasmini', 'SD dan SD', 'Buruh dan Ibu Rumah Tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('1311100702', '1311100702', 'Ulul azmi', 'Ami', 'P', 'Jombang', '0000-00-00', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', '2011', 'Surabaya', 'Dalung permai blok q 22 denpasar bali', 'Asrama Mahasiswa ITS', null, null, null, null, null, 'azmi_araz@gmail.com ', '85730981680', 'membaca buku dan dengerin musik', 'insinyur', 'Jadi pemimpin yang bertanggung  jawab', null, null, null, null, null, 'H sutrisno , S.E dan Siti Alifah', 'Sarjana dan SMA', 'Karyawan BUMN dan Ibu Rumah tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('1311100703', '1311100703', 'Auliya Rahman', 'aya', 'P', 'JOmbang', '0000-00-00', 'MA Akselerasi Amanatul Ummah Surabaya', '2011', 'Sidoarjo', 'Dsn. Wonokoyo Ds Mayangan Jogoroto Jombang', 'Asrama Mahasiswa ITS blok  H', null, null, null, null, null, ' kazune_aya@yahoo.com', '085852553703/08', 'membaca dan dengerin musik', 'guru/pegawai bank', ' gag ada yang gag mungkin, yang tepenting ada niat dan usaha.', null, null, null, null, null, 'H. Muslimin dan Suhartatik', 'S1 dan SMA', 'PNS', null, null, null);
INSERT INTO `sim_alumni` VALUES ('1408100704', '1408100704', 'Agus salim', 'Agus', 'L', 'Sintang', '0000-00-00', 'MA Unggulan Amanatul Ummah Surabaya', '2008', 'Sidoarjo', 'Ds. Perembang', 'Jl. Arif Rahman Hakim 27 Keputih', '', '', '', '', '', 'agus6salim@gmail.com ', '85850738700', 'Olah raga (Football)', 'Ilmuwan', 'Berharaplah diri untuk bisa berbuat untuk orang lain', '', 'Institut Teknologi Sepuluh Nopember', 'Teknik Informatika', '', '', 'Buangmujo / Sarwiti', 'SD / SD', 'Petani / Ibu rumah tangga', '', '', '2016-05-08 01:46:51');
INSERT INTO `sim_alumni` VALUES ('1409100704', '1409100704', 'Amelinda Pratiwi', 'Amel', 'P', 'Gresik', null, 'MBI Amanatul Ummah Surabaya', '2009', 'Jember', 'Bontang, Kalimantan Timur', 'Bumi marina emas utara blok-F 119', null, null, null, null, null, 'amels_borneo@yahoo.com', '85745982534', 'Dengerin Musik, Gambar, Baca', 'Dosen', 'Self Confidence Is Key of Suces', null, null, null, null, null, 'Sapuan/Sriami', 'STM/SMA', 'Swasta/Ibu Rumah Tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('1409100705', '1409100705', 'Addin Fitriani', 'Addin', 'P', 'Blitar', null, 'MA Unggulan Amanatul Ummah Surabaya', '2009', 'Surabaya', 'Tunjung-Undanawu-Blitar', 'keputih 1A no. 4', null, null, null, null, null, 'addinftr@gmail.com', '85730796309', 'Olahraga', 'Guru', 'Ilmu, amal, Iman & Taqwa', null, null, null, null, null, 'Mesiyat/Siti Zaenab', 'SMP/SD', 'Tani/Ibu Rumah Tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('1409100706', '1409100706', 'Anita Sari', 'Anita', 'P', 'Kediri', null, 'SMA Unggulan Amanatul Ummah Surabaya ', '2009', 'Jember', 'Deyeng, Ringin Rejo, Kediri', 'Bumi marina emas utara blok-F 119', null, null, null, null, null, 'anitasr7@gmail.com', '085 73117 9751', 'Jalan-jalan', 'Orang yang berguna bagi nusa, bangsa, dan agama', 'Hidup adalah perjuangan', null, null, null, null, null, 'Sangid', 'SLTA', 'Dagang', null, null, null);
INSERT INTO `sim_alumni` VALUES ('1410100702', '1410100702', 'Amirotul Ula ', 'Ami', 'p', 'Lamongan', '0000-00-00', 'SMA Unggulan Amanatul Ummah Surabaya ', '2010', 'Madura', 'Prijek ngablak karanggeneng Lamongan', 'Keputih gang 3C no.17', null, null, null, null, null, 'am_amie@rocketmail.com', '85732215614', 'dengat musik', 'Guru', 'Walaupun berkali kali gagal tapi tetap semangat yntuk bangkit', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `sim_alumni` VALUES ('1411100701', '1411100701', 'Shofiyullah Romdoni', 'Shofi', 'L', 'Rajagaluh Majalengka', '0000-00-00', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', '2011', 'Bogor', 'Kumbung Rajagaluh Majalengka ', 'Asrama Mahasiswa ITS', null, null, null, null, null, 'shoFiyullahr@yahoo.com ', '82128371769', 'Main Bola', 'Dosen', 'Jangan mudah menyerah dalam menghadapi problematika kehidupan. Hadapi, hayati, dan nikmati', null, null, null, null, null, 'Kyatory dan Nur Aeni', 'pesantren dan pesantren', 'wiraswasta dan wiraswasta', null, null, null);
INSERT INTO `sim_alumni` VALUES ('1411100702', '1411100702', 'Anik Fathimatuz Zahro', ' Anik', 'P', 'Sidoarjo', '0000-00-00', 'MA Unggulan Amanatul Ummah Surabaya', '2011', 'Sidoarjo', ' Jedongcangkring RT 5 RW 2 prambon sidoarjo', 'Asrama mahasiswa ITS  blok-J', null, null, null, null, null, ' faniz_el.zahra@yahoo.com ', '85731809198', 'dengerin musik , menyanyi, membaca novel', ': dosen atau guru', ' don�t think to be the best but to do the best', null, null, null, null, null, 'Mohammad miskal dan Nur chofifa', 'SMA dan SLTP', 'Perangkat desa (mudin) dan Ibu Rumah tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('1411100703', '1411100703', ' Jazirotul Rohmah', ' Jaziroh', 'P', 'Gresik', '0000-00-00', 'MBI Amanatul Ummah Surabaya', '2011', 'Malang', 'Kisik Bungah gresik', ' Asrama Mahasiswa ITS blok  J', null, null, null, null, null, null, '85645939884', 'Membaca Buku ', ': Pengusaha Obat-obatan', ': Pengalaman adalah guru terbaik', null, null, null, null, null, '     H. AH Hamdan dan Hj. Siti Khalfah', 'SMA dan SMA', 'Petani', null, null, null);
INSERT INTO `sim_alumni` VALUES ('1509100702', '1509100702', 'Ardhiani Al - Syauqi', 'Qiqi', 'P', 'Serang', null, 'MBI Amanatul Ummah Surabaya', '2008', 'Jember', 'Serang Banten 42161', 'Jl. Arief Rahman Hakim Deles 3 No.6 Surabaya 60111', null, null, null, null, null, 'nych1_90earth@yahoo.com ', '81932110336', 'Reading', ' 4A', '4A (kecil dimanja, remaja dipuja, dewasa bersahaja, tua kaya   raya, mati masuk surga)', null, null, null, null, null, 'Nana Supriatna / Najmu Suryani', 'SMP / D2', 'Karyawan BUMN / PNS', null, null, null);
INSERT INTO `sim_alumni` VALUES ('1509100707', '1509100707', 'Wahyu Dewi Iftita', 'Tita', 'P', 'Blitar', null, 'MA Akselerasi Amanatul Ummah Surabaya', '2009', 'Mojokerto', '', 'Bumi marina emas utara blok-F 119', null, null, null, null, null, 'ne_iftita@yahoo.com', '85736552994', 'Mendengarkan Musik, membaca', 'Jadi Muslimah yang Intelek', 'Ada banyak Jalan menuju Roma', null, null, null, null, null, 'Moh. Munir/Nurul Umi Baroroh', 'SD/MA', 'Wiraswasta/Guru TK', null, null, null);
INSERT INTO `sim_alumni` VALUES ('1510100701', '1510100701', 'Fiki rahmah Fadlilah', 'Fiki', null, 'Ponorogo', '0000-00-00', 'MBI Amanatul Ummah Surabaya', '2010', 'Malang', 'Ponorogo', 'Asrama ITS Blok J-321', null, null, null, null, null, 'fiki.fadlilah@gmail.com ', '81358262765', 'menbaca', 'Guru', 'La Tahzan Innallahamaana', null, null, null, null, null, 'Mudafir/Nila Rukhama', 'S1/SMA', 'Guru swasta/ ibu rumah tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('1510100703', '1510100703', 'Bidayatul Afifah', 'Biedha', 'P', 'Gresik', '0000-00-00', 'MA Unggulan Amanatul Ummah Surabaya', '2010', 'Surabaya', 'Ds. Tanggul Rejo Kec. Manyar Kab. Gresik Jatim', 'Keputih Gang 3C No.17', null, null, null, null, null, 'Alief_hydhayatie5@ymail.com ', '85745151707', 'Membaca', 'Menjadi oranng yang ASHOKA(Alim, Sholeh, Kafi)', 'ULTRASONIK(Unggul, Trampil, Sopan, Intelektual, Cendikiawan)', null, null, null, null, null, 'Drs. H. katsur Arif M.pd/H. Siti Maftukhah', 'S2/MA', 'Guru/Wiraswasta', null, null, null);
INSERT INTO `sim_alumni` VALUES ('1511100701', '1511100701', 'Liziyatin Nasihah', 'Pipit', 'P', 'Gresik', '0000-00-00', 'SMA Unggulan Amanatul Ummah Surabaya ', '2011', 'Jember', ' Gresik', 'Asrama Mahasiswa ITS blok  J', null, null, null, null, null, 'zyzy_miel@yahoo.com ', '85731034849', ' online', ': dosen', ': succes is my right', null, null, null, null, null, 'M. Jamil (Alm) dan Nur Fi�anah', 'SMA dan SMA', 'Wiraswasta', null, null, null);
INSERT INTO `sim_alumni` VALUES ('1511100702', '1511100702', 'Dian Fitriani', 'dian', 'P', 'Surabaya', '0000-00-00', 'MA Akselerasi Amanatul Ummah Surabaya', '2011', 'Mojokerto', 'Kp. Sobang RT 01/01 Des. Sobang Kec. Sobang Pandeglang Banten', 'Asrama Mahasiswa ITS blok  J', null, null, null, null, null, 'Dian_fitriani25@gmail.com ', '85718559232', 'Browsing, Menulis ', 'Penulis', ' if you can dream it, you can do it', null, null, null, null, null, 'Ruhyaman  dan Meliawati', 'S1 dan S1', 'PNS dan PNS', null, null, null);
INSERT INTO `sim_alumni` VALUES ('1511100703', '1511100703', 'Din Dzakamala fafi Rohmatillah', ' dindza  ', 'P', 'Probolinggo', '0000-00-00', 'MA Akselerasi Amanatul Ummah Surabaya', '2011', 'Mojokerto', 'Jln. Ky. Hasim Mas no.82 Curahgrinting Probolinggo', 'Asrama mahasiswa ITS  blok-H', null, null, null, null, null, ' rhieoran.chocho@gmail.com ', '85645679030', ' Bermain, baca novel', ': Dosen', 'Yakin bisa, passti bisa', null, null, null, null, null, 'Zainullah zen Murtadloh dan Farida', 'SMA dan SMP', 'Tenaga kontrak dan ibu rumah tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('2108100706', '2108100706', 'Darmawan Rasyid Hadi Saputra', 'Wawan', 'L', 'Bima', null, 'SMA Unggulan Amanatul Ummah Surabaya ', '2008', 'Madura', 'Jl. Batam 25 Solo', 'keputih gg. Makam D-2', null, null, null, null, null, 'dar_clue@yahoo.com', '81325888599', 'Renang', 'Mufti', 'Hidup mulia atau mati syahid', null, null, null, null, null, 'Bp. Azhar / Ibu Rosminah', 'S1 / SMA', 'Pegawai', null, null, null);
INSERT INTO `sim_alumni` VALUES ('2108100707', '2108100707', 'Bayu Wijaya', 'Bayu', 'L', 'Serang', null, 'SMA Unggulan Amanatul Ummah Surabaya ', '2008', 'Madura', 'Jl. Selorejo No. 21 PLTU Suralaya', 'keputih perintis VI no 28', null, null, null, null, null, 'by_you01@yahoo.co.id', '85691490800', 'Berenang, Badminton', 'Teknisi mesin', 'Hidup mulia atau mati syahid', null, null, null, null, null, 'Joko Widodo / Saswiyah', 'STM / SMA', 'Karyawan / Ibu rumah tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('2108100708', '2108100708', 'Abdul Ghoffar', 'Ghoffar', 'L', 'Ds. Sawo', null, 'MA Unggulan Amanatul Ummah Surabaya', '2008', 'Surabaya', 'Ds. Sawo, Kec. Dukun, Kab. Gresik', 'keputih 1 no. 23', null, null, null, null, null, 'adulgf@gmail.com', '83832378519', null, null, 'Kemarin adl. Kenangan, skrg adl. Kenyataan, bsk adl. harapan', null, null, null, null, null, 'M. Sholihin', null, null, null, null, null);
INSERT INTO `sim_alumni` VALUES ('2109100701', '2109100701', 'Ari Fadlansyah Jaya Subrata', 'Ari', 'L', 'Garut', null, 'SMA Unggulan Amanatul Ummah Surabaya ', '2009', 'Madura', 'Jl. Pembangunan Blok 2 Komplek Grita Bahagia Jayawaras , Tarogong Kidul, Garut Jabar', 'Asrama Mahasiswa ITS blok i', null, null, null, null, null, 'm4rs_l0v3r5@yahoo.com', '0852 2399 3994', 'Baca', 'Bikin Perusahaan pesawat', 'Struggle to the Death', null, null, null, null, null, 'Ayi Tatung Kosmara Jaya/Vivi Afiati Fitri', 'SMA/S1', 'Wiraswasta/Ibu Rumah Tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('2109100706', '2109100706', 'Siti Nafa\'ati', 'Nafa', 'P', 'Sidoarjo', null, 'MA Unggulan Amanatul Ummah Surabaya', '2009', 'Sidoarjo', 'Jl Pasir Raya RT 3 RW 1 No. 12 Wedi Gedangan Sidoarjo', 'jl. Tegal mulyorejo baru 66 ', null, null, null, null, null, 'zynav.sweet@gmail.com', '87854115386', 'Membaca', 'Dokter', 'Hidup tu gerak, kalo ga mau gerak jangan hidup', null, null, null, null, null, 'Abdillah/Ismaroh', 'MTs/MI', 'Swasta', null, null, null);
INSERT INTO `sim_alumni` VALUES ('2110100710', '2110100710', 'Agustian  Haris Syihabuddin', 'Haris', 'L', 'lampung', '0000-00-00', 'MA Unggulan Amanatul Ummah Surabaya', '2010', 'Surabaya', 'Lampung', 'kejawan gebang 1/5', null, null, null, null, null, 'zuhudan@yahoo.com', '81392312763', 'membaca dan mendengarkan', 'Orang yang berguna bagi yang lainnya', 'Segala sesuatu mari kita niatkan sebagai ibadah', null, null, null, null, null, 'Sutjipto/Muniroh', 'Diploma/Diploma', 'Pensiun/Guru', null, null, null);
INSERT INTO `sim_alumni` VALUES ('2111100701', '2111100701', 'Ksatria Mustari Is Haq', 'Isat', 'L', ' Bandung', '0000-00-00', 'MBI Amanatul Ummah Surabaya', '2011', 'Jember', 'Kop. Unisba UII Nomor 176 Jatihandap Cicaheum Bandung ', ' Asrama Mahasiswa ITS', null, null, null, null, null, 'isat.17.Des@gmail.com ', ' 085 722 309006', 'Olah raga, fitness', ': Bisnis man/ Pengusaha', ': Isykariiman Aumut Syahidan', null, null, null, null, null, 'Djedjen Djaenudin dan Kulsum Haris', 'S 2 dan MA', 'Pensiun dan Guru Madrasah', null, null, null);
INSERT INTO `sim_alumni` VALUES ('2111100702', '2111100702', 'Muhammad Irsyadudin', 'Irsyad', 'L', 'Grobogan', '0000-00-00', 'MA Akselerasi Amanatul Ummah Pacet', '2011', 'Jakarta', 'Sudimara Pinang � Pinang � Tangerang ', 'Asrama Mahasiswa ITS', null, null, null, null, null, null, '85324791579', 'Main tenis meja', 'Menjadi anak sholeh, berbakti pada orang tua, rajin menabung, sukses di dunia dan akhirat, masuk surga, mendapat ridlo Alloh', 'Sebagai manusia kita hanya bisa berihtiar tapi hasil akhir ialaah kuasa Alloh. Alloh tidak akan mencoba melebihi kuasa hamba-Nya', null, null, null, null, null, 'Abu Chamid Sukandar dan Rosmiyati Mufarochah', 'Keagamaan dan pesantren', 'Pegawai Swasta dan Ibu Rumah Tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('2111100703', '2111100703', 'Muhammad Agilo Badai Bestari', 'Agil', 'L', 'Kediri', '0000-00-00', 'MBI Amanatul Ummah Pacet', '2011', 'Yogyakarta', 'Jalan Welirang Gang Kelinci no. 6 Pare Kediri', ' Asrama Mahasiswa ITS', null, null, null, null, null, 'ag1i_emoboy7@yahoo.co.id ', '85732104953', 'futsal, sepak bola', ': Insinyur', ': kecil bahagia, masa muda mencari pahala, tua kaya raya, mati masuk surga', null, null, null, null, null, 'Andhoko S. dan Nurhayati', 'SI dan S1', 'Pegawai BUMN dan Ibu Rumah Tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('2209100701', '2209100701', 'Eri Nur Rahman', 'Erik', 'L', 'Pati', null, 'SMA Unggulan Amanatul Ummah Surabaya ', '2008', 'Yogyakarta', 'Ds. Pekalongan RT. 04 RW. 02 Winong Pati', 'Asrama ITS Blok E', null, null, null, null, null, 'eriq_11@yahoo.com', '89675737669', 'Main music, main bola, nonton TV', 'Jadi orang sukses dunia-akhirat', 'Fight like a knight, shine like a sun', null, null, null, null, null, 'Subhi / Rubiyah', 'PG A / SD', 'Dagang', null, null, null);
INSERT INTO `sim_alumni` VALUES ('2209100703', '2209100703', 'Fadil Muhammad', 'Fadil', 'L', 'Serang', null, 'MBI Amanatul Ummah Pacet', '2009', 'Semarang', 'Taman Puri Indah b4 No. 14 Serang Banten', 'keputih gg 2C no 9', null, null, null, null, null, 'elektro.anakayam_riga@yahoo.co.id', '0813 1662 7621 ', 'Bulutangkis', 'Rektor', 'Jangan Pernah Merasa Puas', null, null, null, null, null, 'Harius/Yetti', 'SAKMA/SMA', 'Karyawan Swasta/Ibu Rumah Tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('2209100706', '2209100706', 'Evi Rahmawati', 'Evi', 'P', 'Mojokerto', null, 'MBI Amanatul Ummah Pacet', '2009', 'Semarang', 'Claket, Pacet, Mojokerto', 'Asrama Mahasiswa ITS H 418', null, null, null, null, null, 'ephi.mutzz@gmail.com', '085 7329 70984', 'Membaca', 'Be Benefit People', 'Always spirit to Face this Live', null, null, null, null, null, 'H Samadi/Hj Wasiah', 'PGA', 'Pegawai Negeri', null, null, null);
INSERT INTO `sim_alumni` VALUES ('2210100703', '2210100703', 'Tsabit Mustarin', 'Aby', 'L', 'Makasar', '0000-00-00', 'SMA Unggulan Amanatul Ummah Surabaya ', '2010', 'Jember', 'Jl.Ijtihad No 15 makassar', 'Gebang kidul no. 59', null, null, null, null, null, 'Aby.makssar@gmail.com', '85256880356', 'Futsal, baca koran', 'Dosen', 'manfaatkan waktu sebaik mungkin', null, null, null, null, null, ' Mustarinfarida latief', ' -', ' Dosen /Guru', null, null, null);
INSERT INTO `sim_alumni` VALUES ('2210100704', '2210100704', 'Achmad Royyan damanhuri ', 'Royyan', 'L', 'Sampang', '0000-00-00', 'MA Unggulan Amanatul Ummah Surabaya', '2010', 'Surabaya', 'Sampang madura', 'Gebang kidul no. 59', null, null, null, null, null, 'RY_VYRES@yahoo.com', '85746769000', 'Jalan jalan', 'Orang yang berguna bagi yang lainnya', 'Cintailah seseorang apa adanya', null, null, null, null, null, 'Faqihul Muqaddam/Elvin Soviati', 'SMA/SMA', 'Guru Ngaji/Ibu Rumah Tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('2211100701', '2211100701', 'Nani� Lathifatun Nada', 'nanik', 'P', 'Jeddah', '1993-04-28', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', '2011', 'Jakarta', 'Dsn. Kepanjen Ds. Laju kidul Singgahan Tuban RT 15 RW 8', 'Asrama Mahasiswa ITS', null, null, null, null, null, 'neda.10.mmy@gmail.com ', '85732236656', 'menyanyi', 'bekerja di BPPT', 'No pain No gain', null, null, null, null, null, 'Ni�am Mawardi dan SB. Natijah', 'D-3 dan SLTA', 'Pedagang dan Ibu Rumah tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('2211100702', '2211100702', 'Idrus Fatkhul Huda', 'Idrus / Huda', 'L', 'Tulungagung', '0000-00-00', 'MBI Amanatul Ummah Surabaya', '2011', 'Malang', ' Ds Padangan Rt 01/Rw 03 Kec. Ngantru Kab. Tulungagung ', 'Asrama Mahasiswa ITS', null, null, null, null, null, 'idrusfatkhulhuda@yahoo.com ', '085 755 546519', 'Membaca, Sepak bola', ': Insinyur', ': selalu belajar dan belajar serta berusaha. Mensyukuri segala nikmat', null, null, null, null, null, 'M. Tamam dan Maratus Sholichah', 'SD', 'tani dan ibu rumah tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('2211100703', '2211100703', 'Muhammad Fadli Azis', 'Fadli', 'L', ' Lampa', '0000-00-00', 'MBI Amanatul Ummah Pacet', '2011', 'Semarang', ' Jalan Poros Pinang Polmas No. 77 Kel Lampa, Kec. Duampanua, Kab. Pinrang, Prov. Sulawesi Selatan 91253', 'Asrama Mahasiswa ITS', null, null, null, null, null, 'fadhly2008@yahoo.com ', ' 085 256 035729', ' Membaca, tenis meja', ': Insinyur', ': Jangan pernah mengecewakan orang tua', null, null, null, null, null, 'H. Abd. Azis dan Hj. Hasnawati', 'SMA dan SMA', 'Wiraswasta ', null, null, null);
INSERT INTO `sim_alumni` VALUES ('2411100701', '2411100701', 'Riza Aris Hikmadiyar', 'Riza', 'L', 'Jombang', '0000-00-00', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', '2011', 'Bogor', 'Kalijaring Kalikejambun Tembelang Jombang', 'Asrama Mahasiswa ITS', null, null, null, null, null, 'arek_guanteng//@yahoo.com ', '085 655 150222', 'Main tenis meja', 'Dosen', 'Do the best, but don�t think the best', null, null, null, null, null, 'Abdul Fatah Munaseh dan Masruhah ', 'S 1 dan D 3', 'PNS dan Ibu Rumah tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('2411100702', '2411100702', 'Muhammad Iqbal Assidqi ', 'Iqbal', 'L', 'Garut', '0000-00-00', 'MA Akselerasi Amanatul Ummah Pacet', '2011', 'Solo', 'kp. Cianten RT 01/RW 01 Desa Sukamukti Kec. Banyuresmi Kab. Garut', ' Asrama Mahasiswa ITS', null, null, null, null, null, 'iqbalas@muslim.com ', '8814058364', 'Baca, Online, Badminton', 'Insinyur', 'Hidup adalah perjuangan', null, null, null, null, null, 'Asep Furqon dan Siti Nuraisah', 'S1 dan MA', 'PNS dan Ibu Rumah tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('2411100703', '2411100703', 'Khusnul Khotimah', 'khusnul', 'P', 'Tesal', '0000-00-00', 'MBI Amanatul Ummah Surabaya', '2011', 'Jember', ': Jalan Raya Banjaran no.17 RT 10 RW 03 kec. Talang tegal jateng', 'Asrama Mahasiswa ITS blok H', null, null, null, null, null, 'khusnul.khotimah60@gmail.com ', '85795743537', 'Membaca dan mendengarkan musik', ': Ahli Fisika', ': Jangan karena sulit anda tidak berani justru karena anda tidak berani segalanya menjadi sulit.', null, null, null, null, null, 'Sanali dan Siti aminah', 'SMP dan SMA', 'Pengangguran dan pedagang', null, null, null);
INSERT INTO `sim_alumni` VALUES ('2508100702', '2508100702', 'Ahmad Fathu Zuhri', 'Zuhri', 'L', 'Lamongan', null, 'MA Akselerasi Amanatul Ummah Surabaya', '2008', 'Sidoarjo', 'Latukan Karanggeneng Lamongan', 'keputih gg 3 ', null, null, null, null, null, 'afz.gronjong@gmail.com', '85648528151', 'Membaca dan bermain', 'Ilmuwan', 'Be the best', null, null, null, null, null, 'Suyoto / Imroatun', 'SMA / SMA', 'Petani / Ibu rumah tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('2508100703', '2508100703', 'Ali Ismail P', 'Ali', 'L', 'Sukabumi', null, 'MA Akselerasi Amanatul Ummah Surabaya', '2008', 'Mojokerto', 'Jl. RH. Didi Sukardi 01/04 SMI', 'Sukolio Park Regency 2-19', null, null, null, null, null, 'Arthur_bright_side@yahoo.com', '85732575735', 'Footsal, Basket', 'Jadi orang sukses', 'Hidup hanya sekali, hiduplah yang berarti', null, null, null, null, null, 'Odang Rosdianon', 'STM', 'PNS', null, null, null);
INSERT INTO `sim_alumni` VALUES ('2508100705', '2508100705', 'Afif Burhanuddin', 'Afif', 'L', 'Malang', null, 'MA Unggulan Amanatul Ummah Surabaya', '2008', 'Surabaya', 'Jrebeng Kidul, Wonoasih, Probolinggo', 'SPR Blok B no 5', null, null, null, null, null, 'afif.hans@gmail.com', '85646890182', 'Membaca buku, jalan-jalan', 'Pengusaha', 'Nikmati hidup apa adanya', null, null, null, null, null, 'Drs. Ali Shodiq / Dra. Siti Fatimah S.Pd.', 'S1 / S1', 'PNS', null, null, null);
INSERT INTO `sim_alumni` VALUES ('2508100706', '2508100706', 'Fajri Arfi', 'Arfi', 'L', 'Bengkulu', null, 'MBI Amanatul Ummah Pacet', '2008', 'Yogyakarta', ' Jl. Gelatik X No. 73 RT. 16 RW. 05 Cempaka Permai Bengkulu', 'Sukolio Park Regency 2-19', null, null, null, null, null, 'Arfi_IE08@yahoo.co.id', '85232983312', 'Membaca, sepak bola', 'Menjadi orang yang berguna bagi nusa dan bangsa', 'We are not the best, but have to be better', null, null, null, null, null, 'Efiwarman / Arniswati', 'S1 / D3', 'Guru SMA N 4 Bengkulu / Guru SMP N 2 Bengkulu', null, null, null);
INSERT INTO `sim_alumni` VALUES ('2509100702', '2509100702', 'Ahmad Zaki Irfan', 'Zaki', 'L', 'Jakarta', null, 'MA Akselerasi Amanatul Ummah Surabaya', '2009', 'Mojokerto', 'Jakarta', 'Wisma permai Gangx No 16', null, null, null, null, null, 'smiles_factory@yahoo.com', '89675609526', 'Futsal, Catur', 'Wirausaha/ Job Maker', 'Menjadi Salah satu Yang Terbaik', null, null, null, null, null, 'Hasan Ismail/Siti Muslimah', 'S1/MA', 'Pensiunan/Ibu Rumah Tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('2509100703', '2509100703', 'Ade Indriawan', 'Ade/Wawan', 'L', 'Bekasi', null, 'MA Unggulan Amanatul Ummah Surabaya', '2009', 'Sidoarjo', 'Jl. Pulo Gebang Cakung Jakarta Timur', 'keputih makam blok D no.16', null, null, null, null, null, 'ade.indrawan@yahoo.com', '0856 9306 0270', 'Membaca', 'Peneliti', null, null, null, null, null, null, 'H.M Sani Muhsin, SH/Titin Suhartin, BA', 'Sarjana Hukum/Sarjana Muda', 'PNS/PNS', null, null, null);
INSERT INTO `sim_alumni` VALUES ('2509100705', '2509100705', 'Fahmi Ahmad', 'Fahmi', 'L', 'Serang', null, 'MA Akselerasi Amanatul Ummah Pacet', '2009', 'Solo', 'Jl AL Gang Hajirijin No. 119 Podok Gede Bekasi', 'Asrama Mahasiswa ITS blok I 301', null, null, null, null, null, 'ahmad_shefiroth@yahoo.de', '085 7334 71960', 'Baca komik, surfing di internet ', 'Manager', 'Setiap Kejadian Pasti ada hikmahnya', null, null, null, null, null, 'Ahmad Satori/Ru\'fah Abdullah', 'Professor/S2', 'Dosen/Dosen', null, null, null);
INSERT INTO `sim_alumni` VALUES ('2509100707', '2509100707', 'Eka Rosyidatul Hayati', 'Rosyi', 'P', 'Lamogan', null, 'MBI Amanatul Ummah Pacet', '2009', 'Semarang', 'Sendangagung-Paciran-Lamongan', 'keputih gg. 1D no. 47A', null, null, null, null, null, 'e_rosypoenya@yahoo.com', '0857 3115 1431', 'Olahraga (Badminton)', null, 'Hidup adalah Memilih Suatu Jalan', null, null, null, null, null, 'Ahmad Muhtar', 'S.Pd', 'Guru Swasta', null, null, null);
INSERT INTO `sim_alumni` VALUES ('2509100708', '2509100708', 'Chandra Putra Hadadi', 'Chandra', 'L', 'Surabaya', null, 'MBI Amanatul Ummah Pacet', '2009', 'Yogyakarta', 'Banyuwangi', 'kejawan gebang gg 02 no 15', null, null, null, null, null, 'chandra.putra09@gmail.com ', '81331804240', 'Nonton, Main Bola', 'Ingin jadi Preman\'s', 'Pria Punya Selera', null, null, null, null, null, 'Imam Hadadi (Alm)/Marsini', 'SMA', null, null, null, null);
INSERT INTO `sim_alumni` VALUES ('2510100701', '2510100701', 'Mansur maturidi Arief', 'mansur', 'L', 'Sungguminasa', '0000-00-00', 'SMA Unggulan Amanatul Ummah Surabaya ', '2010', 'Madura', 'Puri palanggan mas blok B no 4 Gowa Sulsel', 'Gebang kidul no. 59', null, null, null, null, null, 'eddie_immeampe@yahoo.com', '85745990957', 'Ngobrol bareng teman,baca,jalan jalan', 'entepreneur muslim', 'Treat other as you want to be treated', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `sim_alumni` VALUES ('2510100702', '2510100702', 'Hilyatun Nuha', 'Hielya', 'L', 'Gresik ', '0000-00-00', 'MBI Amanatul Ummah Surabaya', '2010', 'Malang', 'Jl. Masjid Jami� yai Gede No. 03 Bungah Gresik', 'Asrama Mahasiswa ITS', null, null, null, null, null, 'kiehl_sweet@yahoo.com', '85733461422', 'Listening Music, Reading a Novel', 'Dosen', ' If I can dream it. I can do it', null, null, null, null, null, 'Moh. Cholil Chozin/Atawa Saudah', 'Diploma 2/MA', 'Guru (PNS)/ibu Rumah Tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('2510100703', '2510100703', 'Zakki Wirasenjaya', 'Zakki', 'L', ' Bandung', '0000-00-00', 'MBI Amanatul Ummah Surabaya', '2010', 'Malang', 'Jalan Akasia Raya p3/5 Taman Ciamngga, Bogor Jawa Barat', 'Asrama Mahasiswa ITS', null, null, null, null, null, 'zwirasenjaya@yahoo.com/ fb: zakki wirasenjaya', '85693943309', 'Dengar Musik, Main Gitar, Olah raga', 'Entrepeneur', 'Jangan menyerah sampai kamu dinyatakan kalah', null, null, null, null, null, 'Krishna W. Wirasenjaya/Geugeu Gelaarniati', 'S1/S1', 'Swasta/Ibu rumah tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('2511100701', '2511100701', 'Muhammad Affan', 'Affan', 'L', 'Surabaya', '0000-00-00', 'MA Hikmatul Amanah Pacet', '2011', 'Surabaya', null, 'Asrama Mahasiswa ITS', null, null, null, null, null, null, '85648015372', null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `sim_alumni` VALUES ('2511100702', '2511100702', 'Mohammad Rizal Ar-Rasyid ', ' Rizal ', 'L', 'Malang', '1994-04-22', 'MBI Amanatul Ummah Pacet', '2011', 'Yogyakarta', ' Jln. Buyut Kuning No. 10 Pagerwojo, Buduran Sidoarjo', ' Asrama mahasiswa ITS  blok-G', null, null, null, null, null, null, '87851437343', ' Catur, sepak bola', ': Menjadi Orang yang berguna bagi Agama dan Bangsa', ': Orang sukses adalah orang yang bisa menerima kritik dan saran.', null, null, null, null, null, 'H. Hasbullah dan Lilis Handayani', 'SI dan S1', 'Wiraswasta dan PNS', null, null, null);
INSERT INTO `sim_alumni` VALUES ('2511100703', '2511100703', 'Marsida', ' ida', 'P', ' Situbondo', '0000-00-00', 'SMA Unggulan Amanatul Ummah Surabaya ', '2011', 'Madura', 'Trigonco Barat Asembagus Situbondo', ' Asrama Mahasiswa ITS blok J', null, null, null, null, null, null, '81913791977', ' Membaca', ': Jadi orang yang bermanfaat (guru) ', ': kesuksesan adalah guru yang paling jelek.', null, null, null, null, null, 'Tolak dan Marhama', 'SMA dan SD', 'Wiraswasta dan ibu rumah tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('3108100703', '3108100703', 'Asnawi', 'Asnawi', 'L', 'Rembang', null, 'SMA Unggulan Amanatul Ummah Surabaya ', '2008', 'Jember', 'Ds. Gesikan, Kec. Sedan, Kab. Rembang, Jateng', 'Keputih IIC / 5', null, null, null, null, null, 'asnawi89@gmail.com', '85290321936', 'Sepak bola', 'Menjadi orang yang berguna bagi nusa dan bangsa', 'Slow but sure', null, null, null, null, null, 'Khaer / Siti Aminah', 'SD / SD', 'Wiraswasta', null, null, null);
INSERT INTO `sim_alumni` VALUES ('3108100704', '3108100704', 'Ali Musa Ar Rasyid HSB', 'Ali', 'L', 'PSP', null, 'MA Akselerasi Amanatul Ummah Surabaya', '2008', 'Mojokerto', 'Medan Sumut', 'Asrama Mahasiswa ITS', null, null, null, null, null, null, '81264453278', 'Olah raga, membaca', 'Pengusaha sukses yang islami', 'Hidup hanya sekali, maka hiduplah yang berarti', null, null, null, null, null, 'Ali Imron HSB / Nur Hindun DLT', 'SMA / Sarjana Muda', 'Wiraswasta / Ibu rumah tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('3109100704', '3109100704', 'Adinegoro Choliq', 'Nero', 'L', 'Karlsruhe', null, 'MA Akselerasi Amanatul Ummah Surabaya', '2009', 'Sidoarjo', 'Jl Betet Raya Blok 2A No. 19 Tangerang', 'Klampis Sacharosa', null, null, null, null, null, 'neroaja@yahoo.com', null, 'Main Gitar', 'Insinyur', 'To Invinity and beyond', null, null, null, null, null, 'Ir. Achsin Utami Choliq/Dewi Astika', 'S2/S2', 'PNS / Apoteker', null, null, null);
INSERT INTO `sim_alumni` VALUES ('3109100706', '3109100706', 'Bytila Sobrina ', 'Tila', 'P', 'Pekanbaru', null, 'MBI Amanatul Ummah Pacet', '2009', 'Yogyakarta', 'Jl. A. Yani', 'perumahan suterejo mulyosari no 16', null, null, null, null, null, 'bytila_13@yahoo.com', '85852996960', 'Baca', 'Penulis Komik', 'Try \'n Smile', null, null, null, null, null, 'Thamrin Ahmad/Ladyana', null, 'PNS/Ibu Rumah Tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('3109100707', '3109100707', 'Faris Azhar', 'Faris', 'L', 'Subang', null, 'MA Akselerasi Amanatul Ummah Pacet', '2009', 'Solo', 'Subang, Jawa Barat', 'Bumi Marina Emas F-54', null, null, null, null, null, 'farisazhar@rocketmail.com', '83849424173', 'Membaca', 'Insinyur', 'Talk Less Do More', null, null, null, null, null, 'Ahad Muthohar/Badriyah Al-Muniroh', 'SMA/SMA', 'Wiraswasta/Ibu Rumah Tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('3111100701', '3111100701', 'Muhammad Ihsan', 'ihsan', 'L', ' Bukit tinggi', '0000-00-00', 'MA Akselerasi Amanatul Ummah Pacet', '2011', 'Solo', 'Jambu air kec banuhampu kab agam SUMBAR ', 'Asrama mahasiswa ITS  blok-G', null, null, null, null, null, 'newlightss@yahoo.co.id ', '85274056356', 'Travelling', ': ulama� umara� aghniya� intelektual', ': iduik baraka mati bariman ', null, null, null, null, null, 'Edi Wisman dan Zulfia', 'D-3  dan S1', 'Petani dan guru', null, null, null);
INSERT INTO `sim_alumni` VALUES ('3111100702', '3111100702', 'Urifatul azizah', 'azizah', 'P', 'Gresik', '0000-00-00', 'MA Hikmatul Amanah Pacet', '2011', 'Surabaya', 'Betoyoguci RT 02 RW 01 No.50 manyar gresik', 'Asrama Mahasiswa ITS', null, null, null, null, null, 'ravina_azizah4477@yahoo.com ', '85732248767', 'bermain basket ', 'Guru', 'berprestasi, sabar dan berakhlakul karimah', null, null, null, null, null, 'Mislikhan dan Munasifah', 'SLTP dan SD', 'TNI - AD dan Ibu rumah tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('3308100703', '3308100703', 'Anis Saidatul Fitri ', 'Anis ', 'p', 'Gresik', null, 'MBI Amanatul Ummah Surabaya', '2008', 'Jember', 'Gresik', 'Asrama Mahasiswa ITS Blok A-308', null, null, null, null, null, 'anissa@enviro.its.ac.id', '85730696242', 'Dengerin Musik', 'Membuat Orang Tua Bahagia akan Aku', null, null, null, null, null, null, 'Tukijo / Kusrotin', 'SPG / MI', 'Wirausaha / Ibu Rumah Tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('3308100705', '3308100705', 'Ahmad Syaiful Huda', 'Ipul', 'L', 'Pati', null, 'MA Akselerasi Amanatul Ummah Surabaya', '2008', 'Mojokerto', 'Cebolek Kidul, Margoyoso, Pati, Jateng', 'Ponpes Darus Salam Keputih SBY', null, null, null, null, null, 'Huda@enviro.its.ac.id', '83843118043', 'Main Bulutangkis', 'Ingin jadi orang sukses', 'Menjalani hidup apa adanya, bermodalkan iman dan taqwa', null, null, null, null, null, 'Sudiono / Rufi�ah', 'MA / MA ', 'Tani', null, null, null);
INSERT INTO `sim_alumni` VALUES ('3309100702', '3309100702', 'Arqol Abid', 'Abid', 'L', 'Balikpapan', null, 'SMA Unggulan Amanatul Ummah Surabaya ', '2009', 'Madura', 'Jl. Tepo No. 30 RT 09 Balikpapan', 'Keputih gang 3C no. 22', null, null, null, null, null, 'abid_arqol@yahoo.co.id', '85247225526', 'Membaca', 'Orang yang sukses dunia akhirat', 'Usaha yang keras pasti membuahkan hasil', null, null, null, null, null, 'Mas\'us Asyhadi/Arni Herlinah', 'Akademi/Sarjana', 'Guru', null, null, null);
INSERT INTO `sim_alumni` VALUES ('3309100703', '3309100703', 'Sulistiya Nengse', 'Sulis', 'P', 'Gresik', null, 'MA Akselerasi Amanatul Ummah Surabaya', '2009', 'Sidoarjo', 'Karangrejo, Manyar, Gresik', 'Keputih gang 1A no.40', null, null, null, null, null, 'sulis703@yahoo.com', '0856 4841 1911', 'Jalan-jalan', 'Jadi orang sukses', 'Optimis sampai finish', null, null, null, null, null, 'Asrikan/Maro\'ah', 'Tidak Tamat SD', 'Wiraswasta/Ibu Rumah Tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('3309100704', '3309100704', 'Achmad Ibnu Arobi', 'obi', 'L', 'Gresik', null, 'MA Unggulan Amanatul Ummah Surabaya', '2009', 'Surabaya', 'Jl. Lamongan no. 39 GKB Gresik', 'yapita', null, null, null, null, null, null, '0852 3502 4045', 'Bermain Basket, Banjari', null, null, null, null, null, null, null, 'Inis Firdaus Slame/Ulwiyah Alwan', 'Sarjana Muda/SMA', 'Karyawan/Ibu Rumah Tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('3311100701', '3311100701', 'Wahid Dianbudiyanto', 'Wahid', 'L', 'Surabaya', '0000-00-00', 'MA Hikmatul Amanah Pacet', '2011', 'Surabaya', 'Jalan Majapahit RT 03/RW 03 Gedang Rowo Pramban Sidoarjo', 'Asrama Mahasiswa ITS', null, null, null, null, null, 'dian.budiyanto@gmail.com ', '85649463142', 'Membaca buku/ melakukan hal-hal berguna', 'Ahli lingkungan ', 'Mengeluh adalah kata-kata untuk orang yang kalah, Berjuang adalah jalan menuju menang', null, null, null, null, null, 'Subijanto dan Tri Budiarti', 'S 2 dan S 2', 'PNS Guru dan PNS Guru', null, null, null);
INSERT INTO `sim_alumni` VALUES ('3311100702', '3311100702', 'Alfiyatur Rohmah', 'Alfia', 'p', 'Lamongan', '0000-00-00', 'MA Unggulan Amanatul Ummah Surabaya', '2011', 'Surabaya', 'Jln. Troknakan no.66 Sendangagung paciran', ' Asrama Mahasiswa ITS', null, null, null, null, null, 'vee_02cwet@yahoo.co.id', '87833928233', ' coret-coret, baca, SMS-an, dan browsing', ' Foreign Misjister', ' orang lain bisa, mengapa aku nggak??', null, null, null, null, null, 'Musil Efendi dan Ismiyatin', 'SMA dan SD', 'Wiraswasta', null, null, null);
INSERT INTO `sim_alumni` VALUES ('4109100702', '4109100702', 'Tatum Monika Mustikasari', 'Monik', 'P', 'Pati', null, 'MA Akselerasi Amanatul Ummah Surabaya', '2009', 'Mojokerto', 'Ds Bageng RT 01/02 Gembong-Pati Jawa Tengah', 'Asrama Mahasiswa ITS', null, null, null, null, null, 'aie_daiel@yahoo.com', '85731700649', 'Membaca', 'Dosen', 'KemanapunKaki Melangkah, Ridlo Allah Yang Dituju', null, null, null, null, null, 'Turmudzi/Munzaetun', 'SMA', 'Karyawan/Ibu Rumah Tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('4110100703', '4110100703', 'Fardan nozami Ajitama', 'Fardan', 'L', 'Bantul', '0000-00-00', 'MA Akselerasi Amanatul Ummah Surabaya', '2010', 'Mojokerto', 'Bantul yogyakarta', 'kejawan gebang 1', null, null, null, null, null, 'Fardan_btl@yahoo.com', '8985066454', null, null, 'Selalu Berusaha', null, null, null, null, null, 'Nuryahta /Nurasiyah', 'S1/SMA', 'PNS/-', null, null, null);
INSERT INTO `sim_alumni` VALUES ('4309100703', '4309100703', 'Ainu Fita Aulia', 'Ainu', 'P', 'Blitar', null, 'MBI Amanatul Ummah Surabaya', '2009', 'Malang', 'RT 02 RW 05 Bakung Udanawu Blitar', 'keputih perintis 1 no.12', null, null, null, null, null, 'ainufitaaulia@ymail.com', '8563011625', 'Baca', 'Teknisi', 'Fighting!!', null, null, null, null, null, 'M. Jufri/Mukhibbatul Mila', 'S2/S1', 'PNS/Ibu Rumah Tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('4310100701', '4310100701', 'Chairul Anam', 'Chairul', 'L', 'Paninjauan', '0000-00-00', 'MA Unggulan Amanatul Ummah Surabaya', '2010', 'Sidoarjo', 'Padangpanjang, Sumatra Barat ', 'gebang kidul no. 59', null, null, null, null, null, 'kinglautan@gmail.com', '85731014337', 'Explore', 'Berguna bagi nusa dan bangsa', 'Jangan katakan �Tidak� sebelum mencoba!!!', null, null, null, null, null, 'Murdanis/Janewar', 'SLTP/SLTA', 'Petani/Guru', null, null, null);
INSERT INTO `sim_alumni` VALUES ('4310100702', '4310100702', 'Ade Lido Tanizar', 'Ade', 'L', 'Sorong', '0000-00-00', 'MBI Amanatul Ummah Pacet', '2010', 'Yogyakarta', 'kedung sumber RT 4 RW 1 Sumberdadi Mantap lamongan', 'gebang kidul no. 59', null, null, null, null, null, 'adel0011@gmail.com', '81330640099', 'komputer', 'ahli komputer', 'Learn from yesterday,live for today hope ,hope for tomorrow', null, null, null, null, null, 'Cahairil Tanizar/siti Romlah', 'SMA/SMA', ' -/wirawasta', null, null, null);
INSERT INTO `sim_alumni` VALUES ('4310100703', '4310100703', 'Yuni Ari Wibowo', 'Yuni', 'L', 'Purworejo', '0000-00-00', 'MBI Amanatul Ummah Surabaya', '2010', 'Malang', 'Brunorejo, Bruno, Purworejo, Jawa Tengah', 'keputih gg 1 A', null, null, null, null, null, 'yuniariwibowo@ymail.com ', '85749502459', 'Membaca Buku', 'Dosen', 'Fastabiqul Khoirot', null, null, null, null, null, 'Tukija/Binariyah', 'S1/SMA', 'Guru/Wiraswasta', null, null, null);
INSERT INTO `sim_alumni` VALUES ('5108100708', '5108100708', 'Abdullah Mansur', 'Mansur', 'L', 'Blitar', null, 'MA Unggulan Amanatul Ummah Surabaya', '2008', 'Surabaya', 'Genuhwatu RT. 04 RW. 01 Ngoro Jombang', null, null, null, null, null, null, 'fbm_heat@yahoo.com', null, 'Olah raga, main music, main game, baca', 'Hidup bahagia dunia dan akhirat dan jadi Programmer', 'Santai tapi pasti, tersembunyi tapi berisi', null, null, null, null, null, 'Ahmad Mubasir', ' SD', 'Tani', null, null, null);
INSERT INTO `sim_alumni` VALUES ('5109100702', '5109100702', 'Adam', 'Adam', 'L', 'Penarah', null, 'MA Unggulan Amanatul Ummah Surabaya', '2009', 'Surabaya', 'Pulau Seraya, Degung', 'jln. Keputih tegal timur 42-44', null, null, null, null, null, 'el_zhiddy@rocketmail.com', '81270270777', 'Baca, Tulis, Olahraga', 'Aktivis, dan Bermanfaat', 'Aku tahu akan mati, tapi bukan untuk hari ini', null, null, null, null, null, 'Abd Gani/Aisyah', 'SD/SMP', 'Nelayan/Ibu Rumah Tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('5109100704', '5109100704', 'Aldy Ahsandin', 'Aldy', 'L', null, null, 'MBI Amanatul Ummah Surabaya', '2009', 'Malang', 'Jl Warung Kota UH IV 751 Yogyakarta', 'keputih gg 2A no 26 ', null, null, null, null, null, 'Gonaku_sense@yahoo.com', '0856 3065 416', 'Jalan-jalan', null, null, null, null, null, null, null, 'M Junaidi Syakir/Hasta Dewi', 'S1/S1', 'Guru/Guru', null, null, null);
INSERT INTO `sim_alumni` VALUES ('5109100709', '5109100709', 'Anik Hanifatul Azizah', 'Ifa', 'P', 'Kediri', null, 'MBI Amanatul Ummah Surabaya', '2009', 'Jember', 'Purwosari, Kediri', 'Bumi marina emas utara blok-F 119', null, null, null, null, null, 'izza_ai@ymail.com', '0857 3072 4260', 'Membaca, Menyanyi', 'Orang Sukses', 'Santai, Serius, Sukses', null, null, null, null, null, 'Abdul Kholiq/Siti Romlah', 'Sarjana/SLTA', 'PNS/Wiraswasta', null, null, null);
INSERT INTO `sim_alumni` VALUES ('5110100701', '5110100701', 'Tirta Taruna Ramadhan', 'Adhan', 'P', 'Gresik', '0000-00-00', 'MA Akselerasi Amanatul Ummah Surabaya', '2010', 'Mojokerto', ' Jalan Jemur Wonosari GG. IAIN No.9b, Wonocolo Surabaya', 'jl. Jemur wonosari gg.iain no. 9b', null, null, null, null, null, 'adhanjr@yahoo.com', '85655022036', 'Sepak bola, karikatur/Drawing', 'Orang yang berguna bagi bangsa dan islam', ' Tunjukkan apapun itu dengan niat Lillahi Ta�ala dan yakin  Allah akan    memberi yang terbaik', null, null, null, null, null, 'Yoninf Abri/Yusirotin', 'S1/S1', 'Guru Swasta/Guru TK', null, null, null);
INSERT INTO `sim_alumni` VALUES ('5110100702', '5110100702', 'Nur ahmad Wahid', 'Nawa', 'L', 'Selayar', '0000-00-00', 'MBI Amanatul Ummah Surabaya', '2010', 'Jember', 'Makasar,BTN Sakinah Daya', 'Gebang kidul no. 59', null, null, null, null, null, 'nurahmadwhd@gmail.com', '85242250956', 'Main Game', 'Programmer', ' -', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `sim_alumni` VALUES ('5110100704', '5110100704', 'Fazar Rohman', 'Fazar', 'L', 'Cirebon', '0000-00-00', 'MA Akselerasi Amanatul Ummah Surabaya', '2010', 'Mojokerto', 'Desa Cinakalang Kec Dukupuntang Kab cirebon', 'Gebang kidul no. 59', null, null, null, null, null, 'Vazar@gmail.com', '81947001721', 'Nonton Film Korea', 'Dosen dan Pilot', ' La Tahzan Innallahamaana', null, null, null, null, null, 'Atep Rasmana/Khotimah', 'SMP?MTs', 'Karyawan Swasta/Ibu Rumah Tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('5110100705', '5110100705', 'Wiryo Febdila', 'Ryo', 'L', ' Penyakalan', '0000-00-00', 'MA Akselerasi Amanatul Ummah Surabaya', '2010', 'Mojokerto', 'Komplek SDN 08 salayo Sumatra barat', 'Asrama Mahasiswa ITS', null, null, null, null, null, 'Vazar@gmail.com', '85668948448', 'Ngenet, badminton', 'Pengusaha Sukses', 'Kehidupan bagai rodaa', null, null, null, null, null, 'Windraeli (alm)/Dismar', 'SMA/SMA', 'PNS/ -', null, null, null);
INSERT INTO `sim_alumni` VALUES ('5111100701', '5111100701', 'Muhammad Iqbal Rustamadji ', 'Iqbal', 'L', 'Jakarta', '1993-04-23', 'MA Akselerasi Amanatul Ummah Pacet', '2011', 'Solo', 'Jati Benind Estate blog cg / 12 Bekasi', 'Asrama mahasiswa ITS blok G', null, null, null, null, null, 'rustamadji.iqbal@gamail.com ', '085717559187 / ', 'Olahrga, maen komputer', 'orang sukses dan masuk surga', 'man jadda wa jadaa', null, null, null, null, null, 'Sonhaji S dan Ermin R', 'S-2 dan D-3', 'Manager Perusahaan dan Karyawan bank', null, '', null);
INSERT INTO `sim_alumni` VALUES ('5111100702', '5111100702', 'Didik Purwanto ', 'Didik', 'L', 'Ngawi', '2016-05-10', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', '2011', 'Mojokerto', 'RT 02 RW 5 Dusun Playaran Desa kendal Kec. Kendal Jatim', ' Asrama mahasiswa ITS  blok-G', '', '', '', '', '', 'hucidadidika_27@yahoo.co.id', '85854484073', 'Catur', 'programer', 'Berkarya di tengah keterbatasan adalah sisi lain dari kejayaan.', 'Juara 1 Lomba Catur', 'Institut Teknologi Sepuluh Nopember', 'Teknik Informatika', 'CEO Bukalapak.com', 'DAGRI CSSMoRA ITS', 'Suradi, SPd.i dan Sri Rumini', 'SI dan SLTP', 'Guru (PNS) dan ibu rumah tangga', '', '', '2016-05-08 21:33:40');
INSERT INTO `sim_alumni` VALUES ('5111100703', '5111100703', 'Muhammad Yusuf', 'Yusuf', 'L', 'Pati', '0000-00-00', 'MA Akselerasi Amanatul Ummah Pacet', '2011', 'Jakarta', 'Desa Angkatan Kidul Rt 01/Rw 03 Kec. Tambakromo Kota Pati Jawa Tengah', 'Asrama Mahasiswa ITS', null, null, null, null, null, 'muha.katanese@gmail.com', '87833928223', 'Mendengarkan musik', 'Programmer', 'Jangan meniru ayam yang hidupnya dari pagi buta sampai petang hanya untuk mencari makan, tetapi jik makanan itu kita ibaratkan ilmu maka ikutilah ketekunan ayam untuk mencari makan, tak kenal lelah', null, null, null, null, null, 'Supadi dan Muzayanah ', 'SD dan SD', 'Wiraswasta dan Wiraswasta', null, 'assets2/profpic/511-5111100703-08052016170556.jpeg', null);
INSERT INTO `sim_alumni` VALUES ('5111100704', '5111100704', 'Alfian Maulana Azhari', 'Alfian', 'L', 'Sidoarjo', '0000-00-00', 'MA Unggulan Amanatul Ummah Surabaya', '2011', 'Surabaya', 'Kauman Pagerwojo Rt 05/Rw 02 nomor 19 Buduran Sidoarjo', 'Asrama Mahasiswa ITS', null, null, null, null, null, ' kejemex@rocketmail.com', '85731648030', 'Membaca', 'Programmer ', ' lebih baik mati membawa inman dari pada hidup membawa dosa', null, null, null, null, null, 'H. Achmad Anwar Ehoni', 'S 1', 'Wiraswasta ', null, null, null);
INSERT INTO `sim_alumni` VALUES ('5208100706', '5208100706', 'Ah. Wirayudha', 'Wira / Yudha', 'L', 'Lamongan', null, 'MA Akselerasi Amanatul Ummah Surabaya', '2008', 'Sidoarjo', 'Ds. Sendangagung Kec. Paciran, Kab. Lamongan', 'keputih tegal timur', null, null, null, null, null, 'yudhaqw@gmail.com', '85655240657', 'Sepak Bola, Sepeda', null, 'Berjuang tanpa akhir', null, null, null, null, null, 'Mustaji / Aliyatun', 'SMA / S1', 'Wiraswasta / Guru', null, null, null);
INSERT INTO `sim_alumni` VALUES ('5208100707', '5208100707', 'Fia Mahanani', 'Fia', 'P', 'Blitar', null, 'MBI Amanatul Ummah Pacet', '2008', 'Semarang', 'Blitar', 'Asrama Mahasiswa ITS Blok D-204', null, null, null, null, null, 'f227_314@yahoo.co.id/phinice.sista@gmail.com/fia_m08@is.its.ac.id', '85730080390', 'Badminton', 'Sistem Analis ', 'La Tahzan wala taiasu, Innallaha ma�ash Shobirin', null, null, null, null, null, 'Hepriyanto', 'S1', 'PNS', null, null, null);
INSERT INTO `sim_alumni` VALUES ('5208100709', '5208100709', 'Andi Kurnia Fitriansyah', 'Andi', 'L', 'Jakarta', null, 'MBI Amanatul Ummah Surabaya', '2008', 'Malang', 'Jl. Masjid Al-Wahyu No. 94 Depok', 'Gg 1D/12', null, null, null, null, null, 'andead132gmail.com', '85714010937', 'Baca, Maen game', 'Programmer, Hacker, Game designer', 'Jalani hidup bagai air yang mengalir', null, null, null, null, null, 'Suraji / Amah Sukamah', 'SMA / SMA', 'Karyawan Swasta / Ibu rumah tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('5208100710', '5208100710', 'Erliyah Nurul Jannah', 'Erly', 'P', 'Jombang', null, 'MBI Amanatul Ummah Pacet', '2008', 'Yogyakarta', 'Jombang', 'Perumdos Blok U 153', null, null, null, null, null, 'erliyah08@cs.its.ac.id', '85730098591', 'Maen badminton, basket, ngenet', 'Programmer, azwajan khoiron', 'SEMANGAT!!', null, null, null, null, null, 'Munari / Khusnul Khotimah', 'SMA / SMP', 'Tani', null, null, null);
INSERT INTO `sim_alumni` VALUES ('5209100701', '5209100701', 'Ayyub Arwani', 'Aan', 'L', 'Lamongan', null, 'SMA Unggulan Amanatul Ummah Surabaya ', '2008', 'Madura', 'Lamongan', 'keputih 1A', null, null, null, null, null, 'ayub_kit@yahoo.com', '85649902906', 'Menembak', 'Ilmuwan', 'Inovasi atau�����ketinggalan', null, null, null, null, null, 'Drs. H. Munawwir / Hj. Dewi Muyasaroh', 'S1 / SMP', 'PNS / Ibu rumah tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('5209100705', '5209100705', 'Sulistiyono', 'Sulis/Tyo', 'L', 'Gunungkidul', null, 'MA Akselerasi Amanatul Ummah Surabaya', '2009', 'Sidoarjo', 'Tlepok, Semin, Gk, Yogyakarta', 'PP darussalam keputih', null, null, null, null, null, 'mineelsa@gmail.com', '85228329907', 'Main Bola', 'Interpreneur', 'Gapailah Apapun yang Kamu Mau', null, null, null, null, null, 'Sarjo Suwito/Sutini', null, 'Tani', null, null, null);
INSERT INTO `sim_alumni` VALUES ('5209100706', '5209100706', 'Ahmad Mujahhid', 'Mujahid', 'L', 'Sukoharjo', null, 'MA Akselerasi Amanatul Ummah Surabaya', '2009', 'Mojokerto', 'Bulok RT 02/III Dukuh, Mojolaban, Sukoharjo Jawa Tengah', 'keputih tegal timur 42', null, null, null, null, null, 'mujahid.zen@gmail.com', '0857 3323 6206', 'Baca Al-Qur\'an', 'Mudir Pondok Pesantren', 'Hidup Mulia atau Mati Syahid', null, null, null, null, null, 'Suwardi/Kusmiyati', 'SMA/SMA', 'Swasta/Ibu Rumah Tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('5209100707', '5209100707', 'Ahmad Fashel Sholeh', 'Afas', 'L', 'Gresik', null, 'MA Akselerasi Amanatul Ummah Surabaya', '2009', 'Sidoarjo', 'Jl. Pemuda No. 62 Bundesan sidayu Gresik', 'jl.kejawan gebang gg 3 no.27', null, null, null, null, null, 'Afas1314@gmail.com', '0857 3213 5107', 'Bermain Catur, PS, Sepak Bola dan Berenang', 'Mati dalam keadaan Husnul Khotimah', 'Jadilah Orang yang Bermanfaat bagi Orang Lain', null, null, null, null, null, 'H. Budi Ahmad/Hj. Siti Aiyah', 'S1/S1', 'Wiraswasta/Ibu Rumah Tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('5209100708', '5209100708', 'Fauzan Fahruzzaman', 'Fauzan', 'L', 'Kupang', null, 'MA Akselerasi Amanatul Ummah Pacet', '2009', 'Solo', 'Jl Masjid At-Taqwa 106 A Duko Dolopo Madiun', 'kejawan gebang 3 no.26', null, null, null, null, null, 'fauzanfahruzzaman91@gmail.com', '85646505074', 'Maen PS, Belajar', 'Muda kaya raya, Bojo ayu, Mati Masuk surga', 'Lakukan Dengan Sebaik-baiknya', null, null, null, null, null, 'Hadi Fahruddin/ Yantiani', 'S1/S1', 'Wiraswasta/Guru', null, null, null);
INSERT INTO `sim_alumni` VALUES ('5209100711', '5209100711', 'Aldy Reza S', 'Aldy', 'L', 'Padang', null, 'MBI Amanatul Ummah Surabaya', '2009', 'Malang', 'Jl Mantrigawen Kidul No. 18 Jogjakarta', 'jl. Kejawan gebang III no.27 keputih', null, null, null, null, null, 'aldhireza@windowslive.com', '0856 4340 5407', 'Berenang, Design Grafis', 'Konsultan IT', 'Live Your life', null, null, null, null, null, 'Rizal Ridwan/Nelly Heryani', 'S1/S1', 'Konsultan/BUMN', null, null, null);
INSERT INTO `sim_alumni` VALUES ('5210100702', '5210100702', 'Muhammad Djayusman', 'Muhammad', 'L', 'Kendari', '0000-00-00', 'SMA Unggulan Amanatul Ummah Surabaya ', '2010', 'Madura', 'Makassar', 'gebang kidul no. 59', null, null, null, null, null, 'djay.si10@gmail.com', '85396543707', 'membaca', 'Pengusaha', 'Terus berjuang dan raih kesuksesan setelahnya', null, null, null, null, null, 'Achmad Rahim / Alm Norma', ' -', ' PNS / -', null, null, null);
INSERT INTO `sim_alumni` VALUES ('5210100703', '5210100703', 'Devi Nurhemaya Sari', 'Devi', 'P', 'Blitar', '0000-00-00', 'MA Akselerasi Amanatul Ummah Surabaya', '2010', 'Sidoarjo', 'Jl. DI Panjaitan kp.Sumber karya-Tanjung Pinang', 'keputih perintis gg3 RT 5 RW3 no 10', null, null, null, null, null, 'arsisna_moetz@yahoo.com', '81298127848', 'menulis', 'Menjadi Orang yang beriman dan bertawakkal', 'See the word with heart. All is well', null, null, null, null, null, 'Gufron/Nurul Huda', 'SLTP/SMA', 'Wiraswasta/Ibu Rumah tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('5210100704', '5210100704', 'Fachri Hilmi ', 'Hilmi', 'L', 'Tangerang', '0000-00-00', 'MA Akselerasi Amanatul Ummah Surabaya', '2010', 'Mojokerto', 'Kp. Pasir Awi Rt.004 Rw.02 No.63 Sukaasih Pasarkemis-Tangerang-Banten', 'gebang kidul no. 59', null, null, null, null, null, 'jr.dony@gmail.com ', '82131622393', 'Membaca, programming, tidur.', 'Menjadi orang yang bermanfaat', 'Sesuatu hal yang besar dimulai dengan bermimpi', null, null, null, null, null, 'Hariri/Ipah Hanifah', 'S1/S1', 'PNS/Ibu Rumah tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('5211100701', '5211100701', 'Nasrullah', 'Nasrul', 'L', 'Nyong', '0000-00-00', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', '2011', 'Bogor', 'Ds. Baro Nyong Kec. Bandar Baru Kab. Pidie Jaya Nangroe Aceh Darussalam', 'Asrama Mahasiswa ITS', null, null, null, null, null, 'deasrroel@gmail.com ', '085 220 214885', 'Basket dan membaca ', 'Menteri', 'Mens sana in corpore sano', null, null, null, null, null, 'Zaini dan Zuraidah', 'D 2 dan SMEA', 'PNS dan Ibu Rumah tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('5211100702', '5211100702', 'Endang Sulistiyani', ' Sulis', 'P', 'Pati', '0000-00-00', 'MBI Amanatul Ummah Surabaya', '2011', 'Malang', ' Ds. Angkatan Kidul Rt 01 /Rw 01 Kec. Tambakromo Kab. Pati', 'Asrama Mahasiswa ITS', null, null, null, null, null, null, '87833686733', 'nonton TV ', ' Jadi orang yang berguna (guru)', ' Impian membuat kita jauh dari kenyataan, tapi kenyataan tidak ada tanpa impian. Nyatakanlah  impiaa kita', null, null, null, null, null, 'Kahari dan Parsi ', 'Tidak lulus SD', 'petani dan petani', null, null, null);
INSERT INTO `sim_alumni` VALUES ('5211100703', '5211100703', 'Ahmad fikri Zamzami', 'Ahmad/Fikri', 'L', 'Surabaya', '0000-00-00', 'MA Unggulan Amanatul Ummah Surabaya', '2011', 'Surabaya', 'Jl. Arif Rafman Hakim no. 104 Keputih Sukolilo Surabaya', 'Asrama Mahasiswa ITS', null, null, null, null, null, 'ahmadFikri03@yahoo.co.id ', '85730499373', 'Main bola, menggambar ', 'sukses dunia dan akhirat', 'Jadikan hidup ini lebih berarti dan warnai hidup dengan banyak pengalaman ', null, null, null, null, null, 'Abdun Nasihin dan Khodijatul Fatiyah', 'S1/D1', 'Pensiunan PNS/ Ibu rumah tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('5211100704', '5211100704', ' Muhammad Idil Haq Amir', ' Idil', 'L', 'Pinrang', '0000-00-00', 'MBI Amanatul Ummah Pacet', '2011', 'Semarang', ' Jalan Sawitto nomor 44 Kel. Benteng Sawitto Kec. Paleteang Kab. Pinrang Sulawesi Selatan', 'Asrama Mahasiswa ITS', null, null, null, null, null, 'idilhaq@rocketmail.com ', '085 255 138313', 'Futsal, volly ball ', ': Orang yang menguasai teknologi', ': Jadikan hidup sebagai ajang perlombaan untuk mencapai piala surga', null, null, null, null, null, 'Drs. H. Muh. Amir H, M.Ag dan Hj. Sunarti Salam', 'S 2 dan S1', 'PNS dan PNS', null, null, null);
INSERT INTO `sim_alumni` VALUES ('6110100701', '6110100701', 'Eka Novi Octavianti', 'Novi', 'P', 'Lamongan', '0000-00-00', 'SMA Unggulan Amanatul Ummah Surabaya ', '2010', 'Yogyakarta', 'Ds Kranji Kec Pacitan Kab Lamongan', 'Asrama ITS blok J-324', null, null, null, null, null, 'chiecak@hotmail.com ', '82143176432', 'Membaca, Nulis', 'Dosen', 'do the best', null, null, null, null, null, 'Moh Amar/Siti umikah', 'MI/MTs', 'Nelayan/Ibu rumah Tangga', null, null, null);
INSERT INTO `sim_alumni` VALUES ('6110100702', '6110100702', 'Ibnu Hartomo Hakim', 'Ibnu', 'L', null, null, 'MBI Amanatul Ummah Pacet', '2010', 'Yogyakarta', null, 'gebang kidul no. 59', null, null, null, null, null, null, '81244233369', null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `sim_alumni` VALUES ('default', 'default', 'default', '', 'L', '', '0000-00-00', 'MA Unggulan Amanatul Ummah Surabaya', '2016', 'Surabaya', '', '', '', '', '', '', '', 'defaullt@default.com', '089679093686', '', '', '', '', null, '', '', '', '', '', '', '', '', '2016-04-18 18:24:09');
INSERT INTO `sim_alumni` VALUES ('Februari', 'jaya', 'jaya', 'jaya', 'L', 'Surabaya', '0000-00-00', 'MA Unggulan Amanatul Ummah Surabaya', '2012', 'Surabaya', '232', '323', '23', '23', '2', '23', '323', 'jabiralhayyan27@gmail.com', '23223', '32', '23', '32', '232', '23', '23', '232', '332', '32', '2323', '232', '322', '32', '0000-00-00 00:00:00');
INSERT INTO `sim_alumni` VALUES ('jalanjalan', 'jaya', 'jaya', 'jaya', 'L', 'Surabaya', '0000-00-00', 'MA Unggulan Amanatul Ummah Surabaya', '2012', 'Surabaya', '232', '323', '23', '23', '2', '23', '323', 'jabiralhayyan27@gmail.com', '23223', '32', '23', '32', '232', '23', '23', '232', '332', '32', '2323', '232', '322', '32', '0000-00-00 00:00:00');
INSERT INTO `sim_alumni` VALUES ('jan', 'jaya', 'jaya', 'jaya', 'L', 'Surabaya', '0000-00-00', 'MA Unggulan Amanatul Ummah Surabaya', '2012', 'Surabaya', '232', '323', '23', '23', '2', '23', '323', 'jabiralhayyan27@gmail.com', '23223', '32', '23', '32', '232', '23', '23', '232', '332', '32', '2323', '232', '322', '32', '0000-00-00 00:00:00');
INSERT INTO `sim_alumni` VALUES ('januari', 'jaya', 'jaya', 'jaya', 'L', 'Surabaya', '0000-00-00', 'MA Unggulan Amanatul Ummah Surabaya', '2012', 'Surabaya', '232', '323', '23', '23', '2', '23', '323', 'jabiralhayyan27@gmail.com', '23223', '32', '23', '32', '232', '23', '23', '232', '332', '32', '2323', '232', '322', '32', '0000-00-00 00:00:00');
INSERT INTO `sim_alumni` VALUES ('junaida', 'jaya', 'jaya', 'jaya', 'L', 'Surabaya', '0000-00-00', 'MA Unggulan Amanatul Ummah Surabaya', '2012', 'Surabaya', '232', '323', '23', '23', '2', '23', '323', 'jabiralhayyan27@gmail.com', '23223', '32', '23', '32', '232', '23', '23', '232', '332', '32', '2323', '232', '322', '32', '0000-00-00 00:00:00');
INSERT INTO `sim_alumni` VALUES ('juned', 'jaya', 'jaya', 'jaya', 'L', 'Surabaya', '0000-00-00', 'MA Unggulan Amanatul Ummah Surabaya', '2012', 'Surabaya', '232', '323', '23', '23', '2', '23', '323', 'jabiralhayyan27@gmail.com', '23223', '32', '23', '32', '232', '23', '23', '232', '332', '32', '2323', '232', '322', '32', '0000-00-00 00:00:00');
INSERT INTO `sim_alumni` VALUES ('kuntum', 'kuntum', 'Kuntum Khoiro', 'Kuntum', 'P', 'Surabaya', '2016-05-03', 'MA Akselerasi Amanatul Ummah Surabaya', '2006', 'Madura', 'alamat asal', 'alamat sekarang', '', '', '', '', '', 'yyy@gmail.com', '6546', 'h', 'c', 'm', 'p', 'Institut Teknologi Bandung', 'Teknik Mesin', 'b', 'a', '', '', '', '', '', '2016-05-08 01:03:43');
INSERT INTO `sim_alumni` VALUES ('Maret', 'jaya', 'jaya', 'jaya', 'L', 'Surabaya', '0000-00-00', 'MA Unggulan Amanatul Ummah Surabaya', '2012', 'Surabaya', '232', '323', '23', '23', '2', '23', '323', 'jabiralhayyan27@gmail.com', '23223', '32', '23', '32', '232', '23', '23', '232', '332', '32', '2323', '232', '322', '32', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for sim_cabang
-- ----------------------------
DROP TABLE IF EXISTS `sim_cabang`;
CREATE TABLE `sim_cabang` (
  `IdCabang` int(3) NOT NULL AUTO_INCREMENT,
  `Cabang` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`IdCabang`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sim_cabang
-- ----------------------------
INSERT INTO `sim_cabang` VALUES ('1', 'Surabaya');
INSERT INTO `sim_cabang` VALUES ('2', 'Sidoarjo');
INSERT INTO `sim_cabang` VALUES ('3', 'Mojokerto');
INSERT INTO `sim_cabang` VALUES ('4', 'Malang');
INSERT INTO `sim_cabang` VALUES ('5', 'Jember');
INSERT INTO `sim_cabang` VALUES ('6', 'Madura');
INSERT INTO `sim_cabang` VALUES ('7', 'Yogyakarta');
INSERT INTO `sim_cabang` VALUES ('8', 'Semarang');
INSERT INTO `sim_cabang` VALUES ('9', 'Solo');
INSERT INTO `sim_cabang` VALUES ('10', 'Jakarta');
INSERT INTO `sim_cabang` VALUES ('11', 'Bogor');
INSERT INTO `sim_cabang` VALUES ('12', 'Bandung');
INSERT INTO `sim_cabang` VALUES ('13', 'Indramayu');

-- ----------------------------
-- Table structure for sim_lembaga
-- ----------------------------
DROP TABLE IF EXISTS `sim_lembaga`;
CREATE TABLE `sim_lembaga` (
  `IdLembaga` int(3) NOT NULL AUTO_INCREMENT,
  `Lembaga` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`IdLembaga`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sim_lembaga
-- ----------------------------
INSERT INTO `sim_lembaga` VALUES ('1', 'MA Unggulan Amanatul Ummah Surabaya');
INSERT INTO `sim_lembaga` VALUES ('2', 'MA Akselerasi Amanatul Ummah Surabaya');
INSERT INTO `sim_lembaga` VALUES ('3', 'SMA Unggulan Amanatul Ummah Surabaya');
INSERT INTO `sim_lembaga` VALUES ('4', 'MBI Amanatul Ummah Surabaya');
INSERT INTO `sim_lembaga` VALUES ('5', 'MA Akselerasi Amanatul Ummah Pacet');
INSERT INTO `sim_lembaga` VALUES ('6', 'MBI Amanatul Ummah Pacet');
INSERT INTO `sim_lembaga` VALUES ('7', 'SMA Berbasis Pesantren Amanatul Ummah Pacet');
INSERT INTO `sim_lembaga` VALUES ('8', 'SMA Bendungan Jati Hikmatul Amanah Pacet');

-- ----------------------------
-- Table structure for sim_log
-- ----------------------------
DROP TABLE IF EXISTS `sim_log`;
CREATE TABLE `sim_log` (
  `Id` int(3) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `Nama` varchar(255) DEFAULT NULL,
  `TahunLulus` varchar(255) DEFAULT NULL,
  `Lembaga` varchar(255) NOT NULL,
  `LinkFoto` varchar(255) DEFAULT NULL,
  `User` varchar(255) DEFAULT NULL,
  `Notifikasi` varchar(255) DEFAULT NULL,
  `TipeNotifikasi` varchar(255) DEFAULT NULL,
  `Waktu` time DEFAULT NULL,
  `Tanggal` date DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=178 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sim_log
-- ----------------------------
INSERT INTO `sim_log` VALUES ('001', 'Jabir Al', null, '', '', 'Admin', 'Telah Login', null, '08:58:32', '2015-08-20');
INSERT INTO `sim_log` VALUES ('002', 'Muhammad Jabir Al Haiyan', null, '', '../assets/profpic_admin/11904627_913089762117119_448759934407895387_n.jpg', 'Admin', 'Telah Login', null, '08:59:40', '2015-08-20');
INSERT INTO `sim_log` VALUES ('003', 'Zia Hul Haq', null, '', '', 'Alumni', 'Telah Login', null, '09:03:42', '2015-08-20');
INSERT INTO `sim_log` VALUES ('004', 'Muhammad Jabir Al Haiyan', null, '', '../assets/profpic_admin/11904627_913089762117119_448759934407895387_n.jpg', 'Admin', 'Telah Login', null, '09:04:51', '2015-08-20');
INSERT INTO `sim_log` VALUES ('005', 'Muhammad Jabir Al Haiyan', null, '', '../assets/profpic_admin/11904627_913089762117119_448759934407895387_n.jpg', 'Admin', 'Telah Login', null, '09:05:19', '2015-08-20');
INSERT INTO `sim_log` VALUES ('006', 'Zia Hul Haq', null, '', '../assets2/profpic/hanif.jpg', 'Alumni', 'Telah Login', null, '09:05:33', '2015-08-20');
INSERT INTO `sim_log` VALUES ('007', 'Muhammad Jabir Al Haiyan', null, '', '../assets/profpic_admin/11904627_913089762117119_448759934407895387_n.jpg', 'Admin', 'Telah Login', null, '09:05:42', '2015-08-20');
INSERT INTO `sim_log` VALUES ('008', 'Muhammad Jabir Al Haiyan', null, '', '../assets/profpic_admin/11904627_913089762117119_448759934407895387_n.jpg', 'Admin', 'Telah Login', null, '18:38:00', '2015-08-20');
INSERT INTO `sim_log` VALUES ('009', 'Ivannullah Anggriawan Wibisono', null, '', '../assets/profpic/11056432_1599144190328352_1639212547394586621_n.jpg', 'Alumni', 'Telah Login', null, '18:38:19', '2015-08-20');
INSERT INTO `sim_log` VALUES ('010', 'Muhammad Jabir Al Haiyan', null, '', '../assets/profpic_admin/11904627_913089762117119_448759934407895387_n.jpg', 'Admin', 'Telah Login', null, '18:39:01', '2015-08-20');
INSERT INTO `sim_log` VALUES ('011', 'Ivannullah Anggriawan Wibisono', null, '', '../assets2/profpic/imam.jpg', 'Alumni', 'Telah Login', null, '18:39:19', '2015-08-20');
INSERT INTO `sim_log` VALUES ('012', 'Muhammad Jabir Al Haiyan', null, '', '../assets/profpic_admin/11904627_913089762117119_448759934407895387_n.jpg', 'Admin', 'Telah Login', null, '18:39:25', '2015-08-20');
INSERT INTO `sim_log` VALUES ('013', 'Muhammad Jabir Al Haiyan', null, '', '../assets/profpic_admin/11904627_913089762117119_448759934407895387_n.jpg', 'Admin', 'Telah Login', null, '21:09:11', '2015-08-20');
INSERT INTO `sim_log` VALUES ('014', 'Muhammad Jabir Al Haiyan', null, '', '../assets/profpic_admin/11904627_913089762117119_448759934407895387_n.jpg', 'Admin', 'Telah Login', null, '22:00:27', '2015-08-20');
INSERT INTO `sim_log` VALUES ('015', 'Zia Hul Haq', null, '', '../assets2/profpic/hanif.jpg', 'Alumni', 'Telah Login', null, '22:00:58', '2015-08-20');
INSERT INTO `sim_log` VALUES ('016', 'Muhammad Jabir Al Haiyan', null, '', '../assets/profpic_admin/11904627_913089762117119_448759934407895387_n.jpg', 'Admin', 'Telah Login', null, '22:01:08', '2015-08-20');
INSERT INTO `sim_log` VALUES ('017', 'Muhammad Jabir Al Haiyan', null, '', '../assets/profpic_admin/11904627_913089762117119_448759934407895387_n.jpg', 'Admin', 'Telah Login', null, '09:55:28', '2015-08-21');
INSERT INTO `sim_log` VALUES ('018', 'Zia Hul Haq', null, '', '../assets2/profpic/hanif.jpg', 'Alumni', 'Telah Login', null, '11:40:25', '2015-08-21');
INSERT INTO `sim_log` VALUES ('019', 'Zia Hul Haq', null, '', '../assets2/profpic/hanif.jpg', 'Alumni', 'Telah Login', null, '11:43:14', '2015-08-21');
INSERT INTO `sim_log` VALUES ('020', 'Zia Hul Haq', null, '', '../assets2/profpic/hanif.jpg', 'Alumni', 'Telah Login', null, '18:39:48', '2015-08-22');
INSERT INTO `sim_log` VALUES ('021', 'Muhammad Jabir Al Haiyan', null, '', '../assets/profpic_admin/11904627_913089762117119_448759934407895387_n.jpg', 'Admin', 'Telah Login', null, '18:41:35', '2015-08-22');
INSERT INTO `sim_log` VALUES ('022', 'Ivannullah Anggriawan Wibisono', null, '', '../assets2/profpic/imam.jpg', 'Alumni', 'Telah Login', null, '00:53:19', '2015-08-23');
INSERT INTO `sim_log` VALUES ('023', 'Muhammad Jabir Al Haiyan', null, '', '../assets/profpic_admin/11904627_913089762117119_448759934407895387_n.jpg', 'Admin', 'Telah Login', null, '00:54:24', '2015-08-23');
INSERT INTO `sim_log` VALUES ('024', 'Muhammad Jabir Al Haiyan', null, '', '../assets/profpic_admin/11904627_913089762117119_448759934407895387_n.jpg', 'Admin', 'Telah Login', null, '08:33:47', '2015-08-25');
INSERT INTO `sim_log` VALUES ('025', 'Zia Hul Haq', null, '', '../assets2/profpic/hanif.jpg', 'Alumni', 'Telah Login', null, '08:36:09', '2015-08-25');
INSERT INTO `sim_log` VALUES ('026', 'Muhammad Jabir Al Haiyan', null, '', '../assets/profpic_admin/11904627_913089762117119_448759934407895387_n.jpg', 'Admin', 'Telah Login', null, '08:41:48', '2015-08-25');
INSERT INTO `sim_log` VALUES ('027', 'Ivannullah Anggriawan Wibisono', null, '', '../assets2/profpic/imam.jpg', 'Alumni', 'Telah Login', null, '08:42:56', '2015-08-25');
INSERT INTO `sim_log` VALUES ('028', 'Muhammad Jabir Al Haiyan', null, '', '../assets/profpic_admin/11904627_913089762117119_448759934407895387_n.jpg', 'Admin', 'Telah Login', null, '08:43:05', '2015-08-25');
INSERT INTO `sim_log` VALUES ('029', 'Zia Hul Haq', null, '', '../assets2/profpic/hanif.jpg', 'Alumni', 'Telah Login', null, '08:52:50', '2015-08-25');
INSERT INTO `sim_log` VALUES ('030', 'Muhammad Jabir Al Haiyan', null, '', '../assets/profpic_admin/11904627_913089762117119_448759934407895387_n.jpg', 'Admin', 'Telah Login', null, '08:53:07', '2015-08-25');
INSERT INTO `sim_log` VALUES ('031', 'Zia Hul Haq', null, '', '../assets2/profpic/hanif.jpg', 'Alumni', 'Telah Login', null, '08:53:49', '2015-08-25');
INSERT INTO `sim_log` VALUES ('032', 'Muhammad Jabir Al Haiyan', null, '', '../assets/profpic_admin/11904627_913089762117119_448759934407895387_n.jpg', 'Admin', 'Telah Login', null, '08:54:34', '2015-08-25');
INSERT INTO `sim_log` VALUES ('033', 'Muhammad Jabir Al Haiyan', null, '', '../assets/profpic_admin/11904627_913089762117119_448759934407895387_n.jpg', 'Admin', 'Telah Login', null, '21:16:09', '2015-08-30');
INSERT INTO `sim_log` VALUES ('034', 'Jamal', null, '', '', 'Alumni', 'Telah Login', null, '21:26:47', '2015-08-30');
INSERT INTO `sim_log` VALUES ('035', 'Muhammad Jabir Al Haiyan', null, '', '../assets/profpic_admin/11904627_913089762117119_448759934407895387_n.jpg', 'Admin', 'Telah Login', null, '21:29:25', '2015-08-30');
INSERT INTO `sim_log` VALUES ('036', 'Muhammad Jabir Al Haiyan', null, '', '../assets/profpic_admin/11904627_913089762117119_448759934407895387_n.jpg', 'Admin', 'Telah Login', null, '21:29:31', '2015-08-30');
INSERT INTO `sim_log` VALUES ('037', 'Muhammad Jabir Al Haiyan', null, '', '../assets/profpic_admin/11904627_913089762117119_448759934407895387_n.jpg', 'Admin', 'Telah Login', null, '21:31:30', '2015-08-30');
INSERT INTO `sim_log` VALUES ('038', 'Jamal', null, '', '', 'Alumni', 'Telah Login', null, '21:31:44', '2015-08-30');
INSERT INTO `sim_log` VALUES ('039', 'Muhammad Jabir Al Haiyan', null, '', '../assets/profpic_admin/11904627_913089762117119_448759934407895387_n.jpg', 'Admin', 'Telah Login', null, '12:52:02', '2015-09-17');
INSERT INTO `sim_log` VALUES ('040', 'Muhammad Jabir Al Haiyan', null, '', '../assets/profpic_admin/11904627_913089762117119_448759934407895387_n.jpg', 'Admin', 'Telah Login', null, '12:59:45', '2015-09-17');
INSERT INTO `sim_log` VALUES ('041', 'Muhammad Jabir Al Haiyan', null, '', '../assets/profpic_admin/11904627_913089762117119_448759934407895387_n.jpg', 'Admin', 'Telah Login', null, '13:00:10', '2015-09-17');
INSERT INTO `sim_log` VALUES ('042', 'Muhammad Jabir Al Haiyan', null, '', '../assets/profpic_admin/11904627_913089762117119_448759934407895387_n.jpg', 'Admin', 'Telah Login', null, '21:11:49', '2015-09-17');
INSERT INTO `sim_log` VALUES ('043', 'Zia Hul Haq', null, '', '../assets2/profpic/hanif.jpg', 'Alumni', 'Telah Login', null, '22:12:24', '2015-09-17');
INSERT INTO `sim_log` VALUES ('044', 'Ivannullah Anggriawan Wibisono', null, '', '../assets2/profpic/imam.jpg', 'Alumni', 'Telah Login', null, '22:19:05', '2015-09-17');
INSERT INTO `sim_log` VALUES ('045', 'Ivannullah Anggriawan Wibisono', null, '', '../assets2/profpic/imam.jpg', 'Alumni', 'Telah Login', null, '22:27:14', '2015-09-17');
INSERT INTO `sim_log` VALUES ('046', 'Ivannullah Anggriawan Wibisono', null, '', '../assets2/profpic/imam.jpg', 'Alumni', 'Telah Login', null, '22:30:02', '2015-09-17');
INSERT INTO `sim_log` VALUES ('047', 'Ivannullah Anggriawan Wibisono', null, '', '../assets2/profpic/imam.jpg', 'Alumni', 'Telah Login', null, '22:31:52', '2015-09-17');
INSERT INTO `sim_log` VALUES ('048', 'Zia Hul Haq', null, '', '../assets2/profpic/hanif.jpg', 'Alumni', 'Telah Login', null, '22:33:44', '2015-09-17');
INSERT INTO `sim_log` VALUES ('049', 'Ivannullah Anggriawan Wibisono', null, '', '../assets2/profpic/imam.jpg', 'Alumni', 'Telah Login', null, '22:36:50', '2015-09-17');
INSERT INTO `sim_log` VALUES ('050', 'Ivannullah Anggriawan Wibisono', null, '', '../assets2/profpic/imam.jpg', 'Alumni', 'Telah Login', null, '22:39:50', '2015-09-17');
INSERT INTO `sim_log` VALUES ('051', 'Muhammad Jabir Al Haiyan', null, '', '../assets/profpic_admin/11904627_913089762117119_448759934407895387_n.jpg', 'Admin', 'Telah Login', null, '22:42:32', '2015-09-17');
INSERT INTO `sim_log` VALUES ('052', 'Ivannullah Anggriawan Wibisono', null, '', '../assets2/profpic/imam.jpg', 'Alumni', 'Telah Logout', null, '22:45:35', '2015-09-17');
INSERT INTO `sim_log` VALUES ('053', 'Ivannullah Anggriawan Wibisono', null, '', '../assets2/profpic/imam.jpg', 'Alumni', 'Telah Logout', null, '22:46:08', '2015-09-17');
INSERT INTO `sim_log` VALUES ('054', 'Muhammad Jabir Al Haiyan', null, '', '../assets/profpic_admin/11904627_913089762117119_448759934407895387_n.jpg', 'Admin', 'Telah Login', null, '22:47:28', '2015-09-17');
INSERT INTO `sim_log` VALUES ('055', 'Muhammad Jabir Al Haiyan', null, '', '../assets/profpic_admin/11904627_913089762117119_448759934407895387_n.jpg', 'Admin', 'Telah Login', null, '22:48:09', '2015-09-17');
INSERT INTO `sim_log` VALUES ('056', 'Muhammad Jabir Al Haiyan', null, '', '../assets/profpic_admin/11904627_913089762117119_448759934407895387_n.jpg', 'Admin', 'Telah Login', null, '22:50:57', '2015-09-17');
INSERT INTO `sim_log` VALUES ('057', 'Muhammad Jabir Al Haiyan', null, '', '../assets/profpic_admin/11904627_913089762117119_448759934407895387_n.jpg', 'Admin', 'Telah Login', null, '22:52:39', '2015-09-17');
INSERT INTO `sim_log` VALUES ('058', 'Ivannullah Anggriawan Wibisono', null, '', '../assets2/profpic/imam.jpg', 'Alumni', 'Telah Login', null, '03:22:19', '2015-09-18');
INSERT INTO `sim_log` VALUES ('059', 'Ivannullah Anggriawan Wibisono', null, '', '../assets2/profpic/imam.jpg', 'Alumni', 'Telah Login', null, '03:28:26', '2015-09-18');
INSERT INTO `sim_log` VALUES ('060', 'Ivannullah Anggriawan Wibisono', null, '', '../assets2/profpic/imam.jpg', 'Alumni', 'Telah Login', null, '03:29:20', '2015-09-18');
INSERT INTO `sim_log` VALUES ('061', 'Ivannullah Anggriawan Wibisono', null, '', '../assets2/profpic/imam.jpg', 'Alumni', 'Telah Login', null, '03:30:36', '2015-09-18');
INSERT INTO `sim_log` VALUES ('062', 'Ivannullah Anggriawan Wibisono', null, '', '../assets2/profpic/imam.jpg', 'Alumni', 'Telah Login', null, '03:37:34', '2015-09-18');
INSERT INTO `sim_log` VALUES ('063', 'Ivannullah Anggriawan W', null, '', '', 'Alumni', 'Telah Update Data', null, '03:37:57', '2015-09-18');
INSERT INTO `sim_log` VALUES ('064', 'Ivannullah Anggriawan Wibi', null, '', '', 'Alumni', 'Telah Update Data', null, '03:40:33', '2015-09-18');
INSERT INTO `sim_log` VALUES ('065', 'Muhammad Jabir Al Haiyan', null, '', '../assets/profpic_admin/11904627_913089762117119_448759934407895387_n.jpg', 'Admin', 'Telah Login', null, '03:47:09', '2015-09-18');
INSERT INTO `sim_log` VALUES ('066', 'Ivannullah', null, '', '', 'Alumni', 'Telah Login', null, '03:48:56', '2015-09-18');
INSERT INTO `sim_log` VALUES ('067', 'Ivanullah Anggriawan', null, '', '../assets2/profpic/20150902192405.jpg', 'Alumni', 'Telah Update Data', null, '03:52:03', '2015-09-18');
INSERT INTO `sim_log` VALUES ('068', 'Ivanullah Anggriawan', null, '', '../assets2/profpic/40667_1248599875572_6069917_n.jpg', 'Alumni', 'Telah Ganti Foto', null, '04:00:52', '2015-09-18');
INSERT INTO `sim_log` VALUES ('069', 'Muhammad Jabir Al', null, '', '../assets/profpic_admin/11904627_913089762117119_448759934407895387_n.jpg', 'Admin', 'Telah Login', null, '04:11:15', '2015-09-18');
INSERT INTO `sim_log` VALUES ('070', 'Zia Hul Haq', '2012', 'MA Unggulan Amanatul Ummah Surabaya', '../assets2/profpic/hanif.jpg', 'Alumni', 'Telah Login', null, '04:57:50', '2015-09-18');
INSERT INTO `sim_log` VALUES ('071', 'Zia Hul', '2012', 'MA Unggulan Amanatul Ummah Surabaya', '../assets2/profpic/hanif.jpg', 'Alumni', 'Telah Update Data', null, '04:59:06', '2015-09-18');
INSERT INTO `sim_log` VALUES ('072', 'Zia Hul', '2012', 'MA Unggulan Amanatul Ummah Surabaya', '../assets2/profpic/hanif.jpg', 'Alumni', 'Telah Login', null, '05:01:43', '2015-09-18');
INSERT INTO `sim_log` VALUES ('073', 'Zia Hul', '2012', 'MA Unggulan Amanatul Ummah Surabaya', '../assets2/profpic/husein.jpg', 'Alumni', 'Telah Ganti Foto', null, '05:02:13', '2015-09-18');
INSERT INTO `sim_log` VALUES ('074', 'Zia Hul', '2012', 'MA Unggulan Amanatul Ummah Surabaya', '../assets2/profpic/husein.jpg', 'Alumni', 'Telah Login', null, '05:04:21', '2015-09-18');
INSERT INTO `sim_log` VALUES ('075', 'Zia Hul', '2012', 'MA Unggulan Amanatul Ummah Surabaya', '../assets2/profpic/husein.jpg', 'Alumni', 'Telah Login', null, '05:26:27', '2015-09-18');
INSERT INTO `sim_log` VALUES ('076', 'Zia Hul', '2011', 'MA Unggulan Amanatul Ummah Surabaya', '../assets2/profpic/husein.jpg', 'Alumni', 'Telah Update Data', null, '06:04:45', '2015-09-18');
INSERT INTO `sim_log` VALUES ('077', 'Zia Hul', '2011', 'MA Unggulan Amanatul Ummah Surabaya', '../assets2/profpic/husein.jpg', 'Alumni', 'Telah Ganti Password', null, '06:29:23', '2015-09-18');
INSERT INTO `sim_log` VALUES ('078', 'komar', '2012', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', '', 'Alumni', 'Telah Login', null, '08:04:29', '2015-09-18');
INSERT INTO `sim_log` VALUES ('079', 'komar', '2012', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', '', 'Alumni', 'Telah Ganti Password', null, '08:04:42', '2015-09-18');
INSERT INTO `sim_log` VALUES ('080', 'komar', '2012', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', '', 'Alumni', 'Telah Login', null, '08:08:17', '2015-09-18');
INSERT INTO `sim_log` VALUES ('081', 'Zia Hul', '2011', 'MA Unggulan Amanatul Ummah Surabaya', '../assets2/profpic/husein.jpg', 'Alumni', 'Telah Login', null, '08:13:52', '2015-09-18');
INSERT INTO `sim_log` VALUES ('082', 'Zia Hul', '2011', 'MA Unggulan Amanatul Ummah Surabaya', '../assets2/profpic/husein.jpg', 'Alumni', 'Telah Login', null, '08:21:04', '2015-09-18');
INSERT INTO `sim_log` VALUES ('083', 'Ahmad Abu', '2012', 'MA Unggulan Amanatul Ummah Surabaya', '', 'Alumni', 'Telah Login', null, '08:36:14', '2015-09-18');
INSERT INTO `sim_log` VALUES ('084', 'Ahmad Abu', '2012', 'MA Unggulan Amanatul Ummah Surabaya', '../assets2/profpic/tyka.jpg', 'Alumni', 'Telah Ganti Foto', null, '08:37:01', '2015-09-18');
INSERT INTO `sim_log` VALUES ('085', 'Ahmad Abu', '2012', 'MA Unggulan Amanatul Ummah Surabaya', '../assets2/profpic/rina.jpg', 'Alumni', 'Telah Login', null, '08:44:39', '2015-09-18');
INSERT INTO `sim_log` VALUES ('086', 'Ahmad Abu', '2012', 'MA Unggulan Amanatul Ummah Surabaya', '../assets2/profpic/rina.jpg', 'Alumni', 'Telah Login', null, '09:02:39', '2015-09-18');
INSERT INTO `sim_log` VALUES ('087', 'Zia Hul', '2011', 'MA Unggulan Amanatul Ummah Surabaya', '../assets2/profpic/husein.jpg', 'Alumni', 'Telah Login', null, '09:31:07', '2015-09-18');
INSERT INTO `sim_log` VALUES ('088', 'zizi', '2020', 'MA Unggulan Amanatul Ummah Surabaya', '', 'Alumni', 'Telah Update Data', null, '09:42:21', '2015-09-18');
INSERT INTO `sim_log` VALUES ('089', 'zizi', '2012', 'MA Unggulan Amanatul Ummah Surabaya', '', 'Alumni', 'Telah Update Data', null, '09:48:45', '2015-09-18');
INSERT INTO `sim_log` VALUES ('090', 'zizi', '2012', 'MA Unggulan Amanatul Ummah Surabaya', '', 'Alumni', 'Telah Update Data', null, '09:50:58', '2015-09-18');
INSERT INTO `sim_log` VALUES ('091', 'zizi', '2012', 'MA Unggulan Amanatul Ummah Surabaya', '../assets2/profpic/umam.jpg', 'Alumni', 'Telah Ganti Foto', null, '09:51:52', '2015-09-18');
INSERT INTO `sim_log` VALUES ('092', 'Ivanullah Anggriawan', '2012', 'MA Unggulan Amanatul Ummah Surabaya', '../assets2/profpic/1425343543350.jpg', 'Alumni', 'Telah Login', null, '09:58:41', '2015-09-18');
INSERT INTO `sim_log` VALUES ('093', 'Ivanullah Anggriawan', '2012', 'MA Unggulan Amanatul Ummah Surabaya', '../assets2/profpic/1425343543350.jpg', 'Alumni', 'Telah Login', null, '09:59:08', '2015-09-18');
INSERT INTO `sim_log` VALUES ('094', 'Ahmad Abu', '2012', 'MA Unggulan Amanatul Ummah Surabaya', '../assets2/profpic/rina.jpg', 'Alumni', 'Telah Login', null, '15:33:04', '2016-03-03');
INSERT INTO `sim_log` VALUES ('095', 'Ahmad Abu', '2012', 'MA Unggulan Amanatul Ummah Surabaya', '../assets2/profpic/rina.jpg', 'Alumni', 'Telah Login', null, '15:33:34', '2016-03-03');
INSERT INTO `sim_log` VALUES ('096', 'Ivanullah Anggriawan', '2012', 'MA Unggulan Amanatul Ummah Surabaya', '../assets2/profpic/1425343543350.jpg', 'Alumni', 'Telah Login', null, '20:17:56', '2016-03-03');
INSERT INTO `sim_log` VALUES ('097', 'Muhammad Iqbal Rustamadji ', '2011', 'MA Akselerasi Amanatul Ummah Pacet', null, 'Alumni', 'Telah Login', '1', '09:23:43', '2016-04-14');
INSERT INTO `sim_log` VALUES ('098', 'Muhammad Iqbal Rustamadji ', '2011', 'MA Akselerasi Amanatul Ummah Pacet', null, 'Alumni', 'Telah Logout', '2', '09:24:44', '2016-04-14');
INSERT INTO `sim_log` VALUES ('099', 'default', '2016', 'MA Unggulan Amanatul Ummah Surabaya', '', 'Alumni', 'Telah Login', '1', '18:27:00', '2016-04-18');
INSERT INTO `sim_log` VALUES ('100', 'default', '2016', 'MA Unggulan Amanatul Ummah Surabaya', '', 'Alumni', 'Telah Login', '1', '20:43:22', '2016-04-19');
INSERT INTO `sim_log` VALUES ('101', 'default', '2016', 'MA Unggulan Amanatul Ummah Surabaya', '', 'Alumni', 'Telah Login', '1', '12:23:07', '2016-04-20');
INSERT INTO `sim_log` VALUES ('102', 'default', '2016', 'MA Unggulan Amanatul Ummah Surabaya', '', 'Alumni', 'Telah Logout', '2', '12:31:06', '2016-04-20');
INSERT INTO `sim_log` VALUES ('103', 'default', '2016', 'MA Unggulan Amanatul Ummah Surabaya', '', 'Alumni', 'Telah Login', '1', '08:33:00', '2016-04-30');
INSERT INTO `sim_log` VALUES ('104', 'default', '2016', 'MA Unggulan Amanatul Ummah Surabaya', '', 'Alumni', 'Telah Logout', '2', '08:33:14', '2016-04-30');
INSERT INTO `sim_log` VALUES ('105', 'Didik Purwanto ', '2011', 'MA Akselerasi Amanatul Ummah Surabaya', null, 'Alumni', 'Telah Login', '1', '19:05:03', '2016-05-02');
INSERT INTO `sim_log` VALUES ('106', 'Didik Purwanto ', '2011', 'MA Akselerasi Amanatul Ummah Surabaya', null, 'Alumni', 'Telah Login', '1', '12:04:10', '2016-05-07');
INSERT INTO `sim_log` VALUES ('107', 'Didik Purwanto ', '2011', 'MA Akselerasi Amanatul Ummah Surabaya', null, 'Alumni', 'Telah Logout', '2', '12:17:27', '2016-05-07');
INSERT INTO `sim_log` VALUES ('108', 'Didik Purwanto ', '2011', 'MA Akselerasi Amanatul Ummah Surabaya', null, 'Alumni', 'Telah Login', '1', '12:17:39', '2016-05-07');
INSERT INTO `sim_log` VALUES ('109', 'Didik Purwanto ', '2011', 'MA Akselerasi Amanatul Ummah Surabaya', null, 'Alumni', 'Telah Login', '1', '20:25:42', '2016-05-07');
INSERT INTO `sim_log` VALUES ('110', 'Didik Purwanto ', '2011', 'MA Akselerasi Amanatul Ummah Surabaya', 'assets2/profpic/5111100702-07052016153203.jpeg', 'Alumni', 'Telah Ganti Foto', '4', '20:32:03', '2016-05-07');
INSERT INTO `sim_log` VALUES ('111', 'Didik Purwanto ', '2011', 'MA Akselerasi Amanatul Ummah Surabaya', 'assets2/profpic/5111100702-07052016153203.jpeg', 'Alumni', 'Telah Update Data', '3', '23:44:32', '2016-05-07');
INSERT INTO `sim_log` VALUES ('112', 'Didik Purwanto ', '2011', 'MA Akselerasi Amanatul Ummah Surabaya', 'assets2/profpic/5111100702-07052016153203.jpeg', 'Alumni', 'Telah Update Data', '3', '23:45:30', '2016-05-07');
INSERT INTO `sim_log` VALUES ('113', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', 'assets2/profpic/5111100702-07052016153203.jpeg', 'Alumni', 'Telah Update Data', '3', '23:49:15', '2016-05-07');
INSERT INTO `sim_log` VALUES ('114', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', 'assets2/profpic/5111100702-07052016153203.jpeg', 'Alumni', 'Telah Update Data', '3', '00:25:36', '2016-05-08');
INSERT INTO `sim_log` VALUES ('115', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', 'assets2/profpic/5111100702-07052016153203.jpeg', 'Alumni', 'Telah Update Data', '3', '00:28:08', '2016-05-08');
INSERT INTO `sim_log` VALUES ('116', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', 'assets2/profpic/5111100702-07052016153203.jpeg', 'Alumni', 'Telah Update Data', '3', '00:33:12', '2016-05-08');
INSERT INTO `sim_log` VALUES ('117', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', 'assets2/profpic/5111100702-07052016153203.jpeg', 'Alumni', 'Telah Update Data', '3', '00:41:40', '2016-05-08');
INSERT INTO `sim_log` VALUES ('118', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', 'assets2/profpic/5111100702-07052016153203.jpeg', 'Alumni', 'Telah Update Data', '3', '00:42:21', '2016-05-08');
INSERT INTO `sim_log` VALUES ('119', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', 'assets2/profpic/5111100702-07052016153203.jpeg', 'Alumni', 'Telah Update Data', '3', '00:45:31', '2016-05-08');
INSERT INTO `sim_log` VALUES ('120', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', 'assets2/profpic/5111100702-07052016153203.jpeg', 'Alumni', 'Telah Logout', '2', '00:46:45', '2016-05-08');
INSERT INTO `sim_log` VALUES ('121', 'Kuntum Khoiro', '2006', 'MA Akselerasi Amanatul Ummah Surabaya', '', 'Alumni', 'Telah Login', '1', '01:49:48', '2016-05-08');
INSERT INTO `sim_log` VALUES ('122', 'Kuntum Khoiro', '2006', 'MA Akselerasi Amanatul Ummah Surabaya', '', 'Alumni', 'Telah Logout', '2', '02:03:49', '2016-05-08');
INSERT INTO `sim_log` VALUES ('123', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', 'assets2/profpic/5111100702-07052016153203.jpeg', 'Alumni', 'Telah Login', '1', '18:37:50', '2016-05-08');
INSERT INTO `sim_log` VALUES ('124', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', 'assets2/profpic/--08052016161923.jpeg', 'Alumni', 'Telah Ganti Foto', '4', '21:19:23', '2016-05-08');
INSERT INTO `sim_log` VALUES ('125', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', 'assets2/profpic/--08052016161923.jpeg', 'Alumni', 'Telah Logout', '2', '21:23:08', '2016-05-08');
INSERT INTO `sim_log` VALUES ('126', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', 'assets2/profpic/--08052016161923.jpeg', 'Alumni', 'Telah Login', '1', '21:23:14', '2016-05-08');
INSERT INTO `sim_log` VALUES ('127', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', 'assets2/profpic/--08052016162326.jpeg', 'Alumni', 'Telah Ganti Foto', '4', '21:23:26', '2016-05-08');
INSERT INTO `sim_log` VALUES ('128', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', 'assets2/profpic/--08052016162326.jpeg', 'Alumni', 'Telah Logout', '2', '21:24:58', '2016-05-08');
INSERT INTO `sim_log` VALUES ('129', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', '', 'Alumni', 'Telah Login', '1', '21:25:49', '2016-05-08');
INSERT INTO `sim_log` VALUES ('130', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', 'assets2/profpic/--08052016162606.jpeg', 'Alumni', 'Telah Ganti Foto', '4', '21:26:06', '2016-05-08');
INSERT INTO `sim_log` VALUES ('131', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', '', 'Alumni', 'Telah Logout', '2', '21:28:01', '2016-05-08');
INSERT INTO `sim_log` VALUES ('132', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', '', 'Alumni', 'Telah Login', '1', '21:28:06', '2016-05-08');
INSERT INTO `sim_log` VALUES ('133', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', 'assets2/profpic/-5111100702-08052016162815.jpeg', 'Alumni', 'Telah Ganti Foto', '4', '21:28:15', '2016-05-08');
INSERT INTO `sim_log` VALUES ('134', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', '', 'Alumni', 'Telah Logout', '2', '21:30:42', '2016-05-08');
INSERT INTO `sim_log` VALUES ('135', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', '', 'Alumni', 'Telah Login', '1', '21:30:53', '2016-05-08');
INSERT INTO `sim_log` VALUES ('136', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', 'assets2/profpic/11-5111100702-08052016163101.jpeg', 'Alumni', 'Telah Ganti Foto', '4', '21:31:01', '2016-05-08');
INSERT INTO `sim_log` VALUES ('137', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', 'assets2/profpic/11-5111100702-08052016163101.jpeg', 'Alumni', 'Telah Logout', '2', '21:32:39', '2016-05-08');
INSERT INTO `sim_log` VALUES ('138', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', 'assets2/profpic/11-5111100702-08052016163101.jpeg', 'Alumni', 'Telah Login', '1', '21:32:47', '2016-05-08');
INSERT INTO `sim_log` VALUES ('139', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', 'assets2/profpic/11--08052016163309.jpeg', 'Alumni', 'Telah Ganti Foto', '4', '21:33:09', '2016-05-08');
INSERT INTO `sim_log` VALUES ('140', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', 'assets2/profpic/11--08052016163309.jpeg', 'Alumni', 'Telah Update Data', '3', '21:33:40', '2016-05-08');
INSERT INTO `sim_log` VALUES ('141', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', 'assets2/profpic/11--08052016163309.jpeg', 'Alumni', 'Telah Logout', '2', '21:37:33', '2016-05-08');
INSERT INTO `sim_log` VALUES ('142', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', 'assets2/profpic/11--08052016163309.jpeg', 'Alumni', 'Telah Login', '1', '21:37:40', '2016-05-08');
INSERT INTO `sim_log` VALUES ('143', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', 'assets2/profpic/11-5111100702-08052016163749.jpeg', 'Alumni', 'Telah Ganti Foto', '4', '21:37:49', '2016-05-08');
INSERT INTO `sim_log` VALUES ('144', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', '', 'Alumni', 'Telah Logout', '2', '21:39:54', '2016-05-08');
INSERT INTO `sim_log` VALUES ('145', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', '', 'Alumni', 'Telah Login', '1', '21:39:59', '2016-05-08');
INSERT INTO `sim_log` VALUES ('146', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', 'assets2/profpic/11-5111100702-08052016164009.jpeg', 'Alumni', 'Telah Ganti Foto', '4', '21:40:09', '2016-05-08');
INSERT INTO `sim_log` VALUES ('147', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', 'assets2/profpic/11-5111100702-08052016164009.jpeg', 'Alumni', 'Telah Logout', '2', '21:47:13', '2016-05-08');
INSERT INTO `sim_log` VALUES ('148', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', 'assets2/profpic/11-5111100702-08052016164009.jpeg', 'Alumni', 'Telah Login', '1', '21:47:21', '2016-05-08');
INSERT INTO `sim_log` VALUES ('149', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', 'assets2/profpic/11-5111100702-08052016164009.jpeg', 'Alumni', 'Telah Logout', '2', '21:49:24', '2016-05-08');
INSERT INTO `sim_log` VALUES ('150', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', 'assets2/profpic/11-5111100702-08052016164009.jpeg', 'Alumni', 'Telah Login', '1', '21:49:30', '2016-05-08');
INSERT INTO `sim_log` VALUES ('151', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', 'assets2/profpic/11-5111100702-08052016164009.jpeg', 'Alumni', 'Telah Logout', '2', '21:52:25', '2016-05-08');
INSERT INTO `sim_log` VALUES ('152', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', '', 'Alumni', 'Telah Login', '1', '21:52:39', '2016-05-08');
INSERT INTO `sim_log` VALUES ('153', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', '', 'Alumni', 'Telah Logout', '2', '21:52:53', '2016-05-08');
INSERT INTO `sim_log` VALUES ('154', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', '', 'Alumni', 'Telah Login', '1', '21:52:58', '2016-05-08');
INSERT INTO `sim_log` VALUES ('155', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', 'assets2/profpic/Array11-5111100702-08052016165306.jpeg', 'Alumni', 'Telah Ganti Foto', '4', '21:53:06', '2016-05-08');
INSERT INTO `sim_log` VALUES ('156', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', 'assets2/profpic/Array11-5111100702-08052016165306.jpeg', 'Alumni', 'Telah Logout', '2', '21:55:18', '2016-05-08');
INSERT INTO `sim_log` VALUES ('157', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', 'assets2/profpic/Array11-5111100702-08052016165306.jpeg', 'Alumni', 'Telah Login', '1', '21:55:28', '2016-05-08');
INSERT INTO `sim_log` VALUES ('158', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', 'assets2/profpic/Array11-5111100702-08052016165535.jpeg', 'Alumni', 'Telah Ganti Foto', '4', '21:55:35', '2016-05-08');
INSERT INTO `sim_log` VALUES ('159', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', 'assets2/profpic/Array11-5111100702-08052016165535.jpeg', 'Alumni', 'Telah Logout', '2', '21:59:55', '2016-05-08');
INSERT INTO `sim_log` VALUES ('160', 'Muhammad Iqbal Rustamadji ', '2011', 'MA Akselerasi Amanatul Ummah Pacet', null, 'Alumni', 'Telah Login', '1', '22:00:04', '2016-05-08');
INSERT INTO `sim_log` VALUES ('161', 'Muhammad Iqbal Rustamadji ', '2011', 'MA Akselerasi Amanatul Ummah Pacet', 'assets2/profpic/11-5111100701-08052016170015.jpeg', 'Alumni', 'Telah Ganti Foto', '4', '22:00:15', '2016-05-08');
INSERT INTO `sim_log` VALUES ('162', 'Muhammad Iqbal Rustamadji ', '2011', 'MA Akselerasi Amanatul Ummah Pacet', '', 'Alumni', 'Telah Logout', '2', '22:02:10', '2016-05-08');
INSERT INTO `sim_log` VALUES ('163', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', '', 'Alumni', 'Telah Login', '1', '22:02:24', '2016-05-08');
INSERT INTO `sim_log` VALUES ('164', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', 'assets2/profpic/11-5111100702-08052016170231.jpeg', 'Alumni', 'Telah Ganti Foto', '4', '22:02:31', '2016-05-08');
INSERT INTO `sim_log` VALUES ('165', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', '', 'Alumni', 'Telah Logout', '2', '22:03:23', '2016-05-08');
INSERT INTO `sim_log` VALUES ('166', 'Muhammad Yusuf', '2011', 'MA Akselerasi Amanatul Ummah Pacet', null, 'Alumni', 'Telah Login', '1', '22:03:30', '2016-05-08');
INSERT INTO `sim_log` VALUES ('167', 'Muhammad Yusuf', '2011', 'MA Akselerasi Amanatul Ummah Pacet', 'assets2/profpic/11-5111100703-08052016170338.jpeg', 'Alumni', 'Telah Ganti Foto', '4', '22:03:38', '2016-05-08');
INSERT INTO `sim_log` VALUES ('168', 'Muhammad Yusuf', '2011', 'MA Akselerasi Amanatul Ummah Pacet', 'assets2/profpic/11-5111100703-08052016170338.jpeg', 'Alumni', 'Telah Logout', '2', '22:05:16', '2016-05-08');
INSERT INTO `sim_log` VALUES ('169', 'Muhammad Yusuf', '2011', 'MA Akselerasi Amanatul Ummah Pacet', 'assets2/profpic/11-5111100703-08052016170338.jpeg', 'Alumni', 'Telah Login', '1', '22:05:26', '2016-05-08');
INSERT INTO `sim_log` VALUES ('170', 'Muhammad Yusuf', '2011', 'MA Akselerasi Amanatul Ummah Pacet', 'assets2/profpic/511-5111100703-08052016170556.jpeg', 'Alumni', 'Telah Ganti Foto', '4', '22:05:56', '2016-05-08');
INSERT INTO `sim_log` VALUES ('171', 'Muhammad Yusuf', '2011', 'MA Akselerasi Amanatul Ummah Pacet', 'assets2/profpic/511-5111100703-08052016170556.jpeg', 'Alumni', 'Telah Logout', '2', '22:06:37', '2016-05-08');
INSERT INTO `sim_log` VALUES ('172', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', '', 'Alumni', 'Telah Login', '1', '22:49:43', '2016-05-08');
INSERT INTO `sim_log` VALUES ('173', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', '', 'Alumni', 'Telah Logout', '2', '22:52:52', '2016-05-08');
INSERT INTO `sim_log` VALUES ('174', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', '', 'Alumni', 'Telah Login', '1', '09:31:06', '2016-05-12');
INSERT INTO `sim_log` VALUES ('175', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', '', 'Alumni', 'Telah Logout', '2', '09:38:47', '2016-05-12');
INSERT INTO `sim_log` VALUES ('176', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', '', 'Alumni', 'Telah Login', '1', '11:43:03', '2016-05-12');
INSERT INTO `sim_log` VALUES ('177', 'Didik Purwanto ', '2011', 'SMA Berbasis Pesantren Amanatul Ummah Pacet', '', 'Alumni', 'Telah Login', '1', '21:54:32', '2016-05-12');

-- ----------------------------
-- Table structure for sim_perguruantinggi
-- ----------------------------
DROP TABLE IF EXISTS `sim_perguruantinggi`;
CREATE TABLE `sim_perguruantinggi` (
  `IdPT` int(3) NOT NULL AUTO_INCREMENT,
  `PerguruanTinggi` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`IdPT`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sim_perguruantinggi
-- ----------------------------
INSERT INTO `sim_perguruantinggi` VALUES ('1', 'Universitas Syiah Kuala');
INSERT INTO `sim_perguruantinggi` VALUES ('2', 'Universitas Teuku Umar');
INSERT INTO `sim_perguruantinggi` VALUES ('3', 'Universitas Malikussaleh');
INSERT INTO `sim_perguruantinggi` VALUES ('4', 'Universitas Negeri Medan');
INSERT INTO `sim_perguruantinggi` VALUES ('5', 'Universitas Sumatera Utara');
INSERT INTO `sim_perguruantinggi` VALUES ('6', 'Universitas Samudera');
INSERT INTO `sim_perguruantinggi` VALUES ('7', 'Universitas Negeri Padang');
INSERT INTO `sim_perguruantinggi` VALUES ('8', 'Universitas Andalas');
INSERT INTO `sim_perguruantinggi` VALUES ('9', 'Universitas Riau');
INSERT INTO `sim_perguruantinggi` VALUES ('10', 'UIN Sultan Syarif Kasim Riau');
INSERT INTO `sim_perguruantinggi` VALUES ('11', 'Universitas Jambi');
INSERT INTO `sim_perguruantinggi` VALUES ('12', 'Universitas Maritim Raja Ali Haji');
INSERT INTO `sim_perguruantinggi` VALUES ('13', 'Universitas Sriwijaya');
INSERT INTO `sim_perguruantinggi` VALUES ('14', 'UIN Raden Fatah');
INSERT INTO `sim_perguruantinggi` VALUES ('15', 'Universitas Bangka Belitung');
INSERT INTO `sim_perguruantinggi` VALUES ('16', 'Universitas Bengkulu');
INSERT INTO `sim_perguruantinggi` VALUES ('17', 'Universitas Lampung');
INSERT INTO `sim_perguruantinggi` VALUES ('18', 'Institut Teknologi Sumatera');
INSERT INTO `sim_perguruantinggi` VALUES ('19', 'Universitas Negeri Jakarta');
INSERT INTO `sim_perguruantinggi` VALUES ('20', 'Universitas Indonesia');
INSERT INTO `sim_perguruantinggi` VALUES ('21', 'UIN Syarif Hidayatullah Jakarta');
INSERT INTO `sim_perguruantinggi` VALUES ('22', 'UPN Veteran Jakarta');
INSERT INTO `sim_perguruantinggi` VALUES ('23', 'Universitas Singaperbangsa Karawang');
INSERT INTO `sim_perguruantinggi` VALUES ('24', 'Institut Pertanian Bogor');
INSERT INTO `sim_perguruantinggi` VALUES ('25', 'Institut Teknologi Bandung');
INSERT INTO `sim_perguruantinggi` VALUES ('26', 'Universitas Padjadjaran');
INSERT INTO `sim_perguruantinggi` VALUES ('27', 'Universitas Pendidikan Indonesia');
INSERT INTO `sim_perguruantinggi` VALUES ('28', 'UIN Sunan Gunung Djati Bandung');
INSERT INTO `sim_perguruantinggi` VALUES ('29', 'Universitas Siliwangi');
INSERT INTO `sim_perguruantinggi` VALUES ('30', 'Universitas Sultan Ageng Tirtayasa');
INSERT INTO `sim_perguruantinggi` VALUES ('31', 'Universitas Jenderal Soedirman');
INSERT INTO `sim_perguruantinggi` VALUES ('32', 'Universitas Negeri Semarang');
INSERT INTO `sim_perguruantinggi` VALUES ('33', 'Universitas Diponegoro');
INSERT INTO `sim_perguruantinggi` VALUES ('34', 'UIN Walisongo Semarang');
INSERT INTO `sim_perguruantinggi` VALUES ('35', 'Universitas Tidar');
INSERT INTO `sim_perguruantinggi` VALUES ('36', 'Universitas Sebelas Maret');
INSERT INTO `sim_perguruantinggi` VALUES ('37', 'Universitas Gadjah Mada');
INSERT INTO `sim_perguruantinggi` VALUES ('38', 'Universitas Negeri Yogyakarta');
INSERT INTO `sim_perguruantinggi` VALUES ('39', 'UIN Sunan Kalijaga Yogyakarta');
INSERT INTO `sim_perguruantinggi` VALUES ('40', 'UPN Veteran Yogyakarta');
INSERT INTO `sim_perguruantinggi` VALUES ('41', 'Institut Teknologi Sepuluh Nopember');
INSERT INTO `sim_perguruantinggi` VALUES ('42', 'Universitas Negeri Surabaya');
INSERT INTO `sim_perguruantinggi` VALUES ('43', 'Universitas Airlangga');
INSERT INTO `sim_perguruantinggi` VALUES ('44', 'Universitas Trunojoyo Madura');
INSERT INTO `sim_perguruantinggi` VALUES ('45', 'UIN Sunan Ampel Surabaya');
INSERT INTO `sim_perguruantinggi` VALUES ('46', 'UPN Veteran Jawa Timur');
INSERT INTO `sim_perguruantinggi` VALUES ('47', 'Universitas Brawijaya');
INSERT INTO `sim_perguruantinggi` VALUES ('48', 'Universitas Negeri Malang');
INSERT INTO `sim_perguruantinggi` VALUES ('49', 'UIN Malik Ibrahim Malang');
INSERT INTO `sim_perguruantinggi` VALUES ('50', 'Universitas Jember');
INSERT INTO `sim_perguruantinggi` VALUES ('51', 'Universitas Udayana');
INSERT INTO `sim_perguruantinggi` VALUES ('52', 'Universitas Pendidikan Ganesha');
INSERT INTO `sim_perguruantinggi` VALUES ('53', 'Universitas Mataram');
INSERT INTO `sim_perguruantinggi` VALUES ('54', 'Universitas Nusa Cendana');
INSERT INTO `sim_perguruantinggi` VALUES ('55', 'Universitas Timor');
INSERT INTO `sim_perguruantinggi` VALUES ('56', 'Universitas Tanjungpura');
INSERT INTO `sim_perguruantinggi` VALUES ('57', 'Universitas Palangkaraya');
INSERT INTO `sim_perguruantinggi` VALUES ('58', 'Universitas Lambung Mangkurat');
INSERT INTO `sim_perguruantinggi` VALUES ('59', 'Institut Teknologi Kalimantan');
INSERT INTO `sim_perguruantinggi` VALUES ('60', 'Universitas Mulawarman');
INSERT INTO `sim_perguruantinggi` VALUES ('61', 'Universitas Borneo Tarakan');
INSERT INTO `sim_perguruantinggi` VALUES ('62', 'Universitas Negeri Makassar');
INSERT INTO `sim_perguruantinggi` VALUES ('63', 'Universitas Hasanuddin');
INSERT INTO `sim_perguruantinggi` VALUES ('64', 'UIN Alauddin Makassar');
INSERT INTO `sim_perguruantinggi` VALUES ('65', 'Universitas Sulawesi Barat');
INSERT INTO `sim_perguruantinggi` VALUES ('66', 'Universitas Tadulako');
INSERT INTO `sim_perguruantinggi` VALUES ('67', 'Universitas Haluoleo');
INSERT INTO `sim_perguruantinggi` VALUES ('68', 'Universitas Sembila Belas November Kolaka');
INSERT INTO `sim_perguruantinggi` VALUES ('69', 'Universitas Negeri Gorontalo');
INSERT INTO `sim_perguruantinggi` VALUES ('70', 'Universitas Negeri Manado');
INSERT INTO `sim_perguruantinggi` VALUES ('71', 'Universitas Sam Ratulangi');
INSERT INTO `sim_perguruantinggi` VALUES ('72', 'Universitas Pattimura');
INSERT INTO `sim_perguruantinggi` VALUES ('73', 'Universitas Cenderawasih');
INSERT INTO `sim_perguruantinggi` VALUES ('74', 'Universitas Khairun');
INSERT INTO `sim_perguruantinggi` VALUES ('75', 'Universitas Papua');
INSERT INTO `sim_perguruantinggi` VALUES ('76', 'Universitas Musamus Merauke');
INSERT INTO `sim_perguruantinggi` VALUES ('77', 'UIN Sumatra Utara');
INSERT INTO `sim_perguruantinggi` VALUES ('78', 'UIN AR-Raniri');

-- ----------------------------
-- Table structure for sim_pesan
-- ----------------------------
DROP TABLE IF EXISTS `sim_pesan`;
CREATE TABLE `sim_pesan` (
  `IdPesan` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `Pengirim` varchar(255) DEFAULT NULL,
  `Penerima` varchar(255) DEFAULT NULL,
  `Pesan` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `Waktu` datetime DEFAULT NULL,
  PRIMARY KEY (`IdPesan`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sim_pesan
-- ----------------------------
INSERT INTO `sim_pesan` VALUES ('00001', '5111100702', 'A001', 'heyyon', 'Read', '2016-05-12 11:43:43');
INSERT INTO `sim_pesan` VALUES ('00002', '5111100702', 'A001', 'MAS...', 'Read', '2016-05-12 21:55:59');

-- ----------------------------
-- Table structure for sim_tahunlulus
-- ----------------------------
DROP TABLE IF EXISTS `sim_tahunlulus`;
CREATE TABLE `sim_tahunlulus` (
  `IdTahunlulus` int(3) NOT NULL AUTO_INCREMENT,
  `TahunLulus` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`IdTahunlulus`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sim_tahunlulus
-- ----------------------------
INSERT INTO `sim_tahunlulus` VALUES ('1', '2016');
INSERT INTO `sim_tahunlulus` VALUES ('2', '2015');
INSERT INTO `sim_tahunlulus` VALUES ('3', '2014');
INSERT INTO `sim_tahunlulus` VALUES ('4', '2013');
INSERT INTO `sim_tahunlulus` VALUES ('5', '2012');
INSERT INTO `sim_tahunlulus` VALUES ('6', '2011');
INSERT INTO `sim_tahunlulus` VALUES ('7', '2010');
INSERT INTO `sim_tahunlulus` VALUES ('8', '2009');
INSERT INTO `sim_tahunlulus` VALUES ('9', '2008');
INSERT INTO `sim_tahunlulus` VALUES ('10', '2007');
INSERT INTO `sim_tahunlulus` VALUES ('11', '2006');
INSERT INTO `sim_tahunlulus` VALUES ('12', '2005');
INSERT INTO `sim_tahunlulus` VALUES ('13', '2004');
INSERT INTO `sim_tahunlulus` VALUES ('14', '2003');
