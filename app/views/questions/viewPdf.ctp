<?php 
$html = '<html>

<head></head>

<body><table>Halo Dunia!!</table>

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
$tcpdf->Output('filename.pdf', 'I');

?>