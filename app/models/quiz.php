<?php
class Quiz extends AppModel {

	var $name = 'Quiz';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Question' => array(
			'className' => 'Question',
			'foreignKey' => 'question_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Pelajaran' => array(
			'className' => 'Pelajaran',
			'foreignKey' => 'pelajaran_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
	);

}
?>