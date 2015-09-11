<?php
header("Content-disposition: attachment; filename=".$ebook['Ebook']['title']."");
header("Content-type: application/pdf");
readfile($ebook['Ebook']['pdffile']);
?>