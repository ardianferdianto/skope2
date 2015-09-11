<?php
class Question extends AppModel {

	var $name = 'Question';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		
		'Pelajaran' => array(
		       'className' => 'Pelajaran',
		       'foreignKey'=> 'pelajaran_id'
		   ),
	);
	var $hasAndBelongsToMany = array(
		'Quizz' =>
		array(
			'className' => 'Quizz',
			'joinTable' => 'quizzs_questions',
			'foreignKey' => 'question_id',
			'associationForeignKey' => 'quizz_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);
	var $hasMany = array(
		'Answer',
		'UraianAnswer' => array(
			'className' => 'UraianAnswer',
			'foreignKey' => 'question_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
		
	);

}
?>