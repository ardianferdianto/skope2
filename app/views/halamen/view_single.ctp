<?php

echo '{
	"tipe":'. json_encode($tipe).',
	"lessonid":'. json_encode($halaman['Halaman']['lesson_id']).',
	"template_type":'. json_encode($halaman['Halaman']['template_type']).',
	"template":'. json_encode($template).',
	"content":'. json_encode($halaman['Halaman']['content']).',
	"file":'. json_encode($halaman['Halaman']['file']).',
	"file_type":'. json_encode($halaman['Halaman']['file_type']).',
	"file_extension":'. json_encode($halaman['Halaman']['file_extension']).',
	"order":'. json_encode($halaman['Halaman']['order']).',
	"id":'. json_encode($halaman['Halaman']['id']).
'}';
?>