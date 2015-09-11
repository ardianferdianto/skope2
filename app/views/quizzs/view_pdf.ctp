<?php
// We'll be outputting a PDF
header('Content-type: application/pdf');

// It will be called downloaded.pdf
header('Content-Disposition: attachment; ');


?>

<?php
$banyakSoal = count($quizz['Question']);
$kodeKuis = $quizz['Quizz']['kode'];
$tanggalDibuat = $quizz['Quizz']['created'];
$oleh = $quizz['User']['nama'];
$waktu = $quizz['Quizz']['time'];
$mapel = $quizz['Pelajaran']['nama'];
$kelas = $quizz['Quizz']['kelas'];

$html = '<html>

<head></head>

<body>
<table style="border-bottom:1px solid #000;padding-bottom:10px;">
	<tr>
		<td>Kode kuis</td>
		<td>: '.$kodeKuis.'</td>
	</tr>
	<tr>
		<td>Mata Pelajran</td>
		<td>: '.$mapel.'</td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td>: '.$kelas.'</td>
	</tr>
	<tr>
		<td>Tanggal Dibuat</td>
		<td>: '.$tanggalDibuat.'</td>
	</tr>
	<tr>
		<td>Oleh</td>
		<td>: '.$oleh.'</td>
	</tr>
	<tr>
		<td>Waktu</td>
		<td>: '.$waktu.' menit</td>
	</tr>
	<tr>
		<td>Jumlah Soal</td>
		<td>: '.$banyakSoal.'</td>
	</tr>
	
		
</table>

<br/><br/>


<table>

	
	';

foreach ($quizz['Question'] as $n){
	$no ++;
	$question = $n['question'];
	$jawabanA = $n['answer_a'];
	$jawabanB = $n['answer_b'];
	$jawabanC = $n['answer_c'];
	$jawabanD = $n['answer_d'];
	//$jawabanUraian = $n['answer_a'];
	$images = $this->webroot.'app/webroot/'.$n['images'];
	//$true = $this->webroot.'app/webroot/img/accept.gif';

	/*if($n['Question']['answer_true']==1){
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
	}*/
	//$jawabanBenar = $n['Question']['answer_true'];
	//if ($n['Question']['tipe'] == 1){

	$html .= '<tr>';

	if($n['tipe'] == 1){
		$html .= '<td>'.$no.'.&nbsp;&nbsp;&nbsp;&nbsp;'.$question.'<br/><br/>
		a. &nbsp;'.$jawabanA.'<br/><br/>
		b. &nbsp;'.$jawabanB.'<br/><br/>
		c. &nbsp;'.$jawabanC.'<br/><br/>
		d. &nbsp;'.$jawabanD.'<br/><br/></td>';

	}else{
		$html .= '<td>'.$no.'.&nbsp;&nbsp;&nbsp;&nbsp;'.$question.'<br/><br/> 
		___________________________________________________<br/><br/></td>';	
	}

	if($n['images'] != null){
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



ob_clean();
App::import('Vendor','xtcpdf');
//$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, false, 'ISO-8859-1', false);
$tcpdf = new XTCPDF('P', 'mm', 'F4', false, 'ISO-8859-1', false);
$textfont = 'helvetica';
$tcpdf->AddPage();

// Now you position and print your page content
// example:
$tcpdf->SetTextColor(0, 0, 0);
$tcpdf->SetFont($textfont,'',9);
$tcpdf->writeHTML($html, true, false, true, false, '');
$tcpdf->Output('tryout-'.$kodeKuis.'.pdf', 'FD');


?>



