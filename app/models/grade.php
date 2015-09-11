<?php
class Grade extends AppModel {

	var $name = 'Grade';

	var $hasMany = array(
		'Lesson' => array(
			'className' => 'Lesson',
			'foreignKey' => 'grade_id',
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