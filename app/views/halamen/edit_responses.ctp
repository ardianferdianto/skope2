<?php

echo '{
	"flashMessage":'. json_encode($flashMessage).',
	"status":'. json_encode($status) .',
	"page":'. json_encode($page) .',
	"id":'. json_encode($idtoResponse).
'}';
?>