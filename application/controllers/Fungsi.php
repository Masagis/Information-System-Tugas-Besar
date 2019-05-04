<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fungsi extends CI_Controller {

    public function __construct(){
        parent :: __construct();
        $this->load->model('Kelompok_model');   
    }

      //fungsi download data
    public function export(){
        // Load plugin PHPExcel nya
        include APPPATH.'libraries/PHPExcel.php';
        
        // Panggil class PHPExcel nya
        $excel = new PHPExcel();
    
        // Settingan awal fil excel
        $excel->getProperties()->setCreator('DATA KELOMPOK')
                     ->setLastModifiedBy('Pembagian anggota kelompok')
                     ->setTitle("Data Mahasiswa")
                     ->setSubject("Tugas besar")
                     ->setDescription("pembagian kelompok tugas besar")
                     ->setKeywords("pembagian kelompok");
    
        // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
        $style_col = array(
          'font' => array('bold' => true), // Set font nya jadi bold
          'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
          ),
          'borders' => array(
            'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
            'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
            'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
          )
        );
    
        // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
        $style_row = array(
          'alignment' => array(
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
          ),
          'borders' => array(
            'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
            'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
            'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
          )
        );
    
        $excel->setActiveSheetIndex(0)->setCellValue('A1', "DATA TUBES MAHASISWA T.SIPIL"); // Set kolom A1 dengan Judul excel
        $excel->getActiveSheet()->mergeCells('A1:G2'); // Set Merge Cell pada kolom A1 sampai E1
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
        $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
    
        // Buat header tabel nya pada baris ke 3
        $excel->setActiveSheetIndex(0)->setCellValue('A4', "NO");
        $excel->setActiveSheetIndex(0)->setCellValue('B4', "NIM"); 
        $excel->setActiveSheetIndex(0)->setCellValue('C4', "NAMA");
        $excel->setActiveSheetIndex(0)->setCellValue('D4', "KELAS");
        $excel->setActiveSheetIndex(0)->setCellValue('E4', "MATA KULIAH");
        $excel->setActiveSheetIndex(0)->setCellValue('F4', "KELOMPOK");
        $excel->setActiveSheetIndex(0)->setCellValue('G4', "TAHUN");
        
        // Apply style header yang telah kita buat tadi ke masing-masing kolom header
        $excel->getActiveSheet()->getStyle('A4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('B4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('C4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('D4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('E4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('F4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('G4')->applyFromArray($style_col);

        // Panggil function getanggota yang ada di model untuk mengambil database
        $kelompok = $this->Kelompok_model->getKelompok();
        $no = 1;
    
        $numrow = 5; // Set baris pertama untuk isi tabel adalah baris ke 4
        foreach($kelompok as $data){ // Lakukan looping pada variabel kelompok
          $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
          $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->nim);
          $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->nama);
          $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->kelas);
          $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->matkul);
          $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data->kelompok);
          $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data->tahun);
          
          // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
          $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);

          $numrow++; // Tambah 1 setiap kali looping
          $no++;
        }
    
        // Set width kolom
        $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); 
        $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); 
        $excel->getActiveSheet()->getColumnDimension('C')->setWidth(30); 
        $excel->getActiveSheet()->getColumnDimension('D')->setWidth(10); 
        $excel->getActiveSheet()->getColumnDimension('E')->setWidth(40); 
        $excel->getActiveSheet()->getColumnDimension('F')->setWidth(15); 
        $excel->getActiveSheet()->getColumnDimension('G')->setWidth(10); 
        
        // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
        $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
    
        // Set orientasi kertas jadi LANDSCAPE
        $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
    
        // Set judul file excel nya
        $excel->getActiveSheet(0)->setTitle("Data Mahasiswa Tubes");
        $excel->setActiveSheetIndex(0);
    
        // Proses file excel
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Pembagian kelompok.xlsx"'); // Set nama file excel nya
        header('Cache-Control: max-age=0');
    
        $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
        $write->save('php://output');
      }
}