<?php
class PDFact{
	
}

class downPDF{
function dP($dataA,$actinfo){
$pdf=new PDF_Chinese(); 
$pdf->AddGBFont('simhe','����'); 
$pdf->Open(); 
$pdf->AddPage(); 
$pdf->SetMargins(15,0,0);
$pdf->SetFont('simhe','',18); 
$pdf->Cell(180,10,"���ʵ����ɼ���",0,0,'C');
$pdf->Ln();
$pdf->SetFont('simhe','',10); 
$data1=array('ѧԺ','ѧ��','����');
$data2=array($dataA[sxy],$dataA[snum],$dataA[sname]);
$data3=array('ʵ���÷�',$dataA[xf],'ѧ��',$dataA[0]);
$data4=".2014��10��01����2014��10��01�չ���8��Сʱ��������ͼ��ݣ��¹ݣ�������ͼ���־Ը����
���0.2�֡�";
$str="";
for($i=0;$i<6;$i++){
	if($i%2==0)
		$pdf->Cell(20,10,$data1[$i/2],1,0,'C');
	else
		$pdf->Cell(40,10,$data2[$i-$i/2],1,0,'L');
}
$pdf->Ln();
foreach($data3 as $val)
$pdf->Cell(45,10,$val,1,0,'C');
$pdf->Ln();
$pdf->Cell(180,8,"�����",1,0,'C');
$pdf->Ln();
$pdf->SetFont('simhe','',12);
for($i=0;$i<count($actinfo);$i++){
	if($i<count($actinfo)-1)
	$pdf->MultiCell(180,8,($i+1).'.'.$actinfo[$i][kssj].'��'.$actinfo[$i][jssj].'    '.$actinfo[$i][shname].'����'.$actinfo[$i][xf].'ѧ�֡�','L,R','L');
    else
	$pdf->MultiCell(180,8,($i+1).'.'.$actinfo[$i][kssj].'��'.$actinfo[$i][jssj].'    '.$actinfo[$i][shname].'����'.$actinfo[$i][xf].'ѧ�֡�','L,R,B','L');
	}
$pdf->SetFont('simhe','',9); 
$pdf->Cell(180,6,"����������ѧԺίԱ������־Ը�߷�������",0,0,'R');
$pdf->Output();
	}      
}
?>


<?php

require_once('PDFdata.php');
require('../common/chinese.php');

//echo $perinfo['xf'];
//print_r($actinfo);
$dp=new downPDF();
$dp->dp($perinfo,$actinfo);



?>
