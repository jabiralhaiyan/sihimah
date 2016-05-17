<?php 
 //membuat objek PHPExcel
$objPHPExcel = new PHPExcel();

            //set Sheet yang akan diolah 
/*
 //First sheet
    $sheet = $objPHPExcel->getActiveSheet();

    //Start adding next sheets
    
    $countsheet=0;
    while ($countsheet < 3) {

    // Add new sheet
    $objWorkSheet = $objPHPExcel->createSheet($countsheet); //Setting index when creating
    

    // Rename sheet
    $objWorkSheet->setTitle("$countsheet");

    $countsheet++;
    }
*/

    $objPHPExcel->setActiveSheetIndex(0);

//header
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, 1, 'Nama Lengkap');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, 1, 'Nama Panggilan');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, 1, 'Jenis Kelamin');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, 1, 'Tempat Lahir');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, 1, 'Tanggal Lahir');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, 1, 'Lembaga');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, 1, 'Tahun Lulus');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, 1, 'Cabang');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, 1, 'Alamat Asal');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, 1, 'Alamat Sekarang');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10, 1, 'Facebook');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, 1, 'Twitter');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12, 1, 'Blog');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13, 1, 'Instagram');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(14, 1, 'Line');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(15, 1, 'Email');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(16, 1, 'NoHP');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(17, 1, 'Hobi');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(18, 1, 'Cita-Cita');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(19, 1, 'Motto');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(20, 1, 'Prestasi');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(21, 1, 'Perguruan Tinggi');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(22, 1, 'Jurusan');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(23, 1, 'Tempat Kerja');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(24, 1, 'Kesibukan');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(25, 1, 'Nama OrTu');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(26, 1, 'Pendidikan OrTu');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(27, 1, 'Pekerjaan Ortu');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(28, 1, 'Kontak Ortu');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(29, 1, 'Tanggal Update');


    $i=2;
    foreach ($dataalumni->result() as $row){
            //isi atau content
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $i, $row->NamaLengkap);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, $i, $row->NamaPanggilan);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, $i, $row->JenisKelamin);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, $i, $row->TempatLahir);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, $i, $row->TanggalLahir);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, $i, $row->Lembaga);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, $i, $row->TahunLulus);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, $i, $row->Cabang);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, $i, $row->AlamatAsal);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, $i, $row->AlamatSekarang);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10, $i, $row->Facebook);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, $i, $row->Twitter);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12, $i, $row->Blog);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13, $i, $row->Instagram);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(14, $i, $row->Line);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(15, $i, $row->Email);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(16, $i, $row->NoHP);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(17, $i, $row->Hobi);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(18, $i, $row->Cita_Cita);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(19, $i, $row->Motto);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(20, $i, $row->Prestasi);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(21, $i, $row->PerguruanTinggi);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(22, $i, $row->Jurusan);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(23, $i, $row->TempatKerja);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(24, $i, $row->Kesibukan);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(25, $i, $row->NamaOrtu);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(26, $i, $row->PendidikanOrtu);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(27, $i, $row->PekerjaanOrtu);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(28, $i, $row->KontakOrtu);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(29, $i, $row->TanggalUpdate);
        
        $i++;
    }

    $objPHPExcel->setActiveSheetIndex(0);

            //change the font size
    $objPHPExcel->getActiveSheet()->getStyle('A1:AC1')->getFont()->setSize(12);
			//make the font become bold
    $objPHPExcel->getActiveSheet()->getStyle('A1:AC1')->getFont()->setBold(true);
            //set Color
    $objPHPExcel->getActiveSheet()->getStyle('A1:AC1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('92D14F');

            //set title pada sheet (me rename nama sheet)
    $objPHPExcel->getActiveSheet()->setTitle('Database_HIMAH');

            //mulai menyimpan excel format xlsx, kalau ingin xls ganti Excel2007 menjadi Excel5          
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

            //sesuaikan headernya 
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header("Cache-Control: no-store, no-cache, must-revalidate");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            //ubah nama file saat diunduh
    header('Content-Disposition: attachment;filename="Database_HIMAH.xlsx"');
            //unduh file
    $objWriter->save("php://output");

            //Mulai dari create object PHPExcel itu ada dokumentasi lengkapnya di PHPExcel, 
            // Folder Documentation dan Example
            // untuk belajar lebih jauh mengenai PHPExcel silakan buka disitu
    ?>