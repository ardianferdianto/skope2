<?php

$no = 0;
for ($i=0; $i <= $number ; $i++) { 
	$no++;
	
	echo '\<\PageData PageFile="pages/page('.$no.').jpg"
		ZoomFiles="pages/page('.$no.').jpg[200%]pages/page('.$no.').jpg[300%]pages/page('.$no.').jpg[500%]"
		MainBGImage="backgrounds/office.jpg"
		PrintFile="pages/page('.$no.').jpg"
		/><br/>';
}

?>