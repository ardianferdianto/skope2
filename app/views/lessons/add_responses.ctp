<?php

echo '{
	"flashMessage":'. json_encode($flashMessage).',
	"lessonName":'. json_encode($lesson['Lesson']['title']).',
	"lessonAuthor":'. json_encode($lesson['Lesson']['author']).',
	"lessonPelajaran":'. json_encode($lesson['Pelajaran']['nama']).',
	"lessonKelas":'. json_encode($lesson['Lesson']['kelas']).',
	"color":'. json_encode($lesson['Lesson']['color']).',
	"description":'. json_encode($lesson['Lesson']['description']).',
	"status":'. json_encode($status) .',
	"tipe":'. json_encode($tipe) .',
	"id":'. json_encode($idtoResponse).
'}';
?>