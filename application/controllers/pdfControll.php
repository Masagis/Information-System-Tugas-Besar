<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pdfControll extends CI_Controller {
    public function __construct(){
        parent :: __construct();
    }

    //fungsi untuk cetak laporan pdf
    public function SuratKelulusan(){	
		$pdf = new FPDF('P','mm','A4');	//L = lanscape P= potrait		
		$pdf->SetLeftMargin(20);
        $pdf->SetTopMargin(0);
        // membuat halaman baru
        $pdf->AddPage();
         // mengambil gambar untuk header/kopsurat
        $pdf->Image('./assets/img/header.jpg',20,null,169,36,'JPG');
         // setting jenis font yang akan digunakan		
		$pdf->SetFont('Times','B',14);
		$this->load->model('Menu_model');
        $data=$this->Menu_model->getUnduh();
           // mencetak string 
        $pdf->Cell(169,4,'',0,2);
        $pdf->Cell(43,4,'',0,0);$pdf->Cell(85,5,'SURAT KETERANGAN KELULUSAN','B',0,'C');
        $pdf->Cell(169,4,'',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(169,15,'',0,2);
        $pdf->SetFont('Times','',12);
        $pdf->Cell(169,7,'Yang bertanda tangan dibawah ini Ketua Program Studi Teknik Sipil Institut Teknologi Sumatera,',0,2,'L');
        $pdf->Cell(169,7,'menyatakan bahwa :',0,1,'L');
        $pdf->Cell(169,10,'',0,1);
        $pdf->SetFont('Times','B',16);
        $pdf->Cell(169,8,$data['name'],0,2,'C');
        $pdf->Cell(169,10,'',0,1);
        // Memberikan space
        $pdf->SetFont('Times','',12);
        $pdf->Cell(169,7,'Dinyatakan,',0,1,'C');
        // Memberikan space
        $pdf->SetFont('Times','B',14);
        $pdf->Cell(169,8,'LULUS/TIDAK LULUS',0,3,'C');
        // Memberikan space
        $pdf->SetFont('Times','',12);
        $pdf->Cell(55,7,'Dalam mengikuti Tugas Besar,',0,0,'L'); //$pdf->Cell(60,7,$data['mk2'],0,1);
        $pdf->Cell(149,7,'Demikian surat keterangan ini dibuat dan diberikan kepada yang bersangkutan untuk dipergunakan',0,2,'L');
        $pdf->Cell(149,7,'sebagaimana mestinya.',0,2,'L');
        // Memberikan space
        $pdf->Cell(169,7,'',0,1);
        $pdf->SetFont('Times','',12);
        $pdf->Cell(169,7,'Lampung Selatan,...............................',0,1,'R');
        $pdf->Cell(169,7,'Ketua Program Studi/Yang Mewakili',0,1,'R');
        $pdf->Cell(169,20,'',0,3);
        $pdf->Cell(104,4,'',0,0);$pdf->Cell(50,5,'Ir.Titi Liliani Soedirjo, M.Sc','B',0,'L');
        $pdf->Cell(60,5,'',0,1);
        $pdf->Cell(104,7,'',0,0);$pdf->Cell(70,7,'NIP.19550221 198211 2001',0,0,'L');

            $pdf->Output();
            $pdf->Stream(array("Attachment" => FALSE));
        }
    }
