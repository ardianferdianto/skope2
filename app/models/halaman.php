<?php
class Halaman extends AppModel {

	var $name = 'Halaman';

	var $belongsTo = array(
		'Lesson' => array(
	      'className' => 'Lesson',
	      'foreignKey'=> 'lesson_id'
	   	),

	);

}
?>