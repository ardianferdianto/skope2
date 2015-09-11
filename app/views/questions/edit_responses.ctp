<?php

  
/*echo '{"status":'. json_encode($user) .',"user_fullname":'. json_encode($usercheck['User']['name']) .',"user_sex":'. json_encode($usercheck['User']['sex']) .',"user_age":'. json_encode($usercheck['User']['age']) .',"user_address":'. json_encode($usercheck['User']['address']) .',"user_phone":'. json_encode($usercheck['User']['phone']) .'}'; */

echo '{
	"status":'. json_encode($status) .',
	"flashMessage":'. json_encode($flashMessage).',
	"question":'. json_encode($question['Question']['question']).',
	"tipe":'. json_encode($question['Question']['target']).',
	"answer_a":'. json_encode($question['Question']['answer_a']).',
	"answer_b":'. json_encode($question['Question']['answer_b']).',
	"answer_c":'. json_encode($question['Question']['answer_c']).',
	"answer_d":'. json_encode($question['Question']['answer_d']).',
	"answer_uraian":'. json_encode($question['Question']['answer2']).',
	"answer_true":'. json_encode($question['Question']['answer_true']).',
	"images":'. json_encode($question['Question']['images']).',
	"video":'. json_encode($question['Question']['video']).',
	"idtoResponse":'. json_encode($idtoResponse).'}';
?>