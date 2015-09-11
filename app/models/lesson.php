<?php
class Lesson extends AppModel {

	var $name = 'Lesson';

	var $belongsTo = array(
		'Pelajaran' => array(
	      'className' => 'Pelajaran',
	      'foreignKey'=> 'pelajaran_id'
	   	),
		'Grade' => array(
	      'className' => 'Grade',
	      'foreignKey'=> 'id'
	   	),
	);

	var $hasMany = array(
		'Halaman' => array(
			'className' => 'Halaman',
			'foreignKey' => 'lesson_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
	);

}
?>