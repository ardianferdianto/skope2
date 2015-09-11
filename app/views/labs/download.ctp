<?php
// We'll be outputting a PDF
echo $this->webroot.'files/labs/'.$filename;

// It will be called downloaded.pdf
header('Content-Disposition: attachment;');


?>