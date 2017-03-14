<?php
class PDFact{
	
}

class downPDF{
function dP($dataA,$actinfo){
$pdf=new PDF_Chinese(); 
$pdf->AddGBFont('simhe','黑体'); 
$pdf->Open(); 
$pdf->AddPage(); 
$pdf->SetMargins(15,0,0);
$pdf->SetFont('simhe','',18); 
$pdf->Cell(180,10,"社会实践活动成绩单",0,0,'C');
$pdf->Ln();
$pdf->SetFont('simhe','',10); 
$data1=array('学院','学号','姓名');
$data2=array($dataA[sxy],$dataA[snum],$dataA[sname]);
$data3=array('实践得分',$dataA[xf],'学分',$dataA[0]);
$data4=".2014年10月01日至2014年10月01日共（8）小时于肇庆市图书馆（新馆）肇庆市图书馆志愿服务
获得0.2分。";
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
$pdf->Cell(180,8,"活动详情",1,0,'C');
$pdf->Ln();
$pdf->SetFont('simhe','',12);
for($i=0;$i<count($actinfo);$i++){
	if($i<count($actinfo)-1)
	$pdf->MultiCell(180,8,($i+1).'.'.$actinfo[$i][kssj].'至'.$actinfo[$i][jssj].'    '.$actinfo[$i][shname].'活动获得'.$actinfo[$i][xf].'学分。','L,R','L');
    else
	$pdf->MultiCell(180,8,($i+1).'.'.$actinfo[$i][kssj].'至'.$actinfo[$i][jssj].'    '.$actinfo[$i][shname].'活动获得'.$actinfo[$i][xf].'学分。','L,R,B','L');
	}
$pdf->SetFont('simhe','',9); 
$pdf->Cell(180,6,"共青团肇庆学院委员会青年志愿者服务中心",0,0,'R');
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
