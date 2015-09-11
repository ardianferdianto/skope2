<?php
class UraianAnswer extends AppModel {

	var $name = 'UraianAnswer';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		
		'Question' => array(
			'className' => 'Question',
			'foreignKey' => 'question_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Quizz' => array(
			'className' => 'Quizz',
			'foreignKey' => 'quizz_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>