<?php

  
/*echo '{"status":'. json_encode($user) .',"user_fullname":'. json_encode($usercheck['User']['name']) .',"user_sex":'. json_encode($usercheck['User']['sex']) .',"user_age":'. json_encode($usercheck['User']['age']) .',"user_address":'. json_encode($usercheck['User']['address']) .',"user_phone":'. json_encode($usercheck['User']['phone']) .'}'; */

echo '{
	"status":'. json_encode($status) .',
	"flashMessage":'. json_encode($flashMessage).',
	"coverbg":'. json_encode($video['Video']['cover']).',
	"title":'. json_encode($video['Video']['title']).',
	"sutradara":'. json_encode($video['Video']['sutradara']).',
	"produksi":'. json_encode($video['Video']['produksi']).',
	"details":'. json_encode($video['Video']['details']).',
	"fileLocation":'. json_encode($video['Video']['file']).',
	"idtodelete":'. json_encode($idtoResponse).'}';
?>
