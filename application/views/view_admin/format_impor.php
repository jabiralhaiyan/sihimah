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
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, 1, 'Username');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, 1, 'Password');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, 1, 'NamaLengkap');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, 1, 'NamaPanggilan');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, 1, 'JenisKelamin');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, 1, 'TempatLahir');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, 1, 'TanggalLahir');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, 1, 'Lembaga');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, 1, 'TahunLulus');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, 1, 'Cabang');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10, 1, 'AlamatAsal');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, 1, 'AlamatSekarang');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12, 1, 'Facebook');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13, 1, 'Twitter');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(14, 1, 'Blog');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(15, 1, 'Instagram');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(16, 1, 'Line');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(17, 1, 'Email');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(18, 1, 'NoHP');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(19, 1, 'Hobi');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(20, 1, 'Cita_Cita');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(21, 1, 'Motto');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(22, 1, 'Prestasi');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(23, 1, 'PerguruanTinggi');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(24, 1, 'Jurusan');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(25, 1, 'TempatKerja');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(26, 1, 'Kesibukan');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(27, 1, 'NamaOrtu');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(28, 1, 'PendidikanOrtu');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(29, 1, 'PekerjaanOrtu');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(30, 1, 'KontakOrtu');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(31, 1, 'LinkFoto');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(32, 1, 'TanggalUpdate');

    $objPHPExcel->setActiveSheetIndex(0);

            //change the font size
    $objPHPExcel->getActiveSheet()->getStyle('A1:AG1')->getFont()->setSize(12);
            //make the font become bold
    $objPHPExcel->getActiveSheet()->getStyle('A1:AG1')->getFont()->setBold(true);
            //set Color
    //$objPHPExcel->getActiveSheet()->getStyle('A1:AC1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('92D14F');

            //set title pada sheet (me rename nama sheet)
    $objPHPExcel->getActiveSheet()->setTitle('Format Impor');

            //mulai menyimpan excel format xlsx, kalau ingin xls ganti Excel2007 menjadi Excel5          
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

            //sesuaikan headernya 
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header("Cache-Control: no-store, no-cache, must-revalidate");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            //ubah nama file saat diunduh
    header('Content-Disposition: attachment;filename="Format Impor.xlsx"');
            //unduh file
    $objWriter->save("php://output");

            //Mulai dari create object PHPExcel itu ada dokumentasi lengkapnya di PHPExcel, 
            // Folder Documentation dan Example
            // untuk belajar lebih jauh mengenai PHPExcel silakan buka disitu
    ?>