<?php
//header("Content-disposition: attachment;");
//header("Content-type: application/pdf");


?>

<?php 
if($tipe ==1){
	$tipe = 'Pilihan Ganda';
}else{
	$tipe = 'Uraian';
}

if($level ==1){
	$level =  'Mudah';
}elseif ($level ==2) {
	$level =  'Sedang';
}elseif ($level == 3) {
	$level = 'Sulit';
}
$no = 0;

$setPertanyaan = '';



$html = '<html>

<head></head>

<body>
<table style="border-bottom:1px solid #000;padding-bottom:10px;">
	<tr>
		<td>Kelas</td>
		<td>: '.$kelas.'</td>
	</tr>
	<tr>
		<td>Bidang Study</td>
		<td>: '.$mapel.'</td>
	</tr>
	<tr>
		<td>Tipe Soal</td>
		<td>: '.$tipe.'</td>
	</tr>
	<tr>
		<td>Level Soal</td>
		<td>: '.$level.'</td>
	</tr>
	<tr>
		<td>Jumlah Soal</td>
		<td>: '.$banyakSoal.'</td>
	</tr>
	
		
</table>

<br/><br/>


<table>

	
	';

	foreach ($questions as $n){
	$no ++;
	$question = $n['Question']['question'];
	$jawabanA = $n['Question']['answer_a'];
	$jawabanB = $n['Question']['answer_b'];
	$jawabanC = $n['Question']['answer_c'];
	$jawabanD = $n['Question']['answer_d'];
	$jawabanUraian = $n['Question']['answer2'];
	$images = $this->webroot.'app/webroot/'.$n['Question']['images'];
	$true = $this->webroot.'app/webroot/img/tick_circle.png';

	if($n['Question']['answer_true']==1){
		$answerA = $jawabanA.'&nbsp;<img style="margin:0 auto;text-align:center;" align="center" src="'.$true.'" width="9px"/><br/><br/>';
	}else{
		$answerA = $jawabanA.'<br/><br/>';
	}
	if($n['Question']['answer_true']==2){
		$answerB = $jawabanB.'&nbsp;<img style="margin:0 auto;text-align:center;" align="center" src="'.$true.'" width="9px"/><br/><br/>';
	}else{
		$answerB = $jawabanB.'<br/><br/>';
	}
	if($n['Question']['answer_true']==3){
		$answerC = $jawabanC.'&nbsp;<img style="margin:0 auto;text-align:center;" align="center" src="'.$true.'" width="9px"/><br/><br/>';
	}else{
		$answerC = $jawabanC.'<br/><br/>';
	}

	if($n['Question']['answer_true']==4){
		$answerD = $jawabanD.'&nbsp;<img style="margin:0 auto;text-align:center;" align="center" src="'.$true.'" width="9px"/><br/><br/>';
	}else{
		$answerD = $jawabanD.'<br/><br/>';
	}
	//$jawabanBenar = $n['Question']['answer_true'];
	//if ($n['Question']['tipe'] == 1){

	$html .= '<tr>';

	if($n['Question']['tipe'] == 1){
		$html .= '<td>'.$no.'.&nbsp;&nbsp;&nbsp;&nbsp;'.$question.'<br/><br/>
		a. &nbsp;'.$answerA.'
		b. &nbsp;'.$answerB.'
		c. &nbsp;'.$answerC.'
		d. &nbsp;'.$answerD.'</td>';

	}else{
		$html .= '<td>'.$no.'.&nbsp;&nbsp;&nbsp;&nbsp;'.$question.'<br/><br/> 
		<strong>Jawaban: '.$jawabanUraian.'</strong><br/><br/></td>';	
	}

	if($n['Question']['images'] != null){
		$html.='<td><img style="margin:0 auto;text-align:center;" align="center" src="'.$images.'" width="100" /></td> ';
	}else{
		$html.='<td></td> ';
	}

	$html .= '</tr>';
	
	//}else{
	//	$setPertanyaan .= '<h6>'.$no.'.&nbsp;&nbsp;&nbsp;&nbsp;'.$question.'</h6><br/><br/> 
	//	Jawaban : &nbsp;'.$jawabanUraian.'<br/><br/><br/>';
	//}


}
$html.='
	
</table>

</body>

</html>';

App::import('Vendor','xtcpdf');
$tcpdf = new XTCPDF('P', 'mm', 'F4', true, 'UTF-8', false);
$textfont = 'freesans';
$tcpdf->AddPage();

// Now you position and print your page content
// example:
$tcpdf->SetTextColor(0, 0, 0);
$tcpdf->SetFont($textfont,”,9);
$tcpdf->writeHTML($html, true, false, true, false, ”);
$tcpdf->Output('soal-'.$mapel.'-'.$tipe.'-'.$level.'.pdf', 'I');
?>