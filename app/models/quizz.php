<?php
class Quizz extends AppModel {

	var $name = 'Quizz';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		
		
		'UraianAnswer' => array(
			'className' => 'UraianAnswer',
			'foreignKey' => 'quizz_id',
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
	
	var $hasAndBelongsToMany = array(
		'Question' =>
		array(
			'className' => 'Question',
			'joinTable' => 'quizzs_questions',
			'foreignKey' => 'quizz_id',
			'associationForeignKey' => 'question_id',
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
	var $belongsTo = array(
		'Pelajaran' => array(
		       'className' => 'Pelajaran',
		       'foreignKey'=> 'pelajaran_id'
		   ),
		
		
	);

}
?>