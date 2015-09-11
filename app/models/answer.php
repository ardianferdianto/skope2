<?php
class Answer extends AppModel {

	var $name = 'Answer';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Question'
		);

}
?>