<?php
class QuizzsQuestion extends AppModel {

	var $name = 'QuizzsQuestion';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Quizz' => array(
			'className' => 'Quizz',
			'foreignKey' => 'quizz_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Question' => array(
			'className' => 'Question',
			'foreignKey' => 'question_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	/*var $validate = array(

		'quizz_id' => array(

			'unique' => array(
				'rule' => array('checkUnique', 'quizz_id'),
				'message' => 'Soal telah ada sebelumnya'
			)
		),
		'question_id' => array(

			'unique' => array(
				'rule' => array('checkUnique', 'question_id'),
				'message' => 'Soal telah ada sebelumnya'
			)
		)
	);

	 function checkUnique($data, $fieldName) {
	   	$valid = false;
	   	if(isset($fieldName) && $this->hasField($fieldName)) {
	   		$valid = $this->isUnique(array($fieldName => $data));
	   	}
	   	return $valid;
	   }*/

}
?>