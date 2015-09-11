<?php

echo '{
	"flashMessage":'. json_encode($flashMessage).',
	"status":'. json_encode($status) .',
	"page":'. json_encode($page) .',
	"order":'. json_encode($page['Halaman']['order']) .',
	"id":'. json_encode($idtoResponse).
'}';
?>