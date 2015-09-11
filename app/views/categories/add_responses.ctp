<?php

echo '{
	"flashMessage":'. json_encode($flashMessage).',
	"nametoResponse":'. json_encode($nametoResponse).',
	"status":'. json_encode($status) .',
	"idtodelete":'. json_encode($idtoResponse).
'}';
?>